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
            <?php previous_post_link('%link', '<i class="fas fa-chevron-left"></i>PREV', TRUE, ''); ?>
        </span>
        <span class="singlePagination_home">
            <a href="<?php echo home_url(); ?>/news">BACK TO LIST</a>
        </span>
        <span class="singlePagination_next">
            <?php next_post_link('%link', 'NEXT<i class="fas fa-chevron-right"></i>', TRUE, ''); ?>
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
