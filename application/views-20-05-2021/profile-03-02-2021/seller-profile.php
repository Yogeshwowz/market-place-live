<section class="Investor_form">
        <div class="container-fluid">
            <h2 class="main_h2">Register Seller Profile</h2>
            <div class="row">
                <div class="col-md-8 pr-5">
					<?php  $success = $this->session->flashdata('payment_success');
					if($success){?>
						<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<?php echo $this->session->flashdata('payment_success'); ?>
						</div><?php } ?>
				<form  id="profile-frm" method="POST" action="" role="form" novalidate=""enctype="multipart/form-data" >		
                    <div class="pro_box bg_white my-4">
                        <h3>Confidential Information</h3>
                        <p>Information entered here is displayed publicly to match you with the right set of investors and buyers.</p>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 mb-2 justify-content-between">
                                <label class="w-100 mb-2" for="your_name">Your Name</label>
                                <input class="w-100 p-1" type="text" name="your_name" value="<?php if(!empty($userprofile['first_name'])) {echo  $userprofile['first_name'];}?>">
                            </div>
                            <div class="col-md-6 mb-2 justify-content-between">
                                <label class="w-100 mb-2" for="company_name">Company Name</label>
                                <input class="w-100 p-1" type="text" name="company_name" value="<?php if(!empty($userprofile['company_name'])) {echo  $userprofile['company_name'];}?>">
                            </div>
                            <div class="col-md-6 mb-2 justify-content-between">
                                <label class="w-100 mb-2" for="mobile_number">Your Mobile Number</label>
                                <input class="w-100 p-1" type="number" name="mobile_number" value="<?php if(!empty($userprofile['user_phone'])) {echo  $userprofile['user_phone'];}?>">
                            </div>
                            <div class="col-md-6 mb-2 justify-content-between">
                                <label class="w-100 mb-2" for="email">Enter official email for quick verification</label>
                                <input class="w-100 p-1" type="email" name="official_email" value="<?php if(!empty($userprofile['official_email'])) {echo  $userprofile['official_email'];}?>">
                            </div>
                        </div>
                    </div>

                    <div class="pro_box requirement_box bg_white">
                        <h3>Business Information</h3>
                        <p>Information entered here is displayed publicly to match you with the right set of investors and buyers.</p>
                        <hr>
                        <div class="row">
						  <div class="col-md-6 mb-2">
                                <label class="">You are a(n)</label>
                            </div>                       
                            <div class="col-md-6 mb-2">
                                <input class="w-100 p-1" type="text" name="field_1" id="field_1" 	value="<?php if(!empty($userprofile['field_1'])) {echo  $userprofile['field_1'];}?>">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="">you are interested in</label>
                            </div>                       
                            <div class="col-md-6 mb-2">
                                <input class="w-100 p-1" type="text" name="field_2" id="field_2" value="<?php if(!empty($userprofile['field_2'])) {echo  $userprofile['field_2'];}?>">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="">When was the business established?</label>
                            </div>                       
                            <div class="col-md-6 mb-2">
                                <input class="w-100 p-1" type="text" name="field_3" id="field_3" value="<?php if(!empty($userprofile['field_3'])) {echo  $userprofile['field_3'];}?>">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="">Select business' industry</label>
                            </div>                       
                            <div class="col-md-6 mb-2">
                                <input class="w-100 p-1" type="text" name="field_4" id="field_4" value="<?php if(!empty($userprofile['field_4'])) {echo  $userprofile['field_4'];}?>">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="">Where is the business located / headquartered?</label>
                            </div>                       
                            <div class="col-md-6 mb-2">
                                <input class="w-100 p-1" type="text" name="field_5" id="field_5" value="<?php if(!empty($userprofile['field_5'])) {echo  $userprofile['field_5'];}?>">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="">How many permanent employees does the business have?</label>
                            </div>                       
                            <div class="col-md-6 mb-2">
                                <input class="w-100 p-1" type="text" name="field_6" id="field_6" value="<?php if(!empty($userprofile['field_6'])) {echo  $userprofile['field_6'];}?>">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="">Select business legal entity type</label>
                            </div>                       
                            <div class="col-md-6 mb-2">
                                <input class="w-100 p-1" type="text" name="field_7" id="field_7" value="<?php if(!empty($userprofile['field_7'])) {echo  $userprofile['field_7'];}?>">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="">Describe the business in a single line</label>
                            </div>                       
                            <div class="col-md-6 mb-2">
                                <input class="w-100 p-1" type="text" name="field_8" id="field_8" value="<?php if(!empty($userprofile['field_8'])) {echo  $userprofile['field_8'];}?>">
                            </div> 
                            <div class="col-md-6 mb-2">
                                <label class="">Mention highlights of the business including number of clients, growth rate, promoter experience, business relationships, awards, etc</label>
                            </div>                       
                            <div class="col-md-6 mb-2">
                                <input class="w-100 p-1" type="text" name="field_9" id="field_9" value="<?php if(!empty($userprofile['field_9'])) {echo  $userprofile['field_9'];}?>">
                            </div> 
                            <div class="col-md-6 mb-2">
                                <label class="">List all products and services of the business</label>
                            </div>                       
                            <div class="col-md-6 mb-2">
                                <input class="w-100 p-1" type="text" name="field_10" id="field_10" value="<?php if(!empty($userprofile['field_10'])) {echo  $userprofile['field_10'];}?>">
                            </div> 
                            <div class="col-md-6 mb-2">
                                <label class="">Describe your facility such as built-up area, number of floors, rental/lease details </label>
                            </div>                       
                            <div class="col-md-6 mb-2">
                                <input class="w-100 p-1" type="text" name="field_11" id="field_11" value="<?php if(!empty($userprofile['field_11'])) {echo  $userprofile['field_11'];}?>">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="">At present, what is your average monthly sales?</label>
                            </div>                       
                            <div class="col-md-6 mb-2">
                                <input class="w-100 p-1 price_input" type="number" name="field_12" id="field_12" value="<?php if(!empty($userprofile['field_12'])) {echo  $userprofile['field_12'];}?>">
                                <span class="price">SGD |</span>
                            </div>                              
                            <div class="col-md-6 mb-2">
                                <label class="">What was your latest reported yearly sales?</label>
                            </div>                       
                            <div class="col-md-6 mb-2">
                                <input class="w-100 p-1 price_input" type="number" name="field_13" id="field_13" value="<?php if(!empty($userprofile['field_13'])) {echo  $userprofile['field_13'];}?>">
                                <span class="price">SGD |</span>
                            </div> 
                            <div class="col-md-6 mb-2">
                                <label class="">What is the EBITDA / Operating Profit Margin Percentage? </label>
                            </div>                       
                            <div class="col-md-6 mb-2">
                                <input class="w-100 p-1" type="text" name="field_14" id="field_14" value="<?php if(!empty($userprofile['field_14'])) {echo  $userprofile['field_14'];}?>">
                            </div> 
                            <div class="col-md-6 mb-2">
                                <label class="">List all assets the business owns</label>
                            </div>                       
                            <div class="col-md-6 mb-2">
                                <input class="w-100 p-1" type="text" name="field_15" id="field_15" value="<?php if(!empty($userprofile['field_15'])) {echo  $userprofile['field_15'];}?>">
                            </div> 
                            <div class="col-md-6 mb-2">
                                <label class="">What is the value of physical assets owned by the business?</label>
                            </div>                       
                            <div class="col-md-6 mb-2">
                                <input class="w-100 p-1 price_input" type="number" name="field_16" id="field_16" value="<?php if(!empty($userprofile['field_16'])) {echo  $userprofile['field_16'];}?>">
                                <span class="price">SGD |</span>
                            </div>                           
                            <div class="col-md-6 mb-2">
                                <label class="">Add business and product photos </label>
                            </div>                       
                            <div class="col-md-6 mb-2">
                                <input style="display:none;" type="file" name="add_photo" id="add_photo">
                                <label for="add_photo" class="add_file_btn">Add Photos</label>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="">Add business documents</label>
                            </div>                       
                            <div class="col-md-6 mb-2">
                                <input style="display:none;" type="file" name="add_documents" id="add_documents">
                                <label for="add_documents" class="add_file_btn">Add Documents</label>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="">Attach proof of business for faster verification</label>
                            </div>                       
                            <div class="col-md-6 mb-2">
                                <input style="display:none;" type="file" name="attach_proof" id="attach_proof">
                                <label for="attach_proof" class="add_file_btn">Attach Proof</label>
                            </div>                            
                            <div class="offset-md-6 col-md-6 mb-2">
								<input  type="submit" class="main-btn1 py-2 submit_profile_btn" value="Submit" name="confidentail-submit" >
                            </div>
                        </div>
                    </div>
                </form>
                
                <div class="pro_box requirement_box bg_white buy_plan_section">
				
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <h3>For more introductions select plan</h3>
                        </div>
                        <div class="col-md-12 mb-2">
                            <label class="form-check-label text_bold pb-3  w-100">
                                <input type="radio" name="buy_plan" id="bp" value="1" checked="">Basic
                                <div class="plan_box">
                                    <div class="row">
                                        <div class="col-1 pb-3">
                                            <span class="plan_check"></span>
                                        </div>
                                        <div class="col-11 pb-3">
                                            <p>Speedy profile activation within 1 business day</p>
                                        </div>
                                        <div class="col-1 pb-3">
                                            <span class="plan_check"></span>
                                        </div>
                                        <div class="col-11 pb-3">
                                            <p> Profile marked as 'Premium Plan' and gets higher visibility</p>
                                        </div>
                                        <div class="col-1 pb-3">
                                            <span class="plan_check"></span>
                                        </div>
                                        <div class="col-11 pb-3">
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
                            <label class="form-check-label text_bold pb-3  w-100">
                                <input type="radio" name="buy_plan" id="mp" value="2" >Professional
                            <div class="plan_box">
                                <div class="row">
                                    <div class="col-1 pb-3">
                                        <span class="plan_check"></span>
                                    </div>
                                    <div class="col-11 pb-3">
                                        <p>Speedy profile activation within 1 business day</p>
                                    </div>
                                    <div class="col-1 pb-3">
                                        <span class="plan_check"></span>
                                    </div>
                                    <div class="col-11 pb-3">
                                        <p> Profile marked as 'Premium Plan' and gets higher visibility</p>
                                    </div>
                                    <div class="col-1 pb-3">
                                        <span class="plan_check"></span>
                                    </div>
                                    <div class="col-11 pb-3">
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
                            <label class="form-check-label text_bold pb-3  w-100">
                                <input type="radio" name="buy_plan" id="pp" value="3">Premium
                                <div class="plan_box">
                                    <div class="row">
                                        <div class="col-1 pb-3">
                                            <span class="plan_check"></span>
                                        </div>
                                        <div class="col-11 pb-3">
                                            <p>Speedy profile activation within 1 business day</p>
                                        </div>
                                        <div class="col-1 pb-3">
                                            <span class="plan_check"></span>
                                        </div>
                                        <div class="col-11 pb-3">
                                            <p> Profile marked as 'Premium Plan' and gets higher visibility</p>
                                        </div>
                                        <div class="col-1 pb-3">
                                            <span class="plan_check"></span>
                                        </div>
                                        <div class="col-11 pb-3">
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
                        <div class="col-lg-8 col-md-12 mb-2">
                            <div class="d-flex">
                                <input type="checkbox" class="form-check-input" value="">
                                <label class="form-check-label text_bold pb-3  w-100">
                                    I accept 1% finder's fee (payable post transaction) and other terms of engagement 
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 mb-2">
                            <button id="buy-button" class="main-btn1 ml-auto py-2">Buy</button>
							
                        </div>
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
    
