<?php
include_once('ISubject.php');

class RealSubject implements ISubject {
    public function request() {
        $practice=<<<REQUEST
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Success Login</title>
        </head>
        <body>
          <p>登录成功</p>
        </body>
        </html>
REQUEST;
        echo $practice;
        
    }
}
?>