<?php
session_start();

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;

if (!isset($_SESSION['user_data'])) {
    header('Location: register.php');
    exit();
}

$user_data = $_SESSION['user_data'];
$keyId = 'rzp_test_ajTDSw3HVxDarG';
$keySecret = 'v6bLrzUjSIJa7gHgnSL8qRHD';

// Create Razorpay order
function createOrder($amount) {
    global $keyId, $keySecret;
    $api = new Api($keyId, $keySecret);
    $orderData = [
        'receipt'         => 'rcptid_11',
        'amount'          => $amount * 100, // amount in paise
        'currency'        => 'INR',
        'payment_capture' => 1 // auto capture
    ];

    $razorpayOrder = $api->order->create($orderData);
    return $razorpayOrder;
}

$order = createOrder(2000); // Replace 2000 with your actual amount
$_SESSION['order_id'] = $order['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe Now</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            
            margin: 0;
            padding: 0;
            background-image: url('Images/Subs.png');
            background-repeat: no-repeat; 
            background-size: cover;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            border: 2px solid #0f8967;
            height:100%;
                       
        }
        h1 {
            text-align: center;
            color: #0f8967;
        }
        .user-details {
            margin: 20px 0;
        }
        .user-details p {
            font-size: 16px;
            line-height: 1.5;
            color: #333;
        }
        .pay-btn {
            display: flex;
            justify-content: center;
        }
        .navbar-brand{
            display: flex;
            justify-content: center;
            padding: 10px;
        }
    </style>
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-light " id="Nav-bar" style="background: white">
        <div class="">
            <a class="navbar-brand" href="Home.php"><img src="Images/ICTRD_logo.png" height="62" data-aos="fade-up-right" ></a>
        
        </div>
       
    </nav>

    <div class="container" >
        <h1>Subscribe Now</h1>
        
        <div class="user-details">
            <p><strong>First Name:</strong> <?php echo htmlspecialchars($user_data['fname']); ?></p>
            <p><strong>Last Name:</strong> <?php echo htmlspecialchars($user_data['lname']); ?></p>
            <p><strong>Mobile No.:</strong> <?php echo htmlspecialchars($user_data['mobile']); ?></p>
            <p><strong>Email Address:</strong> <?php echo htmlspecialchars($user_data['email']); ?></p>
        </div>
        <div class="pay-btn">
            <form action="verify_payment.php" method="POST">
                <script
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="<?php echo $keyId; ?>"
                    data-amount="<?php echo $order['amount']; ?>"
                    data-currency="INR"
                    data-order_id="<?php echo $order['id']; ?>"
                    data-buttontext="Pay with Razorpay"
                    data-name="ICTRD E library"
                    data-description="Test Transaction"
                    data-image="Images/pay_logo.jpg"
                    data-prefill.name="<?php echo htmlspecialchars($user_data['fname']); ?>"
                    data-prefill.email="<?php echo htmlspecialchars($user_data['email']); ?>"
                    data-prefill.contact="<?php echo htmlspecialchars($user_data['mobile']); ?>"
                    data-theme.color="#0f8967"
                ></script>
                <input type="hidden" custom="Hidden Element" name="hidden">
            </form>
        </div>
    </div>
    
</body>

</html>


