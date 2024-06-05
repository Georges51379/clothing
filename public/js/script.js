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



var menuContainer = document.querySelector('.navbar-container');
	var menuBtn = document.querySelector('.navbar-header .logo .logoImg i');
	var body = document.querySelector('body');
	var toggleBtn = document.querySelector('.btn-container .button');
	var darkModeText = document.querySelector('.dark-light-mode .text');

	menuBtn.addEventListener('click', menuToggle);
	toggleBtn.addEventListener('click', darkMode);

	function menuToggle(){
		menuContainer.classList.toggle('active');
	}

	function darkMode(){
		toggleBtn.classList.toggle('active');
		body.classList.toggle('active');
		if(darkModeText.innerHTML == 'Light Mode'){
			darkModeText.innerHTML = 'Dark Mode';
		}
		else{
			darkModeText.innerHTML = 'Light Mode';
		}
	}