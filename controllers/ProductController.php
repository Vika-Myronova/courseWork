<?php

namespace controllers;

use core\Core;
use models\Category;
use models\Product;


class ProductController extends \core\Controller
{
    public function indexAction(){
        return $this->render();
    }
    public function addAction($params){
        $category_id = intval($params[0]);
        if (empty($category_id))
            $category_id = null;
        $categories = Category::getCategories();
        if (Core::getInstance()->requestMethod === 'POST'){
            $errors = [];
            $_POST['name'] = trim($_POST['name']);
            if(empty($_POST['name']))
                $errors['name'] = 'Назва товару не вказана!';
            if(empty($_POST['category_id']))
                $errors['category_id'] = 'Категорія не вибрана!';
            if($_POST['price']<= 0)
                $errors['price'] = 'Ціна некоректно задана!';
            if($_POST['count']<= 0)
                $errors['count'] = 'Кількість товару некоректно задана!';
            if(empty($errors)){
                Product::addProduct($_POST);
                return $this->redirect('/product');
            }else {
                $model = $_POST;
                return $this->render(null, [
                    'errors' => $errors,
                    'model' => $model,
                    'categories' => $categories,
                    'category_id' => $category_id
                ]);
            }
        }
        return $this->render(null, [
            'categories' => $categories,
            'category_id' => $category_id
        ]);
    }
}