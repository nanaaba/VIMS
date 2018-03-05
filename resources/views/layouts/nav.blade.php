<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Dashboard</a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                        <li class="divider">Menu</li>
                        <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                            <a href="{{ url('dashboard') }}">
                                <i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                        </li>

                        <li class="{{ Request::is('agentcases*') ? 'active' : '' }}"><a href="{{ url('agentcases') }}"><i class="icon mdi mdi-case"></i><span> Reported Cases</span></a>
                        </li>

                        <li class="parent  {{ Request::is('drivers*') ? 'active' : '' }}"><a href="#">
                                <i class="icon mdi mdi-home"></i><span>Driver</span></a>
                            <ul class="sub-menu">


                                <li class="{{ Request::is('drivers/new') ? 'active' : '' }}">
                                    <a href="{{ url('drivers/new') }}"  class="menu-item">
                                        New Driver</a>
                                </li>
                                <li class="{{ Request::is('drivers/all') ? 'active' : '' }}">
                                    <a href="{{ url('drivers/all') }}"  class="menu-item">
                                       All Drivers</a>
                                </li>


                            </ul>
                        </li>
                        
                         <li class="parent  {{ Request::is('vehicles*') ? 'active' : '' }}"><a href="#">
                                <i class="icon mdi mdi-home"></i><span>Vehicle</span></a>
                            <ul class="sub-menu">


                                <li class="{{ Request::is('vehicles/new') ? 'active' : '' }}">
                                    <a href="{{ url('vehicles/new') }}"  class="menu-item">
                                        New Vehicle</a>
                                </li>
                                <li class="{{ Request::is('vehicles/all') ? 'active' : '' }}">
                                    <a href="{{ url('vehicles/all') }}"  class="menu-item">
                                       All Vehicles</a>
                                </li>


                            </ul>
                        </li>



                    

                        <li class="{{ Request::is('users*') ? 'active' : '' }}"><a href="{{ url('users') }}"><i class="icon mdi mdi-account"></i><span>User Management</span></a>
                        </li>
                        <li class="{{ Request::is('reports*') ? 'active' : '' }}"><a href="{{ url('reports') }}"><i class="icon mdi mdi-calendar-account"></i><span>Report</span></a>
                        </li>
                        <li class="{{ Request::is('audits*') ? 'active' : '' }}"><a href="{{ url('audits') }}"><i class="icon mdi mdi-account"></i><span>Audit Logs</span></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>