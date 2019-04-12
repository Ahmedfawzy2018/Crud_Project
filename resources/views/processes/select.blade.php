@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		@if(session('info'))
        <div class="alert alert-success">
           {{session('info')}}
        </div>
        @endif
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<td>Product</td>
					<td>Category</td>
					<td>Price</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>
				@if(count($product) > 0)
				@foreach($product->all() as $product)
				<tr>
					<td>{{ $product->name }}</td>
					<td>{{ $product->category }}</td>
					<td>{{ $product->price }}</td>
					<td>
						<a href='{{ url("processes.update/{$product->id}") }}' class="label label-success">Update</a> |
						<a href='{{ url("processes.delete/{$product->id}") }} ' class="label label-danger">Delete</a>
					</td>
				</tr>
				@endforeach
				@endif
			</tbody>
		</table>
	</div>
</div>
@endsection