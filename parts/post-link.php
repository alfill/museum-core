<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<time datetime=<?php the_time('Y-m-d'); ?>></time>

	<?php tha_entry_before(); ?>
	<section class="entry">
		<?php tha_entry_top(); ?>

		<?php the_content(__('Read more &raquo;','museum-core')); ?>
		<?php wp_link_pages(); ?>

		<?php tha_entry_bottom(); ?>
	</section>
	<?php tha_entry_after(); ?>

	<?php get_template_part( 'parts/part', 'micropostmeta' ); ?>

</article>