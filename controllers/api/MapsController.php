<?php

namespace kouosl\map\controllers\api;

use kouosl\map\models\Map;
use Yii;

class MapsController extends DefaultController {
	
	public $modelClass = 'kouosl\map\models\Map';
	
	public function actions() {
		$actions = parent::actions ();
	
		return $actions;
	}
			
	public function actionView($id){

		$model = Map::findOne($id);
		
		if(!$model)
			return ['status' => '404','message' => 'Not Found'];

		return $model;
	}
	
	public function actionIndex(){
		return Map::find()->all();
	}
	
	public function actionCreate(){

		$postParams = yii::$app->request->post();
		
		$model = new Map();
	
		
		if($model->load($postParams,'') && $model->validate()){
			if($model->save())
			    return ['status' => 1];
			else
			    return ['status' => 500];
		}
		else
			return ['status' => 100,'message' => 'Parametre Hatası'];
		
	}
	
	public function actionUpdate($id){

		$postParams = yii::$app->request->post();
		
		$model = Map::findOne($id);

		if($model = $this->LoadModel($model, $postParams)){
				if($model->save())
					return ['status' => 1];
				else 
					return ['status' => 101,'message' => $model->errors];
		}else
		    return ['status' => 100];
	}
	
	public function actionDelete($id){
		
		if(Map::findOne($id)->delete())
			return ['status' => 1];
		else
			return ['stauts' => 100];
	}
	
	public function LoadModel($model,$params)
	{
		foreach ($params as $key => $value)
			$model->hasAttribute($key) ? $model->$key = $value : " "; 
			
		return $model;
	}
	
	
	
	
	
	
	
	
	
	
}