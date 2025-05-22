<?php get_header('link'); ?>

<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/CSS/notice.css" /> -->

<main>
  <h1 class="title">SMS</h1>

  <div class="x">
    <p class="x-p">詳細は「ｘ」にて掲載しております</p>
    <a class="icon" href="https://x.com/rai_0311">
      <img src="./assets/img/x-icon.png" alt="Xのアイコン">
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
