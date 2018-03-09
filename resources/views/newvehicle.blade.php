@extends('layouts.master')

@section('content')
<div id="content">
    <div class="page-head">
        <h2 class="page-head-title">New Vehicle</h2>
        <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Vehicles</a></li>
            <li class="active">New Vehicle</li>
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

                                            <select class="select2 select2-hidden-accessible" name="sex"  tabindex="-1" aria-hidden="true" required>

                                                <option value="">Select ---</option>

                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Hs Code</label>

                                            <input type="text" name="fullname" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Status Code</label>

                                            <input type="text" name="dob" class="form-control datepicker">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">CPC Code</label>

                                            <input type="text" name="email" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Country</label>

                                            <input type="text" name="contactno" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Origin Make</label>

                                            <input type="text" name="contactno" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Model</label>

                                            <select class="select2 select2-hidden-accessible" name="sex"  tabindex="-1" aria-hidden="true" required>

                                                <option value="">Select ---</option>

                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Color</label>

                                            <select class="select2 select2-hidden-accessible" name="sex"  tabindex="-1" aria-hidden="true" required>

                                                <option value="">Select ---</option>

                                            </select>

                                        </div>
                                    </div>


                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Chassis Number</label>

                                            <input type="text" name="contactno" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Engine Number</label>

                                            <input type="text" name="contactno" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Plate Number</label>

                                            <input type="text" name="contactno" class="form-control">
                                        </div>
                                    </div>


                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Description</label>
                                            <textarea name="overseas_address" class="form-control"></textarea>

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
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Registered By</label>

                                            <input type="text" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Name</label>

                                            <input type="text" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Address</label>
                                            <textarea name="overseas_address" class="form-control"></textarea>

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class=" control-label">Issue Date</label>

                                            <input type="text" name="email" class="form-control datepicker">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class=" control-label">Expiry Date</label>
                                            <input type="text" name="email" class="form-control datepicker">

                                        </div>
                                    </div>
                                </div>


                                <br>
                                <div class="row">

                                    <fieldset>
                                        <legend>International Permit Data:</legend>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class=" control-label">Permit No </label>

                                                <input type="text" name="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class=" control-label">Issue Date</label>

                                                <input type="text" name="email" class="form-control datepicker">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class=" control-label">Expiry Date</label>
                                                <input type="text" name="email" class="form-control datepicker">

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
                        <!-- widget options:
                                usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
                                
                                data-widget-colorbutton="false"	
                                data-widget-editbutton="false"
                                data-widget-togglebutton="false"
                                data-widget-deletebutton="false"
                                data-widget-fullscreenbutton="false"
                                data-widget-custombutton="false"
                                data-widget-collapsed="true" 
                                data-widget-sortable="false"
                                
                        -->
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
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class=" control-label">Ecowas No </label>

                                            <input type="text" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class=" control-label">Issue Date</label>

                                            <input type="text" name="email" class="form-control datepicker">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class=" control-label">Expiry Date</label>
                                            <input type="text" name="email" class="form-control datepicker">

                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class=" control-label">Remarks</label>
                                            <textarea name="overseas_address" rows="8" class="form-control"></textarea>

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

            <!-- END ROW -->

        </section>
    </div>
</form>

</div>
</div>


@endsection

@section('customjs')

@endsection