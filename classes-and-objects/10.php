<?php
/*
https://github.com/codelex-io/php-syllabus/blob/main/php-basics/classes-and-objects/video-store.php

The goal of this optional exercise is to design and implement a simple inventory control system for a small video rental store. Define least two classes: a class Video to model a video and a class VideoStore to model the actual store.

Assume that a Video may have the following state:

A title;
a flag to say whether it is checked out or not; and
an average user rating.
In addition, Video has the following behaviour:

being checked out;
being returned;
receiving a rating.

The VideoStore may have the state of videos in there currently. The VideoStore will have the following behaviour:

add a new video (by title) to the inventory;
check out a video (by title);
return a video to the store;
take a user's rating for a video;
list the whole inventory of videos in the store.

Finally, create a VideoStoreTest which will test the functionality of your other two classes. It should allow the following:

Add 3 videos: "The Matrix", "Godfather II", "Star Wars Episode IV: A New Hope".
Give several ratings to each video.
Rent each video out once and return it.

List the inventory after "Godfather II" has been rented out out.
Summary of design specs:

Store a library of videos identified by title.
Allow a video to indicate whether it is currently rented out.
Allow users to rate a video and display the percentage of users that liked the video.
Print the store's inventory, listing for each video:
its title,
the average rating,
and whether it is checked out or on the shelves.
 */


class Application
{
    private $store;
    function run()
    {
        $this->store = new VideoStore();
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->add_movies();
                    break;
                case 2:
                    $this->rent_video();
                    break;
                case 3:
                    $this->return_video();
                    break;
                case 4:
                    $this->list_inventory();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function add_movies()
    {
        $this -> store -> addVideo("The Matrix");
        $this -> store -> addVideo("Godfather II");
        $this -> store -> addVideo("Star Wars Episode IV: A New Hope");
    }

    private function rent_video()
    {
        $videoTitle = readline("Video Title: ");
        $this -> store -> rentVideo($videoTitle);
    }

    private function return_video()
    {
        $videoTitle = readline("Video Title: ");
        $this -> store -> returnVideo($videoTitle);
    }

    private function list_inventory()
    {
        $this -> store -> listInventory();
    }
}

class VideoStore
{
    private array $inventory = [];

    function addVideo ($videoTitle){
        $video = new Video($videoTitle);
        $this -> inventory[] = $video;
    }

    function searchVideo($videoTitle){
        foreach($this -> inventory as $video){
            if ($video -> getTitle() == $videoTitle){
                return $video;
            }
        }
        return FALSE;
    }

    function rentVideo($videoTitle){
        $video = $this -> searchVideo($videoTitle);
        if ($video != FALSE){
            $video -> rentVideo();
        }
    }

    function returnVideo($videoTitle){
        $video = $this -> searchVideo($videoTitle);
        if($video != FALSE){
            $video -> returnVideo();
        }
    }

    function addRating($videoTitle, $rating){
        $video = $this -> searchVideo($videoTitle);
        if ($video != FALSE){
            $video -> addRating($rating);
        }else{
            echo "We don't have this movie\n";
        }
    }

    function listInventory(){
        foreach($this -> inventory as $video){
            echo "\nTitle: {$video -> getTitle()}\n";
            echo "Rating: {$video -> avgRating()}\n";
            $rentStatus = ($video -> isRented())? "Yes": "No";
            echo "Is rented?: $rentStatus\n\n";
        }
    }
}

class Video
{
    private string $title;
    private bool $isRented = FALSE;
    private array $rating = [];

    function __construct($title){
        $this -> title = $title;
    }

    function getTitle(): string
    {
        return $this -> title;
    }

    function rentVideo(){
        $this -> isRented = TRUE;
    }

    function returnVideo(){
        $this -> isRented = FALSE;
    }

    function addRating($rating){
        $this -> rating[] = $rating;
    }

    function isRented(): bool
    {
        return $this -> isRented;
    }

    function avgRating(){
        $sum = 0;
        foreach($this -> rating as $singleRating){
            $sum += $singleRating;
        }

        if (sizeof($this -> rating) > 0){
            return round(($sum/(sizeof($this -> rating))), 2);
        }else{
            return 0;
        }
    }
}

// store test class
class VideoStoreTest{
    function __construct(){
        $store = new VideoStore();

        // add videos to the store
        $store -> addVideo("The Matrix");
        $store -> addVideo("Godfather II");
        $store -> addVideo("Star Wars Episode IV: A New Hope");

        // add rating to each video
        $store -> addRating("The Matrix", 4.0);
        $store -> addRating("The Matrix", 4.5);
        $store -> addRating("The Matrix", 3.0);

        // add rating to each video
        $store -> addRating("Godfather II", 5.0);
        $store -> addRating("Godfather II", 3.5);
        $store -> addRating("Godfather II", 3.0);

        // add rating to each video
        $store -> addRating("Star Wars Episode IV: A New Hope", 1.0);
        $store -> addRating("Star Wars Episode IV: A New Hope", 4.5);
        $store -> addRating("Star Wars Episode IV: A New Hope", 5.0);

        // rent videos
        $store -> rentVideo("Godfather II");

        // Godfather is rented out. here is the print of inventory
        $store -> listInventory();
    }
}

// show the test results
$test = new VideoStoreTest();

// run user application
$app = new Application();
$app->run();
