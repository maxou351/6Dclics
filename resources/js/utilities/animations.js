document.addEventListener("DOMContentLoaded", () => {
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        console.log(entry.target);
      if (entry.isIntersecting) {
        entry.target.classList.add("animate-fade-in");
        observer.unobserve(entry.target); // Ne l’anime qu’une fois
      }
    });
  }, {
    threshold: 0.5 // Déclenche quand 10% de l'élément est visible
  });

  document.querySelectorAll(".reveal-on-scroll").forEach(el => {
    observer.observe(el);
  });
});
