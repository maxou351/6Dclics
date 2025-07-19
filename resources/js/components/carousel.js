document.addEventListener("DOMContentLoaded", () => {
    const container = document.getElementById("carousel");
    const cards = container.querySelectorAll(".carousel-card");
    const indicators = document.querySelectorAll("#carousel-indicators span");
    const prevBtn = document.getElementById("carousel-prev");
    const nextBtn = document.getElementById("carousel-next");

    let autoScrollInterval;
    let hasInteracted = false;

    let currentIndex = 0;

    function startAutoScroll() {
        autoScrollInterval = setInterval(() => {
            if (!hasInteracted && currentIndex < cards.length - 1) {
                scrollToCard(currentIndex + 1);
            }
        }, 8000);
    }

    const getCardWidth = () => {
        const style = getComputedStyle(cards[0]);
        const width = cards[0].offsetWidth;
        const margin = parseFloat(style.marginRight || 16); // fallback
        return width + margin;
    }

    const scrollToCard = (index) => {
        const cardWidth = getCardWidth();
        currentIndex = Math.max(0, Math.min(index, cards.length - 1));
        container.scrollTo({ left: currentIndex * cardWidth, behavior: "smooth" });
        updateIndicators();

        // === GESTION FLECHES ===
        if (prevBtn) prevBtn.disabled = currentIndex === 0;
        if (nextBtn) nextBtn.disabled = currentIndex === cards.length - 1;
    };

    const updateIndicators = () => {
        indicators.forEach((dot, i) => {
            dot.classList.toggle("bg-accent", i === currentIndex);
            dot.classList.toggle("opacity-70", i === currentIndex);
            dot.classList.toggle("bg-gray-300", i !== currentIndex);
        });
    };

    // Arrows
    prevBtn?.addEventListener("click", () => {
        hasInteracted = true;
        scrollToCard(currentIndex - 1);
    });
    nextBtn?.addEventListener("click", () => {
        hasInteracted = true;
        scrollToCard(currentIndex + 1);
    });

    // Dots
    indicators.forEach((dot, i) => {
        dot.addEventListener("click", () => {
            hasInteracted = true;
            scrollToCard(i);
        });
    });
    
    // Touch
    let startX = 0;
    let startTime = 0;

    container.addEventListener("touchstart", (e) => {
        startX = e.touches[0].clientX;
        startTime = Date.now();
    });

    container.addEventListener("touchend", (e) => {
        const endX = e.changedTouches[0].clientX;
        const delta = endX - startX;
        const duration = Date.now() - startTime;
        hasInteracted = true;

        const threshold = 40; // pixels
        const allowedTime = 400; // ms

        if (Math.abs(delta) > threshold && duration < allowedTime) {
            if (delta < 0) scrollToCard(currentIndex + 1);
            else scrollToCard(currentIndex - 1);
        } else {
            scrollToCard(currentIndex);
        }
    });

    // Scroll fallback
    let debounceTimeout;
    container.addEventListener("scroll", () => {
        clearTimeout(debounceTimeout);
        debounceTimeout = setTimeout(() => {
            const cardWidth = getCardWidth();
            const index = Math.round(container.scrollLeft / cardWidth);
            scrollToCard(index);
        }, 100);
    });

    // Init
    scrollToCard(0);

    startAutoScroll();
});
