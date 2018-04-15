<?php

include_once('Decorator.php');

class ProgramLang extends Decorator {
    private $languageNow;

    public function __construct(IComponent $dateNow) {

        $this->date = $dateNow;
    }

    private $language = array(
        'php' => 'PHP',
        'cs' => 'C#',
        'js' => 'javascript',
        'as3' => 'ActionScript 3.0'
    );

    public function setFeature($lan) {
        $this->languageNow = $this->language[$lan];

    }

    public function getFeature() {
       
        $output = $this->date->getFeature();
       
        $famt = '<br>&nbsp;&nbsp;';
        $output .= "$famt Preferred programming language: ";
        $output .= $this->languageNow;
        
        return $output;
    }
}
?>