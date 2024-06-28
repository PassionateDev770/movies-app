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
        $token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIyMjJkNjNjZGRjMDY2ZDk5ZWQzZTgwNmQzMjY3MThjYSIsInN1YiI6IjYyNGVhNTRhYjc2Y2JiMDA2ODIzODc4YSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.zuuBq1c63XpADl8SQ_c62hezeus7VibE1w5Da5UdYyo';

        $response = Http::withToken($token)->get($url);

        $this->movie = $response->json();
    }
    public function render()
    {
        return view('components.movie-details')->layout('layouts.app');
    }
}
