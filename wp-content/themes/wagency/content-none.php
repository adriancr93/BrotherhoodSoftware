<?php
/**
 * The template for displaying a "No posts found" message
 */
?>

<div class="e404">

	<header class="page-header">
		<h1 class="page-title">
            <?php
            do_action( 'atiframebuilder_layout_title_404' );
            ?>
        </h1>
	</header>

	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

		<p><?php printf( esc_attr__( 'Ready to publish your first post?', 'wagency' ), '<a href="%1$s">'.esc_attr__( 'Get started here.', 'wagency' ).'</a>', admin_url( 'post-new.php' ) ); ?></p>

	<?php elseif ( is_search() ) : ?>

		<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'wagency' ); ?></p>
		<?php get_search_form(); ?>

	<?php else : ?>

		<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'wagency' ); ?></p>
		<?php get_search_form(); ?>

	<?php endif; ?>

</div>
