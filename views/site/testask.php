<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\TestSAsk */
/* @var $form ActiveForm */
?>

<div class="testask">
    <?php
    $form = ActiveForm::begin();
    // получаем все вопрос
    $test = \app\models\TestCS::find('id_t_s')->all();
    //$otvet1 = \app\models\TestCreate::find()->all();


    // формируем массив, с ключем равным полю 'id' и значением равным полю 'йгуыешщт'
    $items = ArrayHelper::map($test, 'id_t_s', function($item1) { return $item1->name ;});
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
    'prompt' => 'Выберите тест'
    ];

    echo $form->field($model, 'id_test_s_c')->dropDownList($items, $params);

    echo $form->field($model, 'ask')->textInput($items, $params);?>

    <?= Html::submitButton('Продолжить', ['class' => 'btn btn-primary']) ?>
    <?
ActiveForm::end(); ?>


</div><!-- testask -->
