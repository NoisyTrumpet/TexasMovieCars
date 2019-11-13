<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand animated fadeIn" href="{{ home_url('/') }}">
    <img src="@asset('images/logo.png')" alt="Texas Movie Cars - Logo" class="navLogo">
  </a>
  <button class="navbar-toggler navBars collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    @fas('bars')
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu($primarymenu) !!}
    @endif
    <div class="navBarPhoneContainer">
     <p>Call <a href="tel:1.210.490.2554"> 1 (210) 490-2554</a></p>
    </div>
  </div>
</nav>