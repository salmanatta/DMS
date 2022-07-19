@extends('template.header')
@section('section')
    <div class="content-wrapper">
        <div style="width: 40%" class="mx-auto">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">New Section</h2>
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
            <form class="form" action="{{url('add-section')}}" method="POST">
            @endif           
                @csrf
                <div style="width: 40%" class="mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="section-name">Section Name</label>
                                        <input type="text" id="section-name" class="form-control" placeholder="" name="sectionName" value="{{ isset($sec) ? $sec->name : ''}}">
                                        <span style="color:red">{{ $errors->first('sectionName') }}</span>                                    
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="parent-section">Parent Section</label>
                                        <select class="form-control" name="parentSection" id="parent-section">
                                            <option selected="selected" value="">-- Select Parent Section --</option>
                                            @foreach($sections as $section)                                                  
                                               <option value="{{ $section->id }}" {{ isset($sec) ? ($sec->parent_id == $section->id ? 'selected' : '' ) : '' }}>{{$section->name}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success waves-effect waves-float waves-light me-1" data-bs-toggle="modal" data-bs-target="#add-payment-sidebar">
                                        Save
                                    </button>
                                    <a href="{{ url('section-list') }}" class="btn btn-danger waves-effect waves-float waves-light mx-0">Exit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
@endsection
