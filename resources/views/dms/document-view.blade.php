@extends('template.header')
@section('section')
{{-- {{  auth()->user()->name}} --}}
@if(Session::get('success'))
        <div class="alert alert-success alert-block py-2 px-2 d-flex justify-content-between" style="width: 500px">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">        
        <div class="col-md-2">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <div class="row">
                            <div id="jstree-basic" class="jstree jstree-1 jstree-default" role="tree"
                                aria-multiselectable="true" tabindex="0" aria-activedescendant="j1_1" aria-busy="false">
                                <ul class="jstree-container-ul jstree-children" role="group">
                                    @foreach ($parentData as $pdata)
                                        <li role="none" data-jstree="{&quot;icon&quot; : &quot;far fa-folder&quot;}"
                                            id="j1_{{ $pdata->id }}" class="jstree-node jstree-open">
                                            <i class="jstree-icon jstree-ocl" role="presentation"></i>
                                            <a class="jstree-anchor jstree-clicked" href="#" tabindex="-1"
                                                role="treeitem" aria-selected="true" aria-level="1" aria-expanded="true"
                                                id="j1_{{ $pdata->id }}_anchor">
                                                <i
                                                    class="jstree-icon jstree-themeicon far fa-folder jstree-themeicon-custom"role="presentation"></i>
                                                <b>{{ $pdata->name }}</b>
                                            </a>
                                            <ul role="group" class="jstree-children">
                                                @foreach ($childData as $cdata)
                                                    @if ($pdata->id == $cdata->parent_id)
                                                        <li role="none"
                                                            data-jstree="{&quot;icon&quot; : &quot;far fa-file-image&quot;}"
                                                            id="j1_{{ $cdata->id }}" class="jstree-node  jstree-leaf">
                                                            <i class="jstree-icon jstree-ocl" role="presentation"></i>
                                                            <a class="jstree-anchor showDoc" href="#" tabindex="-1"
                                                                data-tree="{{ $cdata->id }}"
                                                                role="treeitem" aria-selected="false" aria-level="2"
                                                                id="j1_{{ $cdata->id }}_anchor">
                                                                <i class="jstree-icon jstree-themeicon far fa-file-image jstree-themeicon-custom"
                                                                    role="presentation"></i>
                                                                {{ $cdata->name }}
                                                            </a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="row" id="table-hover-row">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="datatable">
                                    <table class="table" id="myDataTable">
                                        <thead>
                                            <tr>                                   
                                                <th>Name</th>
                                                <th>Version</th>
                                                <th>Chapter</th>
                                                <th>Standard</th>
                                                <th>Document</th>
                                                <th>Keywords</th>                                                    
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table> 
                                </div>                                                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


{{-- 
<table class="table" id="myDataTable">
    <thead>
        <tr>
            <th>Parent Section</th>
            <th>Section</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sections as $section)
            <tr>
                <td>
                    {{ isset($section->parentSection->name) ? $section->parentSection->name : '' }}
                </td>
                <td>
                    {{ $section->name }}
                </td>
                <td>
                <a href="{{ url('edit-section/' . $section->id) }}">
                    <div class="icon-wrapper">
                        <svg 
                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-edit">
                            <path
                                d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                            </path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                            </path>
                        </svg>
                    </div>
                </a>
                    {{-- <a href="{{ url('edit-section/' . $section->id) }}"
                        class="btn btn-primary waves-effect waves-float waves-light">Edit</a> --}}
                {{-- </td>
            </tr>
        @endforeach
    </tbody>
</table> --}} 