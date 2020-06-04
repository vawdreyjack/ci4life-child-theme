<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Radcliffe 2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( radcliffe_2_has_post_thumbnail() ) : ?>
		<div class="entry-thumbnail" <?php radcliffe_2_background_image(); ?>></div>
	<?php endif; ?>

	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php radcliffe_2_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>

		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>

	</header><!-- .entry-header -->
</article><!-- #post-<?php the_ID(); ?> -->

<style>
    .flex-cont {
        display:flex; 
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
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
        <img src="https://i1.wp.com/ci4life.org/wp-content/uploads/2020/05/Rick-Hero_Tall.jpg?resize=768%2C544&ssl=1" style="height:200px;"/>
    </div>
    <div style="text-align: center; padding:20px;">
        <h2>Accomplish your career and life goals</h2>
        <h3>with an extra 31 years of experience</h3>
        <a class="call-btn" href="/business-coaching">Schedule a free assessment call</a>
    </div>
</div>
