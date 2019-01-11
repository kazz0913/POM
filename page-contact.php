<?php
  get_header();
?>

<section class="pageHero">
  <div class="pageHero_title">
    <h1>Contact</h1>
    <p>お問い合わせ</p>
  </div>
</section>

<? get_template_part( 'breadcrumb' ); ?>

  <?php
    if ( have_posts() ):
      while ( have_posts() ):
      the_post();
    ?>

    <section class="contactPage">
      <div class="contactPage_wrapper">
        <?php the_content(); ?>
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

</article>

</main>

<?php
	get_footer();
