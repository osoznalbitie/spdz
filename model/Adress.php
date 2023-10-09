<?php
class Adress {
    private $id = 1;
    private $city;
    private $country;
    function __construct($id, $city,$country) {
        $this->id = $id;
        $this->city = $city;
        $this->country = $country;

    }
    function getCity() {
        return $this->city;
    }
    function getCountry() {
        return $this->country;
    }
}
?>