<?php

include_once('IStrategy.php');
class DataEntry implements IStrategy {
    public function algorithm() {
        $hookup = UniversalConnect::doConnect();
        $test = $hookup->real_escape_string($_POST['data']);
        echo "this data has been entered :".$test."<br>";
    }
}

?>