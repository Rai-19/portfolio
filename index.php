<!-- header.phpを読み込む -->
<?php
get_header();
?>

<?php
wp_redirect(home_url('/'));
exit;
?>

<!-- footer.phpを読み込む -->
<?php
get_footer();
?>
