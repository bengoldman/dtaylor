
<!-- THE HOME PAGE -->
<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap cf">

		<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

				<header class="article-header">

					<h1 class="page-title h1x" itemprop="headline"><?php the_title(); ?></h1> 
					<div class="featured-image-home"> <?php the_post_thumbnail( 'bones-thumb-300' ); ?> </div>

				</header> <?php // end article header ?>



				<footer class="article-footer cf">

				</footer>

				<?php comments_template(); ?>
				<div style="width: 60%;text-align: center;margin-left: auto;margin-right: auto;"><p>Fermentum et sollicitudin ac orci phasellus egestas tellus rutrum. Nunc mattis enim ut tellus elementum sagittis vitae. Turpis nunc eget lorem dolor sed viverra. Elementum curabitur vitae nunc sed velit dignissim sodales ut. Tempus imperdiet nulla malesuada pellentesque elit eget gravida cum. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus. Eleifend mi in nulla posuere sollicitudin aliquam ultrices. Porta nibh venenatis cras sed felis eget velit aliquet sagittis. Sed libero enim sed faucibus turpis in eu mi bibendum. Gravida arcu ac tortor dignissim convallis aenean et. Tempor commodo ullamcorper a lacus vestibulum.</p></div>

			</article>

			<?php endwhile; endif; ?>
			

		</main>
		

	</div>

</div>
<div class="resume-container">
					<div style="padding: 5px"></div>
					<div class="flex-resume">
					<H1 class="h1x resume-title">Here are a few of the places where I've worked.</H1>
						<div class="flex-row">
							<div class="flex-item1 h3"><span>2000 - whenever</span></div>
							<div class="flex-item2 h3"><span style="color:#111;">THEATRE COMPANY NAME</span>
							<div style="padding: 5px"></div>
								<p>Name of production or whatever you want.</p>
							</div>
						</div>
						<div class="flex-row">
							<div class="flex-item1 h3"><span>2000 - whenever</span></div>
							<div class="flex-item2 h3"><span style="color:#111;">THEATRE COMPANY NAME</span>
							<div style="padding: 5px"></div>
								<p>Name of production or whatever you want.</p>
							</div>
						</div>
						<div class="flex-row">
							<div class="flex-item1 h3"><span>2000 - whenever</span></div>
							<div class="flex-item2 h3"><span style="color:#111;">THEATRE COMPANY NAME</span>
							<div style="padding: 5px"></div>
								<p>Name of production or whatever you want.</p>
							</div>
						</div>
						<div class="flex-row">
							<div class="flex-item1 h3"><span>2000 - whenever</span></div>
							<div class="flex-item2 h3"><span style="color:#111;">THEATRE COMPANY NAME</span>
							<div style="padding: 5px"></div>
								<p>Name of production or whatever you want.</p>
							</div>
						</div>
						<div class="flex-row">
							<div class="flex-item1 h3"><span>2000 - whenever</span></div>
							<div class="flex-item2 h3"><span style="color:#111;">THEATRE COMPANY NAME</span>
							<div style="padding: 5px"></div>
								<p>Name of production or whatever you want.</p>
							</div>
						</div>
					</div>
					<div style="text-align: center;">Click <a href="wp-content/uploads/2018/02/dtaylor_cv.pdf">here</a> to download/view my complete resume.</div>
					<div style="padding: 20px"></div>
</div>

<div>
	<h1 class="h1x goodtimes">Some great times doing what I love.</h1>
</div>

<?php get_footer(); ?>

