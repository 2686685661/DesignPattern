<?php
include_once('ISubject.php');
include_once('RealSubject.php');
include_once('UniversalConnect.php');

class Proxy implements ISubject {
    private $tableMaster;
    private $hookup;
    private $logGood;
    private $realSubject;

    public function login($uNow,$pNow) {
        $uname = $uNow;
        $pw = md5($pNow);
        $this->logGood = false;
        $this->tableMaster = 'proxyLog';
        $this->hookup = UniversalConnect::doConnect();

        $sql = "select pw from $this->tableMaster where uname='$uname'";
        if($result = $this->hookup->query($sql)) {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if($row['pw'] == $pw) {
                $this->logGood = true;
            }
            $result->close();
        }else if(($result = $this->hookup->query($sql)) === false) {
            printf("Failed:%s <br>",$this->hookup->error);
            exit();
        }
        $this->hookup->close();

        if($this->logGood) {
            $this->request();
        }else {
            echo 'username and/or password not on record';
        }
    }

    public function request() {
        $this->realSubject = new RealSubject();
        $this->realSubject->request();
    }
}
?>