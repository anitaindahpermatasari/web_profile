 <!-- Sidebar -->
 <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon rotate-n-0">
             <img src="<?= base_url(); ?>assets/img/foto.png" height="50" width="50">
         </div>
         <div class="sidebar-brand-text mx-0">WEB PROFILE</div>
     </a>

     <!-- Divider -->
     <div class="m-t-5">
         <hr class="sidebar-divider">

         <!-- Heading -->
         <div class="sidebar-heading">
             ABOUT ME
         </div>

         <!-- Nav Item - Dashboard -->
         <li class="nav-item active">
             <a class="nav-link" href="<?= base_url('about_me/') ?>">
                 <i class="fas fa-fw fa-tachometer-alt"></i>
                 <span>About Me</span></a>

             <!-- Divider -->
             <hr class="sidebar-divider">

             <!-- Heading -->
             <div class="sidebar-heading">
                 HISTORY PENDIDIKAN
             </div>

         <li class="nav-item active">
             <a class="nav-link" href="<?= base_url('history_pendidikan/') ?>">
                 <i class="fas fa-users"></i>
                 <span>History Pendidikan</span></a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Heading -->
         <div class="sidebar-heading">
             PENGALAMAN
         </div>

         <li class="nav-item active">
             <a class="nav-link" href="<?= base_url('pengalaman/') ?>">
                 <i class="fas fa-utensils"></i>
                 <span>Pengalaman</span></a>

             <!-- Divider -->
             <hr class="sidebar-divider">

             <!-- Heading -->
             <div class="sidebar-heading">
                CONTACT ME
             </div>

         <li class="nav-item active">
             <a class="nav-link" href="<?= base_url('contact_me/') ?>">
                 <i class="fas fa-filter"></i>
                 <span>Contact Me</span></a>
         </li>


         <!-- Divider -->
         <hr class="sidebar-divider d-none d-md-block">

         <!-- Sidebar Toggler (Sidebar) -->
         <div class="text-center d-none d-md-inline">
             <button class="rounded-circle border-0" id="sidebarToggle"></button>
         </div>

 </ul>
 <!-- End of Sidebar -->
