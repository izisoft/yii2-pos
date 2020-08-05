<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
 
?>
<div class="site-login login-box"> 
<div class="login-logo"> 
    
<?php 
 
 
// $this->registerCssFile('/libs/themes/css/base.less?v='.time(), [
// //     'depends' => [\yii\bootstrap\BootstrapAsset::className()],
//     'rel'=>'stylesheet/less','id'=>'main-less-css'
    
// ]);

?>    
</div>  
  
<div class="logincontainer ">
 
     
 
     
        <div class="login-container login-box-body"> 
        <p class="login-box-msg"><b>Đăng nhập hệ thống</b></p>
  <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>      
        
 
   
 
 
                            
                            <div class="form-group has-feedback pr label-in-place">
<?= $form->field($model, 'username' )->textInput(['autofocus' => true,'placeholder'=>'Tên đăng nhập hoặc Email','class'=>'field-input user-input form-control'])->label('<i class="glyphicon glyphicon-envelope"></i> Tên đăng nhập hoặc Email'); ?>
                           
                            
                            </div>
                            <div class="form-group has-feedback pr label-in-place">
                            
                                <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Mật khẩu','class'=>' field-input pass-input form-control'])->label('<i class="glyphicon glyphicon-lock"></i> Mật khẩu') ?>
                             
                            </div>
<div class="s-rememberme">
<?= $form->field($model, 'rememberMe')->checkbox([
		'class'=>'uniform'
])->label('Tự động đăng nhập');?>
</div>                            
                            <div class="">
                                 <?= Html::submitButton('Đăng nhập', ['class' => 'btn btn-success form-control btn-login field-input-btn', 'name' => 'login-button']) ?>
                            </div>
                            
         
  <a href="<?php echo cu(['forgot/']);?>" class="help-block forgot-link mgb0 italic">Quên mật khẩu ?</a>            

                

               

                 
            <?php ActiveForm::end(); ?>
        </div> 
    
</div></div>
