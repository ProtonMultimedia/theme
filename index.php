<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package proton
 */

get_header();

$title = get_field('title', get_option('page_for_posts'));
$title_color = get_field('title_color', get_option('page_for_posts'));
$description = get_field('description', get_option('page_for_posts'));
$banner_decoration_lines = get_field('banner_decoration_lines', get_option('page_for_posts'));
$bg_banner = get_field('bg_banner', get_option('page_for_posts'));
$cta_title_color = get_field('cta_title_color', get_option('page_for_posts'));
$cta_title = get_field('cta_title', get_option('page_for_posts'));
$cta_button = get_field('cta_button', get_option('page_for_posts'));
$cta_button_link = get_field('cta_button_link', get_option('page_for_posts'));
$cta_decoration_lines = get_field('cta_decoration_lines', get_option('page_for_posts'));
$cta_bg = get_field('cta_bg', get_option('page_for_posts'));
?>

<div id="primary" class="x-index content-area">
	<main id="main" class="site-main">
		<section class="_hidden relative py-[100px] font-['Rajdhani']">
			<img
				class="hidden lg:block absolute right-0 top-[20px] flex-initial mt-auto z-[1]"
				src="<?= $banner_decoration_lines['url']; ?>"
				alt="Decorations"
				role="presentation" />
			<div class="bg_custom_gradient"></div>

			<div class="banner bg-[url('<?= $bg_banner['url'] ?>')]">
				<div class="container mx-auto relative">
					<?php if ($title) : ?>
						<h2 class="flex-initial uppercase mb-8 lg:mb-12 font-medium text-[42px] lg:text-[60px] leading-[48px] lg:leading-[65px] z-10">
							<?= $title; ?>
							<span class="text-primary"><br><?= $title_color; ?></span>
						</h2>
					<?php endif; ?>

					<?php if ($description) : ?>
						<div class="relative pb-12 max-w-[440px] text-[20px] z-10">
							<?= $description; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>

			<div class="guides right-minus-px left-auto bg-secondary" role="presentation"></div>

			<div class="container _lg:container mx-auto">
				<?php if (get_field('news_side_title', 'option')): ?>
					<side-heading
						data-text="<?php echo get_field('news_side_title', 'option'); ?>"></side-heading>
				<?php endif; ?>

				<div class="guides guides2 left-minus-px right-auto bg-dark-blue" role="presentation"></div>

				<div class="lg::pt-12">
					<?php
					$post_list = get_posts(array(
						'sort_order' => 'desc',
						'posts_per_page' => -1,
					));

					if ($post_list): ?>
						<ul class="w-full flex-auto flex flex-col lg:flex-row lg:flex-wrap gap-4 lg:gap-0 box-shadow-bottom overflow-hidden transition-height duration-300" data-js-posts-container>
							<?php foreach ($post_list as $featured_post):
								$post_date = get_the_date('d / m / Y');
								$permalink = get_permalink($featured_post->ID);
								$title = get_the_title($featured_post->ID);
								$excerpt = get_the_excerpt($featured_post->ID);
								$post_image = get_the_post_thumbnail_url($featured_post->ID, array('400', '9999'));
							?>
								<li class="flex-1/2 lg:max-w-1/2 relative">
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
												<a class="lg:invisible lg:group-hover:visible w-fit pm-button-secondary uppercase" href="<?php echo esc_url($permalink); ?>">
													<?php echo 'Czytaj całość'; ?>
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
							<div class="pm-button-secondary border-solid border-[1px] border-primary w-full text-center text-white uppercase cursor-pointer" data-js-show-more-posts>
								<?php echo 'POKAŻ WIĘCEJ WPISÓW'; ?>
							</div>
						</div>
					</div>
				</div>


				<div class="guides guides3_ok !ml-[-2px] left-auto bg-dark-purple" role="presentation"></div>
				<!-- <div class="guides guides3_ok right-auto bg-dark-purple" role="presentation"></div> -->
			</div>
		</section>

		<section class="cta relative py-[80px] lg:py-[100px] bg-[url('<?= $cta_bg['url'] ?>')] bg-center font-['Rajdhani']">
			<img
				class="block absolute bottom-0 left-0 z-0 opacity-50 lg:opacity-100"
				src="<?= $cta_decoration_lines['url']; ?>"
				alt="Decorations"
				role="presentation" />
			<div class="container mx-auto">
				<div class="hidden guides left-minus-px right-auto bg-dark-purple"></div>

				<div class="relative">
					<div class="container flex flex-row flex-wrap lg-wide:flex-no-wrap justify-center items-center lg:gap-[120px]">
						<div class="flex-initial lg-wide:w-7/12 mb-10 lg:mb-0 uppercase z-20">
							<h2 class="mb-0 text-[46px] lg:text-[60px] leading-[100%] font-medium lg:mb-0">
								<span class="text-primary"><?= $cta_title_color; ?></span>
								<br>
								<?= $cta_title; ?>
							</h2>
						</div>
						<div class="flex-initial lg-wide:w-5/12">
							<a
								class="pm-button pm-button--primary text-[20px]"
								href="<?= $cta_button_link; ?>">
								<?= $cta_button; ?>
							</a>
						</div>
					</div>
				</div>

				<div class="hidden guides right-minus-px left-auto bg-dark-purple"></div>
			</div>
		</section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
