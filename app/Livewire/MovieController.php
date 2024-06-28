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
        $token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIyMjJkNjNjZGRjMDY2ZDk5ZWQzZTgwNmQzMjY3MThjYSIsInN1YiI6IjYyNGVhNTRhYjc2Y2JiMDA2ODIzODc4YSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.zuuBq1c63XpADl8SQ_c62hezeus7VibE1w5Da5UdYyo';

        $response = Http::withToken($token)->get($url);

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
