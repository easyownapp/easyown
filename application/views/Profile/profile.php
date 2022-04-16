<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Profile Management</h1>
        
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
            </div>
           
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered dt-responsive" width="100%" cellspacing="0">
                
                    <tr>
                      <th>Delivery Person Name</th><td><?= $delivery['del_name'] ?></td>

                      </tr><tr>
                   
                      <th>Mobile Number</th><td><?= $delivery['del_mobile'] ?></td>
                      </tr><tr>
                      <th>Address</th><td><?= $delivery['del_address'] ?></td>
                      </tr><tr>

                      <th>Username</th><td><?= $delivery['del_username'] ?></td>
                      </tr><tr>

                      <th>Password</th><td><?= $delivery['del_password'] ?></td>
                      </tr><tr>
                        <th>Joined At</th><td><?= $delivery['created_at'] ?></td>
                     
                      
                    </tr>
            
                </table>
              </div>
            </div>
          </div>

        </div>