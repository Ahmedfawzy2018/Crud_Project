@extends('layouts.app')
@section('content')

<p style="text-align: center;">Fill in form the required data to Insert New Product .</p>
<div class="container">  
  <form id="contact" action=" {{ URL::to('processes.create') }}" method="post">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <h3>CashCrud Product Form</h3>
    
    @if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
    @endif
    <fieldset>
      <input class="input100" type="text" id="name" name="name"  placeholder="Enter Product Name">
    </fieldset>
    <fieldset>
       <input class="input100" type="text" id="category" name="category"  placeholder="Enter Product Category">
    </fieldset>
    <fieldset>
      <input class="input100" type="text" id="price" name="price" placeholder="Enter Product Price">
    </fieldset>
    <fieldset>
      <textarea class="input100" id="description" name="description" placeholder="Enter Product Description" rows="3"></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
        <a class="txt2" href="{{ route('items') }}">
                Display List Of Products
        </a>
  </form>
</div>
@endsection

