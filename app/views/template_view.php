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
            ?>
                <div class="name">
                    <?php echo $_SESSION['name'];?>
                </div>
                <div class = "logout">
                    <a href="http://localhost/magaz/logout">Выйти</a>
                </div>
            <?php        
                } 
                else {
            ?>
            <div class = "top-reg">1
                <a href="http://localhost/magaz/reg">Регистрация</a>
            </div>
            <div class = "top-auth">
                <a href="http://localhost/magaz/auth">Войти</a>
            </div>
            <?php
                }
            ?>
            <div class="cor"></div>
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
