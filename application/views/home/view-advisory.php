<?php 
//echo"<pre>";
//print_r($userprofile);
//die();

?>

<section class="investor_single_page">    
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="main_box bg_white my-4 w-100">
                        <div class="p_20">
						
						
						<?php 
						if(!empty($userprofile['field_1'])) { 
							if($userprofile['field_1']==1) { 
								$field_1= "Advisory";
							} 
							if($userprofile['field_1']==2) { 
								$field_1= "Banker";
							} 
							if($userprofile['field_1']==3) { 
								$field_1= "Auditor";
							}
							if($userprofile['field_1']==4) { 
								$field_1= "Lawyer";
							}
							if($userprofile['field_1']==5) { 
								$field_1= "Consultant";
							}
							if($userprofile['field_1']==6) { 
								$field_1= "Broker";
							}
				}else{
					$field_1 = '';
				}
						
				?>
                            <h5 class="color_blue"><?php if(!empty($userprofile['field_7'])) { echo $userprofile['field_7'];}?>,<?php if(!empty($field_1)) { echo $field_1; }?> in <?php if(!empty($userprofile['field_5'])) { echo $userprofile['field_5'];}?> 					
							 																					
							</h5>
                           <ul class="latest_share d-flex m-0 pt-1">
									<?php 
											if(!empty($users['amount'])){ ?>
                                        <li><a href="mailto:<?php if(!empty($userprofile['official_email'])) { echo $userprofile['official_email'];}?>"><i class="fa fa-envelope-o pr-2" aria-hidden="true"></i>Official Email</a></li>
                                        <li><a href="tel:<?php if(!empty($userprofile['user_phone'])) { echo $userprofile['user_phone'];}?>"><i class="fa fa-phone pr-2" aria-hidden="true"></i>Phone</a></li><?php } else {?>
												  <li><i class="fa fa-envelope-o pr-2" aria-hidden="true"></i>Official Email</li>&nbsp;&nbsp;
											<li><i class="fa fa-phone pr-2" aria-hidden="true"></i>Phone</li>
											
											<?php } ?>
                                        
                                    </ul>
                        </div>
                        <hr class="latest_line m-0">
                        <div class="activity_body d-flex flex-column p_20">
                            <h6>	
							<?php if(!empty($userprofile['field_1'])) {
									if($userprofile['field_1']=='1'){echo"Advisory";}
									if($userprofile['field_1']=='2'){echo"Banker";}
									if($userprofile['field_1']=='3'){echo"Auditor";}
									if($userprofile['field_1']=='4'){echo"Lawyer";}
									if($userprofile['field_1']=='5'){echo"Consultant";}
									if($userprofile['field_1']=='6'){echo"Broker";}
							}?> in <?php if(!empty($userprofile['field_5'])) { echo $userprofile['field_5']; }?> 
								 Seeking to invest <?php if(!empty($userprofile['field_4'])) {
								
								echo number_format_short( $userprofile['field_4'], 1 );
								
								}?> to <?php if(!empty($userprofile['investmentto'])) {
								echo number_format_short( $userprofile['investmentto'], 1 );
								
								} ?> </h6>
                            <div class="row py-4">
                               
								  <div class="col-md-4 py-3">
                                            <h6>Name</h6>
                                        </div>
                                       <div class="col-md-8 py-3">
                                            <p>
											<?php if(!empty($this->session->userdata('uid'))){ 
											if(!empty($users['amount'])){
											?>
											<?php if(!empty($userprofile['first_name'])) {echo  $userprofile['first_name'];}
										
											}else{?><i class="fa fa-lock pr-2" aria-hidden="true"></i><?php echo"Available after connect"; } }else { ?><i class="fa fa-lock pr-2" aria-hidden="true"></i><?php echo"Available after connect"; } ?>
											</p>
                                        </div>
										<div class="col-md-4 py-3">
                                            <h6>Phone</h6>
                                        </div>
                                        <div class="col-md-8 py-3">
                                            <p>
											<?php if(!empty($this->session->userdata('uid'))){ 
											if(!empty($users['amount'])){
											?>
											 <?php if(!empty($userprofile['user_phone'])) {echo  $userprofile['user_phone'];}
										
											}else{?><i class="fa fa-lock pr-2" aria-hidden="true"></i><?php echo"Available after connect"; } }else { ?><i class="fa fa-lock pr-2" aria-hidden="true"></i><?php echo"Available after connect"; } ?>
											</p>
                                        </div>
								     <div class="col-md-4 py-3">
								
                                            <h6>Email</h6>
                                        </div>
                                       <div class="col-md-8 py-3">
                                            <p>
											<?php if(!empty($this->session->userdata('uid'))){ 
											if(!empty($users['amount'])){
											?>
											  <?php if(!empty($userprofile['email'])) {echo  $userprofile['email'];}
										
											}else{?><i class="fa fa-lock pr-2" aria-hidden="true"></i><?php echo"Available after connect"; } }else { ?><i class="fa fa-lock pr-2" aria-hidden="true"></i><?php echo"Available after connect"; } ?>
											</p>
                                        </div>
								
								
								<div class="col-md-4 py-3">
                                    <h6>You are a(n)</h6>
                                </div>
                                <div class="col-md-8 py-3">
                                    <p><?php if(!empty($userprofile['field_1'])) {
									if($userprofile['field_1']=='1'){echo"Advisory";}
									if($userprofile['field_1']=='2'){echo"Banker";}
									if($userprofile['field_1']=='3'){echo"Auditor";}
									if($userprofile['field_1']=='4'){echo"Lawyer";}
									if($userprofile['field_1']=='5'){echo"Consultant";}
									if($userprofile['field_1']=='6'){echo"Broker";}
									
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
                                    <p><?php //if(!empty($userprofile['field_9'])) {echo  $userprofile['field_9'];}?>
									
									<?php if(!empty($userprofile['field_9'])) {  $businessindustry= unserialize($userprofile['field_9']);
							  echo implode(',',$businessindustry);
							}?>
									</p>
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
                                <div class="col-md-4 py-3">
                                    <h6>Description</h6>
                                </div>
                                <div class="col-md-8 py-3">
                                    <p class="color_blue"><?php if(!empty($userprofile['field_6'])) {echo  $userprofile['field_6'];}?></p>
                                </div>
								
                            </div>
                        </div> 
                        <div class="d-none">
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
        				</div>
					</div>
                </div>
                
				<div class="col-md-4">
                    <div class="main_box bg_white my-4 w-100">
                        <div class="activity_body d-flex flex-column p_20">
                            <h5 class="color_blue">Send Business Proposal</h5>
                            <p class="py-2 text-center">To engage serious businesses, sending proposals is allowed only on premium plans.</p>
                           	<?php if(!empty($this->session->userdata('uid'))){
								if($this->session->userdata('uid')==$userprofile['id']){?>
									<button class="user_btn2 mx-auto my-2" data-toggle="modal" data-target="#SendProposalsameuser">Send Proposal </button>
								<?php }
								
								else if($this->session->userdata('role')==$userprofile['role']){?>
										<button class="user_btn2 mx-auto my-2" data-toggle="modal" data-target="#SendProposalsamerole">Send Proposal </button><?php
								}else{ 
									   if(empty($users['amount'])){?>
									<button class="user_btn2 mx-auto my-2" data-toggle="modal" data-target="#SendProposalamountempty">Send Proposal </button>
									<?php }else{
										      	$startTime = date("Y-m-d H:i:s");
												$currentDate = strtotime($startTime);
												if(!empty($users['expiredDate'])){
													$expiredDate = strtotime($users['expiredDate']);
												}else{
													$expiredDate ='';
												}
											
											
											if($notificationscount >0) { ?>
											<button type="button" class="user_btn2 mx-auto my-2" data-toggle="modal" data-target="#SendProposal">Send Proposal</button><?php } else {
												if($users['cpoints']==0){?>
												<button type="button" class="user_btn2 mx-auto my-2" data-toggle="modal" data-target="#cpointsSendProposal">Send Proposal</button>
												<?php 
												}
												else if($expiredDate >= $currentDate){?>
													<button class="user_btn2 mx-auto my-2 send-proposal" rel="<?php echo $this->uri->segment(2);?>">Send Proposal </button><?php 
												}
												else{
												?>
													<button type="button" class="user_btn2 mx-auto my-2" data-toggle="modal" data-target="#expiredSendProposal">Send Proposal</button><?php 
												}
											}   
										}
									}
								 } else { ?>
										<button class="user_btn2 mx-auto my-2" data-toggle="modal" data-target="#SendProposalnotlogin">Send Proposal </button><?php 
									} ?>
                        </div> 
                        <ul class="single_user_btn">
							 <?php 
							  if(!empty($this->session->userdata('uid'))){
							 if($Bookmarkcount >0) { ?>
							 <li><a  class="bookmark-cls" href="javascript:;" data-toggle="modal" data-target="#SendBookmark"><i class="fa fa-bookmark pr-3" aria-hidden="true" ></i>Bookmark</a></li>
							 <?php }else{?>
								<li><a  href="javascript:;" class="send-bookmark" role="4" rel="<?php echo $this->uri->segment(2);?>"><i class="fa fa-bookmark pr-3" aria-hidden="true" ></i>Bookmark</a></li>
							 <?php } 
							  }else{?>
							   <li><a  href="javascript:;"  data-toggle="modal" data-target="#SendBookmarknotlogin" ><i class="fa fa-bookmark pr-3" aria-hidden="true" ></i>Bookmark</a></li>
							  <?php }?>
								
								<li><a  id="copyButton" href="javascript:;"><i class="fa fa-share-square-o pr-3" aria-hidden="true"></i>Share</a></li>
                        </ul>
						<input readonly type="text"  class="col-md-12" id="copyTarget" value="<?php echo base_url();?>view-advisory/<?php echo $this->uri->segment(2);?>"> <br>
							<span id="msg"></span><br>
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
                            <p class="c_box_heading pb-2">
							<?php if(!empty($allbuyerProfile->field_7)) { echo $allbuyerProfile->field_7; }?>  
								<?php 
								if(!empty($allbuyerProfile->field_1)) { 
							if($allbuyerProfile->field_1==1) { 
								$field_1= "Advisory";
							} 
							if($allbuyerProfile->field_1==2) { 
								$field_1= "Banker";
							} 
							if($allbuyerProfile->field_1==3) { 
								$field_1= "Auditor";
							}
							if($allbuyerProfile->field_1==4) { 
								$field_1= "Lawyer";
							}
							if($allbuyerProfile->field_1==5) { 
								$field_1= "Consultant";
							}
							if($allbuyerProfile->field_1==6) { 
								$field_1= "Broker";
							}
				}else{
					$field_1 = '';
				}
						?>,<?php if(!empty($field_1)) { echo $field_1; }?> 
								in
							<?php if(!empty($allbuyerProfile->field_5)) { echo $allbuyerProfile->field_5; }?>  
							
							</p>
                            <p class="discription"><?php if(!empty($allbuyerProfile->field_6)) { echo $allbuyerProfile->field_6; }?></p>
                            <ul class="latest_share d-flex py-3 m-0">
                                <li><a href="#"><i class="fa fa-map-marker pr-2" aria-hidden="true"></i><?php if(!empty($allbuyerProfile->field_5)) { echo $allbuyerProfile->field_5; }?></a></li>
                            </ul>
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">
                                <p>Investment Range<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>
                                <p><span>SGD</span> <?php if(!empty($allbuyerProfile->field_4)) { echo number_format_short($allbuyerProfile->field_4,1); }?> To <?php if(!empty($allbuyerProfile->investmentto)) { echo number_format_short($allbuyerProfile->investmentto,1); }?></p>
                            </div>
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">
                                <p>Industries Preference<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>
                                <p><?php if(!empty($allbuyerProfile->field_2)) {  $businessindustry= unserialize($allbuyerProfile->field_2);
							  echo implode(',',$businessindustry);
							}?> </p>
                            </div>
                            <div class="d-flex justify-content-between bg_color p-2 mb_2">
                                <p>locations Preference<span><i class="fa fa-info-circle pl-1" aria-hidden="true"></i></span></p>
                                <p><?php if(!empty($allbuyerProfile->field_3)) { echo $allbuyerProfile->field_3; }?></p>
                            </div>
                            <a href="<?php echo base_url();?>view-buyer/<?php echo  base64_encode($allbuyerProfile->user_id);?>"><button class="user_btn ml-auto mt-3">Contact Business</button></a>
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
        <p class="error">You are send Proposal alreadly.Now you can not be send proposal again</p>
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
        <p class="error">A Advisory Profile can send proposal to only Seller</p>
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
<div id="SendProposalamountempty" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Send Proposal</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p class="error">Please upgrade your plan to send proposal </p>
      </div>
    </div>
	  </div>
</div>
<div id="cpointsSendProposal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Send Proposal</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p class="error">Now you have zero conects.Please buy more connects for send proposal</p>
      </div>
    </div>
	  </div>
</div>


<div id="expiredSendProposal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Send Proposal</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p class="error">Now your account has been expired. Please upgrade your account for send proposal</p>
      </div>
    </div>
	  </div>
</div>
<div id="SendBookmark" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Bookmark Proposal</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p class="error">You are alreadly bookmark this proposal.Now you can not be bookmark again</p>
      </div>
    </div>
	  </div>
</div>

<div id="SendBookmarknotlogin" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Send Bookmark</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p class="error">Please Login to bookmark the proposal</p>
      </div>
    </div>
	  </div>
</div>