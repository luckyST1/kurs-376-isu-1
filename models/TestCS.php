<?php

namespace app\models;

use Yii;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;


class TestCS extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test_c_s';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],

            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_t_s' => 'Id T S',
            'name' => 'Название',

        ];
    }
}
