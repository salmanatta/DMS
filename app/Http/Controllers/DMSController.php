<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Section;
use Illuminate\Http\Request;

class DMSController extends Controller
{
    public function login()
    {
        return view('dms.login');
    }
    public function sectionList()
    {
        $sections = Section::all();
    //    dd($sections);
        return view('dms.section-list',compact('sections'));
    
    }

    public function createSection()
    {
        $sections = Section::where('parent_id' , NULL)->get();        
        return view('dms.section-form',compact('sections'));
    }

    public function insertSection(Request $request)
    {
//        dd($request);
        $request->validate(
            [
                'sectionName'=>['required','string'],
            ]
        );
        Section::create([
            'name'=> $request->sectionName,
            'parent_id'=> $request->parentSection,
            ]);

        return redirect('section-list')->with('success','Record Add Successfully');
    }
    public function editSection($id)
    {
        $sec = Section::find($id);
        $sections = Section::where('parent_id' , NULL)->get();   
        return view('dms.section-form',compact('sec','sections'));        
    }
    public function updateSection(Request $request,$id)    
    {
        
        $data = Section::find($id);        
        $data->parent_id = $request->parentSection;
        $data->name = $request->sectionName;
        $data->save();
        return redirect('section-list')->with('success','Record Updated Successfully');
    }
    public function documentList()
    {
        $documents = Document::all();
        // dd($documents);
        return view('dms.document-list' , compact('documents'));
    }
    public function createDocument()    
    {
        $sections = Section::whereNotNull('parent_id')->get();        
        return view('dms.document-form',compact('sections'));
    }
    public function insertDocument(Request $request)
    {
        $request->validate([
                'documentname'=>'required',
                'version'=>'required',
                'section'=>'required',
                'keywords'=>'required',
            ]);
        $obj = new Document(); 
        $obj->name          = $request->documentname;
        $obj->version       = $request->version;
        $obj->section_id    = $request->section;
        $obj->keywords      = $request->keywords;
        $obj->user_id       = auth()->user()->id;
        
        if ($request->file('attachment'))
        {
            $file = $request->file('attachment');
            $file = $file->store('/', ['attachments' => 'attachment']);
            $obj->file_path = $file;
        }
        $obj->save();

        return redirect()->to('document-list')->with('success','Record Added Successfully');
    }
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
    public function documentView()
    {
        $parentData = Section::whereNull('parent_id')->get();
        $childData = Section::whereNotNull('parent_id')->get();
        $documents = Document::all(); 
        return view('dms.document-view',compact('parentData','childData','documents'));
    }
    public function getDocumentView($id)
    {
        $documents = Document::where('section_id','=',$id)->get();
        return response()->json([
            'documents' => $documents,
        ]);
    }
}
