<h2>it's working</h2>
<?php
use yii\helpers\Html as H;
use yii\bootstrap\ActiveForm as af;

$form=af::begin();
echo $form->field($model,'title');
echo $form->field($model,'description');
echo H::SubmitButton();
af::end();


?>