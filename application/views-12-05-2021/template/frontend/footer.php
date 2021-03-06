  <?php $furl= explode('/',$_SERVER['REQUEST_URI']); ?>
  <footer class="footer">
        <div class="upper_footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4>Company</h4>
                        <ul class="footer_list">
                            <li><a href="<?php echo base_url();?>">Home</a></li>
                            <li><a href="<?php echo base_url();?>about-us">About Us</a></li>
                            <li><a href="<?php echo base_url();?>about-us">How To?</a></li>
                            <li><a href="<?php echo base_url();?>about-us">Blog</a></li>
                            <li><a href="<?php echo base_url();?>contact-us">Contact</a></li>
                        </ul>
                    </div>                           
                    <div class="col-md-3">
                        <h4>Get Started</h4>
                        <ul class="footer_list">
                            <li><a href="#">Sell your Business</a></li>
                            <li><a href="#">Buy a Business</a></li>
                            <li><a href="#">Invest in a Business</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <h4>Follow Us </h4>
                        <ul class="footer_list follow_us_list d-flex justify-content-between mt-md-2">
                            <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>                                
                    </div>
                    <div class="col-md-4">
                        <h4 class="pb-4">Let's have a chat !</h4>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Enter your E-mail" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="button" id="button-addon2"> <b>Submit</b></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lower_footer">
            <p class="m-0 text-center">Copyright ?? 2021 xyz Online Services Private Limited. All Rights Reserved.</p>
        </div>
    </footer>


    <!-- Optional JavaScript -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
	 <!--<script src="<?php echo base_url();?>assets/front-end/vendor/owl.carousel/owl.carousel.min.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>assets/front-end/js/slick.js" type="text/javascript" charset="utf-8"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/loading/loading.css">
	<script src="<?php echo base_url(); ?>assets/plugins/loading/loading.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.js"></script>
	<script src="<?php echo base_url();?>assets/front-end/js/custom.js" type="text/javascript" charset="utf-8"></script> 
	 <?php if(in_array('payment-method',$furl)) { ?>
		<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
		<script src="<?php echo base_url(); ?>assets/front-end/js/stripe/stripe-payment.js"></script>
		<?php } ?>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="<?php echo base_url();?>assets/front-end/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/front-end/js/carausol_slider.js"></script>
		
  </body>
</html>
