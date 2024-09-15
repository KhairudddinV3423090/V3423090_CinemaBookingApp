<?php
class Showtime {
    private $showtimeId;
    private $movieId;
    private $cinemaId;
    private $studioId;
    private $time;

    public function __construct($showtimeId, $movieId, $cinemaId, $studioId, $time) {
        $this->showtimeId = $showtimeId;
        $this->movieId = $movieId;
        $this->cinemaId = $cinemaId;
        $this->studioId = $studioId;
        $this->time = $time;
    }

    public function getShowtimeDetails() {
        return "Showtime: Movie ID {$this->movieId}, Cinema ID {$this->cinemaId}, Studio ID {$this->studioId}, Time: {$this->time}.";
    }
}
?>
