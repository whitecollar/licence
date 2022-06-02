<?php

namespace app\controllers;
use app\models\Event; 
use app\models\Agregate; 
use yii\helpers\Json;
use app\models\License;

use yii\web\Response;
use yii\web\JsonResponseFormatter;
use Yii;



use yii\rest\ActiveController;


class LiController extends ActiveController
{
    public $modelClass = 'app\models\License';



    public function actions()
    {

        $actions = parent::actions();
        unset($actions['index']);
        return $actions;
    }

    public function actionIndex(){
      
    $customer = License::findOne(['public_key' =>Yii::$app->request->get('id') ]);

    header('Content-type: application/json');

        echo JSON::encode($customer);   
    



   exit ();

   }


}