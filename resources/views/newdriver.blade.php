@extends('layouts.master')

@section('content')



<div id="content">
    <div class="page-head">
        <h2 class="page-head-title">New Driver</h2>
        <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Drivers</a></li>
            <li class="active">New Driver</li>
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
                            <h2>Driver Personal Details</h2>				

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

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Name</label>

                                        <input type="text" name="fullname" class="form-control">
                                    </div>
                                </div>



                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Sex</label>

                                        <select class="select2 select2-hidden-accessible" name="sex"  tabindex="-1" aria-hidden="true" required>

                                            <option value="">Select ---</option>
                                            <option value="male">Male</option> 
                                            <option value="female">Female</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">DOB</label>

                                        <input type="text" name="dob" class="form-control datepicker">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Email Address</label>

                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Overseas Phone No</label>

                                        <input type="text" name="contactno" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Overseas address</label>
                                        <textarea name="overseas_address" class="form-control"></textarea>

                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Country</label>

                                        <input type="text" name="country" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Nationality</label>

                                        <input type="text" name="nationality" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Nationality ID No</label>

                                        <input type="text" name="nationalityid" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class=" control-label">Overseas</label>

                                        <input type="text" name="overseas" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class=" control-label">License No</label>

                                        <input type="text" name="licenseno" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class=" control-label">Issue Date</label>

                                        <input type="text" name="issue_date" class="form-control datepicker">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class=" control-label">Expiry Date</label>

                                        <input type="text" name="expiry_date" class="form-control datepicker">
                                    </div>
                                </div>
                            </div>
                            <!-- end widget content -->

                        </div>
                        <!-- end widget div -->

                    </div>

                </article>

            </div>



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
                            <h2>Passport Details</h2>				

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
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Passport No</label>

                                        <input type="text" name="licenseno" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Issue Date</label>

                                        <input type="text" name="issue_date" class="form-control datepicker">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Expiry Date</label>

                                        <input type="text" name="expiry_date" class="form-control datepicker">
                                    </div>
                                </div>


                            </div>
                            <!-- end widget content -->

                        </div>
                        <!-- end widget div -->

                    </div>

                </article>

            </div>





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
                            <h2>Other Data</h2>				

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
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Phone No in Ghana</label>

                                        <input type="text" name="licenseno" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Reg. Issue Date</label>

                                        <input type="text" name="issue_date" class="form-control datepicker">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Reg. Expiry Date</label>

                                        <input type="text" name="expiry_date" class="form-control datepicker">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class=" control-label">Ghana address</label>
                                        <textarea name="overseas_address" class="form-control"></textarea>

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class=" control-label">Remarks</label>
                                        <textarea name="overseas_address" class="form-control"></textarea>

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




@endsection

@section('customjs')

@endsection