@extends('template.header')
@section('section')
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Operation Remarks</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic Horizontal form layout section start -->
            <!-- Basic multiple Column Form section start -->
            <section id="multiple-column-form">
                @include('patient-360.current-patient')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-1">
                                    <b><label>Brief Clinical Note</label></b>
                                    <textarea class="form-control" name="OtherMedication" id="OtherMedication" style="height: 180px;"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-1">
                                    <b><label>Operative Procedures & Findings</label></b>
                                    <textarea class="form-control" name="OtherMedication" id="OtherMedication" style="height: 180px;"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-1">
                                    <b><label>Final Operation Remarks</label></b>
                                    <textarea class="form-control" name="OtherMedication" id="OtherMedication" style="height: 180px;"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-success waves-effect waves-float waves-light me-1" data-bs-toggle="modal" data-bs-target="#add-payment-sidebar">
                                    Save
                                </button>
                                <button class="btn btn-danger waves-effect waves-float waves-light mx-0" data-bs-toggle="modal" data-bs-target="#add-payment-sidebar">
                                    Exit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
