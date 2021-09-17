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
			  <?php 
				$success = $this->session->flashdata('success');
				if($success){ ?>
					<div class="alert alert-success alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<?php echo $success; ?>                    
					</div>
				<?php } ?>
                <form  action="<?php echo base_url();?>administrator/update-testimonial/<?php echo $this->uri->segment(3);?>" method="post" role="form" novalidate=""   id="my_testimonial" enctype="multipart/form-data">
					<div  id="aresources-form-success" class="alert alert-success alert-dismissible hide" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text">contact has been updated successfully</span>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>
					 <div class="form-row">
                       <div class="col-md-12">
                      <label class="form-control-label" for="editor1">Name</label>
                      <input type="text" name="name" class="form-control"   required="true"  placeholder="Name" value="<?php if(!empty($testimonial['name'])) { echo $testimonial['name']; } ?>">
                      </div>
					</div>
					<div class="form-row">
                       <div class="col-md-12">
                      <label class="form-control-label" for="editor1">Title</label>
                      <input type="text" name="title" class="form-control"   required="true"  placeholder="Title" value="<?php if(!empty($testimonial['title'])) { echo $testimonial['title']; } ?>">
                      </div>
					</div>
					<div class="form-row">
                       <div class="col-md-12">
                      <label class="form-control-label" for="editor1">SubTitle</label>
                      <input type="text" name="subtitle" class="form-control"   required="true"  placeholder="Sub Title" value="<?php if(!empty($testimonial['subtitle'])) { echo $testimonial['subtitle']; } ?>"> 
                      </div>
					</div>
					 <div class="form-row">
                    <div class="col-md-12 ">
                      <label class="form-control-label" for="editor1">Message</label>
                      <textarea name="description" type="text" class="form-control"  placeholder="Message"  required="true"><?php if(!empty($testimonial['description'])) { echo $testimonial['description']; } ?></textarea>
                     
                    </div>
                   </div>
					
					 <div class="form-row">
                       <div class="col-md-12">
                      <label class="form-control-label" for="editor1">Image</label>
                      <input type="file" name="image" class="form-control">
                      <input type="hidden" name="oldimage" class="form-control"  value="<?php if(!empty($testimonial['image'])) { echo $testimonial['image']; } ?>">
                      
                    </div>
					</div>
					</div>
                  <input  class="btn btn-primary mt-3" type="submit" name="testimonial_btn" Value="Submit">
                </form>
              
			  
		  </div>
		  </div>
         </div>
         </div>
      </div>
     
    </div>
  
  </div>