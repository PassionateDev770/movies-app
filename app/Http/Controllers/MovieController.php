<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Repositories\MovieRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function __construct(
        protected MovieRepository $movieRepository
    )
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }


    public function getMoviesFromApi()
    {
        //n'ayant pas vu l'url fourni dans l'énoncé, j'ai pris celui-ci du même api
        $url = 'https://api.themoviedb.org/3/trending/movie/day?language=en-US';
        $token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIyMjJkNjNjZGRjMDY2ZDk5ZWQzZTgwNmQzMjY3MThjYSIsInN1YiI6IjYyNGVhNTRhYjc2Y2JiMDA2ODIzODc4YSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.zuuBq1c63XpADl8SQ_c62hezeus7VibE1w5Da5UdYyo';

        $response = Http::withToken($token)->get($url);

        if ($response->successful()) {
            $data = $response->json();
            foreach ($data['results'] as $datum) {

                $this->movieRepository->create($datum);
            }
            return response()->json(['success' => 'All data added from API'], $response->status());
        } else {
            return response()->json(['error' => 'Unable to fetch data from API'], $response->status());
        }
    }
}
