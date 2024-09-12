<?php
session_start();
require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;

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

$api = new Api($keyId, $keySecret);

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
            unset($_SESSION['user_data']);
            unset($_SESSION['order_id']);
            header('Location: success.php');
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } catch (Exception $e) {
        // Payment verification failed
        echo 'Razorpay Error : ' . $e->getMessage();
    }
}
?>
