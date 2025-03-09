<?php

/** Template to display 'Baner' - hero */

$front_slide_heading = $args['front_slide_heading'];
$front_slide_heading_bg = $args['front_slide_heading_bg'];
$front_slide_content = $args['front_slide_content'];
$front_slider_image = $args['front_slider_image'];
$front_slider_decoration = $args['front_slider_decoration'];
$front_slider_decoration2 = $args['front_slider_decoration2'];
$front_slider_lines = $args['front_slider_lines'];
$front_slide_button_url = $args['front_slide_button_url'];
$front_slide_button_title = $args['front_slide_button_title'];
?>

<section id="baner" class="relative">
    <div class="">
        <ul class="swiper-wrapper mt-[-65px]">
            <li class="swiper-slide overflow-hidden">
                <img
                    src="<?php echo $front_slider_image['url']; ?>"
                    alt="Background"
                    class="object-cover absolute left-0 top-0 right-0 bottom-0 h-full w-full pointer-events-none"
                    role="presentation" />
                <div class="image-overlay absolute top-0 bottom-0 left-0 w-full h-full -mb-1 z-10 pointer-events-none"></div>
                
                <img
                    src="<?php echo $front_slider_decoration['url']; ?>"
                    alt="Background"
                    class="object-cover absolute top-1/2 right-0 pointer-events-none z-0 lg:z-50"
                    role="presentation" />
                <img
                    src="<?php echo $front_slider_decoration2['url']; ?>"
                    alt="Background"
                    class="object-cover absolute top-0 right-0 pointer-events-none z-0 lg:z-50"
                    role="presentation" />

                <div class="guides left-minus-px right-auto bg-dark-blue" role="presentation"></div>
                <div class="container mx-auto h-auto min-h-screen pt-header pb-8 text-white z-30 flex flex-col">
                    <div class="flex-auto flex flex-col items-start">
                        <h1 class="font-semibold uppercase text-[40px] lg:text-[80px] mt-32 lg:mt-auto mb-4 lg:mb-14 leading-[54px] lg:leading-[84px] z-10 lg:z-50">
                            <?php echo $front_slide_heading; ?>
                            <span class="line-decorated bg-[#01B9C3]"><?php echo $front_slide_heading_bg; ?></span>
                        </h1>
                        <div class="w-full sm:w1/3 lg:w-1/2 text-[20px] leading-[27px] mb-4 lg:mb-14 mt-10 lg:mt-0 z-10">
                            <p class="mb-4 lg:mb-5">
                                <?php echo $front_slide_content; ?>
                            </p>
                        </div>
                        <a
                            class="pm-button pm-button mt-4 mb-4 lg:mb-8 z-10"
                            href="<?php echo $front_slide_button_url; ?>">
                            <?php echo $front_slide_button_title; ?>
                        </a>
                        <div class="relative flex items-start mt-auto mb-0 swiper-pagination" data-baner-pagination></div>
                    </div>
                </div>
                <div class="guides right-minus-px left-auto bg-secondary" role="presentation"></div>
            </li>
        </ul>
    </div>
</section>