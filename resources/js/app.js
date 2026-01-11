import './bootstrap';
import * as bootstrap from 'bootstrap';


// Add scroll effect to header
window.addEventListener('scroll', function() {
  const header = document.querySelector('.header-custom');
  if (window.scrollY > 50) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});

// Set active link based on current page
document.addEventListener('DOMContentLoaded', function() {
  const currentPath = window.location.pathname;
  const navLinks = document.querySelectorAll('.nav-link-custom');

  navLinks.forEach(link => {
    if (link.getAttribute('href') === currentPath) {
      link.classList.add('active');
    }
  });
});



// Login Form Handler
document.addEventListener('DOMContentLoaded', function() {
  const loginForm = document.getElementById('loginForm');
  const userTypeRadios = document.querySelectorAll('input[name="userType"]');
  const agentRegister = document.querySelector('.agent-register');
  const adminInfo = document.querySelector('.admin-info');
  const togglePassword = document.querySelector('.toggle-password');
  const passwordInput = document.getElementById('password');

  // Toggle between Admin and Agent display
  userTypeRadios.forEach(radio => {
    radio.addEventListener('change', function() {
      if (this.value === 'agent') {
        agentRegister.style.display = 'block';
        adminInfo.style.display = 'none';
      } else {
        agentRegister.style.display = 'none';
        adminInfo.style.display = 'block';
      }
    });
  });

  // Toggle Password Visibility
  if (togglePassword) {
    togglePassword.addEventListener('click', function() {
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);

      // Toggle icon
      const icon = this.querySelector('i');
      if (type === 'password') {
        icon.classList.remove('bi-eye-slash');
        icon.classList.add('bi-eye');
      } else {
        icon.classList.remove('bi-eye');
        icon.classList.add('bi-eye-slash');
      }
    });
  }

  // Form Submission
  loginForm.addEventListener('submit', function(e) {
    e.preventDefault();

    // Remove any existing error messages
    const existingError = document.querySelector('.error-message');
    if (existingError) {
      existingError.remove();
    }

    // Get form values
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const userType = document.querySelector('input[name="userType"]:checked').value;
    const rememberMe = document.getElementById('rememberMe').checked;

    // Basic validation
    if (!email || !password) {
      showError('Please fill in all fields');
      return;
    }

    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      showError('Please enter a valid email address');
      return;
    }

    // Show loading state
    const submitBtn = loginForm.querySelector('button[type="submit"]');
    const originalBtnText = submitBtn.innerHTML;
    submitBtn.classList.add('btn-loading');
    submitBtn.innerHTML = 'Signing In...';
    submitBtn.disabled = true;

    // Simulate API call (Replace with actual API call)
    setTimeout(() => {
      // Example login logic - Replace with actual authentication
      if (email && password) {
        // Success
        showSuccess('Login successful! Redirecting...');

        setTimeout(() => {
          // Redirect based on user type
          if (userType === 'admin') {
            window.location.href = '/admin/dashboard';
          } else {
            window.location.href = '/agent/dashboard';
          }
        }, 1500);
      } else {
        // Error
        submitBtn.classList.remove('btn-loading');
        submitBtn.innerHTML = originalBtnText;
        submitBtn.disabled = false;
        showError('Invalid email or password');
      }
    }, 2000);
  });

  // Show Error Message
  function showError(message) {
    const errorDiv = document.createElement('div');
    errorDiv.className = 'error-message show';
    errorDiv.innerHTML = `<i class="bi bi-exclamation-circle me-2"></i>${message}`;
    loginForm.insertBefore(errorDiv, loginForm.firstChild);

    setTimeout(() => {
      errorDiv.classList.remove('show');
      setTimeout(() => errorDiv.remove(), 300);
    }, 5000);
  }

  // Show Success Message
  function showSuccess(message) {
    const successDiv = document.createElement('div');
    successDiv.className = 'success-message show';
    successDiv.innerHTML = `<i class="bi bi-check-circle me-2"></i>${message}`;
    loginForm.insertBefore(successDiv, loginForm.firstChild);
  }

  // Auto-focus first input
  document.getElementById('email').focus();
});



// Dashboard JavaScript
document.addEventListener('DOMContentLoaded', function() {

  // Sidebar Toggle (Mobile)
  const sidebarToggle = document.getElementById('sidebarToggle');
  const sidebarClose = document.getElementById('sidebarClose');
  const sidebar = document.getElementById('sidebar');
  const sidebarOverlay = document.getElementById('sidebarOverlay');

  if (sidebarToggle) {
    sidebarToggle.addEventListener('click', function() {
      sidebar.classList.add('active');
      sidebarOverlay.classList.add('active');
      document.body.style.overflow = 'hidden';
    });
  }

  if (sidebarClose) {
    sidebarClose.addEventListener('click', closeSidebar);
  }

  if (sidebarOverlay) {
    sidebarOverlay.addEventListener('click', closeSidebar);
  }

  function closeSidebar() {
    sidebar.classList.remove('active');
    sidebarOverlay.classList.remove('active');
    document.body.style.overflow = '';
  }

  // Active Link Highlighting
  const currentPath = window.location.pathname;
  const navLinks = document.querySelectorAll('.nav-link');

  navLinks.forEach(link => {
    if (link.getAttribute('href') === currentPath) {
      // Remove active class from all links
      navLinks.forEach(l => l.classList.remove('active'));
      // Add active class to current link
      link.classList.add('active');
    }
  });

  // User Type Detection (Admin vs Agent)
  // This would typically come from your backend/session
  const userType = 'admin'; // Change to 'agent' to see agent view

  if (userType === 'agent') {
    document.body.classList.add('user-agent');

    // Update user role display
    const userRole = document.querySelector('.user-role');
    if (userRole) {
      userRole.classList.remove('admin-role');
      userRole.classList.add('agent-role');
      userRole.textContent = 'Agent';
    }
  }

  // Smooth Scrolling for Sidebar
  const sidebarNav = document.querySelector('.dashboard-sidebar');
  if (sidebarNav) {
    sidebarNav.style.scrollBehavior = 'smooth';
  }

  // Close dropdowns when clicking outside
  document.addEventListener('click', function(event) {
    const dropdowns = document.querySelectorAll('.dropdown-menu.show');
    dropdowns.forEach(dropdown => {
      if (!dropdown.contains(event.target) && !event.target.closest('.dropdown-toggle')) {
        const bsDropdown = bootstrap.Dropdown.getInstance(dropdown.previousElementSibling);
        if (bsDropdown) {
          bsDropdown.hide();
        }
      }
    });
  });

  // Notification Mark as Read
  const notificationItems = document.querySelectorAll('.notification-item');
  notificationItems.forEach(item => {
    item.addEventListener('click', function(e) {
      e.preventDefault();
      this.classList.remove('unread');

      // Update notification count
      updateNotificationCount();
    });
  });

  function updateNotificationCount() {
    const unreadCount = document.querySelectorAll('.notification-item.unread').length;
    const badge = document.querySelector('.notification-badge');
    const headerBadge = document.querySelector('.dropdown-header .badge');

    if (badge) {
      if (unreadCount > 0) {
        badge.textContent = unreadCount;
        badge.style.display = 'block';
      } else {
        badge.style.display = 'none';
      }
    }

    if (headerBadge) {
      headerBadge.textContent = `${unreadCount} New`;
    }
  }

  // Initialize tooltips (if using Bootstrap tooltips)
  const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });

  // Page Title Update
  function updatePageTitle(title) {
    const pageTitle = document.querySelector('.page-title');
    if (pageTitle) {
      pageTitle.textContent = title;
    }
    document.title = `${title} - Net Bundle Dashboard`;
  }

  // Example: Update page title based on current page
  navLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      const title = this.querySelector('span:not(.nav-badge)').textContent;
      updatePageTitle(title);
    });
  });

});
