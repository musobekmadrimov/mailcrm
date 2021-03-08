<?php
include ('db.php');



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


?>