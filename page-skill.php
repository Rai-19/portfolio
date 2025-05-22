<?php get_header('link'); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/CSS/skill.css" />

<main>
  <h1 class="title">取得スキル</h1>
  <div class="display">
    <div class="card section" id="section1">
      <h2>HTML</h2>
      <img class="ico" src="/assets/img/ihtml-5.png" alt="">
      <div class="blank">
        <a target="_blank" href="https://icons8.com/icon/YWDsCjL0c2qv/html-5">HTML 5</a> アイコン by <a target="_blank" href="https://icons8.com">Icons8</a>
      </div>
    </div>
    <div class="card section" id="section2">
      <h2>CSS</h2>
      <div class="blank">
        <img class="ico" src="/assets/img/icons8-css-144.png" alt="">
        <a target="_blank" href="https://icons8.com/icon/21278/css3">CSS</a> アイコン by <a target="_blank" href="https://icons8.com">Icons8</a>
      </div>
    </div>
    <div class="card section" id="section3">
      <h2>JavaScript</h2>
    </div>
    <div class="card section" id="section4">
      <h2>PHP</h2>
    </div>
    <div class="card section" id="section5">
      <h2>WordPress</h2>
    </div>
  </div>
</main>

<?php get_footer(); ?>
