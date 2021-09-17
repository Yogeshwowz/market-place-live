<div class="header bg-primary">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Dashoard</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                          <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="fas fa-home"></i></a></li>
                          <li class="breadcrumb-item"><a href="<?php //echo base_url();?>admin-users">Manage Orders</a></li>
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
                <form  action="#" method="post" role="form" novalidate=""   id="my_orders_form">
					<div  id="add-admin-form-success" class="alert alert-success alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text">New order has been added successfully</span>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>
					<div   id="add-admin-form-warning" class="alert alert-warning alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text">This Email is alreadly exist in database .Please try other email id</span>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>
					
                  <div class="form-row">
                    <div class="col-md-6 ">
                      <label class="form-control-label" for="validationCustom01">Items Name</label>
                      <select name="items_name"  class="form-control search-category-item search-common-item" id="items_name" required="true">
					  <option value="">Select Item Name</option>
					  <?php foreach($itemslist as $itemslist){?>
					  <option value="<?php echo $itemslist->item_name; ?>"><?php echo $itemslist->full_name; ?></option>
					  <?php } ?>
					  </select>
                      
                    </div>
                     <div class="col-md-6  com-cls-8 pt-3 " id="locationDiv">
                           <div class="row">
                              <div class="col-md-8 com-cls-8">
                                 <label class="form-control-label" for="select_location">Location</label>
                                 <select name="location" class="form-control search-location
								 search-common-item " id="select_location" >
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
						
                  </div>
				    <div class="form-row pt-3">
                    <div class="col-md-6">
                      <label class="form-control-label" for="validationCustom01">Order #</label>
                      <input name="order_no" type="text" class="form-control numbervalidation" id="order_no" placeholder="Order No"  required="true">
                      <div class="invalid-feedback">
                        Please enter a first name.
                      </div>
                    </div>
					
                    <div class="col-md-6 ">
                      <label class="form-control-label" for="validationCustom02">Count for each item</label>
                      <input name="user_order" type="text" class="form-control numbervalidation" id="user_order" placeholder="Count for each item"  required="true">
                      <div class="invalid-feedback">
                       Please enter a last Name.
                      </div>
                    </div>
                  </div>
                
                 
				 <div class="form-row pt-3">
                    <div class="col-md-6">
                      <label class="form-control-label" for="validationCustomUsername1">Arrival Date Address</label>
                      <input  name="arrival_date" type="date" class="form-control" id="arrival_date" placeholder="Arrival Date Address" aria-describedby="inputGroupPrepend" >
                      
                    </div>
                   
                  </div>
				   <div class="form-row pt-3">
                    <div class="col-md-6">
                  <input  class="btn btn-primary mt-3" type="submit" name="add_admin" Value="Submit">
				  <!--------------------->
				   <input   type="hidden" name="stock_count_value" Value="" id="stock_count_value">
				   </div>
				     <div class="col-md-6">
				   <div  id="order-count" class="alert alert-success alert-dismissible fade show" role="alert">
					<span class="alert-icon"></span>
					<span class="alert-text" id="msg-id">New order has been added successfully</span>
					
					</div>
					</div>
					</div>
					
				  <!------------->
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


			   </form>
              
			  
		  </div>
		  </div>
         </div>
         </div>
      </div>
     
    </div>
  
  </div>

            