<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 13.01.18
 * Time: 12:24
 */

namespace app\models;


use yii\db\ActiveRecord;

class Cart extends ActiveRecord
{
    public function addToCart($product, $qty = 1)
    {
        echo 'Worded!';
    }

}