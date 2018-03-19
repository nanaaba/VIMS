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
        <div class="row">

            <div class="well well-sm well-light">
                <h3> <?php echo e($details['chasisNo']); ?> Information
                    <br>
<!--                    <<small>Simple Tabs</small>
                    -->
                </h3>

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

                                <select class="select2 select2-hidden-accessible" name="sex"  tabindex="-1" aria-hidden="true" required>

                                    <option value="">Select ---</option>

                                </select>

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class=" control-label">Hs Code</label>

                                <input type="text" name="hscode" value="<?php echo e($details['hsCode']); ?>" class="form-control">
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

                                <input type="text" name="country" value="<?php echo e($details['country']); ?>" class="form-control">
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

                                <select class="select2 select2-hidden-accessible" name="model"  tabindex="-1" aria-hidden="true" required>

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

                                <input type="text" name="chassisno" value="<?php echo e($details['chasisNo']); ?>" class="form-control">
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

                                <input type="text" name="plateno" value="<?php echo e($details['frontPlateNo']); ?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class=" control-label">Back Plate Number</label>

                                <input type="text" name="plateno" value="<?php echo e($details['backPlateNo']); ?>" class="form-control">
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
                                <input type="text" name="email" value="<?php echo e($details['regExpiryDate']); ?>" class="form-control datepicker">

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

                                <input type="text" name="ecowasn" value="<?php echo e($details['ecowasNo']); ?>" class="form-control">
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


    </div>

</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('customjs'); ?>
<script type="text/javascript">
    $('#tabs').tabs();
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>