<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class MovieDetails extends Component
{
    public $movie;

    public function mount($movieId)
    {
        $url = "https://api.themoviedb.org/3/movie/{$movieId}?language=en-US";
        $apiKey = config('services.tmdb.api_key');

        $response = Http::withToken($apiKey)->get($url);

        $this->movie = $response->json();
    }

    public function render()
    {
        return view('components.movie-details')->layout('layouts.app');
    }
}
