@extends('layouts.forms')

@section('content')

<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title">New Driver</h2>
        <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Drivers</a></li>
            <li class="active">New Driver</li>
        </ol>
    </div>
    <div class="main-content container-fluid">
        <!--Basic forms-->

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default panel-border-color panel-border-color-primary">
                    <div class="panel-heading panel-heading-divider">
                        <div class="panel-body">
                            <form id="reportForm" >

                                {{ csrf_field() }}

                                <div class="row">
                                    <fieldset>
                                        <legend>Driver Personal Details:</legend>



                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Name</label>

                                                <input type="text" name="fullname" class="form-control">
                                            </div>
                                        </div>



                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Sex</label>

                                                <select class="select2 select2-hidden-accessible" name="sex"  tabindex="-1" aria-hidden="true" required>

                                                    <option value="">Select ---</option>
                                                    <option value="male">Male</option> 
                                                    <option value="female">Female</option>

                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">DOB</label>

                                                <input type="text" name="dob" class="form-control datepicker">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Email Address</label>

                                                <input type="email" name="email" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Overseas Phone No</label>

                                                <input type="text" name="contactno" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Overseas address</label>
                                                <textarea name="overseas_address" class="form-control"></textarea>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Country</label>

                                                <input type="text" name="country" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Nationality</label>

                                                <input type="text" name="nationality" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Nationality ID No</label>

                                                <input type="text" name="nationalityid" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class=" control-label">Overseas</label>

                                                <input type="text" name="overseas" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class=" control-label">License No</label>

                                                <input type="text" name="licenseno" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class=" control-label">Issue Date</label>

                                                <input type="text" name="issue_date" class="form-control datepicker">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class=" control-label">Expiry Date</label>

                                                <input type="text" name="expiry_date" class="form-control datepicker">
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>

                                <br>
                                <div class="row">

                                    <fieldset>
                                        <legend>Passport Details:</legend>



                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Passport No</label>

                                                <input type="text" name="licenseno" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Issue Date</label>

                                                <input type="text" name="issue_date" class="form-control datepicker">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Expiry Date</label>

                                                <input type="text" name="expiry_date" class="form-control datepicker">
                                            </div>
                                        </div>

                                    </fieldset>
                                </div>
                                <br>
                                <div class="row">
                                    <fieldset>
                                        <legend>Other Data:</legend>


                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Phone No in Ghana</label>

                                                <input type="text" name="licenseno" class="form-control">
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Reg. Issue Date</label>

                                                <input type="text" name="issue_date" class="form-control datepicker">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Reg. Expiry Date</label>

                                                <input type="text" name="expiry_date" class="form-control datepicker">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class=" control-label">Ghana address</label>
                                                <textarea name="overseas_address" class="form-control"></textarea>

                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class=" control-label">Remarks</label>
                                                <textarea name="overseas_address" class="form-control"></textarea>

                                            </div>
                                        </div>
                                    </fieldset>
                                </div>







                                <div class="row xs-pt-15">
                                    <div class="col-xs-6">

                                    </div>
                                    <div class="col-xs-6">
                                        <p class="text-right">
                                            <button type="submit" class="btn btn-space btn-primary">Save </button>

                                        </p>
                                    </div>
                                </div>
                            </form>





                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>


@endsection

@section('customjs')

@endsection