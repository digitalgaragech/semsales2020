<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package semsales2020
 */

get_header();
?>
<?php
	$paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
	$args = array(
			'post_type' => 'post',
			'category_name' => 'Banner',
			'posts_per_page' => 5,
			'paged' => $paged,
	);
	$arr_posts = new WP_Query( $args );


	if ( $arr_posts->have_posts() ) {
		?>
<section id="hero">
	<div class="owl-carousel owl-banners owl-theme">
			<?php
				while ( $arr_posts->have_posts() ) {
						$arr_posts->the_post();
						?>
            <div id="post-<?php the_ID(); ?>" class="item">
                <img class="owl-lazy" data-src="<?php
                if ( has_post_thumbnail() ) :
                    the_post_thumbnail_url();
                endif;
                ?>">
                <div class="entry-banner container">
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        <?php the_excerpt(); ?>
                    </header>
                    <div class="entry-content">
                        <a class="btn btn-big btn-white" href="<?php the_permalink(); ?>">En savoir plus</a>
                    </div>
                </div>
            </div>
					<?php
					} // end while
		?>
</div>
</section>
<?php
} // end if
?>
				<?php
					$paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
					$args = array(
							'post_type' => 'post',
							'category_name' => 'Event',
							'posts_per_page' => 2,
							'paged' => $paged,
					);
					$arr_posts = new WP_Query( $args );



					if ( $arr_posts->have_posts() ) { ?>
	<section id="events">
        <div class="container">
            <h2 class="center section-heading"><?php echo category_description( get_category_by_slug('Event')->term_id ); ?></h2>
			<div class="owl-carousel owl-events owl-theme ">

								<?php
									while ( $arr_posts->have_posts() ) {
											$arr_posts->the_post();
											?>
                        <div id="post-<?php the_ID(); ?>" class="item">
                           <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                            }
                            else {
                                echo '<div class="img-placeholder">nopic</div>';
                            }
                            ?>
                            <header class="entry-header">
                                <h3 class="entry-title"><?php the_title(); ?></h3>
                            </header>
                            <div class="entry-content">
                                <?php the_excerpt(); ?>
                                <a class="btn btn-default" href="<?php the_permalink(); ?>">En savoir plus</a>
                            </div>
                        </div>
											<?php
											} // end while
								?>
            </div>
            <a class="center btn btn-big btn-outline" href="/programme">Voir le programme complet</a>
        </div>
	</section>

	<?php
	} // end if
	?>
	<?php
			$paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
			$args = array(
					'post_type' => 'post',
					'category_name' => 'Quote',
					'posts_per_page' => 5,
					'paged' => $paged,
	);
	$arr_posts = new WP_Query( $args );


			if ( $arr_posts->have_posts() ) { ?>
	<section id="quotes">
        <div class="container">
            <h2 class="center section-heading"><?php echo category_description( get_category_by_slug('Quote')->term_id ); ?></h2>
            <div class="owl-carousel owl-quotes owl-theme">
												<?php
													while ( $arr_posts->have_posts() ) {
															$arr_posts->the_post();
															?>
                        <a href="<?php the_permalink(); ?>">
                            <div id="post-<?php the_ID(); ?>" class="item quote__item">
                               <div class="quote__item--img">
                                <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail();
                                }
                                else {
                                    echo '<div class="img-placeholder">nopic</div>';
                                }
                                ?>
                                </div>
                                <div class="quote__item--texts">
                                    <header class="entry-header">
                                    </header>
                                    <div class="entry-content">
                                        <?php the_excerpt(); ?>
                                        <strong><?php the_title(); ?></strong>
                                    </div>
                                </div>
                            </div>
                        </a>
											<?php
											} // end while
								?>
            </div>
            <a class="center btn btn-big btn-outline" href="/arbracadabrant">Tout savoir sur Arbracadabrant</a>
        </div>
			</section>
	<?php
	} // end if
	?>
	<?php
		$paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
		$args = array(
				'post_type' => 'post',
				'category_name' => 'Edelweiss',
				'posts_per_page' => 5,
				'paged' => $paged,
		);
		$arr_posts = new WP_Query( $args );
		if ( $arr_posts->have_posts() ) {
			?>
		<section id="edelweiss">
						<?php
							while ( $arr_posts->have_posts() ) {
									$arr_posts->the_post();
									?>
									<div id="post-<?php the_ID(); ?>" class="content horizontal__block">
										<div class="content__img">
											<?php
											if ( has_post_thumbnail() ) :
													the_post_thumbnail();
											endif;
											?>
										</div>
										<div class="content__content">
											<header class="entry-header">
													<h4 class="entry-title"><?php the_title(); ?></h4>
											</header>
											<div class="entry-content">
													<?php the_excerpt(); ?>
													<a href="<?php the_permalink(); ?>">En savoir plus</a>
											</div>
									</div>
							</div>
						<?php
						} // end while
			?>
		</section>
		<?php
	} // end if
?>
			<?php
				$paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
				$args = array(
						'post_type' => 'post',
						'category_name' => 'Sponsors',
						'posts_per_page' => 5,
						'paged' => $paged,
				);
				$arr_posts = new WP_Query( $args );
				if ( $arr_posts->have_posts() ) {
			?>
			<section id="sponsors">
				<h2 class="center section-heading">Sponsors</h2>
					<section class="sponsors__container">
						<?php
							while ( $arr_posts->have_posts() ) {
									$arr_posts->the_post();
									?>
									<div id="post-<?php the_ID(); ?>" class="sponsors__img">
											<?php
											if ( has_post_thumbnail() ) :
													the_post_thumbnail();
											endif;
											?>
											<!--<div class="content__content">
												<header class="entry-header">
														<h4 class="entry-title"><?php the_title(); ?></h4>
												</header>
												<div class="entry-content">
														<?php the_excerpt(); ?>
														<a href="<?php the_permalink(); ?>">En savoir plus</a>
												</div>
										</div>-->
									</div>
								<?php
								} // end while
					?>
			</section>
			<?php
		} // end if
?>

<?php
get_sidebar();
get_footer();
