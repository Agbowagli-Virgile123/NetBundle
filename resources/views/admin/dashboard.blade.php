<x-layouts.base>
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
          <span class="user-role admin-role">Administrator</span>
          <!-- For Agent: <span class="user-role agent-role">Agent</span> -->
        </div>
      </div>

      <!-- Navigation Menu -->
      <nav class="sidebar-nav">
        <ul class="nav-list">

          <!-- Dashboard -->
          <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link active">
              <i class="bi bi-speedometer2"></i>
              <span>Dashboard</span>
            </a>
          </li>

          <!-- Admin Menu Items -->
          <li class="nav-section admin-only">
            <span class="nav-section-title">Management</span>
          </li>

          <li class="nav-item admin-only">
            <a href="/admin/users" class="nav-link">
              <i class="bi bi-people"></i>
              <span>Users</span>
              <span class="nav-badge">24</span>
            </a>
          </li>

          <li class="nav-item admin-only">
            <a href="/admin/agents" class="nav-link">
              <i class="bi bi-person-badge"></i>
              <span>Agents</span>
              <span class="nav-badge">156</span>
            </a>
          </li>

          <li class="nav-item admin-only">
            <a href="/admin/transactions" class="nav-link">
              <i class="bi bi-receipt"></i>
              <span>Transactions</span>
            </a>
          </li>

          <li class="nav-item admin-only">
            <a href="/admin/bundles" class="nav-link">
              <i class="bi bi-box-seam"></i>
              <span>Bundles</span>
            </a>
          </li>

          <li class="nav-item admin-only">
            <a href="/admin/networks" class="nav-link">
              <i class="bi bi-diagram-3"></i>
              <span>Networks</span>
            </a>
          </li>

          <!-- Common Menu Items -->
          <li class="nav-section">
            <span class="nav-section-title">Sales</span>
          </li>

          <li class="nav-item">
            <a href="/orders" class="nav-link">
              <i class="bi bi-cart-check"></i>
              <span>Orders</span>
              <span class="nav-badge badge-success">12</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="/customers" class="nav-link">
              <i class="bi bi-person-lines-fill"></i>
              <span>Customers</span>
            </a>
          </li>

          <!-- Agent Specific -->
          <li class="nav-item agent-only" style="display: none;">
            <a href="/agent/commissions" class="nav-link">
              <i class="bi bi-wallet2"></i>
              <span>My Commissions</span>
            </a>
          </li>

          <li class="nav-item agent-only" style="display: none;">
            <a href="/agent/sales" class="nav-link">
              <i class="bi bi-graph-up-arrow"></i>
              <span>My Sales</span>
            </a>
          </li>

          <!-- Reports -->
          <li class="nav-section">
            <span class="nav-section-title">Reports</span>
          </li>

          <li class="nav-item">
            <a href="/reports/analytics" class="nav-link">
              <i class="bi bi-bar-chart"></i>
              <span>Analytics</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="/reports/revenue" class="nav-link">
              <i class="bi bi-currency-dollar"></i>
              <span>Revenue</span>
            </a>
          </li>

          <!-- Settings -->
          <li class="nav-section">
            <span class="nav-section-title">Settings</span>
          </li>

          <li class="nav-item admin-only">
            <a href="/admin/settings" class="nav-link">
              <i class="bi bi-gear"></i>
              <span>System Settings</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="/profile" class="nav-link">
              <i class="bi bi-person"></i>
              <span>My Profile</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="/support" class="nav-link">
              <i class="bi bi-headset"></i>
              <span>Support</span>
            </a>
          </li>

        </ul>
      </nav>

      <!-- Sidebar Footer -->
      <div class="sidebar-footer">
        <a href="/logout" class="logout-btn">
          <i class="bi bi-box-arrow-right"></i>
          <span>Logout</span>
        </a>
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
          <h5 class="page-title mb-0">Dashboard</h5>
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
              <a class="dropdown-item text-danger" href="/logout">
                <i class="bi bi-box-arrow-right me-2"></i>Logout
              </a>
            </div>
          </div>
        </div>
      </header>

      <!-- Page Content -->
      <div class="dashboard-content">
        <div class="container-fluid">

          <!-- Page will be dynamically loaded here -->
          <div id="pageContent">
            <!-- Dashboard content goes here -->
            <h2>Welcome to Dashboard</h2>
            <p>This is where your dashboard content will be displayed.</p>
          </div>

        </div>
      </div>

      <!-- Footer -->
      <footer class="dashboard-footer">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-md-6">
              <p class="mb-0 text-muted">&copy; 2026 Net Bundle. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
              <a href="/terms" class="footer-link">Terms</a>
              <a href="/privacy" class="footer-link">Privacy</a>
              <a href="/support" class="footer-link">Support</a>
            </div>
          </div>
        </div>
      </footer>

    </main>

  </div>

  <!-- Overlay for mobile -->
  <div class="sidebar-overlay" id="sidebarOverlay"></div>

</x-layouts.base>
