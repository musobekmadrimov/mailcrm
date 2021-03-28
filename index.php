<?php include('layouts/main-layout.php') ?>
<style>
  #small-dialog {
    background: white;
    padding: 20px 30px;
    text-align: left;
    max-width: 500px;
    margin: 40px auto;
    position: absolute;
    top: -350px;
    left: 35%;
  }

  #orderIdInput {
    height: 60px !important;
    padding: 10px 5px !important;
    font-size: 30px;
    margin-bottom: 10px !important;
    border: 3px double #000 !important;
  }

  #orderSubmitButton:hover{
    color: #fff !important;
  }


  /**
 * Fade-zoom animation for first dialog
 */

  /* start state */

  .my-mfp-zoom-in .zoom-anim-dialog {
    opacity: 0;

    -webkit-transition: all .5s ease-in-out;
    -moz-transition: all .5s ease-in-out;
    -o-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;



    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }


  .my-mfp-zoom-in.mfp-ready .zoom-anim-dialog {
    opacity: 1;

    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
  }

  /* animate out */
  .my-mfp-zoom-in.mfp-removing .zoom-anim-dialog {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);

    opacity: 0;
  }

  /* Dark overlay, start state */
  .my-mfp-zoom-in.mfp-bg {
    opacity: 0;
    -webkit-transition: opacity 0.7s ease-out;
    -moz-transition: opacity 0.7s ease-out;
    -o-transition: opacity 0.7s ease-out;
    transition: opacity 0.7s ease-out;
  }

  /* animate in */
  .my-mfp-zoom-in.mfp-ready.mfp-bg {
    opacity: 0.8;
  }

  /* animate out */
  .my-mfp-zoom-in.mfp-removing.mfp-bg {
    opacity: 0;
  }
</style>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
  <main>
    <div class="page-loader">
      <div class="loader">Loading...</div>
    </div>
    <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.php">Titan</a>
        </div>
        <div class="collapse navbar-collapse" id="custom-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#small-dialog" class="btn btn-danger popup-with-zoom-anim">ОТСЛЕДИТЬ ЗАКАЗ</a></li>
            <li><a href="login_register.php">ВХОД - РЕГИСТРАЦИЯ</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="home-section bg-dark-30" id="home" data-background="assets/images/finance/finance_header_bg.png" style="height: 100vh !important">
      <div class="video-player" data-property="{videoURL:'https://www.youtube.com/watch?v=uzlUiiH9IFo', containment:'.home-section', startAt:30, mute:false, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:100}"></div>
      <div class="video-controls-box">
        <div class="container">
          <div class="video-controls"><a class="fa fa-volume-up" id="video-volume" href="#">&nbsp;</a><a class="fa fa-pause" id="video-play" href="#">&nbsp;</a></div>
        </div>
      </div>
      <div class="titan-caption">
        <div class="caption-content">
          <div class="font-alt mb-30 titan-title-size-1">Assalamu Alaykum! &amp; Xush kelibsiz!</div>
          <div class="font-alt mb-40 titan-title-size-4">TITAN CRM TIZIMI!</div>
        </div>
      </div>

      <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
      <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
        <form action="app/checkOrder.php" method="post">
          <h1>Pochta ID sini kiriting:</h1>
          <input type="text" class="form-control mb-1" id="orderIdInput" required maxlength="14" name="orderIdInput">
          <button type="submit" name="submit" class="btn btn-block bg-dark" id="orderSubmitButton">ПОТВЕРДИТЬ</button>
        </form>

      </div>
    </section>

    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
  </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function() {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 500,
        mainClass: 'my-mfp-zoom-in'
      });
    });
  </script>
  <?php include('layouts/scripts.php') ?>