<?php
namespace izi\ipos\controllers;

use Yii; 
use izi\user\models\LoginForm;
/**
 * 
 */
class DefaultController extends ControllerBase
{
    
    
    public function actionIndex()
    {  
      
        return $this->render('index');
    }
    
    
    public function actionLogin()
    {
        
        $this->layout = Yii::$app->controller->action->id;
        if (!Yii::$app->user->isGuest) {
            return __DOMAIN_MODULE__ ?  $this->gohome() : $this->redirect(['/' . __MODULE_NAME__]);
        }
 
        $model = new LoginForm();
         
        
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(__DOMAIN_MODULE__ ? '/' : '/' . __MODULE_NAME__ );
        }else {
            $this->layout = 'logins/02';
            $temp = 'logins/02';
            
            return $this->render($temp, [
                'model' => $model, 
            ]);
        } 
    }
    
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect(['index']);
    }
}