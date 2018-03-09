
<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
        <span> <!-- User image size is adjusted inside CSS, it should stay as it --> 
<!--            <a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">-->

            <a href="#">
                <span>
                   Welcome, john.doe 
                </span>
            </a> 

        </span>
    </div>
    <!-- end user info -->

    <!-- NAVIGATION : This navigation is also responsive-->
    <nav>
        <!-- 
        NOTE: Notice the gaps after each icon usage <i></i>..
        Please note that these links work a bit different than
        traditional href="" links. See documentation for details.
        -->

        <ul>

            <li  class="<?php echo e(Request::is('dashboard') ? 'active' : ''); ?>">
                <a href="<?php echo e(url('dashboard')); ?>">
                    <i class="fa fa-lg fa-fw fa-inbox"></i>
                    <span class="menu-item-parent">Dashboard</span> 

                </a>
            </li>
            <li class="<?php echo e(Request::is('drivers*') ? 'active' : ''); ?>">
                <a href="#">
                    <i class="fa fa-lg fa-fw fa-bar-chart-o"></i> 
                    <span class="menu-item-parent">Driver</span></a>
                <ul>
                    <li class="<?php echo e(Request::is('drivers/new') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('drivers/new')); ?>"  class="menu-item">
                            New Driver</a>
                    </li>
                    <li class="<?php echo e(Request::is('drivers/all') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('drivers/all')); ?>"  class="menu-item">
                            All Drivers</a>
                    </li>


                </ul>
            </li>
            <li class="<?php echo e(Request::is('agentcases*') ? 'active' : ''); ?>">
                <a href="<?php echo e(url('agentcases')); ?>">

                    <i class="fa fa-lg fa-fw fa-inbox"></i>
                    <span class="menu-item-parent">Reported Cases</span> 
                </a>
            </li>

            <li class="  <?php echo e(Request::is('vehicles*') ? 'active' : ''); ?>">
                <a href="#"> <i class="fa fa-lg fa-fw fa-bar-chart-o"></i> 
                    <span class="menu-item-parent">Vehicle</span></a>
                <ul class="sub-menu">


                    <li class="<?php echo e(Request::is('vehicles/new') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('vehicles/new')); ?>"  class="menu-item">
                            New Vehicle</a>
                    </li>
                    <li class="<?php echo e(Request::is('vehicles/all') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('vehicles/all')); ?>"  class="menu-item">
                            All Vehicles</a>
                    </li>


                </ul>
            </li>





            <li class="<?php echo e(Request::is('users*') ? 'active' : ''); ?>">
                <a href="<?php echo e(url('users')); ?>">
                   
                <i class="fa fa-lg fa-fw fa-inbox"></i>
                    <span class="menu-item-parent">User Management</span> 

                </a>
            </li>
            <li class="<?php echo e(Request::is('reports*') ? 'active' : ''); ?>">
                <a href="<?php echo e(url('reports')); ?>">
                <i class="fa fa-lg fa-fw fa-inbox"></i>
                    <span class="menu-item-parent"> Report</span> 
                </a>
            </li>
            <li class="<?php echo e(Request::is('audits*') ? 'active' : ''); ?>">
                <a href="<?php echo e(url('audits')); ?>">
                    <i class="fa fa-lg fa-fw fa-inbox"></i>
                    <span class="menu-item-parent">Audit Logs</span>
                </a>
            </li>
        </ul>
    </nav>


    <span class="minifyme" data-action="minifyMenu"> 
        <i class="fa fa-arrow-circle-left hit"></i> 
    </span>

</aside>
<!--
<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Dashboard</a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                        <li class="divider">Menu</li>
                        <li class="<?php echo e(Request::is('dashboard') ? 'active' : ''); ?>">
                            <a href="<?php echo e(url('dashboard')); ?>">
                                <i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                        </li>

                        <li class="<?php echo e(Request::is('agentcases*') ? 'active' : ''); ?>"><a href="<?php echo e(url('agentcases')); ?>"><i class="icon mdi mdi-case"></i><span> Reported Cases</span></a>
                        </li>

                        <li class="parent  <?php echo e(Request::is('drivers*') ? 'active' : ''); ?>"><a href="#">
                                <i class="icon mdi mdi-home"></i><span>Driver</span></a>
                            <ul class="sub-menu">


                                <li class="<?php echo e(Request::is('drivers/new') ? 'active' : ''); ?>">
                                    <a href="<?php echo e(url('drivers/new')); ?>"  class="menu-item">
                                        New Driver</a>
                                </li>
                                <li class="<?php echo e(Request::is('drivers/all') ? 'active' : ''); ?>">
                                    <a href="<?php echo e(url('drivers/all')); ?>"  class="menu-item">
                                       All Drivers</a>
                                </li>


                            </ul>
                        </li>
                        
                         <li class="parent  <?php echo e(Request::is('vehicles*') ? 'active' : ''); ?>"><a href="#">
                                <i class="icon mdi mdi-home"></i><span>Vehicle</span></a>
                            <ul class="sub-menu">


                                <li class="<?php echo e(Request::is('vehicles/new') ? 'active' : ''); ?>">
                                    <a href="<?php echo e(url('vehicles/new')); ?>"  class="menu-item">
                                        New Vehicle</a>
                                </li>
                                <li class="<?php echo e(Request::is('vehicles/all') ? 'active' : ''); ?>">
                                    <a href="<?php echo e(url('vehicles/all')); ?>"  class="menu-item">
                                       All Vehicles</a>
                                </li>


                            </ul>
                        </li>



                    

                        <li class="<?php echo e(Request::is('users*') ? 'active' : ''); ?>"><a href="<?php echo e(url('users')); ?>"><i class="icon mdi mdi-account"></i><span>User Management</span></a>
                        </li>
                        <li class="<?php echo e(Request::is('reports*') ? 'active' : ''); ?>"><a href="<?php echo e(url('reports')); ?>"><i class="icon mdi mdi-calendar-account"></i><span>Report</span></a>
                        </li>
                        <li class="<?php echo e(Request::is('audits*') ? 'active' : ''); ?>"><a href="<?php echo e(url('audits')); ?>"><i class="icon mdi mdi-account"></i><span>Audit Logs</span></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>-->