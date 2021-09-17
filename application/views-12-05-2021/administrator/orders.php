<div class="header bg-primary">
    <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Dashoard</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>orders">Manage Orders</a></li>
                  
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
                    <th>Items Name</th>
                    <th>Location</th>
                    <th>Order No</th>
                    <th>Count order No</th>
                    <th>Arrival Date</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
				<?php foreach($orders as $orders) { ?>
                  <tr>
                    <td><?php if(!empty($orders->full_name)) { echo $orders->full_name; } ?></td>
                    <td><?php if(!empty($orders->locationname)) { echo $orders->locationname; } ?></td>
                    <td><?php if(!empty($orders->order_no)) { echo $orders->order_no; } ?></td>
                    <td><?php if(!empty($orders->user_order)) { echo $orders->user_order; } ?></td>
                    <td><?php if(!empty($orders->arrival_date)) { echo $orders->arrival_date; } ?></td>
                    
                    <td><?php if(!empty($orders->created_date)) { echo $orders->created_date; } ?></td>
                    <td>
					<span rel="<?php echo $orders->id;?>" class="delete-orders">Delete</span> 
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