<!-- HEADER -->
<header id="header">
    <div id="logo-group"  style="display: inline-block;">

        <!--             PLACE YOUR LOGO HERE style="margin-top: 3px;"-->
        <span id="logo"> 
            <img src="{{ asset('img/logo.png')}}" height="20" alt="GRA">
<!--                                                                     <img src="{{ asset('img/text.png')}}" style="height: 38px;" alt="GRA">-->

        </span>

    </div>

    <!--    <div class="row" >
            <div class="column">
                <img src="{{ asset('img/logo.png')}}" alt="Fjords" style="width:100%">
            </div>
            <div class="column">
                <img src="{{ asset('img/text.png')}}" alt="Forest" style="width:100%">
            </div>
    
        </div>-->
    <!-- pulled right: nav area -->
    <div class="pull-right">


        <!-- collapse menu button -->
        <div id="hide-menu" class="btn-header pull-right">
            <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fas fa-bars"></i></a> </span>
        </div>
     
        <div id="logout" class="btn-header transparent pull-right">
            <span> <a href="login.html" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fas fa-sign-out-alt"></i></a> </span>
        </div>
        <!-- end logout button -->

        <!-- search mobile button (this is hidden till mobile view port) -->

        <!-- end search mobile button -->


        <!-- end input: search field -->

        <!-- fullscreen button -->

        <!-- end fullscreen button -->

    </div>
    <!-- end pulled right: nav area -->

</header>
<!-- END HEADER -->
