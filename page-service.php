<?php
  get_header();
?>

<section class="pageHero">
  <div class="pageHero_title">
    <h1>SERVICE</h1>
    <p>サービス紹介</p>
  </div>
</section>

<?php get_template_part( 'breadcrumb' ); ?>

  <section class="servicePage">
    <div class="servicePage_wrapper">

      <section id="renovation" class="servicePageItem renovation">
        <div class="servicePageItem_content">
          <div class="renovation_title">
            <h2 class="renovation_title-large">RENOVATION</h2>
            <P class="renovation_title-small">リノベーション事業</P>
          </div>
          <p class="servicePageItem_txt renovation_txt">
            新しい価値を備えた不動産にするために、私たちは空間デザインにこだわったリノベーションを行っています。
            お客様に求められていること、対象となる不動産の状況をイメージすることからリノベーションははじまります。
            壁材、床材、キッチンなどあらゆる素材にもこだわり、お客様に求められる不動産にするために決して妥協せず、マッチングできる上質な空間デザインを実現します。
          </p>
        </div>
        <img class="renovation_img" src="<?= get_stylesheet_directory_uri() . '/assets/img/servicePage/renovation.jpg' ?>" alt="renovation">
      </section>

      <section id="propertySales" class="servicePageItem propertySales">
        <div class="servicePageItem_content">
          <div class="propertySales_title">
            <h2 class="propertySales_title-large">PROPERTY SALES</h2>
            <P class="propertySales_title-small">不動産買取・販売事業</P>
          </div>
          <p class="servicePageItem_txt propertySales_txt">
            売主さまの「空き物件の利用方法」、「現金化への悩み」、「相続対策で物件の処理に困っている」といった悩み。
            買主さまの「より素敵な部屋に住みたい」、「人とは違う部屋がいい」といったニーズ。
            不動産売買においてお客さまごとにそれぞれの悩みやニーズがあります。
            私たちはひとりひとりのお客さまに寄り添いそれぞれの悩みやニーズの解決をワンストップで行います。
          </p>
        </div>
        <img class="propertySales_img" src="<?= get_stylesheet_directory_uri() . '/assets/img/servicePage/propertySales.jpg' ?>" alt="propertySales">
      </section>
    </div>
  </section>
</article>

</main>

<?php
	get_footer();
