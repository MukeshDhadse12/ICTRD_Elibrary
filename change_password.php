<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$pageTitle = "Register";

include('includes1/login_header.php');
// define('DB_SERVER',"localhost");
// define('DB_USERNAME',"root");
// define('DB_PASSWORD',"");
// define('DB_DATABASE',"dashboard");

// $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

// if(!$conn){
//   die("Connection Failed: ". mysqli_connect_error());
// }
?>
<?php
session_start();
include ('config\dbcon.php'); // Contains the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];
    $new_password = $_POST['new_password'];

    // Check if new password and confirm password match
    

    // Get the user's current password hash from the database
    $user_id = $_SESSION['user_id']; // Assuming the user ID is stored in session
    $query = "SELECT password FROM registration WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Verify current password
    if (!password_verify($password, $user['password'])) {
        die("Current password is incorrect.");
    }

    // Hash the new password
    $new_password_hashed = password_hash($new_password, PASSWORD_DEFAULT);

    // Update the password in the database
    $update_query = "UPDATE registration SET password = ? WHERE id = ?";
    $update_stmt = $conn->prepare($update_query);
    $update_stmt->bind_param("si", $new_password_hashed, $user_id);

    if ($update_stmt->execute()) {
        echo "Password changed successfully.";
    } else {
        echo "Error updating password.";
    }
}
?>




<section class="easyzoom-section py-5" style="background-image: url('Images/bg_login.png');">
        <div class="container">
            <div class="row">
                <div class=" mx-auto col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <div class="card p-2">
                        <!--       <div class="alert alert-danger" id="login_response" style="display:none;background-color:#ffffff;color:#000000;">-->
                        <!--           <a class="close"  style="margin-right: 0px;" onclick="close_alert_box()">×</a>-->
                        <!--         <span id="login_error_message"></span>-->
                        <!--</div>-->
                        <div class="card-header text-center text-success">
                            <h3 class="title" style="color:#ffffff;">Change Password</h3>
                        </div>
                        <div class="card-body m-0">
                        <form action="change_password.php" method="post">
                                <input type="hidden" name="_token" value="">
                                <div class="form-inline mb-2">
                                    <button class="btn btn-pos-2"><i class="fa fa-lock" aria-hidden="true" ></i></button>
                                    <input placeholder="Password:" type="password" class="border-right-0 login-text pass-text" id="password" name="password" value="" required="" autocomplete="off">
                                    <span class="btn btn-pos-2 btn-pos-left btn-outline-light" onclick="change_password_style()"><i class="fa fa-eye" aria-hidden="true" ></i></span>
                                </div>
                                <div class="form-inline">
                                    <button class="btn btn-pos-2"><i class="fa fa-lock" aria-hidden="true" ></i></button>
                                    <input placeholder="New Password:" type="password" class="border-right-0 login-text pass-text" id="new_password" name="new_password" value="" required="" autocomplete="off">
                                    <span class="btn btn-pos-2 btn-pos-left btn-outline-light" onclick="change_password_style()"><i class="fa fa-eye" aria-hidden="true" ></i></span>
                                </div>
                                    <!--<label class="form-check-label" for="remember" style="color:#000000;">-->
                                    <!--    Remember Me-->
                                    <!--</label>-->
                                </div>
                                <div class="text-center w-100 d-block">
                                    <div class="col-sm-12 text-center mt-4">
                                        <button class="btn btn-outline-light m-auto border-0" type="submit" id="change_password" value="Change Password">
                      Change Password
                    </button>
                                    </div>
                                </div>
                            </form>
                            <div class="or-section">
                                <!--<span>or</span>-->
                            </div>
                            <div class="social-buttons-login mt-2">
                               
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('includes1/login_footer.php');?>
</body>
</html>