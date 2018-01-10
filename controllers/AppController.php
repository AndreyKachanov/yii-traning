<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 09.01.18
 * Time: 12:39
 */

namespace app\controllers;

use yii\web\Controller;


class AppController extends Controller
{
    protected function setMeta($title = null, $keywords = null, $description = null)
    {
        $this->view->title = $title;
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);
    }
}