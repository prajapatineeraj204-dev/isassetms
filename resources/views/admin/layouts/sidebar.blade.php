<div>
    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="{{asset('assets/images/logo/logo.png')}}" alt=""></a>
      <div class="back-btn"><i data-feather="grid"></i></div>
      <div class="toggle-sidebar icon-box-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
    </div>
    <div class="logo-icon-wrapper"><a href="index.html">
        <div class="icon-box-sidebar"><i data-feather="grid"></i></div></a></div>
    <nav class="sidebar-main">
      <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
      <div id="sidebar-menu">
        <ul class="sidebar-links" id="simple-bar">
          <li class="back-btn">
            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
          </li>
          <li class="pin-title sidebar-list">
            <h6>Pinned</h6>
          </li>
          <hr>
          <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{route('admin.index')}}"><i data-feather="home"> </i><span>Dashboard</span></a></li>

          {{-- <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="home"></i><span class="la  n-3">Dashboard</span></a>
            <ul class="sidebar-submenu">
              <li><a class="lan-4" href="index.html">Default</a></li>
              <li><a class="lan-5" href="dashboard-02.html">Ecommerce</a></li>
            </ul>
        </li> --}}
        {{-- role permission --}}
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="lock"></i><span>Role Permission</span></a>
            <ul class="sidebar-submenu">
              <li><a class="" href="{{route('role.index')}}">Role</a></li>
              <li><a class="" href="dashboard-02.html">Permission</a></li>
            </ul>
        </li>
        {{-- end role permission --}}
          <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="support-ticket.html"><i data-feather="users"> </i><span>User</span></a></li>
        </ul>
      </div>
      <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </nav>
  </div>
