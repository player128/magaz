<link rel="stylesheet" href="http://localhost/magaz/css/card.css">
<div class = "card">
    <div class = "card-id"> ID <?php echo $data['id'];?></div>
    <div class = "card-name"><?php echo $data['name'];?></div>
    <div class="card-img"></div>
    <div class = "card-cost">Стоимость <?php echo $data['cost'];?>  ₽</div>
    <div class = "card-weight"><?php echo $data['weight'];?></div>
    <div class = "card-description"><?php echo $data['description'];?></div>
</div>