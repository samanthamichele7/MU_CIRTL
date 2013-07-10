<?php
/*
Template Name: Home Page Template
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap clearfix">

			<div id="main" class="twelvecol first clearfix text" role="main">

					<div class="eightcol first">
						<img src="<?php echo the_field('banner_image'); ?>" alt="" style="width: auto">
					</div>

					<div class="fourcol upcoming-events box-shadow">
						<?php echo the_field('upcoming_events'); ?>
					</div>

				<div class="twelvecol first">
					<?php echo the_field('preparing_stem_faculty'); ?>
				</div>

			</div> <!-- end #main -->


	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
