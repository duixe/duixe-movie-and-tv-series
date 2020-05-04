<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use Carbon\Carbon;

class PeopleContentViewModel extends ViewModel
{
    public $person;
    public $social;
    public $credits;

    public function __construct($person, $social, $credits)
    {
      $this->person = $person;
      $this->social = $social;
      $this->credits = $credits;
    }

    public function person() {
      return \collect($this->person)->merge([
        'birthday' => Carbon::parse($this->person['birthday'])->format('M d, Y'),
        'age' => Carbon::parse($this->person['birthday'])->age,
        'profile_path' => $this->person['profile_path']
         ? 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/'.$this->person['profile_path']
         : 'https://via.placeholder.com/300x450'
      ]);
    }

    public function social() {
      return \collect($this->social)->merge([
        'twitter' => $this->social['twitter_id'] ? 'https://twitter.com/'.$this->social['twitter_id'] : null,
        'facebook' => $this->social['facebook_id'] ? 'https://facebook.com/'.$this->social['facebook_id'] : null,
        'instagram' => $this->social['instagram_id'] ? 'https://instagram.com/'.$this->social['instagram_id'] : null
      ]);
    }

    public function knownFor() {
      $castMovies = collect($this->credits)->get('cast');

      return collect($castMovies)->where('media_type', 'movie')
      ->sortByDesc('popularity')->take(15)->map(function($movie) {
        return collect($movie)->merge([
          'poster_path' => $movie['poster_path'] ? 'https://image.tmdb.org/t/p/w185'.$movie['poster_path']
             : 'https://via.placeholder.com/185x278',
          'title' => isset($movie['title']) ? $movie['title'] : "untitled"
        ]);
      });
    }

    public function credits() {
      $castMovies = collect($this->credits)->get('cast');

      return collect($castMovies)->map(function($movie) {
        if (isset($movie['release_date'])) {
          $releaseDate = $movie['release_date'];
        }elseif (isset($movie['first_air_date'])) {
          $releaseDate = $movie['first_air_date'];
        }else {
          $releaseDate = '';
        }

        if (isset($movie['title'])) {
          $title = $movie['title'];
        } elseif ($movie['name']) {
          $title = $movie['name'];
        } else {
          $title = "untitled";
        }


        return collect($movie)->merge([
          'release_date' => $releaseDate,
          'release_year' => isset($releaseDate) ? Carbon::parse($releaseDate)->format('Y') : 'Future',
          'title' => $title,
          'character' => isset($movie['character']) ? $movie['character'] : '',
        ]);
      })->sortByDesc('release_date');
    }

    // public function CreditCompareYear() {
    //   $castMovies = collect($this->credits)->get('cast');
    //
    //   return collect($castMovies)->map(function($movie) {
    //     if (isset($movie['release_date'])) {
    //       $releaseDate = $movie['release_date'];
    //     }elseif (isset($movie['first_air_date'])) {
    //       $releaseDate = $movie['first_air_date'];
    //     }else {
    //       $releaseDate = '';
    //     }
    //
    //     $compYear = collect($movie)->merge([
    //       'release_date' => $releaseDate,
    //       'release_year' => isset($releaseDate) ? Carbon::parse($releaseDate)->format('Y') : 'Future',
    //     ]);
    //
    //     return \collect($compYear)->only([
    //       'release_year'
    //     ]);
    //
    //   })->sortByDesc('release_year')->dump();
    // }
}
