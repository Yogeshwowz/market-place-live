<section class="Investor_form">
   <div class="container">
      <h2 class="main_h2">Register Investor Profile</h2>
            <div class="row">
         <div class="col-md-8 pr-5">
		 <div  id="profile-form-success" class="alert alert-success alert-dismissible fade show hidecls" role="alert">
							<span class="alert-icon"><i class="ni ni-like-2"></i></span>
							<span class="alert-text">your profile has been added successfully</span>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							</div>
			<form  class="inves" id="profile-frm" method="POST" action="" role="form" novalidate=""enctype="multipart/form-data" >
            <div class="pro_box bg_white my-4">
			
               <h3>Confidential Information</h3>
               <p>Information entered here is displayed publicly to match you with the right set of investors and buyers.</p>
               <hr>
               <div class="row">
                  <div class="col-md-6 mb-2 justify-content-between">
                     <label class="w-100 mb-1 " for="your_name">Your Name</label>
                     <input class="w-100 p-1 px-2" type="text" name="your_name" value="<?php if(!empty($userprofile['first_name'])) {echo  $userprofile['first_name'];}?>">
                  </div>
                  <div class="col-md-6 mb-2 justify-content-between">
                     <label class="w-100 mb-1" for="email">Enter official email for quick verification</label>
                      <input class="w-100 p-2" type="email" name="official_email" value="<?php if(!empty($userprofile['official_email'])) {echo  $userprofile['official_email'];}?>">
                  </div>
                  <div class="col-md-6 mb-2 justify-content-between">
                     <label class="w-100 mb-1 " for="mobile_number">Your Mobile Number</label>
                     <input class="w-100 p-1 px-2" type="number" name="mobile_number" value="<?php if(!empty($userprofile['user_phone'])) {echo  $userprofile['user_phone'];}?>">
                  </div>
               </div>
            </div>
            <div class="pro_box requirement_box bg_white">
               <h3>Your Requirements</h3>
               <p>Information entered here is displayed publicly to match you with the right set of investors and buyers.</p>
               <hr>
               <div class="row">
                  <div class="col-md-6 mb-2">
                     <label class="">You are interested in</label>
                  </div>
                  <div class="col-md-6 mb-2">
                     <select class="select_menu" id="interested_in" name="interested_in">
                        <option value="0" selected>Choose Your Interested In</option>
                        <option value="1" <?php if(!empty($userprofile['interested_in'])) { if($userprofile['interested_in']=='1'){echo"selected";}}?>>Acquiring / Buying a Business</option>
                        <option value="2" <?php if(!empty($userprofile['interested_in'])) { if($userprofile['interested_in']=='2'){echo"selected";}}?>>Investing in a Business</option>
                        <option value="3" <?php if(!empty($userprofile['interested_in'])) { if($userprofile['interested_in']=='3'){echo"selected";}}?> >Lending to a Business</option>
                     </select>
                  </div>
                  <div class="col-md-6 mb-2">
                     <label class="">You are a(n)</label>
                  </div>
                  <div class="col-md-6 mb-2">
                     <input class="w-100 p-1 px-2" type="text" name="field_1" id="field_1" value="<?php if(!empty($userprofile['field_1'])) {echo  $userprofile['field_1'];}?>">
                  </div>
                  <div class="col-md-6 mb-2">
                     <label class="">Select industries you are interested in</label>
                  </div>
                  <div class="col-md-6 mb-2">
                     <input class="w-100 p-1 px-2" type="text" name="field_2" id="field_2" value="<?php if(!empty($userprofile['field_2'])) {echo  $userprofile['field_2'];}?>">
                  </div>
                  <div class="col-md-6 mb-2">
                     <label class="">Select locations you are interested in </label>
                  </div>
                  <div class="col-md-6 mb-2">
                     <input class="w-100 p-1 px-2" type="text" name="field_3" id="field_3" value="<?php if(!empty($userprofile['field_3'])) {echo  $userprofile['field_3'];}?>">
                  </div>
                  <div class="col-md-6 mb-2">
                     <label class="">Provide your investment range</label>
                  </div>
                  <div class="col-md-6 mb-2">
                     <input class="w-100 p-1 px-2" type="text" name="field_4" id="field_4" value="<?php if(!empty($userprofile['field_4'])) {echo  $userprofile['field_4'];}?>">
                  </div>
                  <div class="col-md-6 mb-2">
                     <label class="">Your current location</label>
                  </div>
                  <div class="col-md-6 mb-2">
                     <input class="w-100 p-1 px-2" type="text" name="field_5" id="field_5" value="<?php if(!empty($userprofile['field_5'])) {echo  $userprofile['field_5'];}?>">
                  </div>
                  <div class="col-md-6 mb-2">
                     <label class="">Brief info about your Company</label>
                  </div>
                  <div class="col-md-6 mb-2">
                     <textarea class="form-control" rows="3" name="field_6" id="field_6"><?php if(!empty($userprofile['field_6'])) {echo  $userprofile['field_6'];}?></textarea>
                  </div>
                  <div class="col-md-6 mb-2">
                     <label class="">Your designation</label>
                  </div>
                  <div class="col-md-6 mb-2">
                     <input class="w-100 p-1 px-2" type="text" name="field_7" id="field_7" value="<?php if(!empty($userprofile['field_7'])) {echo  $userprofile['field_7'];}?>">
                  </div>
                  <div class="col-md-6 mb-2">
                     <label class="">Company Logo</label>
                  </div>
                  <div class="col-md-6 mb-2">
                     <input style="display:none;" type="file" name="company_logo" id="company_logo">
                     <label for="0" class="add_file_btn">Add Logo</label>
                  </div>
                  <div class="col-md-6 mb-2">
                     <label class="">Company website or LinkedIn profile </label>
                  </div>
                  <div class="col-md-6 mb-2">
                     <input class="w-100 p-1 px-2" type="text" name="field_8" id="field_8" value="<?php if(!empty($userprofile['field_8'])) {echo  $userprofile['field_8'];}?>">
                  </div>
                  <div class="col-md-6 mb-2">
                     <label class="">Your company's sector</label>
                  </div>
                  <div class="col-md-6 mb-2">
                     <input class="w-100 p-1 px-2" type="text" name="field_9" id="field_9" value="<?php if(!empty($userprofile['field_9'])) {echo  $userprofile['field_9'];}?>">
                  </div>
                  <div class="col-md-6 mb-2">
                     <label class="">Profile picture</label>
                  </div>
                  <div class="col-md-6 mb-2">
                     <input style="display:none;" type="file" name="add_photo" id="add_photo">
                     <label for="add_photo" class="add_file_btn">Add Photos</label>
                  </div>
                  <div class="col-md-6 mb-2">
                     <label>Attach Corporate Profile and Terms of Engagement if any</label>
                  </div>
                  <div class="col-md-6 mb-2">
                     <input style="display:none;" type="file" name="add_documents" id="add_documents">
                     <label for="add_documents" class="add_file_btn">Add Documents</label>
                  </div>
                  <div class="col-md-6 mb-2">
                     <label>Attach proof of business for faster verification</label>
                  </div>
                  <div class="col-md-6 mb-2">
                     <input style="display:none;" type="file" name="attach_proof" id="attach_proof">
                     <label for="attach_proof" class="add_file_btn">Attach Proof</label>
                  </div>
                  <div class="offset-md-6 col-md-6 mb-4">
                     <input  type="submit" class="main-btn1 py-2 submit_profile_btn" value="Submit" name="confidentail-submit" >
                  </div>
                 
				  
			  </div>
            </div>
			 </form>
			 <div class="pro_box requirement_box bg_white buy_plan_section">
                     <div class="col-md-12">
                        <hr>
                     </div>
                     <div class="col-md-12 mb-2">
                        <h3>For more introductions select plan</h3>
                     </div>
                     <div class="col-md-12 mb-2">
                        <label class="form-check-label pb-3  w-100">
                           <input type="radio" name="buy_plan" id="bp" value="1" checked="">Basic
                           <div class="plan_box">
                              <div class="row">
                                 <div class="col-1 pb-4">
                                    <span class="plan_check"></span>
                                 </div>
                                 <div class="col-11 pb-4">
                                    <p>Speedy profile activation within 1 business day</p>
                                 </div>
                                 <div class="col-1 pb-4">
                                    <span class="plan_check"></span>
                                 </div>
                                 <div class="col-11 pb-4">
                                    <p> Profile marked as 'Premium Plan' and gets higher visibility</p>
                                 </div>
                                 <div class="col-1 pb-4">
                                    <span class="plan_check"></span>
                                 </div>
                                 <div class="col-11 pb-4">
                                    <p>You can send up to 50 business proposals to investors and buyers</p>
                                 </div>
                                 <div class="col-1">
                                    <span class="plan_check"></span>
                                 </div>
                                 <div class="col-11">
                                    <p>Quick email support for your queries</p>
                                 </div>
                              </div>
                           </div>
                        </label>
                     </div>
                     <div class="col-md-12 mb-2">
                        <label class="form-check-label pb-3  w-100">
                           <input type="radio" name="buy_plan" id="mp" value="2" >Professional
                           <div class="plan_box">
                              <div class="row">
                                 <div class="col-1 pb-4">
                                    <span class="plan_check"></span>
                                 </div>
                                 <div class="col-11 pb-4">
                                    <p>Speedy profile activation within 1 business day</p>
                                 </div>
                                 <div class="col-1 pb-4">
                                    <span class="plan_check"></span>
                                 </div>
                                 <div class="col-11 pb-4">
                                    <p> Profile marked as 'Premium Plan' and gets higher visibility</p>
                                 </div>
                                 <div class="col-1 pb-4">
                                    <span class="plan_check"></span>
                                 </div>
                                 <div class="col-11 pb-4">
                                    <p>You can send up to 50 business proposals to investors and buyers</p>
                                 </div>
                                 <div class="col-1">
                                    <span class="plan_check"></span>
                                 </div>
                                 <div class="col-11">
                                    <p>Quick email support for your queries</p>
                                 </div>
                              </div>
                           </div>
                        </label>
                     </div>
                     <div class="col-md-12 mb-2">
                        <label class="form-check-label pb-3  w-100">
                           <input type="radio" name="buy_plan" id="pp" value="3">Premium
                           <div class="plan_box">
                              <div class="row">
                                 <div class="col-1 pb-4">
                                    <span class="plan_check"></span>
                                 </div>
                                 <div class="col-11 pb-4">
                                    <p>Speedy profile activation within 1 business day</p>
                                 </div>
                                 <div class="col-1 pb-4">
                                    <span class="plan_check"></span>
                                 </div>
                                 <div class="col-11 pb-4">
                                    <p> Profile marked as 'Premium Plan' and gets higher visibility</p>
                                 </div>
                                 <div class="col-1 pb-4">
                                    <span class="plan_check"></span>
                                 </div>
                                 <div class="col-11 pb-4">
                                    <p>You can send up to 50 business proposals to investors and buyers</p>
                                 </div>
                                 <div class="col-1">
                                    <span class="plan_check"></span>
                                 </div>
                                 <div class="col-11">
                                    <p>Quick email support for your queries</p>
                                 </div>
                              </div>
                           </div>
                        </label>
                     </div>
                     <div class="col-lg-8 col-md-12 mb-3">
                        <div class="d-flex">
                           <input type="checkbox" class="form-check-input" value="">
                           <label class="form-check-label pb-3  w-100">
                           I accept the Terms of Engagement 
                           </label>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-12 mb-3">
                        <button id="buy-button" class="main-btn1 ml-auto py-2">Buy</button>
                     </div>
                  </div>
              
         </div>
          <div class="col-md-4">
                    <div class="profile_status">
                        <h3>Your Profile Status</h3>
                        <div class="profile_status_radio">
                            <label class="form-check-label text_bold pb-3  w-100">
                                <input type="radio" name="profile_status" id="pd" value="1" disabled <?php if(($userprofile['user_plan']==0)) { echo "checked";}?>>Provide Details 
                            </label>
                            <label class="form-check-label text_bold pb-3  w-100">
                                <input  <?php if(($userprofile['user_plan'] > 0)) { echo "checked";} ?> type="radio" name="profile_status" id="a" value="2" disabled>Approval
                            </label>
                        </div>
                    </div>
                </div>
      </div>
   </div>
</section>