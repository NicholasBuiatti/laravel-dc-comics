@extends('layouts.app')

@section('content')
	<section class="container">
		<h1>Aggiungi un Fumetto</h1>
		<form action="action="{{ route('comics.store') }}" method="POST">
			@csrf
			<div class="mb-3 col-4">
				<label class="form-label">TITOLO</label>
				<input type="text" class="form-control" name="title" required>
			</div>
			<div class="mb-3">
				<label class="form-label">DESCRIZIONE</label>
				<textarea type="text" class="form-control" name="description" required></textarea>
			</div>
			<div class="mb-3">
				<label class="form-label">URL IMMAGINE COPERTINA</label>
				<input type="text" class="form-control" name="thumb" required>
			</div>
			<div class="mb-3 col-2">
				<label class="form-label">PREZZO</label>
				<input type="number" min="0.99" max="999.99" class="form-control" name="price" required>
			</div>
			<div class="mb-3 col-4">
				<label class="form-label">SERIE</label>
				<input type="text" class="form-control" name="series" required>
			</div>
			<div class="mb-3 col-2">
				<label class="form-label">DATA DI VENDITA</label>
				<input type="date" class="form-control" name="sale_date" required>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>

	</section>
@endsection
