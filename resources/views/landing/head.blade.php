<header class="banner section">
  <div class="container navbar navbar-toggleable-sm">
	<a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
	<div class="navbar-nav ml-auto hidden-sm-down">
	  @if (has_nav_menu('landing_navigation'))
		{!! wp_nav_menu(['theme_location' => 'landing_navigation', 'menu_class' => 'nav']) !!}
	  @endif
	</div>
  </div>
</header>
