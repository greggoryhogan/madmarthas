</div><!--close main-->
	<div class="sidebar">
		<?php if ( get_post_meta($post->ID, 'Gallery-ID', true) ) : ?>
			<?php echo do_shortcode('[nggallery id='.get_post_meta($post->ID, 'Gallery-ID', true).']');  ?>
			
		<?php endif; ?>
		<?php if ( !function_exists('dynamic_sidebar')
		|| !dynamic_sidebar('Address') ) : ?>
		<?php endif; ?>
	</div>
</div>
<div class="booze">
<?php if(is_page('Menu')) { ?>
<img src="<?php bloginfo(template_url)?>/images/booze.png" alt="HOME" />
<?php } else { ?>
<img src="<?php bloginfo(template_url)?>/images/bons.png" alt="BONS" />
<?php } ?>
</div>

<div class="footmenu">
<?php wp_nav_menu( array('menu' => 'Main Nav' )); ?>
<p>&copy; Mad Martha's Island Cafe <?php echo date('Y'); ?>.<!--<br />
Website by <a href="https://www.mynameisgregg.com" target="_blank">Gregg Hogan</a>-->
</p>
</div>
</div><!--close wrapper-->
<?php wp_footer(); ?>
</body>
</html>