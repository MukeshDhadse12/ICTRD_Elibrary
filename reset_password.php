<?php
session_start();
define('DB_SERVER', "localhost");
define('DB_USERNAME', "root");
define('DB_PASSWORD', "");
define('DB_DATABASE', "dashboard");

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$message = "";
$message_type = ""; // To hold the type of message, either 'success' or 'error'

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $otp = $_POST['otp'];
    $new_password = password_hash($_POST['new_password'], PASSWORD_BCRYPT);
    $email = $_SESSION['email'];

    // Check if OTP is valid
    $query = "SELECT * FROM registration WHERE email = ? AND otp = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss', $email, $otp);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Check if a user was found with the correct OTP
    if ($user) {
        // Update password
        $update = "UPDATE registration SET password = ?, otp = NULL WHERE email = ?";
        $stmt = $conn->prepare($update);
        $stmt->bind_param('ss', $new_password, $email);
        if ($stmt->execute()) {
            $message = "Password has been reset successfully.";
            $message_type = "success";
        } else {
            $message = "Failed to reset password.";
            $message_type = "error";
        }
    } else {
        $message = "Invalid OTP.";
        $message_type = "error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            color: #0f8967;
            margin-bottom: 20px;
        }
        .message {
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .message.success {
            background-color: #d4edda;
            color: #155724;
        }
        .message.error {
            background-color: #f8d7da;
            color: #721c24;
        }
        button {
            background-color: #FF9800;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #e68900;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Reset Password</h2>
        <?php if ($message): ?>
            <div class="message <?php echo $message_type; ?>">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
        <?php if ($message_type == "success"): ?>
            <a href="login.php">
                <button>Login</button>
            </a>
        <?php else: ?>
            <a href="forget_password.php">
                <button>Try Again</button>
            </a>
        <?php endif; ?>
    </div>
</body>
</html>
