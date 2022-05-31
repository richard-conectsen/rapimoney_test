<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Equipo | Rapimoney</title>

  <!-- FAVICON -->
  <link rel="shortcut icon" href="<?php echo base_url('/public/favicon.ico') ?>" type="image/x-icon">

  <!-- NORMALIZE -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/normalize.css') ?>">

  <!-- BULMA CSS -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/bulma css/bulma.min.css') ?>">

  <!-- CSS OF GILDER.JS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">

  <!-- OWN STYLES -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/style.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/navbar.css') ?>">
  <!-- <link rel="stylesheet" href="<?php #echo base_url('/assets/style/components-css/calculadora.css') ?>"> -->
  <!-- <link rel="stylesheet" href="<?php #echo base_url('/assets/style/components-css/patrocinador.css') ?>"> -->
  <!-- <link rel="stylesheet" href="<?php #echo base_url('/assets/style/components-css/carousel-operaciones.css') ?>"> -->
  <!-- <link rel="stylesheet" href="<?php #echo base_url('/assets/style/components-css/operaciones.css') ?>"> -->
  <!-- <link rel="stylesheet" href="<?php #echo base_url('/assets/style/components-css/testimonios.css') ?>"> -->
  <!-- <link rel="stylesheet" href="<?php #echo base_url('/assets/style/components-css/respaldos.css') ?>"> -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/footer.css') ?>">
  <!-- <link rel="stylesheet" href="<?php #echo base_url('/assets/style/responsive/beneficio-sponsor.css') ?>"> -->

  <!-- OWN STYLES OF US -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/layout/nosotros/about-rapimoney.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/layout/nosotros/values-rapimoney.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/responsive/quienes-somos-page1.css') ?>">

  <!-- OWN STYLES OF US RESPONSIVE -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/responsive/mision-vision.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/responsive/navbar-responsive.css') ?>">

</head>

<body class="has-navbar-fixed-top">

  <!-- HEADER RAPIMONEY -->
  <header>

    <!-- has-navbar-fixed-top
  is-fixed-top -->
    <?=view_cell('App\Libraries\ViewComponents::getViewNavbar')?>

  </header>

  <main>

    <!-- ABOUT RAPIMONEY -->
    <section>


      <!-- TEAM RAPIMONEY -->
      <article class="pt-6">

        <div class="team-rapi">
          <p
            class="my-team has-text-white  has-text-weight-bold has-text-centered is-size-6 is-size-5-tablet is-size-4-desktop">
            EQUIPO
            RAPIMONEY</p>
          <hr class="linea-subtitle">
        </div>


        <div class="team-partners">
          <div class="partners left">
            <img src=" <?php echo base_url('/assets/img/page-nosotros/main/yonathan.png') ?>">
          </div>

          <div class="partners right">

            <div class="partner">
              <img src="<?php echo base_url('/assets/img/page-nosotros/main/richard.png') ?>">
            </div>

            <div class="partner">
              <img src="<?php echo base_url('/assets/img/page-nosotros/main/luis.png') ?>">
            </div>

            <div class="partner">
              <img src="<?php echo base_url('/assets/img/page-nosotros/main/jhunior.png') ?>">
            </div>

          </div>
        </div>

      </article>

    </section>

    <!-- MISSION,VISION AND THE VALUES OF RAPIMONEY-->
    <section class="mision-vision-values">

      <!-- RAPIMONEY MISSION AND VISION -->
      <article class="container">

        <div class="content-mision-vision">

          <div class="item-mision-vision">
            <img src="<?php echo base_url('/assets/img/page-nosotros/main/mision-rapimoney.png') ?>"
              alt="mision rapimoney">
          </div>

          <div class="item-mision-vision">
            <img src="<?php echo base_url('/assets/img/page-nosotros/main/vision-rapimoney.png') ?>"
              alt="mision rapimoney">

          </div>

        </div>

        <!-- <div class="mv-tablet-desktop">

          <div class="item-mv">
            <h3 class="is-size-6 is-size-4-tablet is-size-3-desktop">MISIÓN</h3>
            <p class="p-5 is-size-5-tablet is-size-4-desktop">Somos la Fintech que lo ayuda a retirar efectivo de
              su
              tarjeta de crédito de manera rápida y
              sencilla.
            </p>
          </div>


          <div class="item-mv">
            <h3 class="is-size-6 is-size-4-tablet is-size-3-desktop"> <b>VISIÓN</b>
            </h3>
            <p class="p-5 is-size-5-tablet is-size-4-desktop">Ser la mejor Fintech a través de la experiencia del
              usuario.</p>
          </div>

        </div> -->

      </article>


      <!-- RAPIMONEY VALUES-->
      <article>

        <div class="content">
          <div class="item-values">
            <h3 class="is-size-6 is-size-5-tablet is-size-4-desktop"> <b>VALORES</b>
            </h3>
          </div>
        </div>


        <div class="content-slides-values">
          <div class="slider-values">
            <ul>

              <li><img src="<?php echo base_url('/assets/img/page-nosotros/main/valor1-agilidad.png') ?>"
                  alt="valor de agilidad">
              </li>

              <li><img src="<?php echo base_url('/assets/img/page-nosotros/main/valor2-confianza.png') ?>"
                  alt="valor de confianza"></li>

              <li><img src="<?php echo base_url('/assets/img/page-nosotros/main/valor3-integridad.png') ?>"
                  alt="valor de integridad">
              </li>

              <li><img src="<?php echo base_url('/assets/img/page-nosotros/main/valor4-orientacion-cliente.png') ?>"
                  alt="valor de orientacion del cliente">
              </li>

            </ul>
          </div>
        </div>

      </article>

    </section>

  </main>

  <!-- FOOTER -->
  <?=view_cell('App\Libraries\ViewComponents::getViewFooter')?>


  <!-- ICON FONTAWESOME -->
  <script src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

  <!-- SCRIPTS -->

  <script src="<?php echo base_url('/assets/js/navbar-burger.js') ?>"></script>


</body>

</html>