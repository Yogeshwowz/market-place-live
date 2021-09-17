<div class="header bg-primary">
    <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Dashoard</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin-users">Manage Event Types</a></li>
                  
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
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th>Event Types Name</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
				<?php foreach($eventType as $eventType) { ?>
                  <tr>
                    <td><?php if(!empty($eventType->event_types)) { echo $eventType->event_types; } ?></td>
                    
                    <td><?php if(!empty($eventType->created_date)) { echo $eventType->created_date; } ?></td>
                    <td><a class="aeditclass" href="<?php echo base_url();?>edit-event/<?php echo base64_encode($eventType->id)?>">Edit</a>|
					<span rel="<?php echo $eventType->id;?>" class="delete-eventtype">Delete</span> 
					</td>
				</tr><?php  }  ?>
                   
                </tbody>
			  </table>
            </div>
          </div>
          </div>
      </div>
    </div>
  
</div>