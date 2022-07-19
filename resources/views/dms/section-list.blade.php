@extends('template.header')
@section('section')
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">Section List</h2>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <a href="{{ url('add-section') }}" class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-float waves-light">Add Section</a>
            </div>
        </div>
        <div class="content-body">
            @if (Session::get('success'))
                <div class="alert alert-success alert-block py-2 px-2 d-flex justify-content-between" style="width: 500px">
                    <strong>{{ Session::get('success') }}</strong>
                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="row" id="table-hover-row">
                <div class="card">
                    <div class="row">                        
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
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
