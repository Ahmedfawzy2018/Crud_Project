@extends('layouts.master')
@section('content')    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form  class="login100-form " name="mylogin" id="mylogin" action="{{ URL::to('blogs.index') }}" method="post"  onsubmit = "return validatedata();">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <span class="login100-form-title p-b-26">
                        Welcome
                    </span>

                    <div class="wrap-input100 " >
                        <input class="input100" type="text" id="username" name="username" placeholder="Enter Username">
                        <span class="focus-input100" ></span>
                    </div>

                    <div class="wrap-input100 ">
                        <input class="input100" type="password" id="password" name="password" placeholder="Enter Password">
                        <span class="focus-input100" ></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="submit" name="submit" >
                                Login
                            </button>
                        </div>
                    </div>

                    <div class="text-center p-t-115">
                        <span class="txt1">
                            Don’t have an account?
                        </span>

                        <a class="txt2" href="#">
                            Sign Up
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection