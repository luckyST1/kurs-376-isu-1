<?php

namespace app\models;

use Yii;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/**
 * This is the model class for table "correct_q".
 *
 * @property int $id_q
 * @property string $correct_q
 */
class CorrectQ extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'correct_q';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_q'], 'required'],
            [['id_q'], 'integer'],
            [['correct_q','correct_q2','correct_q3'], 'string', 'max' => 222],
            [['id_q'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_q' => 'Id Q',
            'correct_q' => 'Ответ1',
            'correct_q2' => 'Ответ2',
            'correct_q3' => 'Ответ3',
        ];
    }
}
