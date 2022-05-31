<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rapimoney | agilizamos tus finanzas.</title>

  <!-- SEO -->
  <link rel="canonical" href="https://rapimoney.pe/" />
  <meta property="og:locale" content="es_ES" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Rapimoney | agilizamos tus finanzas." />
  <meta property="og:url" content="https://rapimoney.pe/" />
  <meta property="og:site_name" content="Rapimoney" />

  <!-- FAVICON -->
  <link rel="shortcut icon" href="<?php echo base_url('/public/favicon.ico') ?>" type="image/x-icon">

  <!-- NORMALIZE -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/normalize.css') ?>">

  <!-- BULMA CSS -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/bulma css/bulma.min.css') ?>">

  <!-- FONTAWESOME -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/fontawesome/all.min.css') ?>">

  <!-- CSS OF GILDER.JS -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/glider/glider.min.css') ?>">

  <!-- CSS OF GILDER.JS
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css"> -->

  <!-- OWN STYLES -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/style.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/navbar.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/calculadora.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/patrocinador.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/carousel-operaciones.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/operaciones.css') ?>">
  <!-- <link rel="stylesheet" href="<?php #echo base_url('/assets/style/components-css/testimonios.css') ?>"> -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/carousel-testimonios.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/respaldos.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/footer.css') ?>">

  <!-- OWN  RESPONSIVE  STYLES  -->
  <!-- <link rel="stylesheet" href="<?php #echo base_url('/assets/style/responsive/beneficio-sponsor.css') ?>"> -->
  <link rel="stylesheet"
    href="<?php echo base_url('/assets/style/responsive/operaciones que pudieron ser tuyas.css') ?>">
  <link rel="stylesheet"
    href="<?php echo base_url('/assets/style/responsive/nuestros-respaldos-contactos-horario-legal.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/responsive/funciones-rapimoney.css') ?>">
  <!-- <link rel="stylesheet" href="<?php #echo base_url('/assets/style/responsive/testimonios-clientes.css') ?>"> -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/responsive/navbar-responsive.css') ?>">


  <!-- COMPONENT STYLES -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/rapimoney-title.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/video-rapimoney.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/rapimoney-button.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/rapimoney-service.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/rapimoney-building.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/rapimoney-image-service.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/social-networks.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/allies.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/accumulate-points.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/available-products.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/cards-products.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/points-calculator.css') ?>">



</head>

<body class="has-navbar-fixed-top">

  <!-- HEADER RAPIMONEY -->
  <header>

    <!-- has-navbar-fixed-top
  is-fixed-top -->
    <?=view_cell('App\Libraries\ViewComponents::getViewNavbar')?>

  </header>

  <!-- MAIN RAPIMONEY -->
  <main>

    <!--BENEFIT AND CALCULATOR SECTION-->
    <section class="mt-3 pt-3 beneficio-calculadora seccion-central">

      <!-- RAPIMONEY BENEFIT -->
      <article class="beneficio-calculadora__item content-beneficio-post">
        <div class="container">
          <div class="card-content">

            <div class="content">

              <hr class="linea-beneficio">

              <p class="benefit-rapimoney is-size-5-mobile is-size-4-tablet is-size-2-desktop">Cambia tus
                <span class="has-text-weight-bold">Rapipuntos</span>
                por <span class="has-text-weight-bold">productos</span> o <span
                  class="has-text-weight-bold">viajes</span> en tus tiendas favoritas
              </p>

            </div>

            <div class="content-post-img">
              <div class="content-image-post-puntos">
                <img src="<?php echo base_url('/assets/img/page-points/programa-puntos.png'); ?>" alt="post-rapimoney">
              </div>
            </div>

          </div>
        </div>
      </article>

      <!--RAPIMONEY CALCULATOR -->
      <article class="beneficio-calculadora__item article-central item-calculadora">
        <div class="media content-calculadora">

          <div class="media-content">

            <div class="content">

              <p
                class="has-text-centered has-text-white has-text-weight-bold is-size-5-mobile is-size-4-tablet is-size-3-desktop">
                <span>VALOR DE MI ÚLTIMA
                </span>
                <span class="msg-retiro">OPERACIÓN</span>
              </p>

              <div class="has-text-centered pb-2" id="my-alert"></div>

              <div class="content-select">
                <select id="" class="select-plazo select" disabled>
                  <option selected value="0">Operación</option>
                  <!-- <option>cuota pagada</option>
                    <option>retiro exitoso</option>
                    <option>monto invertido</option>
                    <option>pago de recibo de luz</option> -->

                </select>
              </div>
            </div>

            <div class="card-content">

              <div class="content">

                <div class="control">

                  <div class="content-amount">
                    <label class="lbl-monto">
                      <input class="input input-monto has-text-centered" type="text" id="" placeholder="S/ 0.00"
                        maxlength="10">
                    </label>
                  </div>

                  <div class="content-rapipuntos">

                    <div class="content-win">
                      <p class="has-text-centered has-text-white title is-5">
                        GANASTE
                      </p>
                    </div>

                    <div class="content-amount content-amount-points">
                      <input class="input input-monto has-text-centered" type="text" id="" placeholder="0 RAPIPUNTOS"
                        maxlength="10" readonly>
                    </div>

                  </div>
                </div>

              </div>

            </div>

            <div class="card-content">
              <div class="control">

                <div class="content-btn-calculate">
                  <a href="#card-productos">
                    <button
                      class="button is-small is-rounded has-text-white  is-fullwidth btn-calculate is-size-6">CANJEA
                      AQUÍ
                    </button>
                  </a>
                </div>

              </div>
            </div>

          </div>

        </div>
      </article>

    </section>

    <!-- RAPIMONEY ALLIES -->
    <section>
      <article>
        <div class="content-alianzas content-alianzas--height-tb">

          <div class="item-alianza">
            <div class="slider-alianza slider-alianza-size-tb">
            </div>

          </div>
        </div>
      </article>
    </section>


    <!-- SPONSOR AND VIDEO SECCION -->
    <section class="content-sponsor-video">

      <!-- RAPIMONEY SPONSOR -->
      <article class="nuestro-sponsor">

        <div class="sponsor-desktop--rapipuntos">
          <div class="container p-1">
            <p class="has-text-centered has-text-white is-size-7-mobile">
              REGISTRADOS POR
            </p>
          </div>

          <div class="content-patrocinadores content-patrocinadores--logo">
            <div class="item-patrocinador-logo">
              <img class="logo-lima" src="<?php echo base_url('/assets/img/main/sbs-logo.png') ?>"
                alt="registrados en la sbs peru">
            </div>
          </div>
        </div>

      </article>

    </section>


    <!-- ACCUMULATE RAPIMONEY POINTS -->
    <section>

      <article class="pt-3">
        <div class="content-title">
          <p class="my-title has-text-centered has-text-weight-bold is-size-6-mobile is-size-5-tablet">
            ¿CÓMO ACUMULO PUNTOS?
          </p>
        </div>
      </article>

      <article class="mb-3">
        <div class="accumulate-points">
          <div class=" accumulate-points__item accumulate-points__item--rigth py-2">
            <img class="point" src="<?php echo base_url('/assets/img/page-points/puntos-cuota-retiro.png') ?>"
              alt="1 punto por cuota pagada o retiro exitoso">
          </div>
          <div class="accumulate-points__item accumulate-points__item--left py-2">
            <img class="point" src="<?php echo base_url('/assets/img/page-points/puntos-inversion-pago.png') ?>"
              alt="1 punto por inversion o pago de recibo">
          </div>
          <div div class="accumulate-points__item accumulate-points__item--rigth py-2">
            <img class="point" src="<?php echo base_url('/assets/img/page-points/puntos-pago-puntual.png') ?>"
              alt="3 punto por pago puntual">
          </div>
        </div>

        <div class="legend-points pb-4">
          <div class="legend-points__item">
            <p class="legend has-text-centered is-size-7-tablet">
              <span class="has-text-weight-bold">
                *cuota pagada:
              </span>
              hasta 5 días después de la fechas de la fecha de pago.
            </p>
          </div>

          <div class="legend-points__item">
            <p class="legend has-text-centered is-size-7-tablet">
              <span class="has-text-weight-bold">
                **recibo de luz:
              </span>
              monto máximo de canje es de 50 soles por recibo.
            </p>
          </div>

          <div class="legend-points__item">
            <p class="legend has-text-centered is-size-7-tablet">
              <span class="has-text-weight-bold">
                ***pago puntual:
              </span>
              hasta la fecha de pago o antes de su vencimiento.
            </p>
          </div>

        </div>

      </article>

    </section>

    <!-- RAPIMONEY PROCESS -->
    <section>

      <!--RAPIMONEY CANJES-->
      <article class="content-funciones-rapimoney mb-4">

        <div class="funciona-desktop">
          <div class="content-img-funciona-desktop">
            <img class="img-funciona-desktop"
              src="<?php echo base_url('/assets/img/page-points/proceso-programa-puntos.png') ?>"
              alt="imagen de funcion rapimoney">
          </div>
        </div>


        <div class="slider-funciona-rapimoney">

          <div class="content-title">
            <p class="my-title has-text-centered has-text-weight-bold is-size-6-mobile is-size-5-tablet">
              ¿CÓMO CANJEO MIS RAPIPUNTOS?
            </p>
          </div>

          <div class="carousel">
            <div class="carousel__contenedor">

              <button class="carousel__anterior" arial-label="Anterior">
                <i class="fas fa-chevron-left"></i>
              </button>

              <div class="carousel__lista">

                <div class="carousel__elemento">
                  <img class="carousel__image " src="<?php echo base_url('/assets/img/page-points/elige-puntos.png') ?>"
                    alt="elije tus puntos">
                </div>

                <div class="carousel__elemento">
                  <img class="carousel__image "
                    src="<?php echo base_url('/assets/img/page-points/consulta-puntos.png') ?>"
                    alt="consulta tus puntos">
                </div>

                <div class="carousel__elemento">
                  <img class="carousel__image" src="<?php echo base_url('/assets/img/page-points/canjea-puntos.png') ?>"
                    alt="canjea tus puntos">
                </div>
              </div>

              <button class="carousel__siguiente" arial-label="Siguiente">
                <i class="fas fa-chevron-right"></i>
              </button>

            </div>

            <div class="carousel__indicadores" role="tablist">
            </div>

            <div class="baner banner--puntos"></div>

          </div>
        </div>

      </article>

    </section>

    <!--AVAILABLE PRODUCTS-->
    <section class="operaciones-rapimoney">

      <article class="content-operations">

        <div class="content-title">
          <p
            class="my-title my-title--operations has-text-centered has-text-weight-bold is-size-6-mobile is-size-5-tablet is-size-4-desktop">
            PRODUCTOS & VIAJES DISPONIBLES
          </p>
          <hr class="linea-subtitle linea-subtitle--operations">
        </div>

        <!-- CARDS PRODUCTS-->
        <div id="card-productos" class="pb-3">

          <div class="carousels">

            <div class="carousels__contenedor mb-3">

              <button class="carousels__anterior" arial-label="Anterior">
                <i class="fas fa-chevron-left"></i>
              </button>

              <div class="carousels__face">

                <div class="carousels__elemento">
                  <div class="carousels__image">
                    <div class="card">
                      <div class="card-image">
                        <figure class="image">
                          <img src="<?php echo base_url('/assets/img/page-points/products/6-rolls-love-roll.png') ?>"
                            alt="6 rolles temáticos|love roll">
                        </figure>
                      </div>
                      <div class="card-content card-content--position">
                        <div class="media">
                          <div class="media-content">
                            <p class="title title--style is-5">6 ROLLS TEMÁTICOS</p>
                            <p class="subtitle subtitle--style is-6">Love & Roll</p>
                          </div>
                        </div>

                        <hr class="card-line">

                        <div class="content pt-3">
                          <p class="content__text content__text--strikethrough"><span
                              class="has-text-weight-semibold">2100</span> Rapipuntos
                          </p>
                          <p class="content__text"><span class="has-text-weight-semibold">1100 </span>Rapipuntos o
                            <span class="has-text-weight-semibold">s/ 44.90</span>
                          </p>
                          <div class="mt-3">
                            <a href="#">
                              <button class="button is-rounded is-small button-card button-card--outlined">CANJEAR
                              </button>
                            </a>

                            <a href="#">
                              <button class="button is-rounded is-small button-card  button-card--solid">
                                COMPRAR
                              </button>
                            </a>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousels__elemento">
                  <div class="carousels__image">
                    <div class="card">
                      <div class="card-image">
                        <figure class="image">
                          <img
                            src="<?php echo base_url('/assets/img/page-points/products/aretes-acero-quirurgico-SPMC.png') ?>"
                            alt="aretes acero quirurgico - Stephanie Miracle">
                        </figure>
                      </div>
                      <div class="card-content card-content--position">
                        <div class="media">
                          <div class="media-content">
                            <p class="title title--style is-5">ARETES ACERO QUIRÚRGICO</p>
                            <p class="subtitle subtitle--style is-6">Stephanie Miracle</p>
                          </div>
                        </div>

                        <hr class="card-line">

                        <div class="content pt-3">
                          <p class="content__text content__text--strikethrough"><span
                              class="has-text-weight-semibold">1850</span> Rapipuntos
                          </p>
                          <p class="content__text"><span class="has-text-weight-semibold">850 </span>Rapipuntos o
                            <span class="has-text-weight-semibold">s/ 31.10</span>
                          </p>
                          <div class="mt-3">
                            <a href="#">
                              <button class="button is-rounded is-small button-card button-card--outlined">CANJEAR
                              </button>
                            </a>

                            <a href="#">
                              <button class="button is-rounded is-small button-card  button-card--solid">
                                COMPRAR
                              </button>
                            </a>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousels__elemento">
                  <div class="carousels__image">
                    <div class="card">
                      <div class="card-image">
                        <figure class="image">
                          <img src="<?php echo base_url('/assets/img/page-points/products/tomatodo-500-PTNS.png') ?>"
                            alt="tomatodo - Patronus">
                        </figure>
                      </div>
                      <div class="card-content card-content--position">
                        <div class="media">
                          <div class="media-content">
                            <p class="title title--style is-5">TOMATODO 500ML</p>
                            <p class="subtitle subtitle--style is-6">Patronus</p>
                          </div>
                        </div>

                        <hr class="card-line">

                        <div class="content pt-3">
                          <p class="content__text content__text--strikethrough"><span
                              class="has-text-weight-semibold">1600</span> Rapipuntos
                          </p>
                          <p class="content__text"><span class="has-text-weight-semibold">600 </span>Rapipuntos o
                            <span class="has-text-weight-semibold">s/ 22.50</span>
                          </p>
                          <div class="mt-3">
                            <a href="#">
                              <button class="button is-rounded is-small button-card button-card--outlined">CANJEAR
                              </button>
                            </a>

                            <a href="#">
                              <button class="button is-rounded is-small button-card  button-card--solid">
                                COMPRAR
                              </button>
                            </a>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="carousels__elemento">
                  <div class="carousels__image">
                    <div class="card">
                      <div class="card-image">
                        <figure class="image">
                          <img src="<?php echo base_url('/assets/img/page-points/products/4-cupcakes-SKCT.png') ?>"
                            alt="4 cupcakes - Saskia Catering">
                        </figure>
                      </div>
                      <div class="card-content card-content--position">
                        <div class="media">
                          <div class="media-content">
                            <p class="title title--style is-5">4 CUPCAKES </p>
                            <p class="subtitle subtitle--style is-6">Saskia Catering</p>
                          </div>
                        </div>

                        <hr class="card-line">

                        <div class="content pt-3">
                          <p class="content__text content__text--strikethrough"><span
                              class="has-text-weight-semibold">1700</span> Rapipuntos
                          </p>
                          <p class="content__text"><span class="has-text-weight-semibold">700 </span>Rapipuntos o
                            <span class="has-text-weight-semibold">s/ 27.00</span>
                          </p>
                          <div class="mt-3">
                            <a href="#">
                              <button class="button is-rounded is-small button-card button-card--outlined">CANJEAR
                              </button>
                            </a>

                            <a href="#">
                              <button class="button is-rounded is-small button-card  button-card--solid">
                                COMPRAR
                              </button>
                            </a>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousels__elemento">
                  <div class="carousels__image">
                    <div class="card">
                      <div class="card-image">
                        <figure class="image">
                          <img
                            src="<?php echo base_url('/assets/img/page-points/products/cieneguia-antioquia-TDTS.png') ?>"
                            alt="cieneguia,antioquia - Taytaldo">
                        </figure>
                      </div>
                      <div class="card-content card-content--position">
                        <div class="media">
                          <div class="media-content">
                            <p class="title title--style is-5">CIENEGUILLA - ANTIOQUIA</p>
                            <p class="subtitle subtitle--style is-6">Taytaldo Tour</p>
                          </div>
                        </div>

                        <hr class="card-line">

                        <div class="content pt-3">
                          <p class="content__text content__text--strikethrough"><span
                              class="has-text-weight-semibold">2500</span> Rapipuntos
                          </p>
                          <p class="content__text"><span class="has-text-weight-semibold">1500 </span>Rapipuntos o
                            <span class="has-text-weight-semibold">s/ 58.50</span>
                          </p>
                          <div class="mt-3">
                            <a href="#">
                              <button class="button is-rounded is-small button-card button-card--outlined">CANJEAR
                              </button>
                            </a>

                            <a href="#">
                              <button class="button is-rounded is-small button-card  button-card--solid">
                                COMPRAR
                              </button>
                            </a>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousels__elemento">
                  <div class="carousels__image">
                    <div class="card">
                      <div class="card-image">
                        <figure class="image">
                          <img
                            src="<?php echo base_url('/assets/img/page-points/products/cerro-azul-lunahuana-TDTS.png') ?>"
                            alt="cerro azul , lunahuna - Taytaldo">
                        </figure>
                      </div>
                      <div class="card-content card-content--position">
                        <div class="media">
                          <div class="media-content">
                            <p class="title title--style is-5">CERRO AZUL - LUNAHUANA</p>
                            <p class="subtitle subtitle--style is-6">Taytaldo Full Day</p>
                          </div>
                        </div>

                        <hr class="card-line">

                        <div class="content pt-3">
                          <p class="content__text content__text--strikethrough"><span
                              class="has-text-weight-semibold">3000</span> Rapipuntos
                          </p>
                          <p class="content__text"><span class="has-text-weight-semibold">2000 </span>Rapipuntos o
                            <span class="has-text-weight-semibold">s/ 80.10</span>
                          </p>
                          <div class="mt-3">
                            <a href="#">
                              <button class="button is-rounded is-small button-card button-card--outlined">CANJEAR
                              </button>
                            </a>

                            <a href="#">
                              <button class="button is-rounded is-small button-card  button-card--solid">
                                COMPRAR
                              </button>
                            </a>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousels__elemento">
                  <div class="carousels__image">
                    <div class="card">
                      <div class="card-image">
                        <figure class="image">
                          <img src="<?php echo base_url('/assets/img/page-points/products/ramo-princesa-CPRS.png') ?>"
                            alt="ramo princesa - Copa Rose ">
                        </figure>
                      </div>
                      <div class="card-content card-content--position">
                        <div class="media">
                          <div class="media-content">
                            <p class="title title--style is-5">RAMO PRINCESA</p>
                            <p class="subtitle subtitle--style is-6">Copa Rose</p>
                          </div>
                        </div>

                        <hr class="card-line">

                        <div class="content pt-3">
                          <p class="content__text content__text--strikethrough"><span
                              class="has-text-weight-semibold">2400</span> Rapipuntos
                          </p>
                          <p class="content__text"><span class="has-text-weight-semibold">1400 </span>Rapipuntos o
                            <span class="has-text-weight-semibold">s/ 58.50</span>
                          </p>
                          <div class="mt-3">
                            <a href="#">
                              <button class="button is-rounded is-small button-card button-card--outlined">CANJEAR
                              </button>
                            </a>

                            <a href="#">
                              <button class="button is-rounded is-small button-card  button-card--solid">
                                COMPRAR
                              </button>
                            </a>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousels__elemento">
                  <div class="carousels__image">
                    <div class="card">
                      <div class="card-image">
                        <figure class="image">
                          <img src="<?php echo base_url('/assets/img/page-points/products/4-rolls-LOROLL.png') ?>"
                            alt="4 roll tematicos - Love & Roll ">
                        </figure>
                      </div>
                      <div class="card-content card-content--position">
                        <div class="media">
                          <div class="media-content">
                            <p class="title title--style is-5">4 ROLLS TEMÁTICOS</p>
                            <p class="subtitle subtitle--style is-6">Love & Roll</p>
                          </div>
                        </div>

                        <hr class="card-line">

                        <div class="content pt-3">
                          <p class="content__text content__text--strikethrough"><span
                              class="has-text-weight-semibold">1800</span> Rapipuntos
                          </p>
                          <p class="content__text"><span class="has-text-weight-semibold">800 </span>Rapipuntos o
                            <span class="has-text-weight-semibold">s/ 32.30</span>
                          </p>
                          <div class="mt-3">
                            <a href="#">
                              <button class="button is-rounded is-small button-card button-card--outlined">CANJEAR
                              </button>
                            </a>

                            <a href="#">
                              <button class="button is-rounded is-small button-card  button-card--solid">
                                COMPRAR
                              </button>
                            </a>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousels__elemento">
                  <div class="carousels__image">
                    <div class="card">
                      <div class="card-image">
                        <figure class="image">
                          <img
                            src="<?php echo base_url('/assets/img/page-points/products/pulsera-ojo-turco-STMC.png') ?>"
                            alt="pulsera ojo turco - Stephanie Miracle">
                        </figure>
                      </div>
                      <div class="card-content card-content--position">
                        <div class="media">
                          <div class="media-content">
                            <p class="title title--style is-5">PULSERA OJO TURCO</p>
                            <p class="subtitle subtitle--style is-6">Stephanie Miracle</p>
                          </div>
                        </div>

                        <hr class="card-line">

                        <div class="content pt-3">
                          <p class="content__text content__text--strikethrough"><span
                              class="has-text-weight-semibold">2100</span> Rapipuntos
                          </p>
                          <p class="content__text"><span class="has-text-weight-semibold">1100 </span>Rapipuntos o
                            <span class="has-text-weight-semibold">s/ 44.10</span>
                          </p>
                          <div class="mt-3">
                            <a href="#">
                              <button class="button is-rounded is-small button-card button-card--outlined">CANJEAR
                              </button>
                            </a>

                            <a href="#">
                              <button class="button is-rounded is-small button-card  button-card--solid">
                                COMPRAR
                              </button>
                            </a>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousels__elemento">
                  <div class="carousels__image">
                    <div class="card">
                      <div class="card-image">
                        <figure class="image">
                          <img src="<?php echo base_url('/assets/img/page-points/products/cojin-taza-PATRONUS.png') ?>"
                            alt="cojin & taza - PATRONUS">
                        </figure>
                      </div>
                      <div class="card-content card-content--position">
                        <div class="media">
                          <div class="media-content">
                            <p class="title title--style is-5">COJIN & TAZA</p>
                            <p class="subtitle subtitle--style is-6">Patronus</p>
                          </div>
                        </div>

                        <hr class="card-line">

                        <div class="content pt-3">
                          <p class="content__text content__text--strikethrough"><span
                              class="has-text-weight-semibold">1800</span> Rapipuntos
                          </p>
                          <p class="content__text"><span class="has-text-weight-semibold">800 </span>Rapipuntos o
                            <span class="has-text-weight-semibold">s/ 31.50</span>
                          </p>
                          <div class="mt-3">
                            <a href="#">
                              <button class="button is-rounded is-small button-card button-card--outlined">CANJEAR
                              </button>
                            </a>

                            <a href="#">
                              <button class="button is-rounded is-small button-card  button-card--solid">
                                COMPRAR
                              </button>
                            </a>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousels__elemento">
                  <div class="carousels__image">
                    <div class="card">
                      <div class="card-image">
                        <figure class="image">
                          <img src="<?php echo base_url('/assets/img/page-points/products/tartaleta-fresa-SKCT.png') ?>"
                            alt="tartaleta de fresa - ">
                        </figure>
                      </div>
                      <div class="card-content card-content--position">
                        <div class="media">
                          <div class="media-content">
                            <p class="title title--style is-5">TARTALETA DE FRESA</p>
                            <p class="subtitle subtitle--style is-6">Saskia Catering</p>
                          </div>
                        </div>

                        <hr class="card-line">

                        <div class="content pt-3">
                          <p class="content__text content__text--strikethrough"><span
                              class="has-text-weight-semibold">2000</span> Rapipuntos
                          </p>
                          <p class="content__text"><span class="has-text-weight-semibold">1000 </span>Rapipuntos o
                            <span class="has-text-weight-semibold">s/ 40.50</span>
                          </p>
                          <div class="mt-3">
                            <a href="#">
                              <button class="button is-rounded is-small button-card button-card--outlined">CANJEAR
                              </button>
                            </a>

                            <a href="#">
                              <button class="button is-rounded is-small button-card  button-card--solid">
                                COMPRAR
                              </button>
                            </a>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousels__elemento">
                  <div class="carousels__image">
                    <div class="card">
                      <div class="card-image">
                        <figure class="image">
                          <img src="<?php echo base_url('/assets/img/page-points/products/capullo-rosas-CPRS.png') ?>"
                            alt="capullo de rosas - Copa Rose ">
                        </figure>
                      </div>
                      <div class="card-content card-content--position">
                        <div class="media">
                          <div class="media-content">
                            <p class="title title--style is-5">CAPULLO DE ROSAS</p>
                            <p class="subtitle subtitle--style is-6">Copa Rose</p>
                          </div>
                        </div>

                        <hr class="card-line">

                        <div class="content pt-3">
                          <p class="content__text content__text--strikethrough"><span
                              class="has-text-weight-semibold">2500</span> Rapipuntos
                          </p>
                          <p class="content__text"><span class="has-text-weight-semibold">1000 </span>Rapipuntos o
                            <span class="has-text-weight-semibold">s/ 61.20</span>
                          </p>
                          <div class="mt-3">
                            <a href="#">
                              <button class="button is-rounded is-small button-card button-card--outlined">CANJEAR
                              </button>
                            </a>

                            <a href="#">
                              <button class="button is-rounded is-small button-card  button-card--solid">
                                COMPRAR
                              </button>
                            </a>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <button class="carousels__siguiente" arial-label="Siguiente">
                <i class="fas fa-chevron-right"></i>
              </button>

            </div>

            <div class="carousels__indicadores" role="tablist">
            </div>

          </div>

          <div class="carousels__indicadores" role="tablist">
          </div>

        </div>
    </section>



    <!--RAPIMONEY SECURITY BACKUPS -->
    <section class="mt-5">

      <article>

        <div class="container-respaldos">
          <p
            class="titulo-respaldos has-text-centered has-text-weight-bold is-size-6-mobile is-size-5-tablet is-size-4-desktop">
            NUESTROS RESPALDOS
          </p>
          <hr class="linea-subtitle-respaldos">
        </div>

        <div class="content-seguridad--logo">
          <div class="item-seguridad-logo">
            <img class="logo-seguridad" src="<?php echo base_url('/assets/img/main/respaldos-rapimoney.png') ?>"
              alt="respaldos rapimoney">
          </div>
        </div>
      </article>
    </section>

    <section>

      <!--REDES SOCIALES -->
      <article>

        <div class="content-redes">

          <!-- https://wa.me/51921434247?text=Hola,%20necesito%20ayuda%20RAPIMONEY -->
          <a href="https://bit.ly/338R45E" target="_blank">
            <img class="redes" src="<?php echo base_url('/assets/img/footer/whatsap.png') ?>" alt="whatasp">
          </a>

        </div>

      </article>

    </section>

  </main>

  <!-- FOOTER! -->
  <?=view_cell('App\Libraries\ViewComponents::getViewFooter')?>



  <!-- GLIDER.JS LIBRARY
  <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script> -->

  <!--GLIDER.JS LIBRARY  -->
  <script src="<?php echo base_url('/assets/glider/glider.min.js') ?>"></script>

  <!-- ICON FONTAWESOME -->
  <!-- <script src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script> -->

  <!-- ICON FONTAWESOME -->
  <script src="<?php echo base_url('/assets/fontawesome/all.min.js') ?>"></script>


  <!-- SCRIPTS -->
  <script src="<?php echo base_url('/assets/js/carousel.js') ?>"></script>
  <script src="<?php echo base_url('/assets/js/navbar-burger.js') ?>"></script>
  <script src="<?php echo base_url('/assets/js/carousel-face.js') ?>"></script>


</body>

</html>