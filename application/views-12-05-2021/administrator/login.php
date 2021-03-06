<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Market Place </title>
      <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/nucleo/css/nucleo.css" type="text/css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/argon.min5438.css" type="text/css">
   </head>
   <body class="bg-default">
      <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
         <div class="container">
            <a class="navbar-brand" href="<?php echo base_url(); ?>">			<p class="logo-cls"><?php echo SiteTitle;?></p>
            <!--<img src="<?php //echo base_url(); ?>assets/img/brand/white-logo1.png" alt="">-->
            </a>
         </div>
      </nav>
      <!-- Main content -->
      <div class="main-content">
         <!-- Header -->
         <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
            <div class="container">
               <div class="header-body text-center mb-7">
                  <div class="row justify-content-center">
                     <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                        <h1 class="text-white">Admin Panel!  </h1>
                     </div>
                  </div>
               </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
               <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                  <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
               </svg>
            </div>
         </div>
         <!-- Page content -->
         <div class="container mt--9 pb-5">
            <div class="row justify-content-center">
               <div class="col-lg-5 col-md-7">
                  <div class="card bg-secondary border-0 mb-0">
                     <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                           <small>Or sign in with credentials</small>
                        </div>
                        <?php $this->load->helper('form'); ?>
                        <div class="row">
                           <div class="col-md-12">
                              <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">??</button></div>'); ?>
                           </div>
                        </div>
                        <?php
                           $this->load->helper('form');
                           $error = $this->session->flashdata('error');
                           if($error){?>
								<div class="alert alert-danger alert-dismissable">
								   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">??</button>
								   <?php echo $error; ?>                    
								</div><?php
							}
							$success = $this->session->flashdata('success');
                           if($success){ ?>
							<div class="alert alert-success alert-dismissable">
							   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">??</button>
							   <?php echo $success; ?>                    
							</div><?php 
						  } ?>
                        <form role="form" action="<?php echo base_url(); ?>administrator" method="post">
                           <div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                 </div>
                                 <input type="email" class="form-control" placeholder="Email" name="email" required />
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="input-group input-group-merge input-group-alternative">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                 </div>
                                 <input type="password" class="form-control" placeholder="Password" name="password" required />
                              </div>
                           </div>
                           <div class="custom-control custom-control-alternative custom-checkbox">
                              <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                              <label class="custom-control-label" for=" customCheckLogin">
                              <span class="text-muted">Remember me</span>
                              </label>
                           </div>
                           <div class="text-center">
                              <input type="submit" class="btn btn-primary my-4" value="Sign In"  name="SignIn"/>
                           </div>
                        </form>
                     </div>
                  </div>
                 <!-- <div class="row mt-3">
                     <div class="col-6">
                        <a href="#" class="text-light"><small>Forgot password?</small></a>
                     </div>
                  </div>-->
               </div>
            </div>
         </div>
      </div>
      <!-- Footer -->
      <script src="<?php echo base_url(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    
      <script src="<?php echo base_url(); ?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/demo.min.js"></script>
   </body>
</html>