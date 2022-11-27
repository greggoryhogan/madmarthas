<?php
/*
Template Name: Location
*/
?>
<?php get_header(); ?>
	<?php if (have_posts()) : ?>
		<div class="post">
		<?php while (have_posts()) : the_post(); ?>
        	
			
				<div class="location"><?php the_content('Read the rest of this entry &raquo;'); ?>  </div> 
                <iframe width="430" height="280" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="//maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=51+Northern+Blvd++Plum+Island,+MA&amp;sll=37.0625,-95.677068&amp;sspn=38.092988,78.222656&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=51+Northern+Blvd,+Newbury,+Essex,+Massachusetts&amp;t=m&amp;ll=42.802549,-70.811627&amp;spn=0.004408,0.009205&amp;z=16&amp;output=embed&iwloc=near" class="locationMap"></iframe>
           	<br clear="all" /> 
        <?php endwhile; ?>

            <div class="navigation">
                <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
                <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
            </div>
    
        
    	</div>
        <?php endif; ?>	
        
<?php get_footer(); ?>

