<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Profile
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<div class="row small-up-2 medium-up-3 large-up-3 postbox">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title search-result-title"><i class="fa fa-search"></i> <?php printf( esc_html__( 'Search Results for: %s', 'profile' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
				?>

			<?php endwhile; ?>

			
			<?php if( class_exists( 'Jetpack' ) && Jetpack::is_module_active( 'infinite-scroll' ) ) {
				the_posts_navigation(); 
				} 
				else {
					profile_paging_nav();
				}
				?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
</div>
		</main><!-- #main -->
	</section><!-- #primary -->
<?php get_footer(); ?>
