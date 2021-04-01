<?php
include('app/checkOrder.php');
include('layouts/main-layout.php');
include('layouts/navbar.php');
?>




<div class="main">
    <section class="module" style="padding: 40px 0">
        <div class="container <?= ($count > 0) ? "" : "text-center" ?>">
            <?php if ($count > 0) { ?>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h1 class="module-title font-alt">Информация о заказе № <span class="bg-dark text-white"><?= @$result[0]['order_id'] ?></span></h1>
                    </div>
                </div>
                <hr class="divider-w pt-20">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped table-border checkout-table">
                            <tbody>
                                <tr>
                                    <th width="20%" style="text-align: center">ИМЯ И ТЕЛЕФОН ОТПРАВИТЕЛЬЯ</th>
                                    <th width="20%" style="text-align: center">ИМЯ И ТЕЛЕФОН ПОЛУЧАТЕЛЬЯ</th>
                                    <th width="15%" style="text-align: center">ОТКУДА</th>
                                    <th width="15%" style="text-align: center">КУДА</th>
                                    <th width="10%" style="text-align: center">КОЛИЧЕСТВО</th>
                                    <th width="10%" style="text-align: center">ПРИБЛИЗИТЕЛЬНАЯ ДАТА ДОСТАВКИ</th>
                                    <th width="10%" style="text-align: center">СТАТУС</th>
                                </tr>
                                <tr>
                                    <td style="text-align: center"><?= @$result[0]['sender_name'] . "<br>" . @$result[0]['sender_phone'] ?></td>
                                    <td style="text-align: center"><?= @$result[0]['recipient_name'] . "<br>" . @$result[0]['recipient_phone'] ?></td>
                                    <td style="text-align: center"><?= @$result[0]['from'] ?></td>
                                    <td style="text-align: center"><?= @$result[0]['to'] ?></td>
                                    <td style="text-align: center"><?= @$result[0]['quantity'] ?></td>
                                    <td style="text-align: center"><?= @$result[0]['approximate_date'] ?></td>
                                    <td style="text-align: center"><?= @$result[0]['status'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <?php
                    switch ($result[0]['status']) {
                        case "Принять!":
                            echo '<img src="assets/images/status/prinyat.png" style="width:30%; height: auto; margin: 0 auto; display: block; border-radius: 50%">';
                            break;
                        case "Загружен на транспорт!":
                            echo '<img src="assets/images/status/transport.png" style="width:30%; height: auto; margin: 0 auto; display: block; border-radius: 10%">';
                            break;
                        case "В процессе общего сбора!":
                            echo '<img src="assets/images/status/sbor.png" style="width:30%; height: auto; margin: 0 auto; display: block; border-radius: 10%">';
                            break;
                        case "В местном почтовом отделении!":
                            echo '<img src="assets/images/status/pochta.png" style="width:30%; height: auto; margin: 0 auto; display: block; border-radius: 10%">';
                            break;
                        case "Доставлено!":
                            echo '<img src="assets/images/status/dostavleno.png" style="width:30%; height: auto; margin: 0 auto; display: block; border-radius: 10%">';
                            break;
                        default:
                            echo "Error!";
                    }
                    ?>
                </div>
            <?php } else {
                print($result); ?>
                <img src="assets/images/status/not found.png" alt="Not Found Image" style="width: 350px; height: auto; margin: 0 auto;">
            <?php } ?>
        </div>
</div>
</div>


<?php
include('layouts/footer.php');
include('layouts/scripts.php');
?>