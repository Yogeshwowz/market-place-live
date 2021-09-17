<div class="header bg-primary">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Dashoard</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                          <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/dashboard"><i class="fas fa-home"></i></a></li>
                          <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/resources">Manage Resources</a></li>
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
                <form  action="<?php echo base_url();?>administrator/resources" method="post" role="form" novalidate=""   id="my_resources">
					<div  id="aresources-form-success" class="alert alert-success alert-dismissible hide" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text">resources has been updated successfully</span>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>
					
					
                  <div class="form-row">
                    <div class="col-md-12 ">
                      <label class="form-control-label" for="editor1">How to Buy </label>
                      <textarea name="buy" type="text" class="form-control" id="buyeditor1" placeholder="Business name"  required="true"><?php if(!empty($resources['buy'])) { echo $resources['buy']; }?></textarea>
                      <div class="invalid-feedback">
                        Please enter a business name.
                      </div>
                    </div>
                    
                  </div>
				   <div class="form-row">
                    <div class="col-md-12 ">
                      <label class="form-control-label" for="selleditor1">How to Sell </label>
                      <textarea name="sell" type="text" class="form-control" id="selleditor1" placeholder="Business name"  required="true"><?php if(!empty($resources['sell'])) { echo $resources['sell']; }?></textarea>
                      <div class="invalid-feedback">
                        Please enter a business name.
                      </div>
                    </div>
                    
                  </div>
                   <div class="form-row">
                    <div class="col-md-12 ">
                      <label class="form-control-label" for="selleditor1">How to create a business plan </label>
                      <textarea name="business_plan" type="text" class="form-control" id="business_plan" placeholder="Business name"  required="true"><?php if(!empty($resources['business_plan'])) { echo $resources['business_plan']; }?></textarea>
                      <div class="invalid-feedback">
                        Please enter a business name.
                      </div>
                    </div>
                    
                  </div>
                  </div>
                  <input  class="btn btn-primary mt-3" type="submit" name="resources_admin" Value="Submit">
                </form>
              
			  
		  </div>
		  </div>
         </div>
         </div>
      </div>
     
    </div>
  
  </div>