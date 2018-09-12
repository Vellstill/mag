<?php 
include "header.php";
?>

<div class="head">
    <h2>ВАША КОРЗИНА</h2>
    <h4>Товары резирвируются на ограниченное время</h4>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-1">ФОТО</div>
        <div class="col-lg-7">НАИМЕНОВАНИЕ</div>
        <div class="col-lg-1">РАЗМЕР</div>
        <div class="col-lg-1">КОЛИЧЕСТВО</div>
        <div class="col-lg-1">СТОИМОСТЬ</div>
        <div class="col-lg-1">УДАЛИТЬ</div>
    </div>
    <div class="row">
        <div class="col-lg-1">src из базы</div>
        <div class="col-lg-7">name из базы</div>
        <div class="col-lg-1">размер хз откуда</div>
        <div class="col-lg-1">КОЛИЧЕСТВО</div>
        <div class="col-lg-1">price из базы</div>
        <div class="col-lg-1">кнопка</div>
    </div>
</div>
<div class="sum">Итого:</div>

<div class="delivery">
    <h2>АДРЕС ДОСТАВКИ</h2>
    <h4>Все поля обязательны для заполнения</h4>
    <form action="" class = "order-form">
        <div class="order-form-top">
            <select name="" id="">
                <option value="">Курьерская служба - 500 руб.</option>
                <option value="">Самовывоз</option>
                <option value="">Отправка почтой</option>
            </select><br>
            <div class="input-box">
                <label class = "label-text">Имя</label>
                <input type="text" class = "user-input"> 
            </div>
            <div class="input-box">
                <label class = "label-text">Фамилия</label>
                <input type="text" class = "user-input"> 
            </div>
            <div class="input-box max">
                <label class = "label-text">Адрес</label>
                <input type="text" class = "user-input"> 
            </div>
            <div class="input-box">
                <label class = "label-text">Город</label>
                <input type="text" class = "user-input-max"> 
            </div>
            <div class="input-box">
                <label class = "label-text">Индекс</label>
                <input type="text" class = "user-input"> 
            </div>
            <div class="input-box">
                <label class = "label-text">Телефон</label>
                <input type="text" class = "user-input"> 
            </div>
            <div class="input-box">
                <label class = "label-text">E-mail</label>
                <input type="text" class = "user-input"> 
            </div>
        </div>
        <div class="order-form-bottom">
            <h2>ВАРИАНТЫ ОПЛАТЫ</h2>
            <h4>Все поля обязательны для заполнения</h4>

            <p>Стоимость:</p>
            <p>Доставка:</p>
            <p>Итого:</p>


            <select name="" id="">
                <option value="">Банковская карта</option>
                <option value="">Оплата онлайн</option>
                <option value="">Наличными при получении</option>
            </select><br>
            <button type="submit" class = "submit-btn">ЗАКАЗАТЬ</button>
        </div>
    </form>
</div>






<?php
include "footer.php";
?>