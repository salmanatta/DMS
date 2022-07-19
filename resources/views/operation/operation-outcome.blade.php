@extends('template.header')
@section('section')
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Operation Outcome</h2>
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
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="Landline">ICU-Stay (Hrs):</label>
                                            <input type="number" id="Landline" class="form-control" placeholder="" name="Landline">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="Landline">Ventilation Time (Hrs):</label>
                                            <input type="number" id="Landline" class="form-control" placeholder="" name="Landline">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="Landline">Inotrops (Hrs):</label>
                                            <input type="number" id="Landline" class="form-control" placeholder="" name="Landline">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <div class="card" style="box-shadow: 0 4px 24px 0 rgb(34 41 47/7%) !important;">
                                    <div class="card-header">
                                        <div class="form-check form-switch">
                                            <input type="checkbox" class="form-check-input" id="blood-products">
                                            <label class="card-title form-check-label" for="blood-products">Blood Products</label>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="RBC" value="">
                                                            <label class="form-check-label" for="RBC">RBC's</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="FFP" value="">
                                                            <label class="form-check-label" for="FFP">FFP's</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="Pletelets" value="">
                                                            <label class="form-check-label" for="Pletelets">Pletelets</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="Cyro" value="">
                                                            <label class="form-check-label" for="Cyro">Cyro</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2 col-sm-4">
                                <div class="card" style="box-shadow: 0 4px 24px 0 rgb(34 41 47/7%) !important;">
                                    <div class="card-header">
                                        <div class="form-check form-switch">
                                            <input type="checkbox" class="form-check-input" id="blood-products">
                                            <label class="card-title form-check-label" for="blood-products">Complication</label>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" >
                                                            <label class="form-check-label" for="inlineRadio1">In Hospital < 30 Days</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                            <label class="form-check-label" for="inlineRadio1">In Hospital > 30 Days</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                            <label class="form-check-label" for="inlineRadio1">Out of Hospital > 30 Days</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                            <label class="form-check-label" for="inlineRadio1">Per-Operative Comp</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div class="card" style="box-shadow: 0 4px 24px 0 rgb(34 41 47/7%) !important;">
                                    <div class="card-header">
                                        <div class="form-check form-switch">
                                            <input type="checkbox" class="form-check-input" id="blood-products">
                                            <label class="card-title form-check-label" for="blood-products">Infection Complication</label>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="col-md-12">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="FFP" value="">
                                                        <label class="form-check-label" for="FFP">Superfical Sternal</label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-md-12">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="FFP" value="">
                                                        <label class="form-check-label" for="FFP">Deep Sternal</label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-md-12">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="FFP" value="">
                                                        <label class="form-check-label" for="FFP">Chest</label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-md-12">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="FFP" value="">
                                                        <label class="form-check-label" for="FFP">Septicemia</label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-md-12">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="FFP" value="">
                                                        <label class="form-check-label" for="FFP">Leg Wound</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="col-md-12">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="FFP" value="">
                                                        <label class="form-check-label" for="FFP">Urinary Tract</label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-md-12">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="FFP" value="">
                                                        <label class="form-check-label" for="FFP">Endocarditis</label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-md-12">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="FFP" value="">
                                                        <label class="form-check-label" for="FFP">ARDS</label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-md-12">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="FFP" value="">
                                                        <label class="form-check-label" for="FFP">IABPSite</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="form-label" for="Landline">Chest Drainage (mls):</label>
                                <input type="number" id="Landline" class="form-control" placeholder="" name="Landline">
                            </div>
                            <div class="col-sm-4">
                                <label class="form-label" for="Landline">Max.CK-MB (in 24 hrs):</label>
                                <input type="number" id="Landline" class="form-control" placeholder="" name="Landline">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <div class="card" style="box-shadow: 0 4px 24px 0 rgb(34 41 47/7%) !important;">
                                        <div class="card-header">
                                            <div class="form-check form-switch">
                                                <input type="checkbox" class="form-check-input" id="blood-products">
                                                <label class="card-title form-check-label" for="blood-products">Rhythm Problem</label>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="col-md-7 col-sm-6">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="SVT" value="">
                                                            <label class="form-check-label" for="SVT">SVT</label>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="col-md-7 col-sm-6">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="atrial-fibrillations" value="">
                                                            <label class="form-check-label" for="atrial-fibrillations">Atrial Fibrillations</label>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="col-md-7 col-sm-6">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="junctional-rhythm" value="">
                                                            <label class="form-check-label" for="junctional-rhythm">Junctional Rhythm</label>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="col-md-7 col-sm-6">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="ventricular-fibrillation" value="">
                                                            <label class="form-check-label" for="ventricular-fibrillation">Ventricular Fibrillation</label>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="col-md-7 col-sm-6">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="AV-block-1st-degree" value="">
                                                            <label class="form-check-label" for="AV-block-1st-degree">AV Block 1st degree</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="col-md-7 col-sm-6">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="AV-block-2nd-degree" value="">
                                                            <label class="form-check-label" for="AV-block-2nd-degree">AV Block 2nd degree</label>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="col-md-7 col-sm-6">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="AV-block-3rd-degree" value="">
                                                            <label class="form-check-label" for="AV-block-3rd-degree">AV Block 3rd degree</label>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="col-md-7 col-sm-6">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="bifasicular-block" value="">
                                                            <label class="form-check-label" for="bifasicular-block">Bifasicular Block</label>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="col-md-7 col-sm-6">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="trifasicular-block" value="">
                                                            <label class="form-check-label" for="trifasicular-block">Trifasicular Block</label>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="col-md-7 col-sm-6">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="VPCs-V-Tech" value="">
                                                            <label class="form-check-label" for="VPCs-V-Tech">VPCs/V-Tech</label>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="col-md-7 col-sm-6">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="anticoag-complication" value="">
                                                            <label class="form-check-label" for="anticoag-complication">Anticoag Complication</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-1">
                                    <b><label class="form-label" for="Landline">Cardiac Complication</label></b>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-1">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="cardiac-failure" value="">
                                                <label class="form-check-label" for="cardiac-failure">Cardiac Failure</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-1">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="peri-operative-MI" value="">
                                                <label class="form-check-label" for="peri-operative-MI">Peri-operative MI</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="mb-1">
                                    <b><label class="form-label" for="Landline">Gastro-Intestinal Complication</label></b>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-1">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="lower-GI-bleed" value="">
                                                <label class="form-check-label" for="lower-GI-bleed">Lower GI Bleed</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-1">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="upper-GI-bleed" value="">
                                                <label class="form-check-label" for="upper-GI-bleed">Upper GI Bleed</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-1">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="ischemic-gut-necrosis" value="">
                                                <label class="form-check-label" for="ischemic-gut-necrosis">Ischemic Gut Necrosis</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-1">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="Volvulus" value="">
                                                <label class="form-check-label" for="Volvulus">Volvulus</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-1">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="acute-cholecystitis" value="">
                                                <label class="form-check-label" for="acute-cholecystitis">Acute Cholecystitis</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="Landline">Neurological Complication</label>
                                            <select class="form-control" name="Neurological" id="Neurological">
                                                <option value="Nil">Nil</option>
                                                <option value="Acute Confusional State">Acute Confusional State</option>
                                                <option value="TIA">TIA</option>
                                                <option value="Localized Paresis">Localized Paresis</option>
                                                <option value="Permanent Paralysis (Local)">Permanent Paralysis (Local)</option>
                                                <option value="Brain Death">Brain Death</option>
                                                <option value="Ntracranial Bleed">Ntracranial Bleed</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="Landline">Valve Complication</label>
                                            <select class="form-control" name="Valve" id="Valve">
                                                <option value="Nil">Nil</option>
                                                <option value="Valve thrombosis">Valve Thrombosis</option>
                                                <option value="Thromo embolism">Thromo embolism</option>
                                                <option value="Prosthetic Endocarditis">Prosthetic Endocarditis</option>
                                                <option value="Para Valvular Leak">Para Valvular Leak</option>
                                                <option value="Mechanical failure">Mechanical Failure</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="Landline">Vascular Complication</label>
                                            <select class="form-control" name="Vescular" id="Vescular">
                                                <option value="Nil">Nil</option>
                                                <option value="Aortic Dissection">Aortic Dissection</option>
                                                <option value="Dissection of peripheral vesse">Dissection of peripheral vesse</option>
                                                <option value="Dissection">Dissection</option>
                                                <option value="Thrombosis">Thrombosis</option>
                                                <option value="Embolism">Embolism</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="Landline">Renal Comp</label>
                                            <select class="form-control" name="Renal" id="Renal">
                                                <option value="Nil">Nil</option>
                                                <option value="Failure: S .Cr < 200">Failure: S .Cr &lt; 200</option>
                                                <option value="Failure: S .Cr > 200">Failure: S .Cr &gt; 200</option>
                                                <option value="Failure: On-dialysis">Failure: On-dialysis</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="Landline">If Re Exploration, For:</label>
                                            <select class="form-control" name="ReExp" id="ReExp">
                                                <option value="N.A">N.A</option>
                                                <option value="Tamponade">Tamponade</option>
                                                <option value="Bleeding">Bleeding</option>
                                                <option value="Low Cardiac Output">Low Cardiac Output</option>
                                                <option value="Valve Dysfunction">Valve Dysfunction</option>
                                                <option value="others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card" style="box-shadow: 0 4px 24px 0 rgb(34 41 47/7%) !important;">
                                    <div class="card-header">
                                        <div class="form-check form-switch">
                                            <input type="checkbox" class="form-check-input" id="blood-products">
                                            <label class="card-title form-check-label" for="blood-products">Patient Death Entry</label>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="mb-1">
                                                    <label class="form-label" for="Landline">I-A</label>
                                                    <input type="number" id="Landline" class="form-control" placeholder="" name="Landline">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="mb-1">
                                                    <label class="form-label" for="Landline">I-B</label>
                                                    <input type="number" id="Landline" class="form-control" placeholder="" name="Landline">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="mb-1">
                                                    <label class="form-label" for="Landline">I-C</label>
                                                    <input type="number" id="Landline" class="form-control" placeholder="" name="Landline">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="mb-1">
                                                    <label class="form-label" for="Landline">II</label>
                                                    <input type="number" id="Landline" class="form-control" placeholder="" name="Landline">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="Landline">CPR Notes</label>
                                                    <textarea class="form-control" name="OtherMedication" id="OtherMedication" style="height: 180px;"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
