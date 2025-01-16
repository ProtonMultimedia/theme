<?php

/** Template to display 'Baner' - hero */

$hero_text = $args['hero_text'];

?>

<section class="relative w-full !h-[600px] md:!h-[700px] flex flex-col justify-center items-center">
    <?php if ($hero_text) : ?>
        <h1 class="text-[40px] lg:text-[80px] leading-[45px] lg:leading-[80px] font-medium"><?php echo $hero_text; ?></h1>
    <?php endif; ?>
</section id="<?php echo $section_ID; ?>">

<section id="baner" class="relative">
    <div class="mb-4 tablet:mb-0 z-40">
        <ul class="swiper-wrapper">
            <?php
            if (have_rows('front_slider')):
                while (have_rows('front_slider')) : the_row();
            ?>
                    <li class="swiper-slide overflow-hidden">
                        <img
                            src="<?php echo get_sub_field('front_slider_image')['url'] ?>"
                            alt="Background"
                            class="object-cover absolute left-0 top-0 right-0 bottom-0 h-full w-full pointer-events-none"
                            role="presentation" />
                        <div class="image-overlay absolute top-0 bottom-0 left-0 w-full h-full -mb-1 z-10 pointer-events-none"></div>
                        <img
                            class="hidden tablet-wide:block absolute top-0 right-0 h-full w-auto pointer-events-none z-0 desktop-wide:z-50 opacity-50 desktop-wide:opacity-100"
                            src="<?php echo get_template_directory_uri() . '/assets/svg/banner-lines.svg' ?>"
                            width="540px"
                            height="700px"
                            alt="Decorations"
                            role="presentation" />
                        <div class="guides left-minus-px right-auto bg-dark-blue" role="presentation"></div>
                        <div class="container h-auto min-h-screen pt-header desktop:pt-header-desktop pb-8 text-white z-30 flex flex-col">
                            <div class="desktop-wide:px-smaller-container flex-auto flex flex-col items-start">
                                <h1 class="font-bold uppercase text-4xl tablet-wide:text-baner mt-auto mb-4 tablet:mb-8 desktop:mb-14 leading-tight z-10 tablet-wide:z-50">
                                    <?php
                                    $lines = explode(PHP_EOL, get_sub_field('front_slide_heading'));
                                    foreach ($lines as $line) {
                                        echo preg_replace("/\*(.+)\*/", '<span class="line-decorated bg-primary">$1</span>', $line);
                                    }
                                    ?>
                                </h1>
                                <div class="w-full sm:w1/3 tablet-wide:w-1/2 leading-relaxed mb-4 tablet:mb-8 desktop:mb-14 z-10">
                                    <p class="text-base mb-4 tablet-wide:mb-5" data-hero-content>
                                        <?php the_sub_field('front_slide_content'); ?>
                                    </p>
                                </div>
                                <?php
                                if ($front_slide_button = get_sub_field('front_slide_button')):
                                    $front_slide_button_url = $front_slide_button['url'];
                                    $front_slide_button_title = $front_slide_button['title'];
                                    $front_slide_button_target = $front_slide_button['target'] ? $front_slide_button['target'] : '_self';
                                ?>
                                    <a
                                        class="pm-button pm-button--primary pm-button--large mt-4 mb-4 tablet:mb-8 desktop:mb-24 z-10"
                                        href="<?php echo esc_url($front_slide_button_url); ?>"
                                        target="<?php echo esc_attr($front_slide_button_target); ?>">
                                        <?php echo esc_html($front_slide_button_title); ?>
                                    </a>
                                <?php
                                endif;
                                ?>
                                <div class="relative flex items-start mt-auto mb-0 swiper-pagination" data-baner-pagination></div>
                            </div>
                        </div>
                        <div class="guides right-minus-px left-auto bg-dark-blue" role="presentation"></div>
                    </li>
            <?php
                endwhile;
            else :
            endif;
            ?>
        </ul>
    </div>
</section>