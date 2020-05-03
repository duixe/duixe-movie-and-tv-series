@extends('layouts.app')

@section('content')
	<div class="container mx-auto px-4 pt-16 mt-12">
		{{-- POPULAR PEOPLE --}}
		<div class="popular-people">
			<h2 class="upper-case tracking-wider text-gray-700 text-lg font-semibold">Popular Actors</h2>
			<div class="people-grid grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
		    @foreach ($famousPeople as $person)
          <div class="people mt-8 shadow-md rounded-lg">
            <a href="{{ route('people.show', $person['id']) }}">
              <img class="sm:w-full rounded-t-lg hover:opacity-75 transition ease-in-out duration-150" src="{{ $person['profile_path'] }}" alt="">
            </a>
            <div class="mt-2 pl-2">
              <a href="{{ route('people.show', $person['id']) }}" class="text-left sm:text-center text-lg mt-2 hover:text-gray-700">{{ $person['name'] }}</a>
              <div class="text-left text-gray-600 text-sm truncate">{{ $person['known_for'] }}</div>
            </div>
          </div>
        @endforeach
			</div>
		</div>

    {{-- END OF POPULAR PEOPLE --}}
		<div class="page-load-status my-12">
			<div class="flex justify-center">
				<div class="infinite-scroll-request spinner my-8 text-5xl text-gray-900">&nbsp;</div>
			</div>
			<p class="infinite-scroll-last">End of Content</p>
			<p class="infinite-scroll-error">Error</p>
		</div>

		{{-- <div class="flex justify-center mt-12 people-paginate">
			@if ($previous)
				<a href="/people/page/{{ $previous}}" class="text-3xl mr-10"><i class="fa fa-arrow-left"></i>&nbsp; Previous</a>
			@endif

			@if ($next)
				<a href="/people/page/{{ $next }}" class="text-3xl">Next &nbsp;<i class="fa fa-arrow-right"></i></a>
			@endif
		</div> --}}
	</div>

@endsection

@section('scripts')
	<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
	<script>
		var elem = document.querySelector('.people-grid');
		var infScroll = new InfiniteScroll( elem, {
		// options
		path: '/people/page/@{{#}}',
		append: '.people',
		status: '.page-load-status',
		// history: false,
		});
	</script>
@endsection
