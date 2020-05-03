@extends('layouts.app')

@section('content')
  {{-- MOVIE INFO --}}
  <div class="movie-info">
    <div class="container mx-auto px-4 py-16 border-b border-gray-800 flex flex-col md:flex-row">
      <div class="people-profile__img flex flex-col w-64">
        <img src="{{ $person['profile_path'] }}" alt="" class="rounded movie-info__img w-full h-full">
        <ul class="flex item-center mt-4">
          @if ($social['facebook'])
            <li>
              <a href="{{ $social['facebook']}}" title="Facebook" target="_blank"><i class="fa fa-facebook-square mr-6 fa-lg"></i></a>
            </li>
          @endif
          @if ($social['twitter'])
            <li>
              <a href="{{ $social['twitter']}}" title="twitter" target="_blank"><i class="fa fa-twitter-square mr-6 fa-lg"></i></a>
            </li>
          @endif
          @if ($social['instagram'])
            <li>
              <a href="{{ $social['instagram'] }}" title="instagram" target="_blank"><i class="fa fa-instagram mr-6 fa-lg"></i></a>
            </li>
          @endif
          @if ($person['homepage'])
            <li>
              <a href="{{ $person['homepage'] }}" title="personal website" target="_blank"><i class="fa fa-globe fa-lg"></i></a>
            </li>
          @endif
        </ul>
      </div>
      <div class="container overflow-x-hidden md:ml-24 py-10 movie-info__details">
        <h2 class="text-4xl">{{ $person['name'] }}</h2>
        <div class="flex flex-wrap items-center text-gray-600 text-sm">
        <svg class="fill-current text-gray-900 hover:text-white w-4" viewBox="0 0 448 512"><path d="M448 384c-28.02 0-31.26-32-74.5-32-43.43 0-46.825 32-74.75 32-27.695 0-31.454-32-74.75-32-42.842 0-47.218 32-74.5 32-28.148 0-31.202-32-74.75-32-43.547 0-46.653 32-74.75 32v-80c0-26.5 21.5-48 48-48h16V112h64v144h64V112h64v144h64V112h64v144h16c26.5 0 48 21.5 48 48v80zm0 128H0v-96c43.356 0 46.767-32 74.75-32 27.951 0 31.253 32 74.75 32 42.843 0 47.217-32 74.5-32 28.148 0 31.201 32 74.75 32 43.357 0 46.767-32 74.75-32 27.488 0 31.252 32 74.5 32v96zM96 96c-17.75 0-32-14.25-32-32 0-31 32-23 32-64 12 0 32 29.5 32 56s-14.25 40-32 40zm128 0c-17.75 0-32-14.25-32-32 0-31 32-23 32-64 12 0 32 29.5 32 56s-14.25 40-32 40zm128 0c-17.75 0-32-14.25-32-32 0-31 32-23 32-64 12 0 32 29.5 32 56s-14.25 40-32 40z"/></svg>
          <span class="ml-2">{{ $person['birthday']}} ({{ $person['age'] }} years old) in {{ $person['place_of_birth'] }}</span>
        </div>

        <p class="text-gray-600 mt-8">
          {{ $person['biography'] }}
        </p>

        <h4 class="font-semibold mt-12">Known for</h4>

        <div class="people-grid__knownfor">
          @foreach ($knownFor as $movie)
          <div class="mt-4">
            <a href="{{ route('movies.show', $movie['id']) }}">
              <img class="rounded-lg hover:opacity-75 transition ease-in-out duration-150" src="{{ $movie['poster_path'] }}" alt="{{ $movie['title']. 'jpg' }}">
            </a>
            <a href="{{ route('movies.show', $movie['id']) }}" class="text-lg mt-2 hover:text-gray-700">{{ $movie['title']}}</a>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
  {{-- END OF MOVIE INFO --}}

  {{-- CREDITS --}}
  <div class="credits">
    <div class="container px-4 py-16 border-b border-gray-800">
      <h2 class="text-4xl font-semibold">Credits</h2>
      {{-- <table class="table-auto shadow-md px-4 py-2">
        <tbody>
          @foreach ($credits as $credit)
            <tr>
              <td>
                @if ($credit['release_year'] == $credit['release_year'])
                <table>
                  <tbody class="px-4 py-2">
                    <tr>
                      <td class="year">{{ $credit['release_year'] }}</td>
                      <td class="seprator">&middot;</td>
                      <td class="movie&role"><strong>{{ $credit['title'] }}</strong> as <span class="movie&role-span">{{ $credit['character'] }}</span></td>
                    </tr>
                  </tbody>
                </table>
                @endif
              </td>
            </tr>
          @endforeach
        </tbody>
      </table> --}}
      <ul class="shadow-md px-4 py-2 mt-6 mx-auto">
        @foreach ($credits as $credit)
          <li>
            {{ $credit['release_year'] }} -- <strong>{{ $credit['title'] }}</strong> as {{ $credit['character'] }}
          </li>
        @endforeach
      </ul>
    </div>
  </div>
  {{-- END OF CREDITS --}}
@endsection
