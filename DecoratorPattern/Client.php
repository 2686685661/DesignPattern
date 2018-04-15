<?php

function __autoload($class_name) {
    include $class_name.'.php';
}

class Client {

    private $hotDate;

    public function __construct() {

        $this->hoteDate = new Female();
        
        $this->hoteDate->setAge('Age Group 4');
        
        echo $this->hoteDate->getAge();
        
        $this->hoteDate = $this->wrapComponent($this->hoteDate);
        
        echo $this->hoteDate->getFeature();
        
      
        
        
    }

    private function wrapComponent(IComponent $component) {
        
        $component = new ProgramLang($component);
        $component->setFeature('php');
        

        return $component;
       
    }
}

$worker = new Client();
?>