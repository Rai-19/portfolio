<?php get_header('cotact'); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/CSS/hobby.css" />

<main>
  <h1 class="title">趣味</h1>

  <div class="x">
    <a class="icon" href="https://x.com/rai_0311">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/x-icon.png" alt="Xのアイコン">
    </a>
  </div>

  <div class="display">
    <div class="news-list">
      <div class="news section" id="section1">
        <?php the_content() ?>
      </div>
      <div class="news section" id="section2">
        <?php the_content() ?>
      </div>
      <div class="news section" id="section3">
        <?php the_content() ?>
      </div>
      <div class="news section" id="section4">
        <?php the_content() ?>
      </div>
      <div class="news section" id="section5">
        <?php the_content() ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
