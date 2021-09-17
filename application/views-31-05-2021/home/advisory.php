<?php 
$array['Youarean'] = array(
				1=>'Advisory',
				2=>'Banker',
				3=>'Auditor',
				4=>'Lawyer',
				5=>'Consultant',
				6=>'Broker'
				
				);

?>
<form role="form" action="<?php echo base_url();?>advisory" method="post" id="search-form-advisory">
<section class="search_result_page">
        <div class="row p-0 m-0">
            <div class="col-lg-3 col-md-12 p-0">
                <div class="result_left">
                    <div class="result_left_top">
                        <h6 class="main_heading px_60 py_20">Filter By</h6>
                        <div class="result_left_bottom px_60">
                            <div class="tab-content">
                                <div id="menu1" class="tab-pane active">
                            <div class="accordion" id="business_drop_filter_1">
						    <div class="drop_filter py-3 bb_1">
                                 <button class="drop_filter_btn p-0 collapsed" type="button" data-toggle="collapse" data-target="#collapsesix1" aria-expanded="false" aria-controls="collapsesix1">
                                    <b><i class="fa fa-briefcase pr-2" aria-hidden="true"></i>You are an </b>
                                    <div class="faq_icon"></div>
                                 </button>
                                 <div id="collapsesix1" class="collapse" aria-labelledby="headingsix" data-parent="#business_drop_filter_1">
                                    <div class="card-body">
                                       <?php foreach($array['Youarean'] as $key=>$Youarean ) { ?>
                                        <label class="form-check-label text_bold">
                                            <input class ="search-filter-advisory" type="checkbox" name="field_1[]" id="bp_<?php echo  $key;?>" value="<?php echo  $key;?>" ><?php echo $Youarean;?>
                                        </label>
                                      <?php }  ?>
                                    </div>
                                 </div>
                              </div>
							<div class="drop_filter py-3 bb_1">
                                 <button class="drop_filter_btn p-0 collapsed" type="button" data-toggle="collapse" data-target="#collapsesix2" aria-expanded="false" aria-controls="collapsesix2">
                                    <b><i class="fa fa-briefcase pr-2" aria-hidden="true"></i>Interested In </b>
                                    <div class="faq_icon"></div>
                                 </button>
                                 <div id="collapsesix2" class="collapse" aria-labelledby="headingsix" data-parent="#business_drop_filter_1">
                                    <div class="card-body">
                                         <label class="form-check-label text_bold">
                                            <input class="search-filter-advisory" type="checkbox" name="interested_in[]" id="bp_1" value="1" >Acquiring / Buying a Business
                                        </label>
										<label class="form-check-label text_bold">
                                            <input class="search-filter-advisory" type="checkbox" name="interested_in[]" id="mp_1" value="2">Investing in a Business
                                        </label>
                                        <label class="form-check-label text_bold">
                                            <input class="search-filter-advisory" type="checkbox" name="interested_in[]" id="pp_1" value="3">Lending to a Business
                                        </label>
                                    </div>
                                 </div>
                              </div>
								
						</div>	
						
						 <div class="py-2">
                                        <div class="form-inline py-3 my-lg-0">
                                        <button class="btn filter_search_btn my-2 my-sm-0" type="submit">Locations<i class="fa fa-map-marker  pl-2" aria-hidden="true"></i></button>
                                          <input name="field_5" class="filter_search search-filter-advisory-address" type="search" placeholder="Filter.." aria-label="Search">   
										  </div>                                   
                                     </div>
							
                                    <hr class="m-0">
									
									
									
                                  <div class="accordion" id="business_drop_filter_2">
									<div class="drop_filter py-3 bb_1">
									 <button class="drop_filter_btn p-0 collapsed" type="button" data-toggle="collapse" data-target="#collapsesix3" aria-expanded="false" aria-controls="collapsesix3">
										<b><i class="fa fa-briefcase pr-2" aria-hidden="true"></i>Company Sector </b>
										<div class="faq_icon"></div>
									 </button>
									 <div id="collapsesix3" class="collapse" aria-labelledby="headingsix" data-parent="#business_drop_filter_2">
										<div class="card-body">
										   <?php foreach($businessindustry as $businessindustry){ ?>
											<label class="form-check-label text_bold">
												<i class="fa fa-play pr-3" aria-hidden="true"></i><input type="checkbox" class="form-check-input search-filter-buyer" name="field_9[]" value="<?php echo $businessindustry['name'];?>"><?php echo $businessindustry['name'];?>
											</label>
											<?php } ?>
										</div>
									 </div>
								  </div>
								  <div class="drop_filter py-3 bb_1">
									 <button class="drop_filter_btn p-0 collapsed" type="button" data-toggle="collapse" data-target="#collapsesix4" aria-expanded="false" aria-controls="collapsesix4">
										<b><i class="fa fa-briefcase pr-2" aria-hidden="true"></i>Industries Preference </b>
										<div class="faq_icon"></div>
									 </button>
									 <div id="collapsesix4" class="collapse" aria-labelledby="headingsix" data-parent="#business_drop_filter_2">
										<div class="card-body">
										  <?php foreach($businessindustry_1 as $businessindustry_1){ ?>
                                        <label class="form-check-label text_bold">
                                            <i class="fa fa-play pr-3" aria-hidden="true"></i><input name="field_2[]" type="checkbox" class="form-check-input search-filter-buyer" value="<?php echo $businessindustry_1['name'];?>"><?php echo $businessindustry_1['name'];?>
                                        </label>
										<?php } ?>
										</div>
									 </div>
								  </div>
								  
							  </div>	
							  <div class="accordion" id="business_drop_filter">
                              <div class="drop_filter py-3 bt_1 bb_1">
                                 <button class="drop_filter_btn p-0" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <b>Investment Size</b>
                                    <div class="faq_icon"></div>
                                 </button>
                                 <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#business_drop_filter">
                                    <div class="card-body">
                                       <div class="row mt-2">
                                          <div class="col-md-4"><label>From</label></div>
                                          <div class="col-md-4">
                                             <select id="invest-1" name="invest-1" class="investclsadvisory">
                                                <option value="">From</option>
                                                <?php for($i=1; $i<=10; $i++){?>
                                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                <?php } ?>
                                                <option value="11">10+</option>
                                             </select>
                                          </div>
                                          <div class="col-md-4">
                                             <select id="invest-2" name="invest-2" class="investclsadvisory">
                                                <option value="K">K</option>
                                                <option value="M">M</option>
                                                <option value="B">B</option>
                                             </select>
                                          </div>
                                          <div class="col-md-4"><label>To</label></div>
                                          <div class="col-md-4">
                                             <select id="invest-3" name="invest-3" class="investclsadvisory">
                                                <option value="">To</option>
                                                <?php for($i=1; $i<=10; $i++){?>
                                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                <?php } ?>
                                                <option value="11">10+</option>
                                             </select>
                                          </div>
                                          <div class="col-md-4">
                                             <select  id="invest-4" name="invest-4" class="investclsadvisory">
                                                <option value="K">K</option>
                                                <option value="M">M</option>
                                                <option value="B">B</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              
                                          
                                       

                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 p-0">
                <div class="result_right py_20 px_60">    
                    <div class="tab-content">
                        <div id="home" class="tab-pane active">
                            <h5 class="pb-2"><b>Advisory</b></h5>
                            
                            <div class="result_right_body">
                                <div class="row">
									<div class="offset-md-8 col-md-4 col-sm-6 py-3">
                              <div class="dropdown sort_by_drop w-100 float-right">
                                 <select name="sortby" class="main_box dropdown-toggle px-4 search-filter-buyer-change" name="sort">
                                    <option value="">Sort By</button></option>
                                    <option value="1">Price Low to High</option>
                                    <option value="2">Price High to Low</option>
                                 </select>
                              </div>
                           </div>
                                 <?php /*if(!empty($allbuyerProfile)) {
				foreach($allbuyerProfile as $allbuyerProfile){ ?>
                <div class="col-md-4">
                    <a href="#">
                        <div class="c_box d-flex flex-column w-100 mb-4">
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
			<?php } } */?> 
			
			 <!--<div class="col-md-12 d-flex justify-content-center align-items-center pt-3">
                                        <button class="pagination_button">Previous</button>
                                        <button class="pagination_button">Next</button>
                                    </div>-->
			<div class="row" id='postsListadvisory'> </div>
			<div id='pagination_advisory' class="text-center my-5 v-page"></div>
                                   

                                </div>
                            </div>
                        </div>
                      
					</div>
                </div>
            </div>
        </div>
    </section>
</form>	
