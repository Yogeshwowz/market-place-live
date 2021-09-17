<?php 
$array['Youarean'] = array(
				1=>'Individual Investor / Buyer',
				2=>'Corporate Investor / Buyer',
				3=>'Bank',
				4=>'Credit Union',
				5=>'Accounting Firm',
				6=>'Business Broker',
				7=>'Investment Bank',
				8=>'Law Firm',
				9=>'M&amp;A Advisor',
				10=>'Merchant Bank',
				11=>'Commercial Real Estate Broker',
				12=>'Venture Capital Firm',
				13=>'Private Equity Firm',
				14=>'Family Office',
				15=>'Hedge Fund'
				);

?>


<form role="form" action="<?php echo base_url();?>sellers" method="post" id="search-form">
   <section class="search_result_page">
      <div class="row p-0 m-0">
         <div class="col-lg-3 col-md-12 p-0">
            <div class="result_left">
               <div class="result_left_top">
                  <h6 class="main_heading px_60 py_20">Filter By</h6>
				  <!-- Nav tabs -->
                        <ul class="nav px-3">
                            <li class="nav-item">
                              <a id="home_a" class="nav-link filter_btn active" data-toggle="tab" href="#home" rel="1">Businesses</a>                              
                            </li>
                            <li class="nav-item">
                              <a  id="menu1_a" class="nav-link filter_btn" data-toggle="tab" href="#menu1" rel="2">Investors &amp; Buyers</a>                              
                            </li>
                        </ul>
                  <div class="result_left_bottom px_60">
                     <div class="tab-content">
                        <div id="home" class="tab-pane active">
                          <div class="accordion" id="business_drop_filter_1">
						    <div class="drop_filter py-3 bb_1">
                                 <button class="drop_filter_btn p-0 collapsed" type="button" data-toggle="collapse" data-target="#collapsesix1" aria-expanded="false" aria-controls="collapsesix1">
                                    <b><i class="fa fa-briefcase pr-2" aria-hidden="true"></i>You are an </b>
                                    <div class="faq_icon"></div>
                                 </button>
                                 <div id="collapsesix1" class="collapse" aria-labelledby="headingsix" data-parent="#business_drop_filter_1">
                                    <div class="card-body">
                                        <label class="form-check-label text_bold">
										  <input class ="search-filter" type="checkbox" name="field_1[]" id="bp" value="1" >Business Owner / Director
										  </label>
										  <label class="form-check-label text_bold">
										  <input class ="search-filter" type="checkbox" name="field_1[]" id="mp" value="2">Management Member
										  </label>
										  <label class="form-check-label text_bold">
										  <input  class ="search-filter" type="checkbox" name="field_1[]" id="pp" value="3">Advisor / Business Broker
										  </label>
                                    </div>
                                 </div>
                              </div>
						       <div class="drop_filter py-3 bb_1">
                                 <button class="drop_filter_btn p-0 collapsed" type="button" data-toggle="collapse" data-target="#collapsesix2" aria-expanded="false" aria-controls="collapsesix2">
                                    <b><i class="fa fa-briefcase pr-2" aria-hidden="true"></i>You are interested in </b>
                                    <div class="faq_icon"></div>
                                 </button>
                                 <div id="collapsesix2" class="collapse" aria-labelledby="headingsix" data-parent="#business_drop_filter_1">
                                    <div class="card-body">
									<label class="form-check-label text_bold">
									<input class="search-filter" type="checkbox" name="interested_in[]" id="bp_1" value="1" >Full sale of business
									</label>
									<label class="form-check-label text_bold">
									<input class="search-filter" type="checkbox" name="interested_in[]" id="mp_1" value="2">Partial stake sale of business/investment
									</label>
									<label class="form-check-label text_bold">
									<input class="search-filter" type="checkbox" name="interested_in[]" id="pp_1" value="3">Loan for business
									</label>
                                    </div>
                                 </div>
                              </div>
						   
						   </div>
						   
                          
                           <hr class="m-0">
                           <div class="py-2">
                              <div class="form-inline py-3 my-lg-0">
                                 <button class="btn filter_search_btn my-2 my-sm-0" type="submit">Locations<i class="fa fa-map-marker  pl-2" aria-hidden="true"></i></button>
                                 <input name="field_5" class="filter_search search-filter-address" type="search" placeholder="Filter.." aria-label="Search">   
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
                                             <select id="invest-1" name="invest-1" class="investcls">
                                                <option value="">From</option>
                                                <?php for($i=1; $i<=10; $i++){?>
                                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                <?php } ?>
                                                <option value="11">10+</option>
                                             </select>
                                          </div>
                                          <div class="col-md-4">
                                             <select id="invest-2" name="invest-2" class="investcls">
                                                <option value="K">K</option>
                                                <option value="M">M</option>
                                                <option value="B">B</option>
                                             </select>
                                          </div>
                                          <div class="col-md-4"><label>To</label></div>
                                          <div class="col-md-4">
                                             <select id="invest-3" name="invest-3" class="investcls">
                                                <option value="">To</option>
                                                <?php for($i=1; $i<=10; $i++){?>
                                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                <?php } ?>
                                                <option value="11">10+</option>
                                             </select>
                                          </div>
                                          <div class="col-md-4">
                                             <select  id="invest-4" name="invest-4" class="investcls">
                                                <option value="K">K</option>
                                                <option value="M">M</option>
                                                <option value="B">B</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="drop_filter py-3 bb_1">
                                 <button class="drop_filter_btn p-0 collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                    <b>Year Established</b>
                                    <div class="faq_icon"></div>
                                 </button>
                                 <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#business_drop_filter">
                                    <div class="card-body">
                                       <select class="js-example-basic-single search-filter-change" name="field_3" id="field_3" required='true'>
                                          <option selected disabled hidden style='display: none' value=''></option>
                                          <?php for($i=2021; $i>1990;$i--){?>
                                          <option value="<?php echo $i;?>" ><?php echo $i;?></option>
                                          <?php } ?>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="drop_filter py-3 bb_1">
                                 <button class="drop_filter_btn p-0 collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                    <b>Legal Entity</b>
                                    <div class="faq_icon"></div>
                                 </button>
                                 <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#business_drop_filter">
                                    <div class="card-body">
                                       <div class="pt-4 pb-2">
                                          <label class="form-check-label text_bold">
                                          <input class="search-filter" type="checkbox" name="field_7[]" id="bp_2" value="1" >Sole Proprietorship/Sole Trader
                                          </label>
                                          <label class="form-check-label text_bold">
                                          <input  class="search-filter"type="checkbox" name="field_7[]" id="mp_2" value="2">General Partnership
                                          </label>
                                          <label class="form-check-label text_bold">
                                          <input class="search-filter" type="checkbox" name="field_7[]" id="pp_2" value="3">Limited Liability Partnership (LLP)
                                          </label>
                                          <label class="form-check-label text_bold">
                                          <input  class="search-filter" type="checkbox" name="field_7[]" id="pp_3" value="4">Limited Liability Company (LLC)
                                          </label>
                                          <label class="form-check-label text_bold">
                                          <input  class="search-filter" type="checkbox" name="field_7[]" id="pp_4" value="5">Private Limited Company
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
						 <div id="menu1" class="tab-pane">
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
                                            <input class ="search-filter-buyer" type="checkbox" name="field_1_bu[]"  value="<?php echo  $key;?>" ><?php echo $Youarean;?>
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
                                            <input class="search-filter-buyer" type="checkbox" name="interested_in_bu[]"  value="1" >Acquiring / Buying a Business
                                        </label>
										<label class="form-check-label text_bold">
                                            <input class="search-filter-buyer" type="checkbox" name="interested_in_bu[]"  value="2">Investing in a Business
                                        </label>
                                        <label class="form-check-label text_bold">
                                            <input class="search-filter-buyer" type="checkbox" name="interested_in_bu[]"  value="3">Lending to a Business
                                        </label>
                                    </div>
                                 </div>
                              </div>	
								
						</div>	
						
						 <div class="py-2">
                                        <div class="form-inline py-3 my-lg-0">
                                        <button class="btn filter_search_btn my-2 my-sm-0" type="submit">Locations<i class="fa fa-map-marker  pl-2" aria-hidden="true"></i></button>
                                          <input name="field_5_bu" class="filter_search search-filter-buyer-address" type="search" placeholder="Filter.." aria-label="Search">   
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
                                            <i class="fa fa-play pr-3" aria-hidden="true"></i><input name="field_2_bu[]" type="checkbox" class="form-check-input search-filter-buyer" value="<?php echo $businessindustry_1['name'];?>"><?php echo $businessindustry_1['name'];?>
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
                                             <select id="invest-1-bu" name="invest-1-bu" class="investclsbuyer">
                                                <option value="">From</option>
                                                <?php for($i=1; $i<=10; $i++){?>
                                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                <?php } ?>
                                                <option value="11">10+</option>
                                             </select>
                                          </div>
                                          <div class="col-md-4">
                                             <select id="invest-2-bu" name="invest-2-bu" class="investclsbuyer">
                                                <option value="K">K</option>
                                                <option value="M">M</option>
                                                <option value="B">B</option>
                                             </select>
                                          </div>
                                          <div class="col-md-4"><label>To</label></div>
                                          <div class="col-md-4">
                                             <select id="invest-3-bu" name="invest-3-bu" class="investclsbuyer">
                                                <option value="">To</option>
                                                <?php for($i=1; $i<=10; $i++){?>
                                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                <?php } ?>
                                                <option value="11">10+</option>
                                             </select>
                                          </div>
                                          <div class="col-md-4">
                                             <select  id="invest-4-bu" name="invest-4-bu" class="investclsbuyer">
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
                     <h5 class="pb-2"><b>Businesses for Sale and Investment Opportunities</b></h5>
                     <!--<p class="pb-2">Results 1 - 18 of 15623 - Businesses for Sale and Investment Opportunities. Buy or Invest in a Business.</p>-->
                     <div class="result_right_body">
                        <div class="row">
                           <div class="offset-md-8 col-md-4 col-sm-6 py-3">
                              <div class="dropdown sort_by_drop w-100 float-right">
                                 <select name="sortby" class="main_box dropdown-toggle px-4 search-filter-change" name="sort">
                                    <option value="">Sort By</button></option>
                                    <option value="1">Price Low to High</option>
                                    <option value="2">Price High to Low</option>
                                 </select>
                              </div>
                           </div>
                           <div class="row w-100" id='postsList'> </div>
                           <div id='pagination_seller' class="text-center my-5 v-page"></div>
						   
						   <div class="row" id='postsListbuyer'> </div>
			              <div id='pagination_buyer_search' class="text-center my-5 v-page"></div>
                        </div>
                     </div>
                  </div>
                  
			   </div>
            </div>
         </div>
      </div>
   </section>
</form>
