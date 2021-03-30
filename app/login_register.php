<?php
include ('db.php');

// ================ LOGIN ================= //

if(isset($_POST['loginSubmit'])){
    $loginUsername = $_POST['loginUsername'];
    $loginPassword = $_POST['loginPassword'];

    $sql = $pdo->prepare("SELECT * FROM `customers`");
    $sql->execute();
    $result = $sql->fetchAll();

    foreach ($result as $value) {
        if($loginUsername == $value['email'] and $loginPassword == $value['password']){
            header('Location: client/index.php');
        } else {
            $wrongAnswer = '<div class="alert alert-danger" role="alert">
            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button><i class="fa fa-coffee"></i><strong>Xatolik!</strong> Login yoki parolni noto\'g\'ri kiritdinggiz!
          </div>';
        }
    }
}

// ================ LOGIN end ================= //

// ================ REGISTRATION ================= //

if(isset($_POST['registerSubmit'])){
    try{
    $registerUsername = $_POST['registerUsername'];
    $phoneNumber = $_POST['phone_number'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $registerPassword = $_POST['registerPassword'];

    $sql = "INSERT INTO `customers`(`full_name`, `phone_number`, `address`, `city`, `email`, `password`) VALUES(?, ?, ?, ?, ?, ?)";
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
    
   
}
