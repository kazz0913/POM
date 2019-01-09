<?php
  get_header();
?>

<section class="pageHero">
  <div class="pageHero_title">
    <h1>News</h1>
    <p>お知らせ</p>
  </div>
</section>

<? get_template_part( 'breadcrumb' ); ?>

<?php
if ( have_posts() ) :

  if ( is_home() && ! is_front_page() ) :
    ?>

    <div class="entryContainer">

    <?php
  endif;

    while ( have_posts() ) :
      the_post();
    ?>

    <article id="<?php the_ID(); ?>" class="entry">
      <?php posted_on(); ?>
      <h2>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h2>
      <a href="<?php the_permalink(); ?>" class="frontNews_post-link">VIEW MORE</a>
    </article>

    <?php
      endwhile;
    ?>

    </div><!--entryContainer-->

    <?php
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
