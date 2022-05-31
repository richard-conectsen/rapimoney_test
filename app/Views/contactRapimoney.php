<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto | Rapimoney</title>

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
  <!-- <link rel="stylesheet" href="<?php #echo base_url('/assets/style/components-css/calculadora.css') ?>">
  <link rel="stylesheet" href="<?php #echo base_url('/assets/style/components-css/patrocinador.css') ?>">
  <link rel="stylesheet" href="<?php #echo base_url('/assets/style/components-css/carousel-operaciones.css') ?>">
  <link rel="stylesheet" href="<?php #echo base_url('/assets/style/components-css/operaciones.css') ?>">
  <link rel="stylesheet" href="<?php #echo base_url('/assets/style/components-css/testimonios.css') ?>">
  <link rel="stylesheet" href="<?php #echo base_url('/assets/style/components-css/respaldos.css') ?>"> -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/footer.css') ?>">
  <link rel="stylesheet" href="<?php #echo base_url('/assets/style/responsive/beneficio-sponsor.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/layout/contacto/qr-rapimoney.css') ?>">
  <link rel="stylesheet"
    href="<?php echo base_url('/assets/style/responsive/contacto-page1-solicitar-efectivo.css') ?>">
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

    <section class="mt-3">

      <!-- TOTAL OPERATIONS -->
      <article>

        <div class="container-card">
          <div class="card-content">

            <p class="has-text-centered has-text-white has-text-weight-bold is-size-3-mobile">
              +50000
            </p>

            <p class="has-text-centered has-text-white is-size-5-mobile">
              soles en operaciones y más de +125 clientes satisfechos
            </p>

          </div>
          <div class="content-retira">
            <div class="retira-dinero">
              <p class="has-text-centered has-text-white has-text-weight-bold-is-size-6-mobile">
                RETIRA YA! DINERO EN EFECTIVO <br> DE TU TARJETA DE CRÉDITO.
              </p>
            </div>
            <div class="linea-contact">
              <hr>
            </div>
            <div class="nuestra-meta">
              <p class="has-text-centered is-size-7-mobile is-size-6-tablet">
                Nuestra meta es ayudarte a cumplir tus metas
              </p>
            </div>
          </div>


        </div>

      </article>


      <!-- QR CONTACT RAPIMONEY -->
      <article>
        <div class="media">

          <div class="media-content">



            <div class="container">


              <div class="content-qr-rapimoney">
                <div class="qr-rapimoney">
                  <img src="<?php echo base_url('/assets/img/page-contact/main/qr-rapimoney-desktop.png') ?>"
                    alt="QR de contacto">
                </div>
              </div>

            </div>

            <div class="card-content">
              <div class="control">
                <div class="content-btn-solicitar">
                  <a href="http://shorturl.at/jlyG1" target="_blank">
                    <button class="button is-large is-rounded has-text-white  is-fullwidth btn-solicitar is-size-7">
                      SOLICITAR EFECTIVO
                    </button>
                  </a>
                </div>
              </div>
            </div>



          </div>

        </div>
        <div class="recomiendanos">
          <p class="has-text-centered is-size-7-mobile is-size-6-tablet">
            Recomiéndanos a tus amigos y/o familiares y recibe
            <br>
            hasta s/ 3 soles más! en tu próximo retiro con nosotros.
          </p>
        </div>
      </article>

    </section>

  </main>

  <!-- FOOTER! -->
  <?=view_cell('App\Libraries\ViewComponents::getViewFooter')?>


  <!-- ICON FONTAWESOME -->
  <script src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

  <!-- SCRIPTS -->

  <script src="<?php echo base_url('/assets/js/navbar-burger.js') ?>"></script>

</body>

</html>