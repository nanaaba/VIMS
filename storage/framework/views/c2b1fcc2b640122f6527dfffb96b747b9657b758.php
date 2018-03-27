<?php $__env->startSection('content'); ?>
<?php
$informaion = json_decode($information, true);
$details = $informaion['data'];
?>
<div id="content">
    <div class="page-head">
        <h2 class="page-head-title"> <?php echo e($details['chasisNo']); ?> Information</h2>
        <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Vehicles</a></li>
            <li class="active"> <?php echo e($details['chasisNo']); ?> Information</li>
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
        <form id="updateVehicleForm" novalidate>


            <?php echo e(csrf_field()); ?>


            <div class="row">

                <div class="well well-sm well-light">
                    <h3> <?php echo e($details['chasisNo']); ?> Information
                        <br>
    <!--                    <<small>Simple Tabs</small>
                        -->
                    </h3>
                    <input type="hidden" name="vehicleno" value="<?php echo e($details['vehicleNo']); ?>"/>

                    <div id="tabs">
                        <ul>
                            <li>
                                <a href="#tabs-a">Vehicle Data</a>
                            </li>
                            <li>
                                <a href="#tabs-b">Registration Data</a>
                            </li>
                            <li>
                                <a href="#tabs-c">Permit Data</a>
                            </li>
                            <li>
                                <a href="#tabs-d">Ecowas Data</a>
                            </li>
                            <li>
                                <a href="#tabs-e">Trips</a>
                            </li>
                        </ul>

                        <div id="tabs-a" class="panel-body">

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Vehicle Type</label>

                                    <select class="select2 select2-hidden-accessible vehicletypes" name="vehicleTypeId"  tabindex="-1" aria-hidden="true" required>

                                        <option value="<?php echo e($details['vehicleType']); ?>"><?php echo e($details['vehicleType']); ?></option>

                                    </select>


                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Hs Code</label>

                                    <input type="text" name="hsCode" value="<?php echo e($details['hsCode']); ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Status Code</label>

                                    <input type="text" name="statusCode" value="<?php echo e($details['statusCode']); ?>" class="form-control datepicker">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">CPC Code</label>

                                    <input type="text" name="cpcCode" value="<?php echo e($details['cpcCode']); ?>" class="form-control">
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
                                    <label class=" control-label">Origin Make</label>

                                    <input type="text" name="make" value="<?php echo e($details['make']); ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Model</label>

                                    <select class="select2 select2-hidden-accessible models" name="model"  tabindex="-1" aria-hidden="true" required>

                                        <option value="<?php echo e($details['model']); ?>"><?php echo e($details['model']); ?></option>

                                    </select>

                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Color</label>

                                    <select class="select2 select2-hidden-accessible" name="color"  tabindex="-1" aria-hidden="true" required>

                                        <option value="<?php echo e($details['colour']); ?>"><?php echo e($details['colour']); ?></option>

                                    </select>

                                </div>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Chassis Number</label>

                                    <input type="text" name="chasisNo" value="<?php echo e($details['chasisNo']); ?>" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Engine Number</label>

                                    <input type="text" name="engineNo" value="<?php echo e($details['engineNo']); ?>" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Front Plate Number</label>

                                    <input type="text" name="frontPlateNo" value="<?php echo e($details['frontPlateNo']); ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Back Plate Number</label>

                                    <input type="text" name="backPlateNo" value="<?php echo e($details['backPlateNo']); ?>" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class=" control-label">Description</label>
                                    <textarea name="description" rows="8" class="form-control">
                                                    <?php echo e(trim($details['description'])); ?>

                                    </textarea>

                                </div>
                            </div>

                        </div>
                        <div id="tabs-b" class="panel-body">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class=" control-label">Issue Date</label>

                                    <input type="text" name="regIssueDate"  value="<?php echo e($details['regIssueDate']); ?>" class="form-control datepicker">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class=" control-label">Expiry Date</label>
                                    <input type="text" name="regExpiryDate" value="<?php echo e($details['regExpiryDate']); ?>" class="form-control datepicker">

                                </div>
                            </div>
                        </div>
                        <div id="tabs-c" class="panel-body">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Permit No </label>

                                    <input type="text" name="permitNo" value="<?php echo e($details['permitNo']); ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Issue Date</label>

                                    <input type="text" name="permitIssueDate" value="<?php echo e($details['permitIssueDate']); ?>" class="form-control datepicker">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Expiry Date</label>
                                    <input type="text" name="permitExpiryDate" value="<?php echo e($details['permitExpiryDate']); ?>" class="form-control datepicker">

                                </div>
                            </div>
                        </div>

                        <div id="tabs-d" class="panel-body">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Ecowas No </label>

                                    <input type="text" name="ecowasNo" value="<?php echo e($details['ecowasNo']); ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Issue Date</label>

                                    <input type="text" name="ecowasIssueDate" value="<?php echo e($details['ecowasIssueDate']); ?>" class="form-control datepicker">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Expiry Date</label>
                                    <input type="text" name="ecowasExpiryDate" value="<?php echo e($details['ecowasExpiryDate']); ?>" class="form-control datepicker">

                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label class=" control-label">Remarks</label>
                                    <textarea name="remarks" rows="8" class="form-control">
                                                    <?php echo e($details['remarks']); ?>


                                    </textarea>

                                </div>
                            </div>
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


<?php $__env->stopSection(); ?>

<?php $__env->startSection('customjs'); ?>

<script type="text/javascript">
    $('#tabs').tabs();
    getSettings();
    function getSettings() {


        $.ajax({
            url: "<?php echo e(url('settings/all')); ?>",
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


    $('#updateVehicleForm').on('submit', function (e) {
        e.preventDefault();
        var formData = $(this).serialize();
        console.log('server data: ' + formData);
        $('#loaderModal').modal('show');

        $.ajax({
            url: "<?php echo e(url('vehicle/update')); ?>",
            type: "PUT",
            data: formData,
            dataType: "json",
            success: function (data) {
                $('#loaderModal').modal('hide');

                console.log(data);
                var status = data.status;
                console.log('status is :' + status);

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

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>