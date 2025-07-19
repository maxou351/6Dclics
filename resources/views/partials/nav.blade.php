<nav class="navbar sticky top-0 z-50 bg-white shadow">
  <div class="navbar__container">
    {{-- <a href="{{ url('/') }}" class="navbar__brand">Max Morelli</a> --}}
    <a href="{{ url('/') }}" class="navbar__brand flex items-center space-x-2">
      <img src="{{ asset('images/logo1.png') }}" alt="Logo Max Morelli" class="h-8 w-auto" />
      <span>Max Morelli</span>
    </a>

    <button id="navbar-toggle" class="navbar__toggle" aria-label="Toggle menu" aria-expanded="false" aria-controls="navbar-menu">
      <span class="navbar__toggle-icon"></span>
      <span class="navbar__toggle-icon"></span>
      <span class="navbar__toggle-icon"></span>
    </button>

    <ul id="navbar-menu" class="navbar__menu" role="menu" aria-hidden="true">

      @if (!Request::is('/'))
          <li class="navbar__item" role="none">
            <a href="{{ url('/') }}" class="navbar__link" role="menuitem">Accueil</a>
          </li> 
      @endif
      
      <li class="navbar__item" role="none">
        <a href="{{ url('/accompagnement') }}" 
         class="navbar__link @navactive('accompagnement')" 
         role="menuitem">Accompagnement</a>
      </li>
      <li class="navbar__item" role="none">
        <a href="{{ url('/creation-site') }}" 
         class="navbar__link @navactive('creation-site')" 
         role="menuitem">Création de site</a>
      </li>
      <li class="navbar__item" role="none">
        <a href="{{ url('/profil-tech') }}" 
         class="navbar__link @navactive('profil-tech')" 
         role="menuitem">Profil technique</a>
      </li>
      <li class="navbar__item" role="none">
        <a href="{{ url('/projets') }}" 
         class="navbar__link @navactive('projets.*')" 
        role="menuitem">Galerie des projets</a>
      </li>
      <li class="navbar__item" role="none">
        <a href="{{ url('/contact') }}" 
         class="navbar__link @navactive('contact')" 
         role="menuitem">Contact</a>
      </li>
    </ul>
  </div>
</nav>