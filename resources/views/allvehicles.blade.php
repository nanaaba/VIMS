@extends('layouts.forms')

@section('content')


<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title">Vehicles</h2>
        <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>

            <li class="active">Vehicles</li>
        </ol>
    </div>
    <div class="main-content container-fluid">



        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default table-responsive">

                    <div class="panel-body">
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
                </div>
            </div>
        </div>


    </div>
</div>


@endsection

@section('customjs')

<script type="text/javascript">





    var datatable = $('#vehicleTbl').DataTable();




    getVehicles();

    function getVehicles() {
        $('.loader').addClass('be-loading-active');

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
                                '<a  href="information/'+value.vehicleNo+'"   type="button" class="icon btn btn-outline-info btn-sm  col-sm-6 btn-edit editBtn" ><i title="View" class="mdi mdi-eye""></i><span class="hidden-md hidden-sm hidden-xs"> </span></a>' +
                                '<a  href="#" onclick="deleteUser(' + value.id + ')" type="button" class="icon btn btn-outline-info btn-sm  col-sm-6 btn-edit editBtn" ><i title ="Delete" class="mdi mdi-delete""></i><span class="hidden-md hidden-sm hidden-xs"> </span></a>' +
                                '</td>';
                        rowNode = datatable.row.add(r);
                    });
                    rowNode.draw().node();
                }

                $('.loader').removeClass('be-loading-active');
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


