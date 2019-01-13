<!DOCTYPE html>
<html lang="jp">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Web font -->
<link rel="stylesheet" href="https://use.typekit.net/pxp4fsm.css">
<!-- fontawesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<?php wp_head(); ?>
</head>
<body class="scrollTo">
<?php
  $logo = get_custom_logo();
?>

<header class="header">
  <div class="header_wrapper">
    <?php if ( is_front_page() ) :?>
      <h1 class="siteTitle">
      <?php
        if ( $logo ):
          the_custom_logo();
        else:
      ?>
        <a href="<?= esc_url( home_url('/') ) ?>">
          <img src="<?= get_template_directory_uri() . '/assets/img/layout/logo.png'?>" alt="POMロゴ">
        </a>
      <?php
        endif;
      ?>
      </h1>
    <?php else : ?>
      <p class="siteTitle">
      <?php
        if ( $logo ):
          the_custom_logo();
        else:
      ?>
        <a href="<?= esc_url( home_url('/') ) ?>">
          <img src="<?= get_template_directory_uri() . '/assets/img/layout/logo.png' ?>" alt="POMロゴ">
        </a>
      <?php
        endif;
      ?>
      </p>
    <?php endif ; ?>

    <?php get_template_part( 'navMenu' ); ?>

  </div>

</header>

<div class="container">
  <main id="main">
    <article id="<?php aritcle_id() ?>">
