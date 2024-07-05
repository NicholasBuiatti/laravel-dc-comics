@extends('layouts.app')

@section('content')
	<section class="container">
		<img src="{{ $comicsList->thumb }}" alt="" style="height: 20rem">
		<h2>TITOLO: {{ $comicsList->title }}</h2>
		<p>{{ $comicsList->descritpion }}</p>
		<span>PREZZO: {{ $comicsList->price }}</span>
		<p>DATA DI VENDITA: {{ $comicsList->sale_date }}</p>
		<span>SERIE: {{ $comicsList->series }}</span>
		<p>TIPO: {{ $comicsList->type }}</p>
	</section>
@endsection
