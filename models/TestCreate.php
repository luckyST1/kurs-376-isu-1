<?php

namespace app\models;

use Yii;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/**
 * This is the model class for table "test_create".
 *
 * @property int $id_quest
 * @property string $question
 * @property int $radio1
 * @property int $radio2
 * @property int $radio3
 */
class TestCreate extends \yii\db\ActiveRecord
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
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_quest' => 'Id Quest',
            'question' => 'Вопрос',
            'radio1' => 'Ответ1',
            'radio2' => 'Ответ2',
            'radio3' => 'Ответ3',
        ];
    }
}
