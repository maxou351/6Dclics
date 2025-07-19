{{-- Appel à l’action final --}}
<section class="cta-final" aria-labelledby="cta-heading">
  <div class="cta-container">

    <h2 id="cta-heading" class="cta-title">
      Vous avez un problème ? Un projet ? Une mission ?
    </h2>

    <p class="cta-text">
      N’hésitez pas à me contacter, je serai ravi d’échanger avec vous.
    </p>

    <div class="cta-list">

        <!-- Téléphone -->
        <a href="tel:+33652851413" 
        class="cta-link group" 
        aria-label="Téléphoner au 06 52 85 14 13"
        >
            <x-heroicon-o-phone class="cta-icon" aria-hidden="true" />
            <span class="cta-item">06.52.85.14.13</span>
        </a>

        <!-- Formulaire de contact -->
        <a href="{{ url('/contact') }}" 
        class="cta-link group" 
        aria-label="Accéder au formulaire de contact"
        >
            <x-heroicon-o-chat-bubble-bottom-center-text class="cta-icon" aria-hidden="true" />
            <span class="cta-item">Me contacter</span>
        </a>

        <!-- Email -->
        <a href="mailto:max.morelli3@gmail.com" 
        class="cta-link group" 
        aria-label="Envoyer un email à max.morelli3@gmail.com"
        >
            <x-heroicon-o-envelope class="cta-icon" aria-hidden="true" />
            <span class="cta-item">max.morelli3@gmail.com</span>
        </a>
    </div>
  </div>
</section>


