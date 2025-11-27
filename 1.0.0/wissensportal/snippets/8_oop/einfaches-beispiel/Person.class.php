<?php

class Person {
    private $vorname;
    private $zweitname;
    private $nachname;
    private $wohnort;

    public function __construct($vorname, $zweitname, $nachname, $wohnort) {
        $this->vorname = $vorname;
        $this->zweitname = $zweitname;
        $this->nachname = $nachname;
        $this->wohnort = $wohnort;
    }

    public function vorstellen() {
        return "Hallo, ich heiße " . $this->vorname . " " . $this->zweitname . " " . $this->nachname . " und wohne in " . $this->wohnort . ".";
    }
}