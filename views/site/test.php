
<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


?>
<div class="test">


    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'question')->textarea() ?>
    <?= $form->field($model, 'radio1') ?>
    <?= $form->field($model, 'radio2') ?>
    <?= $form->field($model, 'radio3') ?>

    <div class="form-group">
        <?= Html::submitButton('Далее', ['class' => 'btn btn-primary']) ?>
    <?php ActiveForm::end(); ?>

</div><!-- test -->