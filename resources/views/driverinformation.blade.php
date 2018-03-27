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

        <div id="sucessdiv" style="display: none">

            <div class="alert alert-success fade in">
                <button class="close" data-dismiss="alert">
                    ×
                </button>
                <i class="fa-fw fa fa-check"></i>
                <strong>Success</strong> <span id="successmsg"> </span>
            </div>
        </div>
        <div id="errordiv" style="display: none">
            <div class="alert alert-danger fade in">
                <button class="close" data-dismiss="alert">
                    ×
                </button>
                <i class="fa-fw fa fa-times"></i>
                <strong>Error!</strong> <span id="errormsg"> </span>
            </div>
        </div>
        <form id="updatedriverForm" novalidate>
            {{csrf_field()}}

            <div class="row">

                <div class="well well-sm well-light">
                    <h3>{{$details['othernames'] .' '.$details['surname']}} information
                        <br>
    <!--                    <<small>Simple Tabs</small>
                        -->
                    </h3>
                    <input type="hidden" name="driverno" value="{{$details['driverRegNo']}}"/>

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

                                            <option value="{{$details['gender']}}">{{$details['gender']}}</option>

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

                                            <option value="{{$details['residentCountry']}}">{{$details['residentCountry']}}</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Country Of Origin</label>


                                        <select class="select2 select2-hidden-accessible countries" name="countryCode"  tabindex="-1" aria-hidden="true" required>

                                            <option value="{{$details['country']}}">{{$details['country']}}</option>

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
            <footer class="pull-right">
                <button type="submit" class="btn btn-primary btn-block">
                    Update
                </button>
            </footer>

        </form>
    </div>

</div>


@endsection

@section('customjs')
<script type="text/javascript">
    var datatable = $('#vehicleTbl').DataTable();

    $('#tabs').tabs();


    $('#updatedriverForm').on('submit', function (e) {
        e.preventDefault();
        var formData = $(this).serialize();
        console.log('server data: ' + formData);
        $('#loaderModal').modal('show');

        $.ajax({
            url: "{{url('driver/update')}}",
            type: "PUT",
            data: formData,
            dataType: "json",
            success: function (data) {
                console.log(data);
                var status = data.status;
                console.log('status is :' + status);
                $('#loaderModal').modal('hide');

                if (status == 0) {
                    $('#successmsg').html(data.message);
                    $('#sucessdiv').show();
                } else {
                    $('#errormsg').html(data.message);
                    $('#errordiv').show();
                }
    $(window).scrollTop(0);

            },
            error: function (jXHR, textStatus, errorThrown) {
                $('input:submit').removeAttr("disabled");
                $('#errordiv').html('Contact System Administrator');
                $('#errormsg').show();
            }
        });


    });

    getSettings();
    function getSettings() {


        $.ajax({
            url: "{{url('settings/all')}}",
            type: "GET",
            dataType: 'json',
            success: function (response) {
                var data = response.data;
                var countries = data['countries'];
                var genders = data['genders'];
                var statusCodes = data['statusCodes'];
                var vehicleMakes = data['vehicleMakes'];
                var vehicleModels = data['vehicleModels'];
                var vehicleTypes = data['vehicleTypes'];

                console.log(data);
                $.each(countries, function (i, item) {

                    $('.countries').append($('<option>', {
                        value: item.code,
                        text: item.name
                    }));
                });

                //vehicleTypes
                $.each(vehicleTypes, function (i, item) {

                    $('.vehicletypes').append($('<option>', {
                        value: item.typeId,
                        text: item.name
                    }));
                });

                $.each(vehicleModels, function (i, item) {

                    $('.models').append($('<option>', {
                        value: item.modelId,
                        text: item.name
                    }));
                });
                $.each(vehicleMakes, function (i, item) {

                    $('.vehiclemakes').append($('<option>', {
                        value: item.makeId,
                        text: item.name
                    }));
                });

                $.each(statusCodes, function (i, item) {

                    $('.statuscodes').append($('<option>', {
                        value: item.code,
                        text: item.name
                    }));
                });

                $.each(genders, function (i, item) {

                    $('.gender').append($('<option>', {
                        value: item.genderId,
                        text: item.name
                    }));
                });
            }

        });
    }
</script>
@endsection