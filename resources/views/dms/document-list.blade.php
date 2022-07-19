@extends('template.header')
@section('section')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Document List</h2>
            </div>
        </div>       
    </div>
    <div class="content-body">        
        <div class="row" id="table-hover-row">            
            <div class="card">
                <div class="card-header border-bottom p-1 d-flex justify-content-end">                    
                    <div class="head-label">
                        <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                            <a href="{{ url('add-document') }}" class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-float waves-light">Add Document</a>
                        </div>
                    </div>
                </div>
                @if(Session::get('success'))
                    <div class="alert alert-success">
                        <label id="position-top-end"></label>
                    </div>
                @endif     
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
                                    @foreach($documents as $doc)
                                        <tr>
                                            <td>{{ $doc->name }}</td>
                                            <td>{{ $doc->version }}</td>
                                            <td>{{ $doc->Chapter }}</td>
                                            <td>{{ $doc->Standard }}</td>                                                                                        
                                            <td><a target="_blank" href="{{ $doc->file_path }}">Document</a></td>
                                            <td>{{ $doc->keywords }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>                    
                    </div>
                </div>
            </div>            
        </div>     
    </div>
</div>



@endsection