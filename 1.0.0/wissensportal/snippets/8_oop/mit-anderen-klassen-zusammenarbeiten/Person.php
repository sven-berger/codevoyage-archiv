<?php

class Person {
    public $name;
    public $alter;

    public function __construct($name, $alter) {
        $this->name = $name;
        $this->alter = $alter;
    }

    public function vorstellen() {
        return "Hallo, ich heiße " . $this->name . " und bin " . $this->alter . " Jahre alt.";
    }
}