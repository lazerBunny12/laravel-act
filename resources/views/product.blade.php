
@extends('layout')

@section('content')
<h1>{{ $title }}</h1>

<table class="table table-striped">
	<tr>
	<th>No.</th>
	<th>Name</th>
	<th>Unit</th>
	<th>Unit Price</th>
	<th>Category</th>
	<th>Description</th>
	<th>View Detail</th>
	</tr>

@php
$counter = 0;
@endphp

@foreach($products as $product)
	<tr>
		<td>{{++$counter}}</td>
		<td>{{ $product->name }}</td>
		<td>{{ $product->unit }}</td>
		<td>{{ $product->unit_price }}</td>
		<td>{{ $product->category }}</td>
		<td>{{ $product->description }}</td>
		<td><a href="/products/{{$product->id}}">View</a></td>

	</tr>
	@endforeach
</table>

@endsection