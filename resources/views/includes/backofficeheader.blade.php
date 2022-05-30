<!-- Begin Header -->
<header id="page-topbar" class="topbar-header">
    <div class="navbar-header">
      <div class="left-bar">
        <div class="navbar-brand-box">
          <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">RRG PORTAL</span>
            <span class="logo-lg">RRG PORTAL</span>
          </a>
          <a href="index.html" class="logo logo-light">
            <span class="logo-sm">RRG PORTAL</span>
            <span class="logo-lg">RRG PORTAL</span>
          </a>
        </div>
        <button type="button" id="vertical-menu-btn" class="btn hamburg-icon">
          <i class="mdi mdi-menu"></i>
        </button>
       
      </div>
      <div class="right-bar">
        <div class="d-none d-lg-inline-flex ml-2">
          <button type="button" data-toggle="fullscreen" class="btn header-item notify-icon" id="full-screen">
            <i class="bx bx-fullscreen"></i>
          </button>
        </div>
        <div class="d-inline-flex ml-0 ml-sm-2 dropdown">
          <button data-toggle="dropdown" aria-haspopup="true" type="button" id="page-header-profile-dropdown" aria-expanded="false" class="btn header-item">
            <img  src='{{ asset("public/backoffice/assets/images/profile-img.png") }}' alt="Header Avatar" class="avatar avatar-xs mr-0">
            <span class="d-none d-xl-inline-block ml-1">Test User</span>
            <i class="bx bx-chevron-down d-none d-xl-inline-block"></i>
          </button>
          <div aria-labelledby="page-header-profile-dropdown" class="dropdown-menu-right dropdown-menu">
            <a href="#" class="dropdown-item"> 
              {{-- {{ route('admin.profile') }} --}}
              <i class="bx bx-user mr-1"></i> Profile
            </a>
            <a href="#" class="dropdown-item">
              {{-- {{ route('admin.changepassword') }} --}}
              <i class="bx bx-wrench mr-1"></i> Change Password
            </a>
            <div class="dropdown-divider"></div>
            <a href="{{ route('logout') }}" class="text-danger dropdown-item">
              <i class="bx bx-log-in mr-1 text-danger"></i> Logout
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Header End -->