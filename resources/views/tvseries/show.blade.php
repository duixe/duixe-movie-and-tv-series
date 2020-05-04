@extends('layouts.app2')

@section('content')
  {{-- TV SERIES INFO --}}
  <div class="tvseries-info" style="background-image: linear-gradient(to right, rgba(26.27%, 9.41%, 18.43%, 1.00) 150px, rgba(34.12%, 15.69%, 25.49%, 0.84) 100%),
  url('{{ $tvshow['bg-mid'] }}');">
    <div class="container mx-auto px-4 py-16 border-b border-gray-800 flex flex-col md:flex-row">
      <img src="{{ $tvshow['poster_path'] }}" alt="" class="rounded movie-info__img w-64 md:w-90">
      <div class="md:ml-24 py-10 movie-info__details">
        <h2 class="text-4xl lg:text-white">{{ $tvshow['name'] }}</h2>
        <div class="flex flex-wrap items-center text-gray-600 lg:text-gray-500 text-sm">
          <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
          <span class="ml-1">{{ $tvshow['vote_average'] }}</span>
          <span class="mx-2">|</span>
          <span>{{ $tvshow['first_air_date'] }}</span>
          <span class="mx-2">|</span>
          <span>{{ $tvshow['genres'] }}</span>
        </div>

        <p class="text-gray-600 lg:text-gray-500 mt-8">
          {{ $tvshow['overview']}}
        </p>

        <div class="mt-8">
          <div class="flex mt-4">
            @foreach ($tvshow['created_by'] as $crew)
                <div class="mr-8">
                  <div class="text-gray-600 lg:text-white">{{ $crew['name'] }}</div>
                  <p class="text-sm text-gray-500 md:text-gray-600">Creator</p>
                </div>
            @endforeach
          </div>
        </div>
        <div x-data="{ isOpen: false }">
          @if (count($tvshow['videos']['results']) > 0)
            <div class="mt-12">
              <button
                @click="isOpen = true"
                class="flex inline-flex items-center outline-none bg-primary-light text-gray-900 rounded-full font-semibold px-5 py-4 hover:bg-primary transition ease-in-out duration-150" target="_blank">
                <svg class="w-6 text-gray-100 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                <span class="ml-2 text-gray-100">PLay Trailer</span>
              </button>
            </div>
          @endif

          <div
              x-show="isOpen"
              style="background-color: rgba(0, 0, 0, .5);"
              class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
              >
            <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
              <div class="bg-gray-900 rounded">
                <div class="flex justify-end pr-4 pt-2">
                    <button
                        @click="isOpen = false"
                        @keydown.escape.window="isOpen = false"
                        class="text-3xl text-white leading-none hover:text-gray-300">&times;
                    </button>
                </div>
                <div class="modal-body px-8 py-8">
                    <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
                      @if (count($tvshow['videos']['results']) > 0))
                        <iframe class="responsive-iframe absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/{{ $tvshow['videos']['results'][0]['key'] }}" style="border:0;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                      @endif
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- END OF TV SERIES INFO --}}


  <div class="container mx-auto">
    {{-- CAST --}}
    <div class="tvseries-cast">
      <div class="container px-4 py-16 border-b border-gray-800">
        <h2 class="text-4xl font-semibold">Series Cast</h2>
        <div class="tvseries-cast__grid pb-4">
          @foreach ($tvshow['cast'] as $cast)
            <div class="mt-8 shadow-md rounded-lg">
              <a href="{{ route('people.show', $cast['id']) }}">
                <img class="rounded-t-lg hover:opacity-75 transition ease-in-out duration-150" src="{{ $cast['profile_path'] ? 'https://image.tmdb.org/t/p/w300'.$cast['profile_path'] : 'https://ui-avatars.com/api/?size=235&name='.$cast['name'] }}" alt="{{ $cast['name'] }}">
              </a>
              <div class="mt-2 pl-2">
                <a href="{{ route('people.show', $cast['id']) }}" class="text-left sm:text-center text-lg mt-2 hover:text-gray-700">{{ $cast['name'] }}</a>
                <div class="text-left text-gray-600 text-sm">
                  {{ $cast['character'] }}
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
    {{-- END OF Tv SERIES CAST --}}

    {{-- MOVIE IMAGES --}}
    <div class="movie-images" x-data="{ isOpen: false, image: '' }">
      <div class="container px-4 py-16">
        <h2 class="text-4xl font-semibold">Images</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
          @foreach ($tvshow['images'] as $image)
            <div class="mt-8 shadow-md rounded-lg">
              <a
              @click.prevent=" isOpen = true
              image = '{{ 'https://image.tmdb.org/t/p/original/'.$image['file_path'] }}'
              "
              href="#">
              <img class="hover:opacity-75 transition ease-in-out duration-150" src="{{ 'https://image.tmdb.org/t/p/w500/'.$image['file_path'] }}" alt="">
            </a>
          </div>
        @endforeach
      </div>
      <div
        style="background-color: rgba(0, 0, 0, .5);"
        class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
        x-show="isOpen">
        <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
          <div class="bg-gray-900 rounded">
            <div class="flex justify-end pr-4 pt-2">
              <button
              @click="isOpen = false"
              @keydown.escape.window="isOpen = false"
              class="text-3xl text-white leading-none hover:text-gray-300">&times;
              </button>
            </div>
            <div class="modal-body px-8 py-8">
              <img :src="image" alt="poster-image">
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>

@endsection
