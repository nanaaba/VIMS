@extends('layouts.master')

@section('content')
<?php
$informaion = json_decode($information, true);
$details = $informaion['data'];
?>
<div id="content">
    <div class="page-head">
        <h2 class="page-head-title">{{$details['othernames'] .' '.$details['surname']}} information</h2>
        <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Drivers</a></li>
            <li class="active"> Driver Information</li>
        </ol>
    </div>
    <div class="main-content container-fluid">
        <div class="row">

            <div class="well well-sm well-light">
                <h3>{{$details['othernames'] .' '.$details['surname']}} information
                    <br>
<!--                    <<small>Simple Tabs</small>
                    -->
                </h3>

                <div id="tabs">
                    <ul>
                        <li>
                            <a href="#tabs-a">Personal Details</a>
                        </li>
                        <li>
                            <a href="#tabs-b">Passport Details</a>
                        </li>
                        <li>
                            <a href="#tabs-c">Other Data</a>
                        </li>
                        <li>
                            <a href="#tabs-d">Vehicles</a>
                        </li>

                    </ul>






                    <div id="tabs-a" class="panel-body">

                        <div class="row">

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">SurName</label>

                                    <input type="text" name="surname" value="{{$details['surname']}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Other Names</label>

                                    <input type="text" name="othernames" value="{{$details['othernames']}}" class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Sex</label>

                                    <select class="select2 select2-hidden-accessible gender" name="gender"  tabindex="-1" aria-hidden="true" required>

                                        <option value="">Select ---</option>

                                    </select>

                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Date Of Birth</label>

                                    <input type="text" name="dob" value="{{$details['dob']}}"  class="form-control datepicker" data-dateformat="yy-mm-dd">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Email Address</label>

                                    <input type="email" name="email" value="{{$details['email']}}"  class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Local Phone No</label>

                                    <input type="text" name="localPhone" value="{{$details['localPhone']}}"  class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Overseas Phone No</label>

                                    <input type="text" name="foreignPhone"  value="{{$details['foreignPhone']}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Resident Country</label>


                                    <select class="select2 select2-hidden-accessible countries" name="residentCountryId"  tabindex="-1" aria-hidden="true" required>

                                        <option value="">Select ---</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Country Of Origin</label>


                                    <select class="select2 select2-hidden-accessible countries" name="countryCode"  tabindex="-1" aria-hidden="true" required>

                                        <option value="">Select ---</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class=" control-label">Local Address</label>
                                    <textarea name="localAddress" rows="10" class="form-control">
                                        {{$details['localAddress']}}
                                    </textarea>

                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class=" control-label">Overseas Address</label>
                                    <textarea name="foreignAddress" rows="10" class="form-control">
                                         {{$details['foreignAddress']}}
                                    </textarea>

                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Nationality ID No</label>

                                    <input type="text" value="{{$details['nationalId']}}"  name="nationalId" class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">License No</label>

                                    <input type="text" name="licenceNo" value="{{$details['licenceNo']}}"  class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Issue Date</label>

                                    <input type="text" name="issueDate" value="{{$details['issueDate']}}" class="form-control datepicker" data-dateformat="yy-mm-dd">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Expiry Date</label>

                                    <input type="text" name="expiryDate" value="{{$details['expiryDate']}}" class="form-control datepicker" data-dateformat="yy-mm-dd">
                                </div>
                            </div>

                        </div>

                    </div>

                    <div id="tabs-b" class="panel-body">

                        <!-- widget content -->
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Passport No</label>

                                    <input type="text" name="passportNo" value="{{$details['passportNo']}}"  class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Issue Date</label>

                                    <input type="text" data-dateformat="yy-mm-dd" value="{{$details['passportIssueDate']}}" name="passportIssueDate" class="form-control datepicker">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Expiry Date</label>

                                    <input type="text" data-dateformat="yy-mm-dd" value="{{$details['passportExpiryDate']}}" name="passportExpiryDate" class="form-control datepicker">
                                </div>
                            </div>


                        </div>

                    </div>

                    <div id="tabs-c" class="panel-body">
                        <!-- widget content -->
                        <div class="widget-body">

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Reg. Issue Date</label>

                                        <input type="text" data-dateformat="yy-mm-dd" value="{{$details['regIssueDate']}}" name="regIssueDate" class="form-control datepicker">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Reg. Expiry Date</label>

                                        <input type="text" data-dateformat="yy-mm-dd" value="{{$details['regExpiryDate']}}" name="regExpiryDate" class="form-control datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class=" control-label">Remarks</label>
                                        <textarea name="remarks" rows="10" class="form-control">
                                      {{$details['remarks']}}

                                        </textarea>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end widget content -->


                    </div>

                    <div id="tabs-d" class="panel-body">

                        <table id="vehicleTbl" class="table table-condensed table-hover table-bordered table-striped">
                            <thead>
                                <tr>

                                    <th>Registration No</th>  
                                    <th>Resident Country</th>  

                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($details['vehicles'] as $value) {
                                    echo '<tr>'
                                    . '<td>'
                                    . $value['vehicleRegNo']
                                    . '</td>'
                                    . '<td>'
                                    . $value['residentCountry']
                                    . '</td>'
                                    . '<td><a  href="../../vehicles/information/' . $value['vehicleRegNo'] . '"   type="button" class=" btn btn-labeled btn-primary btn-sm  col-sm-6" ><i class="glyphicon glyphicon-eye-open"></i> </a> ' .
                                    '<a  href="#"   type="button" class=" btn btn-labeled btn-danger btn-sm  col-sm-6" ><i class="glyphicon glyphicon-trash"></i></a> '
                                    . '</td>'
                                    . '</tr>';
                                }
                                ?>


                            </tbody>
                        </table>
                    </div>
                </div>


            </div>


        </div>


    </div>

</div>


@endsection

@section('customjs')
<script type="text/javascript">
    var datatable = $('#vehicleTbl').DataTable();

    $('#tabs').tabs();
</script>
@endsection