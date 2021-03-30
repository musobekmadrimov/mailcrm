<?php 
include('db.php');

// ================ REGISTRATION ================= //

if(isset($_POST['newOrderButton'])){
    try{
    $senderName = $_POST['sender_name'];
    $senderPhone = $_POST['sender_phone'];
    $recipientName = $_POST['recipient_name'];
    $recipientPhone = $_POST['recipient_phone'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $weight = $_POST['weight'];
    $quantity = $_POST['quantity'];
    $totalPrice = $_POST['total_price'];
    $orderId = strtoupper(substr($senderName, 0, 2) . substr($recipientName, 0, 2) . substr($senderPhone, -3) . substr($recipientPhone, -3));
    
    $sql = "INSERT INTO `orders`(`order_id`, `sender_name`, `sender_phone`, `recipient_name`, `recipient_phone`, `from`, `to`, `weight`, `quantity`, `total_price`) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$orderId, $senderName, $senderPhone, $recipientName, $recipientPhone, $from, $to, $weight, $quantity, $totalPrice]);
    $answer = '<div class="alert alert-success" role="alert">
    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button><i class="fa fa-cog fa-spin"></i><strong>Muvafaqqiyatli!</strong> Buyurtma qabul qilindi!
  </div>';
    } catch(PDOException $e){
        $answer = '<div class="alert alert-danger" role="alert">
        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button><i class="fa fa-coffee"></i><strong>Alert!</strong>
      '.$e->getMessage().'"</div>';
    }
  }
// ================ REGISTRATION end ================= //
?>