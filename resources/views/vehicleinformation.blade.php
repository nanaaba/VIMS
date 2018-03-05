@extends('layouts.forms')

@section('content')

<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title"> Vehicle Information</h2>
        <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Vehicle</a></li>
            <li class="active">Information</li>
        </ol>
    </div>
    <div class="main-content container-fluid">
        <!--Basic forms-->
        <?php
        $informaion = json_decode($information, true);
        $details = $informaion['data'];
        ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default panel-border-color panel-border-color-primary">
                    <div class="panel-heading panel-heading-divider">
                        <div class="panel-body">
                            <form id="reportForm" >

                                {{ csrf_field() }}

                                <div class="row">

                                    <fieldset>
                                        <legend>{{$details['chasisNo']}} Vehicle Data</legend>






                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Vehicle Type</label>

                                                <select class="select2 select2-hidden-accessible" name="sex"  tabindex="-1" aria-hidden="true" required>

                                                    <option value="">Select ---</option>

                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Hs Code</label>

                                                <input type="text" name="hscode" value="{{$details['hsCode']}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Status Code</label>

                                                <input type="text" name="statusCode" value="{{$details['statusCode']}}" class="form-control datepicker">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">CPC Code</label>

                                                <input type="text" name="cpcCode" value="{{$details['cpcCode']}}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Country</label>

                                                <input type="text" name="country" value="{{$details['country']}}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Origin Make</label>

                                                <input type="text" name="make" value="{{$details['make']}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Model</label>

                                                <select class="select2 select2-hidden-accessible" name="model"  tabindex="-1" aria-hidden="true" required>

                                                    <option value="{{$details['model']}}">{{$details['model']}}</option>

                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Color</label>

                                                <select class="select2 select2-hidden-accessible" name="color"  tabindex="-1" aria-hidden="true" required>

                                                    <option value="{{$details['colour']}}">{{$details['colour']}}</option>

                                                </select>

                                            </div>
                                        </div>


                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Chassis Number</label>

                                                <input type="text" name="chassisno" value="{{$details['chasisNo']}}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Engine Number</label>

                                                <input type="text" name="engineNo" value="{{$details['engineNo']}}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Front Plate Number</label>

                                                <input type="text" name="plateno" value="{{$details['frontPlateNo']}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Back Plate Number</label>

                                                <input type="text" name="plateno" value="{{$details['backPlateNo']}}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class=" control-label">Description</label>
                                                <textarea name="description" rows="8" class="form-control">
                                                    {{trim($details['description'])}}
                                                </textarea>

                                            </div>
                                        </div>


                                    </fieldset>
                                </div>
                                <br>
                                <div class="row">

                                    <fieldset>
                                        <legend>Registration Data:</legend>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Registered By</label>

                                                <input type="text" name="registeredBy" value="{{$details['registeredBy']['Surname']}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Name</label>

                                                <input type="text" name="otherNames" value="{{$details['registeredBy']['Othernames']}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Address</label>
                                                <textarea name="registeredByAddress" class="form-control">
                                                    {{$details['registeredBy']['Address']}}
                                                </textarea>

                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class=" control-label">Issue Date</label>

                                                <input type="text" name="regIssueDate"  value="{{$details['regIssueDate']}}" class="form-control datepicker">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class=" control-label">Expiry Date</label>
                                                <input type="text" name="email" value="{{$details['regExpiryDate']}}" class="form-control datepicker">

                                            </div>
                                        </div>
                                    </fieldset>
                                </div>


                                <br>
                                <div class="row">

                                    <fieldset>
                                        <legend>International Permit Data:</legend>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class=" control-label">Permit No </label>

                                                <input type="text" name="permitNo" value="{{$details['permitNo']}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class=" control-label">Issue Date</label>

                                                <input type="text" name="permitIssueDate" value="{{$details['permitIssueDate']}}" class="form-control datepicker">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class=" control-label">Expiry Date</label>
                                                <input type="text" name="permitExpiryDate" value="{{$details['permitExpiryDate']}}" class="form-control datepicker">

                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <legend>Ecowas Data:</legend>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class=" control-label">Ecowas No </label>

                                                <input type="text" name="ecowasn" value="{{$details['regExpiryDate']}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class=" control-label">Issue Date</label>

                                                <input type="text" name="ecowasIssueDate" value="{{$details['ecowasIssueDate']}}" class="form-control datepicker">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class=" control-label">Expiry Date</label>
                                                <input type="text" name="ecowasExpiryDate" value="{{$details['ecowasExpiryDate']}}" class="form-control datepicker">

                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label class=" control-label">Remarks</label>
                                                <textarea name="remarks" rows="8" class="form-control">
                                                    {{$details['remarks']}}

                                                </textarea>

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