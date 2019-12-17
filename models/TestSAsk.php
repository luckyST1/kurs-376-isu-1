<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test_s_ask".
 *
 * @property int $id_ask
 * @property int $id_test_s_c
 * @property string $ask
 * @property int $id_cor_ans
 */
class TestSAsk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test_s_ask';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ask'], 'required'],
            [['id_test_s_c'], 'integer'],
            [['ask'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ask' => 'Id Ask',
            'id_test_s_c' => 'Выберите ваш тест',
            'ask' => 'Вопрос',

        ];
    }
}
