<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <title></title>

     <!-- Google Fonts -->
     <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

     <link rel="stylesheet" href="<?php echo base_url() ?>css/animate.css">
     <!-- Custom Stylesheet -->
     <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
     <div>
          <div class="top">
               <img src="<?php echo base_url() ?>/uploads/assets/logo.png">
          </div>
          <div class="login-box ">
               <div class="box-header">
                    <h2>Log In</h2>
               </div>

               <?php 
                    $attributes = array( "id" => "loginform", "name" => "loginform");
                    echo form_open("login/index", $attributes);
               ?>
                 <?php
                    if(isset($error) && $error)
                    {
                        echo '<div style="color:red" >Hmm, we don\'t recognize you. Please try again.</div><br>';
                    }?>
               <label for="username">Username</label>
               <br/>
               <input class="form-control" id="txt_username" name="txt_username" placeholder="Username" type="text" value="<?php echo set_value('txt_username'); ?>" >
               <span class="text-danger"><?php echo form_error('txt_username'); ?></span>
               <br/>
               <label for="password">Password</label>
               <br/>
               <input  class="form-control" id="txt_password" name="txt_password" placeholder="Password" type="password" value="<?php echo set_value('txt_password'); ?>" >
               <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
               <br/>
               <button type="submit" id="btn_login" name="btn_login" value="Login">Sign In</button>
               

               
               <br/>
               <?php echo form_close(); ?>
               <a href="#"><p class="small">Forgot your password?</p></a>
                <a href="<?php echo base_url() ?>index.php/Registration"><h5 class="small">Dont Have an Account SIGNUP Now!!</h5></a>
          </div>
     </div>
</body>

<script>
     // $(document).ready(function () {
     // $('#logo').addClass('animated fadeInDown');
     // $("input:text:visible:first").focus();
     // });
     // $('#username').focus(function() {
     //      $('label[for="username"]').addClass('selected');
     // });
     // $('#username').blur(function() {
     //      $('label[for="username"]').removeClass('selected');
     // });
     // $('#password').focus(function() {
     //      $('label[for="password"]').addClass('selected');
     // });
     // $('#password').blur(function() {
     //      $('label[for="password"]').removeClass('selected');
     // });
</script>

</html>