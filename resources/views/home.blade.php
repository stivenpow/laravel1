@extends('layout')
@section('title')
Home
@endsection
@section('content')
<h1>Home</h1>
{{--*<table class="table table-striped">
	<thead>
		<tr>
			<th>nombre</th>
			<th>precio </th>
			<th>cantidad</th>
		</tr>
	</thead>
	<tbody>
		@forelse($product as $productItem)

		<tr>
			<td>{{$productItem->name}}	</td>
			<td>{{$productItem->precio}}	</td>
			<td>{{$productItem->cantidad}}	</td>

			</td>
		</tr>


		@empty
		<li>no hay productos para mostrar </li>

		@endforelse
	</tbody>
	</table>--}}
@endsection
