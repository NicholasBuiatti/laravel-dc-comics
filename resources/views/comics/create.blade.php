@extends('layouts.app')

@section('content')
	<section class="container">
		<h1>Aggiungi un Fumetto</h1>
		<form method="POST" action="{{ route('comics.store') }}">
			@csrf
			<div class="mb-3 col-4">
				<label class="form-label">TITOLO</label>
				<input type="text" class="form-control" name="title">
			</div>
			<div class="mb-3">
				<label class="form-label">DESCRIZIONE</label>
				<textarea type="text" class="form-control" name="description"></textarea>
			</div>
			<div class="mb-3">
				<label class="form-label">URL IMMAGINE COPERTINA</label>
				<input type="text" class="form-control" name="thumb">
			</div>
			<div class="mb-3 col-2">
				<label class="form-label">PREZZO</label>
				<input type="number"class="form-control" name="price">
			</div>
			<div class="mb-3 col-4">
				<label class="form-label">SERIE</label>
				<input type="text" class="form-control" name="series">
			</div>
			<div class="mb-3 col-2">
				<label class="form-label">DATA DI VENDITA</label>
				<input type="date" class="form-control" name="sale_date">
			</div>
			<div class="mb-3 col-2">
				<label class="form-label">TIPOLOGIA</label>
				<input type="text" class="form-control" name="type">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>

	</section>
@endsection
