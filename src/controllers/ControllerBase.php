<?php
namespace izi\ipos\controllers;
 
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class ControllerBase extends \yii\web\Controller
{
    public $layout = 'main';
    
    
    public function behaviors()
    {
        
        
        return [
             
            'access' => [
                'class' => AccessControl::className(),
                //'only' => ['login', 'logout', 'signup','ajax'],
                'rules' => [
                    [
                        'actions' => ['login', 'forgot','ajax','error'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        
                        'actions' => ['logout','ajax','error','forgot'],
                        'allow' => true,
                        'roles' => ['@'],
                        
                    ],
                    [
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback'=>function($rule,$action){
                        if(__SID__ == 0) {
                            return false;
                        }
                        
                        return \Yii::$app->user->can([ROOT_USER, DEV_USER]);
                        }
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                    'logout' => ['POST'],
                ],
            ],
        ];
    }
}