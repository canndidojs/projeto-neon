<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri( )  ?>/img/favicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri( )  ?>/css/main.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Primary Meta Tags -->
  <title><?php bloginfo( 'name' )  ?> <?php wp_title( '-' ) ?></title>
  <meta name="title" content="Redesign LP Neon - CandidoDev" />
  <meta name="description" content="A conta digital certa para cuidar do seu dinheiro." />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://candido-lpneons.netlify.app/" />
  <meta property="og:title" content="Redesign LP Neon - CandidoDev" />
  <meta property="og:description" content="A conta digital certa para cuidar do seu dinheiro." />
  <meta property="og:image" content="https://candido-lpneons.netlify.app/images/meta-tags.png" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://candido-lpneons.netlify.app/" />
  <meta property="twitter:title" content="Redesign LP Neon - CandidoDev" />
  <meta property="twitter:description" content="A conta digital certa para cuidar do seu dinheiro." />
  <meta property="twitter:image" content="https://candido-lpneons.netlify.app/images/meta-tags.png" />
  <!-- Meta Tags Generated with https://metatags.io -->

  <?php wp_head(); ?>

</head>

<body>
  <header>
    <div class="container">
      <a href="" class="logo">
        <img src="<?php echo get_template_directory_uri( )  ?>/img/logo.svg" alt="Logo Neon" />
      </a>

      <nav>
        <ul>
          <li><a href="">Produtos Neon</a></li>
          <li><a href="">Conta digital</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path('Sobre') ) ?>">Quem somos</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path('Blog') ) ?>">Blog</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path('Contato') ) ?>">Ajuda</a></li>
        </ul>
        <button class="btn-secondary white">Abra sua conta digital</button>
        <button class="btn-mobile"><img src="<?php echo get_template_directory_uri( )  ?>/img/btn-mobile.svg" alt="Botão de menu"></button>
      </nav>
    </div>
  </header>
