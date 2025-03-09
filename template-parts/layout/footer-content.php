<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package proton
 */

$description = get_field('footer_description', 'option');

?>

<footer id="colophon" class="py-[60px] bg-secondary text-white">
	<div class="container mx-auto relative">
		<svg class="hidden lg:block absolute top-[-60px] right-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="167" height="114" viewBox="0 0 167 114" fill="none">
			<rect y="0.347656" width="167" height="113" fill="url(#pattern0_5002_490)" />
			<defs>
				<pattern id="pattern0_5002_490" patternContentUnits="objectBoundingBox" width="1" height="1">
					<use xlink:href="#image0_5002_490" transform="scale(0.00598802 0.00884956)" />
				</pattern>
				<image id="image0_5002_490" width="167" height="113" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKcAAABxCAYAAACwcbPeAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAFHElEQVR4nO3czYojVRjG8ect4tfgFfTluBE3TcHgYkTUxaAFg4KggpAwSDKgLoRBUNwMIm7GVbkYcOfdeAeOX0w9Ls7pJJ3KnHSdBLL5/zbdzTBvv1V16GTxJ/HiZw8upFgo1ErRK7T898vP/9BEL9z/5kIRC8nrOf/d/3j6nK+/S/tIraJJcz75YPKc2bc/XkhaKKJ1RC9p+ezeO5PnNI9+SXOayNcVy+Hd25PnxOMnF2qUryvN8e03Js/Rk98vZC+kaGX3spa6fK1uHys9Lw+9pKXvXFbdn7AXsluFetnLZ3fvVD4vL2S1UrqumaS55E4OKdzJMUi6N3W47LmkThHK8yrnaK5wJ4XkoZOaujnyXIpOtkLqHHX7hD13RKfBUqNOVv11DerUSLI7qXaO54p0XYroJNfNafI+DimaTh4q77Pmjugi7dap8j5LSs8rLDk6hYdGdpv+zZKl9JevSitbsiVF/RyrzXvkn4f6OesZVrh2H7fhPGew6u+P03UNm7l1c6LNB1OSpYj659UoPSqFFE3dnPz7HZF2so6ak3aRpGgbWb2ubn46oH3VcDn9v80BrZuTXqq0dUDr97l2yF03J71UaeuAVl7X0K//AKQDWn9/FNo6oJXXlZ/P5oDW35+ItFo6oFVznN7qrIcq1M9CWtmy5PReSH5QtaS1Sk8wvxeSKud4pfQnoZXUK47cx9Eq3EtRv0+EZbch9Y7KOdJKHqxoWjl6DbX3R6v0UpDvc+0+Eek+260a1e+juPbcj7k/jnCkV+D65wUAAAAAAAAAAAAAAIDzi5c+XKSCPXIFJC3/efjF5JKZor6Mor5sX1E/C2nuVGbnsrqy0KaoL6KoP2hU1De5U9yKhCtLZor6A3Mo6svrjIv6dQm/dUArC22K+iKK+gNzxkX9TNJKuYSPiN6uK88p6m+wD0V9adCpinoAAAAAAAAAAAAAAACcW7x899OtEt69IpZ///DV5JKZor6Mov4G++wU9ekz4bdLeNcV0RT1BwdR1JfsKeobXZXvm7i3vvS+NoeifjSHor5kVNQ314r1E5TwFPWFfSjqn29PUT+TvJLD6T2eelWW8KKov9k+FPX7nayoBwAAAAAAAAAAAAAAwNnFK29/lIvxXCWFln/99HByyUxRf2AORX3ZnqJ+JnkuXxXjR5TVFPUH5lDUl+eMi/pcwq/rdam2YKeoP7APRX3ZuKhvNkX2+jDUF+zr7ynqx2Mo6stzxkV9/kz4XDKnC68skCnqy3Mo6sv7nKioBwAAAAAAAAAAAAAAwPnFrTffT6W3o1WoV8Ty6ePvJ5fMFPVlFPVl+4r6mZyL8ZDkIz7Tm6K+jKL+wDrjoj6V8FaOPJ1L6yoU9WUU9eVBo6J+85nwmwN6RMmcB1HU7xtEUV9cZ1zU5xJeqWC36otxivoyivpDTlPUAwAAAAAAAAAAAAAA4Pzi1uV7m7I6F9pPf300uWSmqC+jqC/bV9TPdFV66wSFNkV9eR+K+ufaV9Q310rv9PWI0lsU9YU5+RuK+r1zxkV9E7ul97EFO0V9cc7VDxT1O/YU9TOFVmHZx5beFPVFFPU32Oc0RT0AAAAAAAAAAAAAAADOLV59/a0L55JZTgX7n7/9PL2Ep6gvoqgv21fUzyTNQ+psH1WMi6K+iKL+4KBRUZ8+E17axLRxgtI7faWo30ZRf3jOTlHfbBfZ+eZVlcwU9TeYQ1Ff3menqJ/tFuNRW1ZT1N9gH4r6g/tsFfX/Ax+asekgez1ZAAAAAElFTkSuQmCC" />
			</defs>
		</svg>

		<?php if (has_nav_menu('menu-2')) : ?>
			<nav aria-label="<?php esc_attr_e('Footer Menu', 'proton'); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_class'     => 'footer-menu',
						'depth'          => 1,
					)
				);
				?>
			</nav>
		<?php endif; ?>

		<div class="contact">
			<div class="max-w-[250px]">
				<?php echo ($description); ?>
			</div>
		</div>
	</div>
</footer>