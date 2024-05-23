document.addEventListener("DOMContentLoaded", function() {
  // Toggle navbar for mobile
  function toggleNavbar() {
      const linksWrapper = document.querySelector('.links-wrapper');
      const navbarToggler = document.querySelector('.navbar-toggler');

      if (linksWrapper && navbarToggler) {
          linksWrapper.classList.toggle('active');
          navbarToggler.classList.toggle('active');
      }
  }

  // Sticky navbar functionality
  function myFunction() {
      const navbar = document.querySelector('.navbar');
      
      if (navbar) {
          const sticky = navbar.offsetTop;

          if (window.pageYOffset >= sticky) {
              navbar.classList.add("fixed");
          } else {
              navbar.classList.remove("fixed");
          }
      }
  }


  // Attach event listeners
  const navbarToggler = document.querySelector('.navbar-toggler');
  if (navbarToggler) {
      navbarToggler.addEventListener('click', toggleNavbar);
  }

  window.onscroll = myFunction;
});
