<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Bota
 * @since Bota 1.0
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    
    <div class="section group">
    
	<div class="col span_1_of_3">
    <?php if ( is_active_sidebar( 'left_column' ) && dynamic_sidebar('left_column') ) : else : ?>
         <div class="widget">
			<?php echo '<h4>' . __('Widget Ready', 'bota') . '</h4>'; ?>
            <?php echo '<p>' . __('This left column is widget ready! Add one in the admin panel.', 'bota') . '</p>'; ?>
            </div>     
	<?php endif; ?>  
		</div>
        
	<div class="col span_1_of_3">
	<?php if ( is_active_sidebar( 'center_column' ) && dynamic_sidebar('center_column') ) : else : ?>
         <div class="widget">
			<?php echo '<h4>' . __('Widget Ready', 'bota') . '</h4>'; ?>
            <?php echo '<p>' . __('This center column is widget ready! Add one in the admin panel.', 'bota') . '</p>'; ?>
            </div>     
	<?php endif; ?> 

	</div>
    
	<div class="col span_1_of_3">
	<?php if ( is_active_sidebar( 'right_column' ) && dynamic_sidebar('right_column') ) : else : ?>
         <div class="widget">
			<?php echo '<h4>' . __('Widget Ready', 'bota') . '</h4>'; ?>
            <?php echo '<p>' . __('This right column is widget ready! Add one in the admin panel.', 'bota') . '</p>'; ?>
            </div>     
	<?php endif; ?> 
	</div>
	</div>

		<div class="site-info">
			&copy; Vemo PK 2015
            <!--a href="<?php $my_theme = wp_get_theme(); echo $my_theme->get( 'ThemeURI' ); ?>">
            <?php _e('Bota WordPress Theme','vemofooter'); ?></a>
            <?php echo __( 'Powered By WordPress ', 'striker' ); ?>
			-->
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
     <a href="#top" id="smoothup"></a>
</div><!-- #page .hfeed .site -->
</div><!-- end of wrapper -->
<?php wp_footer(); ?>

</body>
</html>