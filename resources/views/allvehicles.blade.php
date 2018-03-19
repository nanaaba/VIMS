@extends('layouts.master')

@section('content')


<div id="content">
    <div class="page-head">
        <h2 class="page-head-title"> Vehicles</h2>
        <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Vehicles</a></li>
            <li class="active">All Vehicles</li>
        </ol>
    </div>
    <div class="main-content container-fluid">
        <section id="widget-grid" class="">


            <!-- START ROW -->

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
                            <h2>Vehicles </h2>				

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

                                <table id="vehicleTbl" class="table table-condensed table-hover table-bordered table-striped">
                                    <thead>
                                        <tr>

                                            <th>Chasis No</th>  
                                            <th>Make</th>  
                                            <th>Model</th>  
                                            <th>Color</th>  
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                </table>
                            </div>
                            <!-- end widget content -->

                        </div>
                        <!-- end widget div -->

                    </div>

                </article>



            </div>


            <!-- END ROW -->

        </section>
    </div>
</form>

</div>


@endsection

@section('customjs')

<script type="text/javascript">





    var datatable = $('#vehicleTbl').DataTable();




    getVehicles();

    function getVehicles() {
        $('#loaderModal').modal('show');

        $.ajax({
            url: "{{url('vehicles/getall')}}",
            type: "GET",
            dataType: 'json',
            success: function (data) {


                console.log('server data :' + data.data);
                var dataSet = data.data;
                console.log(dataSet);
                datatable.clear().draw();
                console.log('size' + dataSet.length);
                if (dataSet.length == 0) {
                    console.log("NO DATA!");
                } else {
                    $.each(dataSet, function (key, value) {


                        var j = -1;
                        var r = new Array();
                        // represent columns as array
                        r[++j] = '<td class="subject"> ' + value.chasisNo + '</td>';
                        r[++j] = '<td class="subject">' + value.make + '</td>';
                        r[++j] = '<td class="subject">' + value.model + '</td>';
                        r[++j] = '<td class="subject">' + value.colour + '</td>';

                        r[++j] = '<td class="actions">' +
                                '<a  href="information/' + value.vehicleNo + '"   type="button" class=" btn btn-labeled btn-primary btn-sm  col-sm-6" ><i class="glyphicon glyphicon-eye-open"></i> </a> ' +
                                '<a  href="#"   type="button" class=" btn btn-labeled btn-danger btn-sm  col-sm-6" ><i class="glyphicon glyphicon-trash"></i></a> ' +
                                '</td>';
                        rowNode = datatable.row.add(r);
                    });
                    rowNode.draw().node();
                }

                $('#loaderModal').modal('hide');
            }

        });
    }

    function editUser(id) {

        $.ajax({
            url: "users/" + id,
            type: "GET",
            dataType: 'json',
            success: function (data) {
                $('#editregiondiv').hide();
                if (data == "401") {
                    $('#sessionModal').modal({backdrop: 'static'}, 'show');
                }

                if (data == "500") {
                    $('#errorModal').modal('show');
                }
                $('.loader').removeClass('be-loading-active');
                console.log('server data :' + data);
                var dataArray = data.data;

                $('#username').val(dataArray[0].name);
                $('#email').val(dataArray[0].email);
                $('#contact').val(dataArray[0].contact);
                $('#editrole').val(dataArray[0].role);
                $('#userid').val(dataArray[0].id);

                $('#editrole').change();

                $('#edituser').modal('show');
            }

        });
    }


    function deleteUser(id) {
        $('#itemid').val(id);
        $('#deleteModal').modal('show');
    }

</script>
@endsection


