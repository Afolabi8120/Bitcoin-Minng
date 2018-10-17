 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up to System.</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta property="og:url" content="http://demo.madebytilde.com/elephant">
    <meta property="og:type" content="website">
    <meta property="og:title" content="The fastest way to build Modern Admin APPS for any platform, browser, or device.">
    <meta property="og:description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta property="og:image" content="../../elephant.html">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@madebytilde">
    <meta name="twitter:creator" content="@madebytilde">
    <meta name="twitter:title" content="The fastest way to build Modern Admin APPS for any platform, browser, or device.">
    <meta name="twitter:description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta name="twitter:image" content="../../elephant.html">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() . "assets/"; ?>apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php echo base_url() . "assets/"; ?>favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo base_url() . "assets/"; ?>favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php echo base_url() . "assets/"; ?>manifest.json">
    <link rel="mask-icon" href="<?php echo base_url() . "assets/"; ?>safari-pinned-tab.svg" color="#d9230f">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>css/vendor.min.css">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>css/elephant.min.css">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>css/login-1.min.css">
  </head>
  <body>
    <div class="login">
      <div class="login-body">
        <a class="login-brand login-heading" style="width: 200px" href="<?php echo base_url() . "assets/"; ?>index.html">
          <!-- <img class="img-responsive" src="<?php echo base_url() . "assets/"; ?>img/logo.svg" alt="Elephant"> -->
          <h3><b>Bitcoin Incom</b></h3>
        </a>
        <h3 class="login-heading">Sign Up</h3>
        <?php if(isset($_SESSION['success']) ) { ?>
        	<div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
        <?php } elseif (isset($_SESSION['error'])) { ?>
        	<div class="alert alert-danger"><?= $_SESSION['error'] ?></div>
        <?php } ?>
        <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
        <div class="login-form">
          <form data-toggle="validator" action="" method="post">
          	<div class="form-group">
              <label for="firstname" class="control-label">First name</label>
              <input id="firstname" class="form-control" type="text" name="firstname" spellcheck="false" autocomplete="off" data-msg-required="Please enter your firstname." required>
            </div>
            <div class="form-group">
              <label for="lastname" class="control-label">Last name</label>
              <input id="lastname" class="form-control" type="lastname" name="lastname" spellcheck="false" autocomplete="off" data-msg-required="Please enter your lastname." required>
            </div>
            <div class="form-group">
              <label for="email" class="control-label">Email</label>
              <input id="email" class="form-control" type="email" name="email" spellcheck="false" autocomplete="off" data-msg-required="Please enter your email." required>
            </div>
            <div class="form-group">
              <label for="password" class="control-label">Password</label>
              <input id="password" class="form-control" type="password" name="password" minlength="6" data-msg-minlength="Password must be 6 characters or more." data-msg-required="Please enter your password." required>
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-block" type="submit">Sign in</button>
            </div>
            <div class="form-group">
               
              <ul class="list-inline">
                <li><a href="<?php echo base_url()?>index.php/">Back to login</a></li>
                 <li>
                  <span aria-hidden="true"> · </span>
                </li>
                <li><a href="<?php echo base_url() . "assets/"; ?>password-1.html">Forgot password?</a></li>
              </ul>
            </div>
          </form>
        </div>
      </div>
      <div class="login-footer">
        <ul class="list-inline">
          <li><a class="link-muted" href="<?php echo base_url() . "assets/"; ?>signup-1.html">Sign up</a></li>
          <li>|</li>
          <li><a class="link-muted" href="<?php echo base_url() . "assets/"; ?>#">Privacy Policy</a></li>
          <li>|</li>
          <li><a class="link-muted" href="<?php echo base_url() . "assets/"; ?>#">Terms</a></li>
          <li>|</li>
          <li><a class="link-muted" href="<?php echo base_url() . "assets/"; ?>#">Cookie Policy</a></li>
          <li>|</li>
          <li>© Elephant 2016</li>
        </ul>
      </div>
    </div>
    <script src="<?php echo base_url() . "assets/"; ?>js/vendor.min.js"></script>
    <script src="<?php echo base_url() . "assets/"; ?>js/elephant.min.js"></script>
     
  </body>

</html>