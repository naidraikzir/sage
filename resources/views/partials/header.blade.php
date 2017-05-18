<header class="banner">
  <div class="container navbar navbar-toggleable-md">
	<a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
	<div class="navbar-nav ml-auto">
	  @if (has_nav_menu('primary_navigation'))
		{!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
	  @endif
	</div>
  </div>
</header>
