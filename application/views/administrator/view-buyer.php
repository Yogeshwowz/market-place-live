<div class="header bg-primary">
   <div class="container-fluid">
      <div class="header-body">
         <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
               <h3 class="h2 text-white d-inline-block mb-0">Dashoard</h3>
               <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-3">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                     <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/dashboard"><i class="fas fa-home"></i></a></li>
                     <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/buyers">Manage Buyers</a></li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </div>
   <!-- Page content -->
   <div class="container-fluid">
      <!-- Table -->
      <div class="row">
         <div class="col">
            <div class="card">
               <!-- Card header -->
               <div class="py-4">
                  <div class="col-md-12">
                    <div class="main_box bg_white my-4 w-100">
                        <div class="heading">
                            <h5 class="color_blue"><?php if(!empty($userprofile['field_7'])) { echo $userprofile['field_7']; }?> looking to 							<?php if(!empty($userprofile['interested_in'])) { 							
							if($userprofile['interested_in']==1) { echo "Acquiring / Buying a Business";} 							
							if($userprofile['interested_in']==2) { echo "Investing in a Business";} 							
							if($userprofile['interested_in']==3) { echo "Lending to a Business";}							
							}?> in <?php if(!empty($userprofile['field_2'])) {  
							$businessindustry= unserialize($userprofile['field_2']);							  
							echo implode(',',$businessindustry);							
							}?> 																					
							</h5>
                         
                        </div>
                        <hr class="latest_line m-0">
                        <div class="activity_body d-flex flex-column p_20">
                           
                            <div class="row py-4">
                               
								  <div class="col-md-3 py-3">
                                            <h3>Name</h3>
                                        </div>
                                       <div class="col-md-3 py-3">
                                            <p>
											<?php if(!empty($userprofile['first_name'])) {echo  $userprofile['first_name'];}?>
											</p>
                                        </div>
										<div class="col-md-3 py-3">
                                            <h3>Phone</h3>
                                        </div>
                                        <div class="col-md-3 py-3">
                                            <p>
											
											 <?php if(!empty($userprofile['user_phone'])) {echo  $userprofile['user_phone'];}?>
											</p>
                                        </div>
								     <div class="col-md-3 py-3">
								
                                            <h3>Email</h3>
                                        </div>
                                       <div class="col-md-3 py-3">
                                            <p>
											
											  <?php if(!empty($userprofile['email'])) {echo  $userprofile['email'];}?>
											</p>
                                        </div>
								
								<div class="col-md-3 py-3">
                                    <h3>You are interested in</h3>
                                </div>
                                <div class="col-md-3 py-3">
                                    <p><?php if(!empty($userprofile['interested_in'])) { 
									if($userprofile['interested_in']=='1'){echo"Acquiring / Buying a Business";}
									if($userprofile['interested_in']=='2'){echo"Investing in a Business";}
									if($userprofile['interested_in']=='3'){echo"Lending to a Business";}
									}?>
									
									</p>
                                </div>
								<div class="col-md-3 py-3">
                                    <h3>You are a(n)</h3>
                                </div>
                                <div class="col-md-3 py-3">
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
								<div class="col-md-3 py-3">
                                    <h3>Designation</h3>
                                </div>
                                <div class="col-md-3 py-3">
                                    <p><?php if(!empty($userprofile['field_7'])) {echo  $userprofile['field_7'];}?></p>
                                </div>
                                <div class="col-md-3 py-3">
                                    <h3>Company Name</h3>
                                </div>
                                <div class="col-md-3 py-3">
                                    <p><?php if(!empty($userprofile['your_company'])) {echo  $userprofile['your_company'];}?></p>
                                </div>
                                <div class="col-md-3 py-3">
                                    <h3>Company website</h3>
                                </div>
                                <div class="col-md-3 py-3">
                                    <p><?php if(!empty($userprofile['field_8'])) {echo  $userprofile['field_8'];}?></p>
                                </div>
                                <div class="col-md-3 py-3">
                                    <h3>Company Sector</h3>
                                </div>
								 <div class="col-md-3 py-3">
                                    <p><?php //if(!empty($userprofile['field_9'])) {echo  $userprofile['field_9'];}?>
									
									<?php if(!empty($userprofile['field_9'])) {  $businessindustry= unserialize($userprofile['field_9']);
							  echo implode(',',$businessindustry);
							}?>
									</p>
                                </div>
								<div class="col-md-3 py-3">
                                    <h3>Investment Range</h3>
                                </div>
                                <div class="col-md-3 py-3">
                                    <p><?php if(!empty($userprofile['field_4'])) { echo number_format_short( $userprofile['field_4'], 1 );}?> to <?php if(!empty($userprofile['investmentto'])) { echo number_format_short( $userprofile['investmentto'], 1 );}?></p>
                                </div>
                               <div class="col-md-3 py-3">
                                    <h3>Industries Preference</h3>
                                </div>
                                <div class="col-md-3 py-3">
                                    <p class="color_blue"><?php if(!empty($userprofile['field_2'])) {  $businessindustry= unserialize($userprofile['field_2']);
							  echo implode(',',$businessindustry);
							}?></p>
                                </div>
								
								 <div class="col-md-3 py-3">
                                    <h3>Locations Preference</h3>
                                </div>
                                <div class="col-md-3 py-3">
                                    <p class="color_blue"><?php if(!empty($userprofile['field_3'])) {echo  $userprofile['field_3'];}?></p>
                                </div>
                           
                                <div class="col-md-3 py-3">
                                    <h3>Current location</h3>
                                </div>
                                <div class="col-md-3 py-3">
                                    <p class="color_blue"><?php if(!empty($userprofile['field_5'])) {echo  $userprofile['field_5'];}?></p>
                                </div>
                                <div class="col-md-3 py-3">
                                    <h3>Description</h3>
                                </div>
                                <div class="col-md-3 py-3">
                                    <p class="color_blue"><?php if(!empty($userprofile['field_6'])) {echo  $userprofile['field_6'];}?></p>
                                </div>
								
                            </div>
                        </div> 
                        
                        <?php if(!empty($Docimages)){ 
						    $showpath =base_url()."assets/img/";
							?>
							<h3 class="pb-2">Documents</h3>
							<ul class="pb-2 document_ul">
							<?php 
							foreach($Docimages as $Docimages){ 
							 $ext = pathinfo($Docimages['image']);
                              if($ext['extension']=='docx' || $ext['extension']=='doc'){ $nameicon = "word.png";}
                              
                              if($ext['extension']=='jpg' || $ext['extension']=='gif' || $ext['extension']=='png'){ $nameicon = "img-icon.png";}
                               if($ext['extension']=='pdf'){ $nameicon = "pdf-icon.png";}
							
							?>
							<li><a download href="<?php echo base_url();?>assets/upload/gallery/<?php echo $Docimages['image'];?>"><img style="width:50px;height:50px;" class="thumbnail-img" src="<?php echo $showpath.$nameicon;?>" /> </a></li>
							<?php }
							?>
							</ul>
							<?php } ?>
        				
					</div>
                </div>
                
			   </div>
            </div>
         </div>
      </div>
   </div>
</div>