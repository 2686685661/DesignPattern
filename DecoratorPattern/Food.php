<?php

include_once('Decorator.php');

class Food extends Decorator {
    private $chowNow;

    public function __contruct(IComponent $dateNow) {

        $this->date = $dateNow;
    }

    private $snacks = array(
        'piz' => 'Pizza',
        'burg' => 'Burgers',
        'nach' => 'Nachos',
        'veg' => 'Veggies'
    );

    public function setFeature($yum) {
        $this->chowNow = $this->snacks[$yum];

    }

    public function getFeature() {
        $output = $this->$this->date->getFeature();
        $famt = '<br>&nbsp;&nbsp;';
        $output .= "$famt Favorite food: ";
        $output .= $this->chowNow;
        return $output;
    }
}
?>