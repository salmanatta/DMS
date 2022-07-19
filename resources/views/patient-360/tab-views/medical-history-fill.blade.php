<div class="accordion-item">
    <h2 class="accordion-header" id="headingMarginThree">
        <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#accordionMarginThree"
            aria-expanded="false"
            aria-controls="accordionMarginThree">
            Medical History
        </button>
    </h2>
    <div
        id="accordionMarginThree"
        class="accordion-collapse collapse"
        aria-labelledby="headingMarginThree"
        data-bs-parent="#accordionMargin">
        <div class="accordion-body">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="mb-1">
                        <label for="Diabetes">Diabetes</label>
                        <span class="text-danger">*</span>
                        <span class="B-Coeff" style="float: right;color: deeppink">B-Coeff:
                            <span id="Bccsclass">0</span>
                        </span>
                        <select class="form-control" name="Diabetes" id="Diabetes" >
                            <option value="No">No</option>
                            <option value="Diet">Diet</option>
                            <option value="Oral Therapy">Oral Therapy</option>
                            <option value="Insulin">Insulin</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="mb-1">
                        <label for="ccsclass">Family History CAD:</label>
                        <select class="form-control" name="ccsclass" id="ccsclass" onchange="SetCcsCoeff(this.value)">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                            <option value="Not Known">Not Known</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="mb-1">
                        <label for="agnduration">Smoking:</label>
                        <select class="form-control" name="agnduration" id="agnduration" >
                            <option value="No Smoking">No Smoking</option>
                            <option value="Ex-Smoker > 8 Weeks">Ex-Smoker &gt; 8 Weeks</option>
                            <option value="Still Smoking (< 8 Weeks)">Still Smoking (&lt; 8 Weeks)</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="mb-1">
                        <label for="Diabetes">Hypercholesterolemia:</label>
                        <select class="form-control" name="Diabetes" id="Diabetes" >
                            <option value="Nil">Nil</option>
                            <option value="Unknown">Unknown</option>
                            <option value="Uncontrolled">Uncontrolled</option>
                            <option value="Controlled on Statins">Controlled on Statins</option>
                            <option value="Controlled on Diet">Controlled on Diet</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="mb-1">
                        <label for="ccsclass">Hypothyroidism requiring thyroxine:</label>
                        <select class="form-control" name="ccsclass" id="ccsclass" onchange="SetCcsCoeff(this.value)">
                            <option value="No">No</option>
                            <option value="">Yes</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="mb-1">
                        <label for="agnduration">Packs per day:</label>
                        <input placeholder="" class="form-control"  name="MIValue" type="number" value="" id="packs-per-day">
                        <span class="field-validation-valid" data-valmsg-for="MIValue" data-valmsg-replace="true"></span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="mb-1">
                        <label for="Diabetes">Latest Cholesterol Level Available:</label>
                        <select class="form-control" name="Diabetes" id="Diabetes" >
                            <option value="No">No</option>
                            <option value="">Yes</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="mb-1">
                        <label for="ccsclass">Latest Cholesterol Level (mg/dl):</label>
                        <input placeholder="" class="form-control"  name="MIValue" type="number" value="" id="Latest-Cholesterol-Level">
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="mb-1">
                        <label for="agnduration">Years of Smoking::</label>
                        <input placeholder="" class="form-control"  name="MIValue" type="number" value="" id="Years-of-Smoking">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="box-shadow: 0 4px 24px 0 rgb(34 41 47/7%) !important;">
                        <div class="card-header">
                            <div class="form-check form-switch">
                                <input type="checkbox" class="form-check-input" id="GI-history">
                                <label class="card-title form-check-label" for="customSwitch1">GI History</label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="GI-history-gastric" value="">
                                        <label class="form-check-label" for="GI-history-gastric">Previous Gasteric/dudonel Ulcer</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="GI-history-gastric-previous-surgery" value="">
                                        <label class="form-check-label" for="GI-history-gastric-previous-surgery">Previous Surgery</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="GI-history-gastric-other" value="">
                                        <label class="form-check-label" for="GI-history-gastric-other">Other</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="box-shadow: 0 4px 24px 0 rgb(34 41 47/7%) !important;">
                        <div class="card-header">
                            <div class="form-check form-switch">
                                <input type="checkbox" class="form-check-input" id="RESP-history">
                                <label class="card-title form-check-label" for="RESP-history">RESP History</label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="RESP-history-lung-disease" value="checked">
                                        <label class="form-check-label" for="RESP-history-lung-disease">Chronic Lung Disease: (Long Term Steroids or Bronchodilators)</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="RESP-history-asthma" value="checked">
                                        <label class="form-check-label" for="RESP-history-asthma">Asthma</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="RESP-history-COAD" value="checked">
                                        <label class="form-check-label" for="RESP-history-COAD">COAD</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="RESP-history-emphysema" value="checked">
                                        <label class="form-check-label" for="RESP-history-emphysema">Emphysema</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-1">
                                <label for="Diabetes">Extra-cardiac Arteriopathy</label>
                                <span class="text-danger">*</span>
                                    <span class="B-Coeff" style="float: right;color: deeppink">B-Coeff:
                                <span id="Bccsclass">0</span>
                                </span>
                                <select class="form-control" name="Diabetes" id="Diabetes" >
                                    <option value="No">No</option>
                                    <option value="">Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-1">
                                <label for="Diabetes">Cerebro-Vascular:</label>
                                <select class="form-control valid" name="cerebrovascular" id="cerebrovascular" aria-invalid="false">
                                    <option value="No">No</option>
                                    <option value="Prev. TIA ">Prev. TIA </option>
                                    <option value="Prev. CVA">Prev. CVA</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-1">
                                <b><label for="Diabetes">Carotid Duplex result if the scan is performed</label></b>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-1">
                                <label for="Diabetes">Right Carotid System%</label>
                                <input placeholder="" class="form-control"  name="MIValue" type="text" value="" id="packs-per-day">
                                <span class="field-validation-valid" data-valmsg-for="MIValue" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-1">
                                <label for="Diabetes">Left Carotid System%</label>
                                <input placeholder="" class="form-control"  name="MIValue" type="text" value="" id="packs-per-day">
                                <span class="field-validation-valid" data-valmsg-for="MIValue" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <table class="table table-condensed table-bordered">
                            <thead>
                                <tr>
                                    <th>Respiratory</th>
                                    <th>Predicated</th>
                                    <th>Measured</th>
                                    <th>%</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label>FVC</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input placeholder="" class="form-control fvc decimal" data-val="true" data-val-number="The field respfvcpred must be a number." id="respfvcpred" name="respfvcpred" type="text" value="">
                                        <span class="field-validation-valid text-danger" data-valmsg-for="respfvcpred" data-valmsg-replace="true"></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input placeholder="" class="form-control fvc decimal" data-val="true" data-val-number="The field respfvcmeasured must be a number." id="respfvcmeasured" name="respfvcmeasured" type="text" value="">
                                        <span class="field-validation-valid text-danger" data-valmsg-for="respfvcmeasured" data-valmsg-replace="true"></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" id="fvcpercent" class="form-control" readonly="">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label>FEV1</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input placeholder="" class="form-control fev decimal" data-val="true" data-val-number="The field respfev1pred must be a number." id="respfev1pred" name="respfev1pred" type="text" value="">
                                        <span class="field-validation-valid text-danger" data-valmsg-for="respfev1pred" data-valmsg-replace="true"></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input placeholder="" class="form-control fev decimal" data-val="true" data-val-number="The field respfev1measured must be a number." id="respfev1measured" name="respfev1measured" type="text" value="">
                                        <span class="field-validation-valid text-danger" data-valmsg-for="respfev1measured" data-valmsg-replace="true"></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" id="fevpercent" class="form-control" readonly="">
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-1">
                                <label for="Diabetes">Peripheral-Vascular:</label>
                                <select class="form-control valid" name="periphvascular" id="periphvascular" aria-invalid="false">
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-1">
                                <label for="Diabetes">H/O DVT:</label>
                                <select class="form-control valid" name="hodvt" id="hodvt" aria-invalid="false">
                                    <option value="Nil">Nil</option>
                                    <option value="Right">Right</option>
                                    <option value="Left">Left</option>
                                    <option value="Both">Both</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-1">
                                <label for="Diabetes">Infective Endocarditis:</label>
                                <span class="text-danger">*</span>
                                <select class="form-control valid" name="InfectiveEndocarditis" id="InfectiveEndocarditis" onchange="SetInfectiveCoeff(this.value,'BInfective')" aria-invalid="false">
                                    <option value="Nil">Nil</option>
                                    <option value="Past: Settled on antibiotics">Past: Settled on antibiotics</option>
                                    <option value="Active: Still on antibiotics">Active: Still on antibiotics</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-1">
                                <label for="Diabetes">Poor Mobility</label>
                                <span class="text-danger">*</span>
                                <select class="form-control" name="PoorMobility" id="PoorMobility" onchange="SetPoorMobilityCoeff(this.value,'BPoorMobility')">
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-1">
                                <label for="Diabetes">Critical Pre-opertive State:</label>
                                <span class="text-danger">*</span>
                                <select class="form-control valid" name="CriticalPreoperativeState" id="CriticalPreoperativeState" onchange="SetCriticalPreCoeff(this.value,'BCritical')" aria-invalid="false">
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="mb-1">
                        <label for="Diabetes">Weight</label>
                        <input placeholder="" class="form-control"  name="MIValue" type="number" value="" id="packs-per-day">
                        <span class="field-validation-valid" data-valmsg-for="MIValue" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-1">
                        <label for="Diabetes">Latest Serum Creatinine (mg/dl)</label>
                        <input placeholder="" class="form-control"  name="MIValue" type="text" value="" id="packs-per-day">
                        <span class="field-validation-valid" data-valmsg-for="MIValue" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-1">
                        <label for="Diabetes">Creatinine Clearance (CC) (ml/min)</label>
                        <input placeholder="" class="form-control"  name="MIValue" type="text" value="" id="packs-per-day">
                        <span class="field-validation-valid" data-valmsg-for="MIValue" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-1">
                        <label for="Diabetes">Renal Impairment:</label>
                        <select class="form-control" name="RenalFailure" id="RenalFailure" onchange="SetRenalFailureCoeff(this.value,'BRenalFailure')">
                            <option value="Normal (CC >85 ml/min)">Normal (CC &gt;85 ml/min)</option>
                            <option value="Moderate (CC = 50-85 ml/min)">Moderate (CC = 50-85 ml/min)</option>
                            <option value="Severe (CC < 85 ml/min)">Severe (CC &lt; 85 ml/min)</option>
                            <option value="Dialysis of Dependent (Any CC)">Dialysis of Dependent (Any CC)</option>
                        </select>
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
</div>

