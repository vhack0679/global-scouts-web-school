function isInViewport(element) {
var rect = element.getBoundingClientRect();
return (
  rect.top >= 0 &&
  rect.left >= 0 &&
  rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
  rect.right <= (window.innerWidth || document.documentElement.clientWidth)
);
}
function fadeInOnScroll() {
var elements = document.querySelectorAll('.fade-in');
elements.forEach(function(element) {
  if (isInViewport(element)) {
      element.classList.add('fade-in-show');
  } else {
      
  }
});
}
fadeInOnScroll();
window.addEventListener('scroll', function() {
fadeInOnScroll();
});
window.addEventListener('DOMContentLoaded', function() {
var myModal = new bootstrap.Modal(document.getElementById('admissionsModal'), {
keyboard: false
});
myModal.show();
});
function scrollToTop() {
      window.scrollTo({
          top: 0,
          behavior: 'smooth'
      });
  }
  window.addEventListener('scroll', function() {
      var scrollButton = document.querySelector('.scroll-to-top');
      if (window.scrollY > 300) {
          scrollButton.style.display = 'flex'; 
      } else {
          scrollButton.style.display = 'none'; 
      }
  })
  let lastScrollTop = 0;
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', function() {
      let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      if (scrollTop > lastScrollTop) {
          navbar.style.transform = 'translateY(-100%)';
      } else {
          navbar.style.transform = 'translateY(0)';
      }
      
      lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
  });
const navbarToggler = document.querySelector('.navbar-toggler');
const navbarTogglerCloseIcon = document.querySelector('.navbar-toggler-close-icon');
const navbarTogglerIcon = document.querySelector('.navbar-toggler-icon');
navbarToggler.addEventListener('click', function() {
  if (navbarToggler.getAttribute('aria-expanded') === 'true') {
    navbarTogglerCloseIcon.style.display = 'inline-block';
    navbarTogglerIcon.style.display = 'none'; 
  } else {
    navbarTogglerCloseIcon.style.display = 'none';
    navbarTogglerIcon.style.display = 'inline-block'; 
  }
});
