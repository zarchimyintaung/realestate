<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.dashboard')}}">
          <span class="menu-title">Dashboard</span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-title">Email</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-email menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Inbox</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Read</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Compose</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/icons/mdi.html">
          <span class="menu-title">Calendar</span>
          <i class="mdi mdi-calendar menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-kit" aria-expanded="false" aria-controls="ui-kit">
          <span class="menu-title">UI Kit</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-alert menu-icon"></i>

        </a>
        <div class="collapse" id="ui-kit">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Accordion</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Alerts</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
          <span class="menu-title">Advanced UI</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-link menu-icon"></i>

        </a>
        <div class="collapse" id="ui-advanced">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Cropper</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Owl carousel</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
          <span class="menu-title">Sample Pages</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-file menu-icon"></i>

        </a>
        <div class="collapse" id="general-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{asset('admin/login')}}"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/icons/mdi.html">
          <span class="menu-title">Documentation</span>
          <i class="mdi mdi-pound menu-icon"></i>

        </a>
      </li>

    </ul>
  </nav>
