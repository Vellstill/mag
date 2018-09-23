<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap CSS -->  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Дополнение к теме -->  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class = "header">
        <nav class = "navigation">
            <a href="" class="logo-pic"></a>
            <div class = "nav"><a href="/category.php?cat=women">Женщинам</a></div>
            <div class = "nav"><a href="/category.php?cat=men">Мужчинам</a></div>
            <div class = "nav"><a href="/category.php?cat=kid">Детям</a></div>
            <div class = "nav"><a href="/category.php?cat=new">Новинки</a></div>
            <div class = "nav"><a href="#">О нас</a></div>
        </nav>
        <div class="client">
            <div class = "client-login">
                <a href="#" class = "login">Войти</a>
            </div>
            <div class = "client-bascet">
                <a href="/shopping_cart.php" class="bascet">Корзина</a>
            </div>
        </div>
        <div class="reg">
            <div class = "top-reg">
                <div class = "enter-btn">ВХОД</div>
                <div class = "registration-btn">РЕГИСТРАЦИЯ</div>
            </div>
            <form action="" method="post" class="enter">
                <input type="text" name="login" placeholder="ЛОГИН"> <br>
                <input type="password" name="password" placeholder="ПАРОЛЬ"> <br>
                <button type="submit" class = "submit-btn" >Войти</button>
            </form>
            <form action="" method="post" class="registration">
                <input type="text" name="login" placeholder="ЛОГИН"> <br>
                <input type="text" name="email" placeholder="EMAIL"> <br>
                <input type="password" name="password" placeholder="ПАРОЛЬ"> <br>
                <input type="password" name="password" placeholder="ПОВТОРИТЕ ПАРОЛЬ"> <br>
                <button type="submit" class = "submit-btn" >Регистрация</button>
            </form>
        </div>
    </div>
