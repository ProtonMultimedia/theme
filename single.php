<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package proton
 */

get_header();
?>

<section id="primary" class="font-['Rajdhani']">
	<main id="main">
		<header class="relative overflow-hidden">
			<div class="container mx-auto">

				<side-heading
					class="z-40 text-white"
					data-text="Blog"></side-heading>

				<div class="guides left-minus-px right-auto bg-secondary" role="presentation"></div>

				<div class="max-w-[800px] mx-auto relative flex flex-col justify-center pt-40 pb-16 z-30">

					<span class="mb-3 text-[18px] text-primary font-medium block"><?php echo get_the_date('d / m / Y'); ?></span>

					<h2 class="mb-0 lg:mb-6 max-w-[600px] text-[40px] font-semibold leading-[42px]">
						<?php echo get_the_title('', false); ?>
					</h2>

					<div class="lg:text-white mb-[70px]">
						<?php
						$categories = get_the_category($featured_post->ID);
						$count = count($categories);
						if (! empty($categories)) {
							foreach ($categories as $i => $category) {
						?>
								<a class="pm-taxonomy-pill" href="">
									<?php echo $category->name; ?>
								</a>
						<?php
							}
						}
						?>
					</div>

					<div class="w-full">
						<div class="text-[26px] font-normal">
							<?php echo get_the_excerpt(); ?>
						</div>
					</div>
				</div>

				<?php
				if ($image = get_post_thumbnail_id()) {
					echo wp_get_attachment_image($image, array('9999', '550'), "", array('class' => 'absolute left-0 top-0 w-full h-full object-cover z-10'));
				}
				?>
				<div class="bg_custom_gradient absolute top-0 bottom-0 left-0 w-full h-full z-10"></div>
				<!-- <div class="tile_bg absolute top-0 bottom-0 left-0 w-full h-full -mb-1 z-10"></div> -->

				<img
					class="lg:block absolute bottom-0 right-0 pointer-events-none z-20 opacity-50 lg:opacity-100"
					src="<?php echo get_template_directory_uri() . '/assets/decoration-lines.png' ?>"
					width="250px"
					height="250px"
					alt="Decorations"
					role="presentation" />

				<div class="guides right-minus-px left-auto bg-dark-blue" role="presentation"></div>
			</div>
		</header>


		<?php
		/* Start the Loop */
		while (have_posts()) :
			the_post();
			get_template_part('template-parts/content/content', 'single');


		// if (is_singular('post')) {
		// 	// Previous/next post navigation.
		// 	the_post_navigation(
		// 		array(
		// 			'next_text' => '<span aria-hidden="true">' . __('Next Post', 'proton') . '</span> ' .
		// 				'<span class="sr-only">' . __('Next post:', 'proton') . '</span> <br/>' .
		// 				'<span>%title</span>',
		// 			'prev_text' => '<span aria-hidden="true">' . __('Previous Post', 'proton') . '</span> ' .
		// 				'<span class="sr-only">' . __('Previous post:', 'proton') . '</span> <br/>' .
		// 				'<span>%title</span>',
		// 		)
		// 	);
		// }
		endwhile;
		?>

		<section class="relative pt-[100px] pb-0 font-['Rajdhani']">
			<img
				class="hidden lg:block absolute right-0 top-0 flex-initial mt-auto"
				src="<?php echo get_template_directory_uri() . '/assets/decoration-lines2.png' ?>"
				alt="Decorations"
				role="presentation" />
			<div class="guides left-minus-px right-auto bg-dark-blue" role="presentation"><?php esc_html_e('Newsy'); ?></div>

			<div class="container mx-auto relative">
				<h2 class="flex-initial uppercase mb-8 lg:mb-12 font-medium text-[42px] lg:text-[60px] leading-[48px] lg:leading-[65px] z-10">
					<?= 'Powiązane'; ?>
					<span class="text-primary"><br><?= 'Posty' ?></span>
				</h2>


			</div>

			<div class="guides right-minus-px left-auto bg-dark-purple" role="presentation"></div>

			<div class="lg:container mx-auto">
				<?php if (get_field('news_side_title', 'option')): ?>
					<side-heading
						data-text="<?php echo get_field('news_side_title', 'option'); ?>"></side-heading>
				<?php endif; ?>

				<div class="guides left-minus-px right-auto bg-dark-blue" role="presentation"></div>

				<div class="pt-4 lg::pt-12 relative">
					<img
						class="block absolute top-[-30px] left-[-50px] z-0 pointer-events-none"
						src="<?php echo get_template_directory_uri() . '/assets/decoration-dots.png' ?>"
						alt="Decorations"
						role="presentation" />
					<?php
					$post_list = get_posts(array(
						'sort_order' => 'desc',
						'posts_per_page' => 2,
					));

					if ($post_list): ?>
						<ul class="w-full flex-auto flex flex-col lg:flex-row lg:flex-wrap gap-4 lg:gap-0 box-shadow-bottom">
							<?php foreach ($post_list as $featured_post):
								$post_date = get_the_date('d / m / Y');
								$permalink = get_permalink($featured_post->ID);
								$title = get_the_title($featured_post->ID);
								$excerpt = get_the_excerpt($featured_post->ID);
								$post_image = get_the_post_thumbnail_url($featured_post->ID, array('400', '9999'));
							?>
								<li class="flex-1/2 lg:max-w-1/2 relative ">
									<div class="tile_bg  absolute top-0 bottom-0 left-0 w-full h-full -mb-1 z-10"></div>
									<img
										class="absolute object-cover h-full w-full min-h-full min-w-full"
										src="<?php echo $post_image; ?>"
										alt="<?php echo esc_html($title); ?>"
										title="<?php echo esc_html($title); ?>" />
									<article class="relative min-h-300px flex group w-full h-full z-10 p-5 lg:py-8 lg:px-12 lg:pr-32  lg:hover:bg-white transition duration-300">
										<div class="h-full w-full relative mt-auto">
											<div class="relative flex flex-col justify-end lg:group-hover:justify-between z-10 h-full w-full">
												<div class="lg:sticky lg:top-screen lg:group-hover:top-auto">
													<span class="text-primary text-[18px] font-medium block mb-1 lg:mb-2"><?php echo $post_date; ?></span>
													<h3 class="mb-4 lg:mb-6 lg:text-white text-[32px] font-semibold leading-[36px] lg:group-hover:text-black"><?php echo esc_html($title); ?></h3>
												</div>
												<div class="lg:invisible lg:group-hover:visible">
													<div class="hidden lg:block lg:text-black mb-6">
														<?php
														$categories = get_the_category($featured_post->ID);
														$count = count($categories);
														if (! empty($categories)) {
															foreach ($categories as $i => $category) {
														?>
																<a class="pm-taxonomy-pill" href="">
																	<?php echo $category->name; ?>
																</a>
														<?php
															}
														}
														?>
													</div>
												</div>
												<div class="flex-1 hidden lg:block lg:invisible lg:group-hover:visible text-[18px] text-black">
													<p class="mb-6 lg:mb-14"><?php echo $excerpt; ?></p>
												</div>
												<a class="lg:invisible lg:group-hover:visible w-fit pm-button-secondary" href="<?php echo esc_url($permalink); ?>">
													<?php echo __('Czytaj całość'); ?>
												</a>
											</div>
										</div>
									</article>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
					<div class="container mx-auto relative py-10">
						<img
							class="hidden lg:block absolute top-[-190px] left-0 z-0"
							src="<?= $decoration_dots2['url']; ?>"
							alt="Decorations"
							role="presentation" />
						<div class="mx-auto max-w-[885px] flex lg:block justify-center">
							<?php $news_title = get_field('news_show_all', 'option'); ?>
							<a class="pm-button-secondary border-solid border-[1px] border-primary w-full text-center text-white uppercase" href="<?php echo get_permalink(get_option('page_for_posts')); ?>" title="<?php echo $news_title; ?>">
								<?php echo 'Zobacz kolejne wpisy'; ?>
							</a>
						</div>
					</div>
				</div>


				<div class="guides right-minus-px left-auto bg-dark-purple" role="presentation"></div>
			</div>
		</section>

		<?php get_template_part('template-parts/content/section', 'cta'); ?>

	</main><!-- #main -->
</section><!-- #primary -->





<?php
get_footer();
