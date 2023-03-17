
<?php

include("Util/MyEmailServer.php");
require_once("configs/DBConnection.php");

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

        if ($row['user_email'] == $email) {
            echo "Tài khoản đã tồn tài";
        } else {
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $code_hash = md5(uniqid(rand(), true));
            $sql_res = "INSERT INTO users(user_email, user_pass, user_hash) VALUES ('$email','$password','$code_hash');";
            if (mysqli_query($conn, $sql_res)) {
                require_once 'vendor/autoload.php';
                require_once 'Util/MyEmailServer.php';
                require_once 'Util/EmailSender.php';

                $emailServer = new MyEmailServer();
                $emailSender = new EmailSender($emailServer);
                $emailSender->send($email, "activation", "http://localhost/BTTH03_BT1/activate.php?email=".$email."&hash=".$code_hash);

            } else {
                echo "Lỗi";
            }
        }
}
?>
