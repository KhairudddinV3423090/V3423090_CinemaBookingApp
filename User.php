<?php
class User {
    private $userId;
    private $name;
    private $email;
    private $phone;

    public function __construct($userId, $name, $email, $phone) {
        $this->userId = $userId;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function register() {
        return "User {$this->name} has been registered.";
    }

    public function bookMovie($showtimeId, $seatNumber) {
        $ticket = new Ticket(uniqid(), $this->userId, $showtimeId, $seatNumber);
        return $ticket->bookTicket();
    }
}
?>
