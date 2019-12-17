<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test_s_cor_answ".
 *
 * @property int $id_cor_ans
 * @property string $c_ans1
 * @property string $c_ans2
 * @property string $c_ans3
 */
class TestSCorAnsw extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test_s_cor_answ';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ask'], 'required'],
            [['id_ask'], 'integer'],
            [['c_ans1', 'c_ans2', 'c_ans3'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_cor_ans' => 'Id Cor Ans',
            'id_ask' => 'Ваш вопрос',
            'c_ans1' => 'Вариант ответа 1',
            'c_ans2' => 'Вариант ответа 2',
            'c_ans3' => 'Вариант ответа 3',
        ];
    }
}
