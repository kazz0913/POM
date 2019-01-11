<?php
  get_header();
?>
  <header class="frontPageHeader">
    <div class="frontPageHeader_wrapper">
      <div class="frontPageHeader_txtWrapper">
        <h1 class="frontPageHeader_title">LIVE WITH HOME</h1>
        <p class="frontPageHeader_subTitle">住まいと生きる</p>
      </div>
    </div>
  </header>

  <section class="pageContent">
    <section class="frontServices">
      <div class="frontServices_wrapper">
        <img src="<?= get_template_directory_uri() . '/assets/img/frontPage/ourService.png' ?>" alt="ourServices">
        <section class="renovation frontServicesItem">
          <div class="frontServicesItem_wrapper">
            <h2 class="frontServicesItem_title">RENOVATION</h2>
            <p class="frontServicesItem_subTitle">リノベーション事業</p>
            <p class="frontServicesItem_txt">
              POM Partnersは、「住む人」のニーズを実現するために<br>
              コンセプトと素材にこだわり、毎日が楽しいと思える住まいをご提供しています。
            </p>
            <a href="/services/#renovation" class="frontServicesItem_btn">VIEW MORE</a>
          </div>
        </section>
        <section class="propertySales frontServicesItem">
          <div class="frontServicesItem_wrapper">
            <h2 class="frontServicesItem_title">PROPERTY SALES</h2>
            <p class="frontServicesItem_subTitle">不動産買取・販売事業</p>
            <p class="frontServicesItem_txt">
              不動産は「売却」も「購入」も、手間も時間もかかるものです。<br>
              POM Partnersでは、物件情報の収集から現地のご案内、購入時、売却時のアドバイスまで、理想的な居住空間、収益物件を誠意と情熱をもってご提案いたします。
            </p>
            <a href="/services/#propertysales" class="frontServicesItem_btn">VIEW MORE</a>
          </div>
        </section>
      </div>
    </section>
    <section class="frontCompany">
      <div class="frontCompany_wrapper">
        <h2 class="frontCompany_title">COMPANY</h2>
        <p class="frontCompany_subTitle">会社情報</p>
        <p class="frontCompany_txt">
          私たちは住居を提供する会社です。<br>
          人生の大きなステージの一つである住居。<br>
          色あせることなく、長い時間が経っても、より愛着が湧く<br>
          「一生もの」の住まいを提供するPOM Partnersについてご紹介します。
        </p>
        <a href="/services/#renovation" class="frontCompany_btn">VIEW MORE</a>
      </div>
    </section>

    <section class="frontNews">
      <div class="frontNews_wrapper">
        <h2 class="frontNews_title">
          <span class="frontNews_title-l">NEWS</span>
          <span class="frontNews_title-s">お知らせ</span>
        </h2>

        <div class="newsArea">

          <?php
            $args = array(
              'posts_per_page' => 3
            );
            $posts = get_posts( $args );
            foreach ( $posts as $post ):
            setup_postdata( $post );
            $cats = get_the_category( $post );
            $catUrl = get_category_link($cats[0]->term_id);
            $catName = $cats[0]->name;
          ?>

          <div class="newsArea_post">
            <span class="newsArea_post-info">
              <time class="newsArea_post-date"><?= get_the_date(); ?></time>
              <?php category_list(); ?>
            </span>
            <h2 class="newsArea_post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <a href="<?php the_permalink(); ?>" class="newsArea_post-link">VIEW MORE</a>
          </div>
          <?php
            endforeach;
            wp_reset_postdata();
          ?>
        </div>
      </div>
    </section>

  </section><!--pageContent-->




</article>

</main>

<?php
	get_footer();
