
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
      element.classList.remove('fade-in-show');
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
  });