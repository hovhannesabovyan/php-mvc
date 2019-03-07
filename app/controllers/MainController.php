<?php

namespace app\controllers;

use above\libs\Functions;

class MainController extends AppController
{

    public function indexAction()
    {
        $this->setMeta('Title Desc', 'Desc', 'key');

        $posts = \R::findAll('product');

        $this->set(compact('posts'));
    }
}
