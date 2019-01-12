<div class="headerSpNav">
  <nav>
  <!--SPメニュー-->
    <ul class="headerSpNav_menu">
      <li class="headerSpNav_list">
        <a href="/service">SERVICE<span>事業内容</span></a>
      </li>
      <li class="headerSpNav_list">
        <a href="/recruit">RECRUIT<span>採用情報</span></a>
      </li>
      <li class="headerSpNav_list">
        <a href="/news">NEWS<span>お知らせ</span></a>
      </li>
      <li class="headerSpNav_list">
        <a href="/company">COMPANY<span>会社概要</span></a>
      </li>
      <li class="headerSpNav_list">
        <a href="/contact">CONTACT<span>お問い合わせ</span></a>
      </li>
    </ul>
  </nav>
  <button id="menuToggle" class="headerSpNav_btn">
    <span></span>
    <span></span>
    <span></span>
  </button>
</div>


<nav class="headerPcNav">
  <!--PCメニュー-->
  <?php wp_nav_menu(array(
    'theme_location' => 'header',
    'container' => false,
    'menu_id' => 'menu-header',
    'menu_class' => 'headerPcNav_menu'
  )); ?>
</nav>
