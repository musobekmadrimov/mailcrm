<?php
include('db.php');
$get_id = @$_GET['id'];
// READING

$sql = $pdo->prepare("SELECT * FROM `orders`");
$sql->execute();
$result = $sql->fetchAll();

// UPDATING

if (isset($_POST['edit-submit'])) {
    try {
       
        $senderName = $_POST['edit_sender_name'];
        $senderPhone = $_POST['edit_sender_phone'];
        $recipientName = $_POST['edit_recipient_name'];
        $recipientPhone = $_POST['edit_recipient_phone'];
        $from = $_POST['edit_from'];
        $to = $_POST['edit_to'];
        $weight = $_POST['edit_weight'];
        $quantity = $_POST['edit_quantity'];
        $totalPrice = $_POST['edit_total_price'];
        $editStatus = $_POST['edit_status'];

        $sql = "UPDATE `orders` SET `sender_name`=?, `sender_phone`=?, `recipient_name`=?, `recipient_phone`=?, `from`=?, `to`=?, `weight`=?, `quantity`=?, `total_price`=?, `status`=? WHERE id=$get_id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$senderName, $senderPhone, $recipientName, $recipientPhone, $from, $to, $weight, $quantity, $totalPrice, $editStatus]);
        $answer = '<div class="alert alert-success" role="alert">
    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button><i class="fa fa-cog fa-spin text-white mr-1"></i><strong>Buyurtma muvafaqqiyatli o\'zgartirildi!</strong>
  </div>';
    } catch (PDOException $e) {
        $answer = '<div class="alert alert-danger" role="alert">
        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button><i class="fa fa-coffee"></i><strong>Alert!</strong>
      ' . $e->getMessage() . '"</div>';
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

// DELETE
if (isset($_POST['delete_submit'])) {
	$sql = "DELETE FROM `orders` WHERE id=?";
	$query = $pdo->prepare($sql);
	$query->execute([$get_id]);
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}
