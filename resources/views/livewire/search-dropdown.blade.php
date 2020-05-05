  <div class="nav-search-box" x-data="{ isOpen: true }" @click.away="isOpen = false">
		<input
          wire:model.debounce500ms="search"
          class="nav-search-box__text"
          type="text" placeholder="movies/tvshows/peo..."
          @focus="isOpen = true"
          @keydown.escape.window="isOpen = false"
          @keydown.shift.tab="isOpen = false"
          @keydown="isOpen = true"
          >
		<a class="nav-search-box__btn" href="#"><i class="fa fa-search"></i></a>

    <div wire:loading class="spinner top-0 left-0 ml-4 mt-4"></div>
    @if (strlen($search) >= 2)
      <div
          class="bg-primary-light absolute rounded w-61 md:w-61 lg:w-62 mt-8 lg:mt-10"
          x-show.transition.opacity="isOpen">
        @if ($results->count() > 0)
          <ul class="text-white">
            @foreach ($results as $result)
              <li class="border-b border-gray-700">
                @if ($result['media_type'] == 'movie')
                  <a href="{{ route('movies.show', $result['id'])}}" class="block hover:bg-gray-700 px-3 py-3 flex items-center">

                    <img class="w-8 mr-2" src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="">

                    <span>{{ $result['title'] }}</span>
                  </a>
                @elseif ($result['media_type'] == 'tv')
                  <a href="{{ route('tvseries.show', $result['id'])}}" class="block hover:bg-gray-700 px-3 py-3 flex items-center">

                    <img class="w-8 mr-2" src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="">

                    <span>{{ $result['title'] }}</span>
                  </a>
                @else
                  <a href="{{ route('people.show', $result['id'])}}" class="block hover:bg-gray-700 px-3 py-3 flex items-center">

                    <img class="w-8 mr-2" src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="">

                    <span>{{ $result['title'] }}</span>
                  </a>
                @endif
              </li>
            @endforeach
          </ul>
        @else
          <div class="px-3 py-3 text-white">No results for "{{ $search }}"</div>
        @endif
      </div>
    @endif
	</div>
