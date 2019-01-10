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
