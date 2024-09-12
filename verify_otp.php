<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verify OTP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            height:50%;
            width:33%;
            margin-left:33%;
            margin-top:10%;
        }
        h2 {
            color: #0f8967;
            margin-bottom: 20px;
        }
        label {
            color: #333;
            display: block;
            margin-bottom: 8px;
        }
        input[type="text"], input[type="password"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
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
        .navbar-brand{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body style="background-image: url('Images/bg_login.png');">
    
<nav class="navbar navbar-expand-lg navbar-light " id="Nav-bar" style="background: white">
        <div class="p-0 m-0">
            <a class="navbar-brand" href="Home.php"><img src="Images/ICTRD_logo.png" height="62" data-aos="fade-up-right"></a>
</nav>
    <div class="container">
        
        <form action="reset_password.php" method="post">
        <h2>Verify OTP</h2>
            <label for="otp">OTP:</label>
            <input type="text" id="otp" name="otp" required>
            <br>
            <label for="new_password">New Password:</label>
            <input type="password" id="new_password" name="new_password" required>
            <button type="submit">Reset Password</button>
        </form>
    </div>
</body>
</html>
