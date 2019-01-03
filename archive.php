<?php
  get_header();
  get_template_part( 'breadcrumb' );
?>

<?php
	if ( have_posts() ) :
  ?>

    <header class="pageHeader">
		  <div class="pageHeader_wrapper">
        <h1 class="pageHeader_title"><?php the_archive_title(); ?></h1>
		  </div>
    </header>
    <?php

    while ( have_posts() ) :
      the_post();
    ?>

    <article id="<?php the_ID(); ?>" class="entry">
      <header>
        <h2>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <?php posted_on(); ?>
        <?php posted_by(); ?>
      </header>

      <?php post_thumbnail(); ?>
    </article>

    <?php
    endwhile;

    the_posts_pagination( array(
      'prev_text' => 'PREV',
      'next_text' => 'NEXT'
    ));

else :

    get_template_part( 'template-parts/content', 'none' );

endif;
?>

</article>

</main>

<?
	get_sidebar();
	get_footer();