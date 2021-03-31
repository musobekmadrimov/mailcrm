<?php include('layouts/main-layout.php');
      include('../app/newCity.php')  
?>
<head>
    <link rel="stylesheet" href="assets/css/add_city.css">
</head>

<div class="container">
<div class="login-box">
  <h2>НОВЫЙ ГОРОД</h2>
  <form method="POST" action="">
    <div class="user-box">
      <input type="text" name="city" required autocomplete="off">
      <label>Названия города</label>
    </div>
    <div class="user-box">
      <input type="number" name="postalcode" required autocomplete="off">
      <label>Почта индекс города</label>
    </div>
    <button type="submit" name="newCityButton">
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