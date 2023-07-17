@extends('layout')
@section ('title')
Productos
@endsection

@section('content')
	<h1>Productos</h1>
	<form method="post" action="{{route('product.store')}}">
		@csrf
		<input name="name" placeholder="nombre"><br>
		<input name="precio" placeholder="precio"><br>
		<input name="cantidad" placeholder="cantidad"><br>

		<button type="submit"class="btn btn-success">Enviar</button><br>
	</form>
	<table class="table table-striped">
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
			<td>{{$productItem->name}}</td>
			<td>{{$productItem->precio}}</td>
			<td>{{$productItem->cantidad}}</td>
			<td><a href="{{route('product.edit',$productItem->id)}}"class="btn btn-success">editar</a>



			</td><td>
			<form  action="{{route('product.destroy', [$productItem->id])}}"method="POST">
				@method('DELETE')
				@csrf
				<button type="submit"class="btn btn-danger">eliminar</form>
			</td>
		</tr>


		@empty
		<li>no hay productos para mostrar </li>

		@endforelse
	</tbody>
	</table>

@endsection