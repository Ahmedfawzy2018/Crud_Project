@extends('layouts.app')
@section('content')
       <div class="container">  
                <form  id="contact"  action=' {{ URL::to("processes.select") }}' >
                    @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{$error}}
                    </div>
                    @endforeach
                    @endif
                <fieldset >
                    <h1 style="text-align: center;">Item {{ $product->id }}</h1>
                        <p><?php echo $product->description; ?>
                            </p>
                </fieldset>
                <fieldset>
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Back</button>
                </fieldset>

                </form>
    </div>
@endsection