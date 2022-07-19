@extends('template.header')
@section('section')
<div class="content-wrapper">
  <div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
        <div class="col-12">
          <h2 class="content-header-title float-start mb-0">MR Registration</h2>
          <div class="breadcrumb-wrapper">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index-2.html">Home</a>
              </li>
              <li class="breadcrumb-item"><a href="#">Patient 360</a>
              </li>
              <li class="breadcrumb-item active"><a href="#">MR Registration</a>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
      <div class="mb-1 breadcrumb-right">
      </div>
    </div>
  </div>
  <div class="content-body">
    <!-- Basic Horizontal form layout section start -->
    <!-- Basic multiple Column Form section start -->
    <section id="multiple-column-form">
      <div class="row">
        <div class="col-12">
          <form class="form">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <div class="mb-1">
                      <label class="form-label" for="Search-MRN">Search MRN</label>
                      <input type="text" id="Search-MRN" class="form-control" placeholder="Enter MR to Search" name="Search-MRN">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-1 py-2">
                      <button class="btn btn-primary">Search</button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Patient Demographics</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4 col-6">
                    <div class="mb-1">
                      <label class="form-label" for="First-Name">First Name</label>
                      <input type="text" id="First-Name" class="form-control" placeholder="First Name" name="First-Name">
                    </div>
                  </div>
                  <div class="col-md-4 col-6">
                    <div class="mb-1">
                      <label class="form-label" for="Middle-Name">Middle Name</label>
                      <input type="text" id="Middle-Name" class="form-control" placeholder="Middle Name" name="Middle-Name">
                    </div>
                  </div>
                  <div class="col-md-4 col-6">
                    <div class="mb-1">
                      <label class="form-label" for="Last-Name">Last Name</label>
                      <input type="text" id="Last-Name" class="form-control" placeholder="Last Name" name="Last-Name">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-6">
                    <div class="mb-1">
                      <label class="form-label" for="Father-Name">Father/Husband Name</label>
                      <input type="text" id="Father-Name" class="form-control" placeholder="Father|Husband Name" name="Father-Name">
                    </div>
                  </div>
                  <div class="col-md-4 col-6">
                    <div class="mb-1">
                      <label class="form-label" for="CNIC">CNIC</label>
                      <input type="text" id="CNIC" class="form-control" placeholder="CNIC" name="CNIC">
                    </div>
                  </div>
                  <div class="col-md-4 col-6">
                    <div class="mb-1">
                      <label class="form-label" for="Age">Blood Group</label>
                      <select class="form-select flex-grow-1" name="Blood-Group">
                        <option value=""> -- Select Blood Group --</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O+">O-</option>
                        <option value="O+">AB+</option>
                        <option value="O+">AB-</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-6">
                    <div class="mb-1">
                      <label class="form-label" for="DBO">D.O.B</label>
                      <input type="date" id="DBO" class="form-control" placeholder="D.O.B" name="DBO">
                    </div>
                  </div>
                  <div class="col-md-1 col-6">
                    <div class="mb-1">
                      <label class="form-label" for="Age">Age</label>
                      <input type="number" id="Age" class="form-control" placeholder="Age" name="Age">
                    </div>
                  </div>
                  <div class="col-md-1 col-6">
                    <div class="mb-1">
                      <label class="form-label" for="DMY">DMY</label>
                      <select class="form-select flex-grow-1" name="DMY">
                        <option value=""> -- Select --</option>
                        <option value="Years">Years</option>
                        <option value="Months">Months</option>
                        <option value="Days">Days</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-2 col-6">
                    <div class="mb-1">
                      <label class="form-label" for="city-column">Gender</label>
                      <select class="form-select flex-grow-1" name="Gender">
                        <option value=""> -- Select Gender--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 col-6">
                    <div class="mb-1">
                      <label class="form-label" for="Marital Status">Marital Status</label>
                      <input type="text" id="Marital Status" class="form-control" placeholder="Marital Status" name="Marital-Status">
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Patient Contact Details</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="Mobile_1">Primary Contact</label>
                  <input type="text" id="Mobile_1" class="form-control" placeholder="+92 xxxxxxxxx" name="Mobile_1">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="Mobile_2">Secondary Contact</label>
                  <input type="text" id="Mobile_2" class="form-control" placeholder="+92 xxxxxxxxx" name="Mobile_2">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="Landline">Landline</label>
                  <input type="text" id="Landline" class="form-control" placeholder="091-xxxxxx" name="Landline">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="Email">Email Address</label>
                  <input type="text" id="Email" class="form-control" placeholder="example@abc.com" name="Email">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Next of Kin</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="kinName">Full Name</label>
                  <input type="text" id="kinName" class="form-control" placeholder="First Name" name="kinName">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="kinRelationn">Relationship</label>
                  <select class="form-select flex-grow-1" name="kinRelation">
                    <option value=""> -- Select --</option>
                    <option value="Mother">Mother</option>
                    <option value="Father">Father</option>
                    <option value="Son">Son</option>
                    <option value="Daughter">Daughter</option>
                    <option value="Uncle">Uncle</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="kinContact">Contact No</label>
                  <input type="text" id="kinContact" class="form-control" placeholder="091-xxxxxx" name="kinContact">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Current Address</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="HouseNo">House No.</label>
                  <input type="text" id="HouseNo" class="form-control" placeholder="House No" name="HouseNo">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="Street">Street</label>
                  <input type="text" id="Street" class="form-control" placeholder="Street" name="Street">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="Sector">Sector / Area</label>
                  <input type="text" id="Sector" class="form-control" placeholder="Sector" name="Sector">
                </div>
              </div>
              <div class="col-md-12 col-12">
                <div class="mb-1">
                  <label class="form-label" for="last-name-column">Address</label>
                  <input type="text" id="Address" class="form-control" placeholder="Full Address" name="Address">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="Country">Country</label>
                  <input type="text" id="Country" class="form-control" placeholder="091-xxxxxx" name="Country">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="Province">Province</label>
                  <input type="text" id="Province" class="form-control" placeholder="Province" name="Province">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="last-name-column">City</label>
                  <input type="text" id="City" class="form-control" placeholder="City" name="City">
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
                <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

  @endsection