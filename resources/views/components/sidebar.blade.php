<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{ url('#') }}">{{ config('app.name') }}</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{ url('#') }}">LR</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="nav-item dropdown {{ request()->is('dashboard*') ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        <ul class="dropdown-menu">
          <li class='{{ Request::is('dashboard-general') ? 'active' : '' }}'>
            <a class="nav-link" href="{{ url('dashboard-general') }}">General Dashboard</a>
          </li>
          <li class="{{ Request::is('dashboard-ecommerce') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('dashboard-ecommerce') }}">Ecommerce Dashboard</a>
          </li>
        </ul>
      </li>
      <li class="menu-header">Settings</li>
      <li class="nav-item dropdown {{ request()->is('user*') ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Manajemen User</span></a>
        <ul class="dropdown-menu">
          <li class="{{ Request::is('user/create') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('user/create') }}">Tambah User</a>
          </li>
          <li class='{{ Request::is('user') ? 'active' : '' }}'>
            <a class="nav-link" href="{{ url('user') }}">Daftar User</a>
          </li>
        </ul>
      </li>
      <li class="{{ Request::is('role*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('role') }}"><i class="fa-solid fa-user-gear"></i> <span>Role User</span></a>
      </li>
    </ul>
  </aside>
</div>
