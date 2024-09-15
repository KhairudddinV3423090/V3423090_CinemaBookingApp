<?php
class Ticket {
    private $ticketId;
    private $userId;
    private $showtimeId;
    private $seatNumber;

    public function __construct($ticketId, $userId, $showtimeId, $seatNumber) {
        $this->ticketId = $ticketId;
        $this->userId = $userId;
        $this->showtimeId = $showtimeId;
        $this->seatNumber = $seatNumber;
    }

    public function bookTicket() {
        return "Ticket booked for User ID {$this->userId} for Showtime ID {$this->showtimeId} at Seat No: {$this->seatNumber}.";
    }

    public function cancelTicket() {
        return "Ticket with ID {$this->ticketId} has been cancelled.";
    }
}
?>
