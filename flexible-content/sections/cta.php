<?php

/** Template to display 'CTA' - cta */

$title_color = $args['title_color'];
$title = $args['title'];
$decoration_lines = $args['decoration_lines'];
$bg_image = $args['bg_image'];
$btn = $args['btn'];
?>

<section class="relative py-[80px] lg:py-[100px] bg-[url('<?= $bg_image['url'] ?>')] bg-center">
    <img
        class="block absolute bottom-0 left-0 z-0 opacity-50 lg:opacity-100"
        src="<?= $decoration_lines['url']; ?>"
        alt="Decorations"
        role="presentation" />
    <div class="container mx-auto">
        <div class="hidden guides left-minus-px right-auto bg-dark-purple"></div>

        <div class="relative">
            <div class="container flex flex-row flex-wrap lg-wide:flex-no-wrap justify-center items-center lg:gap-[120px]">
                <div class="flex-initial lg-wide:w-7/12 mb-10 lg:mb-0 uppercase z-20">
                    <h2 class="mb-0 text-[46px] lg:text-[60px] leading-[100%] font-medium lg:mb-0">
                        <span class="text-primary"><?= $title_color; ?></span>
                        <br>
                        <?= $title; ?>
                    </h2>
                </div>
                <div class="flex-initial lg-wide:w-5/12">
                    <a
                        class="pm-button pm-button--primary text-[20px]"
                        href="">
                        <?= $btn; ?>
                    </a>
                </div>
            </div>
        </div>

        <div class="hidden guides right-minus-px left-auto bg-dark-purple"></div>
    </div>
</section>