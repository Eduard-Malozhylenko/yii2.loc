<?php
/**
 * Created by PhpStorm.
 * User: Eduard
 * Date: 16.04.2018
 * Time: 17:54
 */

namespace app\models;


use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public static function tableName()
    {
        return 'category';
    }
    public function getProducts()
    {
        return $this->hasMany(Product::className(),['category_id' => 'id']);
    }

}