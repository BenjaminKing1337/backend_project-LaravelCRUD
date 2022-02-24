<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movie = new \App\Models\Movie([
            'title' => 'Twilight',
            'description' => 'Vampire Movie',
            'releasedate' => '2010-10-13',
            'runtime' => '121',
            'rating' => '7'
        ]);
        $movie->save();

        $movie = new \App\Models\Movie([
            'title' => 'Dead Man',
            'description' => 'Johnny Depp',
            'releasedate' => '1999-12-10',
            'runtime' => '161',
            'rating' => '8'
        ]);
        $movie->save();

        $movie = new \App\Models\Movie([
            'title' => 'Mr. Nobody',
            'description' => 'Choices',
            'releasedate' => '2012-06-17',
            'runtime' => '171',
            'rating' => '10'
        ]);
        $movie->save();

        $movie = new \App\Models\Movie([
            'title' => 'A Clockwork Orange',
            'description' => 'Stanley Kubrick',
            'releasedate' => '1987-03-05',
            'runtime' => '190',
            'rating' => '8'
        ]);
        $movie->save();

        $movie = new \App\Models\Movie([
            'title' => 'The Batman',
            'description' => 'Robert Pattinson',
            'releasedate' => '2022-03-01',
            'runtime' => '155',
            'rating' => '7'
        ]);
        $movie->save();

        $movie = new \App\Models\Movie([
            'title' => 'The Lighthouse',
            'description' => 'Willem Dafoe',
            'releasedate' => '2021-10-28',
            'runtime' => '165',
            'rating' => '8'
        ]);
        $movie->save();

        $movie = new \App\Models\Movie([
            'title' => 'Independent, The',
            'description' => 'Comedy',
            'releasedate' => '1992-08-26',
            'runtime' => '70',
            'rating' => '4'
        ]);
        $movie->save();

        $movie = new \App\Models\Movie([
            'title' => 'Final Fantasy: The Spirits Within',
            'description' => 'Adventure|Animation|Fantasy|Sci-Fi',
            'releasedate' => '2001-05-30',
            'runtime' => '286',
            'rating' => '7'
        ]);
        $movie->save();

        $movie = new \App\Models\Movie([
            'title' => 'Holy Flame of the Martial World (Wu lin sheng huo jin)',
            'description' => 'Action|Adventure|Comedy|Fantasy',
            'releasedate' => '1994-07-31',
            'runtime' => '74',
            'rating' => '10'
        ]);
        $movie->save();

        $movie = new \App\Models\Movie([
            'title' => 'Something Wicked This Way Comes',
            'description' => 'Children|Drama|Fantasy|Mystery|Thriller',
            'releasedate' => '2008-07-21',
            'runtime' => '34',
            'rating' => '5'
        ]);
        $movie->save();

        $movie = new \App\Models\Movie([
            'title' => 'Fûke, De',
            'description' => 'Drama|War',
            'releasedate' => '2005-12-30',
            'runtime' => '103',
            'rating' => '8'
        ]);
        $movie->save();

        $movie = new \App\Models\Movie([
            'title' => 'Ascent, The (Voskhozhdeniye)',
            'description' => 'Drama|War',
            'releasedate' => '2019-08-11',
            'runtime' => '255',
            'rating' => '10'
        ]);
        $movie->save();

        $movie = new \App\Models\Movie([
            'title' => 'Welcome to Dongmakgol',
            'description' => 'Comedy|Drama|War',
            'releasedate' => '1993-03-02',
            'runtime' => '55',
            'rating' => '5'
        ]);
        $movie->save();

        $movie = new \App\Models\Movie([
            'title' => 'Within the Woods',
            'description' => 'Horror',
            'releasedate' => '2005-01-29',
            'runtime' => '177',
            'rating' => '5'
        ]);
        $movie->save();

        $movie = new \App\Models\Movie([
            'title' => 'Conception',
            'description' => 'Comedy|Romance',
            'releasedate' => '2013-11-24',
            'runtime' => '172',
            'rating' => '6'
        ]);
        $movie->save();

        $movie = new \App\Models\Movie([
            'title' => 'Mitchell',
            'description' => 'Action|Crime',
            'releasedate' => '2004-05-26',
            'runtime' => '139',
            'rating' => '9'
        ]);
        $movie->save();

        $movie = new \App\Models\Movie([
            'title' => 'Professor Layton and the Eternal Diva (Eiga Reiton-kyôju to eien no utahime)',
            'description' => 'Action|Adventure|Animation|Mystery|Sci-Fi',
            'releasedate' => '2000-11-13',
            'runtime' => '80',
            'rating' => '8'
        ]);
        $movie->save();

        $movie = new \App\Models\Movie([
            'title' => 'Sacrifice, The (Offret - Sacraficatio)',
            'description' => 'Drama',
            'releasedate' => '2016-11-03',
            'runtime' => '153',
            'rating' => '4'
        ]);
        $movie->save();

        $movie = new \App\Models\Movie([
            'title' => 'Inkheart',
            'description' => 'Adventure|Fantasy',
            'releasedate' => '2014-05-01',
            'runtime' => '24',
            'rating' => '8'
        ]);
        $movie->save();

        $movie = new \App\Models\Movie([
            'title' => 'Saturday the 14th',
            'description' => 'Comedy|Horror',
            'releasedate' => '2006-02-25',
            'runtime' => '69',
            'rating' => '7'
        ]);
        $movie->save();

        $movie = new \App\Models\Movie([
            'title' => 'Day at the Races, A',
            'description' => 'Comedy|Musical',
            'releasedate' => '1993-02-14',
            'runtime' => '283',
            'rating' => '4'
        ]);
        $movie->save();

        $movie = new \App\Models\Movie([
            'title' => 'Bridges at Toko-Ri, The',
            'description' => 'Drama|Romance|War',
            'releasedate' => '2003-12-28',
            'runtime' => '233',
            'rating' => '5'
        ]);
        $movie->save();

        $movie = new \App\Models\Movie([
            'title' => 'Vampires',
            'description' => 'Comedy|Fantasy|Horror',
            'releasedate' => '2004-01-17',
            'runtime' => '100',
            'rating' => '5'
        ]);
        $movie->save();

        $movie = new \App\Models\Movie([
            'title' => 'Al Franken: God Spoke',
            'description' => 'Documentary',
            'releasedate' => '2015-12-30',
            'runtime' => '59',
            'rating' => '6'
        ]);
        $movie->save();

        $movie = new \App\Models\Movie([
            'title' => 'Guest from the Future (Gostya iz buduschego)',
            'description' => 'Adventure|Drama|Sci-Fi',
            'releasedate' => '2014-03-17',
            'runtime' => '290',
            'rating' => '9'
        ]);
        $movie->save();
    }
}
