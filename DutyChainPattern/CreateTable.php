<?php
include_once('UniversalConnect.php');

class CreateTable {

    private $tableMaster;
    private $hookup;

    public function __construct() {

        $this->tableMaster = 'helpdesk';
        $this->hookup = UniversalConnect::doConnect();
        $drop = "drop table if exists $this->tableMaster";

        if($this->hookup->query($drop) === true) {
            printf("Old table %s has been dropped. <br>",$this->tableMaster);
        }

        $sql = "create table $this->tableMaster (id INT NOT NULL AUTO_INCREMENT,chain VARCHAR(3),response TEXT,PRIMARY KEY(id))";
        if($this->hookup->query($sql) === true) {
            echo "table $this->tableMaster has been created successfully.<br>";
        }
        $this->hookup->close();
    }
}

$worker = new CreateTable();
?>