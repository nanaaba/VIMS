<?php $__env->startSection('content'); ?>

<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title">General Report</h2>
        <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Report</a></li>
            <li class="active">General Report</li>
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

                                <?php echo e(csrf_field()); ?>


    <div class="row">

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Report Type</label>

                                            <select class="select2 select2-hidden-accessible" name="reportlevel" id="reportlevel" tabindex="-1" aria-hidden="true" required>

                                                <option value="">Select ---</option>
                                                <option value="Over Stayed Cars">Over Stayed Cars</option> 
                                                <option value="New Entry">New Entry</option>

                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Car Types</label>

                                            <select class="select2 select2-hidden-accessible" name="reportlevel" id="reportlevel" tabindex="-1" aria-hidden="true" required>

                                                <option value="">Select ---</option>

                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Car Brand</label>

                                            <select class="select2 select2-hidden-accessible" name="reportlevel" id="reportlevel" tabindex="-1" aria-hidden="true" required>

                                                <option value="">Select ---</option>
                                                <option value="Over Stayed Cars">Over Stayed Cars</option> 
                                                <option value="New Entry">New Entry</option>

                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Country</label>

                                            <select class="select2 select2-hidden-accessible" name="reportlevel" id="reportlevel" tabindex="-1" aria-hidden="true" required>

                                                <option value="">Select ---</option>

                                            </select>

                                        </div>
                                    </div>
  
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class=" control-label">Date Range</label>

                                            <input type="text" name="daterange" value="" class="form-control daterange">
                                        </div>
                                    </div>
                                </div>







                                <div class="row xs-pt-15">
                                    <div class="col-xs-6">

                                    </div>
                                    <div class="col-xs-6">
                                        <p class="text-right">
                                            <button type="submit" class="btn btn-space btn-primary">Spool Result</button>

                                        </p>
                                    </div>
                                </div>
                            </form>





                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default panel-border-color panel-border-color-primary">



                    <div class="panel-body">
                        <table id="transactionTbl" class=" table-responsive table table-striped table-hover table-fw-widget">
                            <thead>
                                <tr>
                                    <th>Chassis Number</th>
                                    <th>Entry Days</th>
                                    <th>Entry Date</th>
                                    <th>Due Date</th>
                                    <th>Country</th>
                                    <th colspan="4" style="font-size: 14px">Car Property Details</th>
                                    <th>Custom Details</th>
                                    <th>Dvla Details </th>
                                   
                                </tr>
                                 <tr>
                                    <th>Chassis Number</th>
                                    <th>Entry Days</th>
                                    <th>Entry Date</th>
                                    <th>Due Date</th>
                                    <th>Country</th>
                                    <th>Vehicle Type</th>
                                    <th>Fuel Capacity</th>
                                    <th>Mileage </th>
                                    <th>Trains </th>
                                    <th> </th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody id="transactionbody">

                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('customjs'); ?>
<script type="text/javascript">


//        var datatable = $('#transactionTbl').DataTable({
//            buttons: [
//                'copy', 'excel', 'pdf'
//            ]
//        });
//        datatable.buttons().container()
//                .appendTo($('.col-sm-6:eq(0)', datatable.table().container()));

    var datatable = $('#transactionTbl').DataTable({
        lengthChange: false,
        buttons: [
            {extend: 'copyHtml5', footer: true},
            {extend: 'excelHtml5', footer: true},
            {extend: 'csvHtml5', footer: true},
            {extend: 'pdfHtml5', footer: true},
            {extend: 'print', footer: true}
        ]
    });


    datatable.buttons().container()
            .appendTo('#transactionTbl_wrapper .col-sm-6:eq(0)');
    $('#reportForm').on('submit', function (e) {
        $('.loader').addClass('be-loading-active');
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: "<?php echo e(url('reports/searchresult')); ?>",
            type: "POST",
            data: formData,
            dataType: 'json',
            success: function (data) {

                if (data == "401") {
                    $('#sessionModal').modal({backdrop: 'static'}, 'show');
                }

                if (data == "500") {
                    $('#errorModal').modal('show');
                }
                $('.loader').removeClass('be-loading-active');
                console.log('server data :' + data.data);
                var dataSet = data.data;
                console.log(dataSet);
                datatable.clear().draw();
                console.log('size' + dataSet.length);
                if (dataSet.length == 0) {
                    $('#infoModal').modal('show');

                    return;
                } else {
                    $.each(dataSet, function (key, value) {




                        var j = -1;
                        var r = new Array();
                        // represent columns as array
                        r[++j] = '<td>' + value.transactionid + '</td>';
                        r[++j] = '<td class="subject"> ' + value.category_name + '</td>';
                        r[++j] = '<td class="subject">' + value.amount + '</td>';
                        r[++j] = '<td class="subject">' + value.cashier_name + '</td>';
                        r[++j] = '<td class="subject">' + value.shift + '</td>';
                        r[++j] = '<td class="subject">' + value.region_name + '</td>';
                        r[++j] = '<td class="subject">' + value.area + '</td>';
                        r[++j] = '<td class="subject">' + value.transactiondate + '</td>';
                        rowNode = datatable.row.add(r);
                    });
                    rowNode.draw().node();
                }
                var total = datatable.column(2).data().sum();
                $('#totalcost').html('GHS ' + total.toFixed(2));
                console.log('AMount' + total);
                $('.loader').removeClass('be-loading-active');
            }



        });
    });
 
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.forms', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>