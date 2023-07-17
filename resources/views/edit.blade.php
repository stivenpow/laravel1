@extends('layout')
@section ('title')
Productos
@endsection

@section('content')
	<h1>Editar Productos</h1>
	<form action="{{route('product.update', $product->id)}}" method="POST">
		@method('PATCH')
		@csrf
		<input name="name" placeholder="nombre" value="{{$product->name}}"><br>
		<input name="precio" placeholder="precio" value="{{$product->precio}}"><br>
		<input name="cantidad" placeholder="cantidad" value={{$product->cantidad}}><br>

		<button type="submit"class="btn btn-success">Enviar</button><br>
	</form>



@endsection