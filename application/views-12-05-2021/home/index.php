<div class="index_page">
<div class="container">
 <section class="banner_section">
        <div class="banner">
            <div class="banner_img_bg  d-flex flex-column justify-content-center align-items-center">
                <div class="banner_body d-flex flex-column align-items-center text-center">
                    <h1 class="banner_heading">Digital platform empowers business owner to connect with Potential Buyers, Sellers & Investors.</h1>
                </div>
            </div>
        </div>
		<?php if(empty($this->session->userdata('uid'))){ ?>
        <div class="banner_create_profile">
            <div class="container-fluid">
                <div class="row justify-content-between p-0 m-0">
                    <h2 class="text-center text-white w-100 pb-3">Get Started</h2>                
                    <div class="col-md-4 text-center pb-4 pb-lg-0">
                        <a href="#" data-toggle="modal" data-target="#basicExampleModal"><button class="main_btn2 bg_btn_color1 mt-3">Create Buyer Profile</button></a>
                    </div>
                    <div class="col-md-4 text-center pb-4 pb-lg-0">
                        <a href="#" data-toggle="modal" data-target="#basicExampleModal"><button class="main_btn2 bg_btn_color2 mt-3">Create Seller Profile</button></a>
                    </div>
                    <div class="col-md-4 text-center pb-4 pb-lg-0">
                        <a href="#" data-toggle="modal" data-target="#basicExampleModal"><button class="main_btn2 bg_btn_color3 mt-3">Create Investor Profile</button></a>
                    </div> 
                </div>
            </div>
        </div><?php } ?>
    </section>


    <div class="prifle_section py_50">
        <div class="container-fluid">
            <div class="row pb-3">
                <div class="col-md-3">
                    <div class="profile_box">
                        <i class="fa fa-check-square-o pr-3 pb-2" aria-hidden="true"></i>
                        <h6 class="pb-3 pt-1">Pre-approved</h6>
                        <p>Every Business, Investors & Buyers profile is pre-screened by our Analytics.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="profile_box">
                        <i class="fa fa-lock pr-3 pb-2" aria-hidden="true"></i>
                        <h6 class="pb-3 pt-1">Confidential</h6>
                        <p>Your privacy is of utmost importance to us. Selectively disclose identity to interested and genuine parties.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="profile_box">
                        <i class="fa fa-bar-chart pr-3 pb-2" aria-hidden="true"></i>
                        <h6 class="pb-3 pt-1">Fair Valuation</h6>
                        <p>Compare and benchmark your business with 100s of private companies in your location from the same industry.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="profile_box">
                        <i class="fa fa-globe pr-3 pb-2" aria-hidden="true"></i>
                        <h6 class="pb-3 pt-1">Global Network</h6>
                        <p>Connect with businesses , investors & Buyers across the Globe.</p>
                    </div>
                </div>
            </div>
            <!-- <hr class="main_line_banner"> -->            
        </div>
    </div>
<?php /*
		<section class="businesses_section d-flex flex-column">
			<div class = "row">
				<div class = "col-4">
				<h1 class="text-center w-100 pb-3 mt-5">Latest Businesses for Sale</h1>
				<h6 class="text-center mx-auto pb-5">Explore pre-screened businesses for sale from over 100+ countries and across 900+ different industries. You can find businesses looking for full sale, raising capital through an investment or seeking business loan. Register as an Investor to buy a business or invest in them.</h6>
				</div>
		<div class = "col-8 carousel_se_02">
			       <div class="customer-logos slider" id="c">
			<?php if(!empty($allsellerProfile)) {
				foreach($allsellerProfile as $allsellerProfile){ ?>
                <div class="slide">
                    <a href="<?php echo base_url();?>view-profile/<?php echo  base64_encode($allsellerProfile->user_id);?>">
                        <div class="c_box d-flex flex-column w-100">
                            <div class="pak_tag2">
                                <h5 class="m-0"><?php if(!empty($allsellerProfile->user_plan)) { if($allsellerProfile->user_plan==1) { echo "Basic";} 
								if($allsellerProfile->user_plan==2) { echo "Professional";}
								if($allsellerProfile->user_plan==3) { echo "Premium";}
								}?> </h5>
                            </div>
                            <p class="c_box_heading pb-2"><?php if(!empty($allsellerProfile->field_4)) {  $businessindustry= unserialize($allsellerProfile->field_4);
							  echo implode(',',$businessindustry);
							}?> for <?php 
							if(!empty($allsellerProfile->interested_in)) { 
							if($allsellerProfile->interested_in==1) { echo "Full sale of business";} 
							if($allsellerProfile->interested_in==2) { echo "Partial stake sale of business/investment";} 
							if($allsellerProfile->interested_in==3) { echo "Loan for business";}
							}?> in <?php if(!empty($allsellerProfile->field_5)) { echo $allsellerProfile->field_5; }?></p>
                            <p class="discription"><?php if(!empty($allsellerProfile->field_8)) { echo $allsellerProfile->field_8; }?></p>
                            <ul class="latest_share d-flex py-3 m-0">
                                <li><a href="#"><i class="fa fa-map-marker pr-2" aria-hidden="true"></i><?php if(!empty($allsellerProfile->field_5)) { echo $allsellerProfile->field_5; }?></a></li>
                            </ul>
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">
                                <p>Monthly sales<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>
                                <p><span>SGD</span> <?php if(!empty($allsellerProfile->field_12)) { echo number_format_short( $allsellerProfile->field_12, 1 );
								}?></p>
                            </div>
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">
                                <p>Yearly Sales<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>
                                <p><span>SGD</span> <?php if(!empty($allsellerProfile->field_13)) { echo number_format_short( $allsellerProfile->field_13, 1 );
								}?></p>
                            </div>
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">
                                <p>Selling Price<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>
                                <p><span>SGD</span> <?php if(!empty($allsellerProfile->tentative_selling)) { 
									echo number_format_short( $allsellerProfile->tentative_selling, 1 );
								 }?></p>
                            </div>
                            <a href="<?php echo base_url();?>view-profile/<?php echo  base64_encode($allsellerProfile->user_id);?>"><button class="user_btn ml-auto mt-3">Contact Business</button></a>
                        </div>
                    </a>
                </div>        
			<?php } } ?>   
			
			</div>
     <button class="main-btn1 mx-auto mt-4"><a href="<?php echo base_url();?>sellers">View All Businesses</a></button>
		</div>
	</section>
 */ ?>
 
 
 	<section class="businesses_section d-flex flex-column">
			<div class = "row">
				<div class = "col-4">
				<h1 class="text-center w-100 pb-3 mt-5">Latest Businesses for Sale</h1>
				<h6 class="text-center mx-auto pb-5">Explore pre-screened businesses for sale from over 100+ countries and across 900+ different industries. You can find businesses looking for full sale, raising capital through an investment or seeking business loan. Register as an Investor to buy a business or invest in them.</h6>
				</div>
		<div class = "col-8 carousel_se_02">
			<div class="owl-carousel carousel_se_02_carousel owl-theme">
               <?php if(!empty($allsellerProfile)) {
				foreach($allsellerProfile as $allsellerProfile){ ?>
                <div class="item">
					<div class="slide">
                    <a href="<?php echo base_url();?>view-profile/<?php echo  base64_encode($allsellerProfile->user_id);?>">
                        <div class="c_box d-flex flex-column w-100">
                            <div class="pak_tag2">
                                <h5 class="m-0"><?php if(!empty($allsellerProfile->user_plan)) { if($allsellerProfile->user_plan==1) { echo "Basic";} 
								if($allsellerProfile->user_plan==2) { echo "Professional";}
								if($allsellerProfile->user_plan==3) { echo "Premium";}
								}?> </h5>
                            </div>
                            <p class="c_box_heading pb-2"><?php if(!empty($allsellerProfile->field_4)) {  $businessindustry= unserialize($allsellerProfile->field_4);
							  echo implode(',',$businessindustry);
							}?> for <?php 
							if(!empty($allsellerProfile->interested_in)) { 
							if($allsellerProfile->interested_in==1) { echo "Full sale of business";} 
							if($allsellerProfile->interested_in==2) { echo "Partial stake sale of business/investment";} 
							if($allsellerProfile->interested_in==3) { echo "Loan for business";}
							}?> in <?php if(!empty($allsellerProfile->field_5)) { echo $allsellerProfile->field_5; }?></p>
                            <p class="discription"><?php if(!empty($allsellerProfile->field_8)) { echo $allsellerProfile->field_8; }?></p>
                            <ul class="latest_share d-flex py-3 m-0">
                                <li><a href="#"><i class="fa fa-map-marker pr-2" aria-hidden="true"></i><?php if(!empty($allsellerProfile->field_5)) { echo $allsellerProfile->field_5; }?></a></li>
                            </ul>
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">
                                <p>Monthly sales<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>
                                <p><span>SGD</span> <?php if(!empty($allsellerProfile->field_12)) { echo number_format_short( $allsellerProfile->field_12, 1 );
								}?></p>
                            </div>
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">
                                <p>Yearly Sales<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>
                                <p><span>SGD</span> <?php if(!empty($allsellerProfile->field_13)) { echo number_format_short( $allsellerProfile->field_13, 1 );
								}?></p>
                            </div>
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">
                                <p>Selling Price<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>
                                <p><span>SGD</span> <?php if(!empty($allsellerProfile->tentative_selling)) { 
									echo number_format_short( $allsellerProfile->tentative_selling, 1 );
								 }?></p>
                            </div>
                            <a href="<?php echo base_url();?>view-profile/<?php echo  base64_encode($allsellerProfile->user_id);?>"><button class="user_btn ml-auto mt-3">Contact Business</button></a>
                        </div>
                    </a>
                </div> 
				</div>
				<?php 
				}
				} ?>
               
			</div>
				<button class="main-btn1 mx-auto mt-4"><a href="<?php echo base_url();?>sellers">View All Businesses</a></button>
		</div>
	</section>
	
	
	<section class="investors_section py_100 d-flex flex-column bg_white">
        <div class = "row">
			<div class = "col-8">
				<div class="container-fluid">
					<div class="owl-carousel carousel_se_01_carousel owl-theme">
					<?php if(!empty($allbuyerProfile)) {
				     foreach($allbuyerProfile as $allbuyerProfile){ ?>
						<div class = "item">
						<div class="slide">
                    <a href="<?php echo base_url();?>view-buyer/<?php echo  base64_encode($allbuyerProfile->user_id);?>">
                        <div class="c_box d-flex flex-column w-100">
                            <div class="pak_tag2">
                                <h5 class="m-0"><?php if(!empty($allbuyerProfile->user_plan)) { if($allbuyerProfile->user_plan==1) { echo "Basic";} 
								if($allbuyerProfile->user_plan==2) { echo "Professional";}
								if($allbuyerProfile->user_plan==3) { echo "Premium";}
								}?> </h5>
                            </div>
                            <p class="c_box_heading pb-2"><?php if(!empty($allbuyerProfile->field_7)) { echo $allbuyerProfile->field_7; }?> for 
								<?php if(!empty($allbuyerProfile->field_1)) {
								if($allbuyerProfile->field_1=='1'){echo"Individual Investor / Buyer";}
								if($allbuyerProfile->field_1=='2'){echo"Corporate Investor / Buyer";}
								if($allbuyerProfile->field_1=='3'){echo"Bank";}
								if($allbuyerProfile->field_1=='4'){echo"NBFC";}
								if($allbuyerProfile->field_1=='5'){echo"Credit Union";}
								if($allbuyerProfile->field_1=='6'){echo"Accounting Firm";}
								if($allbuyerProfile->field_1=='7'){echo"Business Broker";}
								if($allbuyerProfile->field_1=='8'){echo"Investment Bank";}
								if($allbuyerProfile->field_1=='9'){echo"Law Firm";}
								if($allbuyerProfile->field_1=='10'){echo"M&amp;A Advisor";}
								if($allbuyerProfile->field_1=='11'){echo"Merchant Bank";}
								if($allbuyerProfile->field_1=='12'){echo"Commercial Real Estate Broker";}
								if($allbuyerProfile->field_1=='13'){echo"Venture Capital Firm";}
								if($allbuyerProfile->field_1=='14'){echo"Private Equity Firm";}
								if($allbuyerProfile->field_1=='15'){echo"Family Office";}
								if($allbuyerProfile->field_1=='16'){echo"Hedge Fund";}
								if($allbuyerProfile->field_1=='17'){echo"NBFC";}
								
								
								}?>
								in
							<?php if(!empty($allbuyerProfile->field_5)) { echo $allbuyerProfile->field_5; }?>  
							
							</p>
                            <p class="discription"><?php if(!empty($allbuyerProfile->field_6)) { echo $allbuyerProfile->field_6; }?></p>
                            <ul class="latest_share d-flex py-3 m-0">
                                <li><a href="#"><i class="fa fa-map-marker pr-2" aria-hidden="true"></i><?php if(!empty($allbuyerProfile->field_5)) { echo $allbuyerProfile->field_5; }?></a></li>
                            </ul>
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">
                                <p>Inv. Range<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>
                                <p class="text-line1w"><span>SGD </span><?php if(!empty($allbuyerProfile->field_4)) {  
								echo number_format_short( $allbuyerProfile->field_4, 1 );
								
								}?> To <?php if(!empty($allbuyerProfile->investmentto)) { 
									echo number_format_short( $allbuyerProfile->investmentto, 1 );
								}?></p>
                            </div>
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">
                                <p>Industries Pref<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>
                                <p class="text-line1w"><?php if(!empty($allbuyerProfile->field_2)) {  $businessindustry= unserialize($allbuyerProfile->field_2);
							  echo implode(',',$businessindustry);
							}?> </p>
                            </div>
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">
                                <p>locations Pref<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>
                                <p class="text-line1w"><?php if(!empty($allbuyerProfile->field_3)) { echo $allbuyerProfile->field_3; }?></p>
                            </div>
                            <a href="<?php echo base_url();?>view-buyer/<?php echo  base64_encode($allbuyerProfile->user_id);?>"><button class="user_btn ml-auto mt-3">Contact Business</button></a>
                        </div>
                    </a>
                </div>        
			
							</div>
							<?php } } ?> 
						</div>
				</div>	
			</div>
			<div class = "col-4">
				<h1 class="text-center w-100 pb-3">Investors & Potential Buyers</h1>
				<h6 class="text-center w-60 mx-auto pb-5">Explore pre-screened businesses for sale from over 100+ countries and across 900+ different industries. 
				You can find businesses looking for full sale, raising capital through an investment or seeking business loan. Register as an Investor to buy a business or invest in them.</h6>
			</div>
		</div>
        <button class="main-btn1 mx-auto mt-4"><a href="<?php echo base_url();?>buyers">View All Investor</a></button>
    </section>

	<section class="businesses_section pb-100 d-flex flex-column">
			<div class = "row">
				<div class = "col-4">
				<h1 class="text-center w-100 pb-3 mt-5">Financial Advisors</h1>
				<h6 class="text-center mx-auto pb-5">Join our list of top notch advisors who are experts in their respective domains and locations. Advisors include Business Brokers, M&A advisors, Investment Banks and Merchant Banks. These advisors are ready to work with a wide spectrum of businesses irrespective of size, caliber and growth stage.</h6>
				</div>
				<div class = "col-8">
					<div class="owl-carousel carousel_se_04_carousel owl-theme">
						<!---1--->
						<div class = "item">
							<div class="slide">
								<a href="business-single-page.html">
									<div class="c_box  w-100">
										<div class="pak_tag2">
											<h5 class="m-0">Professional</h5>
										</div>
										<p class="c_box_heading pb-2">Newly Small Cosmetics Business for Sale in Singapore.</p>
										<p class="discription">For Sale: Exclusive distributorship of a well-known Swiss brand of cosmetic products, with full inventory. Cosmetic products: cleansers, toners, masks, skincare creams, lotions, and much more...</p>
										<ul class="latest_share d-flex py-3 m-0">
											<li><a href="#"><i class="fa fa-map-marker pr-2" aria-hidden="true"></i>Singapore</a></li>
										</ul>
										<div class="d-flex justify-content-between bg_color p-2 mb_2">
											<p>Monthly Sales</p>
											<p><span>SGD</span> 1.4 M</p>
											</div>
											<div class="d-flex justify-content-between bg_color p-2 mb_2">
												<p>Yearly Sales</p>
												<p><span>SGD</span> 12 M</p>
											</div>
											<div class="d-flex justify-content-between bg_color p-2 mb_2">
												<p>Business for Sale</p>
												<p><span>SGD</span> 350 M</p>
											</div>
										<a href="business-single-page.html"><button class="user_btn ml-auto mt-3">Contact Business</button></a>
									</div>
								</a>
							</div>
						</div>
						<!---2--->
						<div class = "item">
							<div class="slide">
								<a href="business-single-page.html">
									<div class="c_box  w-100">
										<div class="pak_tag2">
											<h5 class="m-0">Professional</h5>
										</div>
										<p class="c_box_heading pb-2">Newly Small Cosmetics Business for Sale in Singapore.</p>
										<p class="discription">For Sale: Exclusive distributorship of a well-known Swiss brand of cosmetic products, with full inventory. Cosmetic products: cleansers, toners, masks, skincare creams, lotions, and much more...</p>
										<ul class="latest_share d-flex py-3 m-0">
											<li><a href="#"><i class="fa fa-map-marker pr-2" aria-hidden="true"></i>Singapore</a></li>
										</ul>
										<div class="d-flex justify-content-between bg_color p-2 mb_2">
											<p>Monthly Sales</p>
											<p><span>SGD</span> 1.4 M</p>
											</div>
											<div class="d-flex justify-content-between bg_color p-2 mb_2">
												<p>Yearly Sales</p>
												<p><span>SGD</span> 12 M</p>
											</div>
											<div class="d-flex justify-content-between bg_color p-2 mb_2">
												<p>Business for Sale</p>
												<p><span>SGD</span> 350 M</p>
											</div>
										<a href="business-single-page.html"><button class="user_btn ml-auto mt-3">Contact Business</button></a>
									</div>
								</a>
							</div>
						</div>
						<!---3--->
						<div class = "item">
							<div class="slide">
								<a href="business-single-page.html">
									<div class="c_box  w-100">
										<div class="pak_tag2">
											<h5 class="m-0">Professional</h5>
										</div>
										<p class="c_box_heading pb-2">Newly Small Cosmetics Business for Sale in Singapore.</p>
										<p class="discription">For Sale: Exclusive distributorship of a well-known Swiss brand of cosmetic products, with full inventory. Cosmetic products: cleansers, toners, masks, skincare creams, lotions, and much more...</p>
										<ul class="latest_share d-flex py-3 m-0">
											<li><a href="#"><i class="fa fa-map-marker pr-2" aria-hidden="true"></i>Singapore</a></li>
										</ul>
										<div class="d-flex justify-content-between bg_color p-2 mb_2">
											<p>Monthly Sales</p>
											<p><span>SGD</span> 1.4 M</p>
											</div>
											<div class="d-flex justify-content-between bg_color p-2 mb_2">
												<p>Yearly Sales</p>
												<p><span>SGD</span> 12 M</p>
											</div>
											<div class="d-flex justify-content-between bg_color p-2 mb_2">
												<p>Business for Sale</p>
												<p><span>SGD</span> 350 M</p>
											</div>
										<a href="business-single-page.html"><button class="user_btn ml-auto mt-3">Contact Business</button></a>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<button class="main-btn1 mx-auto mt-4"><a href="search-result.html">View All Businesses</a></button>
			</div>
	</section>
    
    
     
    <section class="about_section bg_main2 pb-100">
        <div class="">
            <div class="row p-0 m-0">
                <div class="col-md-6 p-0">
                    <img src="assets/img/about-banner2.jpg">
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-center">
                    <h1 class="text-about">About Us ?</h1>
                    <h6 class=" text-head6  py-4">Explore pre-screened businesses for sale from over 100+ countries and across 900+ different industries. You can find businesses looking for full sale, raising capital through an investment or seeking business loan. Register as an Investor to buy a business or invest in them.</h6>
                    <h6 class="text-head6   pb-4">Business owners, Entrepreneurs, CEOs, Investors, Acquirers, Business Buyers, Lenders and Financial Advisors from different parts of the world discover each other and connect almost instantly to pursue financial transactions. Whether it is a small family business or a large established company, We has access to the right network of members to help close successful transactions.</h6>
                    <button class="main-btn1"><a href="<?php echo base_url();?>about-us">View More</a></button>
                </div>
            </div>
        </div>
    </section>

    <section class="industry-guide">
        <div class = "container">
			<div class = "row">
				<div class = "col-6 new6">
					<div class = "industry-content">
						<h3>Industry Watch</h3>
						<p class = "industry-text">Our Industry Watch offers a bird’s eye view of traditional and sunrise sectors which includes Finance, IT,
						Auto, Media, Engineering, Pharma, Food & Beverage, Healthcare, E-commerce, Internet companies and many other industries that 
						are at an inflection point and transforming the global economy. Our infographics are easy to comprehend as we present you with only 
						the most relevant metrics in a clutter free and visually appealing format.</p>
						<a class = "industry-link" href = "#">Explore Industry Watch</a>
					</div>
				</div>
				<div class = "col-6">
					<div class = "industry-image">
						<img src = "assets/img/xindustry-watch-min.png" alt = "industry watch"/>
					</div>
				</div>
			</div>
		</div>
    </section>
	<section class="industry-guide">
        <div class = "container">
			<div class = "row">
				<div class = "col-6">
					<div class = "industry-image">
						<img src = "assets/img/xguide-min.jpg" alt = "industry watch"/>
					</div>
				</div>
				<div class = "col-6">
					<div class = "industry-content">
						<h3>Industry Guide</h3>
						<p class = "industry-text">Our experience in the industry, collaborating and working closely with small business owners & investors across the globe, led us to create  Guide for the benefit of small business sellers and buyers. Consider this your go-to resource when buying and selling a small business.</p>
						<a class = "industry-link" href = "#">Explore Industry Guide</a>
					</div>
				</div>
			</div>
		</div>
    </section>
	<!--------Testimonial--------->
	<section class = "carousel_se_03 section-testimonial">
		<h3 class = "text-center">Client-Testimonial</h3>
		<div class="container-fluid px-0 py-5">
         <div class="container ">
              <div class="row">
               
                <div class="col-md-12 px-0 " style="">

                    <div class="col-md-12 px-0 p-t-30 ">
						<div class="owl-carousel carousel_se_03_carousel owl-theme">
                               <!--1 -->
                               <div class="item">
                                 <div class = "first-testi">
							<P class = "userImg">
							<img class = "testi-img" src = "assets/img/testi-1.png" alt = "image of testimonial"><span class = "userName">Jon</span>
							<p class = "profiles"><img class="img-testUser" src="assets/img/user.png">
							Founder,consultant of Banglore
							</p>
							</p>
							<div class = "green-tag">
							<span class="circle"></span>
							<p>Successfully closed a deal with the 2nd buyer introduced. Time taken to connect: 1 day.</p>
							</div>
							<div class = "testi-content">
							<p>The team at S which worked with us to build the Franchise brochure and ROI model 
							for Y5home was reliable and pleasant to interact with. In fact, working with them helped us 
							better understand and also refine our distributorship model to ensure that our distributors
							would be profitable at the earliest. </p>
							<a href = "#" class = "view-more">view more </a>
							</div>
						</div>
                               </div>

                               <!-- 2-->
                               <div class="item">
                                 <div class = "first-testi">
							<P class = "userImg">
							<img class = "testi-img" src = "assets/img/testi-1.png" alt = "image of testimonial"><span class = "userName">User</span>
							<p class = "profiles"><img class="img-testUser" src="assets/img/user.png">
							Founder,consultant of Banglore
							</p>
							</p>
							<div class = "green-tag">
							<span class="circle"></span>
							<p>Successfully closed a deal with the 2nd buyer introduced. Time taken to connect: 1 day.</p>
							</div>
							<div class = "testi-content">
							<p>The team at S which worked with us to build the Franchise brochure and ROI model 
							for Y5home was reliable and pleasant to interact with. In fact, working with them helped us 
							better understand and also refine our distributorship model to ensure that our distributors
							would be profitable at the earliest. </p>
							<a href = "#" class = "view-more">view more </a>
							</div>
						</div>
                               </div>

                              <!-- 3 -->
                              <div class="item">
                                <div class = "first-testi">
							<P class = "userImg">
							<img class = "testi-img" src = "assets/img/testi-1.png" alt = "image of testimonial"><span class = "userName">User</span>
							<p class = "profiles"><img class="img-testUser" src="assets/img/user.png">
							Founder,consultant of Banglore
							</p>
							</p>
							<div class = "green-tag">
							<span class="circle"></span>
							<p>Successfully closed a deal with the 2nd buyer introduced. Time taken to connect: 1 day.</p>
							</div>
							<div class = "testi-content">
							<p>The team at S which worked with us to build the Franchise brochure and ROI model 
							for Y5home was reliable and pleasant to interact with. In fact, working with them helped us 
							better understand and also refine our distributorship model to ensure that our distributors
							would be profitable at the earliest. </p>
							<a href = "#" class = "view-more">view more </a>
							</div>
						</div>
                                </div>

                                <!-- 4 -->
                              <div class="item">
                                <div class = "first-testi">
									<P class = "userImg">
									<img class = "testi-img" src = "assets/img/testi-1.png" alt = "image of testimonial"><span class = "userName">User</span>
									<p class = "profiles"><img class="img-testUser" src="assets/img/user.png">
									Founder,consultant of Banglore
									</p>
									</p>
									<div class = "green-tag">
									<span class="circle"></span>
									<p>Successfully closed a deal with the 2nd buyer introduced. Time taken to connect: 1 day.</p>
									</div>
									<div class = "testi-content">
									<p>The team at S which worked with us to build the Franchise brochure and ROI model 
									for Y5home was reliable and pleasant to interact with. In fact, working with them helped us 
									better understand and also refine our distributorship model to ensure that our distributors
									would be profitable at the earliest. </p>
									<a href = "#" class = "view-more">view more </a>
									</div>
								</div>
							</div>
						</div>                   
				</div>
			</div>
		</div>
			<div class = "testBtn">
				<button  class = "main-btn1">View Testimonial</button>
			</div>
		</div>
	</section>
	<!--------Testimonial-End--------->
</div>
  
</div>
</div>
