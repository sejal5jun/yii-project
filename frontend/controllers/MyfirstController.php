<?php
namespace frontend\controllers;
use frontend\models\Myfirst;
use \yii\web\Controller;

use \yii;

class MyfirstController extends Controller
{
	
	public function actionIndex()
	{
		
		 $model = new Myfirst();
		 $model->load($_POST);
		
		
			$model->save();
		
		return $this->render('index',['model'=>$model]);
		}
	}




?>
