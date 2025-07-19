// Bug loupe :  axe des x décalés dès le départ
// Axe des y se décale au scroll souris
document.querySelectorAll('.cv-preview img').forEach(img => {
  const loupe = document.querySelector('#zoomLens');

  img.addEventListener('mouseenter', () => {
    loupe.style.display = 'block'; // Affiche la loupe
  });

  img.addEventListener('mousemove', e => {
    // Position de la souris relative à l'image
    const rect = img.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;
    // loupe.style.display = 'block';

   // Positionne la loupe (ajuste pour que le centre de la loupe soit sous la souris)
    loupe.style.left = `${e.clientX - loupe.offsetWidth / 2 }px`;
    loupe.style.top = `${e.clientY - loupe.offsetHeight / 2 }px`;

//     // Taille de l'image
    const imgWidth = img.width;
    const imgHeight = img.height;

//     // Calcule le pourcentage de la position du curseur sur l'image
    const percentX = x / imgWidth * 100;
    const percentY = y / imgHeight * 100;

//     // Change le background position pour faire l'effet loupe
    loupe.style.backgroundImage = `url(${img.src})`;
    loupe.style.backgroundSize = `${imgWidth * 3}px ${imgHeight * 3}px`; // Zoom 2x
    loupe.style.backgroundPosition = `${percentX}% ${percentY}%`;
   });

  img.addEventListener('mouseleave', () => {
    loupe.style.display = 'none'; // Cache la loupe
    console.log('Je sors et la loupe disparait');
  });
});