<?php
/** @var array $model */
/** @var array $errors */
/** @var array $categories */

?>
<h2>Додавання товару</h2>
<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="name" class="form-label">Назва товару</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="">
        <?php if (!empty($errors['name'])): ?>
            <div class="form-text text-danger"> <?= $errors['name']; ?></div>
        <?php endif; ?>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Виберіть категорі товару</label>
        <select class="form-control" id="category_id" name="category_id" placeholder="">
            <?php foreach ($categories as $category): ?>
            <option value="<?= $category['id']?>"><?=$category['name']?></option>
            <?php endforeach; ?>
        </select>
        <?php if (!empty($errors['category_id'])): ?>
            <div class="form-text text-danger"> <?= $errors['category_id']; ?></div>
        <?php endif; ?>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Ціна товару</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="">
        <?php if (!empty($errors['price'])): ?>
            <div class="form-text text-danger"> <?= $errors['price']; ?></div>
        <?php endif; ?>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Кількість одиниць товару</label>
        <input type="count" class="form-control" id="count" name="count" placeholder="">
        <?php if (!empty($errors['count'])): ?>
            <div class="form-text text-danger"> <?= $errors['count']; ?></div>
        <?php endif; ?>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Короткий опис товару</label>
        <textarea class="ckeditor form-control" name="short_description" id="short_description"></textarea>
        <?php if (!empty($errors['short_description'])): ?>
            <div class="form-text text-danger"> <?= $errors['short_description']; ?></div>
        <?php endif; ?>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Розширений опис товару</label>
        <textarea class="ckeditor form-control" name="description" id="description"></textarea>
        <?php if (!empty($errors['description'])): ?>
            <div class="form-text text-danger"> <?= $errors['description']; ?></div>
        <?php endif; ?>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Чи відображати товар</label>
        <select class="form-control" id="visible" name="visible" placeholder="">
            <?php foreach ($categories as $category): ?>
                <option value="1">Так</option>
                <option value="0">Ні</option>
            <?php endforeach; ?>
        </select>
        <?php if (!empty($errors['visible'])): ?>
            <div class="form-text text-danger"> <?= $errors['visible']; ?></div>
        <?php endif; ?>
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">Файли з фотографією для товару</label>
        <input multiple type="file" class="form-control" name="file" id="file" accept="image/jpeg" />
    </div>
    <div>
        <button class="btn btn-primary">Додати</button>
    </div>
</form>
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
<script>
    let editors = document.querySelectorAll('.ckeditor');
    for(let editor of editors) {
        ClassicEditor
            .create(editor)
            .catch(error => {
                console.error(error);
            });
    }
</script>