<?php


use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;


?>




<?php



$form = ActiveForm::begin();
// получаем все вопрос
$otvet = \app\models\TestCreate::find('question')->all();
//$otvet1 = \app\models\TestCreate::find()->all();
//$otvet2 = \app\models\TestCreate::find()->all();
//$otvet3 = \app\models\TestCreate::find()->all();
// формируем массив, с ключем равным полю 'id' и значением равным полю 'йгуыешщт'
$items = ArrayHelper::map($otvet, 'question', function($item1) { return $item1->radio1 ; function($item2)  {return $item2->radio2;};});
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
    'prompt' => 'Заполните это поле, если оно является верным ответом'
];

echo $form->field($model, 'correct_q')->dropDownList($items, $params);?>
<?php
$otvet = \app\models\TestCreate::find('question')->all();

// формируем массив, с ключем равным полю 'id' и значением равным полю 'йгуыешщт'
$items = ArrayHelper::map($otvet, 'question', function($item2) { return $item2->radio2;});


$params = [
'prompt' => 'Заполните это поле, если оно является верным ответом'
];

echo $form->field($model, 'correct_q2')->dropDownList($items, $params);?>
<?php
$otvet = \app\models\TestCreate::find('question')->all();

// формируем массив, с ключем равным полю 'id' и значением равным полю 'йгуыешщт'
$items = ArrayHelper::map($otvet, 'question', function($item3) { return $item3->radio3;});


$params = [
    'prompt' => 'Заполните это поле, если оно является верным ответом'
];

echo $form->field($model, 'correct_q3')->dropDownList($items, $params);?>

        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
<?
ActiveForm::end();

?>
