<?php get_header(); ?>
<div class="sidebar_right">
<div class="span_1_of_3">
<?php while ( have_posts() ) : the_post(); ?>
				<div class="span_1_of_3_img">
					<div class="span_1_of_3_grid" align="left">
						<div class="grid_left1">
							<div class="article">
								<i class="article-icon"> </i>
							</div>
						</div>
						<div class="span_1_of_3_text">
							<h3 class="entry-title"><?php the_title(); ?></h3>
							<?php if ( !is_page() ):?>

<section class="entry-meta">

</section>

<?php endif; ?>

<section class="entry-content">

<?php the_content(); ?>

</section>

<section class="entry-meta"><?php if ( count( get_the_category() ) ) : ?>

<span class="category-links">
<p>Posted on <?php the_date();?> by <?php the_author();?></p>
  Posted under: <?php echo get_the_category_list( ', ' ); ?>

</span>

<?php endif; ?></section>



								<div class="clear"></div>
							</ul>
						</div>
						<div class="clear"></div>
					</div>
<?php endwhile; ?>
					
				</div>
			</div>

<article class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>"></article>
</div>
<?php get_sidebar(); ?>
</div>
</div>
</div>
<?php
$prev_text = sprintf('%s <span class="nav-prev-text">%s</span>','<span aria-hidden="true">&larr;</span>',__( 'Newer <span class="nav-short">Posts</span>', 'twentytwenty' ));
$next_text = sprintf('<span class="nav-next-text">%s</span> %s',__( 'Older <span class="nav-short">Posts</span>', 'twentytwenty' ),'<span aria-hidden="true">&rarr;</span>');

$posts_pagination = get_the_posts_pagination(
	array(
		'mid_size'  => 1,
		'prev_text' => $prev_text,
		'next_text' => $next_text,
	)
);

// If we're not outputting the previous page link, prepend a placeholder with `visibility: hidden` to take its place.
if ( strpos( $posts_pagination, 'prev page-numbers' ) === false ) {
	$posts_pagination = str_replace( '<div class="nav-links">', '<div class="nav-links"><span class="prev page-numbers placeholder" aria-hidden="true">' . $prev_text . '</span>', $posts_pagination );
}

// If we're not outputting the next page link, append a placeholder with `visibility: hidden` to take its place.
if ( strpos( $posts_pagination, 'next page-numbers' ) === false ) {
	$posts_pagination = str_replace( '</div>', '<span class="next page-numbers placeholder" aria-hidden="true">' . $next_text . '</span></div>', $posts_pagination );
}

if ( $posts_pagination ) { ?>

	<div class="pagination-wrapper section-inner">

		<hr class="styled-separator pagination-separator is-style-wide" aria-hidden="true" />

		<?php echo $posts_pagination; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- already escaped during generation. ?>

	</div><!-- .pagination-wrapper -->
	
	<?php
}
?>
<div class="clear"></div>
<?php get_footer(); ?>