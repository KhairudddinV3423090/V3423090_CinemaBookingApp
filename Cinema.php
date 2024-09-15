<?php
class Cinema {
    private $id;
    private $name;
    private $location;

    public function __construct($id, $name, $location) {
        $this->id = $id;
        $this->name = $name;
        $this->location = $location;
    }

    public function getCinemaInfo() {
        return "Cinema: {$this->name}, Location: {$this->location}.";
    }
}
?>
