<?php

/** Template to display 'Formularz kontaktowy' - form_contact */

$header = $args['header'];
$mail = get_field('footer_mail', 'option');

?>

<div class="container mx-auto mb-16">
    <div class="container mx-auto px-5 py-10 md:p-16">
        <div class="hidden lg:basis-1/3">
            <?php if ($header) : ?>
                <h2 class="mb-9 text-2xl md:text-3xl font-black text-foreground mt-10 max-w-[450px]"><?php echo $header; ?></h2>
            <?php endif; ?>
            <?php if ($mail) : ?>
                <div class="mb-6">
                    <p class="mb-2 base font-semibold"><?php echo esc_html_e('Contact details:', 'kierujsklepemaldi'); ?></p>
                    <a href="mailto:<?= $mail ?>" class="group flex items-center gap-2 font-bold w-fit">
                        <svg class="shrink-0" width="29" height="30" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect class="group-hover:!fill-tertiary/80 transition duration-200" y="0.403809" width="29" height="29" rx="5" fill="#00B6ED" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.16667 10.1419V19.6657C6.16667 20.2972 6.41752 20.9028 6.86403 21.3493C7.31055 21.7958 7.91615 22.0467 8.54762 22.0467H20.4524C21.0839 22.0467 21.6895 21.7958 22.136 21.3493C22.5825 20.9028 22.8333 20.2972 22.8333 19.6657V10.1419C22.8333 9.51047 22.5825 8.90487 22.136 8.45835C21.6895 8.01184 21.0839 7.76099 20.4524 7.76099H8.54762C7.91615 7.76099 7.31055 8.01184 6.86403 8.45835C6.41752 8.90487 6.16667 9.51047 6.16667 10.1419Z" stroke="#202B78" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.54762 11.3324L14.5 14.9038L20.4524 11.3324" stroke="#202B78" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <?= $mail ?>
                    </a>
                </div>
            <?php endif ?>

        </div>

        <div class="form-contact-wrapper form-with-confirm-wrapper relative lg:basis-2/3 lg:ml-12">
            <?php echo do_shortcode('[contact-form-7 id="f020116" title="Formularz"]'); ?>

            <div class="form-confirmation bg-[#F7F8F8] pointer-events-none opacity-0 z-10 absolute inset-0 flex flex-col items-center justify-center transition duration-300 text-secondary">
                <svg class="max-w-full mb-4" width="125" height="125" viewBox="0 0 125 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="62.5" cy="62.5" r="60.5" stroke="#00B6ED" stroke-width="4"></circle>
                    <path d="M38.5713 62.5L54.2856 77.8571L85.7141 47.1428" stroke="#00B6ED" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <h3 class="text-center text-2xl md:leading-10 md:!text-[40px] max-w-[460px] font-semibold mb-5"><?php esc_html_e('Thank you for sending your message', 'kierujsklepemaldi'); ?></h3>
                <p class="text-center text-base max-w-[460px] mb-10 md:mb-16"><?php esc_html_e('We will get back to you soon.', 'kierujsklepemaldi'); ?></p>
                <button data-js-form-reset="form-contact-wrapper" class="btn-primary">
                    <?php esc_html_e('Go back to form', 'kierujsklepemaldi'); ?>
                </button>
            </div>
        </div>
    </div>
</div>