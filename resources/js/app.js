import './bootstrap';
import * as bootstrap from 'bootstrap';
import  './cms.js'

// Add scroll effect to header
window.addEventListener('scroll', function() {
  const header = document.querySelector('.header-custom');

  if (!header) {
      return;
  }

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


});


//Spinning when submit btn is clicked
// document.addEventListener('DOMContentLoaded', () => {
//     const form = document.querySelector('#loginForm');
//
//     if (!form) return;
//
//     form.addEventListener('submit', () => {
//         document.getElementById('spinner').classList.remove('d-none');
//         document.getElementById('btnText').classList.add('d-none');
//         document.getElementById('loginBtn').disabled = true;
//     });
// });


document.addEventListener('submit', function (e) {
    const form = e.target;
    if (!(form instanceof HTMLFormElement)) return;

    // Find the submit button that triggered  submit
    const submitBtn = document.activeElement;

    if (
        submitBtn &&
        (submitBtn.matches('button[type="submit"]') ||
            submitBtn.matches('input[type="submit"]'))
    ) {
        submitBtn.disabled = true;

        // Spinner support (optional)
        const spinner = submitBtn.querySelector('.spinner-border');
        const text = submitBtn.querySelector('[id="btnText"], .btn-text');

        if (spinner) spinner.classList.remove('d-none');
        if (text) text.classList.add('d-none');
    }
}, true);


