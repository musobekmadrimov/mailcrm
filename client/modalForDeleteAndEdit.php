<?php include('../app/newOrder.php');?>
<!-- Modal Edit-->
<div class="modal fade" id="editModal<?= $order['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content shadow">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">№ <?= $order['id'] ?> - buyurtmani o'zgartirish</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="?id=<?= $order['id'] ?>" method="post" enctype='multipart/form-data'>
                    <div class="form-group">
                        <label>Ф.И.О отправителя</label>
                        <input class="form-control text-dark" type="text" name="edit_sender_name" id="sender_name" required autocomplete="off" value="<?= $order['sender_name'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Телефон отправителя</label>
                        <input class="form-control text-dark" type="text" name="edit_sender_phone" required autocomplete="off" value="<?= $order['sender_phone'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Ф.И.О получателя</label>
                        <input class="form-control text-dark" type="text" name="edit_recipient_name" required autocomplete="off" value="<?= $order['recipient_name'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Телефон получателя</label>
                        <input class="form-control text-dark" type="text" name="edit_recipient_phone" required autocomplete="off" value="<?= $order['recipient_phone'] ?>">

                    </div>
                    <div class="form-group">
                        <label>Откуда</label>
                        <select name="edit_from" id="edit_from" required class="form-control text-dark">
                            <?php foreach ($cities as $city) { ?>
                                <option value="<?= @$city['name'] ?>" class="form-control text-dark" name="edit_from" ><?= @$city['name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Куда</label>
                        <select name="edit_to" id="edit_to" required class="form-control text-dark">
                            <?php foreach ($cities as $city) { ?>
                                <option value="<?= @$city['name'] ?>" class="form-control text-dark" name="edit_from" <?php (@$city['name'] == $order['to']) ? "selected" : "" ?>><?= @$city['name'] ?></option>
                            <?php } ?>
                        </select>
                        <!-- <input class="form-control text-dark" type="text" name="edit_to" required autocomplete="off" value="<?= $order['to'] ?>"> -->
                    </div>
                    <div class="form-group">
                        <label>Зип Код</label>
                        <input class="form-control text-dark" type="number" name="" id="" required autocomplete="off" value="<?= $order['approximate_date'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Масса</label>
                        <input class="form-control text-dark" type="number" name="edit_weight" id="weight" required autocomplete="off" oninput="calculateTotalSum()" value="<?= $order['weight'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Количество</label>
                        <input class="form-control text-dark" type="number" name="edit_quantity" id="quantity" required autocomplete="off" oninput="calculateTotalSum()" value="<?= $order['quantity'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Стоимость</label>
                        <input class="form-control text-dark" type="number" name="edit_total_price" id="total_price" required autocomplete="off" readonly value="<?= $order['total_price'] ?>">
                    </div>
                    <div class="form-group">
                        <label>ПРИБЛИЗИТЕЛЬНАЯ ДАТА ДОСТАВКИ</label>
                        <input class="form-control text-dark" type="date" name="edit_date" id="date" required autocomplete="off" value="<?= $order['approximate_date'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Статус</label>
                        <select name="edit_status" id="status" class="form-control text-dark" value="<?= $order['status'] ?>">
                            <option value="Принять!">Принять!</option>
                            <option value="Загружен на транспорт!">Загружен на транспорт!</option>
                            <option value="В процессе общего сбора!">В процессе общего сбора!</option>
                            <option value="В местном почтовом отделении!">В местном почтовом отделении!</option>
                            <option value="Доставлено!">Доставлено!</option>
                        </select>
                    </div>
                    <script>
                        function calculateTotalSum() {
                            $('#total_price').val(($('#weight').val() * 10000) * $('#quantity').val());
                        }
                    </script>
                    <div class="modal-footer">
                        <button type="submit" name="edit-submit" class="btn btn-primary">ИЗМЕНИТЬ</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<!-- DELETE MODAL -->
<div class="modal fade" id="deleteModal<?= $order['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content shadow">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">№ <?= $order['id'] ?> raqamli buyurtmani o'chirmoqchimisiz !?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Bekor qilish</button>
                <form action="?id=<?= $order['id'] ?>" method="post">
                    <button type="submit" name="delete_submit" class="btn btn-danger">O'chirish</button>
                </form>
            </div>
        </div>
    </div>
</div>