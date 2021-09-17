<div class="header bg-primary">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Dashoard</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                          <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="fas fa-home"></i></a></li>
                          <li class="breadcrumb-item"><a href="<?php echo base_url();?>users">Manage Users</a></li>
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
                <form  action="<?php echo base_url();?>new-admin" method="post" role="form" novalidate=""   id="my_staff_user_form">
					<div  id="add-admin-form-success" class="alert alert-success alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-like-2"></i></span>
					<span class="alert-text">New user has been added successfully</span>
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
                      <label class="form-control-label" for="validationCustom01">First name </label>
                      <input name="first_name" type="text" class="form-control" id="validationCustom01" placeholder="First name"  required="true">
                      <div class="invalid-feedback">
                        Please enter a first name.
                      </div>
                    </div>
					
                    <div class="col-md-6 ">
                      <label class="form-control-label" for="validationCustom02">Last Name</label>
                      <input name="last_name" type="text" class="form-control" id="validationCustom02" placeholder="Last Name"  required="true">
                      <div class="invalid-feedback">
                       Please enter a last Name.
                      </div>
                    </div>
                  </div>
                  <div class="form-row pt-3">
                    <div class="col-md-6">
                      <label class="form-control-label" for="validationCustomUsername">Email</label>
                      <input  name="email" type="email" class="form-control" id="validationCustomUsername" placeholder="Email" aria-describedby="inputGroupPrepend" required="true">
                      <div class="invalid-feedback">
                         Please enter a email
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label class="form-control-label" for="validationCustom03">Password</label>
                      <input  name="password" type="text" class="form-control" id="validationCustom03" placeholder="Password" required="true">
                      <div class="invalid-feedback">
                       Please enter a password
                      </div>
                    </div>
                  </div>
                 <div class="form-row pt-3">
                    <!--<div class="col-md-6">
                      <label class="form-control-label" for="validationCustomUsername">Gender</label>
                      <select class="form-control" name="gender">
					  <option value="">select Gender</option>
					  <option value="male">Male</option>
					  <option value="female">Female</option>
					  </select>
                    </div>-->
                    <div class="col-md-6">
                      <label class="form-control-label" for="validationCustom04">Address</label>
                      <textarea  name="location"  class="form-control" id="validationCustom04" placeholder="Address"></textarea>
                      <div class="invalid-feedback">
                       Please enter a address
                      </div>
                    </div>
                  </div>
                  <input  class="btn btn-primary mt-3" type="submit" name="add_admin" Value="Submit">
                </form>
              
			  
		  </div>
		  </div>
         </div>
         </div>
      </div>
     
    </div>
  
  </div>