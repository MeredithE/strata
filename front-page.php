<?php
/**
 * The template for displaying the homepage
 */

get_header(); ?>

<div id='main'>

  <section id="one">
  	<header class="major">
  		<h2>Ipsum lorem dolor aliquam ante commodo<br />
  		magna sed accumsan arcu neque.</h2>
  	</header>
  	<p>Accumsan orci faucibus id eu lorem semper. Eu ac iaculis ac nunc nisi lorem vulputate lorem neque cubilia ac in adipiscing in curae lobortis tortor primis integer massa adipiscing id nisi accumsan pellentesque commodo blandit enim arcu non at amet id arcu magna. Accumsan orci faucibus id eu lorem semper nunc nisi lorem vulputate lorem neque cubilia.</p>
  	<ul class="actions">
  		<li><a href="#" class="button">Learn More</a></li>
  	</ul>
  </section>

  <section id="two">
  		<h4>Featured Work</h4>
      <div class="row">
      			<?php query_posts('posts_per_page=6&post_type=recent_work'); ?>
      			<?php while ( have_posts() ) : the_post();
      					$image_1 = get_field("image");
      					$size = "medium";
      			?>
      			    <!-- // loop content here -->
                <article class="6u$ 12u$(xsmall) work-item">
                  <a href="" class="image fit thumb"><figure>
                    <?php echo wp_get_attachment_image($image_1, $size); ?>
      						</figure></a>
                  <h3><?php the_title(); ?></h3>
      						<p><?php the_excerpt(); ?></p>
                </article>

      				<?php endwhile; ?>
      			<?php wp_reset_query(); ?>
      </div>
  </section>


  <section class="recent-posts">
  	<div class="site-content">
  	<div class="blog-post">
  		<h4>From the Blog</h4>

  		<?php query_posts('posts_per_page=1'); ?>
  		<?php while ( have_posts() ) : the_post(); ?>
  		    <!-- // loop content here -->
  				<h2><?php the_title(); ?></h2>
         <?php the_excerpt(); ?>
         <a class="read-more-link" href="<?php the_permalink(); ?>">Read More <span>&rsaquo;</span></a>
  		  <?php endwhile; ?>
  		<?php wp_reset_query(); ?>

    </div>
  	</div>
  </section>

</div>
<?php get_footer(); ?>
