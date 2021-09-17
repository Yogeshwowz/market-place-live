<div class="header bg-primary">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Dashoard</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                          <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/dashboard"><i class="fas fa-home"></i></a></li>
                          <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/contact">Manage About</a></li>
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
                <form  action="<?php echo base_url();?>administrator/about-us" method="post" role="form" novalidate=""   id="my_resources" enctype="multipart/form-data">
					<div  id="aresources-form-success" class="alert alert-success alert-dismissible hide" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text">contact has been updated successfully</span>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>
					 <div class="form-row">
                    <div class="col-md-12">
                      <label class="form-control-label" for="editor1">Banner Image</label>
                      <input type="file" name="add_photo" class="form-control"   required >
                      <input type="hidden" name="add_photo_old" class="form-control"   value="<?php if(!empty($aboutUs['banneraboutUs'])) { echo $aboutUs['banneraboutUs']; }?>" >
                    </div>
					</div>
					<div class="form-row" style="margin-top:10px;">
					 <div class="col-md-12 ">
                      <img width="1000px" height="400px"  src="<?php echo base_url();?>assets/upload/<?php if(!empty($aboutUs['banneraboutUs'])) { echo $aboutUs['banneraboutUs']; }?>">
                    </div>
                    </div>
                   
				 <div class="form-row">
                    <div class="col-md-12 ">
                      <label class="form-control-label" for="editor1">About</label>
                      <textarea name="aboutUs" type="text" class="form-control" id="buyeditor1" placeholder="About Us"  required="true"><?php if(!empty($aboutUs['description'])) { echo $aboutUs['description']; }?></textarea>
                     
                    </div>
                   </div>
				   
                  </div>
                  <input  class="btn btn-primary mt-3" type="submit" name="about_admin" Value="Submit">
                </form>
              
			  
		  </div>
		  </div>
         </div>
         </div>
      </div>
     
    </div>
  
  </div>