@extends('frontend.frontend_master')

@section('content')


    <div class="body-content">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">
                    <!-- Sign-in -->
                    <div class="col-md-6 col-sm-6 sign-in">
                        <h4 class="">Sign in</h4>
                        <p class="">Hello, Welcome to your account.</p>
                        @if($errors->any())
                            {{ $errors->first() }}
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                                <input name="email" type="email" class="form-control"  id="email" >
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                                <input name="password" type="password" class="form-control" id="password">
                            </div>
                            <div class="radio outer-xs">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Remember me!
                                </label>
                                <a href="#" class="forgot-password pull-right">Forgot your Password?</a>
                            </div>
                            <input value="login" type="submit" class="btn-upper btn btn-primary ">
                        </form>
                    </div>
                    <!-- Sign-in -->




                {{--                Registration--}}


                <!-- create a new account -->
                    <div class="col-md-6 col-sm-6 create-new-account">
                        <h4 class="checkout-subtitle">Create a new account</h4>
                        <p class="text title-tag-line">Create your new account.</p>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
                                <input name="email" type="text" class="form-control unicase-form-control text-input" id="email" >
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
                                <input name="name" type="text" class="form-control unicase-form-control text-input" id="name" >
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Phone Number <span>*</span></label>
                                <input name="phone_number" type="text" class="form-control unicase-form-control text-input" id="phone_number" >
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Password <span>*</span></label>
                                <input name="password" type="password" class="form-control unicase-form-control text-input" id="password" >
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label>
                                <input name="password_confirmation" type="password" class="form-control unicase-form-control text-input"  id="password_confirmation" >
                            </div>
                            <input value="Sign up" type="submit" class="btn-upper btn btn-primary ">
                        </form>


                    </div>
                    <!-- create a new account -->			</div><!-- /.row -->
            </div><!-- /.sigin-in-->


        </div>
    </div>





@endsection
