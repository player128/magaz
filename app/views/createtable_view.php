<link rel="stylesheet" href="/magaz/css/createtable.css">
<form action="" method="POST" class = "create-table-form">
    <div class="create-table-form-block">
        <div class="create-table-name">
            <p>Имя</p>
            <input type="text" name="name">
        </div>
        <div class="addfield">+</div>
    </div>
    <div class="create-tabler-buttom">
        <button type="submit">Добавить</button>
    </div>
    <div class="create-table-form-msg">
        <?php echo $data;?>
    </div>
</form>
<script src = 'js/createtable.js'></script>