const responsiveMenuButton = document.getElementById(
    'responsiveMenuToggleButton'
);

const navbarLinks = document.querySelector(
    '.navbar-links'
    );
const navbarAuth = document.querySelector(
    '.navbar-auth'
    );

responsiveMenuButton.addEventListener('click', () => {
    navbarLinks.classList.toggle('open');
    navbarAuth.classList.toggle('open');
    responsiveMenuButton.classList.toggle('open');
});
