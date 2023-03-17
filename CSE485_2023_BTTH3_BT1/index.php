<?php 
    require_once 'vendor/autoload.php';
    require_once 'Util/EmailSender.php';
    require_once 'Util/MyEmailServer.php';
//thichthihoc.ai@gmail.com
    $emailServer = new MyEmailServer();
    $emailSender = new EmailSender($emailServer);
    // $emailSender->send("nth2806201@gmail.com", "Điểm danh", "Nguyễn Trung Hiếu_1951060023");

?>