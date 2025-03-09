<?php

/** Template to display 'O nas' - about */

$title = $args['title'];
$decoration_dots = $args['decoration_dots'];
$decoration_lines = $args['decoration_lines'];
$description = $args['description'];
$description_smaller = $args['description_smaller'];
$btn = $args['btn'];
?>

<section class="max-w-none relative filter-shadow-top overflow-hidden">
  <div class="guides left-minus-px right-auto bg-dark-blue" role="presentation"><?php esc_html_e('O nas'); ?></div>
  <img
    class="hidden lg:block absolute left-10 top-1/2 -translate-y-1/4 -z-10 lg:z-0"
    src="<?= $decoration_dots['url']; ?>"
    alt="Decorations"
    role="presentation" />
  <div class="flex-initial flex flex-row items-center">

  </div>
  <div class="container mx-auto lg:pb-10 lg:pt-20 flex flex-row relative">
    <img
      class="block absolute top-0 bottom-0 lg:top-auto lg:bottom-0 right-[-160px] lg:right-0 origin-top-right transform lg:max-w-340px opacity-50 lg:opacity-100 translate-x-0/2 lg:translate-x-0 -z-10 lg:z-0"
      src="<?= $decoration_lines['url']; ?>"
      alt="Decorations"
      role="presentation" />
    <div class="relative w-full">
      <div class="w-full flex flex-col lg:flex-row flex-wrap">
        <div class="basis-1/2">
          <?php if ($title) : ?>
            <h2 class="flex-initial uppercase mb-8 lg:mb-12 font-medium text-[42px] lg:text-[60px] leading-[48px] lg:leading-[65px]">
              <?= $title; ?>
            </h2>
          <?php endif; ?>
          <h3 class="mb-8 lg:mb-17 lg:max-w-[600px] text-[22px] lg:text-[40px] leading-[100%]">
            <?= $description; ?>
          </h3>
          <div class="lg:max-w-[600px] lg:text-[20px]">
            <?= $description_smaller; ?>
          </div>
        </div>
        <div class="basis-1/2 w-full py-4 lg:w-1/2 flex items-end justify-start">
          <a
            class="pm-button-secondary uppercase"
            href="">
            <?= $btn; ?>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="guides right-minus-px left-auto bg-dark-blue" role="presentation"></div>
</section>