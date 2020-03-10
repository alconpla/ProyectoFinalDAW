<?php
    get_header();
?>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="#"><img id="logo" src="<?php echo get_template_directory_uri();?>/images/wifilight.png" style="max-height: 190px; max-width: 190px;" alt="home" class="dark-logo img-responsive mt-2" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#" class="nav-link">Inicio</a></li>
            @guest
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
            @endguest

            <!--<li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>-->
            <li class="nav-item"><a href="{{ route('puntoacceso.index') }}" class="nav-link">Datos</a></li>
            
            <li class="nav-item"><a href="#contacto" class="nav-link">Contacto</a></li>
            <!-- GTranslate: https://gtranslate.io/ -->
            <li class="nav-item mt-2 mr-2"><a href="#" onclick="doGTranslate('es|en');return false;" title="English" class="glink nturl notranslate"><img src="//informatica.ieszaidinvergeles.org:9025/proyectofinalWP/wp-content/plugins/gtranslate/flags/24/en.png" height="24" width="24" alt="English" /></a></li>
            <li class="nav-item mt-2"><a href="#" onclick="doGTranslate('es|es');return false;" title="Spanish" class="glink nturl notranslate"><img src="//informatica.ieszaidinvergeles.org:9025/proyectofinalWP/wp-content/plugins/gtranslate/flags/24/es.png" height="24" width="24" alt="Spanish" /></a></li>
            <style type="text/css">
            #goog-gt-tt {display:none !important;}
            .goog-te-banner-frame {display:none !important;}
            .goog-te-menu-value:hover {text-decoration:none !important;}
            .goog-text-highlight {background-color:transparent !important;box-shadow:none !important; }
            #google_translate_element2 {display:none!important;}
            body{top:0 !important;}
            </style>
            
            <div id="google_translate_element2"></div>
            <script type="text/javascript">
            function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'es',autoDisplay: false}, 'google_translate_element2');}
            </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
            
            
            <script type="text/javascript">
            function GTranslateGetCurrentLang() {var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');return keyValue ? keyValue[2].split('/')[2] : null;}
            function GTranslateFireEvent(element,event){try{if(document.createEventObject){var evt=document.createEventObject();element.fireEvent('on'+event,evt)}else{var evt=document.createEvent('HTMLEvents');evt.initEvent(event,true,true);element.dispatchEvent(evt)}}catch(e){}}
            function doGTranslate(lang_pair){if(lang_pair.value)lang_pair=lang_pair.value;if(lang_pair=='')return;var lang=lang_pair.split('|')[1];if(GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0])return;var teCombo;var sel=document.getElementsByTagName('select');for(var i=0;i<sel.length;i++)if(/goog-te-combo/.test(sel[i].className)){teCombo=sel[i];break;}if(document.getElementById('google_translate_element2')==null||document.getElementById('google_translate_element2').innerHTML.length==0||teCombo.length==0||teCombo.innerHTML.length==0){setTimeout(function(){doGTranslate(lang_pair)},500)}else{teCombo.value=lang;GTranslateFireEvent(teCombo,'change');GTranslateFireEvent(teCombo,'change')}}
            </script>

          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="home-slider ftco-degree-bg">
      <div class="slider-item">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-10 ftco-animate text-center">
              <h1 class="mb-4">Obten conexión wifi
                <strong class="typewrite" data-period="4000" data-type='[ "Rápida.", "Segura.", "Gratis!"]'>
                  <span class="wrap"></span>
                </strong>
              </h1>
              <p>A pesar de que se prevé que el total de puntos de acceso wifi públicos se multiplique por siete entre 2015 y 2020, de 64,2 millones en 2015 a 432,5 millones en 2020, los puntos de acceso wifi gratuitos no siempre son fáciles de encontrar.</p>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    <section class="ftco-section-featured ftco-animate">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="carousel owl-carousel">
              <div class="item">
                <a href="portfolio.html">
                  <img src="<?php echo get_template_directory_uri();?>/images/wifi1-c.jpeg" class="img-fluid" alt="">
                </a>
              </div>
              <div class="item">
                <a href="portfolio.html">
                  <img src="<?php echo get_template_directory_uri();?>/images/wifi2.png" class="img-fluid" alt="">
                </a>
              </div>
              <div class="item">
                <a href="portfolio.html">
                  <img src="<?php echo get_template_directory_uri();?>/images/dashboard_full_3.jpg" class="img-fluid" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Nuestros servicios</span>
            <h2>Open Wifi provee a sus usuarios con servicios de la mejor calidad</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-1 d-flex justify-content-center mb-3"><span class="align-self-center icon-layers"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Software actualizado</h3>
                <p>Mantenemos al día nuestro software para evitar los problemas que puede provocar un código desfasado</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-2 d-flex justify-content-center mb-3"><span class="align-self-center icon-gears"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Conexión de confianza</h3>
                <p>Open Wifi no te pedirá la instalación de software malicioso que pueda dañar tu dispositivo.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-3 d-flex justify-content-center mb-3"><span class="align-self-center icon-paper-plane"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Fácil de usar</h3>
                <p>Nuestra interfaz sencilla facilita su uso por parte de los usuarios.</p>
              </div>
            </div>    
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-4 d-flex justify-content-center mb-3"><span class="align-self-center icon-live_help"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Ayuda &amp; Soporte</h3>
                <p>Nuestro equipo de atención al cliente contestará cualquier duda que tengas.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section-parallax ftco-degree-bg">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
              <h2 class="h1 font-weight-bold">Comprueba tu mismo qué tipo de información recabamos de nuestros usuarios</h2>
              <p><a href="#" class="btn btn-primary btn-outline-white mt-3 py-3 px-4">Datos</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            
            <h2>Cómo funcionamos</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="block-3 d-md-flex ftco-animate">
            <a href="portfolio.html" class="image" style="background-image: url('<?php echo get_template_directory_uri();?>/images/work-1.jpg'); "></a>
            <div class="text">
              <h4 class="subheading">Lema</h4>
              <h2 class="heading"><a href="portfolio.html">Do ut des</a></h2>
              <p>Esta expresión latina significa "dar para recibir". En Open Wifi creemos en un intercambio justo con nuestros usuarios, ofreciendo un servicio de calidad a cambio de informacion. De una forma totalmente trasparente para dichos usuarios. Como resultado se genera una relación de confianza entre quién ofrece el servicio y quienes lo consumen.</p>
            </div>
          </div>
          <!-- <div class="block-3 d-md-flex ftco-animate">
            <a href="portfolio.html" class="image order-2" style="background-image: url('<?php echo get_template_directory_uri();?>/images/work-2.jpg'); "></a>
            <div class="text order-1">
              <h4 class="subheading">Application</h4>
              <h2 class="heading"><a href="portfolio.html">Even the all-powerful Pointing has no control</a></h2>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
            </div>
          </div>
          <div class="block-3 d-md-flex ftco-animate">
            <a href="portfolio.html" class="image" style="background-image: url('<?php echo get_template_directory_uri();?>/images/work-3.jpg'); "></a>
            <div class="text">
              <h4 class="subheading">Web Design</h4>
              <h2 class="heading"><a href="portfolio.html">Even the all-powerful Pointing has no control</a></h2>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
            </div>
          </div> -->
        </div>
      </div>
    </section>

    

    <section class="ftco-section testimony-section ftco-degree-bg">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Comentarios</span>
            <h2>La opinion de nuestros usuarios</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php echo get_template_directory_uri();?>/images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Es genial poder contar con un acceso a internet en lugares donde no me llega la covertura.</p>
                    <p class="name">Paco García</p>
                    
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php echo get_template_directory_uri();?>/images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">El servicio de atención al cliente es excelente, responden en minutos.</p>
                    <p class="name">Pepe Ruíz</p>
                    
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php echo get_template_directory_uri();?>/images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Comuniqué un fallo en uno de los puntos de acceso y a día siguiente ya estaba solucionado.</p>
                    <p class="name">Jorge Torres</p>
                    
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php echo get_template_directory_uri();?>/images/person_4.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Mi plan de datos es bastante restringido, asi que Open Wifi es perfecto para mí.</p>
                    <p class="name">Carlos Reina</p>
                    
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php echo get_template_directory_uri();?>/images/coment1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Este tipo de puntos de acceso suelen ir lentos pero Open Wifi siempre va bien.</p>
                    <p class="name">Alberto Navarro</p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-counter ftco-degree-bg" id="section-counter">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2>Nuestro alcance</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="1000">0</strong>
                <span>Puntos de acceso wifi</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="12000">0</strong>
                <span>Conexiones diarias</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="10000">0</strong>
                <span>Usuarios totales</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section  id="contacto" class="ftco-section contact-section ftco-degree-bg">
      <div class="container bg-light">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contacta con nosotros</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Dirección:</span>Plaza Castilla nº34, 28012, Madrid (España).</p>
          </div>
          <div class="col-md-3">
            <p><span>Teléfono:</span> <a href="tel://1234567920">915346287</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
          </div>
          
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <form action="#">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombre">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Asunto">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Mensaje"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Enviar" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6" id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3035.4250297742888!2d-3.692048984349976!3d40.46586116057343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1583700087723!5m2!1ses!2ses" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </section>

    <?php
    get_footer();
?>
