const toggleButton = document.getElementById('navbar-toggle');
const menu = document.getElementById('navbar-menu');
console.log("I'm in nav");

toggleButton.addEventListener('click', () => {
const expanded = toggleButton.getAttribute('aria-expanded') === 'true' || false;
toggleButton.setAttribute('aria-expanded', !expanded);
menu.classList.toggle('navbar__menu--active');
menu.setAttribute('aria-hidden', expanded);
});