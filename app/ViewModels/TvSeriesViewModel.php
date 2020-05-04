<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Carbon;

class TvSeriesViewModel extends ViewModel
{
    public $famousTv;
    public $topRatedTv;
    public $genres;

    public function __construct($famousTv, $topRatedTv, $genres)
    {
      $this->famousTv = $famousTv;
      $this->topRatedTv = $topRatedTv;
      $this->genres = $genres;
    }

    public function famousTv() {
      return $this->tvHelper($this->famousTv);
    }

    public function topRatedTv() {
      return $this->tvHelper($this->topRatedTv);
    }

    public function genres() {
      return collect($this->genres)->mapWithKeys(function ($genre){
        return [$genre['id'] => $genre['name']];
      });


    }

    private function tvHelper($typeOfTv) {

      // return collect($typeOfTv)->map(function($tvShow) {
      //   return $tvShow;
      // })->dump();

      return collect($typeOfTv)->map(function($tvShow) {
        $parsedGenres = collect($tvShow['genre_ids'])->mapWithKeys(function($val) {
          return [$val => $this->genres()->get($val)];
        })->implode(', ');

        return \collect($tvShow)->merge([
          'poster_path' => 'https://image.tmdb.org/t/p/w500/'.$tvShow['poster_path'],
          'vote_average' => $tvShow['vote_average'] * 10 .'%',
          'first_air_date' => Carbon::parse( $tvShow['first_air_date'])->format('M d, Y'),
          'genres' => $parsedGenres
        ])->only([
            'poster_path', 'id', 'genre_ids', 'name', 'vote_average', 'overview', 'first_air_date', 'genres'
          ]) ;
      });
    }
}
