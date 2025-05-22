<?php
// カスタムメニュー
add_theme_support('menus');

// コンタクトフォーム
add_filter('wpcf7_autop_or_not', 'my_wpcf7_autop');
function my_wpcf7_autop()
{
    return false;
}


function connect_add_scripts()
{
    // ２、リセットCSS
    wp_enqueue_style(
        'connect_destyle',
        get_template_directory_uri() . '/assets/css/destyle.css'
    );

    // ３、共通CSS
    wp_enqueue_style(
        'connect_common',
        get_template_directory_uri() . '/assets/css/common.css'
    );

    if (is_home()) {
        wp_enqueue_style(
            'connect_top',
            get_template_directory_uri() . '/assets/css/top.css'
        );
    } elseif (is_page('profile')) {
        //プロフィール
        wp_enqueue_style(
            'connect_profile',
            get_template_directory_uri() . '/assets/css/profile.css'
        );
    } elseif (is_page('skill')) {
        // スキル
        wp_enqueue_style(
            'connect_skill',
            get_template_directory_uri() . '/assets/css/skill.css'
        );
    } elseif (is_page('work')) {
        // 仕事
        wp_enqueue_style(
            'connect_work',
            get_template_directory_uri() . '/assets/css/work.css'
        );
    } elseif (is_page('hobby')) {
        // 趣味
        wp_enqueue_style(
            'connect_hobby',
            get_template_directory_uri() . '/assets/css/cotact.css'
        );
    } elseif (is_page('notice')) {
        // お知らせ
        wp_enqueue_style(
            'connect_notice',
            get_template_directory_uri() . '/assets/css/notice.css'
        );
    } elseif (is_page('cotact')) {
        // コンタクト
        wp_enqueue_style(
            'connect_cotact',
            get_template_directory_uri() . '/assets/css/cotact.css'
        );
    }
};
