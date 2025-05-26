<?php
get_header();
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/CSS/floato.css" />

<main class="wrap">
    <div class="list">
        <li class="menu">◇+ 6589</li>
        <li class="menu">☆+ 206538</li>
        <li class="menu">♧+ 3580</li>
        <li class="menu">$+ 12584</li>
    </div>
    <div class="CL">
        <div class="box">
            <div class="carousel-container">
                <div class="carousel" id="carousel"></div>
            </div>
        </div>
        <div class="highlight"></div>
        <button class="button-L" id="spinButton">1回ガチャ</button>
    </div>

    <div class="result" id="resultMessage">結果発表！</div>

    <div class="history-container">
        <h3>当たり履歴</h3>
        <ul class="history-list" id="historyList"></ul>
    </div>

    <div>
        <div class="wrapper">
            <button class="button-R" id="spinButton">10回ガチャ</button>
        </div>
        <div class="comment"></div>
        <div class="input"></div>
    </div>

    <div>
        <img src="<?php echo get_template_directory_uri() ?>/img/wahuu.png" alt="和風背景" />
    </div>
</main>
