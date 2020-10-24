    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-text mx-2">My <b>Blog</b></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Home
      </div>

      <!-- Nav Item - Home -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#home" aria-expanded="true" aria-controls="home">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span>
        </a>
        <div id="home" class="collapse" aria-labelledby="headingUtilities" data-parent="">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item pl-2" href="<?= site_url('admin') ?>">
              <i class="fas fa-fw fa-tachometer-alt mr-1"></i>
              <span>Dashboard</span></a>
            <a class="collapse-item pl-2" href="">
              <i class="fas fa-fw fa-user mr-1"></i>
              <span>My Profile</span></a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Artikel
      </div>

      <!-- Artikel -->
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>Artikel</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-list"></i>
          <span>Kategori Artikel</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        User
      </div>

      <!-- Artikel -->
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('penulis') ?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Penulis</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-cog"></i>
          <span>Admin</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider mb-0">

      <!-- Logout -->
      <li class="nav-item">
        <a class="nav-link" href="/auth/logout">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->