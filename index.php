<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
  <meta property='og:type' content='website'>
  <meta property='og:title' content='kaeougiのポートフォリオ'>
  <meta property='og:url' content='URL入る'>
  <meta property='og:description' content='kaeougiのポートフォリオです。'>
  <meta property="og:image" content="<?php echo get_template_directory_uri();?>/img/flower.png">
  <meta name="description" content="kaeougiのポートフォリオです。" />
  <title>kaeougi ポートフォリオ</title>
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond&display=swap" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/css/reset.css" media="all" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_template_directory_uri();?>/css/photoswipe/photoswipe.css" media="all" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_template_directory_uri();?>/css/photoswipe/default-skin/default-skin.css" media="all" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_template_directory_uri();?>/css/style.css" media="all" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico" />
</head>

<body>
  <div class="wrapper">
    <!-- .header -->
      <!-- .gnav -->
      <nav class="gnav">
        <ul class="gnav-list">
          <li class="gnav-item"><a class="gnav-link" href="#deliverabless-section">DELIVERABLE</a></li>
          <li class="gnav-item"><a class="gnav-link" href="#about-section">ABOUT</a></li>
          <li class="gnav-item"><a class="gnav-link" href="#skill-section">SKILL</a></li>
          <li class="gnav-item"><a class="gnav-link" href="#contact-section">CONTACT</a></li>
        </ul>
      </nav>
      <!-- /.gnav -->
    <header class="header">
      <h1 class="logo">
      <div class="logo-text">
        <span class="logo-name">kaeOugi’s</span>
        <span class="logo-title">PORTFOLIO</span>
      </div>  
      </h1>
    </header>
    <!-- /.header -->



    <main class="content">

      <!-- .deliverables-secion -->
      <section class="deliverables-section section" id="deliverabless-section">
        <div class="inner">
          <div class="section-heading">
            <h2 class="heading-primary">deliverables</h2>
          </div>
          <p class="section-lead">
            これまでの成果物です。
          </p>
          <div class="section-body deliverables">
            <div class="deliverables-list js-my-gallery">
              <figure class="deliverables-item">
                <a href="<?php echo get_template_directory_uri();?>/img/deliverables/work01.jpg" data-size="980x668" class="deliverables-link deliverables-image-wrapper hover-action">
                  <img class="deliverables-image fadein lazyloaded" src="img/deliverables/thumb/thumb_work01.jpg"
                    data-src="img/deliverables/company.jpg" alt="">
                </a>
                <figcaption class="deliverables-body">
                  <div class="deliverables-title">作品タイトル</div>
                  <div class="deliverables-text">Design / Coding(Responsive) / WordPress</div>
                  <div class="deliverables-url"><a class="deliverables-url-link" href="#" target="_blank">Link</a>
                  </div>
                </figcaption>
              </figure>
              <figure class="deliverables-item">
                <a href="<?php echo get_template_directory_uri();?>/img/deliverables/work02.jpg" data-size="980x668" class="deliverables-link deliverables-image-wrapper hover-action">
                  <img class="deliverables-image fadein lazyloaded" src="<?php echo get_template_directory_uri();?>/img/deliverables/thumb/thumb_work02.jpg"
                    data-src="img/deliverables/company.jpg" alt="">
                </a>
                <figcaption class="deliverables-body">
                  <div class="deliverables-title">作品タイトル</div>
                  <div class="deliverables-text">WordPress</div>
                  <div class="deliverables-url"><a class="deliverables-url-link" href="#" target="_blank">Link</a>
                  </div>
                </figcaption>
              </figure>
              <figure class="deliverables-item">
                <a href="<?php echo get_template_directory_uri();?>/img/deliverables/work03.jpg" data-size="980x668" class="deliverables-link deliverables-image-wrapper hover-action">
                  <img class="deliverables-image fadein lazyloaded" src="<?php echo get_template_directory_uri();?>/img/deliverables/thumb/thumb_work03.jpg"
                    data-src="<?php echo get_template_directory_uri();?>/img/deliverables/company.jpg" alt="">
                </a>
                <figcaption class="deliverables-body">
                  <div class="deliverables-title">作品タイトル</div>
                  <div class="deliverables-text">Design</div>
                </figcaption>
              </figure>
              <figure class="deliverables-item">
                <a href="<?php echo get_template_directory_uri();?>/img/deliverables/work04.jpg" data-size="980x668" class="deliverables-link deliverables-image-wrapper hover-action">
                  <img class="deliverables-image fadein lazyloaded" src="<?php echo get_template_directory_uri();?>/img/deliverables/thumb/thumb_work04.jpg"
                    data-src="<?php echo get_template_directory_uri();?>/img/deliverables/company.jpg" alt="">
                </a>
                <figcaption class="deliverables-body">
                  <div class="deliverables-title">作品タイトル</div>
                  <div class="deliverables-text">Coding</div>
                  <div class="deliverables-url"><a class="deliverables-url-link" href="#" target="_blank">Link</a>
                  </div>
                </figcaption>
              </figure>
              <figure class="deliverables-item">
                <a href="<?php echo get_template_directory_uri();?>/img/deliverables/work05.jpg" data-size="980x668" class="deliverables-link deliverables-image-wrapper hover-action">
                  <img class="deliverables-image fadein lazyloaded" src="<?php echo get_template_directory_uri();?>/img/deliverables/thumb/thumb_work05.jpg"
                    data-src="<?php echo get_template_directory_uri();?>/img/deliverables/company.jpg" alt="">
                </a>
                <figcaption class="deliverables-body">
                  <div class="deliverables-title">作品タイトル</div>
                  <div class="deliverables-text">Coding</div>
                  <div class="deliverables-url"><a class="deliverables-url-link" href="#" target="_blank">Link</a>
                  </div>
                </figcaption>
              </figure>
              <figure class="deliverables-item">
                <a href="<?php echo get_template_directory_uri();?>/img/deliverables/work05.jpg" data-size="980x668" class="deliverables-link deliverables-image-wrapper hover-action">
                  <img class="deliverables-image fadein lazyloaded" src="<?php echo get_template_directory_uri();?>/img/deliverables/thumb/thumb_work05.jpg"
                    data-src="<?php echo get_template_directory_uri();?>/img/deliverables/company.jpg" alt="">
                </a>
                <figcaption class="deliverables-body">
                  <div class="deliverables-title">作品タイトル</div>
                  <div class="deliverables-text">Coding</div>
                </figcaption>
              </figure>

            </div>
          </div>
        </div>
      </section>
      <!-- /.deliverables-secion -->

      <!-- .about-secion -->
      <section class="about-section section" id="about-section">
        <div class="inner">
          <div class="section-heading">
            <h2 class="heading-primary">ABOUT</h2>
          </div>
          <div class="section-lead">
            <p>
              こんにちは！扇加恵と申します。
            </p>
          </div>
          <div class="section-body about">
            <div class="about-item">
              <div class="about-image-wrapper">
                <img class="about-image" src="<?php echo get_template_directory_uri();?>/img/profile/profile.png" alt=""></div>
              <div class="about-body">
                <p>
                  テキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
                <p>
                  テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト&gt;テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.about-secion -->

      <!-- .skill-secion -->
      <section class="skill-section section" id="skill-section">
        <div class="inner">
          <div class="section-heading">
            <h2 class="heading-primary">SKILL</h2>
          </div>
          <div class="section-body skill">
            <div class="skill-list">
              <div class="skill-item">
                <div class="skill-image-wrapper">
                <img class="skill-image" src="<?php echo get_template_directory_uri();?>/img/skill/エンベットアイコン.png" alt="">

                </div>
                <div class="skill-body">
                  <h3 class="skill-title">HTML/CSS</h3>
                  <div class="skill-rating rating">
                  </div>
                  <p>
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
              </div>
              <div class="skill-item">
                <div class="skill-image-wrapper">
                  <img class="skill-image" src="<?php echo get_template_directory_uri();?>/img/skill/JSアイコン.png" alt="">
                </div>
                <div class="skill-body">
                  <h3 class="skill-title">JavaScript</h3>
                  <div class="skill-rating rating">
                  </div>
                  <p>
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
              </div>
              <div class="skill-item">
                <div class="skill-image-wrapper">
                  <img class="skill-image" src="<?php echo get_template_directory_uri();?>/img/skill/ワードプレスのアイコン.png" alt="">
                </div>
                <div class="skill-body">
                  <h3 class="skill-title">WordPress</h3>
                  <div class="skill-rating rating">
                  </div>
                  <p>
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
              </div>

              <div class="skill-item">
                <div class="skill-image-wrapper">
                  <img class="skill-image" src="<?php echo get_template_directory_uri();?>/img/skill/icon_skill.png" alt="">
                </div>
                <div class="skill-body">
                  <h3 class="skill-title">PHP</h3>
                  <div class="skill-rating rating">
                  </div>
                  <p>
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
              </div>

              <div class="skill-item">
                <div class="skill-image-wrapper">
                  <img class="skill-image" src="<?php echo get_template_directory_uri();?>/img/skill/icon_skill.png" alt="">
                </div>
                <div class="skill-body">
                  <h3 class="skill-title">MySQL</h3>
                  <div class="skill-rating rating">
                  </div>
                  <p>
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
              </div>

              <div class="skill-item">
                <div class="skill-image-wrapper">
                  <img class="skill-image" src="<?php echo get_template_directory_uri();?>/img/skill/icon_skill.png" alt="">
                </div>
                <div class="skill-body">
                  <h3 class="skill-title">Webライター</h3>
                  <div class="skill-rating rating">
                  </div>
                  <p>
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.skill-secion -->

      <!-- .contact-secion -->
      <section class="contact-section section" id="contact-section">
        <div class="inner">
          <div class="section-heading">
            <h2 class="heading-primary">CONTACT</h2>
          </div>
          <div class="section-lead">
            <p>
              SNSからご連絡をください。
            </p>
          </div>
          <div class="section-body contact">
              <div class="contact-item">
                <a class="contact-image-wrapper" href="#" target="_blank"><img class="contact-image"
                    src="img/contact/icon_contact.png" alt="">
                  <span class="contact-name">Twitter</span></a>
              </div>
          </div>
        </div>
      </section>
      <!-- /.contact-secion -->

    </main>

    <!-- .footer -->
    <footer class="footer">
      <div id="js-page-top" class="page-top">
        TOP
      </div>
      <div class="inner">
        <p class="copyright">&copy;KaeOugi</p>
      </div>
    </footer>
    <!-- /.footer -->

  </div>

  <!-- 下記はPhotoswipeプラグイン用 -->
  <!-- Root element of PhotoSwipe. Must have class pswp. -->
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe.
           It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

      <!-- Container that holds slides.
              PhotoSwipe keeps only 3 of them in the DOM to save memory.
              Don't modify these 3 pswp__item elements, data is added later on. -->
      <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
      </div>

      <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
      <div class="pswp__ui pswp__ui--hidden">

        <div class="pswp__top-bar">

          <!--  Controls are self-explanatory. Order can be changed. -->

          <div class="pswp__counter"></div>

          <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>



          <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

          <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

          <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
          <!-- element will get class pswp__preloader--active when preloader is running -->
          <div class="pswp__preloader">
            <div class="pswp__preloader__icn">
              <div class="pswp__preloader__cut">
                <div class="pswp__preloader__donut"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
          <div class="pswp__share-tooltip"></div>
        </div>

        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
        </button>

        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
        </button>

        <div class="pswp__caption">
          <div class="pswp__caption__center"></div>
        </div>

      </div>

    </div>


  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/js/photoswipe/photoswipe.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/js/photoswipe/photoswipe-ui-default.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/js/photoswipe/photoswipe-setup.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/js/script.js"></script>
</body>
</html>