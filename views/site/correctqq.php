<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CorrectQ */
/* @var $form ActiveForm */
?>
<div class="correctqq">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_q') ?>
        <?= $form->field($model, 'correct_q') ?>
        <?= $form->field($model, 'correct_q2') ?>
        <?= $form->field($model, 'correct_q3') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- correctqq -->
