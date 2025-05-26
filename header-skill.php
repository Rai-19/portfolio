<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/CSS/destyle.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/CSS/common.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&display=swap" rel="stylesheet" />
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/img/neko.ico" type="image/x-icon">
    <title><?php bloginfo('name'); ?></title>
</head>

<body>
    <div class="wrap">
        <header>
            <!--loading-->
            <div class="loading">
                <p class="loading-text">Loading...</p>
                <div class="spinner"></div>
            </div>
            <div class="link">
                <a href="./top.html">トップページに戻る</a>
            </div>
            <ul class="list">
                <li data-target="section1"><a href="#section1">サイコロ</a></li>
                <li data-target="section2"><a href="#section2">ポーカー</a></li>
                <li data-target="section3"><a href="#section3">アニメーション</a></li>
            </ul>
        </header>
