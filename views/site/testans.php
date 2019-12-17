<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\TestSAns */
/* @var $form ActiveForm */
?>
<div class="testans">

    <?php
    $form = ActiveForm::begin();
    // получаем все вопрос
    $test = \app\models\TestSAsk::find('id_ask')->all();
    //$otvet1 = \app\models\TestCreate::find()->all();


    // формируем массив, с ключем равным полю 'id' и значением равным полю 'йгуыешщт'
    $items = ArrayHelper::map($test, 'id_ask', function($item1) { return $item1->ask ;});
    //$item1 =
    //  $otvet1 =
    //    function($item2) {return $item2->radio2;};
    //$item2 =
    //  $otvet2 =
    //    function($item1) { return $item1->radio1;};
    //$item3=
    //  $otvet3 =
    //    function($item3) { return $item3->radio3;};


    $params = [
        'prompt' => 'Выберите вопрос'
    ];

    echo $form->field($model, 'id_ask')->dropDownList($items, $params);
    echo $form->field($model, 'ans1')->textInput($items, $params);
    echo $form->field($model, 'ans2')->textInput($items, $params);
    echo $form->field($model, 'ans3')->textInput($items, $params);?>

    <?= Html::submitButton('Продолжить', ['class' => 'btn btn-primary']) ?>

    <?php ActiveForm::end(); ?>


</div><!-- testans -->
