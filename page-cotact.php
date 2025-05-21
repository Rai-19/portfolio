<?php get_header('contact'); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/CSS/cotact.css" />

<main>

  <div class="link">
    <a href="./top.html">トップページに戻る</a>
  </div>

  <h1 class="contact">連絡はこちらへ</h1>
  <div class="E-mail">
    <div class="E-mail-send">メールアドレス</div>
    <input class="E-mail-box" [type=email]></input>
  </div>
  <div class="subject">
    <div class="subject-send">ご用件</div>
    <input class="subject-box" [type=text]></input>
  </div>
  <div class="detail">
    <div class="d">お問い合わせ内容</div>
    <textarea class="detail-box" [type=textarea]></textarea>
  </div>
  <div>
    <button class="reset">リセット</button>
    <button class="send">送信</button>
  </div>
</main>

<?php get_footer(); ?>
