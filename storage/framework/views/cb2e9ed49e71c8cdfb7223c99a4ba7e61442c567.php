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
</div>