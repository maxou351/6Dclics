

const maxZoom = 2.5;
const minZoom = 1;
const zoomStep = 0.25;

let currentIndex = 0;
let galleryImages = [];
let currentZoom = 1;
let originX = 0;
let originY = 0;
// Mobile
let touchStartX = 0;
let touchEndX = 0;
// let isDragging = false;
// let startX, startY, offsetX = 0, offsetY = 0;

const galleryModal = document.getElementById('galleryModal');
const galleryWrapper = document.getElementById("galleryWrapper");
const galleryImage = document.getElementById("galleryImage");
const zoomValue = document.getElementById("zoomValue");
const zoomInBtn = document.getElementById("zoomIn");
const zoomOutBtn = document.getElementById("zoomOut");

function openGallery(index) {
  document.getElementById('socialBar').classList.add('hidden');
  currentIndex = index;
  let prevBtn = document.getElementById('prev-btn');
  let nextBtn = document.getElementById('next-btn');
  updateGallery();
  if (galleryImages.length > 1) {
   prevBtn.style.display = 'block';
   nextBtn.style.display = 'block';
  } else {
   prevBtn.style.display = 'none';
   nextBtn.style.display = 'none';
  }
  document.getElementById('galleryModal').classList.remove('hidden');
}

function closeGallery() {
  document.getElementById('galleryModal').classList.add('hidden');
  document.getElementById('socialBar').classList.remove('hidden');
}

function updateGallery() {
  const swipeIndicator = document.getElementById('swipeIndicator');
  if ((galleryImages.length > 1) && (currentIndex +1 < galleryImages.length)) {
    swipeIndicator.style.display = 'flex';
  } else {
    swipeIndicator.style.display = 'none';
  }
  galleryImage.src = galleryImages[currentIndex];
  document.getElementById('galleryCounter').textContent = `${currentIndex + 1} / ${galleryImages.length}`;
}


function prevImage() {
  animateImage('prev');
  currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
  updateGallery();
}

function nextImage() {
  animateImage('next');
  currentIndex = (currentIndex + 1) % galleryImages.length;
  updateGallery();
}

// GESTION DES CLICKS
function handleModalClick(event) {
  let target = event.target;
  if (target.closest('#prev-btn')) {
    resetZoom();
    prevImage();
  } else if (target.closest('#next-btn')) {
    resetZoom();
    nextImage();
  } else if (target.closest('#close-btn')) {
    closeGallery();
  } else if (target.closest('#zoomIn')) {
    zoomImage(zoomStep);
  } else if (target.closest('#zoomOut')) {
    zoomImage(-zoomStep);
  } else if (!target.closest('#galleryImage')) {
    closeGallery();
  }
}

// Met à jour le texte affiché du niveau de zoom
function updateZoomDisplay() {
  zoomValue.textContent = `${Math.round(currentZoom * 100)}%`;
};

// Applique le zoom à l'image
function applyZoom() {
  galleryImage.style.transform = `scale(${currentZoom})`;
  updateZoomDisplay();
};

// Réinitialise le zoom (à appeler quand on change d'image)
function resetZoom() {
  currentZoom = 1;
  applyZoom();
};

const zoomImage = (factor) => {
  const img = document.getElementById('galleryImage');
  if (!img) return;
  
  currentZoom = Math.max(minZoom, Math.min(maxZoom, currentZoom + factor));
  console.log(currentZoom);
  applyZoom();
  updateZoomDisplay();
};

function handleSwipeGesture() {
  const swipeThreshold = 50; // px minimum pour valider un swipe

  if (galleryImages.length <= 1) return; // ⛔️ bloque le swipe s’il n’y a qu’une image

  if (touchEndX < touchStartX - swipeThreshold) {
    nextImage();
  } else if (touchEndX > touchStartX + swipeThreshold) {
    prevImage();
  }
}

// Animation au swipe
function animateImage(direction) {
  galleryImage.classList.remove('translate-x-0');
  
  // Étape 1 : on décale l’image dans la direction opposée
  galleryImage.classList.add(direction === 'next' ? 'translate-x-full' : '-translate-x-full');

  // Étape 2 : après un tout petit délai, on remet l’image à sa place avec une transition
  setTimeout(() => {
    galleryImage.classList.remove('translate-x-full', '-translate-x-full');
    galleryImage.classList.add('translate-x-0');
  }, 20);
}

///////////////
// LISTENERS //
//////////////
galleryModal.addEventListener('click', handleModalClick);

// Gestion des touches clavier
document.addEventListener('keydown', function (e) {
  const isOpen = !galleryModal.classList.contains('hidden');

  if (!isOpen) return;
  if (e.key === 'ArrowRight') {
    nextImage();
  } else if (e.key === 'ArrowLeft') {
    prevImage();
  } else if (e.key === 'Escape') {
    closeGallery();
  }
});

// Zoom via wheel
galleryWrapper.addEventListener("wheel", (e) => {
  if (e.ctrlKey || e.metaKey) return; 
  e.preventDefault();
  const delta = Math.sign(e.deltaY);
  if (delta > 0) {
    currentZoom = Math.max(currentZoom - zoomStep, minZoom);
  } else {
    currentZoom = Math.min(currentZoom + zoomStep, maxZoom);
  }
  applyZoom();
});

// Chargement de la galerie
document.querySelectorAll('.open-gallery').forEach(img => {
  galleryImages.push(img.src);
  img.addEventListener('click', () => {
    const index = parseInt(img.dataset.galleryIndex);
    openGallery(index);
  });
});

// Zoom via double-clic
galleryImage.addEventListener("dblclick", (e) => {
  e.preventDefault();
  if (currentZoom === 1) {
    currentZoom = 2;
  } else {
    resetZoom();
  }
  applyZoom();
});

//Mobile swipe
galleryModal.addEventListener('touchstart', function (e) {
  touchStartX = e.changedTouches[0].screenX;
});

galleryModal.addEventListener('touchend', function (e) {
  touchEndX = e.changedTouches[0].screenX;
  handleSwipeGesture();
});

// function updateTransform() {
//     galleryImage.style.transform = `scale(${currentZoom}) translate(${offsetX / currentZoom}px, ${offsetY / currentZoom}px)`;
//     galleryImage.style.cursor = currentZoom > 1 ? 'grab' : 'default';
// };

// galleryImage.addEventListener('mousedown', (e) => {
//     console.log("mousedown");
//     if (currentZoom === 1) return;
//     isDragging = true;
//     galleryImage.style.cursor = 'grabbing';
//     startX = e.clientX - offsetX;
//     startY = e.clientY - offsetY;
// });

// window.addEventListener('mousemove', (e) => {
//     console.log("mousemove");
//     if (!isDragging) return;
//     offsetX = e.clientX - startX;
//     offsetY = e.clientY - startY;
//     updateTransform();
// });

// window.addEventListener('mouseup', () => {
//     console.log("mouseup");
//     if (isDragging) {
//         isDragging = false;
//         galleryImage.style.cursor = 'grab';
//     }
// });
