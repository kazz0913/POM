<?php
  get_header();
?>

<?php
	if ( have_posts() ) :
  ?>
<section class="pageHero">
  <div class="pageHero_title">
    <h1><?php the_archive_title(); ?></h1>
    <p>アーカイブ</p>
  </div>
</section>

<? get_template_part( 'breadcrumb' ); ?>

<div class="archive">
      <div class="archive_wrapper">
    <?php

    while ( have_posts() ) :
      the_post();
    ?>

    <article id="<?php the_ID(); ?>" class="archive_post">
      <span class="archive_post-info">
        <?php posted_on(); ?>
        <?php category_list(); ?>
      </span>
      <h2 class="archive_post-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h2>
      <a href="<?php the_permalink(); ?>" class="archive_post-link">VIEW MORE</a>
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
	get_footer();
