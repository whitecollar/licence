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
        $id = Yii::$app->request->get('id');
        $name = Yii::$app->request->get('name');
        $user = Yii::$app->request->get('namusere');
        $userSerial = Yii::$app->request->get('userSerial');
        $userPKey = Yii::$app->request->get('userPKey');
        if(isset($name,$user,$userSerial$userPKey))
        {
            echo '1111111111111111111';
        }



   exit ();

   }


}