<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'GRO Corporación') }} @yield('title')</title>
        <!-- css -->
        <link href="{{ asset('css/normalize.css') }}" rel="stylesheet"></link>
        <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
        <link href="{{ asset('css/queries.css') }}" rel="stylesheet">
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
        <script src="https://use.fontawesome.com/fb81e86df5.js"></script>
    </head>

    <body id="top" onload="carousel()">
        <header id="home">
            <nav>
                <div class="container-fluid">
                    <div class="row" id="mobile-menu">
                        <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                            <nav class="pull">
                                <ul class="top-nav">
                                    <li><a href="#intro">Acerca de Nosotros<span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                                    <li><a href="#our-reason">Nuestra Razón de Ser<span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                                    <li><a href="#features">Unidades de Producción Nacionales<span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                                    <li><a href="#values">¿Qué valoramos?<span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                                    <li><a href="#responsive">Valores<span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                                    <li><a href="#features-abroad">Unidades de Producción Internacionales<span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                                    <li><a href="#products">Productos<span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                                    <li><a href="#team">Nuestro Equipo<span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                                    <li><a href="#contact">Contáctanos<span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Menu -->
                    <nav class="navbar navbar-default" id="web-menu">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="#">
                                    GRO Corporación
                                </a>
                            </div>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">La Empresa <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#intro">Acerca de Nosotros</a></li>
                                        <li><a href="#our-reason">Nuestra Razón de Ser</a></li>
                                        <li><a href="#responsive">Valores</a></li>
                                        <li><a href="#team">Nuestro Equipo</a></li>
                                    </ul>
                                </li>
                                <li><a href="#values">¿Qué valoramos?</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Unidades <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#features">Producción Nacionales</a></li>
                                        <li><a href="#features-abroad">Producción Internacionales</a></li>
                                    </ul>
                                </li>
                                <li><a href="#products">Productos</a></li>
                                <li><a href="#contact">Contáctanos</a></li>
                            </ul>
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>

                <section class="hero" id="hero">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-right navicon">
                                <a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center inner">
                                <h1 class="animated fadeInDown">GRO<br><span class="sub-title">CORPORACIÓN</span></h1>
                                <p class="animated fadeInUp delay-05s sub-title">Productora, comercializadora, exportadora e importadora de productos agropecuarios</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 text-center">
                                <a href="#intro" class="learn-more-btn">Acerca de Nosotros</a>
                            </div>
                        </div>
                    </div>
                </section>
            </nav>
        </header>

        <section class="intro text-center section-padding" id="intro">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 wp1">
                        <h1 class="intro-title">CORPORACIÓN GRO GR</h1>
                        <p>
                            El 15 de octubre de 2015 nace formalmente  la CORPORACIÓN  GRO GR, representando la materialización del sueño de su fundador, Sr. Gustavo Arnaldo Ruiz Pérez, de consolidar e integrar los servicios de producción y comercialización de productos agroindustriales y de la ganadería, orientados a la satisfacción de necesidades y expectativas de consumidores en el mercado nacional e internacional.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="reason text-center" id="our-reason">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="reason-wrapper">
                            <h1 class="intro-title">NUESTRA RAZÓN DE SER</h1>
                            <div class="col-md-6 wp2">
                                <div class="icon-reason">
                                    <i class="fa fa-star shadow"></i>
                                </div>
                                <h2 class="intro-title-info">Misión</h2>
                                <p>
                                    La MISIÓN de la Corporación consiste en desarrollar, producir y comercializar  productos  y servicios vinculados con el sector agroindustrial y de la ganadería orientados a consumidores nacionales e internacionales, con la mejor calidad y relación precio-valor.
                                </p>
                            </div>
                            <div class="col-md-6 wp2 delay-05s">
                                <div class="icon-reason">
                                    <i class="fa fa-bullseye shadow"></i>
                                </div>
                                <h2 class="intro-title-info">Visión</h2>
                                <p>
                                    Ser reconocidos en el ámbito nacional e internacional por brindar productos y servicios, conforme a nuestra misión,  acordes a las necesidades y requerimientos de los consumidores, disposiciones normativas y con personal comprometido.
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features text-center section-padding" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="arrow">Unidades de Producción Nacionales</h1>
                        <img src="./images/img/venezuela_flag.png" width="50" />
                        <div class="features-wrapper">
                            <div class="col-md-4 wp2">
                                <img src="{{ asset('images/quinaroes.jpg') }}" class="enterprises-img">
                                <p>
                                    Se encarga de la comercialización productos manufacturados y semi manufacturados nacionales e importados del sector agroindustrial, ganadero y alimenticio destinados a satisfacer demandas del mercado nacional e internacional.
                                </p>
                            </div>
                            <div class="col-md-4 wp2 delay-05s">
                                <img src="{{ asset('images/acarigua.jpg')}}" class="enterprises-img">
                                <p>
                                    Especializada en la importación y exportación de productos agroindustriales, alimenticios, medicinales de uso veterinario y manufacturar cereales y granos destinados al uso y consumo del mercado nacional e internacional.
                                </p>
                            </div>
                            <div class="col-md-4 wp2 delay-1s">
                                <img src="{{ asset('images/tranquero.jpg')}}" class="enterprises-img">
                                <p>
                                    Fomenta la producción y crianza de ganado bovino ofreciendo al mercado sus derivados, así como los insumos necesarios que propicien su desarrollo, contribuyendo con el crecimiento del país, clientes y población en general.
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="swag text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1>¿QUÉ VALORAMOS?</span></h1>
                        <a href="#team" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="team text-center section-padding" id="values">
            <div class="container">
                <div class="row">
                    <div class="team-wrapper">
                        <div id="valuesSlider">
                            <ul class="slides">
                                <li>
                                    <div class="col-md-4 wp5">
                                        <div class="icon">
                                            <i class="fa fa-bookmark shadow"></i>
                                        </div>
                                        <h2>Orientación  y servicio  al  Cliente</h2>
                                        <p>
                                            Respeto, satisfacción y atención oportuna  de las necesidades y requerimientos  de los clientes. cuidamos y cultivamos cada relación con integridad.
                                        </p>
                                    </div>

                                    <div class="col-md-4 wp5 delay-05s">
                                        <div class="icon">
                                            <i class="fa fa-handshake-o shadow"></i>
                                        </div>
                                        <h2>Compromiso con nuestra razón de ser</h2>
                                        <p>
                                            Nuestra labor está orientada de manera integral y acertada hacia la producción y comercialización de  productos agroindustriales y de la ganadería con calidad y transparencia.
                                        </p>
                                    </div>
                                    <div class="col-md-4 wp5 delay-1s">
                                        <div class="icon">
                                            <i class="fa fa-cubes shadow"></i>
                                        </div>
                                        <h2>Trabajo en equipo con disciplina</h2>
                                        <p>
                                            Sumamos esfuerzos en la consecución de nuestra razón de ser y sueño, de manera  ordenada, sistemática, siguiendo las reglas y normas de la organización.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-4 wp5">
                                        <div class="icon">
                                            <i class="fa fa-balance-scale shadow"></i>
                                        </div>
                                        <h2>Integridad y racionalidad</h2>
                                        <p>
                                            Actuación honesta, responsable y con apego a los principios éticos, conscientes del impacto de nuestras acciones, decisiones y efectuando  el uso racional de los recursos de la empresa.
                                        </p>
                                    </div>
                                    <div class="col-md-4 wp5 delay-05s">
                                        <div class="icon">
                                            <i class="fa fa-users shadow"></i>
                                        </div>
                                        <h2>Pasión y Valentía</h2>
                                        <p>
                                            Nos entregamos en cuerpo y alma a todo lo que hacemos,  SIN miedo a crear  e innovar.
                                        </p>
                                    </div>
                                    <div class="col-md-4 wp5 delay-1s">
                                        <div class="icon">
                                            <i class="fa fa-pie-chart shadow"></i>
                                        </div>
                                        <h2>Efectividad y Rentabilidad</h2>
                                        <p>
                                            Ejecutamos cada actividad de nuestro negocio con precisión  y excelencia, proporcionando  una rentabilidad adecuada de manera sostenida.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="ignite-cta text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span href="#" class="ignite-btn">Los principios y creencias QUE NOS DISTINGUEN …</span>
                    </div>
                </div>
            </div>
        </div>

        <section class="text-center" id="responsive">
            <div class="container-fluid nopadding responsive-services">
                <div class="wrapper">
                    <div class="iphone">
                        <div class="wp3"></div>
                    </div>
                    <div class="fluid-white"></div>
                </div>
                <div class="container designs">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-7">
                            <div id="servicesSlider">
                                <ul class="slides">
                                    <li>
                                        <h1 class="arrow">Respeto Mutuo</h1>
                                        <p>
                                            Ser considerado y considerar a las otras personas.
                                        <p>
                                            Reconocer la propiedad http://127.0.0.1:8000intelectual de terceros.
                                        </p>
                                        <p>
                                            No se permite el trabajo forzado, explotación de remuneración o trabajo de menores ni la discriminación.
                                        </p>
                                        <p>
                                            No perjudicar a nadie.
                                        </p>
                                    </li>
                                    <li>
                                        <h1 class="arrow">Libertad Responsable</h1>
                                        <p>
                                            Respeto de la voluntad y posibilidad de libre elección de las personas, enmarcado en el deber de responder ante los otros por los efectos de sus conductas y el cumplimiento de sus responsabilidades.
                                        </p>
                                    </li>
                                    <li>
                                        <h1 class="arrow">Justicia y Ética Profesional</h1>
                                        <p>
                                            Registrar y gestionar con precisión  las transacciones de negocios.
                                        <p>
                                            Proporcionar información objetiva sobre las actividades  a todas las partes interesadas.
                                        </p>
                                        <p>
                                            Reconocer en cada quien lo que le corresponda según sus aportes.
                                        </p>
                                        <p>
                                            Cumplir las leyes de los países y comunidades en las que operamos y respeto por las normas de competencia y prácticas comerciales.
                                        </p>
                                    </li>
                                    <li>
                                        <h1 class="arrow">Justicia y Ética Profesional</h1>
                                        <p>
                                            Somos parte integrante del todo, por lo que nos involucrarnos, identificarnos y actuamos con determinación firme y perseverante por el bien común.
                                        <p>
                                            Establecer relaciones basadas en confianza mutua y  comunicación abierta  para propiciar la coo prosperidad.
                                        </p>
                                    </li>
                                    <li>
                                        <h1 class="arrow">Satisfacción al Cliente</h1>
                                        <p>
                                            Atención oportuna al cliente.
                                        <p>
                                            Tratamos a nuestros clientes con bondad y sinceridad, y procurando atender a sus propuestas y quejas.
                                        </p>
                                        <p>
                                            Respetamos  y protegemos la reputación de sus clientes y sus informaciones personales.
                                        </p>
                                    </li>
                                    <li>
                                        <h1 class="arrow">MEJORA DE LA CALIDAD DE VIDA DE NUESTROS COLABORADORES</h1>
                                        <p>
                                            Oportunidades iguales y trato justo a todos nuestros colaboradores.
                                        <p>
                                            Procura del mejoramiento continuo y desarrollo personal.
                                        </p>
                                        <p>
                                            Propicinamos un ambiente laboral que fomente la iniciativa personal y creatividad.
                                        </p>
                                    </li>
                                    <li>
                                        <h1 class="arrow">Solidaridad</h1>
                                        <p>
                                            Somos parte integrante del todo, por lo que nos involucrarnos, identificarnos y actuamos con determinación firme y perseverante por el bien común.
                                        <p>
                                            Establecer relaciones basadas en confianza mutua y  comunicación abierta  para propiciar la coo prosperidad.
                                        </p>
                                    </li>
                                    <li>
                                        <h1 class="arrow">PREOCUPACIÓN POR EL MEDIO AMBIENTE, LA SALUD Y LA SEGURIDAD</h1>
                                        <p>
                                            Observamos las leyes  y reglamentos internos relacionados a la conservación del medio ambiente y la seguridad.
                                        <p>
                                            Procuramos la prevención de accidentes y la protección del medio ambiente.
                                        </p>
                                        <p>
                                            Implementamos la utilización   eficiente de los recursos mediante la práctica  del reciclaje.
                                        </p>
                                        <p>
                                            Cuidamos no ofrecer productos y servicios  que puedan dañar la salud y seguridad humana.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features text-center section-padding" id="features-abroad">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="arrow">Unidades de Producción Internacionales</h1>
                        <div class="features-wrapper">
                            {{--  <div class="col-md-2 wp2 delay-1s">
                                <img src="{{ asset('images/grand_stand.jpg')}}" class="enterprises-img">

                                <p>
                                    Encargada del mercadeo y ventas  de productos alimenticios (nacionales e importados) para el consumo humano, maquinarias de manufactura y empaque para el sector agroindustrial, materia prima e insumos para cria y mantenimiento de  ganado caprino, bovino, porcino, orientados al mercado norteamericano y nacional.
                                </p>
                            </div>
                            <div class="col-md-2 wp2 delay-1s">
                                <img src="{{ asset('images/agroven.jpg')}}" class="enterprises-img">

                                <p>
                                    Aplicada en este caso al mercadeo y ventas de productos alimenticios manufacturados (nacionales e importados) para el consumo humano, maquinarias de manufactura y empaque para el  sector agroindustrial,, orientados al mercado  panameño y nacional.
                                </p>
                            </div>  --}}
                            <div class="col-md-4 wp2 delay-1s">
                                <img src="{{ asset('images/agroven.jpg')}}" class="enterprises-img">
                            </div>
                            <div class="col-md-4 wp2 delay-1s">
                                <img src="{{ asset('images/agroven.jpg')}}" class="enterprises-img">
                            </div>
                            <div class="col-md-4 wp2 delay-1s">
                                <img src="{{ asset('images/agroven.jpg')}}" class="enterprises-img">
                            </div>
                            <div class="col-md-4 wp2 delay-1s">
                                <img src="{{ asset('images/agroven.jpg')}}" class="enterprises-img">
                            </div>
                            <div class="col-md-4 wp2 delay-1s">
                                <img src="{{ asset('images/agroven.jpg')}}" class="enterprises-img">
                            </div>
                            <div class="col-md-4 wp2 delay-1s">
                                <img src="{{ asset('images/agroven.jpg')}}" class="enterprises-img">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="ignite-cta text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <a href="#" class="ignite-btn">GRO Productos</a>
              </div>
            </div>
          </div>
        </div>

        <section class="team text-center section-padding" id="products">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">Nuestros Productos</h1>
              </div>
            </div>

            <div class="row">
                <div id="productSlider" class="visible-md visible-lg">
                    <ul class="slides">
                        <li>
                            <div class="col-md-6 wp5">
                                <a href="#" target="_blank">
                                    <img src="{{ asset('images/DummyFrijolesNegros.jpg') }}" alt="Pruducto-GRO">
                                    <h2>Frijoles Negros</h2>
                                </a>
                            </div>
                            <div class="col-md-6 wp5 delay-05s">
                                <a href="#" target="_blank">
                                    <img src="{{ asset('images/DummyFrijolesRojos.jpg') }}" alt="Pruducto-GRO">
                                    <h2>Frijoles Rojos</h2>
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="col-md-6 wp5">
                                <a href="#" target="_blank">
                                    <img src="{{ asset('images/DummyGarbanzos.jpg') }}" alt="Pruducto-GRO">
                                    <h2>Garbanzos</h2>
                                </a>
                            </div>
                            <div class="col-md-6 wp5 delay-0.5s">
                                <a href="#" target="_blank">
                                    <img src="{{ asset('images/DummyLentejas.jpg') }}" alt="Pruducto-GRO">
                                    <h2>Lentejas</h2>
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="col-md-6 wp5">
                                <a href="#" target="_blank">
                                    <img src="{{ asset('images/DummyHarinaMaizFina.jpg') }}" alt="Pruducto-GRO">
                                    <h2>Harina de Maíz Fina</h2>
                                </a>
                            </div>
                            <div class="col-md-6 wp5 delay-05s">
                                <a href="#" target="_blank">
                                    <img src="{{ asset('images/DummyInstantOats-Avena.jpg') }}" alt="Pruducto-GRO">
                                    <h2>Avena</h2>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="slides visible-xs visible-sm">
                    <div class="col-md-6 wp5">
                        <a href="#" target="_blank">
                            <img src="{{ asset('images/DummyFrijolesNegros.jpg') }}" alt="Pruducto-GRO" class="img-responsive">
                            <h2>Frijoles Negros</h2>
                        </a>
                    </div>
                    <div class="col-md-6 wp5 delay-05s">
                        <a href="#" target="_blank">
                            <img src="{{ asset('images/DummyFrijolesRojos.jpg') }}" alt="Pruducto-GRO" class="img-responsive">
                            <h2>Frijoles Rojos</h2>
                        </a>
                    </div>
                    <div class="col-md-6 wp5">
                        <a href="#" target="_blank">
                            <img src="{{ asset('images/DummyGarbanzos.jpg') }}" alt="Pruducto-GRO" class="img-responsive">
                            <h2>Garbanzos</h2>
                        </a>
                    </div>
                    <div class="col-md-6 wp5 delay-0.5s">
                        <a href="#" target="_blank">
                            <img src="{{ asset('images/DummyLentejas.jpg') }}" alt="Pruducto-GRO" class="img-responsive">
                            <h2>Lentejas</h2>
                        </a>
                    </div>
                    <div class="col-md-6 wp5">
                        <a href="#" target="_blank">
                            <img src="{{ asset('images/DummyHarinaMaizFina.jpg') }}" alt="Pruducto-GRO" class="img-responsive">
                            <h2>Harina de Maíz Fina</h2>
                        </a>
                    </div>
                    <div class="col-md-6 wp5 delay-05s">
                        <a href="#" target="_blank">
                            <img src="{{ asset('images/DummyInstantOats-Avena.jpg') }}" alt="Pruducto-GRO" class="img-responsive">
                            <h2>Avena</h2>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="ignite-cta text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <a href="#" class="ignite-btn">GRO CORPORACIÓN</a>
              </div>
            </div>
          </div>
        </div>

        <section class="team text-center section-padding" id="team">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">Nuestro Equipo</h1>
              </div>
            </div>

            <div class="row">
                <div class="team-wrapper">
                    <div id="teamSlider" class="visible-md visible-lg">
                        <ul class="slides">
                            <li>
                                <div class="col-md-4 wp5">
                                    <img src="{{ asset('images/team-01.png') }}" alt="Team Member">
                                    <h2>Jon Snow</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                                    <div class="social">
                                            <ul class="social-buttons">
                                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                        <p class="team-country">Sede - Country</p>
                                    </div>
                                </div>

                                <div class="col-md-4 wp5 delay-05s">
                                    <img src="{{ asset('images/team-02.png') }}" alt="Team Member">
                                    <h2>Cersei Lannister</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                                    <div class="social">
                                        <ul class="social-buttons">
                                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                        <p class="team-country">Sede - Country</p>
                                    </div>
                                </div>

                                <div class="col-md-4 wp5 delay-1s">
                                    <img src="{{ asset('images/team-03.png') }}" alt="Team Member">
                                    <h2>Jamie Lannister</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                                    <div class="social">
                                        <ul class="social-buttons">
                                        <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                        <p class="team-country">Sede - Country</p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="col-md-4 wp5">
                                    <img src="{{ asset('images/team-01.png') }}" alt="Team Member">
                                    <h2>Jon Snow</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                                    <div class="social">
                                        <ul class="social-buttons">
                                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                        <p class="team-country">Sede - Country</p>
                                    </div>
                                </div>
                                <div class="col-md-4 wp5 delay-05s">
                                    <img src="{{ asset('images/team-02.png') }}" alt="Team Member">
                                    <h2>Cersei Lannister</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                                    <div class="social">
                                        <ul class="social-buttons">
                                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                        <p class="team-country">Sede - Country</p>
                                    </div>
                                </div>
                                <div class="col-md-4 wp5 delay-1s">
                                    <img src="{{ asset('images/team-03.png') }}" alt="Team Member">
                                    <h2>Jamie Lannister</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                                    <div class="social">
                                        <ul class="social-buttons">
                                        <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                        <p class="team-country">Sede - Country</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="visible-xs visible-sm">
                        <div class="col-md-4 wp5">
                            <img src="{{ asset('images/team-01.png') }}" alt="Team Member">
                            <h2>Jon Snow</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                            <div class="social">
                                <ul class="social-buttons">
                                    <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                                </ul>
                                <p class="team-country">Sede - Country</p>
                            </div>
                        </div>

                        <div class="col-md-4 wp5 delay-05s">
                            <img src="{{ asset('images/team-02.png') }}" alt="Team Member">
                            <h2>Cersei Lannister</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                            <div class="social">
                                <ul class="social-buttons">
                                    <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                                </ul>
                                <p class="team-country">Sede - Country</p>
                            </div>
                        </div>

                        <div class="col-md-4 wp5 delay-1s">
                            <img src="{{ asset('images/team-03.png') }}" alt="Team Member">
                            <h2>Jamie Lannister</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                            <div class="social">
                                <ul class="social-buttons">
                                    <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                                </ul>
                                <p class="team-country">Sede - Country</p>
                            </div>
                        </div>
                        <div class="col-md-4 wp5">
                            <img src="{{ asset('images/team-01.png') }}" alt="Team Member">
                            <h2>Jon Snow</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                            <div class="social">
                                <ul class="social-buttons">
                                    <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                                </ul>
                                <p class="team-country">Sede - Country</p>
                            </div>
                        </div>
                        <div class="col-md-4 wp5 delay-05s">
                            <img src="{{ asset('images/team-02.png') }}" alt="Team Member">
                            <h2>Cersei Lannister</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                            <div class="social">
                                <ul class="social-buttons">
                                    <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                                </ul>
                                <p class="team-country">Sede - Country</p>
                            </div>
                        </div>
                        <div class="col-md-4 wp5 delay-1s">
                            <img src="{{ asset('images/team-03.png') }}" alt="Team Member">
                            <h2>Jamie Lannister</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                            <div class="social">
                                <ul class="social-buttons">
                                    <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                                </ul>
                                <p class="team-country">Sede - Country</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="dark-bg text-center section-padding contact-wrap" id="contact">
            <a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="arrow">Contáctanos</h1>
                    </div>
                </div>
                <div class="row contact-details">
                    <div class="col-md-6">
                        <div class="light-box box-hover">
                            <h2><i class="fa fa-map-marker"></i><span>Dirección</span></h2>
                            <p>Av. La Estancia, C.C. Ciudad Tamanaco, Chuao, Piso 2, Torre D, Oficina D220.<br>Caracas - Venezuela</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="light-box box-hover">
                            <h2><i class="fa fa-mobile"></i><span>Teléfono</span></h2>
                            <p>+58 212 959 59 05</p>
                        </div>
                    </div>
                </div>
                {{--  <div class="row">
                    <div class="col-md-12">
                        <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>  --}}
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="legals">
                        </ul>
                    </div>
                    <div class="col-md-6 credit">
                        <p>CORPORACIÓN GRO GR &copy; {{ date('Y') }}. Todos los Derechos Reservados</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- javascript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/waypoints.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="{{ asset('js/jquery.flexslider.js') }}"></script>
        <script src="{{ asset('js/modernizr.js') }}"></script>
    </body>
</html>