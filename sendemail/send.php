<?php
use PHPMailer\PHPMailer\PHPMMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    // $mail = new PHPMailer(true);
    $mail = new PHPMailer\PHPMailer\PHPMailer();

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'piccirillopasquale2017@gmail.com'; //your gmail
    $mail->Password = 'fisz adkx xyyv lcir'; //your gmail app password
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;

    $mail->setFrom('piccirillopasquale2017@gmail.com'); //your gmail

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    $mail->send();

    echo 
    "
    <script>
    alert('Sent successfully');
    document.location.href = '/index/index.html';
    </script>
    ";
}
?>
