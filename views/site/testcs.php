<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TestCS */
/* @var $form ActiveForm */
?>
<div class="testcs">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name') ?>

    
        <div class="form-group">
            <?= Html::submitButton('Продолжить', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- testcs -->
