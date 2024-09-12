<?php
session_start();
if (!isset($_SESSION['order_id'])) {
    header('Location: Login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Successful</title>
</head>
<body>
    <h1>Registration Successful</h1>
    <p>Your registration and payment have been successfully completed.</p>
</body>
</html>
