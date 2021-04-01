<?php include('layouts/main-layout.php');
include('../app/newOrder.php');
include('../app/crudForOrder.php');

?>

<head>
    <link rel="stylesheet" href="assets/css/new_order.css">
</head>

<div class="login-box">
    <h2 class="display-3">НОВЫЙ ЗАКАЗ:</h2>
    <form action="" method="POST">
        <div class="user-box">
            <input type="text" name="sender_name" id="sender_name" required autocomplete="off">
            <label>Ф.И.О отправителя</label>
        </div>
        <div class="user-box">
            <input type="text" name="sender_phone" required autocomplete="off">
            <label>Телефон отправителя</label>
        </div>
        <div class="user-box">
            <input type="text" name="recipient_name" required autocomplete="off">
            <label>Ф.И.О получателя</label>
        </div>
        <div class="user-box">
            <input type="text" name="recipient_phone" required autocomplete="off">
            <label>Телефон получателя</label>
        </div>
        <div class="user-box">
            <label>Откуда</label>
            <select name="from" id="from">
                <?php foreach ($cities as $city) { ?>
                    <option value="<?= @$city['name'] ?>" class="text-dark"><?= @$city['name'] ?></option>
                <?php } ?>
            </select>
            <!-- <input type="text" name="from" required autocomplete="off"> -->

        </div>
        <div class="user-box">
            <label>Адрес доставки</label>
            <select name="to" id="to">
                <?php foreach ($cities as $city) { ?>
                    <option value="<?= @$city['name'] ?>" class="text-dark"><?= @$city['name'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="user-box">
            <input type="number" name="zipcode" id="zipcode" required autocomplete="off">
            <label>Зип Код</label>
        </div>
        <div class="user-box">
            <input type="number" name="weight" id="weight" required autocomplete="off" oninput="calculateTotalSum()">
            <label>Масса</label>
        </div>
        <div class="user-box">
            <input type="number" name="quantity" id="quantity" required autocomplete="off" oninput="calculateTotalSum()">
            <label>Количество</label>
        </div>
        <div class="user-box">
            <input type="number" name="total_price" id="total_price" required autocomplete="off" readonly>
            <label>Стоимость</label>
        </div>
        <div class="user-box">
            <input type="date" name="date" id="date" required autocomplete="off">
            <label>ПРИБЛИЗИТЕЛЬНАЯ ДАТА ДОСТАВКИ</label>
        </div>
        


        <button type="submit" name="newOrderButton" id="newOrderButton">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            ПОДТВЕРДИТЬ
        </button>
    </form>
    <?= @$answer ?>
</div>

<script>
    function calculateTotalSum() {
        $('#total_price').val(($('#weight').val() * 10000) * $('#quantity').val());
    }
</script>

<?php include('layouts/bottom.php') ?>