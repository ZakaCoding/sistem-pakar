<?php
function url_dasar(){
    //$_SERVER['SERVER_NAME'] : alamat website, misalkan websitemu.com
    // $_SERVER['SCRIPT_NAME'] : directory website, websitemu.com/blog/ $_SERVER['SCRIPT_NAME'] : blog
    $url_dasar  = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']);
    return $url_dasar;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// untuk kirim email otomatis via phpmailer
function kirim_email($email_penerima, $nama_penerima, $judul_email, $isi_email){
    
    $email_pengirim     = "yunitariyanti332@gmail.com";
    $nama_pengirim      = "noreply";
    //Load Composer's autoloader
    require getcwd().'/vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $email_pengirim;                     //SMTP username
        $mail->Password   = 'yunita961870';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($email_pengirim, $nama_pengirim);
        $mail->addAddress($email_penerima, $nama_penerima);     //Add a recipient
        
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $judul_email;
        $mail->Body    = $isi_email;

        $mail->send();
       return "sukses";
    } catch (Exception $e) {
        return "gagal: {$mail->ErrorInfo}";
    }
}
?>