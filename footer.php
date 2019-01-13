</div><!--container-end-->

<div class="footerCv">
  <a href="./contact" class="footerCv_left">
    <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34px" height="20px">
      <path fill-rule="evenodd"  fill="rgb(60, 60, 60)" d="M0.557,0.000 L-0.000,0.000 L-0.000,20.000 L34.000,20.000 L34.000,0.000 L0.557,0.000 ZM31.800,1.111 L16.727,12.629 L2.157,1.111 L31.800,1.111 ZM1.115,1.706 L11.133,9.624 L1.115,18.232 L1.115,1.706 ZM2.057,18.889 L12.022,10.327 L16.375,13.772 C16.575,13.930 16.858,13.932 17.060,13.777 L21.584,10.321 L31.903,18.889 L2.057,18.889 ZM32.885,18.258 L22.491,9.624 L32.885,1.682 L32.885,18.258 Z"/>
    </svg>
    <span>WEBでのお問い合わせ</span>
  </a>
  <a href="tel:0364025737" class="footerCv_right">
    <span class="footerCv_right-1">
      <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px">
        <path fill-rule="evenodd"  fill="rgb(0, 0, 0)" d="M29.746,25.522 L28.220,28.060 C27.751,28.858 26.991,29.443 26.100,29.693 C25.334,29.900 24.544,30.004 23.751,30.000 C20.303,30.000 15.288,28.188 8.551,21.451 C0.081,12.980 -0.607,7.230 0.308,3.898 C0.558,3.007 1.143,2.247 1.941,1.778 L4.480,0.253 C5.288,-0.233 6.335,0.003 6.856,0.788 L10.906,6.861 C11.415,7.631 11.247,8.664 10.520,9.234 L8.247,11.002 C7.947,11.231 7.862,11.646 8.047,11.975 L8.232,12.311 C8.840,13.425 9.598,14.814 12.394,17.611 C15.190,20.408 16.577,21.165 17.693,21.773 L18.029,21.959 C18.358,22.141 18.771,22.054 18.998,21.754 L20.767,19.480 C21.337,18.753 22.370,18.585 23.140,19.095 L29.212,23.144 C29.997,23.667 30.233,24.714 29.746,25.522 ZM28.653,23.978 L22.582,19.928 C22.247,19.707 21.800,19.780 21.552,20.095 L19.784,22.368 C19.255,23.060 18.298,23.258 17.538,22.832 L17.210,22.651 C16.039,22.012 14.582,21.218 11.682,18.318 C8.782,15.418 7.987,13.960 7.348,12.788 L7.168,12.460 C6.742,11.701 6.940,10.744 7.631,10.214 L9.904,8.446 C10.220,8.199 10.292,7.751 10.071,7.416 L8.225,4.647 L6.026,1.345 C5.799,1.004 5.345,0.902 4.994,1.113 L2.455,2.636 C1.879,2.973 1.455,3.520 1.272,4.163 C0.428,7.239 1.127,12.612 9.258,20.744 C17.389,28.875 22.762,29.575 25.837,28.731 C26.479,28.548 27.025,28.125 27.362,27.549 L28.885,25.009 C29.096,24.659 28.994,24.204 28.653,23.978 ZM16.999,10.002 C18.931,10.004 20.496,11.570 20.498,13.502 C20.498,13.778 20.274,14.002 19.998,14.002 C19.722,14.002 19.498,13.778 19.498,13.502 C19.497,12.122 18.379,11.004 16.999,11.002 C16.723,11.002 16.499,10.778 16.499,10.502 C16.499,10.226 16.723,10.002 16.999,10.002 ZM16.999,7.003 C20.586,7.007 23.493,9.914 23.498,13.502 C23.498,13.778 23.274,14.002 22.998,14.002 C22.722,14.002 22.498,13.778 22.498,13.502 C22.494,10.466 20.034,8.006 16.999,8.002 C16.723,8.002 16.499,7.778 16.499,7.502 C16.499,7.226 16.723,7.003 16.999,7.003 ZM25.997,14.002 C25.721,14.002 25.497,13.778 25.497,13.502 C25.492,8.810 21.690,5.008 16.999,5.003 C16.723,5.003 16.499,4.779 16.499,4.503 C16.499,4.227 16.723,4.003 16.999,4.003 C22.242,4.009 26.491,8.258 26.497,13.502 C26.497,13.778 26.273,14.002 25.997,14.002 Z"/>
      </svg>
      <span>電話でのお問い合わせ</span>
    </span>
    <span class="footerCv_right-2"><span class="footerCv_right-smalltxt">Tel.</span> 03‑6402‑5737</span>
  </a>
</div>

<div class="pageTop">
  <button class="pageTop_btn">PAGE TOP</button>
</div>

<footer class="footer">
  <div class="footer_wrapper">
    <?php wp_nav_menu(array(
      'theme_location' => 'footer',
      'container' => false,
      'menu_class' => 'footer_menu'
    )); ?>
  </div>

  <div class="copyright">
    <small class="copyright_txt">
      Copyright &copy; POM Partners Corporation 2019 Allright Reserved.
    </small>
  </div>
</footer>


<?php wp_footer(); ?>

</body>
</html>
