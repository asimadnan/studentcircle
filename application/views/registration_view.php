<style type="text/css">
.body{
     position: absolute;
     top: -20px;
     left: -20px;
     right: -40px;
     bottom: -40px;
     width: auto;
     height: auto;
     background-image: url('http://www.giki.edu.pk/images/carousel/carousel13.jpg');
     background-size: cover;
     -webkit-filter: blur(5px);
     z-index: 0;
}

</style>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter User Registration Form Demo</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="body"></div>
<div class="container">
<div class="row">
 
</div>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>User Registration Form</h4>
            </div>
            <div class="panel-body">
                <?php $attributes = array("name" => "registrationform");
                echo form_open("Registration", $attributes);?>
                <div class="form-group">
                    <label for="name">First Name</label>
                    <input class="form-control" name="fname" placeholder="Your First Name" type="text" value="<?php echo set_value('fname'); ?>" />
                    <span class="text-danger"><?php echo form_error('fname'); ?></span>
                </div>

                <div class="form-group">
                    <label for="name">Last Name</label>
                    <input class="form-control" name="lname" placeholder="Last Name" type="text" value="<?php echo set_value('lname'); ?>" />
                    <span class="text-danger"><?php echo form_error('lname'); ?></span>
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" name="username" placeholder="Username" type="text" value="<?php echo set_value('username'); ?>" />
                    <span class="text-danger"><?php echo form_error('username'); ?></span>
                </div>

                 <div class="form-group">
                    <label for="regnum">Registration Number</label>
                    <input class="form-control" name="regnum" placeholder="Regnum" type="text" value="<?php echo set_value('regnum'); ?>" />
                    <span class="text-danger"><?php echo form_error('regnum'); ?></span>
                </div>
                
                <div class="form-group">
                    <label for="email">Email ID</label>
                    <input class="form-control" name="email" placeholder="Email-ID" type="text" value="<?php echo set_value('email'); ?>" />
                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>

                <div class="form-group">
                    <label for="subject">Password</label>
                    <input class="form-control" name="password" placeholder="Password" type="password" />
                    <span class="text-danger"><?php echo form_error('password'); ?></span>
                </div>

                <div class="form-group">
                    <label for="subject">Confirm Password</label>
                    <input class="form-control" name="cpassword" placeholder="Confirm Password" type="password" />
                    <span class="text-danger"><?php echo form_error('cpassword'); ?></span>
                </div>

                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-default">Signup</button>
                    <button name="cancel" type="reset" class="btn btn-default">Cancel</button>
                </div>
                <?php echo form_close(); ?>
            
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>