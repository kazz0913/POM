<?php
  get_header();
?>

<section class="pageHero">
  <div class="pageHero_title">
    <h1>COMPANY</h1>
    <p>会社概要</p>
  </div>
</section>

<?php get_template_part( 'breadcrumb' ); ?>

  <?php
    if ( have_posts() ):
      while ( have_posts() ):
      the_post();
    ?>

    <section class="companyPage">
      <div class="companyPage_wrapper">
        <table>
          <tbody class="companyInfo">
            <tr>
              <td class="companyInfo_name">会社名</td>
              <td class="companyInfo_detail">株式会社POM Partners</td>
            </tr>
            <tr>
              <td class="companyInfo_name">代表取締役</td>
              <td class="companyInfo_detail">小野寺 拓実</td>
            </tr>
            <tr>
              <td class="companyInfo_name">設立</td>
              <td class="companyInfo_detail">2018年2月</td>
            </tr>
            <tr>
              <td class="companyInfo_name">資本金</td>
              <td class="companyInfo_detail">3,000,000円</td>
            </tr>
            <tr>
              <td class="companyInfo_name">取締銀行</td>
              <td class="companyInfo_detail">三井住友銀行</td>
            </tr>
            <tr>
              <td class="companyInfo_name">所在地</td>
              <td class="companyInfo_detail">〒105‑0013  東京都港区浜松町1‑23‑1 オフィスデザインビル3階</td>
            </tr>
            <tr>
              <td class="companyInfo_name">電話番号</td>
              <td class="companyInfo_detail">
                TEL : 03‑6402‑5737<br class="spOnly">
                <span class="companyInfo_detail-right">FAX : 03‑6402‑5738</span></td>
            </tr>
            <tr>
              <td class="companyInfo_name">認可番号</td>
              <td class="companyInfo_detail">東京都都知事免許（1）101937号</td>
            </tr>
            <tr>
              <td class="companyInfo_name">加盟団体</td>
              <td class="companyInfo_detail">公益社団法人 全日本不動産協会  公益社団法人 不動産保証協会</td>
            </tr>
          </tbody>
        </table>
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
