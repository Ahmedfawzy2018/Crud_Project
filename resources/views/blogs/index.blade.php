@extends('layouts.master')
@section('content')
<div class="alert alert-primary" role="alert">
            <center><h1> A simple Data Form </h1></center> 
</div>
     <div class="limiter">
       <div class="container100">
        
            <div class="wraplogin100">
                <form  class="login100-form" action=" {{ URL::to('processes.create') }}" method="post"  >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{$error}}
                    </div>
                    @endforeach
                    @endif

                    <div class="wrap-input100 " >
                        <input class="input100" type="text" id="name" name="name"  placeholder="Enter Product Name">
                        <span class="focus-input100" ></span>
                    </div>

                    <div class="wrap-input100 " >
                        <input class="input100" type="text" id="category" name="category"  placeholder="Enter Product Category">
                        <span class="focus-input100" ></span>
                    </div>

                    <div class="wrap-input100 " >
                        <input class="input100" type="number" id="price" name="price" placeholder="Enter Product Price">
                        <span class="focus-input100" ></span>
                    </div>

                    
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="submit" name="submit" onclick="">
                                Submit
                            </button>
                        </div>
                    </div>

                     <div class="text-center p-t-15">
                        <a class="txt2" href="{{ URL::to('processes.select')}}">
                            Display List Of Products
                        </a>
                    </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection