<form role="form" action="<?php echo base_url();?>sellers" method="post" id="search-form">
	<section class="search_result_page">
		<div class="row p-0 m-0">
			<div class="col-lg-3 col-md-12 p-0">
				<div class="result_left">
					<div class="result_left_top">
						<h6 class="main_heading px_60 py_20">Filter By</h6>
						<div class="result_left_bottom px_60">
							<div class="tab-content">
								<div id="home" class="tab-pane active">
									<div class="accordion" id="business_drop_filter_1">
										<div class="drop_filter py-3 bb_1">
											<button class="drop_filter_btn p-0 collapsed" type="button" data-toggle="collapse" data-target="#collapsesix1" aria-expanded="false" aria-controls="collapsesix1"> <b><i class="fa fa-briefcase pr-2" aria-hidden="true"></i>You are an </b>
												<div class="faq_icon"></div>
											</button>
											<div id="collapsesix1" class="collapse" aria-labelledby="headingsix" data-parent="#business_drop_filter_1">
												<div class="card-body">
													<label class="form-check-label text_bold">
														<input class="search-filter" type="checkbox" name="field_1[]" id="bp" value="1">Business Owner / Director </label>
													<label class="form-check-label text_bold">
														<input class="search-filter" type="checkbox" name="field_1[]" id="mp" value="2">Management Member </label>
													<label class="form-check-label text_bold">
														<input class="search-filter" type="checkbox" name="field_1[]" id="pp" value="3">Advisor / Business Broker </label>
												</div>
											</div>
										</div>
										<div class="drop_filter py-3 bb_1">
											<button class="drop_filter_btn p-0 collapsed" type="button" data-toggle="collapse" data-target="#collapsesix2" aria-expanded="false" aria-controls="collapsesix2"> <b><i class="fa fa-briefcase pr-2" aria-hidden="true"></i>You are interested in </b>
												<div class="faq_icon"></div>
											</button>
											<div id="collapsesix2" class="collapse" aria-labelledby="headingsix" data-parent="#business_drop_filter_1">
												<div class="card-body">
													<label class="form-check-label text_bold">
														<input class="search-filter" type="checkbox" name="interested_in[]" id="bp_1" value="1">Full sale of business </label>
													<label class="form-check-label text_bold">
														<input class="search-filter" type="checkbox" name="interested_in[]" id="mp_1" value="2">Partial stake sale of business/investment </label>
													<label class="form-check-label text_bold">
														<input class="search-filter" type="checkbox" name="interested_in[]" id="pp_1" value="3">Loan for business </label>
												</div>
											</div>
										</div>
									</div>
									<div class="accordion" id="business_drop_filter">
										<div class="drop_filter py-3 bt_1 bb_1">
											<button class="drop_filter_btn p-0" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> <b>Investment Size</b>
												<div class="faq_icon"></div>
											</button>
											<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#business_drop_filter">
												<div class="card-body">
													<div class="row mt-2">
														<div class="col-md-4">
															<label>From</label>
														</div>
														<div class="col-md-4">
															<select id="invest-1" name="invest-1" class="investcls">
																<option value="">From</option>
																<?php for($i=1; $i<=10; $i++){?>
																	<option value="<?php echo $i;?>">
																		<?php echo $i;?>
																	</option>
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
														<div class="col-md-4">
															<label>To</label>
														</div>
														<div class="col-md-4">
															<select id="invest-3" name="invest-3" class="investcls">
																<option value="">To</option>
																<?php for($i=1; $i<=10; $i++){?>
																	<option value="<?php echo $i;?>">
																		<?php echo $i;?>
																	</option>
																	<?php } ?>
																		<option value="11">10+</option>
															</select>
														</div>
														<div class="col-md-4">
															<select id="invest-4" name="invest-4" class="investcls">
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
											<button class="drop_filter_btn p-0 collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix"> <b>Year Established</b>
												<div class="faq_icon"></div>
											</button>
											<div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#business_drop_filter">
												<div class="card-body">
													<select class="js-example-basic-single search-filter-change" name="field_3" id="field_3" required='true'>
														<option selected disabled hidden style='display: none' value=''></option>
														<?php for($i=2021; $i>1990;$i--){?>
															<option value="<?php echo $i;?>">
																<?php echo $i;?>
															</option>
															<?php } ?>
													</select>
												</div>
											</div>
										</div>
										<div class="drop_filter py-3 bb_1">
											<button class="drop_filter_btn p-0 collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven"> <b>Legal Entity</b>
												<div class="faq_icon"></div>
											</button>
											<div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#business_drop_filter">
												<div class="card-body">
													<div class="pt-4 pb-2">
														<label class="form-check-label text_bold">
															<input class="search-filter" type="checkbox" name="field_7[]" id="bp_2" value="1">Sole Proprietorship/Sole Trader </label>
														<label class="form-check-label text_bold">
															<input class="search-filter" type="checkbox" name="field_7[]" id="mp_2" value="2">General Partnership </label>
														<label class="form-check-label text_bold">
															<input class="search-filter" type="checkbox" name="field_7[]" id="pp_2" value="3">Limited Liability Partnership (LLP) </label>
														<label class="form-check-label text_bold">
															<input class="search-filter" type="checkbox" name="field_7[]" id="pp_3" value="4">Limited Liability Company (LLC) </label>
														<label class="form-check-label text_bold">
															<input class="search-filter" type="checkbox" name="field_7[]" id="pp_4" value="5">Private Limited Company </label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="py-2">
									<div class="form-inline py-3 my-lg-0">
										<button class="btn filter_search_btn my-2 my-sm-0" type="submit">Locations<i class="fa fa-map-marker  pl-2" aria-hidden="true"></i></button>
										<input name="field_5" class="filter_search search-filter-address" type="search" placeholder="Filter.." aria-label="Search"> </div>
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
							
							<div class="result_right_body">
								<div class="row">
									<div class="offset-md-8 col-md-4 col-sm-6 py-3">
										<div class="dropdown sort_by_drop w-100 float-right">
											<select name="sortby" class="main_box dropdown-toggle px-4 search-filter-change" name="sort">
												<option value="">Sort By</button>
												</option>
												<option value="1">Price Low to High</option>
												<option value="2">Price High to Low</option>
											</select>
										</div>
									</div>
									<div class="row" id='postsList'> </div>
									<div id='pagination_seller' class="text-center my-5 v-page"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</form>