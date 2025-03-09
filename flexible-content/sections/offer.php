<?php

/** Template to display 'Oferta' - offer */

$tile_bg = $args['tile_bg'];
$tile_decoration_icon = $args['tile_decoration_icon'];
?>

<section class="relative">
    <div class="guides text-white left-minus-px right-auto bg-dark-blue"><?php esc_html_e('Oferta'); ?></div>

    <div class="relative w-full lg:px-10 mx-auto max-w-none flex flex-row flex-wrap pb-16 z-30">
        <div class="w-full lg:w-1/2 relative overflow-hidden border-r-2 border-solid border-secondary">
            <div class="relative flex flex-col items-start h-full lg:min-h-550px py-10 px-4 z-20 lg:px-12">
                <h2 class="flex-initial uppercase text-white mb-8 lg:mb-12 font-medium text-[42px] lg:text-[60px] leading-[48px] lg:leading-[65px]">
                    <?php esc_html_e('Rozwiązania'); ?><br />
                    <span class="line-decorated bg-secondary leading-tight">dla domu</span>
                </h2>

                <div class="mb-[60px] lg:w-3/4 flex items-start flex-1 text-white text-[20px] leading-[26px]">
                    Lorem ipsum dolor sit amet consectetur. Fermentum urna in nisl odio dictum quam. Auctor lectus augue viverra dictum.
                </div>

                <a class="flex-initial mt-auto mb-0 pm-button pm-button--primary pm-button--large" href="">
                    ZOBACZ USŁUGI DLA DOMU
                </a>
            </div>
            <div class="absolute inset-0 z-10 pt-48 hidden lg:block">
                <?php
                if ($tile_decoration_icon) { ?>
                    <img
                        src="<?php echo $tile_decoration_icon['url']; ?>"
                        alt="Background"
                        class="w-full h-full object-cover"
                        role="presentation" />
                <?php }; ?>
            </div>
            <div class="absolute inset-0 w-full h-auto box-gradient-overlay-top">
                <?php
                if ($tile_bg) { ?>
                    <img
                        src="<?php echo $tile_bg['url']; ?>"
                        alt="Background"
                        class="w-full h-full object-cover"
                        role="presentation" />
                <?php }; ?>

            </div>
        </div>




        <div class="w-full lg:w-1/2 relative overflow-hidden border-r-2 border-solid border-secondary">
            <div class="relative flex flex-col items-start h-full lg:min-h-550px py-10 px-4 z-20 lg:px-12">
                <h2 class="flex-initial uppercase text-white mb-8 lg:mb-12 font-medium text-[42px] lg:text-[60px] leading-[48px] lg:leading-[65px]">
                    <?php esc_html_e('Rozwiązania'); ?><br />
                    <span class="line-decorated bg-secondary leading-tight">dla domu</span>
                </h2>

                <div class="mb-[60px] lg:w-3/4 flex items-start flex-1 text-white text-[20px] leading-[26px]">
                    Lorem ipsum dolor sit amet consectetur. Fermentum urna in nisl odio dictum quam. Auctor lectus augue viverra dictum.
                </div>

                <a class="flex-initial mt-auto mb-0 pm-button pm-button--primary pm-button--large" href="">
                    ZOBACZ USŁUGI DLA DOMU
                </a>
            </div>
            <div class="absolute inset-0 z-10 pt-48 hidden lg:block">
                <?php
                if ($tile_decoration_icon) { ?>
                    <img
                        src="<?php echo $tile_decoration_icon['url']; ?>"
                        alt="Background"
                        class="w-full h-full object-cover"
                        role="presentation" />
                <?php }; ?>
            </div>
            <div class="absolute inset-0 w-full h-auto box-gradient-overlay-top">
                <?php
                if ($tile_bg) { ?>
                    <img
                        src="<?php echo $tile_bg['url']; ?>"
                        alt="Background"
                        class="w-full h-full object-cover"
                        role="presentation" />
                <?php }; ?>

            </div>
        </div>
    </div>

    <div class="guides right-minus-px left-auto bg-dark-blue"></div>
</section>