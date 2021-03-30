<?php include('layouts/main-layout.php') ?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,500;0,700;1,300;1,500;1,700&display=swap');
    *{
        box-sizing: border-box;
        font-family: 'Ubuntu', sans-serif;
    }
    html {
        height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: linear-gradient(#141e30, #243b55);
    }

    .login-box {
        position: absolute;
        top: 50%;
        left: 60%;
        width: 70%;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(0, 0, 0, .5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
        border-radius: 10px;
    }

    @media screen and (max-width: 568px){
        .login-box {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 90%;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(0, 0, 0, .5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
        border-radius: 10px;
    }
    }

    .login-box h2 {
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;
    }

    .login-box .user-box {
        position: relative;
        float: left;
        width: calc(50% - 20px);
        margin-right: 10px;
    }

    .login-box .user-box input {
        width: 100%;
        padding: 10px 0 5px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
    }

    .login-box .user-box label {
        position: absolute;
        top: -25px;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #03e9f4;
        pointer-events: none;
        transition: .5s;
        text-transform: uppercase;
    }

    .login-box .user-box input:focus~label,
    .login-box .user-box input:valid~label {
        top: -20px;
        left: 0;
        color: #03e9f4;
        font-size: 12px;
    }

    .login-box form button{
        width: 50%;
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #03e9f4;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 0px;
        letter-spacing: 4px;
        text-align: center;
        font-weight: 600;
        background: none;
        border: none;
        cursor: pointer;
    }

    .login-box button:hover {
        background: #03e9f4;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #03e9f4,
            0 0 25px #03e9f4,
            0 0 50px #03e9f4,
            0 0 100px #03e9f4;
    }

    .login-box button span {
        position: absolute;
        display: block;
    }

    .login-box button span:nth-child(1) {
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #03e9f4);
        animation: btn-anim1 1s linear infinite;
    }

    @keyframes btn-anim1 {
        0% {
            left: -100%;
        }

        50%,
        100% {
            left: 100%;
        }
    }

    .login-box button span:nth-child(2) {
        top: -100%;
        right: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg, transparent, #03e9f4);
        animation: btn-anim2 1s linear infinite;
        animation-delay: .25s
    }

    @keyframes btn-anim2 {
        0% {
            top: -100%;
        }

        50%,
        100% {
            top: 100%;
        }
    }

    .login-box button span:nth-child(3) {
        bottom: 0;
        right: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(270deg, transparent, #03e9f4);
        animation: btn-anim3 1s linear infinite;
        animation-delay: .5s
    }

    @keyframes btn-anim3 {
        0% {
            right: -100%;
        }

        50%,
        100% {
            right: 100%;
        }
    }

    .login-box button span:nth-child(4) {
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(360deg, transparent, #03e9f4);
        animation: btn-anim4 1s linear infinite;
        animation-delay: .75s
    }

    @keyframes btn-anim4 {
        0% {
            bottom: -100%;
        }

        50%,
        100% {
            bottom: 100%;
        }
    }
</style>

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
            <input type="text" name="from" required autocomplete="off">
            <label>Откуда</label>
        </div>
        <div class="user-box">
            <input type="text" name="to" required autocomplete="off">
            <label>Адрес доставки</label>
        </div>
        <div class="user-box">
            <input type="number" name="weight" required autocomplete="off">
            <label>Масса</label>
        </div>
        <div class="user-box">
            <input type="number" name="quantity" required autocomplete="off">
            <label>Количество</label>
        </div>
        <div class="user-box">
            <input type="number" name="total_price" required autocomplete="off" disabled>
            <label>Стоимость</label>
        </div>
        
        <button type="submit" name="newOrderButton" id="newOrderButton">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            ПОДТВЕРДИТЬ
</button>
    </form>
</div>

<?php include('layouts/bottom.php') ?>