@extends('layouts.app')

@section('content')
	<section class="container">
		<h2>Questa è la lista dei Fumetti</h2>

		<div class="row">
			@foreach ($comicsList as $comic)
				<div class="card m-3 p-0" style="width: 18rem;">
					<img src="{{ $comic->thumb }}" class="card-img-top" style="height: 20rem;">
					<div class="card-body">
						<h5 class="card-title">Titolo: {{ $comic->title }}</h5>
					</div>
					<a href="/comics/{{ $comic->id }}" class="btn btn-primary">More Info</a>
				</div>
			@endforeach
		</div>
	</section>
@endsection
