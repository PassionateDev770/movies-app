<?php

namespace App\Repositories;

use App\Models\Movie;
use Illuminate\Support\Facades\DB;

class MovieRepository
{
    public function create($data)
    {
        return DB::transaction(function () use ($data) {
            $movie = new Movie();

            $movie->backdrop_path = $data['backdrop_path'];
            $movie->idm = $data['id'];
            $movie->title = $data['title'];
            $movie->original_title = $data['original_title'];
            $movie->overview = $data['overview'];
            $movie->poster_path = $data['poster_path'];
            $movie->media_type = $data['media_type'];
            $movie->adult = $data['adult'];
            $movie->original_language = $data['original_language'];
            $movie->genre_ids = $data['genre_ids'];
            $movie->popularity = $data['popularity'];
            $movie->release_date = $data['release_date'];
            $movie->video = $data['video'];
            $movie->vote_average = $data['vote_average'];
            $movie->vote_count = $data['vote_count'];

            $movie->save();
        }, 3);
    }
}
