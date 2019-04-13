@extends('layouts.app')
@section('content')
       <div class="container">  
                <form  id="contact"  action=' {{ URL::to("processes.edit/{$product->id}") }}' method="post"  >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{$error}}
                    </div>
                    @endforeach
                    @endif
                <fieldset>
                        <input class="input100" type="text" id="name" name="name" value="<?php echo $product->name; ?>"  placeholder="Enter Product Name">
                </fieldset>
                <fieldset>
                        <input class="input100" type="text" id="category" name="category" value="<?php echo $product->category; ?>"  placeholder="Enter Product Category">
                </fieldset>
                <fieldset>
                        <input class="input100" type="text" id="price" name="price"  value="<?php echo $product->price; ?>" placeholder="Enter Product Price">
                </fieldset>
                <fieldset >
                        <input class="input100" type="text" id="description" name="description"  value="<?php echo $product->description; ?>" >
                </fieldset>
                <fieldset>
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                </fieldset>

                </form>
    </div>
@endsection