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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $_SESSION['user_data'] = [
        'fname' => $fname,
        'lname' => $lname,
        'mobile' => $mobile,
        'email' => $email,
        'password' => $password
    ];

    header('Location: subscribe.php');
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

    function validatefname() {
            const fname = document.getElementById("fname").value;
            const inputElement = document.getElementById('fname');
            const alphabetRegex = /^[a-zA-Z]*$/;
            if (!alphabetRegex.test(inputElement.value)) {


                inputElement.value = inputElement.value.replace(/[^a-zA-Z]/g, '');
            }
        }

        function validatelname() {
            let lname = document.getElementById("lname").value;

            const inputElement = document.getElementById('lname');
            const alphabetRegex = /^[a-zA-Z]*$/;
            if (!alphabetRegex.test(inputElement.value)) {


                inputElement.value = inputElement.value.replace(/[^a-zA-Z]/g, '');
            }
        }
</script>

<section class="easyzoom-section py-5" style="background-image: url('Images/register_Background.png'); ">
    <div class="container">
        <div class="row">
            <div class=" mx-auto col-xs-12">
                <div class="card p-2">
                    <div class="card-header text-center text-success">
                        <h3 class="title" style="color:#ffffff;">Register</h3>
                    </div>
                    <form action="register.php" method="post" onsubmit="return validateForm()">
                        <div class="text-dark row mb-2 d-flex align-items-center justify-content-center"></div>
                        <div class="form-inline mb-2 name-register">
                                <button class="btn btn-pos-2"><i class="fa fa-user" aria-hidden="true"></i></button>
                                <input placeholder="First Name:" type="text" class="login-text" name="fname" id="fname" required="" oninput="validatefname()">
                            </div>
                            <div class="form-inline mb-2 name-register">
                                <button class="btn btn-pos-2"><i class="fa fa-user" aria-hidden="true"></i></button>
                                <input placeholder="Last Name::" type="text" class="login-text" name="lname" id="lname" oninput="validatelname()">
                            </div>
                        <div class="form-inline mb-2">
                            <button class="btn btn-pos-2"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                            <input placeholder="E-mail:" type="email" class="login-text" id="email" name="email" autocomplete="off" required="">
                            <span class="email_mis d-none" style="color:red;display:none;"></span>
                        </div>
                        <div class="form-inline mb-2">
                            <button class="btn btn-pos-2"><i class="fa fa-lock" aria-hidden="true"></i></button>
                            <input placeholder="Password:" type="text" class="border-right-0 login-text pass-text" name="password" id="password" autocomplete="off" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                            <span class="btn btn-pos-2 btn-pos-left btn-outline-light" ><i class="far fa-eye" id="togglePassword" style="margin-left: 2px; cursor: pointer;" aria-hidden="true"></i></span>
                            
                        </div>
                        <div class="form-inline mb-2">
                            <button class="btn btn-pos-2"><i class="fa fa-phone" aria-hidden="true"></i></button>
                            <input placeholder="Mobile No" type="text" class="login-text mobile" name="mobile" id="mobile" required="" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10">
                            <span id="message" class="message" style="color: red;display:none"><small>Mobile no. should be of 10 digits only</small></span>
                        </div>
                        <div class="form-inline mb-2"><span class="regiter_page"><font style="color:red">*</font><b>Password must be atleast 6 characters. Must contain a lowercase, uppercase and a special character.  </b></span></div>
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

<?php include('includes1/login_footer.php'); ?>
