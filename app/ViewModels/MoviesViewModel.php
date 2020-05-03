<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use Illuminate\Support\Carbon;


class MoviesViewModel extends ViewModel
{
    public $famousMovies;
    public $nowPlayingMovies;
    public $genres;

    public function __construct($famousMovies, $nowPlayingMovies, $genres) {

      $this->famousMovies = $famousMovies;
      $this->nowPlayingMovies = $nowPlayingMovies;
      $this->genres = $genres;

    }

    public function famousMovies() {
      return $this->movieHelper($this->famousMovies);
    }

    public function nowPlayingMovies() {
      return $this->movieHelper($this->nowPlayingMovies);
    }

    public function genres() {
      return collect($this->genres)->mapWithKeys(function ($genre){
        return [$genre['id'] => $genre['name']];
      });


    }

    private function movieHelper($typeOfMovie) {

      return collect($typeOfMovie)->map(function($popularMovie) {
        $parsedGenres = collect($popularMovie['genre_ids'])->mapWithKeys(function($val) {
          return [$val => $this->genres()->get($val)];
        })->implode(', ');

        return \collect($popularMovie)->merge([
          'poster_path' => 'https://image.tmdb.org/t/p/w500/'.$popularMovie['poster_path'],
          'vote_average' => $popularMovie['vote_average'] * 10 .'%',
          'release_date' => Carbon::parse( $popularMovie['release_date'])->format('M d, Y'),
          'genres' => $parsedGenres

        ]) ;
      });
    }
}
