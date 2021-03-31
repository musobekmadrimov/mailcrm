<?php include('layouts/main-layout.php');
include('../app/crudForOrder.php');
?>
<div class="main-panel">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">
              <i class="material-icons">notifications</i>
              <p class="d-lg-none d-md-block">
                Notifications
              </p>
            </a>
          </li>
          <!-- your navbar here -->
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title " style="color: #fff !important">МОИ ПОСТАВКИ</h4>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead class="bg-danger text-white w-100">
                    <tr>
                      <th width="5%" style="text-align: left; color: #fff">№</th>
                      <th width="20%" style="text-align: left; color: #fff">ИМЯ И ТЕЛЕФОН ОТПРАВИТЕЛЬЯ</th>
                      <th width="20%" style="text-align: left; color: #fff">ИМЯ И ТЕЛЕФОН ПОЛУЧАТЕЛЬЯ</th>
                      <th width="10%" style="text-align: center; color: #fff">ОТКУДА</th>
                      <th width="10%" style="text-align: center; color: #fff">КУДА</th>
                      <th width="10%" style="text-align: center; color: #fff">КОЛИЧЕСТВО</th>
                      <th width="10%" style="text-align: center; color: #fff">СТАТУС</th>
                      <th width="15%" style="text-align: center; color: #fff">ФУНКЦИИ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 0;
                    foreach ($result as $order) {
                    ?>
                      <tr>
                        <td><?= ++$i ?></td>
                        <td><?= @$order['sender_name'] . "<br>" . @$order['sender_phone'] ?></td>
                        <td><?= @$order['recipient_name'] . "<br>" . @$order['recipient_phone'] ?></td>
                        <td><?= @$order['from'] ?></td>
                        <td><?= @$order['to'] ?></td>
                        <td><?= @$order['quantity'] ?></td>
                        <td><?= @$order['status'] ?></td>
                        <td>
                          <a href="?edit=<?= $order['id'] ?>" class="btn-success btn-sm" data-toggle="modal" data-target="#editModal<?= $order['id'] ?>"><i class="fa fa-edit"></i></a>
                          <a href="?delete=<?= $order['id'] ?>" class="btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?= $order['id'] ?>"><i class="fa fa-trash"></i></a>
                          <?php require 'modalForDeleteAndEdit.php' ?>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script>
    function calculateTotalSum() {
      $('#total_price').val(($('#weight').val() * 10000) * $('#quantity').val());
    }
  </script>
  <?php include('layouts/bottom.php') ?>