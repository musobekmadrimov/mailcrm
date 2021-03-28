<?php
include('app/checkOrder.php');
include('layouts/main-layout.php');
include('layouts/navbar.php');
?>




<div class="main">
    <section class="module" style="padding: 40px 0">
        <div class="container" style="<?= ($count > 0) ? '' : 'text-align: center'?>">
            <?php if ($count > 0) { ?>           
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h1 class="module-title font-alt">Информатция о заказе № <span class="bg-dark text-white"><?= @$result[0]['order_id'] ?></span></h1>
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
                                <th width="20%" style="text-align: center">СТАТУС</th>
                            </tr>
                            <tr>
                                <td style="text-align: center"><?= @$result[0]['sender_name'] . "<br>" . @$result[0]['sender_phone'] ?></td>
                                <td style="text-align: center"><?= @$result[0]['recipient_name'] . "<br>" . @$result[0]['recipient_phone'] ?></td>
                                <td style="text-align: center"><?= @$result[0]['from'] ?></td>
                                <td style="text-align: center"><?= @$result[0]['to'] ?></td>
                                <td style="text-align: center"><?= @$result[0]['quantity'] ?></td>
                                <td style="text-align: center"><?= @$result[0]['status'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <button class="btn btn-block btn-round btn-d pull-right" type="submit">Update Cart</button>
                    </div>
                </div>
            </div> -->
            <?php } else{
             print($result); ?>
            <img src="https://img.icons8.com/pastel-glyph/2x/page-not-found--v1.png" alt="Not Found Image" style="width: 350px; height: auto; margin: 0 auto;">
            <?php }?>
            </div>
        </div>
    </div>


    <?php
    include('layouts/footer.php');
    include('layouts/scripts.php');
    ?>