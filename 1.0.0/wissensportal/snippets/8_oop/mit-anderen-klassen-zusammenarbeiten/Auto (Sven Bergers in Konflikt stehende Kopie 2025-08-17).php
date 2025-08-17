<?php

class Auto {
    public $marke;
    public $besitzer;

    public function __construct($marke, $besitzer) {
        $this->marke = $marke;
        $this->besitzer = $besitzer;
    }

    public function beschreibung() {
        return "Das Auto ist ein " . $this->marke . " und gehört " . $this->besitzer->name . ".";
    }
}