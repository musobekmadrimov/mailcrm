<?php include('layouts/main-layout.php'); ?>
<?php include('app/login_register.php'); ?>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
  <main>
    <div class="page-loader">
      <div class="loader">Загружается...</div>
    </div>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.php">Titan | CRM TIZIMI</a>
        </div>
        <div class="collapse navbar-collapse" id="custom-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">ГЛАВНАЯ</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="main">
      <section class="module bg-dark-30" data-background="assets/images/finance/loginBg.jpg" style="padding: 55px 0">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h1 class="module-title font-alt mb-0">ВХОД - РЕГИСТРАЦИЯ</h1>
            </div>
          </div>
        </div>
      </section>
      <section class="module">
        <div class="container">
          <div class="row">
            <div class="col-sm-5 col-sm-offset-1 mb-sm-40 mr-5">
              <h4 class="font-alt">ВХОД</h4>
              <hr class="divider-w mb-10">
              <form class="form" action="" method="POST">
                <div class="form-group">
                  <input class="form-control" id="username" type="text" name="loginUsername" placeholder="Почта" />
                </div>
                <div class="form-group">
                  <input class="form-control" id="password" type="password" name="loginPassword" placeholder="Пароль" />
                </div>
                <div class="form-group">
                  <button class="btn btn-round btn-b" name="loginSubmit" type="submit">ВХОД</button>
                </div>
                <?php echo @$wrongAnswer ?>
              </form>
            </div>
            <div class="col-sm-5 ml-5">
              <!-- colored -->
              <div class="ih-item circle colored effect10 bottom_to_top" style="position: absolute;
    right: 70px;"><a href="https://github.com/musobekmadrimov">
                  <div class="img w-100" style="position: absolute; top: -20%;"><img src="assets/images/favicons/ms-icon-310x310.png" alt="img" class="w-100"></div>

                  <div class="info" style="position: absolute; top: -20%;">
                    <h3>TITAN</h3>
                    <p class="text-white">СRM СИСТЕМА</p>
                    <p>автор: Musobek Madrimov</p>
                  </div>
                </a></div>
              <!-- end colored -->
            </div>
          </div>
        </div>
      </section>
      <hr class="divider-d">
      <footer class="footer bg-dark">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p class="copyright font-alt">&copy; 2021&nbsp;<a href="index.php">TitaN</a>, Все права зашищены!<br> автор: Musobek Madrimov</p>
            </div>
            <div class="col-sm-6">
              <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
  </main>
  <?php include('layouts/scripts.php') ?>