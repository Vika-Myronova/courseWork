<?php

namespace controllers;

use core\Controller;
use core\Template;

class NewsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function viewAction() {
        return $this->render();
    }
    // http://cms/news/index
    public function indexAction() {

        return $this->render(null, [
            'title' => 'Список новин',
            'text' => 'Просто текст'
        ]);
    }
}