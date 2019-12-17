<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\TestSCorAnsw */
/* @var $form ActiveForm */
?>

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

// получаем все вопрос
$otvet = \app\models\TestSAns::find()->all();
//$otvet1 = \app\models\TestCreate::find()->all();


// формируем массив, с ключем равным полю 'id' и значением равным полю 'йгуыешщт'
$items = ArrayHelper::map($otvet, 'ans1', function($item1) { return $item1->ans1;});
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
    'prompt' => 'Оставить пустым, если ответ не является верным'
];

echo $form->field($model, 'c_ans1')->dropDownList($items, $params);?>



<?php
$otvet = \app\models\TestSAns::find('ans2')->all();

// формируем массив, с ключем равным полю 'id' и значением равным полю 'йгуыешщт'
$items = ArrayHelper::map($otvet, 'ans2', function($item2) { return $item2->ans2;});


$params = [
    'prompt' => 'Оставить пустым, если ответ не является верным'
];

echo $form->field($model, 'c_ans2')->dropDownList($items, $params);?>
<?php
$otvet = \app\models\TestSAns::find('ans3')->all();

// формируем массив, с ключем равным полю 'id' и значением равным полю 'йгуыешщт'
$items = ArrayHelper::map($otvet, 'ans3', function($item3) { return $item3->ans3;});


$params = [
    'prompt' => 'Оставить пустым, если ответ не является верным'
];

echo $form->field($model, 'c_ans3')->dropDownList($items, $params);?>

<?= Html::submitButton('Закончить', ['class' => 'btn btn-primary']) ?>
<?
ActiveForm::end();

?>

