<header class="header-custom sticky-top">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <!-- Left: Net Bundle Logo -->
      <a class="navbar-brand fw-bold" href="/">
        <span class="text-white">Net</span> <span class="text-warning">Bundle</span>
      </a>

      <!-- Profile Dropdown - Always visible on mobile (right side) -->
      <div class="dropdown-toggle d-lg-none ms-auto">
        <button class="btn btn-link p-0 border-0" type="button" id="profileDropdownMobile" data-bs-toggle="dropdown" aria-expanded="false">
          <div class="profile-icon rounded-circle d-flex align-items-center justify-content-center">
            <i class="bi bi-person-fill text-warning fs-5"></i>
          </div>
        </button>
        <ul class="dropdown-menu dropdown-menu-end custom-dropdown p-3" aria-labelledby="profileDropdownMobile">
          <li class="mb-2 d-flex align-items-center">
            <span class="text-muted small me-2">User:</span>
            <span class="fw-bold">Guest</span>
          </li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <a href="/login" class="btn btn-warning w-100 fw-bold">Login</a>
          </li>
        </ul>
      </div>

      <!-- Mobile Toggle Button -->
      <button class="navbar-toggler border-0 ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapsible Content -->
      <div class="collapse navbar-collapse" id="navbarContent">
        <!-- Center: Navigation Links -->
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <x-header-nav-link path="/" name="Home"/>
            </li>

            <li class="nav-item">
                <x-header-nav-link path="/about" name="About"/>
            </li>


          <li class="nav-item dropdown">
            <a class="nav-link nav-link-custom dropdown-toggle" href="#" id="networksDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Networks
            </a>
            <ul class="dropdown-menu custom-dropdown" aria-labelledby="networksDropdown">
              <li><a class="dropdown-item" href="/netbundlemtn"><i class="bi bi-phone me-2 text-warning"></i>MTN</a></li>
              <li><a class="dropdown-item" href="/netbundleat"><i class="bi bi-phone me-2 text-warning"></i>AirtelTigo</a></li>
              <li><a class="dropdown-item" href="/netbundletelecel"><i class="bi bi-phone me-2 text-warning"></i>Telecel</a></li>
            </ul>
          </li>

          <li class="nav-item">
             <x-header-nav-link path="/pricing" name="Pricing"/>
          </li>
          <li class="nav-item">
             <x-header-nav-link path="/contact" name="Contact"/>
          </li>

          <li class="nav-item">
            <a class="nav-link nav-link-custom btn-apply" href="/apply-agent">
              <i class="bi bi-briefcase me-1"></i>Become Agent
            </a>
          </li>
        </ul>

        <!-- Right: Avatar Profile Dropdown - Desktop -->
        <div class="dropdown-toggle d-none d-lg-block">
          <button class="btn btn-link p-0 border-0 dropdown " type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="profile-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-person-fill text-warning fs-4"></i>
            </div>
          </button>
          <ul class="dropdown-menu dropdown-menu-end custom-dropdown p-3" aria-labelledby="profileDropdown">
            <li class="mb-2 d-flex align-items-center">
              <span class="text-muted small me-2">User:</span>
              <span class="fw-bold">Guest</span>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <a href="/login" class="btn btn-warning w-100 fw-bold">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>
