<?php

include_once('IComponent.php');

abstract class Decorator extends IComponent {

    public function setAge($ageNow) {

        $this->ageGroup = $this->ageGroup;
    }

    public function getAge() {
        return $this->ageGroup;
    }
}
?>