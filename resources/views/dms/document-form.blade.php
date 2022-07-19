@extends('template.header')
@section('section')
    <div class="content-wrapper">
        <div style="width: 40%" class="mx-auto">
            <div class="content-header row">
                <div class="content-header-left col-md-12 col-12 mb-2">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">New Document</h2>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="content-body">
            @if(isset($sec))
            <form class="form" action="{{url('edit-section/'.$sec->id)}}" method="POST">
                @method('PATCH')
                <input type="hidden" name="id" value="{{ $sec->id}}">
            @else                   
            <form class="form" action="{{url('add-document')}}" method="POST" enctype="multipart/form-data">
            @endif           
                @csrf
                <div style="width: 40%" class="mx-auto">
                    <div class="card">                    
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="section-name">Document Name</label>
                                        <input type="text" id="documentname" class="form-control" placeholder="" name="documentname" value="">
                                        <span style="color:red">{{ $errors->first('documentname') }}</span>                                    
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="section-name">Version</label>
                                        <input type="text" id="section-name" class="form-control" placeholder="" name="version" value="">
                                        <span style="color:red">{{ $errors->first('version') }}</span>                                    
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="section">Section</label>
                                        <select class="form-control" name="section" id="section">
                                            <option selected="selected" value="">-- Select Section --</option>
                                            @foreach($sections as $section)                                                  
                                               <option value="{{ $section->id }}" {{ isset($sec) ? ($sec->parent_id == $section->id ? 'selected' : '' ) : '' }}>{{$section->name}} </option>
                                            @endforeach
                                        </select>
                                        <span style="color:red">{{ $errors->first('section') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="keywords">Keywords</label>
                                        <textarea class="form-control" name="keywords" id="OtherMedication"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="keywords">Chapter</label>
                                        <input type="text" class="form-control" name="chapter" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="keywords">Standard</label>
                                        <input type="text" class="form-control" name="standard"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3">
                                    <label class="form-label w-100">Attach File</label>
                                    <input type="file" accept=".pdf,.docx" id="filename" name="attachment"
                                           class="file-upload-field" multiple onchange="validateFileType(this)">
                                </div>
                            </div>
                            <div class="row">
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success waves-effect waves-float waves-light me-1" data-bs-toggle="modal" data-bs-target="#add-payment-sidebar">
                                        Save
                                    </button>
                                    <a href="{{ url('document-list') }}" class="btn btn-danger waves-effect waves-float waves-light mx-0">Exit</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
            </form>
        </div>
    </div>
@endsection
