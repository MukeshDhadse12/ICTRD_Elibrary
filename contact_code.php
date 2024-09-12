<?php
require 'config/function.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP; 

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['ContactBtn']))
{
    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $phone = validate($_POST['phone']);
    $role = validate($_POST['role']);
    $message = validate($_POST['message']);

    if($name !='' && $email !='' && $message !='')
    {
        $query = "INSERT INTO contactus (name, email, phone, role, message)
                  VALUES ('$name',  '$email', '$phone' , '$role' , '$message')";
        $result = mysqli_query($conn, $query);

        if($result){
            // Send email to the user
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;           // Enable SMTP authentication
            $mail->Username = 'dewanshi2019@gmail.com'; // SMTP username
            $mail->Password = 'aldh bggz rikz fshy';   // SMTP password
            $mail->SMTPSecure = 'tls';         // Enable TLS encryption, `ssl` also accepted
             
            $mail->Port = 587;                 // TCP port to connect to

            $mail->setFrom('dewanshi2019@gmail.com', 'Dewanshi Dhote');
            $mail->addAddress($email, $name);  // Add a recipient

            $mail->isHTML(true);  // Set email format to HTML

            $mail->Subject = 'Thank you for contacting ICTRD E Book Library';
            $mail->Body    = '<p>Dear ' . $name . ',</p><p>Thank you for contacting us. We have received your message and will get back to you soon.</p><p>Best Regards,<br>India Active Pvt Ltd.</p>';
            $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
            $mail->Debugoutput = function($str, $level) { echo "debug level $level; message: $str"; };
            if(!$mail->send()) {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            } else {
                redirect('ContactUs.php', '<h5>Thank you for contacting us. We will get back to you soon.</h5>');
            }
        } else {
            redirect('ContactUs.php', 'Something went wrong');
        }
    }
    else{
        redirect('ContactUs.php', 'Please fill all the required fields');
    }
}
?>
