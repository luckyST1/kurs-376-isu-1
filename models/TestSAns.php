<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test_s_ans".
 *
 * @property int $id_ans
 * @property int $id_ask
 * @property string $ans1
 * @property string $ans2
 * @property string $ans3
 */
class TestSAns extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test_s_ans';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ask', 'ans1', 'ans2', 'ans3'], 'required'],
            [['id_ask'], 'integer'],
            [['ans1', 'ans2', 'ans3'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ans' => 'Id Ans',
            'id_ask' => 'Ваш вопрос',
            'ans1' => 'Ответ 1',
            'ans2' => 'Ответ 2',
            'ans3' => 'Ответ 3',
        ];
    }
}
