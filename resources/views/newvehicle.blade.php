@extends('layouts.master')

@section('content')
<div id="content">
    <div class="page-head">
        <h2 class="page-head-title">New Vehicle</h2>
        <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="{{ url('vehicles/all') }}">Vehicles</a></li>
            <li class="active">New Vehicle</li>
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
        <section id="widget-grid" class="">

            <form id="vehicleForm" novalidate>
                <!-- START ROW -->

                {{csrf_field()}}
                <div class="row">

                    <!-- NEW COL START -->
                    <article class="col-sm-12 col-md-12 col-lg-12 ">

                        <!-- Widget ID (each widget will need unique ID)-->
                        <div class="jarviswidget jarviswidget-sortable" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false" role="widget">

                            <header role="heading" class="ui-sortable-handle">
                                <div class="jarviswidget-ctrls" role="menu">   
                                    <a href="javascript:void(0);" class="button-icon jarviswidget-toggle-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Collapse"><i class="fa fa-minus "></i></a>
                                    <a href="javascript:void(0);" class="button-icon jarviswidget-fullscreen-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Fullscreen">
                                        <i class="fa fa-expand "></i></a>
                                </div>

                                <span class="widget-icon"> 
                                    <i class="fa fa-edit"></i> </span>
                                <h2>Vehicle Data </h2>				

                                <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header>

                            <!-- widget div-->
                            <div role="content">

                                <!-- widget edit box -->
                                <div class="jarviswidget-editbox">
                                    <!-- This area used as dropdown edit box -->

                                </div>
                                <!-- end widget edit box -->

                                <!-- widget content -->
                                <div class="widget-body">



                                    <div class="row">






                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Vehicle Type</label>

                                                <select class="select2 select2-hidden-accessible vehicletypes" name="vehicleTypeId"  tabindex="-1" aria-hidden="true" required>

                                                    <option value="">Select ---</option>

                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Hs Code</label>

                                                <input type="text" name="hsCode" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Status Code</label>

                                                <select class="select2 select2-hidden-accessible statuscodes" name="statusCodeId"  tabindex="-1" aria-hidden="true" required>

                                                    <option value="">Select ---</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">CPC Code</label>

                                                <input type="text" name="cpcCode" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Country</label>


                                                <select class="select2 select2-hidden-accessible countries" name="resCountryId"  tabindex="-1" aria-hidden="true" required>

                                                    <option value="">Select ---</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">TripType</label>

                                                <input type="text" name="tripType" class="form-control">

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Model</label>

                                                <select class="select2 select2-hidden-accessible models" name="modelId"  tabindex="-1" aria-hidden="true" required>

                                                    <option value="">Select ---</option>

                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Color</label>

                                                <select class="select2 select2-hidden-accessible" name="colour"  tabindex="-1" aria-hidden="true" required>

                                                    <option value="">Select ---</option>

                                                    <option value="White">White</option>
                                                </select>

                                            </div>
                                        </div>


                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Chassis Number</label>

                                                <input type="text" name="chasisNo" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Engine Number</label>

                                                <input type="text" name="engineNo" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Front PlateNumber</label>

                                                <input type="text" name="frontPlateNo" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Back PlateNumber</label>

                                                <input type="text" name="backPlateNo" class="form-control">
                                            </div>
                                        </div>


                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Description</label>
                                                <textarea name="description" class="form-control"></textarea>

                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <!-- end widget content -->

                            </div>
                            <!-- end widget div -->

                        </div>

                    </article>


                    <article class="col-sm-12 col-md-12 col-lg-12 ">

                        <!-- Widget ID (each widget will need unique ID)-->
                        <div class="jarviswidget jarviswidget-sortable" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false" role="widget">

                            <header role="heading" class="ui-sortable-handle">

                                <div class="jarviswidget-ctrls" role="menu">   
                                    <a href="javascript:void(0);" class="button-icon jarviswidget-toggle-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Collapse"><i class="fa fa-minus "></i></a>
                                    <a href="javascript:void(0);" class="button-icon jarviswidget-fullscreen-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Fullscreen">
                                        <i class="fa fa-expand "></i></a>
                                </div>               

                                <span class="widget-icon"> 
                                    <i class="fa fa-edit"></i> </span>
                                <h2>Registration Data </h2>				

                                <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header>

                            <!-- widget div-->
                            <div role="content">

                                <!-- widget edit box -->
                                <div class="jarviswidget-editbox">
                                    <!-- This area used as dropdown edit box -->

                                </div>
                                <!-- end widget edit box -->

                                <!-- widget content -->
                                <div class="widget-body">



                                    <br>
                                    <div class="row">

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class=" control-label">Issue Date</label>

                                                <input type="text" name="regIssueDate" data-dateformat="yy-mm-dd" class="form-control datepicker">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class=" control-label">Expiry Date</label>
                                                <input type="text" name="regExpiryDate" data-dateformat="yy-mm-dd" class="form-control datepicker">

                                            </div>
                                        </div>
                                    </div>


                                    <br>
                                    <div class="row">

                                        <fieldset>
                                            <legend>International Permit Data:</legend>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class=" control-label">Permit No </label>

                                                    <input type="text" name="permitNo" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class=" control-label">Issue Date</label>

                                                    <input type="text" name="permitIssueDate" class="form-control datepicker" data-dateformat="yy-mm-dd">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class=" control-label">Expiry Date</label>
                                                    <input type="text" name="permitExpiryDate" class="form-control datepicker" data-dateformat="yy-mm-dd">

                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <!-- end widget content -->

                            </div>
                            <!-- end widget div -->

                        </div>

                    </article>


                    <article class="col-sm-12 col-md-12 col-lg-12 ">

                        <!-- Widget ID (each widget will need unique ID)-->
                        <div class="jarviswidget jarviswidget-sortable" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false" role="widget">

                            <header role="heading" class="ui-sortable-handle">
                                <div class="jarviswidget-ctrls" role="menu">   
                                    <a href="javascript:void(0);" class="button-icon jarviswidget-toggle-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Collapse"><i class="fa fa-minus "></i></a>
                                    <a href="javascript:void(0);" class="button-icon jarviswidget-fullscreen-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Fullscreen">
                                        <i class="fa fa-expand "></i></a>
                                </div>
                                <span class="widget-icon"> 
                                    <i class="fa fa-edit"></i> </span>
                                <h2>Ecowas Data</h2>				

                                <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header>

                            <!-- widget div-->
                            <div role="content">

                                <!-- widget edit box -->
                                <div class="jarviswidget-editbox">
                                    <!-- This area used as dropdown edit box -->

                                </div>
                                <!-- end widget edit box -->

                                <!-- widget content -->
                                <div class="widget-body">



                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Ecowas No </label>

                                                <input type="text" name="ecowasNo" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Issue Date</label>

                                                <input type="text" name="ecowasIssueDate" data-dateformat="yy-mm-dd" class="form-control datepicker">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Expiry Date</label>
                                                <input type="text" name="ecowasExpiryDate" data-dateformat="yy-mm-dd" class="form-control datepicker">

                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label class=" control-label">Remarks</label>
                                                <textarea name="remarks" rows="8" class="form-control"></textarea>

                                            </div>
                                        </div>

                                    </div>


                                </div>
                                <!-- end widget content -->

                            </div>
                            <!-- end widget div -->

                        </div>

                    </article>

                </div>

                <footer class="pull-right">
                    <button type="submit" class="btn btn-primary btn-block">
                        Submit
                    </button>
                </footer>

            </form>

            <!-- END ROW -->

        </section>
    </div>
</form>

</div>



@endsection

@section('customjs')
<script type="text/javascript" src="{{ asset('js/custom.js')}}"></script>
<script type="text/javascript">


$('#vehicleForm').on('submit', function (e) {
    e.preventDefault();
    var formData = $(this).serialize();
    console.log('server data: ' + formData);
$('#loaderModal').modal('show');

    $.ajax({
        url: "{{url('vehicle/new')}}",
        type: "POST",
        data: formData,
        dataType:"json",
        success: function (data) {
            $('#loaderModal').modal('hide');

            console.log(data);
            var status = data.status;
            console.log('status is :'+status);

            if (status == 0) {
                $('#successmsg').html(data.message);
                $('#sucessdiv').show();
            } else {
                $('#errormsg').html(data.message);
                $('#errordiv').show();
            }

        },
        error: function (jXHR, textStatus, errorThrown) {
            $('input:submit').removeAttr("disabled");
            $('#errordiv').html('Contact System Administrator');
            $('#errormsg').show();
        }
    });


});
</script>
@endsection