<?php
  // This file assumes that you have included the nav walker from https://github.com/twittem/wp-bootstrap-navwalker
  // somewhere in your theme.
?>

<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
      <ul class="nav navbar-nav navbar-right social">
          <li><a href="https://www.facebook.com/alex.velasco.1804"><i class="fa fa-lg fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/alexn16"><i class="fa fa-lg fa-twitter"></i></a></li>
          <li><a href="https://plus.google.com/u/0/105978255326072446099/posts"><i class="fa fa-lg fa-google-plus"></i></a></li>
          <li><a href="https://es.linkedin.com/in/alejandrovelascomonje"><i class="fa fa-lg fa-linkedin"></i></a></li>
          <li><a href="https://github.com/alexn16"><i class="fa fa-lg fa-github"></i></a></li>
      </ul>
    </nav>

  </div>
</header>
