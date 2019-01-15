<?php
  get_header();
?>

<section class="pageHero">
  <div class="pageHero_title">
    <h1>News</h1>
    <p>お知らせ</p>
  </div>
</section>

<?php get_template_part( 'breadcrumb' ); ?>

<div class="postContent">
  <div class="postContent_wrapper">
<?php
  if ( have_posts() ):
    while ( have_posts() ):
      the_post();
?>

  <header class="singleHeader">
    <span class="homeNews_post-info">
      <?php posted_on(); ?>
      <?php category_list(); ?>
    </span>
    <h1 class="singleHeader_title"><?php the_title(); ?></h1>
    <?php post_thumbnail(); ?>
  </header>

  <section class="singleContent">
    <?php
      the_content() ;
    ?>

    <div class="singlePagination">
        <span class="singlePagination_prev">
          <?php
            $prevPost = get_previous_post();
            if ( !empty($prevPost) ): ?>
              <a class="singlePagination_prev-true" href="<?= get_permalink( $prevPost->ID ); ?>"><i class="fas fa-chevron-left"></i>PREV</a>
            <?php else: ?>
              <span class="singlePagination_prev-false"><i class="fas fa-chevron-left"></i>PREV</span>
            <?php endif; ?>
        </span>
        <span class="singlePagination_home">
            <a href="<?php echo home_url(); ?>/news">BACK TO LIST</a>
        </span>
        <span class="singlePagination_next">
            <?php
            $nextPost = get_next_post();
            if ( !empty($nextPost) ): ?>
              <a class="singlePagination_next-true" href="<?= get_permalink( $nextPost->ID ); ?>">NEXT<i class="fas fa-chevron-right"></i></a>
            <?php else: ?>
              <span class="singlePagination_next-false">NEXT<i class="fas fa-chevron-right"></i></span>
            <?php endif; ?>
        </span>
    </div>
  </section>

  <?php
    endwhile;
    else:
  ?>

  <p>投稿が見つかりません。</p>

  <?php
    endif;
  ?>
  </div><!--postContent_wrapper-->
</div><!--postContent-->

</article>

</main>

<?
	get_footer();
