<?php include('layouts/main-layout.php');
      include('../app/login_register.php')  
?>
<head>
    <link rel="stylesheet" href="assets/css/add_city.css">
</head>

<div class="container">
<div class="login-box">
  <h2>НОВЫЙ ПОЛЗОВАТЕЛЬ</h2>
  <form method="POST" action="">
    <div class="user-box">
      <input type="text" name="registerUsername" required autocomplete="off">
      <label>Почта</label>
    </div>
    <div class="user-box">
      <input type="password" name="registerPassword" required autocomplete="off">
      <label>Пароль</label>
    </div>
    <button type="submit" name="registerSubmit">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      ПОДТВЕРДИТЬ
    </button>
  </form>
  <?= @$answer ?>
</div>
</div>




<?php include('layouts/bottom.php') ?>