<?php 
include('db.php');

// ================ REGISTRATION ================= //

if(isset($_POST['registerSubmit'])){
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
    

    $sql = "INSERT INTO `orders`(`sender_name`, `sender_phone`, `recipient_name`, `recipient_phone`, `from`, `to`, `weight`, `quantity`) VALUES(?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$registerUsername, $phoneNumber, $city, $address, $email, $registerPassword]);
    $answer = '<div class="alert alert-success" role="alert">
    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button><i class="fa fa-cog fa-spin"></i><strong>Muvafaqqiyatli!</strong> Foydalanuvchi muvafaqqiyatli registratsiya qilindi!
  </div>';
    } catch(PDOException $e){
        $answer = '<div class="alert alert-danger" role="alert">
        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button><i class="fa fa-coffee"></i><strong>Alert!</strong>
      '.$e->getMessage().'"</div>';
    }
// ================ REGISTRATION end ================= //
?>