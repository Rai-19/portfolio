<?php
// カスタムメニュー
add_theme_support('menus');

// コンタクトフォーム
add_filter('wpcf7_autop_or_not', 'my_wpcf7_autop');
function my_wpcf7_autop()
{
    return false;
}
