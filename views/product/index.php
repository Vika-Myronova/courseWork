<?php
use models\User;
?>
<h1>Список товарів</h1>
<?php

if (User::isAdmin()) : ?>
    <div class="mb-3">
        <a href="/product/add" class="btn btn-success">Додати товар</a>
    </div>
<?php endif; ?>