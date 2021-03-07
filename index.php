<?php include('layouts/main-layout.php') ?>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html">Titan</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="login_register.php">Kirish yoki Ro'yhatdan o'tish</a></li>
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
      </section>
      
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
<?php include('layouts/scripts.php') ?>

   