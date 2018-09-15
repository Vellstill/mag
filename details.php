<?php 
include "header.php"
?>
    <div class = "link">
        <p><a href="/index.php">Главная</a> / <a href="">Категория</a> / <a href="">Категория продукта</a> / Название продукта</p>
    </div>

    <div class="photo">
        <img src="/images/main/4.jpg" alt="">
    </div>
    <form action = "shopping_cart.php" class="descr">
        <h2>Название из базы/гета</h2>
        <p>Артикул</p>
        <p>price из базы/гета</p>
        <p>Описание из базы</p>
        <h6>Размер</h6>
        <div class ="size">
            <label for="radiobutton1">
                <span>S</span>
                <input type="radio" name = "radiobutton1" id = "radiobutton1">
            </label>
            <label for="radiobutton2">
                <span>S</span>
                <input type="radio" name = "radiobutton2" id = "radiobutton2">
            </label>
            <label for="radiobutton3">
                <span>S</span>
                <input type="radio" name = "radiobutton3" id = "radiobutton3">
            </label>
            <label for="radiobutton4">
                <span>S</span>
                <input type="radio" name = "radiobutton4" id = "radiobutton4">
            </label>
        </div>
        <input type="submit" value = "ДОБАВИТЬ В КОРЗИНУ" class = "in-basket-btn">
    </form>








<?php 
include "footer.php"
?>