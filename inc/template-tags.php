<?php
// 投稿日・最終更新日の表示
if ( ! function_exists( 'posted_on' ) ) :
function posted_on() {
  $time_string = '
    <time class="newsArea_post-date published" datetime="%1$s">%2$s</time>
  ';

  $time_string = sprintf( $time_string,
    esc_attr( get_the_date( DATE_W3C ) ),
    esc_html( get_the_date() ),
    esc_attr( get_the_modified_date( DATE_W3C ) ),
    esc_html( get_the_modified_date() )
  );

  echo $time_string;
}
endif;


// 投稿者の表示
if ( ! function_exists( 'posted_by' ) ) :

function posted_by() {
  $byline = sprintf(
    '%s による投稿',
    '<span class="author_name"><a class="author_url" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
  );

  echo '<span class="author"> ' . $byline . '</span>';
}
endif;


// サムネイルの表示
if ( ! function_exists( 'post_thumbnail' ) ) :
  function post_thumbnail() {
    if ( post_password_required() || is_attachment() ) {
    	return;
    }

    if ( is_singular() ) :
      if( !has_post_thumbnail() ) :
        return;
      else:
      ?>
        <div class="post-thumbnail">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php
      endif;
    else : ?>

    <a class="post-thumbnail" href="<?php the_permalink(); ?>"  aria-hidden="true" tabindex="-1">
      <?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail(); ?>
      <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/assets/img/sample.png" alt="no-image"></a>
      <?php endif; ?>
    </a>

    <?php
    endif;
  }

endif;
