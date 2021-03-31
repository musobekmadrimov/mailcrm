<?php
include('db.php');
if (isset($_POST['orderSubmitButton'])) {
    $orderID = $_POST['orderIdInput'];
    $sql = $pdo->prepare('SELECT * FROM `orders` WHERE `order_id`= "'.$orderID.'"');
    $sql->execute();
    $count = $sql->rowCount();
    if ($count > 0) {
        $result = $sql->fetchAll();
    } else{
        $result = '<div class="alert alert-danger" role="alert" >
        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button><i class="fa fa-coffee"></i><strong>Xatolik!</strong> Bunday('.$orderID.') ID raqamli buyurtma mavjud emas!
      </div>';
    }
}
?>