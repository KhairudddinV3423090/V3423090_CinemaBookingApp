<?php
require_once 'Cinema.php';

class Studio extends Cinema {
    private $studioNumber;
    private $seatCapacity;

    public function __construct($id, $name, $location, $studioNumber, $seatCapacity) {
        parent::__construct($id, $name, $location);
        $this->studioNumber = $studioNumber;
        $this->seatCapacity = $seatCapacity;
    }

    public function getStudioDetails() {
        return "Studio No: {$this->studioNumber}, Capacity: {$this->seatCapacity}";
    }
}
?>
