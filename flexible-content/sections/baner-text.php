<?php

/** Template to display 'Baner tekst' - baner_text */

$title = $args['title'];
$title_color = $args['title_color'];
$decoration_dots = $args['decoration_dots'];
$decoration_lines = $args['decoration_lines'];
$bg_image = $args['bg_image'];
$description = $args['description'];
$description_smaller = $args['description_smaller'];
?>



<section class="relative py-[80px] lg:py-[110px] max-h-[800px] lg:max-h-auto overflow-hidden bg-[url('<?= $bg_image['url'] ?>')]">
  <div class="bg_custom_gradient"></div>
  <div class="guides left-[70px] right-auto bg-secondary" role="presentation">
    <span class="absolute top-1/2 -translate-y-1/2 left-[-47px]"><?php esc_html_e('O NAS'); ?></span>
  </div>
  <img
    class="hidden lg:block absolute bottom-[60px] left-[72px] z-0 pointer-events-none"
    src="<?= $decoration_dots['url']; ?>"
    alt="Decorations"
    role="presentation" />
  <img
    class="block absolute bottom-[0px] right-[70px] z-0 pointer-events-none opacity-30 lg:opacity-100"
    src="<?= $decoration_lines['url']; ?>"
    alt="Decorations"
    role="presentation" />

  <div class="container mx-auto relative overflow-hidden text-center">
    <?php if ($title) : ?>
      <h2 class="flex-initial uppercase mb-8 lg:mb-12 font-medium text-[42px] lg:text-[60px] leading-[48px] lg:leading-[60px]">
        <?= $title; ?>
        <span class="text-primary"><br><?= $title_color; ?></span>
      </h2>
    <?php endif; ?>

    <?php if ($description) : ?>
      <div class="pb-12 mx-auto max-w-[900px] text-[28px] lg:text-[40px] leading-[36px] lg:leading-[42px]">
        <?= $description; ?>
      </div>
    <?php endif; ?>

    <?php if ($description_smaller) : ?>
      <div class="pb-12 mx-auto max-w-[900px] text-[18px] lg:text-[20px]">
        <?= $description_smaller; ?>
      </div>
    <?php endif; ?>
  </div>

  <div class="guides right-[70px] left-auto bg-secondary uppercase" role="presentation">
    <span class="absolute top-2/3 right-[-47px]"><?php esc_html_e('SCROLL'); ?></span>
  </div>


</section>