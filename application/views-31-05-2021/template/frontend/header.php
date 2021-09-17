<?php $url= explode('/',$_SERVER['REQUEST_URI']);?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MVP</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front-end/css/carousel.css?v=1.1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front-end/css/style.css?v=1.1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front-end/css/style2.css?v=1.1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front-end/css/responsive.css?v=1.1">
    
    <link href="<?php echo base_url();?>assets/front-end/vendor/owl.carousel/assets/owl.carousel.min.css?v=1.1" rel="stylesheet">
   
    <link href="<?php echo base_url();?>assets/front-end/vendor/icofont/icofont.min.css?v=1.1" rel="stylesheet">
  </head>
  <body class="">
<div class="container header_container">
  <header class="main-header <?php if(!empty($this->session->userdata('uid'))){ echo"login-header";}?>">
        <nav class="navbar navbar-expand-lg navbar-light" id="main_header">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo base_url();?>">Logo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                      <li class="nav-item">
                        <a class="nav-link <?php if($url[2]=='') { echo "active";}?>" href="<?php echo base_url();?>">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link  <?php if(in_array('about-us',$url)) { echo "active";}?>" href="<?php echo base_url();?>about-us">About Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link  <?php if(in_array('buyers',$url) || in_array('view-buyer',$url)) { echo "active";}?>" href="<?php echo base_url();?>buyers">Buyer</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link <?php if(in_array('sellers',$url) || in_array('view-profile',$url)) { echo "active";}?>" href="<?php echo base_url();?>sellers">Seller</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link <?php if(in_array('investors',$url) || in_array('view-investor',$url)) { echo "active";}?>" href="<?php echo base_url();?>investors">Investor</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link <?php if(in_array('advisory',$url)) { echo "active";}?>" href="<?php echo base_url();?>advisory">Advisory</a>
                      </li>
                      <li class="nav-item drop-down">
                        <a class="nav-link <?php if(in_array('buy',$url) || in_array('sell',$url) || in_array('business-plan',$url)) { echo "active";}?>" href="#">Resources</a>
						<ul class="d-item">
							<li> <a class="nav-link" href="<?php echo base_url();?>buy" >How to Buy</a></li>
							<li> <a class="nav-link" href="<?php echo base_url();?>sell" >How to Sell</a></li>
							<li> <a class="nav-link" href="<?php echo base_url();?>business-plan" >How to create a business plan</a></li>
						</ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link  <?php if(in_array('contact-us',$url)) { echo "active";}?>" href="<?php echo base_url();?>contact-us">Contact</a>
                      </li>
                    </ul>
					
                    <div class="ml-auto d-flex align-items-center">
                        <ul class="navbar-nav User_nav_login <?php if(!empty($this->session->userdata('uid'))){ ?>d-none <?php } ?>">
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="modal" data-target="#basicExampleModal"><i class="fa fa-lock" aria-hidden="true"></i> Login</a>
                            </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">|</a>
                              </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="modal" data-target="#basicExampleModal"><i class="fa fa-user" aria-hidden="true"></i> Register</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0" >
						<?php if(!empty($this->session->userdata('uid'))){ ?>
                            <a href="<?php echo base_url();?>notifications"><div class="ball-icon">
                                <i class="fa fa-bell-o" aria-hidden="true"></i>
                                <span class="badge badge-danger notificationscount"><span id="notificationscount">0</span></span>
						</div></a><?php } ?>
                            <input class="mr-sm-2 nav_search ml-md-3" type="search" placeholder="Businesses for sale in Singapore" aria-label="Search">
                            <a href="<?php echo base_url();?>search-result" class="btn nav_search_btn my-2 my-sm-0"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </form>
						<?php if(!empty($this->session->userdata('uid'))){ ?>
                        <div class="dropdown mr-1">
                                <button class="btn bg_main text-white dropdown-toggle px-4" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Profile</button>
                                <div class="dropdown-menu profile_dropdown p-0" aria-labelledby="dropdownMenuButton">
                                    <div class="row p-3">
                                        <div class="col-md-4 pr-0">
                                            <div class="drop_profile_img">
                                                <!-- <img class="profile_img w-100" src="assets/img/user.png"> -->
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <p><?php if(!empty($users['first_name'])){ echo $users['first_name']; }?></p>
                                            <p class="color_blue"><?php if(!empty($this->session->userdata('email'))){ echo $this->session->userdata('email'); }?></p>
                                            <a class="save_change d-block text-center bg_main br_10 p-2 mt-2" href="<?php echo base_url();?>dashboard">My Dashboard</a>
                                        </div>
                                    </div>
                                    
                                    <a class="dropdown-item" href="#"><i class="fa fa-bookmark pr-2" aria-hidden="true"></i>Bookmarks & History</a>
                                    <a class="dropdown-item" href="<?php echo base_url();?>notifications"><i class="fa fa-bell pr-2" aria-hidden="true"></i>Notification</a>
									<?php if($this->session->userdata('role')==1){ ?>
										<a class="dropdown-item" href="<?php echo base_url();?>investor-setting"><i class="fa fa-bell pr-2" aria-hidden="true"></i>Settings</a>
									<?php } ?>	
									<?php if($this->session->userdata('role')==2){ ?>
										<a class="dropdown-item" href="<?php echo base_url();?>buyer-setting"><i class="fa fa-bell pr-2" aria-hidden="true"></i>Settings</a>
									<?php } ?>
									<?php if($this->session->userdata('role')==3){ ?>
										<a class="dropdown-item" href="<?php echo base_url();?>seller-setting"><i class="fa fa-bell pr-2" aria-hidden="true"></i>Settings</a>
									<?php } ?>
									<?php if(!empty($this->session->userdata('loginmode'))){?>
									<a class="dropdown-item" href="<?php echo base_url()?>googlelogin/logout"><i class="fa fa-minus-circle pr-2" aria-hidden="true"></i>Logout</a>
									<?php 									
									}else{ ?>
                                    <a class="dropdown-item" href="<?php echo base_url()?>logout"><i class="fa fa-minus-circle pr-2" aria-hidden="true"></i>Logout</a>
									<?php } ?>
                                </div>
                            </div>
                            <div class="login_user d-flex justify-content-center align-items-center">
                                <img class="" src="<?php echo base_url();?>assets/img/user.png">
						</div><?php }?>
                    </div>
                </div>
            </div>
        </nav>
		<input type="hidden" name="baseURL" id="baseURL" value="<?php echo base_url();?>" >
    </header>
   </div> 
    <!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
             <input type="hidden" name="baseURL" id="baseURL" value="<?php echo base_url();?>" >
                <div class="user_forms d-flex flex-column justify-content-center align-items-center">
                    <div class="user_forms_body">
                        <button type="button" class="close close_form" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <ul class="nav nav-tabs">
                            <li><a href="#social_form" data-toggle="tab">SOCIAL</a></li>
                            <li  class="active"><a class="active" href="#login_form" data-toggle="tab">LOGIN</a></li>
                            <li><a href="#register_form" data-toggle="tab">REGISTER</a></li>
                        </ul>
						
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade" id="social_form">
                                <form >
                                    <h6 class="text-center pb-3">SOCIAL PROFILES</h6>
                                    <select class="select_menu mb-2" id="select_profile_socail">
                                        <option value="0" selected>Choose Your Profile</option>
                                        <option value="1">As a Investor</option>
                                        <option value="2">As a Buyer</option>
                                        <option value="3" >As a Seller</option>
										<option value="4">As a Advisor</option>
                                    </select>
									<?php if(empty($this->session->userdata('uid'))){ 
									$socailmediacountry = $this->login_model->get_countries();
								   if(!empty($socailmediacountry)){?>
                                    <select class="select_menu mb-2" id="select_country_socail">
                                        <option value="0" selected>Country</option>
                                        <?php foreach($socailmediacountry as $socailmediacountry) { ?>
                                         <option value="<?php echo $socailmediacountry['id']?>"><?php echo $socailmediacountry['name']?></option>
										<?php } ?>
									</select><?php } }?>
                                    <a id="agoogleid" href="<?php echo base_url();?>googlelogin/login" class="google btn">
                                        <h5 class="m-0"><i class="fa fa-google-plus"></i> Login with Google+</h5>
                                    </a>
									<?php if(!empty($link)) { ?>
                                    <a  id="afacebookid"  href="<?php echo $link;?>" class="fb btn">
                                      <h5 class="m-0"><i class="fa fa-facebook"></i> Login with Facebook</h5>
									</a>  <?php } ?>                                  
                                </form>
                            </div>
                            <div class="tab-pane active in" id="login_form">
                                <form id="login-frm" method="POST" action="" role="form" novalidate="">
									<div  id="login-form-warning" class="alert alert-warning alert-dismissible fade show hidecls" role="alert">
									<span class="alert-icon"><i class="ni ni-like-2"></i></span>
									<span class="alert-text">Invaild Email and Password .Please try again</span>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
									</div>
                                    <input class="mb-2" type="email" name="login_email" placeholder="Email" required="true" id="login_email">
                                    <input class="mb-2" type="password" name="login_password" id="login_password" placeholder="Password" required="true">
                                    <div class="float-right">
                                        <p><a href="#">Forget Your Password?</a></p>
                                    </div>
                                   
									 <input  type="submit" class="login_btn main-btn1 w-100 mt-3" value="Login" name="login-submit" >
                                </form>                
                            </div>
                            <div class="tab-pane fade" id="register_form">
                               <form id="register-frm" method="POST" action="" role="form" novalidate="">
							   	<div  id="reg-form-success" class="alert alert-success alert-dismissible fade show hidecls" role="alert">
							<span class="alert-icon"><i class="ni ni-like-2"></i></span>
							<span class="alert-text">Thank You for Registration. Please verify using the link sent to your email and login with your Credentails!</span>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							</div>
							<div  id="reg-form-warning" class="alert alert-warning alert-dismissible fade show hidecls" role="alert">
							<span class="alert-icon"><i class="ni ni-like-2"></i></span>
							<span class="alert-text">This Email is alreadly exist in database .Please try other email id</span>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							</div>
                                    <input class="mb-2" type="email" name="reg_email" placeholder="Email" required="true" id="reg_email">
                                    <input class="mb-2" type="password" id="reg_password" name="reg_password" placeholder="Password" required="true">
                                    <!--<input class="mb-2" type="password" name="reg_cpassword"  id="reg_cpassword" placeholder="Confirm Password" required="true">-->
									<span id="reg-error-pass" class="hidecls">password and confirm password does not match</span>
                                    <select class="select_menu mb-2" id="reg_profile" required="true" name="reg_profile">
                                        <option value="0" selected>Choose Your Profile</option>
                                        <option value="1">As a Investor</option>
                                        <option value="2">As a Buyer</option>
                                        <option value="3" >As a Seller</option>
										<option value="4">As a Advisor</option>
                                    </select>
									<?php if(empty($this->session->userdata('uid'))){
									$country = $this->login_model->get_countries();?>
                                    <select class="select_menu" id="reg_country" required="true" name="reg_country">
                                        <option value="0" selected>Country</option>
										<?php foreach($country as $country) { ?>
                                         <option value="<?php echo $country['id']?>"><?php echo $country['name']?></option>
									<?php } }
									?>
                                    </select>
                                    <input  type="submit" class="register_btn main-btn1 w-100 mt-3" value="Verify Email" name="reg-submit" >
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
      </div>
    </div>
  </div>
</div>
<?php 
function number_format_short( $n, $precision = 1 ) {
	if ($n < 900) {
		// 0 - 900
		$n_format = number_format($n, $precision);
		$suffix = '';
	} else if ($n < 900000) {
		// 0.9k-850k
		$n_format = number_format($n / 1000, $precision);
		$suffix = 'K';
	} else if ($n < 900000000) {
		// 0.9m-850m
		$n_format = number_format($n / 1000000, $precision);
		$suffix = 'M';
	} else if ($n < 900000000000) {
		// 0.9b-850b
		$n_format = number_format($n / 1000000000, $precision);
		$suffix = 'B';
	} else {
		// 0.9t+
		$n_format = number_format($n / 1000000000000, $precision);
		$suffix = 'T';
	}

  // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
  // Intentionally does not affect partials, eg "1.50" -> "1.50"
	if ( $precision > 0 ) {
		$dotzero = '.' . str_repeat( '0', $precision );
		$n_format = str_replace( $dotzero, '', $n_format );
	}

	return $n_format . $suffix;
}

?>
