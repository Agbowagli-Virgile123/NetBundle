@props(['title' => ''])

<x-layouts.base :$title>
      <!-- Dashboard Container -->
  <div class="dashboard-container">

    <!-- Sidebar -->
    <aside class="dashboard-sidebar" id="sidebar">
      <div class="sidebar-header">
        <div class="brand-logo">
          <h4 class="mb-0">
            <span class="text-warning">Net</span> <span class="text-white">Bundle</span>
          </h4>
        </div>
        <button class="sidebar-toggle d-lg-none" id="sidebarClose">
          <i class="bi bi-x"></i>
        </button>
      </div>

      <!-- User Profile -->
      <div class="sidebar-user">
        <div class="user-avatar">
          <i class="bi bi-person-circle"></i>
        </div>
        <div class="user-info">
          <h6 class="user-name">John Doe</h6>
          <span @class(['user-role', 'admin-role'])>ADMIN</span>
          <!-- For Agent: <span class="user-role agent-role">Agent</span> -->
        </div>
      </div>

      <!-- Navigation Menu -->
        <nav class="sidebar-nav">
            <ul class="nav-list">

                <!-- Dashboard -->
                <x-cms.nav-item
                    path="/admin/dashboard"
                    icon="speedometer2"
                    title="Dashboard"
                />

                <!-- Admin Menu Items -->
                <x-cms.side-bar-nav-section title="Management" />

                <x-cms.nav-item
                    path="/admin/users"
                    icon="people"
                    title="Users"
                    badge="24"
                />

                <x-cms.nav-item
                    path="/admin/agents"
                    icon="person-badge"
                    title="Agents"
                    badge="156"
                />

                <x-cms.nav-item
                    path="/admin/transactions"
                    icon="receipt"
                    title="Transactions"
                />

                <x-cms.nav-item
                    path="/admin/bundles"
                    icon="box-seam"
                    title="Bundles"
                />

                <x-cms.nav-item
                    path="/admin/networks"
                    icon="diagram-3"
                    title="Networks"
                />

                <!-- Common Menu Items -->
                <x-cms.side-bar-nav-section title="Sales" />

                <x-cms.nav-item
                    path="/orders"
                    icon="cart-check"
                    title="Orders"
                    badge="12"
                    badgeClass="badge-success"
                />

                <x-cms.nav-item
                    path="/customers"
                    icon="person-lines-fill"
                    title="Customers"
                />

                <!-- Reports -->
                <x-cms.side-bar-nav-section title="Reports" />

                <x-cms.nav-item
                    path="/reports/analytics"
                    icon="bar-chart"
                    title="Analytics"
                />

                <x-cms.nav-item
                    path="/reports/revenue"
                    icon="currency-dollar"
                    title="Revenue"
                />

                <!-- Settings -->
                <x-cms.side-bar-nav-section title="Settings" />

                <x-cms.nav-item
                    path="/admin/settings"
                    icon="gear"
                    title="System Settings"
                />

                <x-cms.nav-item
                    path="/profile"
                    icon="person"
                    title="My Profile"
                />

                <x-cms.nav-item
                    path="/support"
                    icon="headset"
                    title="Support"
                />
            </ul>
        </nav>


      <!-- Sidebar Footer -->
      <div class="sidebar-footer">
          <form action="{{ route('logout') }}" method="post">
              @csrf
              <a class="dropdown-item text-danger" href="{{route('logout')}}"
                 onclick="event.preventDefault(); this.closest('form').submit();"
              >
                  <i class="bi bi-box-arrow-right me-2"></i>Logout
              </a>
          </form>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="dashboard-main">

      <!-- Top Navigation Bar -->
      <header class="dashboard-header">
        <div class="header-left">
          <button class="sidebar-toggle d-lg-none" id="sidebarToggle">
            <i class="bi bi-list"></i>
          </button>
          <h5 class="page-title mb-0">{{$title}}</h5>
        </div>

        <div class="header-right">
          <!-- Search -->
          <div class="header-search d-none d-md-block">
            <i class="bi bi-search"></i>
            <input type="text" class="form-control" placeholder="Search...">
          </div>

          <!-- Notifications -->
          <div class="header-item dropdown">
            <button class="header-btn dropdown-toggle" data-bs-toggle="dropdown">
              <i class="bi bi-bell"></i>
              <span class="notification-badge">5</span>
            </button>
            <div class="dropdown-menu dropdown-menu-end notification-dropdown">
              <div class="dropdown-header">
                <h6 class="mb-0">Notifications</h6>
                <span class="badge bg-primary">5 New</span>
              </div>
              <div class="notification-list">
                <a href="#" class="notification-item unread">
                  <div class="notification-icon bg-primary">
                    <i class="bi bi-cart-check"></i>
                  </div>
                  <div class="notification-content">
                    <p class="notification-title">New order received</p>
                    <span class="notification-time">2 minutes ago</span>
                  </div>
                </a>
                <a href="#" class="notification-item unread">
                  <div class="notification-icon bg-success">
                    <i class="bi bi-person-plus"></i>
                  </div>
                  <div class="notification-content">
                    <p class="notification-title">New agent registered</p>
                    <span class="notification-time">1 hour ago</span>
                  </div>
                </a>
                <a href="#" class="notification-item">
                  <div class="notification-icon bg-warning">
                    <i class="bi bi-exclamation-triangle"></i>
                  </div>
                  <div class="notification-content">
                    <p class="notification-title">Low stock alert</p>
                    <span class="notification-time">3 hours ago</span>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer">
                <a href="/notifications">View All Notifications</a>
              </div>
            </div>
          </div>

          <!-- User Menu -->
          <div class="header-item dropdown">
            <button class="header-user-btn dropdown-toggle" data-bs-toggle="dropdown">
              <div class="user-avatar-small">
                <i class="bi bi-person-circle"></i>
              </div>
              <span class="d-none d-md-inline">John Doe</span>
            </button>
            <div class="dropdown-menu dropdown-menu-end user-dropdown">
              <div class="dropdown-header">
                <div class="user-avatar-large">
                  <i class="bi bi-person-circle"></i>
                </div>
                <div>
                  <h6 class="mb-0">John Doe</h6>
                  <small class="text-muted">admin@netbundle.com</small>
                </div>
              </div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/profile">
                <i class="bi bi-person me-2"></i>My Profile
              </a>
              <a class="dropdown-item" href="/settings">
                <i class="bi bi-gear me-2"></i>Settings
              </a>
              <a class="dropdown-item" href="/help">
                <i class="bi bi-question-circle me-2"></i>Help Center
              </a>
              <div class="dropdown-divider"></div>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <a class="dropdown-item text-danger" href="{{route('logout')}}"
                       onclick="event.preventDefault(); this.closest('form').submit();"
                    >
                        <i class="bi bi-box-arrow-right me-2"></i>Logout
                    </a>
                </form>
            </div>
          </div>
        </div>
      </header>

      <!-- Page Content -->
        <div class="cms-content">
            <div class="container-fluid">
                {{ $slot }}
            </div>
        </div>

      <!-- Footer -->
      <x-cms.footer />

    </main>

  </div>

  <!-- Overlay for mobile -->
  <div class="sidebar-overlay" id="sidebarOverlay"></div>

</x-layouts.base>
