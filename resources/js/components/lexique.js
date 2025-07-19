document.addEventListener('DOMContentLoaded', () => {
  // Création dynamique du tooltip s'il n'existe pas encore
  let tooltip = document.getElementById('lexiqueTooltip');
  if (!tooltip) {
    tooltip = document.createElement('div');
    tooltip.id = 'lexiqueTooltip';
    document.body.appendChild(tooltip);
  }

  let lexique = {};

  // Charger le fichier lexique.json (adapter le chemin si besoin)
  fetch('/data/lexique.json')
    .then(response => {
      if (!response.ok) throw new Error(`HTTP error ${response.status}`);
      return response.json();
    })
    .then(data => {
      lexique = data;
      initLexiqueTooltips();
    })
    .catch(error => {
      console.error('Erreur chargement lexique:', error);
    });

  // Initialiser les tooltips sur les éléments lexique
  function initLexiqueTooltips() {
    const termes = document.querySelectorAll('span.lexique');

    termes.forEach(term => {
      term.addEventListener('mouseenter', showTooltip);
      term.addEventListener('mouseleave', hideTooltip);
      term.addEventListener('focus', showTooltip);
      term.addEventListener('blur', hideTooltip);
    });
  }

  // Afficher le tooltip avec définition
    function showTooltip(event) {
    const mot = event.target.textContent.toLowerCase();
    if (lexique[mot]) {
        tooltip.textContent = lexique[mot];

        const rect = event.target.getBoundingClientRect();
        tooltip.style.top = `${window.scrollY + rect.top - tooltip.offsetHeight - 12}px`;
        tooltip.style.left = `${window.scrollX + rect.left + rect.width / 2 - tooltip.offsetWidth / 2}px`;

        tooltip.classList.add('visible');
    }
    }

  // Cacher le tooltip
  function hideTooltip() {
    tooltip.classList.remove('visible');
  }
});
