<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h2 class="the_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php echo sprintf( __('Permanent Link to %1$s','museum-core'), the_title_attribute() ); ?>"><?php the_title(); ?></a></h2>
        <div class="clear"></div>

		<section class="entry">
			<?php the_content(__('Read more &raquo;','museum-core')); ?>
			<div class="clear"></div>
			<?php wp_link_pages(); ?>
		</section>

		<section class="postmetadata">
			<?php
				$time = '<time datetime=' . the_time('Y-m-d') . '>' . the_time('j F Y') . '</time>';
				echo sprintf(__('Posted in %1$s on %2$s','museum-core'), the_category(', '), $time); ?> <?php the_tags(__('and tagged ','museum-core'),', ',''); ?><br />
			<?php comments_popup_link(__('No Comments &#187;','museum-core'), __('One Comment &#187;','museum-core'), __('% Comments &#187;','museum-core')); ?>
			<p><?php edit_post_link(__('Edit this entry','museum-core'),'','.'); ?></p>
        </section>

    	<div class="clear"></div>
		<nav class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</nav>
        <div class="spacer-10"></div>
        <div class="spacer-10"></div>
    	<section id="comments">
			<?php comments_template(); ?>
        </section>
	</article>

<?php endwhile; endif; ?>