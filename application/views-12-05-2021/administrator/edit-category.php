<div class="header bg-primary">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Dashoard</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                          <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="fas fa-home"></i></a></li>
                          <li class="breadcrumb-item"><a href="<?php echo base_url();?>category">Manage Category</a></li>
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
                <form  action="#" method="post" role="form" novalidate=""   id="my_category_form">
					<div  id="add-admin-form-success" class="alert alert-success alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text" id="mess-cate">New category has been added successfully</span>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>
					<div class="form-row">
                    <div class="col-md-6 ">
                      <label class="form-control-label" for="validationCustom01">Category name </label>
                      <input name="category" type="text" class="form-control" id="validationCustom01" placeholder="Category name"  required="true" value="<?php echo $category['category']?>">
                      <div class="invalid-feedback">
                        Please enter a first name.
                      </div>
                    </div>
					</div>
                  </div>
                <input  id="editCatId"  type="hidden" name="editCatId" Value="<?php echo $this->uri->segment(2);?>">
                  <input  class="btn btn-primary mt-3" type="submit" name="add_category" Value="Submit">
                </form>
              
			  
		  </div>
		  </div>
         </div>
         </div>
      </div>
     
    </div>
  
  </div>