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

  // Hamburger responsive function
  function hamburgerResponsive() {
      const topnav = document.getElementById("myTopnav");

      if (topnav) {
          if (topnav.className === "topnav") {
              topnav.className += " responsive";
          } else {
              topnav.className = "topnav";
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
