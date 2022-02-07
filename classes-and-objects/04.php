<?php
/*
The class Movie is started below. An instance of class Movie represents a film. This class has the following three class
variables:

 * title, which is a string representing the title of the movie
 * studio, which is a string representing the studio that made the movie
 * rating, which is a string representing the rating of the movie (i.e. PG­13, R, etc)

1.Write a constructor for the class Movie, which takes the title of the movie, studio, and rating as its arguments,
 and sets the respective class variables to these values.

2.Write a method GetPG, which takes an array of base type Movie as its argument, and returns a new array of only
 those movies in the input array with a rating of "PG". You may assume the input array is full of Movie instances.
 The returned array may be empty.

3.Write a piece of code that creates an instance of the class Movie:

 * with the title “Casino Royal”, the studio “Eon Productions” and the rating “PG­13”;
 * with the title “Glass”, the studio “Buena Vista International” and the rating “PG­13”;
 * with the title “Spider-Man: Into the Spider-Verse”, the studio “Columbia Pictures” and the rating “PG”.

funkcija GetPG kurai kā argumentu padod masīvu kura elementi ir Movie objekti un
funkcijas rezultātā atgriež no tā masīva jaunu masīvu kurā tā masīva elementiem ir reitings PG
 */

class Movie
{
    public string $title;
    public string $studio;
    public string $rating;

    public function __construct(string $title = '', string $studio = '', string $rating = '')
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    function getRating(): string
    {
        return $this -> rating;
    }

    function showMovieInfo(){
        print_r("Title: {$this -> title}\nStudio: {$this -> studio}\nRating: {$this -> rating}\n");
    }
}


// function to filter out movies having PG rating.
// If none found empty array is returned
function getPG($movies): array
{
    $output = array();
    foreach($movies as $movie){
        if ($movie -> getRating() == "PG"){
            $output[] = $movie;
        }
    }

    return $output;
}


// create instances of movies
$movies = [
    new Movie('Casino Royal', 'Eon Productions', 'PG­13'),
    new Movie('Glass', 'Buena Vista International', 'PG­13'),
    new Movie('Spider-Man: Into the Spider-Verse', 'Columbia Pictures', 'PG'),
];


// search movies having PG rating without created function
$pgMovies = getPG($movies);

// print the result of PG movies
print_r("Following movie(s) are PG:\n\n");
foreach($pgMovies as $pgMovie){
    $pgMovie -> showMovieInfo();
}
