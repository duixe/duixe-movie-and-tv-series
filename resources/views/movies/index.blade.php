@extends('layouts.app')

@section('content')
	<div class="container mx-auto px-6 pt-10 home-container">
		<div class="home-container__text">
			<h1>Welcome</h1>
			<h3 >Millions of Movies, TV Shows and people to discover, Explore more </h3>
		</div>
	</div>

	<div class="container mx-auto px-4 pt-16">
		{{-- POPULAR MOVIES --}}
		<div class="popular-movies">
			<h2 class="upper-case tracking-wider text-gray-700 text-lg font-semibold">Popular Movies</h2>
			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
				@foreach ($famousMovies as $popularMovie)
					<x-movie-card :popularMovie="$popularMovie" :genres="$genres"/>
				@endforeach
			</div>

		</div>
    {{-- END OF POPULAR MOVIES --}}


    {{-- NOW PLAYING --}}
		<div class="nowplaying-movies py-24">
			<h2 class="upper-case tracking-wider text-gray-700 text-lg font-semibold">Now Playing</h2>
			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
				@foreach ($nowPlayingMovies as $popularMovie)
					<x-movie-card :popularMovie="$popularMovie"/>
				@endforeach
			</div>

		</div>
		{{-- END OF NEW MOVIES --}}
	</div>

@endsection
