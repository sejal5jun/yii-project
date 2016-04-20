<?php

namespace frontend\models;

use Yii;
use \yii\db\ActiveRecord;

class Myfirst extends ActiveRecord
{
	 public function rules()
	 {
		 return [
            
            [['title', 'description'], 'required'],
      ];
		 
		 
		 
	 }
	  public function attributeLabels()
    {
        return [
            'title' => 'Subject Title',
            'description' => 'Description',
        ];
    }
	
	
}




?>