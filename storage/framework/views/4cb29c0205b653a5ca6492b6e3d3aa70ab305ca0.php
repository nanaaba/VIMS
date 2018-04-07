<?php $__env->startSection('content'); ?>
<div id="content">
    <div class="page-head">
        <h2 class="page-head-title">Trip Information</h2>
        <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="<?php echo e(url('vehicles/all')); ?>">Trips</a></li>
            <li class="active">Trip Information</li>
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
        
        <?php
        $info = json_decode($details,true);
        $data= $info['data'];
        ?>
        <section id="widget-grid" class="">

            <form id="updatetripForm" novalidate>
                <!-- START ROW -->

                <?php echo e(csrf_field()); ?>

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
                                <h2>Trip Data </h2>				

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

                                        <input type="hidden" name="tripid" value="<?php echo e($data['tripNo']); ?>" class="form-control">

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Trip Type </label>

                                                <input type="text" name="tripType" value="<?php echo e($data['tripType']); ?>" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Regime</label>

                                                <input type="text" name="regime" value="<?php echo e($data['regime']); ?>" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Customs Office</label>

                                                <input type="text" name="customsOffice" value="<?php echo e($data['customsOffice']); ?>" class="form-control">
                                            </div>
                                        </div>



                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Trade Ref No </label>

                                                <input type="text" name="tradeRefNo" value="<?php echo e($data['tradeRefNo']); ?>" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Country of Consignment </label>

                                                <input type="text" name="consCountry"  value="<?php echo e($data['consCountry']); ?>" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Last Country</label>

                                                <input type="text" name="lastCountry" value="<?php echo e($data['lastCountry']); ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Next Country</label>

                                                <input type="text" name="nextCountry" value="<?php echo e($data['nextCountry']); ?>" class="form-control">
                                            </div>
                                        </div>


                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Final Country</label>

                                                <input type="text" name="finalCountry" value="<?php echo e($data['finalCountry']); ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Entry Office</label>

                                                <input type="text" name="entryOffice" value="<?php echo e($data['entryOffice']); ?>" class="form-control">
                                            </div>
                                        </div><div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Exit Office</label>

                                                <input type="text" name="exitOffice" value="<?php echo e($data['exitOffice']); ?>" class="form-control">
                                            </div>
                                        </div><div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Car NetNo</label>

                                                <input type="text" name="carnetNo" value="<?php echo e($data['carnetNo']); ?>" class="form-control">
                                            </div>
                                        </div><div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Check In</label>

                                                <input type="text" name="checkInDate" value="<?php echo e($data['checkInDate']); ?>" class="form-control">
                                            </div>
                                        </div><div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Stay Duration</label>

                                                <input type="text" name="stayDuration" value="<?php echo e($data['stayDuration']); ?>" class="form-control">
                                            </div>
                                        </div><div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Import Duration</label>

                                                <input type="text" name="importDuration" value="<?php echo e($data['importDuration']); ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Permit Expiry Date</label>

                                                <input type="text" name="permExpiryDate" value="<?php echo e($data['permExpiryDate']); ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Purpose</label>

                                                <input type="text" name="purpose" value="<?php echo e($data['purpose']); ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Remarks</label>

                                                <input type="text" name="remarks" value="<?php echo e($data['remarks']); ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">CheckIn By</label>

                                                <input type="text" name="checkInBy" value="<?php echo e($data['checkInBy']); ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">CheckIn On</label>

                                                <input type="text" name="checkInOn" value="<?php echo e($data['checkInOn']); ?>" class="form-control">
                                            </div>
                                        </div>



                                          <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Vehicle Involved</label>

                                                <input type="text" name="checkInOn" value="<?php echo e($data['vehicle']['vehicleNo']); ?>" class="form-control">
                                                <br>
                                                <a  href="../vehicles/information/<?php echo e($data['vehicle']['vehicleNo']); ?>"   type="button" class=" btn btn-labeled btn-primary btn-sm  col-sm-6" >Vehicle Details </a> 

                                            </div>
                                        </div>
                                        
                                         <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Driver Involved</label>

                                                <input type="text" name="checkInOn" value="<?php echo e($data['driver']['othernames'].' '.$data['driver']['surname']); ?>" class="form-control">
                                                <br>
                                                <a  href="../drivers/information/<?php echo e($data['driver']['driverRegNo']); ?>"   type="button" class=" btn btn-labeled btn-primary btn-sm  col-sm-6" >Driver Details </a> 

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
                        Update
                    </button>
                </footer>

            </form>

            <!-- END ROW -->

        </section>
    </div>
</form>

</div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('customjs'); ?>
<script type="text/javascript" src="<?php echo e(asset('js/custom.js')); ?>"></script>
<script type="text/javascript">


$('#updatetripForm').on('submit', function (e) {
    e.preventDefault();
    var formData = $(this).serialize();
    console.log('server data: ' + formData);
    $('#loaderModal').modal('show');

    $.ajax({
        url: "<?php echo e(url('trip/new')); ?>",
        type: "POST",
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