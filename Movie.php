<?php
class Movie {
    private $id;
    private $title;
    private $genre;
    private $duration;

    public function __construct($id, $title, $genre, $duration) {
        $this->id = $id;
        $this->title = $title;
        $this->genre = $genre;
        $this->duration = $duration;
    }

    public function getMovieInfo() {
        return "Movie: {$this->title}, Genre: {$this->genre}, Duration: {$this->duration} minutes.";
    }
}
?>
