@extends('layouts.app')

@section('content')
	{{-- <div class="container mx-auto px-6 pt-10 home-container">
		<div class="home-container__text">
			<h1>Welcome</h1>
			<h3 >Millions of Movies, TV Shows and people to discover, Explore more </h3>
		</div>
	</div> --}}

	<div class="container mx-auto px-4 pt-16 mt-8">
		{{-- POPULAR TV SERIES --}}
		<div class="popular-tvseries">
			<h2 class="upper-case tracking-wider text-gray-700 text-lg font-semibold">Popular TV Shows</h2>
			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
				@foreach ($famousTv as $tvshow)
					<x-tv-series-card :tvshow="$tvshow" :genres="$genres"/>
				@endforeach
			</div>

		</div>
    {{-- END OF POPULAR SERIES --}}


    {{-- NOW PLAYING --}}
		<div class="nowplaying-movies py-24">
			<h2 class="upper-case tracking-wider text-gray-700 text-lg font-semibold">Top Rated Tv Shows</h2>
			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
				@foreach ($topRatedTv as $tvshow)
					<x-tv-series-card :tvshow="$tvshow"/>
				@endforeach
			</div>

		</div>
		{{-- END OF NEW MOVIES --}}
	</div>

@endsection
