<?php

function __autoload($class_name) {
    include $class_name.'.php';
}

class Client {

    private $market;
    private $manage;
    private $engineer;

    public function __construct() {
        $this->makeConProto();

        $Tess = clone $this->market;
        $this->setEmployee($Tess,'Tess Smith',101,'ts101-1234','111.png');
        $this->showEmployee($Tess);

        $Jacob = clone $this->market;
        $this->setEmployee($Jacob,'Jacob Smith',102,'jj101-2234','222.png');
        $this->showEmployee($Jacob);

        $Ricky = clone $this->manage;
        $this->setEmployee($Ricky,'Ricky Smith',203,'rr102-2234','333.png');
        $this->showEmployee($Ricky);

        $Olivia = clone $this->engineer;
        $this->setEmployee($Olivia,'Olivia Smith',302,'op201-2234','444.png');
        $this->showEmployee($Olivia);

        $John = clone $this->engineer;
        $this->setEmployee($John,'John Smith',301,'jj302-1454','555.png');
        $this->showEmployee($Olivia);

    }

    private function makeConProto() {
        $this->market = new Marketing();
        $this->manage = new Management();
        $this->engineer = new Engineering();
    }

    private function setEmployee(IAcmePrototype $employeeNow,$nm,$dp,$id,$px) {
        $employeeNow->setName($nm);
        $employeeNow->setDept($dp);
        $employeeNow->setId($id);
        $employeeNow->setPic($px);
    }

    private function showEmployee(IAcmePrototype $employeeNow) {
        $px = $employeeNow->getPic();
        echo $px."<br>";
        echo $employeeNow->getNmae()."<br>";
        echo $employeeNow->getDept().': '.$employeeNow::UNIT."<br>";
        echo $employeeNow->getId();
        
        
    }
}

$worker = new Client();

?>