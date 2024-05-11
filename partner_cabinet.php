<?php
error_reporting(-1);



require 'handler-partner-registrathion.php';

require 'connect.php';






?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"">
    <title>Кабинет партнера</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 mt-5 ">
            <form method="post" action="/" >
                <div class="mb-3">
                    <label for="exampleInputFIO" class="form-label">ФИО потенциального клиента</label>
                    <input type="text" name="fioClient" class="form-control" id="exampleInputFIO" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPhone" class="form-label">Телефон</label>
                    <input type="text" name="phoneClient" class="form-control" id="exampleInputPhone">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label">E-mail</label>
                    <input type="text" name="emailClient" class="form-control" id="exampleInputEmail">
                </div>
                <div class="mb-3">
                    <label for="exampleInputComment" class="form-label">Комментарий</label>
                    <input type="text" name="comment" class="form-control" id="exampleInputComment">
                </div>
                <button type="submit" class="btn btn-primary">Отправить данные</button>
            </form>
         </div>
        </div>
</div>
<div class="container">
    <div class="row justify-content-center mt-5">
            <table class="table table-dark table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Фамилия</th>
                    <th scope="col">Телефон</th>
                    <th scope="col">Статус</th>
                    <th scope="col">Комментарий</th>
                </tr>
                </thead>
                <?php
                    $sql = "SELECT * FROM leads;";

                    $resultLeads = $conn->query($sql);
                        if ($resultLeads) {
                            foreach ($resultLeads as $row) {
                                echo '<tbody>
                                    <tr>
                                        <th scope="row">' . $row['id'] . '</th>
                                        <td>' . $row['name'] . '</td>
                                        <td>' . $row['surname'] . '</td>
                                        <td>' . $row['phone'] . '</td>
                                        <td>' . $row['status'] . '</td>
                                        <td>' . $row['comment'] . '</td>
                                    </tr>
                            </tbody>';
                            }
                        }
                ?>
            </table>
    </div>
</div>

<scripts src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></scripts>
</body>
</html>
