<div class="header bg-primary">
   <div class="container-fluid">
      <div class="header-body">
         <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
               <h3 class="h2 text-white d-inline-block mb-0">Dashoard</h3>
               <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-3">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                     <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/dashboard"><i class="fas fa-home"></i></a></li>
                     <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/sellers">Manage Sellers</a></li>
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
                                  
                                </div>
                            </div>                            
                        </div>
                        <hr class="latest_line m-0">
                        <div class="activity_body d-flex flex-column p_20">
                          
                           
                            <div class="row mr-0">
                                <div class="col-md-6">
                                    <div class="row profile-details">
                                        <div class="col-md-12">
                                            <p><b><?php if(!empty($userprofile['interested_in'])) {
												if($userprofile['interested_in']==1) { 
												  echo "Full sale of business";
												}
												if($userprofile['interested_in']==2) { 
												  echo "Partial stake sale of business/investment";
												}
												if($userprofile['interested_in']==3) { 
												  echo "Loan for business";
												}
												}?></a></b></p>
                                        </div>
                                        <div class="col-md-12">
                                            <p><b>Asking Price: </b> SGD | <?php if(!empty($userprofile['tentative_selling'])) {
													echo  number_format_short( $userprofile['tentative_selling'], 1 );
												}?></p>
                                        </div>
                                        <div class="col-md-12 pt-2">
                                            <p><b>Reason: </b><?php if(!empty($userprofile['reason_for_sale'])) {echo  $userprofile['reason_for_sale'];}?></p>
                                        </div>
                                        <div class="col-xs-6 col-md-12 pt-2 ">
                                            <h3>Name</h3>
                                        </div>
                                        <div class="col-xs-6 col-md-12 pt-1">
                                            <p>
											
											<?php if(!empty($userprofile['first_name'])) {echo  $userprofile['first_name'];}
										 ?>
											</p>
                                        </div>
										
										<div class="col-md-12 pt-2 col-xs-6">
                                            <h3>Phone</h3>
                                        </div>
                                        <div class="col-md-12 pt-1 col-xs-6">
                                            <p>
											
											 <?php if(!empty($userprofile['user_phone'])) {echo  $userprofile['user_phone'];}
										
											 ?>
											</p>
                                        </div>
										
										<div class="col-md-12 pt-2 col-xs-6">
                                            <h3>Email</h3>
                                        </div>
                                        <div class="col-md-12 pt-1 col-xs-6">
                                            <p>
											
											  <?php if(!empty($userprofile['email'])) {echo  $userprofile['email'];}
										
											 ?>
											</p>
                                        </div>
                                        <div class="col-md-12 pt-2 col-xs-6">
                                            <h3>Business Name</h3>
                                        </div>
                                        <div class="col-md-12 py-1 col-xs-6">
                                            <p>
											
											<?php if(!empty($userprofile['company_name'])) { echo  $userprofile['company_name'];} ?>
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
                            <h3 class="pb-2 pt-4">Business Overview</h3>
                            <p class="pb-2"><?php if(!empty($userprofile['field_9'])) {echo  $userprofile['field_9'];}?></p>
                            <h3 class="pb-2 pt-4">Products and Services Overview</h3>
                            <p class="pb-2"><?php if(!empty($userprofile['field_10'])) {echo  $userprofile['field_10'];}?></p>
                            <h3 class="pb-2 pt-4">Facility Overview</h3>
                            <p class="pb-2"><?php if(!empty($userprofile['field_11'])) {echo  $userprofile['field_11'];}?></p>
                            <h3 class="pb-2 pt-4">Assets Overview</h3>
                            <p class="pb-2"><?php if(!empty($userprofile['field_15'])) {echo  $userprofile['field_15'];}?></p>
                            
                        </div> 
                    </div>
                </div>
			   </div>
            </div>
         </div>
      </div>
   </div>
</div>