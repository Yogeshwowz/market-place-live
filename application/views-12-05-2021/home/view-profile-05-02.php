<?php 
//echo"<pre>";
//print_r($userprofile);
//die();

?>

<section class="investor_single_page">    
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="main_box bg_white my-4 w-100">
                        <div class="p_20">
                            <h5 class="color_blue"><?php if(!empty($userprofile['field_7'])) { echo $userprofile['field_7']; }?> for 
							
							
							<?php if(!empty($userprofile['field_2'])) {  $businessindustry= unserialize($userprofile['field_2']);
							  echo implode(',',$businessindustry);
							}?>
							
							
								<?php if(!empty($userprofile['field_1'])) {
								if($userprofile['field_1']=='1'){echo"Individual Investor / Buyer";}
								if($userprofile['field_1']=='2'){echo"Corporate Investor / Buyer";}
								if($userprofile['field_1']=='3'){echo"Bank";}
								if($userprofile['field_1']=='4'){echo"NBFC";}
								if($userprofile['field_1']=='5'){echo"Credit Union";}
								if($userprofile['field_1']=='6'){echo"Accounting Firm";}
								if($userprofile['field_1']=='7'){echo"Business Broker";}
								if($userprofile['field_1']=='8'){echo"Investment Bank";}
								if($userprofile['field_1']=='9'){echo"Law Firm";}
								if($userprofile['field_1']=='10'){echo"M&amp;A Advisor";}
								if($userprofile['field_1']=='11'){echo"Merchant Bank";}
								if($userprofile['field_1']=='12'){echo"Commercial Real Estate Broker";}
								if($userprofile['field_1']=='13'){echo"Venture Capital Firm";}
								if($userprofile['field_1']=='14'){echo"Private Equity Firm";}
								if($userprofile['field_1']=='15'){echo"Family Office";}
								if($userprofile['field_1']=='16'){echo"Hedge Fund";}
								if($userprofile['field_1']=='17'){echo"NBFC";}
								
								
								}?>
								in
							<?php if(!empty($userprofile['field_5'])) { echo $userprofile['field_5']; }?> </h5>
                           <ul class="latest_share d-flex m-0 pt-1">
                                        <li><a href="mailto:<?php if(!empty($userprofile['official_email'])) { echo $userprofile['official_email'];}?>"><i class="fa fa-envelope-o pr-2" aria-hidden="true"></i>Official Email</a></li>
                                        <li><a href="tel:<?php if(!empty($userprofile['user_phone'])) { echo $userprofile['user_phone'];}?>"><i class="fa fa-phone pr-2" aria-hidden="true"></i>Phone</a></li>
                                        
                                    </ul>
                        </div>
                        <hr class="latest_line m-0">
                        <div class="activity_body d-flex flex-column p_20">
                            <h6><?php if(!empty($userprofile['field_1'])) {
								if($userprofile['field_1']=='1'){echo"Individual Investor / Buyer";}
								if($userprofile['field_1']=='2'){echo"Corporate Investor / Buyer";}
								if($userprofile['field_1']=='3'){echo"Bank";}
								if($userprofile['field_1']=='4'){echo"NBFC";}
								if($userprofile['field_1']=='5'){echo"Credit Union";}
								if($userprofile['field_1']=='6'){echo"Accounting Firm";}
								if($userprofile['field_1']=='7'){echo"Business Broker";}
								if($userprofile['field_1']=='8'){echo"Investment Bank";}
								if($userprofile['field_1']=='9'){echo"Law Firm";}
								if($userprofile['field_1']=='10'){echo"M&amp;A Advisor";}
								if($userprofile['field_1']=='11'){echo"Merchant Bank";}
								if($userprofile['field_1']=='12'){echo"Commercial Real Estate Broker";}
								if($userprofile['field_1']=='13'){echo"Venture Capital Firm";}
								if($userprofile['field_1']=='14'){echo"Private Equity Firm";}
								if($userprofile['field_1']=='15'){echo"Family Office";}
								if($userprofile['field_1']=='16'){echo"Hedge Fund";}
								if($userprofile['field_1']=='17'){echo"NBFC";}
								
								
								}?> in <?php if(!empty($userprofile['field_5'])) { echo $userprofile['field_5']; }?> <?php if(!empty($userprofile['field_2'])) {  $businessindustry= unserialize($userprofile['field_2']);
							  echo implode(',',$businessindustry);
							}?> <?php if(!empty($userprofile['field_4'])) {echo  $userprofile['field_4'];}?> to <?php if(!empty($userprofile['investmentto'])) {echo  $userprofile['investmentto'];}?></h6>
                            <div class="row py-4">
                                <div class="col-md-4 py-3">
                                    <h6>Name, Phone, Email</h6>
                                </div>
                                <div class="col-md-8 py-3">
                                    <p><i class="fa fa-lock pr-2" aria-hidden="true"></i> <?php if(!empty($userprofile['amount'])){ ?>
											<?php if(!empty($userprofile['first_name'])) {echo  $userprofile['first_name'];}?>, <?php if(!empty($userprofile['user_phone'])) {echo  $userprofile['user_phone'];}?> <?php if(!empty($userprofile['email'])) {echo  $userprofile['email'];}
										
										}else { echo"Available after connect";}?></p>
                                </div>
								<div class="col-md-4 py-3">
                                    <h6>You are interested in</h6>
                                </div>
                                <div class="col-md-8 py-3">
                                    <p><?php if(!empty($userprofile['interested_in'])) { 
									if($userprofile['interested_in']=='1'){echo"Acquiring / Buying a Business";}
									if($userprofile['interested_in']=='2'){echo"Investing in a Business";}
									if($userprofile['interested_in']=='3'){echo"Lending to a Business";}
									}?>
									
									</p>
                                </div>
								<div class="col-md-4 py-3">
                                    <h6>You are a(n)</h6>
                                </div>
                                <div class="col-md-8 py-3">
                                    <p><?php if(!empty($userprofile['field_1'])) {
									if($userprofile['field_1']=='1'){echo"Individual Investor / Buyer";}
									if($userprofile['field_1']=='2'){echo"Corporate Investor / Buyer";}
									if($userprofile['field_1']=='3'){echo"Bank";}
									if($userprofile['field_1']=='4'){echo"NBFC";}
									if($userprofile['field_1']=='5'){echo"Credit Union";}
									if($userprofile['field_1']=='6'){echo"Accounting Firm";}
									if($userprofile['field_1']=='7'){echo"Business Broker";}
									if($userprofile['field_1']=='8'){echo"Investment Bank";}
									if($userprofile['field_1']=='9'){echo"Law Firm";}
									if($userprofile['field_1']=='10'){echo"M&amp;A Advisor";}
									if($userprofile['field_1']=='11'){echo"Merchant Bank";}
									if($userprofile['field_1']=='12'){echo"Commercial Real Estate Broker";}
									if($userprofile['field_1']=='13'){echo"Venture Capital Firm";}
									if($userprofile['field_1']=='14'){echo"Private Equity Firm";}
									if($userprofile['field_1']=='15'){echo"Family Office";}
									if($userprofile['field_1']=='16'){echo"Hedge Fund";}
									if($userprofile['field_1']=='17'){echo"NBFC";}
								}?> 
									
									</p>
                                </div>
								<div class="col-md-4 py-3">
                                    <h6>Designation</h6>
                                </div>
                                <div class="col-md-8 py-3">
                                    <p><?php if(!empty($userprofile['field_7'])) {echo  $userprofile['field_7'];}?></p>
                                </div>
                                <div class="col-md-4 py-3">
                                    <h6>Company Name</h6>
                                </div>
                                <div class="col-md-8 py-3">
                                    <p><?php if(!empty($userprofile['your_company'])) {echo  $userprofile['your_company'];}?></p>
                                </div>
                                <div class="col-md-4 py-3">
                                    <h6>Company website</h6>
                                </div>
                                <div class="col-md-8 py-3">
                                    <p><?php if(!empty($userprofile['field_8'])) {echo  $userprofile['field_8'];}?></p>
                                </div>
                                <div class="col-md-4 py-3">
                                    <h6>Company Sector</h6>
                                </div>
								 <div class="col-md-8 py-3">
                                    <p><?php if(!empty($userprofile['field_9'])) {echo  $userprofile['field_9'];}?></p>
                                </div>
								<div class="col-md-4 py-3">
                                    <h6>Investment Range</h6>
                                </div>
                                <div class="col-md-8 py-3">
                                    <p><?php if(!empty($userprofile['field_4'])) {echo  $userprofile['field_4'];}?> to <?php if(!empty($userprofile['investmentto'])) {echo  $userprofile['investmentto'];}?></p>
                                </div>
                               <div class="col-md-4 py-3">
                                    <h6>Industries Preference</h6>
                                </div>
                                <div class="col-md-8 py-3">
                                    <p class="color_blue"><?php if(!empty($userprofile['field_2'])) {  $businessindustry= unserialize($userprofile['field_2']);
							  echo implode(',',$businessindustry);
							}?></p>
                                </div>
								
								 <div class="col-md-4 py-3">
                                    <h6>Locations Preference</h6>
                                </div>
                                <div class="col-md-8 py-3">
                                    <p class="color_blue"><?php if(!empty($userprofile['field_3'])) {echo  $userprofile['field_3'];}?></p>
                                </div>
                           
                                <div class="col-md-4 py-3">
                                    <h6>Current location</h6>
                                </div>
                                <div class="col-md-8 py-3">
                                    <p class="color_blue"><?php if(!empty($userprofile['field_5'])) {echo  $userprofile['field_5'];}?></p>
                                </div>
                                <div class="col-md-12">
                                    <p class="single_disclaimer"><?php if(!empty($userprofile['field_6'])) {echo  $userprofile['field_6'];}?></p>
                                </div>
								
                            </div>
                        </div> 
                    <?php if(!empty($Docimages)){ ?>
					<h6 class="pb-2">Documents</h6>
					<ul class="pb-2 document_ul">
					<?php 
								   foreach($Docimages as $Docimages){ ?>
                                <li><a download href="<?php echo base_url();?>assets/upload/gallery/<?php echo $Docimages['image'];?>"><i class="fa fa-file-word-o pr-2" aria-hidden="true"></i> 
								   <?php }
										?>
							</ul>
					<?php } ?>
					</div>
                </div>
                
				<div class="col-md-4">
                    <div class="main_box bg_white my-4 w-100">
                        <div class="activity_body d-flex flex-column p_20">
                            <h5 class="color_blue">Send Business Proposal</h5>
                            <p class="py-2 text-center">To engage serious businesses, sending proposals is allowed only on premium plans.</p>
                            <button class="user_btn mx-auto my-2">Send Proposal</button>
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
            <?php if(!empty($allbuyerProfile)) {
				foreach($allbuyerProfile as $allbuyerProfile){ ?>
                <div class="slide">
                    <a href="#">
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
                                <p>Investment Range<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>
                                <p><?php if(!empty($allbuyerProfile->field_4)) { echo $allbuyerProfile->field_4; }?> To  <?php if(!empty($allbuyerProfile->investmentto)) { echo $allbuyerProfile->investmentto; }?> <span>SGD</span></p>
                            </div>
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">
                                <p>Industries Preference<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>
                                <p><?php if(!empty($allsellerProfile->field_2)) {  $businessindustry= unserialize($allsellerProfile->field_2);
							  echo implode(',',$businessindustry);
							}?> </p>
                            </div>
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">
                                <p>locations Preference<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>
                                <p><span>SGD</span> <?php if(!empty($allbuyerProfile->field_3)) { echo $allbuyerProfile->field_3; }?></p>
                            </div>
                            <a href="<?php echo base_url();?>view-buyer/<?php echo  base64_encode($allbuyerProfile->user_id);?>"><button class="user_btn ml-auto mt-3">Contact Business</button></a>
                        </div>
                    </a>
                </div>        
			<?php } } ?> 

		   </div>
        </div>
        