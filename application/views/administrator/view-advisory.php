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
											
											  <?php if(!empty($userprofile['email'])) {echo  $userprofile['email'];} ?>
											</p>
                                        </div>
								
								
								<div class="col-md-3 py-3">
                                    <h3>You are a(n)</h3>
                                </div>
                                <div class="col-md-3 py-3">
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