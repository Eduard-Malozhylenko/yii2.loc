<?php
/**
 * Created by PhpStorm.
 * User: Eduard
 * Date: 16.04.2018
 * Time: 17:57
 */

namespace app\models;


use yii\db\ActiveRecord;

class Product  extends ActiveRecord
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
        return 'product';
    }
    public function getCategory()
    {
        return $this->hasOne(Category::className(),['id' => 'category_id']);
    }
}