<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <link rel="stylesheet" href="http://localhost/magaz/css/template.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    </head>
    <body>
        <div class="top">
            <?php
                if (isset($_SESSION['name'])) {
                    echo $_SESSION['name'];
            ?>
                <a href="http://localhost/magaz/logout">Выйти</a>
            <?php        
                } 
                else {
            ?>
            <a href="http://localhost/magaz/reg">Регистрация</a>
            <a href="http://localhost/magaz/auth">Войти</a>
            <?php
                }
            ?>
        </div>
        <div class="elips1"></div>
        <div class="elips2"></div> 
        <div class="elips3"></div>
        <div class="elips4"></div>
        <div class="elips5"></div>
        <div class="content">
            <?php include 'app/views/'.$content_view; ?>
        </div>
    </body>
</html>
