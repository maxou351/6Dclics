<nav class="navbar sticky top-0 z-50 bg-white shadow">
  <div class="navbar__container">
    <a href="{{ url('/') }}" class="navbar__brand flex items-center space-x-2">
      <img src="{{ asset('images/Logo-6DClics.svg') }}" alt="Logo Max Morelli" class="h-500 w-500" />
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
        <a href="{{ url('/mission-technique') }}" 
         class="navbar__link @navactive('mission-technique')" 
         role="menuitem">Mission technique</a>
      </li>
      {{-- <li class="navbar__item" role="none">
        <a href="{{ url('/projets') }}" 
         class="navbar__link @navactive('projets.*')" 
        role="menuitem">Galerie des projets</a>
      </li> --}}
      <li class="navbar__item" role="none">
        <a href="{{ url('/contact') }}" 
         class="navbar__link @navactive('contact')" 
         role="menuitem">Contact</a>
      </li>
    </ul>
  </div>
</nav>