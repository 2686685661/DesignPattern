<?php
include_once('IStrategy.php');
class SearchData implements IStrategy {
    public function algorithm() {
        $hookup = UniversalConnect::doConnect();
        $test = $hookup->real_escape_string($_POST['data']);
        echo "here is waht you were looking for ".$test."<br>";
    }
}

?>