<?php 
//echo"<pre>";
//print_r($userprofile);
//die();
//print_r($users);
//die();
?>

<section class="investor_single_page">    
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="main_box bg_white my-4 w-100">
                        <div class="p_20">
                            <div class="row">
                            
                                <div class="col-md-12">
                                    <h5 class="color_blue pb-1">
									<?php if(!empty($userprofile['field_4'])) {  $businessindustry= unserialize($userprofile['field_4']);
							  echo implode(',',$businessindustry);
							}?> for  <?php 
							if(!empty($userprofile['interested_in'])) { 
							if($userprofile['interested_in']==1) { echo "Full sale of business";} 
							if($userprofile['interested_in']==2) { echo "Partial stake sale of business/investment";} 
							if($userprofile['interested_in']==3) { echo "Loan for business";}
							}?> in <?php if(!empty($userprofile['field_5'])) { echo $userprofile['field_5']; }?></h5>
                                    <p><?php if(!empty($userprofile['field_8'])) {echo  $userprofile['field_8'];}?></p>
                                    <ul class="latest_share d-flex m-0 pt-1">
									<?php 
											if(!empty($users['amount'])){ ?>
												<li><a href="mailto:<?php if(!empty($userprofile['official_email'])) { echo $userprofile['official_email'];}?>"><i class="fa fa-envelope-o pr-2" aria-hidden="true"></i>Official Email</a></li>
												<li><a href="tel:<?php if(!empty($userprofile['user_phone'])) { echo $userprofile['user_phone'];}?>"><i class="fa fa-phone pr-2" aria-hidden="true"></i>Phone</a></li>
											<?php } else {?>
												  <li><i class="fa fa-envelope-o pr-2" aria-hidden="true"></i>Official Email</li>&nbsp;&nbsp;
											<li><i class="fa fa-phone pr-2" aria-hidden="true"></i>Phone</li>
											
											<?php } ?>
                                        
                                    </ul>
                                </div>
                            </div>                            
                        </div>
                        <hr class="latest_line m-0">
                        <div class="activity_body d-flex flex-column p_20">
                            <div class="customer-logos slider py-3" id="images_modal">
								<?php 
								$counter_1 =1;
									$galleryslide = $this->dashboard_model->Gallery($userprofile['id']);
									foreach($galleryslide as $galleryslide){?>
                                     <div class="slide">
                                        <img src="<?php echo base_url();?>/assets/upload/gallery/thumbnail/<?php echo $galleryslide['image']; ?>" style="width:100%" onclick="openModal();currentSlide(<?php echo $counter_1; ?>)" class="hover-shadow cursor">
                                    </div><?php 
									$counter_1 = $counter_1 + 1;
									} ?>
							
							
							
                                <?php /*<div class="slide">
                                    <img src="http://oxeenit.com/mvp/assets/img/banner1.png" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                                </div> 
                                <div class="slide">
                                    <img src="http://oxeenit.com/mvp/assets/img/banner.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                                </div>
                                <div class="slide">
                                    <img src="http://oxeenit.com/mvp/assets/img/about-banner.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                                </div>
                                <div class="slide">
                                    <img src="http://oxeenit.com/mvp/assets/img/banner1.png" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                                </div>*/?>
                			</div>
                            <div id="business_images_modal" class="modal">
                              <span class="close cursor" onclick="closeModal()">&times;</span>
                              <div class="modal-content">
                                <?php 
									$galleryslidepopup = $this->dashboard_model->Gallery($userprofile['id']);
									$galleryslidepopupcount = $this->dashboard_model->Gallery($userprofile['id']);
									$counter =1;
									foreach($galleryslidepopup as $key=>$galleryslidepopup){?>
                                     <div class="mySlides">
									 <div class="numbertext"><?php echo $counter;?>/ <?php 
									 echo count($galleryslidepopupcount);?></div>
                                        <img src="<?php echo base_url();?>/assets/upload/gallery/thumbnail/<?php echo $galleryslidepopup['image']; ?>" style="width:100%">
                                    </div><?php 
									$counter = $counter + 1;
									} ?>
							
							
							
                                <?php /*<div class="mySlides">
                                  <div class="numbertext">1 / 4</div>
                                  <img src="http://oxeenit.com/mvp/assets/img/banner1.png" style="width:100%">
                                </div>
                            
                                <div class="mySlides">
                                  <div class="numbertext">2 / 4</div>
                                  <img src="http://oxeenit.com/mvp/assets/img/banner.jpg" style="width:100%">
                                </div>
                            
                                <div class="mySlides">
                                  <div class="numbertext">3 / 4</div>
                                  <img src="http://oxeenit.com/mvp/assets/img/about-banner.jpg" style="width:100%">
                                </div>
                                
                                <div class="mySlides">
                                  <div class="numbertext">4 / 4</div>
                                  <img src="http://oxeenit.com/mvp/assets/img/banner1.png" style="width:100%">
                                </div>*/?>
                                
                                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                
                                <div class="customer-logos slider" id="images_modal_footer">
                                    <?php 
									$counter_2 =1;
									$thumbgalleryslider = $this->dashboard_model->Gallery($userprofile['id']);
									foreach($thumbgalleryslider as $thumbgalleryslider){?>
                                     <div class="slide">
                                        <img class="demo cursor" src="<?php echo base_url();?>/assets/upload/gallery/thumbnail/<?php echo $thumbgalleryslider['image']; ?>" style="width:100%" onclick="currentSlide(<?php echo$counter_2; ?>)" >
                                    </div><?php 
									$counter_2 = $counter_2 + 1;
									} ?>
									
									
									
									<?php /*<div class="slide">
                                        <img class="demo cursor" src="http://oxeenit.com/mvp/assets/img/banner1.png" style="width:100%" onclick="currentSlide(1)"  alt="">
                                    </div> 
                                    <div class="slide">
                                        <img class="demo cursor" src="http://oxeenit.com/mvp/assets/img/banner.jpg" style="width:100%" onclick="currentSlide(2)"  alt="">
                                    </div>
                                    <div class="slide">
                                        <img class="demo cursor" src="http://oxeenit.com/mvp/assets/img/about-banner.jpg" style="width:100%" onclick="currentSlide(3)"  alt="">
                                    </div>
                                    <div class="slide">
                                        <img class="demo cursor" src="http://oxeenit.com/mvp/assets/img/banner1.png" style="width:100%" onclick="currentSlide(4)"  alt="">
                                    </div>*/ ?>
									
                    			</div>
                              </div>
                            </div>
                            <div class="row mr-0">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p><?php if(!empty($userprofile['interested_in'])) {
												if($userprofile['interested_in']==1) { 
												  echo "Full sale of business";
												}
												if($userprofile['interested_in']==2) { 
												  echo "Partial stake sale of business/investment";
												}
												if($userprofile['interested_in']==3) { 
												  echo "Loan for business";
												}
												}?></p>
                                        </div>
                                        <div class="col-md-12">
                                            <p><b>Asking Price: </b> SGD | <?php if(!empty($userprofile['tentative_selling'])) {echo  $userprofile['tentative_selling'];}?></p>
                                        </div>
                                        <div class="col-md-12 pt-2">
                                            <p><b>Reason: </b><?php if(!empty($userprofile['reason_for_sale'])) {echo  $userprofile['reason_for_sale'];}?></p>
                                        </div>
                                        <div class="col-md-12 pt-2">
                                            <h6>Name</h6>
                                        </div>
                                        <div class="col-md-12 pt-1">
                                            <p>
											<?php if(!empty($this->session->userdata('uid'))){ 
											if(!empty($users['amount'])){
											?>
											<?php if(!empty($userprofile['first_name'])) {echo  $userprofile['first_name'];}
										
											}else{?><i class="fa fa-lock pr-2" aria-hidden="true"></i><?php echo"Available after connect"; } }else { ?><i class="fa fa-lock pr-2" aria-hidden="true"></i><?php echo"Available after connect"; } ?>
											</p>
                                        </div>
										
										<div class="col-md-12 pt-2">
                                            <h6>Phone</h6>
                                        </div>
                                        <div class="col-md-12 pt-1">
                                            <p>
											<?php if(!empty($this->session->userdata('uid'))){ 
											if(!empty($users['amount'])){
											?>
											 <?php if(!empty($userprofile['user_phone'])) {echo  $userprofile['user_phone'];}
										
											}else{?><i class="fa fa-lock pr-2" aria-hidden="true"></i><?php echo"Available after connect"; } }else { ?><i class="fa fa-lock pr-2" aria-hidden="true"></i><?php echo"Available after connect"; } ?>
											</p>
                                        </div>
										
										<div class="col-md-12 pt-2">
                                            <h6>Email</h6>
                                        </div>
                                        <div class="col-md-12 pt-1">
                                            <p>
											<?php if(!empty($this->session->userdata('uid'))){ 
											if(!empty($users['amount'])){
											?>
											  <?php if(!empty($userprofile['email'])) {echo  $userprofile['email'];}
										
											}else{?><i class="fa fa-lock pr-2" aria-hidden="true"></i><?php echo"Available after connect"; } }else { ?><i class="fa fa-lock pr-2" aria-hidden="true"></i><?php echo"Available after connect"; } ?>
											</p>
                                        </div>
                                        <div class="col-md-12 pt-2">
                                            <h6>Business Name</h6>
                                        </div>
                                        <div class="col-md-12 py-1">
                                            <p>
											<?php if(!empty($this->session->userdata('uid'))){ 
											 if(!empty($users['amount'])){?>
											<?php if(!empty($userprofile['company_name'])) { echo  $userprofile['company_name'];} }else{?><i class="fa fa-lock pr-2" aria-hidden="true"></i><?php echo"Available after connect";} } else  {?><i class="fa fa-lock pr-2" aria-hidden="true"></i><?php echo"Available after connect";}?>
											</p>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered all_formats col-md-6">
                                    <tbody>
                                        <tr>
                                            <th>You are a(n)</th>
                                            <td><?php if(!empty($userprofile['field_1'])) {
												if($userprofile['field_1']==1) { 
												  echo"Business Owner / Director";
												}
												if($userprofile['field_1']==2) { 
												  echo"Management Member";
												}
												if($userprofile['field_1']==3) { 
												  echo"Advisor / Business Broker";
												}
												}?></td>
                                        </tr>
                                        <tr>
                                            <th>Business Established</th>
                                            <td><?php if(!empty($userprofile['field_3'])) {echo  $userprofile['field_3'];}?></td>
                                        </tr>
                                        <tr>
                                            <th>Business Industry</th>
                                            <td>
											<?php if(!empty($userprofile['field_4'])) {  $businessindustry= unserialize($userprofile['field_4']);
												echo implode(',',$businessindustry);
												}?>
											</td>
                                        </tr>
                                        <tr>
                                            <th>Business located</th>
                                            <td><?php if(!empty($userprofile['field_5'])) {echo  $userprofile['field_5'];}?></td>
                                        </tr>
                                        <tr>
                                            <th>Employees</th>
                                            <td><?php if(!empty($userprofile['field_6'])) {echo  $userprofile['field_6'];}?></td>
                                        </tr>
                                        <tr>
                                            <th>Legal Entity</th>
                                            <td>
											<?php if(!empty($userprofile['field_7'])) {if($userprofile['field_7']==1) { echo "Sole Proprietorship/Sole Trader";}}?>
											<?php if(!empty($userprofile['field_7'])) {if($userprofile['field_7']==2) { echo "General Partnership";}}?>
											<?php if(!empty($userprofile['field_7'])) {if($userprofile['field_7']==3) { echo "Limited Liability Partnership (LLP)";}}?>
											<?php if(!empty($userprofile['field_7'])) {if($userprofile['field_7']==4) { echo "Limited Liability Company (LLC)";}}?>
											<?php if(!empty($userprofile['field_7'])) {if($userprofile['field_7']==5) { echo "Private Limited Company";}}?>
											</td>
                                        </tr>
										 <tr>
                                            <th>Monthly Sales</th>
                                            <td>SGD | <?php if(!empty($userprofile['field_12'])) {
											echo number_format_short( $userprofile['field_12'], 1 );
											}?></td>
                                        </tr>
										 <tr>
                                            <th>Yearly Sales</th>
                                            <td>SGD | <?php if(!empty($userprofile['field_13'])) {
											echo number_format_short( $userprofile['field_13'], 1 );
											}?></td>
                                        </tr>
										<tr>
                                            <th>Assets Value</th>
                                            <td>SGD | <?php if(!empty($userprofile['field_16'])) {
											echo number_format_short( $userprofile['field_16'], 1 );
											
											}?></td>
                                        </tr>
                                    </tbody>
                                 </table>
                            </div>
							<?php if(!empty($Docimages)){ ?>
							<h6 class="pb-2">Documents</h6>
							<ul class="pb-2 document_ul">
							<?php 
							foreach($Docimages as $Docimages){ ?>
							<li><a download href="<?php echo base_url();?>assets/upload/gallery/<?php echo $Docimages['image'];?>"><i class="fa fa-file-word-o pr-2" aria-hidden="true"></i></a></li>
							<?php }
							?>
							</ul>
							<?php } ?>
                            <h6 class="pb-2 pt-4">Business Overview</h6>
                            <p class="pb-2"><?php if(!empty($userprofile['field_9'])) {echo  $userprofile['field_9'];}?></p>
                            <h6 class="pb-2 pt-4">Products and Services Overview</h6>
                            <p class="pb-2"><?php if(!empty($userprofile['field_10'])) {echo  $userprofile['field_10'];}?></p>
                            <h6 class="pb-2 pt-4">Facility Overview</h6>
                            <p class="pb-2"><?php if(!empty($userprofile['field_11'])) {echo  $userprofile['field_11'];}?></p>
                            <h6 class="pb-2" pt-4="">Assets Overview</h6>
                            <p class="pb-2"><?php if(!empty($userprofile['field_15'])) {echo  $userprofile['field_15'];}?></p>
                            <p class="single_disclaimer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="main_box bg_white my-4 w-100">
                        <h5 class="business_left_top_heading">Send Business Proposal</h5>
                        <div class="activity_body d-flex flex-column p_20">    <p class="py-2 text-center">To engage serious businesses, sending proposals is allowed only on premium plans.</p>
							<?php if(!empty($this->session->userdata('uid'))){
								if($this->session->userdata('uid')==$userprofile['id']){?>
									<button class="user_btn2 mx-auto my-2" data-toggle="modal" data-target="#SendProposalsameuser">Send Proposal </button>
								<?php }
								
								else if($this->session->userdata('role')==$userprofile['role']){?>
										<button class="user_btn2 mx-auto my-2" data-toggle="modal" data-target="#SendProposalsamerole">Send Proposal </button><?php
								}else{ 
									if($notificationscount >0) { ?>
										<button type="button" class="user_btn2 mx-auto my-2" data-toggle="modal" data-target="#SendProposal">Send Proposal</button><?php } else {?>
										<button class="user_btn2 mx-auto my-2 send-proposal" rel="<?php echo $this->uri->segment(2);?>">Send Proposal </button><?php 
										} 
									}
								 } else { ?>
										<button class="user_btn2 mx-auto my-2" data-toggle="modal" data-target="#SendProposalnotlogin">Send Proposal </button><?php 
									} ?>
                        </div> 
                        <ul class="single_user_btn">
                            <li><a href="#"><i class="fa fa-bookmark pr-3" aria-hidden="true"></i>Bookmark</a></li>
                            <li><a href="#"><i class="fa fa-share-square-o pr-3" aria-hidden="true"></i>Share</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
	 <div class="container py-4">
            <div class="customer-logos slider" id="c">
			<?php if(!empty($allsellerProfile)) {
				foreach($allsellerProfile as $allsellerProfile){ ?>
                <div class="slide">
                    <a href="#">
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
                                <p><span>SGD</span> <?php if(!empty($allsellerProfile->field_12)) { echo number_format_short($allsellerProfile->field_12,1); }?></p>
                            </div>
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">
                                <p>Yearly Sales<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>
                                <p><?php if(!empty($allsellerProfile->field_13)) { echo number_format_short($allsellerProfile->field_13,1); }?></p>
                            </div>
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">
                                <p>Selling Price<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>
                                <p><span>SGD</span> <?php if(!empty($allsellerProfile->tentative_selling)) { echo number_format_short($allsellerProfile->tentative_selling,1); }?></p>
                            </div>
                            <a href="<?php echo base_url();?>view-profile/<?php echo  base64_encode($allsellerProfile->user_id);?>"><button class="user_btn ml-auto mt-3">Contact Business</button></a>
                        </div>
                    </a>
                </div>        
			<?php } } ?>    
			
			</div>
        </div>
		
		
<div id="SendProposal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Send Proposal</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p class="error">You already had sent proposal to this Profile</p>
      </div>
    </div>
	  </div>
</div>

<div id="SendProposalnotlogin" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Send Proposal</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p class="error">Please Login to send the proposal</p>
      </div>
    </div>
	  </div>
</div>

<div id="SendProposalsamerole" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Send Proposal</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p class="error">A Seller Profile can send proposal to only Buyer/Investor </p>
      </div>
    </div>
	  </div>
</div>
<div id="SendProposalsameuser" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Send Proposal</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p class="error">You can not send proposal.beacuse this is your profile </p>
      </div>
    </div>
	  </div>
</div>
