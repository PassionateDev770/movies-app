<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class MovieController extends Component
{
    public $movies;
    public $selectedMovie;

    public function mount()
    {

        //n'ayant pas vu l'url fourni dans l'énoncé dans l'API, j'ai pris celui-ci qui correspondait le mieux du même api
        $url = 'https://api.themoviedb.org/3/trending/movie/day?language=en-US';
        $apiKey = config('services.tmdb.api_key');

        $response = Http::withToken($apiKey)->get($url);

        $data = $response->json();

        $this->movies = $data['results'];

        $this->selectedMovie = null;
    }

    public function selectMovie($movieId)
    {
        return redirect()->route('movie.details', ['movieId' => $movieId]);
    }

    public function render()
    {
        return view('components.movie-controller');
    }


}
