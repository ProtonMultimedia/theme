<?php

/** Template to display 'Realizacje' - realizations */

$title = $args['title'];
$title_color = $args['title_color'];
$description = $args['description'];
$decoration_dots = $args['decoration_dots'];
?>

<section class="relative bg-[#110D25] pt-[105px]">
    <div class="guides left-minus-px right-auto bg-dark-blue" role="presentation"><?php esc_html_e('Realizacje'); ?></div>

    <div class="container mx-auto relative overflow-hidden">
        <?php if ($title) : ?>
            <h2 class="flex-initial uppercase mb-8 lg:mb-12 font-medium text-[42px] lg:text-[60px] leading-[48px] lg:leading-[65px]">
                <?= $title; ?>
                <span class="text-primary"><br><?= $title_color; ?></span>
            </h2>
        <?php endif; ?>

        <?php if ($description) : ?>
            <div class="pb-12 max-w-[440px] text-[20px]">
                <?= $description; ?>
            </div>
        <?php endif; ?>

        <img
            class="block absolute bottom-[-160px] left-1/2 z-50 pointer-events-none mt-5 ml-40"
            src="<?= $decoration_dots['url']; ?>"
            alt="Decorations"
            role="presentation" />
    </div>





    <div class="guides right-minus-px left-auto bg-dark-purple" role="presentation"></div>
</section>