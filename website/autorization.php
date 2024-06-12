<?php
session_start();


error_reporting(-1);


if(!empty($_SESSION['user'])){
    header('Location: /partner_cabinet.php');
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Вход в ЛК</title>
</head>
<body>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-4 mt-5 ">
            <!-- Контент здесь -->
            <form method="post", action="handler-authorization.php">
                <div class="mb-3">
                    <label for="exampleInputLogin" class="form-label">Логин</label>
                    <input type="text" name="login" class="form-control" id="exampleInputLogin" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Пароль</label>
                    <input type="password" name="passLogin" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Войти в Л/К</button>
            </form>
            <a href="register.php">Зарегистрироваться</a>
        </div>
    </div>

</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</html>
