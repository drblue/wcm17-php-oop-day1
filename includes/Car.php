<?php

class Car {
    // properties
    public $manufacturer;
    public $model;
    public $year;
    public $fourWheelDrive = false;

    // methods
    function honk() {
        return "Honk honk\n";
    }

    function getYear() {
        return $this->year;
    }

    function getModel() {
        return $this->model;
    }

    function getAge() {
        if (!$this->year) {
            return "Unknown";
        }
        return 2018 - $this->year;
    }
}
