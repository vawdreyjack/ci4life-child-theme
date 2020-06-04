<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Radcliffe 2
 */

?>

<?php if ( radcliffe_2_has_post_thumbnail() ) : ?>
	<div class="entry-thumbnail" <?php radcliffe_2_background_image(); ?>></div>
<?php endif; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php radcliffe_2_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif;

		the_title( '<h1 class="entry-title">', '</h1>' );
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'radcliffe-2' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'radcliffe-2' ),
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php radcliffe_2_author_bio(); ?>

		<div class="entry-links">
			<?php radcliffe_2_entry_footer(); ?>
		</div>
    </footer><!-- .entry-footer -->
    <style>
        .flex-cont {
            display:flex; 
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            background-image: url("/wp-content/uploads/2020/05/office-bg.png");
        }

        .banner-img {
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
            margin: 20px;
        }

        .call-btn {
            font-size: 24px;
            padding: 10px;
            background-color: #1fa6e8;
            color: #fff !important;
        }
    </style>

    <div class="flex-cont">
        <div>
            <img class="banner-img" src="/wp-content/uploads/2020/05/Rick-Hero_Tall.jpg?resize=768%2C544&ssl=1" style="height:200px;"/>
        </div>
        <div style="text-align: center; padding:20px;">
            <h2>Accomplish your career and life goals</h2>
            <h3>with an extra 31 years of experience</h3>
            <a class="call-btn" href="/business-coaching">Schedule a free assessment call</a>
        </div>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->
