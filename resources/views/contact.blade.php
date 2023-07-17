@extends('layout')
@section ('title')
Contact
@endsection
@section('content')
	<h1>Contact</h1>
	<form method="POST" action="/contact">
		@csrf
		<input name="name" placeholder="nombre"><br>
		<input name="email" placeholder="correo"><br>
		{{--<input name="subject" placeholder="asunto"><br>
		<textarea name="message" placeholder="mensaje"></textarea><br>--}}
		<button type="submit">Enviar</button><br>
	</form>
@endsection