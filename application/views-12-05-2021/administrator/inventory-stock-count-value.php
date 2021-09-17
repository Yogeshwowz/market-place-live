<div class="header bg-primary">
   <div class="container-fluid">
      <div class="header-body">
         <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
               <h6 class="h2 text-white d-inline-block mb-0">Dashoard</h6>
               <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                     <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="fas fa-home"></i></a></li>
                     <li class="breadcrumb-item"><a href="#">Manage Inventory Stock Reports</a></li>
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
               <div class="card-body">
                  <!-- Card header -->
                  <div class="row">
                     <form  action="#" method="post" role="form" novalidate=""   id="my_stock_form">
					 
						<div  id="my_stock_form_success" class="alert alert-success alert-dismissible fade show" role="alert">
						<span class="alert-icon"><i class="ni ni-like-2"></i></span>
						<span class="alert-text">Invertory Stock Value has been added successfully</span>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>
                        <div class="col-md-12 com-cls-8" id="catDiv">
                           <div class="row">
                              <div class="col-md-8 com-cls-8">
                                 <label class="form-control-label" for="category">Category </label>
                                 <select name="selectcategory" class="form-control search-category category-common-filter" id="selectcategory">
                                    <option value="">Select Category</option>
                                    <?php foreach($category as $category){?>
                                    <option value="<?php echo $category->id;?>" ><?php echo $category->category;?></option>
                                    <?php } ?>
                                 </select>
                              </div>
                              <div class="col-md-4 com-cls-4">
                                 <label class="form-control-label" for="add-more-category">
                                    <div data-toggle="modal" data-target="#modal-default">
                                       <i class="ni ni-fat-add add-more-cls"></i>
                                       <span class="add-more-cls">Add More Category</span>
                                    </div>
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-8 com-cls-8 pt-3 by-default-hide" id="program_levelDiv">
                           <label class="form-control-label" for="program_level">Program level</label>
                           <select name="program_level" class="form-control search-program-levels common-filter-stock" id="program_level">
                              <option value="">Program level</option>
                              <?php foreach($program_level as $key=>$value){?>
                              <option value="<?php echo $key;?>"><?php echo $value;?></option>
                              <?php } ?>
                           </select>
                        </div>
                        <div class="col-md-12 com-cls-8 pt-3 by-default-hide" id="themeDiv">
                           <div class="row">
                              <div class="col-md-8 com-cls-8">
                                 <label class="form-control-label" for="theme_year">Theme Year </label>
                                 <select name="selecttheme_year" class="form-control search-theme-year common-filter-location" id="selecttheme_year">
                                    <option value="">Select Theme Year</option>
                                    <?php foreach($themeYear as $themeYear){?>
                                    <option value="<?php echo $themeYear->id;?>"><?php echo $themeYear->theme_year;?></option>
                                    <?php } ?>
                                 </select>
                              </div>
                              <div class="col-md-4 com-cls-4">
                                 <label class="form-control-label" for="add-more-category">
                                    <div data-toggle="modal" data-target="#modal-default-theme-year">
                                       <i class="ni ni-fat-add add-more-cls"></i>
                                       <span class="add-more-cls">Add More Theme Year</span>
                                    </div>
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12  com-cls-8 pt-3 by-default-hide" id="locationDiv">
                           <div class="row">
                              <div class="col-md-8 com-cls-8">
                                 <label class="form-control-label" for="select_location">Location</label>
                                 <select name="select_location" class="form-control search-location common-filter-location" id="select_location">
                                    <option value="">Select Location</option>
                                    <?php foreach($location as $location){?>
                                    <option value="<?php echo $location->id;?>"><?php echo $location->location;?></option>
                                    <?php } ?>
                                 </select>
                              </div>
                              <div class="col-md-4 com-cls-4">
                                 <label class="form-control-label" for="add-more-location">
                                    <div data-toggle="modal" data-target="#modal-default-location">
                                       <i class="ni ni-fat-add add-more-cls"></i>
                                       <span class="add-more-cls">Add More Location</span>
                                    </div>
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 com-cls-8 pt-3 by-default-hide" id="locationDiv1">
                           <div class="row">
                              <div class="col-md-8 com-cls-8">
                                 <label class="form-control-label" for="select_location">Truck/Trailer</label>
                                 <select name="select_truck" class="form-control search-truck" id="select_truck">
                                    <option value="">Truck/Trailer</option>
                                    <?php foreach($truck as $truck){?>
                                    <option value="<?php echo $truck->id;?>"><?php echo $truck->trucklocation;?></option>
                                    <?php } ?>
                                 </select>
                              </div>
                              <div class="col-md-4 com-cls-4">
                                 <label class="form-control-label" for="add-more-truck">
                                    <div data-toggle="modal" data-target="#modal-default-truck">
                                       <i class="ni ni-fat-add add-more-cls"></i>
                                       <span class="add-more-cls">Add More truck</span>
                                    </div>
                                 </label>
                              </div>
                           </div>
                        </div>
                        <!------------------ Pre-Launch School Supplies------------------>
                        <div class="by-default-hide pre-launch-elementry" style="clear: both;"></div>
                        <div class="col-md-7 com-cls-8 pt-3 by-default-hide pre-launch-elementry">
                            <div class="col-md-12 com-cls-8 pt-5 by-default-hide pre-launch-elementry">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pre-launch-elementry">
    						   <label class="form-control-label" for="coming_yard_signs_count">Coming Yard Signs</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pre-launch-elementry">
    						   <input name="coming_yard_signs_count" type="text" class="form-control filter_keyup numbervalidation" id="coming_yard_signs_count" placeholder="Count" rel="coming_yard_signs">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pre-launch-elementry" >
    						   <input name="coming_yard_signs_value" type="text" class="form-control filter_keyup numberdecimalcls" id="coming_yard_signs_value" placeholder="Value" rel="coming_yard_signs">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide pre-launch-elementry">
    						<div class="col-md-12 com-cls-8 pt-3 by-default-hide pre-launch-elementry" >
    						   <label class="form-control-label">Total</label>
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide pre-launch-elementry count-class-hide" >
    						   <input name="coming_yard_signs_total_count" type="text" class="form-control " id="coming_yard_signs_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide pre-launch-elementry" >
    						   <input name="coming_yard_signs_total" type="text" class="form-control" id="coming_yard_signs_total" placeholder="Total" disabled>
    						</div>
    					</div>
    					
    					<div class="col-md-7 com-cls-8 pt-3 by-default-hide pre-launch-elementry">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pre-launch-elementry" style="clear:both;">
                                <label class="form-control-label" for="here_yard_signs_count">Here Yard Signs</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide pre-launch-elementry">
                               <input name="here_yard_signs_count" type="text" class="form-control filter_keyup numbervalidation" id="here_yard_signs_count" placeholder="Count" rel="here_yard_signs">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pre-launch-elementry" >
                               <input name="here_yard_signs_value" type="text" class="form-control  filter_keyup numberdecimalcls" id="here_yard_signs_value" placeholder="value" rel="here_yard_signs">
                            </div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide pre-launch-elementry">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide pre-launch-elementry count-class-hide">
                                <input name="here_yard_signs_total_count" type="text" class="form-control " id="here_yard_signs_total_count" placeholder="Count">
                            </div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide pre-launch-elementry">
                                <input name="here_yard_signs_total" type="text" class="form-control" id="here_yard_signs_total" placeholder="Total" disabled>
                            </div>
    					</div>
                        
                        <div class="col-md-7 com-cls-8 pt-3 by-default-hide pre-launch-elementry">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pre-launch-elementry" style="clear:both;">
                                <label class="form-control-label" for="sign_stakes">Sign Stakes</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide pre-launch-elementry">
                               <input name="sign_stakes_count" type="text" class="form-control filter_keyup numbervalidation" id="sign_stakes_count" placeholder="Count" rel="sign_stakes">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pre-launch-elementry">
                               <input name="sign_stakes_value" type="text" class="form-control filter_keyup numberdecimalcls" id="sign_stakes_value" placeholder="Value" rel="sign_stakes">
                            </div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide pre-launch-elementry">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide pre-launch-elementry count-class-hide">
                               <input name="sign_stakes_total_count" type="text" class="form-control" id="sign_stakes_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide pre-launch-elementry">
                               <input name="sign_stakes_total" type="text" class="form-control" id="sign_stakes_total" placeholder="Total" disabled>
                            </div>
    					</div>
                        
                        <div class="col-md-7 com-cls-8 pt-3 by-default-hide pre-launch-elementry">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pre-launch-elementry" style="clear:both;">
                                <label class="form-control-label" for="apex_is_here_letter_signs_stakes">Apex is Here Letter Signs w/ stakes</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide pre-launch-elementry">
                               <input name="apex_is_here_letter_signs_stakes_count" type="text" class="form-control filter_keyup numbervalidation" id="apex_is_here_letter_signs_stakes_count" placeholder="Count" rel="apex_is_here_letter_signs_stakes">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pre-launch-elementry">
                                <input name="apex_is_here_letter_signs_stakes_value" type="text" class="form-control filter_keyup numberdecimalcls" id="apex_is_here_letter_signs_stakes_value" placeholder="Value" rel="apex_is_here_letter_signs_stakes">
                            </div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide pre-launch-elementry">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide pre-launch-elementry count-class-hide">
                               <input name="apex_is_here_letter_signs_stakes_total_count" type="text" class="form-control" id="apex_is_here_letter_signs_stakes_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide pre-launch-elementry">
                               <input name="apex_is_here_letter_signs_stakes_total" type="text" class="form-control" id="apex_is_here_letter_signs_stakes_total" placeholder="Total" disabled>
                            </div>
    					</div>
    					
    					<div class="col-md-7 com-cls-8 pt-3 by-default-hide pre-launch-elementry">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pre-launch-elementry" id="coming_soon_posters_div">
                                <label class="form-control-label" for="coming_soon_posters">Coming Soon Posters</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide pre-launch-elementry">
                                <input name="coming_soon_posters_count" type="text" class="form-control filter_keyup numbervalidation" id="coming_soon_posters_count" placeholder="Count" rel="coming_soon_posters">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pre-launch-elementry">
                           <input name="coming_soon_posters_value" type="text" class="form-control filter_keyup numberdecimalcls" id="coming_soon_posters_value" placeholder="Value" rel="coming_soon_posters">
                        </div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide pre-launch-elementry">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide pre-launch-elementry count-class-hide">
                               <input name="coming_soon_posters_total_count" type="text" class="form-control" id="coming_soon_posters_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide pre-launch-elementry">
                               <input name="coming_soon_posters_total" type="text" class="form-control" id="coming_soon_posters_total" placeholder="Total" disabled>
                            </div>
    					</div>
    					
    					<div class="col-md-7 com-cls-8 pt-3 by-default-hide pre-launch-elementry">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pre-launch-elementry" id="apex_banner_div">
                               <label class="form-control-label" for="apex_banner">Apex Banner </label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide pre-launch-elementry">
                               <input name="apex_banner_count" type="text" class="form-control filter_keyup numbervalidation" id="apex_banner_count" placeholder="Count" rel="apex_banner">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pre-launch-elementry">
                               <input name="apex_banner_value" type="text" class="form-control filter_keyup numberdecimalcls" id="apex_banner_value" placeholder="Value" rel="apex_banner">
                            </div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide pre-launch-elementry">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide pre-launch-elementry count-class-hide">
                               <input name="apex_banner_total_count" type="text" class="form-control" id="apex_banner_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide pre-launch-elementry">
                               <input name="apex_banner_total" type="text" class="form-control" id="apex_banner_total" placeholder="Total" disabled>
                            </div>
    					</div>
						
						
						<!--------------------- pre-launch-middle ----------------->
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide pre-launch-middle">
						<div class="col-md-12 com-cls-8 pt-5 by-default-hide pre-launch-middle">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pre-launch-middle" id="anython_banner_div">
                               <label class="form-control-label" for="anython_banner">Anython Banner </label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide pre-launch-middle">
                               <input name="anython_banner_count" type="text" class="form-control filter_keyup numbervalidation" id="anython_banner_count" placeholder="Count" rel="anython_banner">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pre-launch-middle">
                               <input name="anython_banner_value" type="text" class="form-control filter_keyup numberdecimalcls" id="anython_banner_value" placeholder="Value" rel="anython_banner">
                            </div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide pre-launch-middle">
						<div class="col-md-12 com-cls-8 pt-3 by-default-hide pre-launch-middle" >
    						   <label class="form-control-label">Total</label>
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide pre-launch-middle count-class-hide">
                               <input name="anython_banner_total_count" type="text" class="form-control" id="anython_banner_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide pre-launch-middle">
                               <input name="anython_banner_total" type="text" class="form-control" id="anython_banner_total" placeholder="Total" disabled>
                            </div>
    					</div>
						
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide pre-launch-middle">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pre-launch-middle" id="cB_coming_soon_poster_div">
                               <label class="form-control-label" for="cB_coming_soon_poster">CB Coming Soon Poster</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide pre-launch-middle">
                               <input name="cB_coming_soon_poster_count" type="text" class="form-control filter_keyup numbervalidation" id="cB_coming_soon_poster_count" placeholder="Count" rel="cB_coming_soon_poster">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pre-launch-middle">
                               <input name="cB_coming_soon_poster_value" type="text" class="form-control filter_keyup numberdecimalcls" id="cB_coming_soon_poster_value" placeholder="Value" rel="cB_coming_soon_poster">
                            </div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide pre-launch-middle">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide pre-launch-middle count-class-hide">
                               <input name="cB_coming_soon_poster_total_count" type="text" class="form-control" id="cB_coming_soon_poster_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide pre-launch-middle">
                               <input name="cB_coming_soon_poster_total" type="text" class="form-control" id="cB_coming_soon_poster_total" placeholder="Total" disabled>
                            </div>
    					</div>
						
						
                        <!---------------- End Here ------------------------> 
                        <!------------------ Teacher Huddle & Program Supplies------------------>
                      <div class="col-md-7 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
					  <div class="col-md-12 com-cls-8 pt-5 by-default-hide teacher-huddle-elementary"> </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <label class="form-control-label" for="CTH_White_Bag">CB Coming Soon Poster</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="CTH_White_Bag_count" type="text" class="form-control filter_keyup numbervalidation" id="CTH_White_Bag_count" placeholder="Count" rel="CTH_White_Bag">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="CTH_White_Bag_value" type="text" class="form-control filter_keyup numberdecimalcls" id="CTH_White_Bag_value" placeholder="Value" rel="CTH_White_Bag">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
						<div class="col-md-12 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">Total</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary count-class-hide">
                               <input name="CTH_White_Bag_total_count" type="text" class="form-control" id="CTH_White_Bag_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="CTH_White_Bag_total" type="text" class="form-control" id="CTH_White_Bag_total" placeholder="Total" disabled>
                            </div>
    					</div>
						 <div class="col-md-7 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <label class="form-control-label" for="TH_Black_Bag">TH Black Bag (36 large & 36 xlarge)</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="TH_Black_Bag_count" type="text" class="form-control filter_keyup numbervalidation" id="TH_Black_Bag_count" placeholder="Count" rel="TH_Black_Bag">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="TH_Black_Bag_value" type="text" class="form-control filter_keyup numberdecimalcls" id="TH_Black_Bag_value" placeholder="Value" rel="TH_Black_Bag">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary count-class-hide">
                               <input name="TH_Black_Bag_total_count" type="text" class="form-control" id="TH_Black_Bag_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="TH_Black_Bag_total" type="text" class="form-control" id="TH_Black_Bag_total" placeholder="Total" disabled>
                            </div>
    					</div>
						 <div class="col-md-7 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <label class="form-control-label" for="Class_Poster_Live">Class Poster - Live</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Class_Poster_Live_count" type="text" class="form-control filter_keyup numbervalidation" id="Class_Poster_Live_count" placeholder="Count" rel="Class_Poster_Live">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Class_Poster_Live_value" type="text" class="form-control filter_keyup numberdecimalcls" id="Class_Poster_Live_value" placeholder="Value" rel="Class_Poster_Live">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary count-class-hide">
                               <input name="Class_Poster_Live_total_count" type="text" class="form-control" id="Class_Poster_Live_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Class_Poster_Live_total" type="text" class="form-control" id="Class_Poster_Live_total" placeholder="Total" disabled>
                            </div>
    					</div>
						
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <label class="form-control-label" for="Class_Poster_Flex">Class Poster Flex</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Class_Poster_Flex_count" type="text" class="form-control filter_keyup numbervalidation" id="Class_Poster_Flex_count" placeholder="Count" rel="Class_Poster_Flex">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Class_Poster_Flex_value" type="text" class="form-control filter_keyup numberdecimalcls" id="Class_Poster_Flex_value" placeholder="Value" rel="Class_Poster_Flex">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary count-class-hide">
                               <input name="Class_Poster_Flex_total_count" type="text" class="form-control" id="Class_Poster_Flex_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Class_Poster_Flex_total" type="text" class="form-control" id="Class_Poster_Flex_total" placeholder="Total" disabled>
                            </div>
    					</div>
						
						
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <label class="form-control-label" for="Character_Cube">Character Cube</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Character_Cube_count" type="text" class="form-control filter_keyup numbervalidation" id="Character_Cube_count" placeholder="Count" rel="Character_Cube">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Character_Cube_value" type="text" class="form-control filter_keyup numberdecimalcls" id="Character_Cube_value" placeholder="Value" rel="Character_Cube">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary count-class-hide">
                               <input name="Character_Cube_total_count" type="text" class="form-control" id="Character_Cube_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Character_Cube_total" type="text" class="form-control" id="Character_Cube_total" placeholder="Total" disabled>
                            </div>
    					</div>
						
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <label class="form-control-label" for="Teacher_Playbook_1">Teacher Playbook - Teacher Shirts (blue)</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Teacher_Playbook_1_count" type="text" class="form-control filter_keyup numbervalidation" id="Teacher_Playbook_1_count" placeholder="Count" rel="Teacher_Playbook_1">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Teacher_Playbook_1_value" type="text" class="form-control filter_keyup numberdecimalcls" id="Teacher_Playbook_1_value" placeholder="Value" rel="Teacher_Playbook_1">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary count-class-hide">
                               <input name="Teacher_Playbook_1_total_count" type="text" class="form-control" id="Teacher_Playbook_1_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Teacher_Playbook_1_total" type="text" class="form-control" id="Teacher_Playbook_1_total" placeholder="Total" disabled>
                            </div>
    					</div>
					    
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <label class="form-control-label" for="Teacher_Playbook_2">eacher Playbook - No Teacher Shirts (orange)</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Teacher_Playbook_2_count" type="text" class="form-control filter_keyup numbervalidation" id="Teacher_Playbook_2_count" placeholder="Count" rel="Teacher_Playbook_2">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Teacher_Playbook_2_value" type="text" class="form-control filter_keyup numberdecimalcls" id="Teacher_Playbook_2_value" placeholder="Value" rel="Teacher_Playbook_2">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary count-class-hide">
                               <input name="Teacher_Playbook_2_total_count" type="text" class="form-control" id="Teacher_Playbook_2_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Teacher_Playbook_2_total" type="text" class="form-control" id="Teacher_Playbook_2_total" placeholder="Total" disabled>
                            </div>
    					</div>
                        <div class="col-md-7 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <label class="form-control-label" for="Teacher_Medal">Teacher Medal</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Teacher_Medal_count" type="text" class="form-control filter_keyup numbervalidation" id="Teacher_Medal_count" placeholder="Count" rel="Teacher_Medal">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Teacher_Medal_value" type="text" class="form-control filter_keyup numberdecimalcls" id="Teacher_Medal_value" placeholder="Value" rel="Teacher_Medal">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary count-class-hide">
                               <input name="Teacher_Medal_total_count" type="text" class="form-control" id="Teacher_Medal_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Teacher_Medal_total" type="text" class="form-control" id="Teacher_Medal_total" placeholder="Total" disabled>
                            </div>
    					</div>
						
                       <div class="col-md-7 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <label class="form-control-label" for="Captain_Cards">Captain Cards</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Captain_Cards_count" type="text" class="form-control filter_keyup numbervalidation" id="Captain_Cards_count" placeholder="Count" rel="Captain_Cards">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Captain_Cards_value" type="text" class="form-control filter_keyup numberdecimalcls" id="Captain_Cards_value" placeholder="Value" rel="Captain_Cards">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary count-class-hide">
                               <input name="Captain_Cards_total_count" type="text" class="form-control" id="Captain_Cards_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Captain_Cards_total" type="text" class="form-control" id="Captain_Cards_total" placeholder="Total" disabled>
                            </div>
    					</div>
                       <div class="col-md-7 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <label class="form-control-label" for="Bracelets">Bracelets</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Bracelets_count" type="text" class="form-control filter_keyup numbervalidation" id="Bracelets_count" placeholder="Count" rel="Bracelets">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Bracelets_value" type="text" class="form-control filter_keyup numberdecimalcls" id="Bracelets_value" placeholder="Value" rel="Bracelets">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary count-class-hide">
                               <input name="Bracelets_total_count" type="text" class="form-control" id="Bracelets_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Bracelets_total" type="text" class="form-control" id="Bracelets_total" placeholder="Total" disabled>
                            </div>
    					</div>
                       <div class="col-md-7 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <label class="form-control-label" for="Captain_Bracelets">Captain Bracelets</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Captain_Bracelets_count" type="text" class="form-control filter_keyup numbervalidation" id="Captain_Bracelets_count" placeholder="Count" rel="Captain_Bracelets">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Captain_Bracelets_value" type="text" class="form-control filter_keyup numberdecimalcls" id="Captain_Bracelets_value" placeholder="Value" rel="Captain_Bracelets">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary count-class-hide">
                               <input name="Captain_Bracelets_total_count" type="text" class="form-control" id="Captain_Bracelets_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Captain_Bracelets_total" type="text" class="form-control" id="Captain_Bracelets_total" placeholder="Total" disabled>
                            </div>
    					</div>
					   
                        <div class="col-md-7 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <label class="form-control-label" for="Cash_Check_Envelope">Cash & Check Envelope</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Cash_Check_Envelope_count" type="text" class="form-control filter_keyup numbervalidation" id="Cash_Check_Envelope_count" placeholder="Count" rel="Cash_Check_Envelope">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Cash_Check_Envelope_value" type="text" class="form-control filter_keyup numberdecimalcls" id="Cash_Check_Envelope_value" placeholder="Value" rel="Cash_Check_Envelope">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
    						<div class="col-md-6 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary count-class-hide">
                               <input name="Cash_Check_Envelope_total_count" type="text" class="form-control" id="Cash_Check_Envelope_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
                               <input name="Cash_Check_Envelope_total" type="text" class="form-control" id="Cash_Check_Envelope_total" placeholder="Total" disabled>
                            </div>
    					</div>
                       
                       
                        <div class="col-md-7 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <label class="form-control-label" for="Wrestling_Belt">Wrestling Belt</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Wrestling_Belt_count" type="text" class="form-control filter_keyup numbervalidation" id="Wrestling_Belt_count" placeholder="Count" rel="Wrestling_Belt">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Wrestling_Belt_value" type="text" class="form-control filter_keyup numberdecimalcls" id="Wrestling_Belt_value" placeholder="Value" rel="Wrestling_Belt">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide teacher-huddle-elementary">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary count-class-hide">
                               <input name="Wrestling_Belt_total_count" type="text" class="form-control" id="Wrestling_Belt_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-elementary">
                               <input name="Wrestling_Belt_total" type="text" class="form-control" id="Wrestling_Belt_total" placeholder="Total" disabled>
                            </div>
    					</div>
						<!---------------------- Teacher Huddle Middle --------------->
                        <div class="col-md-7 com-cls-8 pt-3 by-default-hide teacher-huddle-middle">
						<div class="col-md-12 com-cls-8 pt-5 by-default-hide teacher-huddle-middle"></div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-middle">
                               <label class="form-control-label" for="Program_info_Sheets">Program info Sheets</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-middle">
                               <input name="Program_info_Sheets_count" type="text" class="form-control filter_keyup numbervalidation" id="Program_info_Sheets_count" placeholder="Count" rel="Program_info_Sheets">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide teacher-huddle-middle">
                               <input name="Program_info_Sheets_value" type="text" class="form-control filter_keyup numberdecimalcls" id="Program_info_Sheets_value" placeholder="Value" rel="Program_info_Sheets">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide teacher-huddle-middle">
						<div class="col-md-12 com-cls-8 pt-3 by-default-hide teacher-huddle-middle">Total</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-middle count-class-hide">
                               <input name="Program_info_Sheets_total_count" type="text" class="form-control" id="Program_info_Sheets_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide teacher-huddle-middle">
                               <input name="Program_info_Sheets_total" type="text" class="form-control" id="Program_info_Sheets_total" placeholder="Total" disabled>
                            </div>
    					</div>
                        <!------------------------ End Here------------------------------>
                        <!--------------------------Prizes: ----------------------------->
                        <div class="col-md-7 com-cls-8 pt-3 by-default-hide prizes-elementary">
						<div class="col-md-12 com-cls-8 pt-5 by-default-hide prizes-elementary"></div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <label class="form-control-label" for="Share_Prize_Mighty_Tatto_Sticker">Share Prize - Mighty Tatto Sticker</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="Share_Prize_Mighty_Tatto_Sticker_count" type="text" class="form-control filter_keyup numbervalidation" id="Share_Prize_Mighty_Tatto_Sticker_count" placeholder="Count" rel="Share_Prize_Mighty_Tatto_Sticker">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="Share_Prize_Mighty_Tatto_Sticker_value" type="text" class="form-control filter_keyup numberdecimalcls" id="Share_Prize_Mighty_Tatto_Sticker_value" placeholder="Value" rel="Share_Prize_Mighty_Tatto_Sticker">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide prizes-elementary">
							<div class="col-md-12 com-cls-8 pt-3 by-default-hide prizes-elementary">Total</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-elementary count-class-hide">
                               <input name="Share_Prize_Mighty_Tatto_Sticker_total_count" type="text" class="form-control" id="Share_Prize_Mighty_Tatto_Sticker_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="Share_Prize_Mighty_Tatto_Sticker_total" type="text" class="form-control" id="Share_Prize_Mighty_Tatto_Sticker_total" placeholder="Total" disabled>
                            </div>
    					</div>
						
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide prizes-elementary">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <label class="form-control-label" for="prizes_1_level">$1 Level - Hacky Sack</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_1_level_count" type="text" class="form-control filter_keyup numbervalidation" id="prizes_1_level_count" placeholder="Count" rel="prizes_1_level">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_1_level_value" type="text" class="form-control filter_keyup numberdecimalcls" id="prizes_1_level_value" placeholder="Value" rel="prizes_1_level">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide prizes-elementary">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-elementary count-class-hide">
                               <input name="prizes_1_level_total_count" type="text" class="form-control" id="prizes_1_level_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_1_level_total" type="text" class="form-control" id="prizes_1_level_total" placeholder="Total" disabled>
                            </div>
    					</div>
                        <div class="col-md-7 com-cls-8 pt-3 by-default-hide prizes-elementary">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <label class="form-control-label" for="prizes_2_level">$2 Level - Headband</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_2_level_count" type="text" class="form-control filter_keyup numbervalidation" id="prizes_2_level_count" placeholder="Count" rel="prizes_2_level">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_2_level_value" type="text" class="form-control filter_keyup numberdecimalcls" id="prizes_2_level_value" placeholder="Value" rel="prizes_2_level">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide prizes-elementary">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-elementary count-class-hide">
                               <input name="prizes_2_level_total_count" type="text" class="form-control" id="prizes_2_level_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_2_level_total" type="text" class="form-control" id="prizes_2_level_total" placeholder="Total" disabled>
                            </div>
    					</div>
                       <div class="col-md-7 com-cls-8 pt-3 by-default-hide prizes-elementary">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <label class="form-control-label" for="prizes_3_level">$3 Level - Finger Rocket</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_3_level_count" type="text" class="form-control filter_keyup numbervalidation" id="prizes_3_level_count" placeholder="Count" rel="prizes_3_level">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_3_level_value" type="text" class="form-control filter_keyup numberdecimalcls" id="prizes_3_level_value" placeholder="Value" rel="prizes_3_level">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide prizes-elementary">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-elementary count-class-hide">
                               <input name="prizes_3_level_total_count" type="text" class="form-control" id="prizes_3_level_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_3_level_total" type="text" class="form-control" id="prizes_3_level_total" placeholder="Total" disabled>
                            </div>
    					</div>
                     <div class="col-md-7 com-cls-8 pt-3 by-default-hide prizes-elementary">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <label class="form-control-label" for="prizes_5_level">$5 Level - Apex Bottle with Stickers</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_5_level_count" type="text" class="form-control filter_keyup numbervalidation" id="prizes_5_level_count" placeholder="Count" rel="prizes_5_level">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_5_level_value" type="text" class="form-control filter_keyup numberdecimalcls" id="prizes_5_level_value" placeholder="Value" rel="prizes_5_level">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide prizes-elementary">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-elementary count-class-hide">
                               <input name="prizes_5_level_total_count" type="text" class="form-control" id="prizes_5_level_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_5_level_total" type="text" class="form-control" id="prizes_5_level_total" placeholder="Total" disabled>
                            </div>
    					</div>
                       <div class="col-md-7 com-cls-8 pt-3 by-default-hide prizes-elementary">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <label class="form-control-label" for="prizes_8_level">$8 Level - Soft Touch Kickball</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_8_level_count" type="text" class="form-control filter_keyup numbervalidation" id="prizes_8_level_count" placeholder="Count" rel="prizes_8_level">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_8_level_value" type="text" class="form-control filter_keyup numberdecimalcls" id="prizes_8_level_value" placeholder="Value" rel="prizes_8_level">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide prizes-elementary">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-elementary count-class-hide">
                               <input name="prizes_8_level_total_count" type="text" class="form-control" id="prizes_8_level_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_8_level_total" type="text" class="form-control" id="prizes_8_level_total" placeholder="Total" disabled>
                            </div>
    					</div>
                       <div class="col-md-7 com-cls-8 pt-3 by-default-hide prizes-elementary">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <label class="form-control-label" for="prizes_10_level">$10 Level - Swag bag</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_10_level_count" type="text" class="form-control filter_keyup numbervalidation" id="prizes_10_level_count" placeholder="Count" rel="prizes_10_level">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_10_level_value" type="text" class="form-control filter_keyup numberdecimalcls" id="prizes_10_level_value" placeholder="Value" rel="prizes_10_level">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide prizes-elementary">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-elementary count-class-hide">
                               <input name="prizes_10_level_total_count" type="text" class="form-control" id="prizes_10_level_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_10_level_total" type="text" class="form-control" id="prizes_10_level_total" placeholder="Total" disabled>
                            </div>
    					</div>
                       <div class="col-md-7 com-cls-8 pt-3 by-default-hide prizes-elementary">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <label class="form-control-label" for="prizes_15_level">$15 Level - Ping Pong</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_15_level_count" type="text" class="form-control filter_keyup numbervalidation" id="prizes_15_level_count" placeholder="Count" rel="prizes_15_level">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_15_level_value" type="text" class="form-control filter_keyup numberdecimalcls" id="prizes_15_level_value" placeholder="Value" rel="prizes_15_level">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide prizes-elementary">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-elementary count-class-hide">
                               <input name="prizes_15_level_total_count" type="text" class="form-control" id="prizes_15_level_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_15_level_total" type="text" class="form-control" id="prizes_15_level_total" placeholder="Total" disabled>
                            </div>
    					</div>
                       <div class="col-md-7 com-cls-8 pt-3 by-default-hide prizes-elementary">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <label class="form-control-label" for="prizes_20_level">$20 Level - RC Stunt Car</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_20_level_count" type="text" class="form-control filter_keyup numbervalidation" id="prizes_20_level_count" placeholder="Count" rel="prizes_20_level">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_20_level_value" type="text" class="form-control filter_keyup numberdecimalcls" id="prizes_20_level_value" placeholder="Value" rel="prizes_20_level">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide prizes-elementary">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-elementary count-class-hide">
                               <input name="prizes_20_level_total_count" type="text" class="form-control" id="prizes_20_level_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_20_level_total" type="text" class="form-control" id="prizes_20_level_total" placeholder="Total" disabled>
                            </div>
    					</div>
                      <div class="col-md-7 com-cls-8 pt-3 by-default-hide prizes-elementary">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <label class="form-control-label" for="prizes_30_level">$30 Level - Outdoor Set</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_30_level_count" type="text" class="form-control filter_keyup numbervalidation" id="prizes_30_level_count" placeholder="Count" rel="prizes_30_level">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_30_level_value" type="text" class="form-control filter_keyup numberdecimalcls" id="prizes_30_level_value" placeholder="Value" rel="prizes_30_level">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide prizes-elementary">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-elementary count-class-hide">
                               <input name="prizes_30_level_total_count" type="text" class="form-control" id="prizes_30_level_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-elementary">
                               <input name="prizes_30_level_total" type="text" class="form-control" id="prizes_30_level_total" placeholder="Total" disabled>
                            </div>
    					</div>
						<!---------------------Prizes Middle-- --------->
						
                       <div class="col-md-7 com-cls-8 pt-3 by-default-hide prizes-middle">
					   	<div class="col-md-12 com-cls-8 pt-5 by-default-hide prizes-middle"></div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-middle">
                               <label class="form-control-label" for="P1_level">P1 Level - Drone</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-middle">
                               <input name="P1_level_count" type="text" class="form-control filter_keyup numbervalidation" id="P1_level_count" placeholder="Count" rel="P1_level">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-middle">
                               <input name="P1_level_value" type="text" class="form-control filter_keyup numberdecimalcls" id="P1_level_value" placeholder="Value" rel="P1_level">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide prizes-middle">
						<div class="col-md-12 com-cls-8 pt-3 prizes-middle">
    						   <label class="form-control-label ">Total</label>
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-middle count-class-hide">
                               <input name="P1_level_total_count" type="text" class="form-control" id="P1_level_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-middle">
                               <input name="P1_level_total" type="text" class="form-control" id="P1_level_total" placeholder="Total" disabled>
                            </div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide prizes-middle">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-middle">
                               <label class="form-control-label" for="P2_level">P2 Level - Speaker</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-middle">
                               <input name="P2_level_count" type="text" class="form-control filter_keyup numbervalidation" id="P2_level_count" placeholder="Count" rel="P2_level">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-middle">
                               <input name="P2_level_value" type="text" class="form-control filter_keyup numberdecimalcls" id="P2_level_value" placeholder="Value" rel="P2_level">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide prizes-middle">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-middle count-class-hide">
                               <input name="P2_level_total_count" type="text" class="form-control" id="P2_level_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-middle">
                               <input name="P2_level_total" type="text" class="form-control" id="P2_level_total" placeholder="Total" disabled>
                            </div>
    					</div>
						
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide prizes-middle">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-middle">
                               <label class="form-control-label" for="P3_level">P3 Level - Drone</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-middle">
                               <input name="P3_level_count" type="text" class="form-control filter_keyup numbervalidation" id="P3_level_count" placeholder="Count" rel="P3_level">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-middle">
                               <input name="P3_level_value" type="text" class="form-control filter_keyup numberdecimalcls" id="P3_level_value" placeholder="Value" rel="P3_level">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide prizes-middle">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-middle count-class-hide">
                               <input name="P3_level_total_count" type="text" class="form-control" id="P3_level_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-middle">
                               <input name="P3_level_total" type="text" class="form-control" id="P3_level_total" placeholder="Total" disabled>
                            </div>
    					</div>
                       <div class="col-md-7 com-cls-8 pt-3 by-default-hide prizes-middle">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-middle">
                               <label class="form-control-label" for="P4_level">P4 Level - Drone</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-middle">
                               <input name="P4_level_count" type="text" class="form-control filter_keyup numbervalidation" id="P4_level_count" placeholder="Count" rel="P4_level">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide prizes-middle">
                               <input name="P4_level_value" type="text" class="form-control filter_keyup numberdecimalcls" id="P4_level_value" placeholder="Value" rel="P4_level">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide prizes-middle">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-middle count-class-hide">
                               <input name="P4_level_total_count" type="text" class="form-control" id="P4_level_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide prizes-middle">
                               <input name="P4_level_total" type="text" class="form-control" id="P4_level_total" placeholder="Total" disabled>
                            </div>
    					</div>
                        <!------------------------ End Here------------------------------>
						<!------------------------Pledge Kits------------------------->
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide pledge-kits-elementary">
							<div class="col-md-12 com-cls-8 pt-5 by-default-hide pledge-kits-elementary"></div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pledge-kits-elementary">
                               <label class="form-control-label" for="Fun_Run_Pledge_Kits">Fun Run Pledge Kits</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide pledge-kits-elementary">
                               <input name="Fun_Run_Pledge_Kits_count" type="text" class="form-control filter_keyup numbervalidation" id="Fun_Run_Pledge_Kits_count" placeholder="Count" rel="Fun_Run_Pledge_Kits">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pledge-kits-elementary">
                               <input name="Fun_Run_Pledge_Kits_value" type="text" class="form-control filter_keyup numberdecimalcls" id="Fun_Run_Pledge_Kits_value" placeholder="Value" rel="Fun_Run_Pledge_Kits">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide pledge-kits-elementary">
						<div class="col-md-12 com-cls-8 pt-3 by-default-hide pledge-kits-elementary">Total</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide pledge-kits-elementary count-class-hide">
                               <input name="Fun_Run_Pledge_Kits_total_count" type="text" class="form-control" id="Fun_Run_Pledge_Kits_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide pledge-kits-elementary">
                               <input name="Fun_Run_Pledge_Kits_total" type="text" class="form-control" id="Fun_Run_Pledge_Kits_total" placeholder="Total" disabled>
                            </div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide pledge-kits-elementary">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pledge-kits-elementary">
                               <label class="form-control-label" for="OC_Pledge_Kits">OC Pledge Kits</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide pledge-kits-elementary">
                               <input name="OC_Pledge_Kits_count" type="text" class="form-control filter_keyup numbervalidation" id="OC_Pledge_Kits_count" placeholder="Count" rel="OC_Pledge_Kits">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pledge-kits-elementary">
                               <input name="OC_Pledge_Kits_value" type="text" class="form-control filter_keyup numberdecimalcls" id="OC_Pledge_Kits_value" placeholder="Value" rel="OC_Pledge_Kits">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide pledge-kits-elementary">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide pledge-kits-elementary count-class-hide">
                               <input name="OC_Pledge_Kits_total_count" type="text" class="form-control" id="OC_Pledge_Kits_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide pledge-kits-elementary">
                               <input name="OC_Pledge_Kits_total" type="text" class="form-control" id="OC_Pledge_Kits_total" placeholder="Total" disabled>
                            </div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide pledge-kits-elementary">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pledge-kits-elementary">
                               <label class="form-control-label" for="Remix_Pledge_Kits">Remix Pledge Kits</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide pledge-kits-elementary">
                               <input name="Remix_Pledge_Kits_count" type="text" class="form-control filter_keyup numbervalidation" id="Remix_Pledge_Kits_count" placeholder="Count" rel="Remix_Pledge_Kits">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pledge-kits-elementary">
                               <input name="Remix_Pledge_Kits_value" type="text" class="form-control filter_keyup numberdecimalcls" id="Remix_Pledge_Kits_value" placeholder="Value" rel="Remix_Pledge_Kits">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide pledge-kits-elementary">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide pledge-kits-elementary count-class-hide">
                               <input name="Remix_Pledge_Kits_total_count" type="text" class="form-control" id="Remix_Pledge_Kits_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide pledge-kits-elementary">
                               <input name="Remix_Pledge_Kits_total" type="text" class="form-control" id="Remix_Pledge_Kits_total" placeholder="Total" disabled>
                            </div>
    					</div>
						<!------------------Pledge kits Middle --------------->
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide pledge-kits-middle">
						<div class="col-md-12 com-cls-8 pt-5 by-default-hide pledge-kits-middle"></div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pledge-kits-middle">
                               <label class="form-control-label" for="Color_Battle_50">Color Battle - $50</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide pledge-kits-middle">
                               <input name="Color_Battle_50_count" type="text" class="form-control filter_keyup numbervalidation" id="Color_Battle_50_count" placeholder="Count" rel="Color_Battle_50">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pledge-kits-middle">
                               <input name="Color_Battle_50_value" type="text" class="form-control filter_keyup numberdecimalcls" id="Color_Battle_50_value" placeholder="Value" rel="Color_Battle_50">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide pledge-kits-middle">
						<div class="col-md-12 com-cls-8 pt-3 by-default-hide pledge-kits-middle">Total</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide pledge-kits-middle count-class-hide">
                               <input name="Color_Battle_50_total_count" type="text" class="form-control" id="Color_Battle_50_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide pledge-kits-middle">
                               <input name="Color_Battle_50_total" type="text" class="form-control" id="Color_Battle_50_total" placeholder="Total" disabled>
                            </div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide pledge-kits-middle">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pledge-kits-middle">
                               <label class="form-control-label" for="Color_Battle_30">Color Battle - $30</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide pledge-kits-middle">
                               <input name="Color_Battle_30_count" type="text" class="form-control filter_keyup numbervalidation" id="Color_Battle_30_count" placeholder="Count" rel="Color_Battle_30">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pledge-kits-middle">
                               <input name="Color_Battle_30_value" type="text" class="form-control filter_keyup numberdecimalcls" id="Color_Battle_30_value" placeholder="Value" rel="Color_Battle_30">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide pledge-kits-middle">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide pledge-kits-middle count-class-hide">
                               <input name="Color_Battle_30_total_count" type="text" class="form-control" id="Color_Battle_30_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide pledge-kits-middle">
                               <input name="Color_Battle_30_total" type="text" class="form-control" id="Color_Battle_30_total" placeholder="Total" disabled>
                            </div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide pledge-kits-middle">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pledge-kits-middle">
                               <label class="form-control-label" for="Apex_games">Color Battle - $30</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide pledge-kits-middle">
                               <input name="Apex_games_count" type="text" class="form-control filter_keyup numbervalidation" id="Apex_games_count" placeholder="Count" rel="Apex_games">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide pledge-kits-middle">
                               <input name="Apex_games_value" type="text" class="form-control filter_keyup numberdecimalcls" id="Apex_games_value" placeholder="Value" rel="Apex_games">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide pledge-kits-middle">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide pledge-kits-middle count-class-hide">
                               <input name="Apex_games_total_count" type="text" class="form-control" id="Apex_games_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide pledge-kits-middle">
                               <input name="Apex_games_total" type="text" class="form-control" id="Apex_games_total" placeholder="Total" disabled>
                            </div>
    					</div>
					
						<!------------------------ End Here------------------------------>
						<!------------------------Tickers:------------------------->
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide tickers-stock">
						<div class="col-md-12 com-cls-8 pt-3 by-default-hide tickers-stock">Ticker Type</div>
						
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide tickers-stock">
                               <label class="form-control-label" for="Ribbons">Ribbons</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide tickers-stock">
                               <input name="Ribbons_count" type="text" class="form-control filter_keyup numbervalidation" id="Ribbons_count" placeholder="Count" rel="Ribbons">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide tickers-stock">
                               <input name="Ribbons_value" type="text" class="form-control filter_keyup numberdecimalcls" id="Ribbons_value" placeholder="Value" rel="Ribbons">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide tickers-stock">
						<div class="col-md-12 com-cls-8 pt-3 tickers-stock">
    						   <label class="form-control-label">Total</label>
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide tickers-stock count-class-hide">
                               <input name="Ribbons_total_count" type="text" class="form-control" id="Ribbons_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide tickers-stock">
                               <input name="Ribbons_total" type="text" class="form-control" id="Ribbons_total" placeholder="Total" disabled>
                            </div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide tickers-stock">
    						<div class="col-md-4 com-cls-8  by-default-hide tickers-stock">
                               <label class="form-control-label" for="Stickers">Stickers</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide tickers-stock">
                               <input name="Stickers_count" type="text" class="form-control filter_keyup numbervalidation" id="Stickers_count" placeholder="Count" rel="Stickers">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide tickers-stock">
                               <input name="Stickers_value" type="text" class="form-control filter_keyup numberdecimalcls" id="Stickers_value" placeholder="Value" rel="Stickers">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide tickers-stock">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide tickers-stock count-class-hide">
                               <input name="Stickers_total_count" type="text" class="form-control" id="Stickers_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8  pt-2 by-default-hide tickers-stock">
                               <input name="Stickers_total" type="text" class="form-control" id="Stickers_total" placeholder="Total" disabled>
                            </div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide tickers-stock">
    						<div class="col-md-4 com-cls-8  pt-2 by-default-hide tickers-stock">
                               <label class="form-control-label" for="Bags">Bags</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2  by-default-hide tickers-stock">
                               <input name="Bags_count" type="text" class="form-control filter_keyup numbervalidation" id="Bags_count" placeholder="Count" rel="Bags">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide tickers-stock">
                               <input name="Bags_value" type="text" class="form-control filter_keyup numberdecimalcls" id="Bags_value" placeholder="Value" rel="Bags">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide tickers-stock">
    						<div class="col-md-6 com-cls-8  pt-2 by-default-hide tickers-stock count-class-hide">
                               <input name="Bags_total_count" type="text" class="form-control" id="Bags_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide tickers-stock">
                               <input name="Bags_total" type="text" class="form-control" id="Bags_total" placeholder="Total" disabled>
                            </div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide tickers-stock">
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide tickers-stock">
                               <label class="form-control-label" for="OC_Wristbands">OC Wristbands</label>
                            </div>
                            <div class="col-md-4 com-cls-8 pt-2 by-default-hide tickers-stock">
                               <input name="OC_Wristbands_count" type="text" class="form-control filter_keyup numbervalidation" id="OC_Wristbands_count" placeholder="Count" rel="OC_Wristbands">
                            </div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide tickers-stock">
                               <input name="OC_Wristbands_value" type="text" class="form-control filter_keyup numberdecimalcls" id="OC_Wristbands_value" placeholder="Value" rel="OC_Wristbands">
                            </div>
    					</div>
						<div class="col-md-5 com-cls-8 pt-3 by-default-hide tickers-stock">
    						<div class="col-md-6 com-cls-8  pt-2 by-default-hide tickers-stock count-class-hide">
                               <input name="OC_Wristbands_total_count" type="text" class="form-control" id="OC_Wristbands_total_count" placeholder="Count">
                            </div>
                            <div class="col-md-6 com-cls-8 pt-2 by-default-hide tickers-stock">
                               <input name="OC_Wristbands_total" type="text" class="form-control" id="OC_Wristbands_total" placeholder="Total" disabled>
                            </div>
    					</div>
					
						<!------------------------ End Here------------------------------>
						<!------------------------Shirts:------------------------->
						        
                        <div class="col-md-7 com-cls-8 pt-3 by-default-hide shirts-stock-elementry">
                            <div class="col-md-12 com-cls-8 pt-5 by-default-hide shirts-stock-elementry">Size
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry">
    						   <label class="form-control-label" for="shirts_size_YS_count">YS</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry">
    						   <input name="shirts_size_YS_count" type="text" class="form-control filter_keyup numbervalidation" id="shirts_size_YS_count" placeholder="Count" rel="shirts_size_YS">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry" >
    						   <input name="shirts_size_YS_value" type="text" class="form-control filter_keyup numberdecimalcls" id="shirts_size_YS_value" placeholder="Value" rel="shirts_size_YS">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide shirts-stock-elementry">
    						<div class="col-md-12 com-cls-8 pt-5 by-default-hide shirts-stock-elementry" >
    						   <label class="form-control-label">Total</label>
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide shirts-stock-elementry count-class-hide" >
    						   <input name="shirts_size_YS_total_count" type="text" class="form-control " id="shirts_size_YS_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide shirts-stock-elementry" >
    						   <input name="shirts_size_YS_total" type="text" class="form-control" id="shirts_size_YS_total" placeholder="Total" disabled>
    						</div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide shirts-stock-elementry">
                          
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry">
    						   <label class="form-control-label" for="shirts_size_YM_count">YM</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry">
    						   <input name="shirts_size_YM_count" type="text" class="form-control filter_keyup numbervalidation" id="shirts_size_YM_count" placeholder="Count" rel="shirts_size_YM">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry" >
    						   <input name="shirts_size_YM_value" type="text" class="form-control filter_keyup numberdecimalcls" id="shirts_size_YM_value" placeholder="Value" rel="shirts_size_YM">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide shirts-stock-elementry">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide shirts-stock-elementry count-class-hide" >
    						   <input name="shirts_size_YM_total_count" type="text" class="form-control " id="shirts_size_YM_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide shirts-stock-elementry" >
    						   <input name="shirts_size_YM_total" type="text" class="form-control" id="shirts_size_YM_total" placeholder="Total" disabled>
    						</div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide shirts-stock-elementry">
                          <div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry">
    						   <label class="form-control-label" for="shirts_size_YL_count">YL</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry">
    						   <input name="shirts_size_YL_count" type="text" class="form-control filter_keyup numbervalidation" id="shirts_size_YL_count" placeholder="Count" rel="shirts_size_YL">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry" >
    						   <input name="shirts_size_YL_value" type="text" class="form-control filter_keyup numberdecimalcls" id="shirts_size_YL_value" placeholder="Value" rel="shirts_size_YL">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide shirts-stock-elementry">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide shirts-stock-elementry count-class-hide" >
    						   <input name="shirts_size_YL_total_count" type="text" class="form-control " id="shirts_size_YL_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide shirts-stock-elementry" >
    						   <input name="shirts_size_YL_total" type="text" class="form-control" id="shirts_size_YL_total" placeholder="Total" disabled>
    						</div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide shirts-stock-elementry">
                          <div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry">
    						   <label class="form-control-label" for="shirts_size_AS_count">AS</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry">
    						   <input name="shirts_size_AS_count" type="text" class="form-control filter_keyup numbervalidation" id="shirts_size_AS_count" placeholder="Count" rel="shirts_size_AS">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry" >
    						   <input name="shirts_size_AS_value" type="text" class="form-control filter_keyup numberdecimalcls" id="shirts_size_AS_value" placeholder="Value" rel="shirts_size_AS">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide shirts-stock-elementry">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide shirts-stock-elementry count-class-hide" >
    						   <input name="shirts_size_AS_total_count" type="text" class="form-control " id="shirts_size_AS_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide shirts-stock-elementry" >
    						   <input name="shirts_size_AS_total" type="text" class="form-control" id="shirts_size_AS_total" placeholder="Total" disabled>
    						</div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide shirts-stock-elementry">
                          <div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry">
    						   <label class="form-control-label" for="shirts_size_AM_count">AM</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry">
    						   <input name="shirts_size_AM_count" type="text" class="form-control filter_keyup numbervalidation" id="shirts_size_AM_count" placeholder="Count" rel="shirts_size_AM">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry" >
    						   <input name="shirts_size_AM_value" type="text" class="form-control filter_keyup numberdecimalcls" id="shirts_size_AM_value" placeholder="Value" rel="shirts_size_AM">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide shirts-stock-elementry">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide shirts-stock-elementry count-class-hide" >
    						   <input name="shirts_size_AM_total_count" type="text" class="form-control " id="shirts_size_AM_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide shirts-stock-elementry" >
    						   <input name="shirts_size_AM_total" type="text" class="form-control" id="shirts_size_AM_total" placeholder="Total" disabled>
    						</div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide shirts-stock-elementry">
                          <div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry">
    						   <label class="form-control-label" for="shirts_size_AL_count">AL</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry">
    						   <input name="shirts_size_AL_count" type="text" class="form-control filter_keyup numbervalidation" id="shirts_size_AL_count" placeholder="Count" rel="shirts_size_AL">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry" >
    						   <input name="shirts_size_AL_value" type="text" class="form-control filter_keyup numberdecimalcls" id="shirts_size_AL_value" placeholder="Value" rel="shirts_size_AL">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide shirts-stock-elementry">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide shirts-stock-elementry count-class-hide" >
    						   <input name="shirts_size_AL_total_count" type="text" class="form-control " id="shirts_size_AL_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide shirts-stock-elementry" >
    						   <input name="shirts_size_AL_total" type="text" class="form-control" id="shirts_size_AL_total" placeholder="Total" disabled>
    						</div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide shirts-stock-elementry">
							<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry">
    						   <label class="form-control-label" for="shirts_size_AXL_count">AXL</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry">
    						   <input name="shirts_size_AXL_count" type="text" class="form-control filter_keyup numbervalidation" id="shirts_size_AXL_count" placeholder="Count" rel="shirts_size_AXL">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry" >
    						   <input name="shirts_size_AXL_value" type="text" class="form-control filter_keyup numberdecimalcls" id="shirts_size_AXL_value" placeholder="Value" rel="shirts_size_AXL">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide shirts-stock-elementry">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide shirts-stock-elementry count-class-hide" >
    						   <input name="shirts_size_AXL_total_count" type="text" class="form-control " id="shirts_size_AXL_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide shirts-stock-elementry" >
    						   <input name="shirts_size_AXL_total" type="text" class="form-control" id="shirts_size_AXL_total" placeholder="Total" disabled>
    						</div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide shirts-stock-elementry">
							<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry">
    						   <label class="form-control-label" for="shirts_size_A2XL_count">A2XL</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry">
    						   <input name="shirts_size_A2XL_count" type="text" class="form-control filter_keyup numbervalidation" id="shirts_size_A2XL_count" placeholder="Count" rel="shirts_size_A2XL">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry" >
    						   <input name="shirts_size_A2XL_value" type="text" class="form-control filter_keyup numberdecimalcls" id="shirts_size_A2XL_value" placeholder="Value" rel="shirts_size_A2XL">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide shirts-stock-elementry">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide shirts-stock-elementry count-class-hide" >
    						   <input name="shirts_size_A2XL_total_count" type="text" class="form-control " id="shirts_size_A2XL_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide shirts-stock-elementry" >
    						   <input name="shirts_size_A2XL_total" type="text" class="form-control" id="shirts_size_A2XL_total" placeholder="Total" disabled>
    						</div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide shirts-stock-elementry">
							<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry">
    						   <label class="form-control-label" for="shirts_size_A3XL_count">A3XL</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry">
    						   <input name="shirts_size_A3XL_count" type="text" class="form-control filter_keyup numbervalidation" id="shirts_size_A3XL_count" placeholder="Count" rel="shirts_size_A3XL">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry" >
    						   <input name="shirts_size_A3XL_value" type="text" class="form-control filter_keyup numberdecimalcls" id="shirts_size_A3XL_value" placeholder="Value" rel="shirts_size_A3XL">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide shirts-stock-elementry">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide shirts-stock-elementry count-class-hide" >
    						   <input name="shirts_size_A3XL_total_count" type="text" class="form-control " id="shirts_size_A3XL_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide shirts-stock-elementry" >
    						   <input name="shirts_size_A3XL_total" type="text" class="form-control" id="shirts_size_A3XL_total" placeholder="Total" disabled>
    						</div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide shirts-stock-elementry">
							<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry">
    						   <label class="form-control-label" for="shirts_size_A4XL_count">A4XL</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry">
    						   <input name="shirts_size_A4XL_count" type="text" class="form-control filter_keyup numbervalidation" id="shirts_size_A4XL_count" placeholder="Count" rel="shirts_size_A4XL">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry" >
    						   <input name="shirts_size_A4XL_value" type="text" class="form-control filter_keyup numberdecimalcls" id="shirts_size_A4XL_value" placeholder="Value" rel="shirts_size_A4XL">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide shirts-stock-elementry">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide shirts-stock-elementry count-class-hide" >
    						   <input name="shirts_size_A4XL_total_count" type="text" class="form-control " id="shirts_size_A4XL_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide shirts-stock-elementry" >
    						   <input name="shirts_size_A4XL_total" type="text" class="form-control" id="shirts_size_A4XL_total" placeholder="Total" disabled>
    						</div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide shirts-stock-elementry">
							<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry">
    						   <label class="form-control-label" for="shirts_size_A5XL">A5XL</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry">
    						   <input name="shirts_size_A5XL_count" type="text" class="form-control filter_keyup numbervalidation" id="shirts_size_A5XL_count" placeholder="Count" rel="shirts_size_A5XL">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide shirts-stock-elementry" >
    						   <input name="shirts_size_A5XL_value" type="text" class="form-control filter_keyup numberdecimalcls" id="shirts_size_A5XL_value" placeholder="Value" rel="shirts_size_A5XL">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide shirts-stock-elementry">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide shirts-stock-elementry count-class-hide" >
    						   <input name="shirts_size_A5XL_total_count" type="text" class="form-control " id="shirts_size_A5XL_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide shirts-stock-elementry" >
    						   <input name="shirts_size_A5XL_total" type="text" class="form-control" id="shirts_size_A5XL_total" placeholder="Total" disabled>
    						</div>
    					</div>
					
						<!------------------------ End Here------------------------------>
						
						<!------------------------General Supplies:------------------------->
						
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide general_Supplies">
						<div class="col-md-12 com-cls-8 pt-5 by-default-hide general_Supplies"></div>
							<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies">
    						   <label class="form-control-label" for="shaving_Cream">Shaving Cream (# of cans)</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies">
    						   <input name="shaving_Cream_count" type="text" class="form-control filter_keyup numbervalidation" id="shaving_Cream_count" placeholder="Count" rel="shaving_Cream">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies" >
    						   <input name="shaving_Cream_value" type="text" class="form-control filter_keyup numberdecimalcls" id="shaving_Cream_value" placeholder="Value" rel="shaving_Cream">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide general_Supplies">
						<div class="col-md-12 com-cls-8 pt-3 by-default-hide general_Supplies">Total</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide general_Supplies count-class-hide" >
    						   <input name="shaving_Cream_total_count" type="text" class="form-control " id="shaving_Cream_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide general_Supplies" >
    						   <input name="shaving_Cream_total" type="text" class="form-control" id="shaving_Cream_total" placeholder="Total" disabled>
    						</div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide general_Supplies">
							<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies">
    						   <label class="form-control-label" for="glow_Sticks">Glow Sticks (total count)</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies">
    						   <input name="glow_Sticks_count" type="text" class="form-control filter_keyup numbervalidation" id="glow_Sticks_count" placeholder="Count" rel="glow_Sticks">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies" >
    						   <input name="glow_Sticks_value" type="text" class="form-control filter_keyup numberdecimalcls" id="glow_Sticks_value" placeholder="Value" rel="glow_Sticks">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide general_Supplies">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide general_Supplies count-class-hide" >
    						   <input name="glow_Sticks_total_count" type="text" class="form-control " id="glow_Sticks_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide general_Supplies" >
    						   <input name="glow_Sticks_total" type="text" class="form-control" id="glow_Sticks_total" placeholder="Total" disabled>
    						</div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide general_Supplies">
						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies">
    						   <label class="form-control-label" for="water_Balloons">Water Balloons (# of boxes)</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies">
    						   <input name="water_Balloons_count" type="text" class="form-control filter_keyup numbervalidation" id="water_Balloons_count" placeholder="Count" rel="water_Balloons">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies" >
    						   <input name="water_Balloons_value" type="text" class="form-control filter_keyup numberdecimalcls" id="water_Balloons_value" placeholder="Value" rel="water_Balloons">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide general_Supplies">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide general_Supplies count-class-hide" >
    						   <input name="water_Balloons_total_count" type="text" class="form-control " id="water_Balloons_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide general_Supplies" >
    						   <input name="water_Balloons_total" type="text" class="form-control" id="water_Balloons_total" placeholder="Total" disabled>
    						</div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide general_Supplies">
							<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies">
    						   <label class="form-control-label" for="duct_Tape">Duct Tape (# of rolls)</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies">
    						   <input name="duct_Tape_count" type="text" class="form-control filter_keyup numbervalidation" id="duct_Tape_count" placeholder="Count" rel="duct_Tape">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies" >
    						   <input name="duct_Tape_value" type="text" class="form-control filter_keyup numberdecimalcls" id="duct_Tape_value" placeholder="Value" rel="duct_Tape">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide general_Supplies">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide general_Supplies count-class-hide" >
    						   <input name="duct_Tape_total_count" type="text" class="form-control " id="duct_Tape_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide general_Supplies" >
    						   <input name="duct_Tape_total" type="text" class="form-control" id="duct_Tape_total" placeholder="Total" disabled>
    						</div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide general_Supplies">
							<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies">
    						   <label class="form-control-label" for="plates">Plates (total count)</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies">
    						   <input name="plates_count" type="text" class="form-control filter_keyup numbervalidation" id="plates_count" placeholder="Count" rel="plates">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies" >
    						   <input name="plates_value" type="text" class="form-control filter_keyup numberdecimalcls" id="plates_value" placeholder="Value" rel="plates">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide general_Supplies">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide general_Supplies count-class-hide" >
    						   <input name="plates_total_count" type="text" class="form-control " id="plates_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide general_Supplies" >
    						   <input name="plates_total" type="text" class="form-control" id="plates_total" placeholder="Total" disabled>
    						</div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide general_Supplies">
							<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies">
    						   <label class="form-control-label" for="sunic_slushie_cups">Sunic Slushie Cups (total count)</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies">
    						   <input name="sunic_slushie_cups_count" type="text" class="form-control filter_keyup numbervalidation" id="sunic_slushie_cups_count" placeholder="Count" rel="sunic_slushie_cups">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies" >
    						   <input name="sunic_slushie_cups_value" type="text" class="form-control filter_keyup numberdecimalcls" id="sunic_slushie_cups_value" placeholder="Value" rel="sunic_slushie_cups">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide general_Supplies">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide general_Supplies count-class-hide" >
    						   <input name="sunic_slushie_cups_total_count" type="text" class="form-control " id="sunic_slushie_cups_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide general_Supplies" >
    						   <input name="sunic_slushie_cups_total" type="text" class="form-control" id="sunic_slushie_cups_total" placeholder="Total" disabled>
    						</div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide general_Supplies">
							<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies">
    						   <label class="form-control-label" for="field_marking_spray">Field Marking Spray (# of cans)</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies">
    						   <input name="field_marking_spray_count" type="text" class="form-control filter_keyup numbervalidation" id="field_marking_spray_count" placeholder="Count" rel="field_marking_spray">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies" >
    						   <input name="field_marking_spray_value" type="text" class="form-control filter_keyup numberdecimalcls" id="field_marking_spray_value" placeholder="Value" rel="field_marking_spray">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide general_Supplies">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide general_Supplies count-class-hide" >
    						   <input name="field_marking_spray_total_count" type="text" class="form-control " id="field_marking_spray_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide general_Supplies" >
    						   <input name="field_marking_spray_total" type="text" class="form-control" id="field_marking_spray_total" placeholder="Total" disabled>
    						</div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide general_Supplies">
						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies">
    						   <label class="form-control-label" for="slime">Slime (# of bags)</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies">
    						   <input name="slime_count" type="text" class="form-control filter_keyup numbervalidation" id="slime_count" placeholder="Count" rel="slime">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies" >
    						   <input name="slime_value" type="text" class="form-control filter_keyup numberdecimalcls" id="slime_value" placeholder="Value" rel="slime">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide general_Supplies">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide general_Supplies count-class-hide" >
    						   <input name="slime_total_count" type="text" class="form-control " id="slime_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide general_Supplies" >
    						   <input name="slime_total" type="text" class="form-control" id="slime_total" placeholder="Total" disabled>
    						</div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide general_Supplies">
							<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies">
    						   <label class="form-control-label" for="clipboards">Clipboards (total count)</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies">
    						   <input name="clipboards_count" type="text" class="form-control filter_keyup numbervalidation" id="clipboards_count" placeholder="Count" rel="clipboards">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies" >
    						   <input name="clipboards_value" type="text" class="form-control filter_keyup numberdecimalcls" id="clipboards_value" placeholder="Value" rel="clipboards">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide general_Supplies">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide general_Supplies count-class-hide" >
    						   <input name="clipboards_total_count" type="text" class="form-control " id="clipboards_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide general_Supplies" >
    						   <input name="clipboards_total" type="text" class="form-control" id="clipboards_total" placeholder="Total" disabled>
    						</div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide general_Supplies">
						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies">
    						   <label class="form-control-label" for="sidewalk_Chalk">Sidewalk Chalk (# of sets)</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies">
    						   <input name="sidewalk_Chalk_count" type="text" class="form-control filter_keyup numbervalidation" id="sidewalk_Chalk_count" placeholder="Count" rel="sidewalk_Chalk">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies" >
    						   <input name="sidewalk_Chalk_value" type="text" class="form-control filter_keyup numberdecimalcls" id="sidewalk_Chalk_value" placeholder="Value" rel="sidewalk_Chalk">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide general_Supplies">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide general_Supplies count-class-hide" >
    						   <input name="sidewalk_Chalk_total_count" type="text" class="form-control " id="sidewalk_Chalk_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide general_Supplies" >
    						   <input name="sidewalk_Chalk_total" type="text" class="form-control" id="sidewalk_Chalk_total" placeholder="Total" disabled>
    						</div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide general_Supplies">
						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies">
    						   <label class="form-control-label" for="pens">Pens (# of boxes)</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies">
    						   <input name="pens_count" type="text" class="form-control filter_keyup numbervalidation" id="pens_count" placeholder="Count" rel="pens">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies" >
    						   <input name="pens_value" type="text" class="form-control filter_keyup numberdecimalcls" id="pens_value" placeholder="Value" rel="pens">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide general_Supplies">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide general_Supplies count-class-hide" >
    						   <input name="pens_total_count" type="text" class="form-control " id="pens_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide general_Supplies" >
    						   <input name="pens_total" type="text" class="form-control" id="pens_total" placeholder="Total" disabled>
    						</div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide general_Supplies">
						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies">
    						   <label class="form-control-label" for="event_Water_Cups">Event Water Cups (total count)</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies">
    						   <input name="event_Water_Cups_count" type="text" class="form-control filter_keyup numbervalidation" id="event_Water_Cups_count" placeholder="Count" rel="event_Water_Cups">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide general_Supplies" >
    						   <input name="event_Water_Cups_value" type="text" class="form-control filter_keyup numberdecimalcls" id="event_Water_Cups_value" placeholder="Value" rel="event_Water_Cups">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide general_Supplies">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide general_Supplies count-class-hide" >
    						   <input name="event_Water_Cups_total_count" type="text" class="form-control " id="event_Water_Cups_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide general_Supplies" >
    						   <input name="event_Water_Cups_total" type="text" class="form-control" id="event_Water_Cups_total" placeholder="Total" disabled>
    						</div>
    					</div>
						<!------------------------ End Here------------------------------>
						<!------------------------ Color Powder------------------------------>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide color_Powder">
						<div class="col-md-12 com-cls-8 pt-5 by-default-hide color_Powder"></div>
							<div class="col-md-4 com-cls-8 pt-2 by-default-hide color_Powder">
    						   <label class="form-control-label" for="boxes">Boxes</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide color_Powder">
    						   <input name="boxes_count" type="text" class="form-control filter_keyup numbervalidation" id="boxes_count" placeholder="Count" rel="boxes">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide color_Powder" >
    						   <input name="boxes_value" type="text" class="form-control filter_keyup numberdecimalcls" id="boxes_value" placeholder="Value" rel="boxes">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide color_Powder">
						<div class="col-md-12 com-cls-8 pt-3 by-default-hide color_Powder">Total</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide color_Powder count-class-hide" >
    						   <input name="boxes_total_count" type="text" class="form-control " id="boxes_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide color_Powder" >
    						   <input name="boxes_total" type="text" class="form-control" id="boxes_total" placeholder="Total" disabled>
    						</div>
    					</div>
						<div class="col-md-7 com-cls-8 pt-3 by-default-hide color_Powder">
						<div class="col-md-4 com-cls-8 pt-2 by-default-hide color_Powder">
    						   <label class="form-control-label" for="packets">Packets</label>
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide color_Powder">
    						   <input name="packets_count" type="text" class="form-control filter_keyup numbervalidation" id="packets_count" placeholder="Count" rel="packets">
    						</div>
    						<div class="col-md-4 com-cls-8 pt-2 by-default-hide color_Powder" >
    						   <input name="packets_value" type="text" class="form-control filter_keyup numberdecimalcls" id="packets_value" placeholder="Value" rel="packets">
    						</div>
    					</div>
    					<div class="col-md-5 com-cls-8 pt-3 by-default-hide color_Powder">
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide color_Powder count-class-hide" >
    						   <input name="packets_total_count" type="text" class="form-control " id="packets_total_count" placeholder="Count" >
    						</div>
    						<div class="col-md-6 com-cls-8 pt-2 by-default-hide color_Powder" >
    						   <input name="packets_total" type="text" class="form-control" id="packets_total" placeholder="Total" disabled>
    						</div>
    					</div>
						<!------------------------ End Here------------------------------>
                        <div class="col-md-6 com-cls-8 pt-3 by-default-hide" id="prizeDiv">
                           <label class="form-control-label" for="item_name">Item Name </label>
                           <input name="item_name" type="text" class="form-control" id="item_name" placeholder="Item Name"  required="true">
                        </div>
                        <div class="col-md-6 com-cls-8 pt-3 by-default-hide" id="dollar_valueDiv">
                           <label class="form-control-label" for="dollar_value">Dollar Value </label>
                           <input  name="dollar_value by-default-hide" type="text" class="form-control" id="dollar_value" placeholder="Dollar Value" aria-describedby="inputGroupPrepend" required="true">
                        </div>
                        <div class="col-md-6 com-cls-8 pt-3 by-default-hide" id="total_countDiv">
                           <label class="form-control-label" for="total_count">Total count </label>
                           <input name="total_count" type="text" class="form-control" id="total_count" placeholder="Total count"  required="true">
                        </div>
                      
                        
            <div class="col-md-12  com-cls-8 pt-3">
			<input name="inventory_stock_value" type="hidden" id="inventory_stock_value"  value="">
			<input name="stock_count" type="hidden" id="stock_count"  value="1">
            <input  class="btn btn-primary mt-3" type="submit" name="add_inventory_stock_value" Value="Submit">
            </div>
            <!----------------------Add More Category----------------->
            <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default"  aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <h6 class="modal-title" id="modal-title-default">Add Category</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">
            <div  id="add-admin-form-success" class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text">New category has been added successfully</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="form-row">
            <div class="col-md-12 ">
            <label class="form-control-label" for="categoryid">Category name </label>
            <input name="category" type="text" class="form-control" id="categoryid" placeholder="Category name">
            <div class="invalid-feedback">
            Please enter a first name.
            </div>
            </div>
            </div>
            <button  class="btn btn-primary mt-3" type="button" id="add_more_category" name="add_more_category">Submit</button>
            </div>
            </div>
            </div>
            </div>
            <div class="modal fade" id="modal-default-theme-year" tabindex="-1" role="dialog" aria-labelledby="modal-default-theme-year"  aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <h6 class="modal-title" id="modal-title-default">Add Theme Year</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">
            <div  id="add-theme-year-form-success" class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text">New Theme Year has been added successfully</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="form-row">
            <div class="col-md-6">
            <label class="form-control-label" for="from_theme_year"> </label>
            <select name="from_theme_year" class="form-control" id="from_theme_year">
            <option value="">From Theme Year</option>
            <?php for ($x = 1900; $x <= 2050; $x++) {?>
            <option value="<?php echo $x;?>" ><?php echo $x;?></option>
            <?php } ?>
            </select>
            </div>
            <div class="col-md-6">
            <label class="form-control-label" for="to_theme_year"> </label>
            <select name="to_theme_year" class="form-control" id="to_theme_year">
            <option value="">To Theme Year</option>
            <?php for ($x = 1900; $x <= 2050; $x++) {?>
            <option value="<?php echo $x;?>" ><?php echo $x;?></option>
            <?php } ?>
            </select>
            </div>
            </div>
            <button  class="btn btn-primary mt-3" type="button" id="add_more_theme_year" name="add_more_theme_year">Submit</button>
            </div>
            </div>
            </div>
            </div>
            <div class="modal fade" id="modal-default-location" tabindex="-1" role="dialog" aria-labelledby="modal-default-location"  aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <h6 class="modal-title" id="modal-title-default">Add Location</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">
            <div  id="add-location-form-success" class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text">New Location has been added successfully</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="form-row">
            <div class="col-md-12">
            <label class="form-control-label" for="newlocation"> </label>
            <input name="locationid" type="text" class="form-control" id="locationid" placeholder="Location Name">
            </div>
            </div>
            <div class="form-row">
            <div class="col-md-12">
            <label class="form-control-label" for="locationAddress"> </label>
            <input name="locationAddress" type="text" class="form-control" id="locationAddress" placeholder="Address">
            </div>
            </div>
            <div class="form-row">
            <div class="col-md-12">
            <label class="form-control-label" for="locationRegion"> </label>
            <input name="locationRegion" type="text" class="form-control" id="locationRegion" placeholder="Region">
            </div>
            </div>
            <button  class="btn btn-primary mt-3" type="button" id="add_more_location" name="add_more_location">Submit</button>
            </div>
            </div>
            </div>
            </div>
            <div class="modal fade" id="modal-default-truck" tabindex="-1" role="dialog" aria-labelledby="modal-default-truck"  aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <h6 class="modal-title" id="modal-title-default">Add Truck</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">
            <div  id="add-truck-form-success" class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text">New truck has been added successfully</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="form-row">
            <div class="col-md-12">
            <label class="form-control-label" for="trucknumber"> </label>
            <input name="trucknumber" type="text" class="form-control" id="trucknumber" placeholder="Truck Number">
            </div>
            </div>
            <div class="form-row">
            <div class="col-md-12">
            <label class="form-control-label" for="yearManufactured"> </label>
            <input name="yearManufactured" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control" id="yearManufactured" placeholder="Year Manufactured">
            </div>
            </div>
            <div class="form-row">
            <div class="col-md-12">
            <label class="form-control-label" for="mileage"> </label>
            <input name="mileage" type="text" class="form-control" id="mileage" placeholder="Mileage">
            </div>
            </div>
            <div class="form-row">
            <div class="col-md-12">
            <label class="form-control-label" for="serviceDate"> </label>
            <input name="serviceDate" type="text" onfocus="(this.type='date')" onblur="(this.type='text')"   class="form-control" id="serviceDate" placeholder="Service Date">
            </div>
            </div>
            <div class="form-row">
            <div class="col-md-12">
            <label class="form-control-label" for="inspectionDate"> </label>
            <input name="inspectionDate" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control" id="inspectionDate" placeholder="Inspection Date">
            </div>
            </div>
            <div class="form-row">
            <div class="col-md-12">
            <label class="form-control-label" for="trucklocation"> </label>
            <input name="trucklocation" type="text" class="form-control" id="trucklocation" placeholder="Location">
            </div>
            </div>
            <button  class="btn btn-primary mt-3" type="button" id="add_more_truck" name="add_more_truck">Submit</button>
            </div>
            </div>
            </div>
            </div>
            <!------------------------ End here ------------------>
            </form>
         </div>
      </div>
   </div>
</div>
</div>
</div>