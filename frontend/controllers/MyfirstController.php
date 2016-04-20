<?php
namespace frontend\controllers;
use \yii\web\Controller;

use \yii;

class MyfirstController extends Controller
{
	
	public function actionIndex()
	{
		 $model = new Myfirst();
		return $this->render('index',['model'=>$model]);
		
		
	}

}


?>