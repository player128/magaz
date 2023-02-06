<?php
    require 'mysql.php';
?>
<html>
    <head>
        <meta charset="utf8">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="elips1"></div>
        <div class="elips2"></div> 
        <div class="elips3"></div>
        <div class="elips4"></div>
        <div class="elips5"></div>
        <form action="addProducts.php" method="POST">
            <div class="addProduct-block">
                <p>Имя</p>
                <input type="text" name="name">
            </div>
            <div class="addProduct-block">
                <p>Цена</p>
                <input type="text" name="cost">
            </div>
            <div class="addProduct-block">
                <p>Вес, г</p>
                <input type="text" name="weight">
            </div>
            <div class="addProduct-block">
                <p>Описание</p>
                <textarea rows="15" name="description">Хороший..</textarea>
            </div>
            <div class="addProduct-block">
                <button type="submit">Добавить</button>
            </div>
        </form>
    </body>
</html>