<?php

/** Template to display 'Newsy' - news */

$title = $args['title'];
$title_color = $args['title_color'];
$description = $args['description'];
$decoration_dots = $args['decoration_dots'];
$decoration_dots2 = $args['decoration_dots2'];
$decoration_lines = $args['decoration_lines'];
$news_read_more = $args['news_read_more'];
?>



<section class="relative py-[100px]">
    <img
        class="hidden lg:block absolute right-0 top-0 flex-initial mt-auto"
        src="<?= $decoration_lines['url']; ?>"
        alt="Decorations"
        role="presentation" />
    <div class="guides left-minus-px right-auto bg-dark-blue" role="presentation"><?php esc_html_e('Newsy'); ?></div>

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

        <img
            class="block absolute bottom-[-100px] left-[-50px] z-0 pointer-events-none"
            src="<?= $decoration_dots['url']; ?>"
            alt="Decorations"
            role="presentation" />
    </div>

    <div class="guides right-minus-px left-auto bg-dark-purple" role="presentation"></div>

    <div class="lg:container mx-auto">
        <?php if (get_field('news_side_title', 'option')): ?>
            <side-heading
                data-text="<?php echo get_field('news_side_title', 'option'); ?>"></side-heading>
        <?php endif; ?>

        <div class="guides left-minus-px right-auto bg-dark-blue" role="presentation"></div>

        <div class="pt-4 lg::pt-12">
            <?php
            $post_list = get_posts(array(
                'sort_order' => 'desc',
                'posts_per_page' => 4,
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
                                            <?php echo $news_read_more; ?>
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