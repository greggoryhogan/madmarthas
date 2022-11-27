<?php get_header(); ?>
	<?php if (have_posts()) : ?>
		<div class="post">
		<?php while (have_posts()) : the_post(); ?>
        	
			
				<?php the_content('Read the rest of this entry &raquo;'); ?>   
           	<br clear="all" /> 
        <?php endwhile; ?>

            <div class="navigation">
                <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
                <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
            </div>
    
        
    	</div>
        <?php endif; ?>	
        
<?php get_footer(); ?>

