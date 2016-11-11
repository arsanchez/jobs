
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $this->lang->line('login'); ?></title>

      <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <style type="text/css">
      body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
    </style>
  </head>

  <body>

    <div class="container">

      <form class="form-signin" id="loginForm" method="POST" action="<?php echo base_url('index.php/login') ?>">
        <h2 class="form-signin-heading"><?php echo $this->lang->line('site_in'); ?></h2>
        <input type="text" id="txtUser" name="txtUser"  class="form-control" placeholder="<?php echo $this->lang->line('user'); ?>" required autofocus autocomplete="off">
        <input type="password" id="txtPass" name="txtPass" class="form-control" placeholder="<?php echo $this->lang->line('pass'); ?>" required autocomplete="off">
        <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo $this->lang->line('login'); ?></button>
      </form>

    </div> <!-- /container -->


    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.validate.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#loginForm").validate({
          rules: {
            txtUser: {
              required: true,
              minlength: 2
            },
            txtPass: {
              required: true,
              minlength: 5
            }
          },
          txtUser: {
            username: {
              required: "Please enter a username",
              minlength: "Your username must consist of at least 2 characters"
            },
            txtPass: {
              required: "Please provide a password",
              minlength: "Your password must be at least 5 characters long"
            }
          }
        });
      });
        
    </script>
  </body>
</html>
