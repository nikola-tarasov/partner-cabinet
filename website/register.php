<?php
error_reporting(-1);



?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Регистрация</title>
</head>
<body>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-4 mt-5 ">
    <!-- Контент здесь -->
            <form method="post" action="hadler-register.php">
                <div class="mb-3">
                    <label for="name" class="form-label">Ваше имя </label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby=""  required>
                </div>
                <div class="mb-3">
                    <label for="surname" class="form-label">Ваше фамилия </label>
                    <input type="text" name="surname" class="form-control" id="surname" aria-describedby="" required>
                </div>
                <div class="mb-3">
                    <label for="login" class="form-label">Ваш логин </label>
                    <input type="text" name="login" class="form-control" id="name" aria-describedby="" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Введите вашу почту </label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Пароль</label>
                    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPhone" class="form-label">Ваш телефон</label>
                    <input type="text" id="phone" name="phone"  class="form-control" id="exampleInputPhone" required>
                </div>
                <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
            </form>
        </div>
    </div>

</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</html>



