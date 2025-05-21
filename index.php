<?php get_header('header-loop', 'header'); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/CSS/top.css" />

<main class="main">
  <!--title-->
  <h1 class="title">ポートフォリオサイト</h1>

  <!--menu-->
  <?php
  $args = [
    'menu' => 'navigation',
    'menu_class' => 'menu',
  ];
  wp_nav_menu($args);
  ?>


  <!--黒猫の親子-->
  <img class="kuroneko" src="<?php echo get_template_directory_uri(); ?>/assets/img/nekooyako.png">
  <!--雲-->
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cloud.png" class="kumo-1 floato">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cloud.png" class="kumo-2 floato">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cloud.png" class="kumo-3 floato">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cloud.png" class="kumo-4 floato">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cloud.png" class="kumo-5">
  <!--月-->
  <div class="moon"></div>
  <!-- 雪 -->
  <div class="area">
    <div class="circles">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sakura.png"></img>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sakura.png"></img>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sakura.png"></img>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sakura.png"></img>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sakura.png"></img>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sakura.png"></img>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sakura.png"></img>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sakura.png"></img>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sakura.png"></img>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sakura.png"></img>
    </div>
  </div>
</main>

<?php get_footer(); ?>
