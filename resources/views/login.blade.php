    
@extends('layouts.login')

@section('content')

<div id="content" class="container">

    <div class="row">
    <div id="errordiv" style="display: none">
            <div class="alert alert-danger fade in">
                <button class="close" data-dismiss="alert">
                    ×
                </button>
                <i class="fa-fw fa fa-times"></i>
                <strong>Error!</strong> <span id="errormsg"> </span>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
            <div class="well no-padding">
                <form  id="loginForm" class="smart-form client-form">
                    {{csrf_field()}}

                    <header>
                        Sign In
                    </header>

                    <fieldset>

                        <section>
                            <label class="label">Username</label>
                            <label class="input"> <i class="icon-append fa fa-user"></i>
                                <input type="text" name="username" required>
                                <b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Please enter email address/username</b></label>
                        </section>

                        <section>
                            <label class="label">Password</label>
                            <label class="input"> <i class="icon-append fa fa-lock"></i>
                                <input type="password" name="password" required>
                                <b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Enter your password</b> </label>
                            <!--										<div class="note">
                                                                                                                    <a href="forgotpassword.html">Forgot password?</a>
                                                                                                            </div>-->
                        </section>

                        <section>
                            <label class="checkbox">
                                <input type="checkbox" name="remember" checked="">
                                <i></i>Stay signed in</label>
                        </section>
                    </fieldset>
                    <footer>
                        <button type="submit" class="btn btn-primary">
                            Sign in
                        </button>
                    </footer>
                </form>

            </div>


        </div>
    </div>
</div>

@endsection

