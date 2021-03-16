<?php
include ('db.php');

// ================ LOGIN ================= //

if(isset($_POST['loginSubmit'])){
    $loginUsername = $_POST['loginUsername'];
    $loginPassword = $_POST['loginPassword'];

    $sql = $pdo->prepare("SELECT * FROM `users`");
    $sql->execute();
    $result = $sql->fetchAll();

    foreach ($result as $value) {
        if($loginUsername == $value['username'] and $loginPassword == $value['password']){
            header('Location: index.php');
        } else {
            $wrongAnswer = '<div style="width: 100%; height: fit-content; background-color: #111; color: #ff0000; padding: 20px; font-size: 16px">Login yoki parolni noto\'g\'ri kiritdinggiz!</div>';
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
    $answer = '<div style="width: 100%; height: fit-content; background-color: #111; color: lightgreen; padding: 20px; font-size: 16px">Пользователь успешно зарегистрирован!</div>';
    } catch(PDOException $e){
        $answer = '<div style="width: 100%; height: fit-content; background-color: #111; color: #ff0000; padding: 20px; font-size: 16px">"'.$e->getMessage().'"</div>';
    }
// ================ REGISTRATION end ================= //
    
   
}
