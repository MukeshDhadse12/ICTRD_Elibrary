<?php
$pageTitle = "Login";
include('includes1/login_header.php');

define('DB_SERVER',"localhost");
define('DB_USERNAME',"root");
define('DB_PASSWORD',"");
define('DB_DATABASE',"dashboard");

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(!$conn){
  die("Connection Failed: ". mysqli_connect_error());
}
session_start();

?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $sql = "SELECT * FROM registration WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['fname']= $user['fname'];
            $_SESSION['lname']= $user['lname'];
            header('Location: Book.php');
            exit();
        } else {
            echo '<div class="alert alert-danger">Incorrect password.</div>';
        }
    } else {
        echo '<div class="alert alert-danger">No account found with that email.</div>';
    }
}
?>


    <section class="easyzoom-section py-5" style="background-image: url('Images/bg_login.png'); ">
        <div class="container">
            <div class="row">
                <div class=" mx-auto col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <div class="card p-2">
                        <!--       <div class="alert alert-danger" id="login_response" style="display:none;background-color:#ffffff;color:#000000;">-->
                        <!--           <a class="close"  style="margin-right: 0px;" onclick="close_alert_box()">×</a>-->
                        <!--         <span id="login_error_message"></span>-->
                        <!--</div>-->
                        <div class="card-header text-center text-success">
                            <h3 class="title" style="color:#ffffff;">Login</h3>
                        </div>
                        <div class="card-body m-0">
                        <form action="login.php" method="post">
                                <input type="hidden" name="_token" value="">
                                <div class="form-inline mb-2">
                                    <button class="btn btn-pos-2"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                                    <input placeholder="E-Mail:" type="email" class="login-text" name="email" id="email" required="" value="" autofocus>
                                </div>
                                <div class="form-inline">
                                    <button class="btn btn-pos-2"><i class="fa fa-lock" aria-hidden="true" ></i></button>
                                    <input placeholder="Password:" type="password" class="border-right-0 login-text pass-text" id="password" name="password" value="" required="" autocomplete="off">
                                    <span class="btn btn-pos-2 btn-pos-left btn-outline-light" ><i class="far fa-eye" id="togglePassword" style="margin-left: -7px; cursor: pointer;" aria-hidden="true"></i></span>
                                </div>
                                <span id="changed_value" style="display:none;">password</span>
                                <a class="nav-link" href="forget_password.php" target="_blank">
                                        FORGOT PASSWORD
                                    </a>
                                <div class="form-check" style="color:#ffffff;">
                                    <label class="container1 custom-control m-0 w-100" style="color:#000000;"> 
                                <input type="checkbox" class="custom-control-input my_cat_1 " name="remember" id="remember" value="1" onclick="my_sub_check(1)"  >
                                <span class="checkmark" for="remember"> </span>Remember Me
                              </label>
                                    <!--<label class="form-check-label" for="remember" style="color:#000000;">-->
                                    <!--    Remember Me-->
                                    <!--</label>-->
                                </div>
                                <div class="text-center w-100 d-block">
                                    <div class="col-sm-12 text-center mt-4">
                                        <button class="btn btn-outline-light m-auto border-0" type="submit" id="login_submit">
                      Login
                    </button>
                                    </div>
                                </div>
                            </form>
                            <div class="or-section">
                                <!--<span>or</span>-->
                            </div>
                            <div class="social-buttons-login mt-2">
                               
                            </div>
                            <div class="new-user">
                                <p class="p-0 m-0">New User? <a href="Register.php" class="nav-link d-inline-block">Register Here</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>

<?php include('includes1/login_footer.php');?>