<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{ url('#') }}">{{ config('app.name') }}</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{ url('#') }}">St</a>
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
      <li class="{{ Request::is('user') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('user') }}"><i class="fas fa-user">
          </i> <span>User</span>
        </a>
      </li>
      {{-- <li class="nav-item dropdown {{ $type_menu === 'forms' ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Forms</span></a>
        <ul class="dropdown-menu">
          <li class="{{ Request::is('forms-advanced-form') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('forms-advanced-form') }}">Advanced Form</a>
          </li>
          <li class="{{ Request::is('forms-editor') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('forms-editor') }}">Editor</a>
          </li>
          <li class="{{ Request::is('forms-validation') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('forms-validation') }}">Validation</a>
          </li>
        </ul>
      </li> --}}
    </ul>
  </aside>
</div>
