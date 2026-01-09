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
