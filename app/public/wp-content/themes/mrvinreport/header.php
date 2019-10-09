<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width">
    <meta charset="utf-8">
    <?php wp_head(); ?>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-light bg-tranparent">
        <div class="container">
            <a class="navbar-brand logo" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/Verify_My_VIN_2.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="navbar-nav nav nav-fill w-100">
                    <li class="nav-item">
                      <a class="nav-link" href="<?php get_template_directory_uri(); ?>/sample-report/">Sample Report</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php get_template_directory_uri(); ?>/dealers/">Dealers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php get_template_directory_uri(); ?>/why-us/">Why Choose Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php get_template_directory_uri(); ?>/contact-us/">Contact</a>
                    </li>
                    <li class="nav-item">
                      <p class="where-link" id="myBtn"><button type="button" class="btn btn-light login-button">LOGIN</button></p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- The Modal -->
        <div id="myModal" class="modal">
          <!-- Modal content -->
          <div class="modal-content login-popup">
            <span class="close">&times;</span>
            <h3><span>Login</span></h3>
            <hr>
            <div class="container login-body">
              <form id="register-form" role="form" autocomplete="off" class="form" method="post">
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter Your Password" name="pswd">
                  <a href="#">Forget Your Password</a>
                </div>
                <div class="form-group form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                  </label>
                </div>
                <button type="submit" class="btn get-report-btn">Submit</button>
              </form>
            </div>
          </div>
        </div>
    </nav>
