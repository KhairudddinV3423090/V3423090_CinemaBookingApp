<?php
require_once 'Movie.php';
require_once 'Cinema.php';
require_once 'Studio.php';
require_once 'Showtime.php';
require_once 'Ticket.php';
require_once 'User.php';

// Create Movie
$movie = new Movie(1, "Inception", "Sci-Fi", 148);
echo $movie->getMovieInfo() . "<br>";

// Create Cinema
$cinema = new Cinema(1, "XXI Mall", "Jakarta");
echo $cinema->getCinemaInfo() . "<br>";

// Create Studio (Subclass)
$studio = new Studio(1, "XXI Mall", "Jakarta", 5, 200);
echo $studio->getStudioDetails() . "<br>";

// Create Showtime
$showtime = new Showtime(1, 1, 1, 5, "19:00");
echo $showtime->getShowtimeDetails() . "<br>";

// Create User and Book Ticket
$user = new User(1, "John Doe", "john@example.com", "08123456789");
echo $user->register() . "<br>";
echo $user->bookMovie(1, 15) . "<br>";
?>
