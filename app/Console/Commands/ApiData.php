<?php

namespace App\Console\Commands;

use App\Http\Controllers\MovieController;
use App\Models\Movie;
use App\Repositories\MovieRepository;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ApiData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:api-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch data from api to feed database movies';

    public function __construct(protected MovieRepository $movieRepository)
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //n'ayant pas vu l'url fourni dans l'énoncé dans l'API, j'ai pris celui-ci qui correspondait le mieux du même api
        $url = 'https://api.themoviedb.org/3/trending/movie/day?language=en-US';
        $token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIyMjJkNjNjZGRjMDY2ZDk5ZWQzZTgwNmQzMjY3MThjYSIsInN1YiI6IjYyNGVhNTRhYjc2Y2JiMDA2ODIzODc4YSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.zuuBq1c63XpADl8SQ_c62hezeus7VibE1w5Da5UdYyo';

        $response = Http::withToken($token)->get($url);

        if ($response->successful()) {

            $data = $response->json();

            foreach ($data['results'] as $datum) {

                $this->movieRepository->create($datum);
            }

            $this->info('movie_db is feed');

        }
        return 0;
    }
}
