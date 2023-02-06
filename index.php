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
        <div class="block">
            <div class="top-block">
                <div class="add-button">
                    <a href="addProduct.php">+</a>
                </div>
            </div>
            <div class="content-block">
                <div class="center-content-block">
                    <?php
                        $mysql = new Mysql('localhost', 'root', '', 'magaz');

                        $sql = 'SELECT * FROM product';
                        $result = $mysql->query($sql);
                        while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <div class="item-block">
                            <div class="item-img"></div>
                            <div class="item-name"><?php echo $row['name'];?></div>
                            <div class="item-cost"><?php echo $row['cost']. ' рублей';?></div>
                        </div>
                    <?php        
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>