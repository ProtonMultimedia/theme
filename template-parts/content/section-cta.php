<?php
$cta_title_color = get_field('cta_title_color', get_option('page_for_posts'));
$cta_title = get_field('cta_title', get_option('page_for_posts'));
$cta_button = get_field('cta_button', get_option('page_for_posts'));
$cta_button_link = get_field('cta_button_link', get_option('page_for_posts'));
$cta_decoration_lines = get_field('cta_decoration_lines', get_option('page_for_posts'));
$cta_bg = get_field('cta_bg', get_option('page_for_posts'));
?>

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