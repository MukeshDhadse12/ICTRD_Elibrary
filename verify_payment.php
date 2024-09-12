<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP; 
session_start();
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php'; 


require('razorpay-php/Razorpay.php');

define('DB_SERVER', "localhost");
define('DB_USERNAME', "root");
define('DB_PASSWORD', "");
define('DB_DATABASE', "dashboard");

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// Razorpay API keys
$keyId = 'rzp_test_ajTDSw3HVxDarG';
$keySecret = 'v6bLrzUjSIJa7gHgnSL8qRHD';

$api = new Razorpay\Api\Api($keyId, $keySecret);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $paymentId = $_POST['razorpay_payment_id'];
    $orderId = $_POST['razorpay_order_id'];
    $signature = $_POST['razorpay_signature'];

    // Verify payment signature
    try {
        $attributes = [
            'razorpay_order_id' => $orderId,
            'razorpay_payment_id' => $paymentId,
            'razorpay_signature' => $signature
        ];
        $api->utility->verifyPaymentSignature($attributes);

        // Payment is successful
        $user_data = $_SESSION['user_data'];
        $fname = $user_data['fname'];
        $lname = $user_data['lname'];
        $mobile = $user_data['mobile'];
        $email = $user_data['email'];
        $password = $user_data['password'];

        // Store user data and payment ID in the database
        $sql = "INSERT INTO registration (fname, lname, mobile, email, password, payment_id) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $fname, $lname, $mobile, $email, $password, $paymentId);
        if ($stmt->execute()) {
            // Send a confirmation email
            $mail = new PHPMailer(true);

            try {
                //Server settings
                //$mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
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
                $mail->Subject = 'Thank you for registering with us';
                $mail->Body    = "Dear $fname $lname,<br><br>Thank you for registering and subscribing to our service. Your payment was successful. We are excited to have you with us.<br><br>Best Regards,<br>India Active Pvt Ltd.";

                $mail->send();
                unset($_SESSION['user_data']);
                unset($_SESSION['order_id']);
                header('Location: success.php');
                exit();
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } catch (Exception $e) {
        // Payment verification failed
        echo 'Razorpay Error : ' . $e->getMessage();
    }
}
?>
