<header class="container">
	<header class="row justify-content-between align-items-center mb-5">
		<div class='col-5'>
			<h1 class="text-danger">FUMETTOLANDIA</h1>
		</div>

		<nav class="col-4 text-end">
			{{-- METTO LA CLASSE TESTO ROSSO SOLO QUANDO SONO SULLA PAGINA CHE HA IL NOME ROTTA UGUALE AL NOME ROTTA ATTUALE --}}
			<a href="{{ route('home') }}" class="{{ Route::currentRouteName() == 'home' ? 'text-danger' : '' }} me-3">HOME</a>
			<a href="{{ route('comics.index') }}"
				class="{{ Route::currentRouteName() == 'comics.index' ? 'text-danger' : '' }} me-3">LISTA FUMETTI</a>
		</nav>
	</header>
</header>
