<?
    if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="primary" class="sidebar" role="complementary" aria-label="<?php esc_attr_e( 'Sidebar Principalisima', 'twentyseventeen' ); ?>">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->