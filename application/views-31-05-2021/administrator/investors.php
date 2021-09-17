<div class="header bg-primary">
    <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Dashoard</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/dashboard"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>administrator/investors">Manage Investors</a></li>
                  
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
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                  
                    <th>Name</th>
                    <th>Email</th>
					<th>Password</th>
					<th>Role</th>
                   <!-- <th>Status</th>-->
                    <th>Date</th>
                    <!--<th>Action</th>-->
                  </tr>
                </thead>
                <tbody>
				<?php foreach($users as $users) { ?>
                  <tr>
                    
                    <td><?php if(!empty($users->first_name)) { echo $users->first_name; } ?></td>
					<td><?php if(!empty($users->email)) { echo $users->email; }?></td>
					<td><?php if(!empty($users->plain_password)) { echo $users->plain_password; } ?></td>
                    <td><?php if(!empty($users->role)) { 
					if($users->role==1){ echo"Investor";} 
					if($users->role==2){ echo"Buyer";} 
					if($users->role==3){ echo"Seller"; } 
					if($users->role==4){ echo"Advisor";} 
					} ?></td>
                    <!--<td><?php  if($users->status==0){ echo"Deactive";}else { echo "Active"; }?></td>-->
                    <td><?php if(!empty($users->created_date)) { echo $users->created_date; } ?></td>
                    <!--<td><a class="aeditclass" href="<?php echo base_url();?>edit-admin-user/<?php echo base64_encode($users->id)?>">Edit</a>|<span rel="<?php echo $users->id;?>" class="delete-admin-user">Delete</span> |
					<?php  if($users->status==0){?>
					<span rel="<?php echo $users->id;?>" class="change-status deactive-admin-user">Change Status</span>
					<?php }else { ?>
					<span rel="<?php echo $users->id;?>" class="change-status active-admin-user">Change Status</span>
					<?php  }?></td>-->
				</tr><?php  }  ?>
                   
                </tbody>
			  </table>
            </div>
          </div>
          </div>
      </div>
    </div>
  
</div>