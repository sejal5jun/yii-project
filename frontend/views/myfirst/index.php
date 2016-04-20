<h2>it's working</h2>
<?php
use yii\helpers\Html as H;
use yii\widget\ActiveForm as af;

$form=af::begin();
$form->field->($model,'title');
$form->field->($model,'description');
H::SubmitButton();
af::end();


?>