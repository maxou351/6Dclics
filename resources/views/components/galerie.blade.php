<div id="galleryModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm bg-opacity-90 hidden flex items-center justify-center z-50">
  
 <div id="galleryWrapper" class="relative max-w-3xl w-full p-4">
    
    <button id="close-btn" class="cursor-pointer hover:text-accent hover:scale-110 transition duration-200 absolute top-4 right-4 text-white text-2xl hidden-mobile">&times;</button>

    <!-- Zoom controls -->
    <div class="absolute top-4 left-4 flex items-center gap-2 z-50">
      <button id="zoomOut" class="cursor-pointer bg-white/20 text-white rounded px-2 py-1 text-xl hover:bg-white/30 hidden-mobile">−</button>
      <span id="zoomValue" class=" text-white font-medium w-12 text-center hidden sm:block">100%</span>
      <button id="zoomIn" class="cursor-pointer bg-white/20 text-white rounded px-2 py-1 text-xl hover:bg-white/30 hidden-mobile">+</button>
    </div>

    <!-- Compteur d'image -->
    <div class="absolute bottom-4 left-4 text-white" id="galleryCounter">1 / 3</div>

    <!-- Navigation -->
    <button id="prev-btn" class="cursor-pointer absolute left-2 top-1/2 -translate-y-1/2 text-white text-3xl px-3 hover:text-accent hover:scale-110 transition duration-200 hidden-mobile">&#10094;</button>
    <button id="next-btn" class="cursor-pointer absolute right-2 top-1/2 -translate-y-1/2 text-white text-3xl px-3 hover:text-accent hover:scale-110 transition duration-200 hidden-mobile">&#10095;</button>

    <!-- Image -->
    <img id="galleryImage" src="" class="translate-x-0 rounded shadow-lg max-h-[90vh] object-contain mx-auto transition-transform duration-500 ease-in-out" />

    <!-- Swipe Indicator -->
    <div id="swipeIndicator" class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex items-center space-x-1 sm:hidden opacity-90">
        <div class="w-2 h-2 border-l-2 border-b-2 text-accent border-accent rotate-45 animate-swipe-left sm:hidden"></div>
        <div class="w-2 h-2 border-l-2 border-b-2 text-accent border-accent rotate-45 animate-swipe-left delay-200  sm:hidden"></div>
    </div>
  </div>
</div>

