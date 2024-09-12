<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP; 
session_start();
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php'; 
define('DB_SERVER', "localhost");
define('DB_USERNAME', "root");
define('DB_PASSWORD', "");
define('DB_DATABASE', "dashboard");

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Check if the email exists
    $query = "SELECT * FROM registration WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        // Generate OTP
        $otp = rand(100000, 999999);

        // Store OTP in the database
        $update = "UPDATE registration SET otp = ? WHERE email = ?";
        $stmt = $conn->prepare($update);
        $stmt->bind_param('ss', $otp, $email);
        $stmt->execute();

        // Send OTP to email using PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;           // Enable SMTP authentication
            $mail->Username = 'dewanshi2019@gmail.com'; // SMTP username
            $mail->Password = 'aldh bggz rikz fshy';   // SMTP password
            $mail->SMTPSecure = 'tls';         // Enable TLS encryption, `ssl` also accepted
             
            $mail->Port = 587;                 // TCP port to connect to

            $mail->setFrom('dewanshi2019@gmail.com', 'Dewanshi Dhote');
            $mail->addAddress($email, $user['name']);  // Add a recipient

            $mail->isHTML(true); 
            $mail->Subject = 'Your OTP Code';
            $mail->Body    = "Your OTP code is $otp.";

            $mail->send();
            $_SESSION['email'] = $email;
            header("Location: verify_otp.php");
            exit;
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Email does not exist.";
    }
}
?>
