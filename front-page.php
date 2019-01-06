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
  </section>
</article>

</main>

<?php
	get_footer();
