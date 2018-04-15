<?php
function __autoload($class_name) {
    include $class_name.'.php';
}

class Client {
    private $queryNow;

    public function __construct() {
        if(isset($_POST['sendNow'])) {
            $this->queryNow = $_POST['help'];
        }

        $q1 = new Q1();
        $q2 = new Q2();
        $q3 = new Q3();
        $q1->setSuccessor($q2);
        $q2->setSuccessor($q3);

        $loadup = new Request($this->queryNow);

        $q1->handleRequest($loadup);
    }
}
$makeRequest = new Client();

?>