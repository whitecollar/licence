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
    if(isset($customer)) {
        
        //echo JSON::encode($customer);   
        $id = Yii::$app->request->get('id');
        $name = Yii::$app->request->get('name');
        $user = Yii::$app->request->get('user');
        $userSerial = Yii::$app->request->get('userSerial');
        $userPKey = Yii::$app->request->get('userPKey');
        $privitekey = License::findOne(['private_key' => $userPKey]);

        if (isset ($privitekey)) {
            echo 'null';
            exit ();

        }
        else 
     {   
        if(isset($name,$user,$userSerial,$userPKey,$id))
        {
            //echo '1111111111111111111';
            $model=License::find()->where(['public_key'=>$id])->one();
            $model->private_key =$userSerial;
            $model->name =$name;
            $model->mail =$user ;
            $model->save();
            //Licence::Update(['status' => 1], ['like', 'email', '@dummy.com']);
            
            $customer = License::findOne(['public_key' =>Yii::$app->request->get('id') ]);
            echo JSON::encode($customer);
        }
    }    
    }
    else 
    {
        echo 'null';
    } 
  

   exit ();

   }


}