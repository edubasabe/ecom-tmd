<section class="contenido-wp">
  <div class="container">

    <div class="col-md-8">



	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title page-header">', '</h1>' ); ?>
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php
				the_content();
			?>
		</div><!-- .entry-content -->
	</article><!-- #post-## -->

      </div>

      <div class="col-md-4">
        <?php get_sidebar(); ?>
      </div>


  </div>
</section>
