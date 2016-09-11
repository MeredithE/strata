<!doctype html>
<body <?php body_class(); ?>>

  <head>
  		<!-- <title>Strata by HTML5 UP</title> -->
  		<meta charset="utf-8" />
  		<meta name="viewport" content="width=device-width, initial-scale=1" />
      <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
      <!-- <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" /> -->

      <?php wp_head(); ?>

  </head>

  <header id="header">
			<div class="inner">
				<a href="#" class="image avatar"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/avatar.jpg" alt="" /></a>
				<h1><strong>I am Strata</strong>, a super simple<br />
				responsive site template freebie<br />
				crafted by <a href="http://html5up.net">HTML5 UP</a>.</h1>
			</div>
		</header>


<?php

  $defaults = array(
    'container' => false,
    'theme_location' => 'primary-menu',
    'menu_class' => 'no-bullet'
  );

  wp_nav_menu($defaults);

?>
