<?php

interface IConnectInfo {
    const HOST = 'localhost';
    const UNAME = 'root';
    const PW = '123456';
    const DBNAME = 'PatternTest';

    public function doConnect();
}
?>