<?php
class Client {
    public function insertData() {
        $context = new Context(new DataEntry());
        $context->algorithm();
    }
    public function findData() {
        $context = new Context(new SearchData());
        $context->algorithm();
    }
    public function changeData() {
        $context = new Context(new UpdateData());
        $context->algorithm();
    }
}

?>