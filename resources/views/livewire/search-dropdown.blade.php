  <div class="nav-search-box">
		<input wire:model.debounce500ms="search" class="nav-search-box__text" type="text" placeholder="Search movies">
		<a class="nav-search-box__btn" href="#"><i class="fa fa-search"></i></a>

    <div wire:loading class="spinner top-0 left-0 ml-4 mt-4"></div>
    @if (strlen($search) >= 2)
      <div class="bg-primary-light absolute rounded w-61 md:w-61 lg:w-62 mt-8 lg:mt-10">
        @if ($results->count() > 0)
          <ul class="text-white">
            @foreach ($results as $result)
              <li class="border-b border-gray-700">
                <a href="{{ route('movies.show', $result['id'])}}" class="block hover:bg-gray-700 px-3 py-3 flex items-center">
                  @if ($result['poster_path'])
                    <img class="w-8" src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="{{ $result['title'] }}">
                  @else
                    <img src="https://via.placeholder.com/50X70" alt="{{ $result['title'] }}" class="w-8">
                  @endif
                  <span>{{ $result['title'] }}</span>
                </a>
              </li>
            @endforeach
          </ul>
        @else
          <div class="px-3 py-3 text-white">No results for "{{ $search }}"</div>
        @endif
      </div>
    @endif
	</div>
