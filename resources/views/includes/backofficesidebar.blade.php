<?php
$slugs = request()->segments();
$route = Route::currentRouteName();
?>

<!-- Begin Left Navigation -->
<!-- Begin Left Navigation -->
<aside class="side-navbar">
    <div class="scroll-content" id="metismenu">
      <ul id="side-menu" class="metismenu list-unstyled">
        <li class="side-nav-title side-nav-item menu-title">Menu</li>
        <li class="<?php echo ($route == 'backoffice.dashboard') ? 'mm-active' : ''; ?>">
          <a class="side-nav-link <?php echo ($route == 'backoffice.dashboard') ? 'mm-active' : ''; ?>" href="{{ route('backoffice.dashboard') }}">
            <i class="bx bx-home-circle"></i>
            <span> Dashboard</span>
          </a>
        </li>
        <li class="<?php echo (in_array('universities', $slugs)) ? 'mm-active' : ''; ?>">
          <a href="javascript:void(0);" class="side-nav-link" aria-expanded="false">
            <i class="bx bx-buildings"></i>
            <span> Universities</span>
            <span class="menu-arrow"></span>
          </a>
          <ul aria-expanded="false" class="nav-second-level">
            <li class="side-nav-item">
              <a class="side-nav-link <?php echo ($route == 'backoffice.universities.add') ? 'active' : ''; ?>" href="{{ route('backoffice.universities.add') }}"> Add University </a>
            </li>
            <li class="side-nav-item">
              <a class="side-nav-link <?php echo ($route == 'backoffice.universities') ? 'active' : ''; ?>" href="{{ route('backoffice.universities') }}">View Universities </a>
            </li>
          </ul>
        </li>
        <li class="<?php echo (in_array('courses', $slugs)) ? 'mm-active' : ''; ?>">
          <a href="javascript:void(0);" class="side-nav-link" aria-expanded="false">
            <i class="bx bx-layer"></i>
            <span> Courses</span>
            <span class="menu-arrow"></span>
          </a>
          <ul aria-expanded="false" class="nav-second-level">
            <li class="side-nav-item">
              <a class="side-nav-link <?php echo ($route == 'backoffice.courses.add') ? 'active' : ''; ?>" href="{{ route('backoffice.courses.add') }}"> Add Course </a>
            </li>
            <li class="side-nav-item">
              <a class="side-nav-link <?php echo ($route == 'backoffice.courses') ? 'active' : ''; ?>" href="{{ route('backoffice.courses') }}">View Courses </a>
            </li>
          </ul>
        </li>
        <li class="<?php echo (in_array('applications', $slugs)) ? 'mm-active' : ''; ?>">
          <a href="javascript:void(0);" class="side-nav-link" aria-expanded="false">
            <i class="bx bx-copy-alt"></i>
            <span> Applications</span>
            <span class="menu-arrow"></span>
          </a>
          <ul aria-expanded="false" class="nav-second-level">
            <li class="side-nav-item">
              <a class="side-nav-link <?php echo ($route == 'backoffice.applications.add') ? 'active' : ''; ?>" href="{{ route('backoffice.applications.add') }}"> Add Application </a>
            </li>
            <li class="side-nav-item">
              <a class="side-nav-link <?php echo ($route == 'backoffice.applications') ? 'active' : ''; ?>" href="{{ route('backoffice.applications') }}">View Applications </a>
            </li>
          </ul>
        </li>
        <li class="<?php echo (in_array('events', $slugs)) ? 'mm-active' : ''; ?>">
          <a class="side-nav-link <?php echo (in_array('events', $slugs)) ? 'mm-active' : ''; ?>" href="{{ route('backoffice.events') }}">
            <i class="bx bx-calendar-event"></i>
            <span>Events</span>
          </a>
        </li>
        <li class="<?php echo (in_array('documents', $slugs)) ? 'mm-active' : ''; ?>">
          <a class="side-nav-link <?php echo (in_array('documents', $slugs)) ? 'active' : ''; ?>" href="{{ route('backoffice.documents') }}">
            <i class="bx bx-book"></i>
            <span> Upload Documents</span>
          </a>
        </li>
        <li class="<?php echo (in_array('admindocuments', $slugs)) ? 'mm-active' : ''; ?>">
          <a class="side-nav-link <?php echo (in_array('admindocuments', $slugs)) ? 'mm-active' : ''; ?>" href="{{ route('backoffice.admindocuments') }}">
            <i class="bx bx-book"></i>
            <span> Documents</span>
          </a>
        </li>
        <li class="<?php echo (in_array('countries', $slugs)) ? 'mm-active' : ''; ?>">
          <a class="side-nav-link <?php echo (in_array('countries', $slugs)) ? 'active' : ''; ?>" href="{{ route('backoffice.countries') }}">
            <i class="bx bx-flag"></i>
            <span>Countries</span>
          </a>
        </li>
        <li class="<?php echo (in_array('students', $slugs)) ? 'mm-active' : ''; ?>">
          <a href="javascript:void(0);" class="side-nav-link" aria-expanded="false">
            <i class="bx bxs-graduation"></i>
            <span> Students</span>
            <span class="menu-arrow"></span>
          </a>
          <ul aria-expanded="false" class="nav-second-level">
            <li class="side-nav-item">
              <a class="side-nav-link <?php echo ($route == 'backoffice.students.add') ? 'active' : ''; ?>" href="{{ route('backoffice.students.add') }}"> Add Student </a>
            </li>
            <li class="side-nav-item">
              <a class="side-nav-link <?php echo ($route == 'backoffice.students') ? 'active' : ''; ?>" href="{{ route('backoffice.students') }}">View Students </a>
            </li>
          </ul>
        </li>
        <li class="<?php echo (in_array('news', $slugs)) ? 'mm-active' : ''; ?>">
          <a class="side-nav-link <?php echo (in_array('news', $slugs)) ? 'mm-active' : ''; ?>" href="{{ route('backoffice.news') }}">
            <i class="bx bxs-news"></i>
            <span>News</span>
          </a>
        </li>
        <li class="<?php echo (in_array('supporttickets', $slugs)) ? 'mm-active' : ''; ?>">
          <a class="side-nav-link <?php echo (in_array('supporttickets', $slugs)) ? 'mm-active' : ''; ?>" href="{{ route('backoffice.supporttickets') }}">
            <i class="bx bx-support"></i>
            <span> Support Ticket</span>
          </a>
        </li>
        <li class="<?php echo (in_array('application_guidance', $slugs)) ? 'mm-active' : ''; ?>">
          <a class="side-nav-link <?php echo (in_array('application_guidance', $slugs)) ? 'mm-active' : ''; ?>" href="{{ route('backoffice.application_guidance') }}">
            <i class="bx bxs-news"></i>
            <span>Application Guidance</span>
          </a>
        </li>
        <li class="<?php echo (in_array('contactus', $slugs)) ? 'mm-active' : ''; ?>">
          <a class="side-nav-link <?php echo (in_array('contactus', $slugs)) ? 'mm-active' : ''; ?>" href="{{ route('backoffice.contactus') }}">
            <i class="bx bx-mail-send"></i>
            <span> Contactus</span>
          </a>
        </li>
        <li class="<?php echo (in_array('brochures', $slugs)) ? 'mm-active' : ''; ?>">
          <a href="javascript:void(0);" class="side-nav-link" aria-expanded="false">
            <i class="bx bx-buildings"></i>
            <span> Brochures</span>
            <span class="menu-arrow"></span>
          </a>
          <ul aria-expanded="false" class="nav-second-level">
            <li class="side-nav-item">
              <a class="side-nav-link <?php echo ($route == 'backoffice.brochures.add') ? 'active' : ''; ?>" href="{{ route('backoffice.brochures.add') }}"> Add Brochure </a>
            </li>
            <li class="side-nav-item">
              <a class="side-nav-link <?php echo ($route == 'backoffice.brochures') ? 'active' : ''; ?>" href="{{ route('backoffice.brochures') }}">View Brochures </a>
            </li>
          </ul>
        </li>
        <li class="<?php echo (in_array('courses', $slugs)) ? 'mm-active' : ''; ?>">
          <a href="javascript:void(0);" class="side-nav-link" aria-expanded="false">
            <i class="bx bx-layer"></i>
            <span>Hr</span>
            <span class="menu-arrow"></span>
          </a>
          <ul aria-expanded="false" class="nav-second-level">
            <li class="side-nav-item">
              <a class="side-nav-link <?php echo ($route == 'backoffice.attendance') ? 'active' : ''; ?>" href="{{ route('backoffice.attendance') }}"> Attendance Report </a>
            </li>
            <li class="side-nav-item">
              <a class="side-nav-link <?php echo ($route == 'backoffice.payslip') ? 'active' : ''; ?>" href="{{ route('backoffice.payslip') }}">Pay Slip </a>
            </li>
            <li class="side-nav-item">
              <a class="side-nav-link <?php echo ($route == 'backoffice.employmentcontract') ? 'active' : ''; ?>" href="{{ route('backoffice.employmentcontract') }}">Employement Contract </a>
            </li>
            <li class="side-nav-item">
              <a class="side-nav-link <?php echo ($route == 'backoffice.emergencydetails') ? 'active' : ''; ?>" href="{{ route('backoffice.emergencydetails') }}">Emergency Details</a>
            </li>
          </ul>
      </ul>
    </div>
  </aside>
  <!-- Left Navigation End -->
  <!-- Left Navigation End -->