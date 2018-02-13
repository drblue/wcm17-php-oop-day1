<?php

class House {
    public $squaremeters;
    public $rooms;
    public $floors;
    public $owner;
    public $hasGarden;

    function getAvgSqmPerRoom() {
        return $this->squaremeters / $this->rooms;
    }
}
