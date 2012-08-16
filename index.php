<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>
<?php if (is_front_page()) {?>
		<div id="primary">	
			<div id="featured">
				<div id="accordion">
			  	
			  	<?php
			  		if (have_posts() ) : 
			  		while ($the_query->have_posts()): $the_query->the_post();$do_not_duplicate = $post->ID; 
			  			echo '<div class="pane">';?>
			  			<span class="pane-image"><a href="<?php the_permalink();?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>"><?php the_post_thumbnail('front-page');?></a></span>
			  		<div class="summary">
			  			<h3><?php the_title();?></h3>
			  			<?php the_excerpt();?>
			  		</div>
			  	<?php
			  		echo '</div>';
			  	endwhile; rewind_posts();
			  	?>
			  	<div class="tabs">
			  	<?php 
			  			while ($the_query->have_posts()) : $the_query->the_post();
			  			echo '<h3 class="current">';
			  			the_title();
			  			echo '</h3>';
			  		endwhile; endif;?>
			  	</div><!-- Tabs -->
			  	<?php ?>
		  	</div><!-- Accordion -->
			<div class="clearfix"></div>
			</div>
			<?php };?>

				
			<div id="content" role="main">
			<div id="runner">
				<div id="runner-cn"><h3><a href="<?php echo site_url('/tag/china/');?>">China</a></h3></div>
				<div id="runner-jp"><h3><a href="<?php echo site_url('/tag/japan/');?>">Japan</a></h3></div>
				<div id="runner-kr"><h3><a href="<?php echo site_url('/tag/korea/');?>">Korea</a></h3></div>
				<div id="runner-se"><h3><a href="<?php echo site_url('/tag/seasia/');?>">South East Asia</a></h3></div>
				<div class="clearfix"></div>
			</div>
			<?php rewind_posts(); //query_posts(array('category_name'=>'blogs')); 
			if ( have_posts() ) : ?>

				<?php //twentyeleven_content_nav( 'nav-below' ); ?>

				<?php /* Start the Loop */ ?>
				<?php $i=1; while ( have_posts() && $i < 6 ) : the_post(); if( $post->ID == $do_not_duplicate ) continue;?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php $i++; endwhile; ?>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>
				

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>