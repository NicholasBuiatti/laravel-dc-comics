@extends('layouts.app')

@section('content')
	<section class="container">
		<h2>Questa è la lista dei Fumetti</h2>

		<div class="row">
			@foreach ($comicsList as $comic)
				<div class="card m-3" style="width: 18rem;">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">{{ $comic->title }}</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
						</p>
						<a href="/comics/{{ $comic->id }}" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			@endforeach
		</div>
	</section>
@endsection
