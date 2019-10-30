<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="{{ home_url('/') }}">
    <img src="@asset('images/logo.png')" alt="Texas Movie Cars - Logo" class="navLogo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
{{--     <i class="fas fa-bars"></i> --}}
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu($primarymenu) !!}
    @endif
  </div>
</nav>