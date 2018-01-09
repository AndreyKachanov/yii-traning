<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 09.01.18
 * Time: 8:32
 */

namespace app\models;
use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }

    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }
}