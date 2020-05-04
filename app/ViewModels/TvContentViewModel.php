<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use Illuminate\Support\Carbon;

class TvContentViewModel extends ViewModel
{
    public $tvshow;

    public function __construct($tvshow)
    {
      $this->tvshow = $tvshow;
    }

    public function tvshow() {

      return \collect($this->tvshow)->merge([
        'poster_path' => 'https://image.tmdb.org/t/p/w300_and_h450_bestv2'.$this->tvshow['poster_path'],
        'vote_average' => $this->tvshow['vote_average'] * 10 .'%',
        'first_air_date' => Carbon::parse( $this->tvshow['first_air_date'])->format('M d, Y'),
        'genres' => \collect($this->tvshow['genres'])->pluck('name')->flatten()->implode(', '),
        'crew' => collect($this->tvshow['credits']['crew'])->take(2),
        'cast' => collect($this->tvshow['credits']['cast'])->take(20),
        'images' => collect($this->tvshow['images']['backdrops'])->take(9),
        'bg-mid' => 'https://image.tmdb.org/t/p/w1920_and_h800_multi_faces'. $this->tvshow['backdrop_path'],
      ]);
    }
}
