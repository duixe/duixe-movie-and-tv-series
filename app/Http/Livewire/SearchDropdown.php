<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{
  public $search = '';

    public function render()
    {
        $searchResults = [];

        if (\strlen($this->search) >= 2) {
          $searchResults = Http::withToken(config('services.tmdb.token'))
          ->get('https://api.themoviedb.org/3/search/multi?query='.$this->search)
          ->json()['results'];
        }

        $results = \collect($searchResults)->map(function($searchResult) {
          if (isset($searchResult['title'])) {
            $name = $searchResult['title'];
          }elseif(isset($searchResult['name'])) {
            $name = $searchResult['name'];
          }else {
            $name = '';
          }

          if (isset($searchResult['poster_path'])) {
            $pic_path = $searchResult['poster_path'];
          }elseif (isset($searchResult['profile_path'])) {
            $pic_path = $searchResult['profile_path'];
          }else {
            $pic_path = 'https://via.placeholder.com/50X70';
          }

          return collect($searchResult)->merge([
            'title' => $name,
            'poster_path' => $pic_path
          ]);
        })->take(6);

        // \dump($searchResults);

        return view('livewire.search-dropdown', compact('results'));
    }
}
