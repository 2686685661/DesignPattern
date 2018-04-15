<?php
include_once('UniversalConnect.php');

class ConnectClient {

    private $hookup;

    public function __construct() {
        $this->hookup = UniversalConnect::doConnect();

    }
}

$worker = new ConnectClient();
?>