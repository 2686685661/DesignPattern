<?php

include_once('Decorator.php');

class Hardware extends Decorator {
    private $hardwareNow;

    public function __contruct(IComponent $dateNow) {

        $this->date = $dateNow;
    }

    private $box = array(
        'mac' => 'Macintosh',
        'dell' => 'Dell',
        'hp' => 'Hewlett-Packard',
        'lin' => 'Linux'
    );

    public function setFeature($hdw) {
        $this->hardwareNow = $this->box[$hdw];

    }

    public function getFeature() {
        $output = $this->$this->date->getFeature();
        $famt = '<br>&nbsp;&nbsp;';
        $output .= "$famt Current HardWare: ";
        $output .= $this->hardwareNow;
        return $output;
    }
}
?>