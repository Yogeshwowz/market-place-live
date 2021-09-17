<div class="header bg-primary">
    <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Dashoard</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/dashboard"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/testimonial">Manage Testimonial</a></li>
                  
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
            <!-- Card header -->
            <div class="py-4">
			<?php 
				$delete = $this->session->flashdata('delete');
				if($delete){ ?>
					<div class="alert alert-success alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<?php echo $delete; ?>                    
					</div>
				<?php } ?>
              <table class="table table-flush" id="datatable-basic" >
                <thead class="thead-light">
                  <tr>
                    <th>Name</th>
                    <th>title</th>
					<th>subtitle</th>
					<th>image</th>
                    <th>description</th>
                    
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
				<?php foreach($testimonial as $testimonial) { ?>
                  <tr>
                    
                    <td><?php if(!empty($testimonial->name)) { echo $testimonial->name; } ?></td>
                    <td><?php if(!empty($testimonial->title)) { echo $testimonial->title; } ?></td>
                    <td><?php if(!empty($testimonial->subtitle)) { echo $testimonial->subtitle; } ?></td>
                    <td><img style="width:100px; height:100px;" src="../assets/upload/<?php if(!empty($testimonial->image)) { echo $testimonial->image; } ?>"></td>
                    <td><?php if(!empty($testimonial->description)) { echo $testimonial->description; } ?></td>
				
                    <td><a  target="_blank" class="aeditclass" href="<?php echo base_url();?>administrator/update-testimonial/<?php echo base64_encode($testimonial->id)?>">Edit</a> | <span rel="<?php echo $testimonial->id;?>" class="delete-testimonial">Delete</span> </td>
				</tr><?php  }  ?>
                   
                </tbody>
			  </table>
            </div>
          </div>
          </div>
      </div>
    </div>
  
</div>