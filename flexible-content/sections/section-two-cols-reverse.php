<?php

/** Template to display 'Dwie kolumny odwrócone' - section_two_cols_reverse */

$title = $args['title'];
$title_color = $args['title_color'];
$description = $args['description'];
$decoration_lines = $args['decoration_lines'];
$image = $args['image'];
?>

<section class="relative bg-[#f5f5f5] text-black flex flex-col">
  <img
    class="hidden lg:block absolute bottom-[-30px] right-[100px] z-0 pointer-events-none"
    src="<?= $decoration_lines['url']; ?>"
    alt="Decorations"
    style="rotate:90deg"
    role="presentation" />

  <div class="guides left-[70px] right-auto bg-[#e8e8e8]" role="presentation"></div>

  <div class="container mx-auto">
    <div class="flex flex-row-reverse flex-wrap pt-24 lg:pt-40 pb-16 mb-2 mt-2">

      <div class="lg:max-w-1/2 flex flex-col flex-wrap flex-auto lg:pl-32 mb-12 lg:mb-0 items-center text-center lg:items-start lg:text-left z-[1]">
        <?php if ($title) : ?>
          <h2 class="flex-initial uppercase mb-8 lg:mb-12 font-medium text-[42px] lg:text-[50px] leading-[48px] lg:leading-[50px]">
            <?= $title; ?>
            <span class="text-primary"><br><?= $title_color; ?></span>
          </h2>
        <?php endif; ?>

        <?php if ($description) : ?>
          <div class="pb-12 max-w-[540px] text-[20px]">
            <?= $description; ?>
          </div>
        <?php endif; ?>
      </div>

      <div class="lg:w-1/2 flex flex-wrap relative">
        <img
          class="absolute left-0 top-0 w-full h-full object-contain z-10"
          src="<?= $image['url']; ?>" alt="people" />
      </div>
    </div>
  </div>

  <div class="guides right-[70px] left-auto bg-[#e8e8e8]" role="presentation"></div>
</section>