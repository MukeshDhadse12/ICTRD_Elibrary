<?php
$pageTitle = "ContactUs";
require 'config/function.php';
include('includes1/contact_header.php');
?>

<section id="join" class="py-5" style="background-image: url('Images/register_Background.png');">

<div style="height:50%; width:50%; max-width: fit-content;
  margin-left: auto;
  margin-right: auto;">
    <?= alertMessage();?>
</div>
        <div class="container">

            <div class="row">
                <div id="drop-join" class="row py-5 bg-light mt-4 mx-auto col-sm-8">
                    <div class="col-sm-5 contact_join_us py-5 text-white">
                        <h2 class="text-white text-left"
                            style="font-family: 'Calistoga', cursive; text-transform: capitalize; letter-spacing: normal !important;">
                            Contact Us</h2>
                        <p class="text-white text-left"> NIT Garden, Trimurti, Nagpur, Maharashtra 441104</p>
                        <p><small><img class="d-inline" src="Images/mail1.png"></small><small
                                class=" text-white">Email: - <a href=""
                                    class="text-white">dewanshi2019@gmail.com</a></small></p>
                        <p><small><img class="d-inline" src="Images/phone1.png"></small><small
                                class="text-white">Phone: - <a href="" class="text-white">9922336776</a></small></p>
                        <ul id="contact-social-link" class="m-0 p-0 mb-3">
                            <li class="d-inline-block justify-content-center align-self-center pr-2 mr-1"><a
                                    href="https://www.facebook.com" target="_blank" class="text-white"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li class="d-inline-block justify-content-center align-self-center pr-2 mr-1"><a
                                    href="https://twitter.com" target="_blank" class="text-white"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li class="d-inline-block justify-content-center align-self-center pr-2 mr-1"><a
                                    href="https://www.instagram.com" target="_blank" class="text-white"><i
                                        class="fa fa-instagram"></i></a></li>
                            <li class="d-inline-block justify-content-center align-self-center pr-2 mr-1"><a
                                    href="https://www.linkedin.com/in/dewanshi-dhote-1622b31b6?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="text-white" target="_blank"><i
                                        class="fa fa-linkedin"></i></a></li>
                            <li class="d-inline-block justify-content-center align-self-center"><a
                                    href="https://in.pinterest.com" target="_blank" class="text-white"><i
                                        class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-8 ml-auto py-5">
                        <h3 class="text-left text-white"
                            style="font-family: 'Calistoga', cursive; text-transform: capitalize; letter-spacing: normal !important;">
                            Get in Touch</h3>
                        <form class="get_in_touch_form" method="POST" action="contact_code.php"
                            style="background-color: transparent;">
                            <label class="text-white">Feel free to drop us a line below! </label>
                            
                            <input class="w-100 p-1 my-1 name" type="text" name="name"  placeholder="Name"
                                required="">
                            <span class="d-none email_error" style="color: red;">Required Field</span>

                            <input class="w-75 p-1 my-1 email emailVal" type="email" name="email" placeholder="Email.."
                                 required="">
                            

                            <small class="text-danger error d-none">Please enter valid email id!</small>
                            
                            <input class="w-75 p-1 my-1 phone" type="text" name="phone" maxlength="10"
                                placeholder="Contact No.." >
                            
                            
                            <select class="w-100 p-1 my-1 typeCls" name="role">
                                <option value="">--Select Type--</option>
                                <option value="Publisher">Publisher</option>
                                <option value="General">General</option>
                                <option value="Student">Student</option>
                                <option value="Institute">Institute</option>
                                <option value="Teacher">Teacher</option>
                                <option value="Parent">Parent</option>
                            </select>
                            <span class="d-none comment_error" style="color: red;">Required Field</span>
                            <textarea class="w-100 p-1 my-1 comment bg-white" rows="3" placeholder="Message"
                                 name="message" required=""></textarea>
                            <!-- <div id="captcha">
    </div> -->
                            <!-- <input type="text" class="w-100 p-1 my-1 phone" placeholder="Captcha" id="cpatchaTextBox"/> -->
                            <button type="submit" class="btn btn-primary " name="ContactBtn"
                                >Send</button>
                        </form>
                        
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </section>

<?php include('includes1/footer_front.php');?>
