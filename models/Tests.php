<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test_create".
 *
 * @property int $id_quest
 * @property string $question
 * @property string $radio1
 * @property string $radio2
 * @property string $radio3
 */
class Tests extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test_create';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question', 'radio1', 'radio2', 'radio3'], 'required'],
            [['question'], 'string', 'max' => 255],
            [['radio1', 'radio2', 'radio3'], 'string', 'max' => 222],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_quest' => 'Id Quest',
            'question' => 'Question',
            'radio1' => 'Radio1',
            'radio2' => 'Radio2',
            'radio3' => 'Radio3',
        ];
    }
}
