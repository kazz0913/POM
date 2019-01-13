<?php
  get_header();
?>

<section class="pageHero">
  <div class="pageHero_title">
    <h1>NEWS</h1>
    <p>お知らせ</p>
  </div>
</section>

<? get_template_part( 'breadcrumb' ); ?>

<?php
if ( have_posts() ) :

  if ( is_home() && ! is_front_page() ) :
    ?>

    <div class="homeNews">
      <div class="homeNews_wrapper">
    <?php
  endif;

    while ( have_posts() ) :
      the_post();
    ?>

    <article id="<?php the_ID(); ?>" class="homeNews_post">
      <span class="homeNews_post-info">
        <?php posted_on(); ?>
        <?php category_list(); ?>
      </span>
      <h2 class="homeNews_post-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h2>
      <a href="<?php the_permalink(); ?>" class="homeNews_post-link">VIEW MORE</a>
    </article>

    <?php
      endwhile;
    ?>


      </div><!--homeNews_wrapper-->

      <?php
        the_posts_pagination( array(
          'prev_text' => '<i class="fas fa-chevron-left"></i>',
          'next_text' => '<i class="fas fa-chevron-right"></i>'
      )); ?>
    </div><!--homeNews-->


<?php
else :

    get_template_part( 'template-parts/content', 'none' );

endif;
?>

</article>

</main>

<?
	get_footer();
