<?php

/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package proton
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="hidden entry-header">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>

		<?php if (! is_page()) : ?>
			<div class="entry-meta">
				<?php proton_entry_meta(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div <?php proton_content_class('entry-content bg-white px-[20px] lg:px-0 py-[100px] text-[18px] font-[Arial]'); ?>>
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__('Continue reading<span class="sr-only"> "%s"</span>', 'proton'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div>' . __('Pages:', 'proton'),
				'after'  => '</div>',
			)
		);
		?>

		<div class="max-w-[800px] mx-auto lg:!text-black">
			<?php
			$categories = get_the_category($featured_post->ID);
			$count = count($categories);
			if (! empty($categories)) {
				foreach ($categories as $i => $category) {
			?>
					<a class="pm-taxonomy-pill text-black decoration-none" href="">
						<?php echo $category->name; ?>
					</a>
			<?php
				}
			}
			?>
		</div>

		<aside class="container">
			<div class="mx-auto max-w-[800px]">
				<div class="mb-6">
					<?php
					foreach ($post_taxonomies as $term) {
					?>
						<a class="pm-taxonomy-pill text-black" href="<?php echo $term->link; ?>" title="<?php echo $term->name; ?>">
							<?php echo $term->name; ?>
						</a>
					<?php
					}
					?>
				</div>

				<p class="!mb-0 text-[30px] font-semibold font-[Rajdhani]">
					<?php
					$lines = explode(PHP_EOL, 'Podziel się *wpisem!*');
					foreach ($lines as $line) {
						echo preg_replace("/\*(.+)\*/", '<span class="text-primary">$1</span>', $line);
					}
					?>
				</p>

				<ul class="_wp-block-social-links !my-0 list-none flex">
					<li class="wp-social-link wp-social-link-facebook w-16 mr-8 h-full">
						<a href="http://dcadscdac" aria-label="Facebook">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2">
								<path d="M0 0h60v60H41.426V36.797h7.822l1.172-9.082h-8.994v-5.784c0-2.624.728-4.411 4.49-4.411h4.768V9.418c-.83-.11-3.676-.357-6.987-.357-6.914 0-11.646 4.219-11.646 11.97v6.684h-7.793v9.082h7.793V60H0V0z" fill="#01b9c3" fill-rule="nonzero"></path>
							</svg>
						</a>
					</li>
					<li class="wp-social-link wp-social-link-linkedin w-16 mr-8 h-full">
						<a href="http://cadcdacadc" aria-label="LinkedIn">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2">
								<path d="M60 0H0v60h60V0zM21.282 45.352h-7.306V23.37h7.306v21.982zm-3.653-24.983h-.047c-2.452 0-4.038-1.688-4.038-3.797 0-2.157 1.635-3.799 4.134-3.799 2.499 0 4.037 1.642 4.085 3.799 0 2.109-1.586 3.797-4.134 3.797zm29.999 24.983h-7.306v-11.76c0-2.955-1.058-4.971-3.701-4.971-2.019 0-3.221 1.36-3.749 2.672-.193.47-.24 1.126-.24 1.783v12.276h-7.306s.095-19.92 0-21.982h7.306v3.113c.971-1.498 2.708-3.629 6.584-3.629 4.807 0 8.412 3.142 8.412 9.893v12.605z" fill="#01b9c3" fill-rule="nonzero"></path>
							</svg>
						</a>
					</li>
					<li class="wp-social-link wp-social-link-twitter w-16 mr-8 h-full">
						<a href="http://cascascasc" aria-label="Twitter">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2">
								<path d="M0 0h60v60H0V0zm47.299 19.129a.759.759 0 00-.913-.161c-.314.142-.64.26-.973.351a6.826 6.826 0 001.157-2.226.761.761 0 00-1.172-.819 15.994 15.994 0 01-3.661 1.432 7.658 7.658 0 00-9.595-.741 7.553 7.553 0 00-3.287 6.977 18.015 18.015 0 01-12.618-6.796.787.787 0 00-.647-.284.761.761 0 00-.609.371 7.367 7.367 0 00-.84 5.717 8.149 8.149 0 001.323 2.765 4.059 4.059 0 01-.773-.494.762.762 0 00-1.241.59 7.872 7.872 0 004.054 6.757 5.665 5.665 0 01-.98-.21.762.762 0 00-.913 1.041 8.304 8.304 0 005.765 4.717 13.415 13.415 0 01-8.028 1.653.761.761 0 00-.461 1.418 22.814 22.814 0 0011.246 3.196 19.321 19.321 0 0010.674-3.264c6.031-4.003 9.789-11.189 9.266-17.618a14.204 14.204 0 003.308-3.448.762.762 0 00-.082-.924z" fill="#01b9c3" fill-rule="nonzero"></path>
							</svg>
						</a>
					</li>
				</ul>
			</div>
		</aside>
	</div><!-- .entry-content -->
</article><!-- #post-${ID} -->