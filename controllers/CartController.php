<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 13.01.18
 * Time: 12:21
 */

namespace app\controllers;
use app\models\Product;
use app\models\Cart;
use Yii;

class CartController extends AppController
{
    public function actionAdd()
    {
        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);
        if (empty($product)) return false;
        $session =  Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->addToCart($product);
    }
}