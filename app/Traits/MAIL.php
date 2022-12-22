<?php
namespace App\Traits;
use App\Models\Order;
trait MAIL
{
    public static function sendEmail($mail_body, $customer_email) {
        try {
            require base_path("vendor/autoload.php");
            $mail = new \PHPMailer\PHPMailer\PHPMailer();
            // $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host = config('mail.host');
            $mail->SMTPAuth = true;
            $mail->Username = config('mail.username');
            $mail->Password = config('mail.password');
            $mail->SMTPSecure = config('mail.encryption');
            $mail->Port = config('mail.port');
            $mail->setFrom('admin@letsconnect.com', 'letsconnect');
            $mail->addAddress($customer_email);
            $mail->isHTML(true);
            $mail->Subject = 'Your Order Has been Placed in letsconnect';
            $mail->Body    = $mail_body;
            if(!$mail->Send()){
                return 0;
            }else{
                return 1;
            }
        } catch (\Exception $e) {
            // return $e->getMessage();
            return 0;
        }
    }

}
