<?php

/** Template to display 'Realizacje swiper' - realizations_swiper */

$title = $args['title'];
$title_bg = $args['title_bg'];
$title2 = $args['title2'];
$description = $args['description'];
$tile_bg = $args['tile_bg'];
?>

<div class="relative bg-[#110D25]">
    <?php
    $loop = new WP_Query(array(
        'post_type' => 'realizations',
        'posts_per_page' => -1
    ));
    ?>
    <div class="w-full">
        <?php if ($loop->have_posts()): ?>
            <div class="swiper z-30" data-js="swiper-realizations">
                <ul class="swiper-wrapper min-h-[430px] lg:[min-h-700px] max-h-[700px]">
                    <?php while ($loop->have_posts()) : $loop->the_post();
                        $_post = get_post(); ?>
                        <li class="swiper-slide h-[600px] w-full lg:w-1/2 group overflow-hidden flex flex-col justify-end box-gradient-overlay">
                            <?php echo get_the_post_thumbnail(
                                $_post->ID,
                                'slider-block',
                                array('class' => 'object-contain absolute right-0 bottom-0 z-10 w-auto min-w-full h-full max-w-none _left-1/2 _transform _-translate-x-1/2')
                            );
                            ?>
                            <div class="relative flex-auto flex flex-col flex-end p-8 overflow-hidden z-30 justify-end group-hover:justify-start">
                                <h3 class="relative phone-wide:mb-6 text-white mb-8 lg:mb-4 lg:mt-20">
                                    <?php echo the_title(); ?>
                                    <?= $title; ?>
                                    <span class="line-decorated bg-dark-blue-2"><br>test</span>
                                </h3>
                                <div class="max-h-full opacity-100 flex-auto h-auto lg:max-h-0 lg:opacity-0 transition-all duration-300 lg:invisible group-hover:visible group-hover:max-h-full group-hover:opacity-100">

                                    <div class="text-base leading-tight text-white">
                                        <?php echo str_replace("...", "", str_replace("…", "",  the_excerpt())); ?>
                                    </div>

                                    <?php if (is_array(get_field('services', $_post))): ?>
                                        <?php foreach (get_field('services', $_post) as $service): ?>
                                            <ul class="mt-4">
                                                <li class="">
                                                    <a href="<?php echo get_permalink($service); ?>" class="mb-4 mr-4 rounded-md px-2 text-sm bg-white text-black inline-block hover:text-black float-left">
                                                        <?php echo get_the_title($service); ?>
                                                    </a>
                                                </li>
                                                <?php foreach ((get_the_category($service)) as $category): ?>
                                                    <?php echo $category->term_id;
                                                    if ($category->term_id !== 1): ?>
                                                        <li class="bg-primary">
                                                            <a href="<?php echo get_category_link($category); ?>" class="mb-4 mr-4 rounded-md px-2 text-sm bg-white text-black inline-block hover:text-black float-left">
                                                                <?php echo get_cat_name($category); ?>
                                                            </a>
                                                        </li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <div class="flex items-center justify-between">
                    <div class="swiper-button-realizations-prev flex-initial px-4 py-8 hover:scale-[1.12] transition duration-200">
                        <svg class="w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 29" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2">
                            <path d="M7.957 13.086L21.045.006l1.455 1.45-13.088 13.09 13.085 13.09-1.454 1.45-13.086-13.09h-.002L6.5 14.546l.705-.7.752-.76z" fill="#01b9c3" />
                        </svg>
                    </div>
                    <div class="flex-1 px-4 py-8 relative h-10 flex items-center justify-center">
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button-realizations-next flex-initial px-4 py-8 hover:scale-[1.12] transition duration-200">
                        <svg class="w-8 rotate-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 29" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2">
                            <path d="M7.957 13.086L21.045.006l1.455 1.45-13.088 13.09 13.085 13.09-1.454 1.45-13.086-13.09h-.002L6.5 14.546l.705-.7.752-.76z" fill="#01b9c3" />
                        </svg>
                    </div>
                </div>
            </div>
        <?php endif;
        wp_reset_postdata(); ?>
    </div>
</div>