<?php
include_once('IStrategy.php');
class UpdateData implements IStrategy {
    public function algorithm() {
        $hookup = UniversalConnect::doConnect();
        $test = $hookup->real_escape_string($_POST['data']);
        echo "your new data is now ".$test."<br>";
    }
}



?>