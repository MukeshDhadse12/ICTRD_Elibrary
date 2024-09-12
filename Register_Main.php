<?php
$pageTitle = "Register";
include('includes1/login_header.php');
define('DB_SERVER', "localhost");
define('DB_USERNAME', "root");
define('DB_PASSWORD', "");
define('DB_DATABASE', "dashboard");

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
session_start();

// Include Razorpay PHP SDK
require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;

// Razorpay API keys
$keyId = 'rzp_test_ajTDSw3HVxDarG';
$keySecret = 'v6bLrzUjSIJa7gHgnSL8qRHD';

// Create Razorpay Order
function createOrder($amount) {
    global $keyId, $keySecret;
    $api = new Api($keyId, $keySecret);
    $orderData = [
        'receipt'         => 'rcptid_11',
        'amount'          => $amount * 100, // 2000 rupees in paise
        'currency'        => 'INR',
        'payment_capture' => 1 // auto capture
    ];

    $razorpayOrder = $api->order->create($orderData);
    return $razorpayOrder;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Create Razorpay order
    $order = createOrder(2000); // Replace 2000 with your actual amount
    $_SESSION['order_id'] = $order['id'];
    $_SESSION['user_data'] = [
        'fname' => $fname,
        'lname' => $lname,
        'mobile' => $mobile,
        'email' => $email,
        'password' => $password
    ];

    // Render the payment page with Razorpay payment form
    echo '<form action="verify_payment.php" method="POST">
            <script
                src="https://checkout.razorpay.com/v1/checkout.js"
                data-key="' . $keyId . '"
                data-amount="' . ($order['amount']) . '"
                data-currency="INR"
                data-order_id="' . $order['id'] . '"
                data-buttontext="Pay with Razorpay"
                data-name="ICTRD E library"
                data-description="Test Transaction"
                data-image="Images/pay_logo.jpg"
                data-prefill.name="' . $fname . '"
                data-prefill.email="' . $email . '"
                data-prefill.contact="' . $mobile . '"
                data-theme.color="#0f8967"
            ></script>
            <input type="hidden" custom="Hidden Element" name="hidden">
          </form>';
    exit();
}
?>

<script>
    function validateForm() {
        let fname = document.getElementById("fname").value;
        let lname = document.getElementById("lname").value;
        let mobile = document.getElementById("mobile").value;
        let email = document.getElementById("email").value;
        let password = document.getElementById("password").value;

        let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        let mobileRegex = /^[0-9]{10}$/;

        if (!fname || !lname || !mobile || !email || !password) {
            alert("All fields are required!");
            return false;
        }

        if (!emailRegex.test(email)) {
            alert("Invalid email format!");
            return false;
        }

        if (!mobileRegex.test(mobile)) {
            alert("Invalid mobile number! Must be 10 digits.");
            return false;
        }

        return true;
    }
</script>

<section class="easyzoom-section py-5" style="background-image: url('Images/register_Background.png');">
    <div class="container">
        <div class="row">
            <div class=" mx-auto col-lg-5 col-md-5 col-sm-6 col-xs-12">
                <div class="card p-2">
                    <div class="card-header text-center text-success">
                        <h3 class="title" style="color:#ffffff;">Register</h3>
                    </div>
                    <form action="register.php" method="post" onsubmit="return validateForm()">
                        <div class="text-dark row mb-2 d-flex align-items-center justify-content-center"></div>
                        <div class="form-inline mb-2 name-register">
                            <button class="btn btn-pos-2"><i class="fa fa-user" aria-hidden="true"></i></button>
                            <input placeholder="First Name:" type="text" class="login-text" name="fname" id="fname" required="">
                        </div>
                        <div class="form-inline mb-2 name-register">
                            <button class="btn btn-pos-2"><i class="fa fa-user" aria-hidden="true"></i></button>
                            <input placeholder="Last Name:" type="text" class="login-text" name="lname" id="lname" required="">
                        </div>
                        <div class="form-inline mb-2">
                            <button class="btn btn-pos-2"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                            <input placeholder="E-mail:" type="email" class="login-text" id="email" name="email" autocomplete="off" required="">
                            <span class="email_mis d-none" style="color:red;display:none;"></span>
                        </div>
                        <div class="form-inline mb-2">
                            <button class="btn btn-pos-2"><i class="fa fa-lock" aria-hidden="true"></i></button>
                            <input placeholder="Password:" type="text" class="border-right-0 login-text pass-text" name="password" id="password" autocomplete="off" required="" onchange="enterpassword(this)">
                            <span class="btn btn-pos-2 btn-pos-left btn-outline-light" onclick="change_password_style2()"><i class="fa fa-eye" aria-hidden="true"></i></span>
                            <span class="mis_pass d-none" style="color:red"></span>
                            <span id="changed_value2" style="display:none;">text</span>
                        </div>
                        <div class="form-inline mb-2">
                            <button class="btn btn-pos-2"><i class="fa fa-phone" aria-hidden="true"></i></button>
                            <input placeholder="Mobile No" type="text" class="login-text mobile" name="mobile" id="mobile" required="" onchange="checkmobile(this);" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10">
                            <span id="message" class="message" style="color: red;display:none"><small>Mobile no. should be of 10 digits only</small></span>
                        </div>
                        <div class="form-inline mb-2"><span class="regiter_page"><font style="color:red">*</font><b>Password must be at least 6 characters. Must contain a lowercase, uppercase, and a special character.</b></span></div>
                        <div class="col-sm-12 text-center mt-4">
                            <button class="btn btn-outline-light m-auto border-0 submitBtn" type="submit">Register</button>
                        </div>
                    </form>
                    <div class="card-body m-0">
                        <div class="or-section"></div>
                        <div class="social-buttons-login mt-2"></div>
                        <div class="new-user">
                            <p class="p-0 m-0">Already registered? <a href="login.php" class="nav-link d-inline-block">Login here.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('includes1/login_footer.php'); ?>

//verify_payment.php

<?php
// Including Razorpay PHP SDK
require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;

session_start();
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
        $stmt->bind_param("ssisss", $fname, $lname, $mobile, $email, $password, $paymentId);
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
