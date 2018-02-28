<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="?<php language_attributes('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <title>
      <? bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_head(); ?>
  </head>

  <body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <?php
            wp_nav_menu( array(
              'theme_location'    => 'primary',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'bs-example-navbar-collapse-1',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
          ?>
        </nav>
      </div>
    </div>
  <section class="showcase">
    <div class="container">
      <h1>Custom Bootstrap WordPress Theme</h1>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
        <a class="btn btn-primary btn-lg">Read More</a>
     </div>
  </section>

  <section class="boxes">
    <div class="containter">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <i class="fas fa-users" aria-hidden="true"></i>
            <h3> Dummy Text 4 you to See!</h3>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
              <i class="fas fa-anchor"></i>
            <h3> Dummy Text 4 you to See!</h3>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <i class="fas fa-bomb"></i>
            <h3> Dummy Text 4 you to See!</h3>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <i class="fas fa-fighter-jet"></i>
            <h3> Dummy Text 4 you to See!</h3>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="blog-footer">
    <p>&copy <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
    <p>
      <a href="#">Go Back UP</a>
    </p>
  </footer>
  <?php wp_footer(); ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
</body>
</html>
