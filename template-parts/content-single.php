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
		
		@media (max-width:400px) {
			.call-btn {
				font-size: 16px;
			}
		}

		.asterisk {
			color: red;
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
	
	<!-- Begin Mailchimp Signup Form -->
	<div id="mc_embed_signup">
		<form action="https://gmail.us20.list-manage.com/subscribe/post?u=1f932667c16afe143c8d65922&amp;id=591b59f381" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
			<div id="mc_embed_signup_scroll">
				<h2>Subscribe</h2>
				<div class="indicates-required" ><span class="asterisk" >*</span> indicates required</div>
				<br>
				<div class="mc-field-group">
				<label for="mce-EMAIL">Email Address<span class="asterisk">*</span>
				</label>
				<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" >
				</div>
				<br>
				<div class="mc-field-group">
				<label for="mce-FNAME">First Name<span class="asterisk">*</span>
				</label>
				<input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
				</div>
				<br>
				<div class="mc-field-group">
				<label for="mce-LNAME">Last Name<span class="asterisk">*</span>
				</label>
				<input type="text" value="" name="LNAME" class="required" id="mce-LNAME">
				</div>
				<br>
				<div class="mc-field-group input-group" >
					<strong>Offer </strong>
					<br>
					<input type="checkbox" value="1" name="group[6252][1]" id="mce-group[6252]-6252-0"><label for="mce-group[6252]-6252-0">Mission Statement Template</label>
				<br>
				<input type="checkbox" value="2" name="group[6252][2]" id="mce-group[6252]-6252-1">
				<label for="mce-group[6252]-6252-1">Weekly Game Plan</label>

				</div>
				<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" ></div>
				<div class="response" id="mce-success-response" ></div>
				</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_1f932667c16afe143c8d65922_591b59f381" tabindex="-1" value=""></div>
				<br>
					<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
			</div>
		</form>
	</div>

	<!--End mc_embed_signup-->

</article><!-- #post-<?php the_ID(); ?> -->
