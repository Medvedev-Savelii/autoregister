<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма регистрации</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-5">
        <?php
        if ($_COOKIE['user'] == ''):
        ?>
       <div class="row">
           <div class="col">
               <h1>Форма регистрации</h1>
               <form action="validation-form/check.php" method="post">
                   <input type="text" class="form-control" name="login" id="login" placeholder="Enter your login"><br>
                   <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name"><br>
                   <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter your password"><br>
                   <button class="btn btn-success" type="submit">Регистрация</button>
               </form>
           </div>
           <div class="col">
               <h1>Форма Авторизации</h1>
               <form action="validation-form/auth.php" method="post">
                   <input type="text" class="form-control" name="login" id="login" placeholder="Enter your login"><br>
                   <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter your password"><br>
                   <button class="btn btn-success" type="submit">Авторизоваться</button>
               </form>
           </div>
       </div>
        <?php else: ?>
            <p>Hello <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="/autoregister/exit.php">Здесь</a>.</p>
        <?php endif; ?>
    </div>
</body>
</html>