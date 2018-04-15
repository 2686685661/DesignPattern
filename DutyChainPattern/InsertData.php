<?php
include_once('UniversalConnect.php');
class InsertData {
    private $tableNaster;
    private $hookup;

    public function __construct() {
        $this->tableNaster = 'helpdesk';
        $this->hookup = UniversalConnect::doConnect();
        $chain = $this->hookup->real_escape_string($_POST['chain']);
        $response = $this->hookup->real_escape_string($_POST['response']);

        $sql = "insert into $this->tableNaster (chain,response) values ('$chain','$response')";

        if($this->hookup->query($sql)) {
            printf("chain query: %s <br> response %s <br> have been inserted into %s.",$chain,$response,$this->tableNaster);

        }
        else if(($result = $this->hookup->query($sql)) === false) {
            printf("invalid query : %s <br> whole query : %s <br>",$this->hookup->error,$sql);
            exit();
        }
        $this->hookup->close();
    }
}
$worker = new InsertData();
?>