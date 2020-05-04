<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use Illuminate\Support\Carbon;

class MovieContentViewModel extends ViewModel
{

    public $movie;

    public function __construct($movie)
    {
      $this->movie = $movie;
    }

    public function movie()
    {
      // if (empty($this->movie['poster_path'])) {
      //   echo "string";
      //   return null;
      // }

      return \collect($this->movie)->merge([
        'poster_path' => 'https://image.tmdb.org/t/p/w300_and_h450_bestv2'.$this->movie['poster_path'],
        'vote_average' => $this->movie['vote_average'] * 10 .'%',
        'release_date' => Carbon::parse( $this->movie['release_date'])->format('M d, Y'),
        'genres' => \collect($this->movie['genres'])->pluck('name')->flatten()->implode(', '),
        'crew' => collect($this->movie['credits']['crew'])->take(2),
        'cast' => collect($this->movie['credits']['cast'])->take(20),
        'images' => collect($this->movie['images']['backdrops'])->take(9),
        'bg-mid' => 'https://image.tmdb.org/t/p/w1920_and_h800_multi_faces'. $this->movie['backdrop_path'],
      ]);
    }
}
