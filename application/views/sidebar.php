<style>
.num {
  position: absolute;
  right: 11px;
  top: 6px;
  color: #fff;
  background-color:red;
  border-radius:50%;
  padding:4px;
  padding-left:6px;
  padding-right:6px;
  

}
</style>
<?php
if (isset($this->session->userdata['log_del'])) {
$username = ($this->session->userdata['log_del']['username']);
$name = ($this->session->userdata['log_del']['name']);

} else {
header("location: ".base_url()."user_authentication");
}
?>
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        
        <div class="sidebar-brand-text mx-3">EasyOwn App</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>main">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-user"></i>
          <span>Profile</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">EasyOwn</h6>
            
             <a class="collapse-item" href="<?php echo base_url(); ?>Manager-Profile">Profile</a>
           
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
     

      <!-- Divider -->
    
  
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-gift" id="cake_count"></i>
          <span>App Management</span>
        </a>
        <div id="collapse5" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Management </h6>
            <a class="collapse-item" href="<?php echo base_url(); ?>Cake/order_pending"> Sell</a>
            <a class="collapse-item" href="<?php echo base_url(); ?>Cake/order"></i> Mortage</a>
              <a class="collapse-item" href="<?php echo base_url(); ?>Cake/order"></i> Rent</a>

          </div>
        </div>
      </li>
     

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-shopping-cart" id="gift_count"></i>
          <span>Daily Recommendation</span>
        </a>
        <div id="collapse6" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"> Management </h6>
            <a class="collapse-item" href="<?php echo base_url(); ?>Gift/gift_pending"> Daily Recommendation</a>
          </div>
        </div>
      </li>




      <hr class="sidebar-divider">


      <!-- Heading -->
     

    

      <!-- Divider -->
      <!--<hr class="sidebar-divider d-none d-md-block">-->

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
