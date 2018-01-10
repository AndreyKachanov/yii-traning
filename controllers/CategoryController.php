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
        $this->setMeta('Site_name');
        return $this->render('index', compact('hits'));
    }

    public function actionView($id)
    {
        $id = Yii::$app->request->get('id');
        $products = Product::find()->where(['category_id' => $id])->all();
        $category = Category::findOne($id);
        $this->setMeta('Shop | ' . $category->name, $category->keywords, $category->description);
        return $this->render('view', compact('products', 'category'));
    }
}