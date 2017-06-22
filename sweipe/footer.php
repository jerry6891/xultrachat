<?php if( 'on' == sweipe::option('sweipe_footer', 'sweipe_footer_display', 'on') ): ?>
	<?php
	global $allowedtags;
	$footer_allowed = $allowedtags;
	$footer_allowed['a']['class'] = true;
	?>
	<footer class="ms-footer">
		<div class="content-inner">
			<span><?php echo esc_html__(sweipe::option('sweipe_footer', 'sweipe_copyright_text', 'Copyright 2015 by Mobius Studio'), 'sweipe') ?></span>
			<div><?php echo wp_kses(sweipe::option('sweipe_footer', 'sweipe_custom_html', '<a href="#" class="tc-icon-ball socialicon-facebook43 color-facebook"></a><a href="#" class="tc-icon-ball socialicon-google109 color-google"></a><a href="#" class="tc-icon-ball socialicon-twitter34 color-twitter"></a><a href="#" class="tc-icon-ball socialicon-pinterest26 color-pinterest"></a><a href="#" class="tc-icon-ball socialicon-dribbble11 color-dribbble"></a>'), $footer_allowed); ?></div>
		</div>
	</footer>
<?php endif; ?>
</main>

<aside class="ms-panel position-right">
	<div class="inner">
		<div class="content-inner">
			<?php if ( is_active_sidebar( 'sweipe-right-panel' ) ) : ?>
				<?php dynamic_sidebar( 'sweipe-right-panel' ); ?>
			<?php endif; ?>
		</div>
	</div>
</aside>

<div class="overlay"></div>
<?php wp_footer(); ?>
</body>
</html>