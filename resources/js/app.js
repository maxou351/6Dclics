import './bootstrap';
// import './components/quiz.js';
import './components/navbar.js';
import './components/lexique.js';
import './utilities/animations.js';
// import './components/contact-form.js';
import { createIcons, icons } from 'lucide';
import ScrollReveal from 'scrollreveal';

createIcons({icons});

// Timeline apparition au scroll
ScrollReveal().reveal('[data-sr]', {
  distance: '40px',
  origin: 'bottom',
  duration: 1000,
  easing: 'ease-out',
  interval: 300
});

async function fetchLexique() {
  try {
    const res = await fetch('/api/lexique');
    const data = await res.json();
    console.log(data); // Pour test
    return data;
  } catch (err) {
    console.error("Erreur lors du chargement du lexique :", err);
  }
}


