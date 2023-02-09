<div class="block">
    <div class="top-block">
        <div class="add-button">
            <a href="./product">+</a>
        </div>
    </div>
    <div class="content-block">
        <div class="center-content-block">
            <?php
                foreach ($data as $row) {
                 ?>
                    <div class="item-block" productID = <?php echo $row['id'];?>>
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
