<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 09.01.18
 * Time: 12:38
 */

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use Yii;

class CategoryController extends AppController
{

    public function actionIndex()
    {
        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        return $this->render('index', compact('hits'));
    }
}