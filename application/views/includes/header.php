<?php 
  $active_tab = (isset($selected_tab)) ? $selected_tab : "home";
  $title      = (isset($title)) ? $title : "JOBS";
?>
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

    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/simple-sidebar.css'); ?>" rel="stylesheet">

    <style type="text/css">
        /* Sticky footer styles
-------------------------------------------------- */
html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 60px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  background-color: #f5f5f5;
}


/* Custom page CSS
-------------------------------------------------- */
/* Not required for template or sticky footer method. */

body > .container {
  padding: 60px 15px 0;
}
.container .text-muted {
  margin: 20px 0;
}

.footer > .container {
  padding-right: 15px;
  padding-left: 15px;
}

code {
  font-size: 80%;
}
    </style>
  </head>
  <!-- getting the active tab -->
  

  <body>
        <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>"">JOBS</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="<?php echo ($active_tab =="home") ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>""><?php echo $this->lang->line('home'); ?></a></li>
            <li><a href="#contact" class="<?php echo ($active_tab =="affiliates") ? 'active' : ''; ?>"><?php echo $this->lang->line('affiliates'); ?></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->lang->line('more'); ?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><?php echo $this->lang->line('api'); ?></a></li>
                <li><a href="#"><?php echo $this->lang->line('feed'); ?></a></li>
              </ul>
            </li>
          </ul>
           <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo base_url('index.php/jobs'); ?>""><span class=""></span><?php echo $this->lang->line('post'); ?></a></li>
              <?php
              $valid_user = $this->session->userdata('valid_user');
              ?>
              <?php if($valid_user): ?>
              <?php $user = $this->session->userdata('user_info');?>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#"><span class=""></span><?php echo $this->lang->line('hello').": ".$user->name; ?><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#"><?php echo $this->lang->line('profile'); ?></a></li>
                  <li><a href="<?php echo base_url('index.php/admin'); ?>"><?php echo $this->lang->line('admin_site'); ?></a></li>
                </ul>
              </li>
              <?php else: ?>
              <li><a href="<?php echo base_url('index.php/login'); ?>"><span class=""></span><?php echo $this->lang->line('login'); ?></a></li>
              <?php endif; ?>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
