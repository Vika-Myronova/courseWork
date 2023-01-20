<?php
/** @var array $category */
/** @var array $products */

use models\User;

?>
<h1><?=$category['name']?></h1>
<?php if (User::isAdmin()) : ?>
    <div class="mb-3">
        <a href="/product/add" class="btn btn-success">Додати товар</a>
    </div>
<?php endif; ?>
