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

    wp_enqueue_style(
        'connect_top',
        get_template_directory_uri() . '/assets/css/top.css'
    );

    // CSS読み込み

    if (is_front_page() || is_home()) {
        wp_enqueue_style(
            'portfolio-top',
            get_template_directory_uri() . '/assets/css/top.css',
            array('portfolio-common'),
            null
        );
    } elseif (is_page('profile')) {
        //プロフィール
        wp_enqueue_style(
            'portfolio-profile',
            get_template_directory_uri() . '/assets/css/profile.css',
            array('portfolio-common'),
            null
        );
    } elseif (is_page('skill')) {
        // スキル
        wp_enqueue_style(
            'portfolio-skill',
            get_template_directory_uri() . '/assets/css/skill.css',
            array('portfolio-common'),
            null
        );
    } elseif (is_page('work')) {
        // 仕事
        wp_enqueue_style(
            'portfolio-work',
            get_template_directory_uri() . '/assets/css/work.css',
            array('portfolio-common'),
            null
        );
    } elseif (is_page('hobby')) {
        // 趣味
        wp_enqueue_style(
            'portfolio-hobby',
            get_template_directory_uri() . '/assets/css/hobby.css',
            array('portfolio-common'),
            null
        );
    } elseif (is_page('notice')) {
        // お知らせ
        wp_enqueue_style(
            'portfolio-notice',
            get_template_directory_uri() . '/assets/css/notice.css',
            array('portfolio-common'),
            null
        );
    } elseif (is_page('contact')) {
        // コンタクト
        wp_enqueue_style(
            'portfolio-contact',
            get_template_directory_uri() . '/assets/css/contact.css',
            array('portfolio-common'),
            null
        );
    }
};
