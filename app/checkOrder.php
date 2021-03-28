<?php
include('db.php');
if (isset($_POST['submit'])) {
    $orderID = $_POST['orderIdInput'];
    $sql = $pdo->prepare("SELECT * FROM `orders` WHERE order_id= ?");
    $sql->execute($orderID);
    @$result = $sql->fetchAll();

    header('Location: ../check_order.php');
}
