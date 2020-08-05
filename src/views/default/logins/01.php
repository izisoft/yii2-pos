<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
//echo $this->cu(['/cai-gi-day','id'=>100,'bc'=>'cs']);
?>
<div class="site-login ">
<div class="logincontainer ">
     
<div class="text-center mgb20">
                <h1 class="dialog-heading"><?php echo DOMAIN;?></h1>
                <h2 class="dialog-subheading">Đăng nhập hệ thống</h2>
            </div>
     
 
     
        <div class="login-container"> 
  <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>      
        
<ul class="list-group">
                            
                            <li class="form-group list-group-item">
<?= $form->field($model, 'username' )->textInput(['autofocus' => true,'placeholder'=>'Tên đăng nhập hoặc Email','class'=>'field-input user-input form-control'])->label(''); ?>
                           <i class="fa fa-envelope dialog-ico f16px"></i>
                            </li>
                            <li class="form-group list-group-item">
                            
                                <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Mật khẩu','class'=>'field-input pass-input form-control'])->label('') ?>
                            <i class="fa fa-lock f16px dialog-ico"></i>
                            </li>
                            <li class="list-group-item">
                                 <?= Html::submitButton('Đăng nhập', ['class' => 'btn btn-success form-control btn-login field-input-btn', 'name' => 'login-button']) ?>
                            </li>
                        </ul>        
              
<div class="s-rememberme">
<?= $form->field($model, 'rememberMe')->checkbox()->label('Tự động đăng nhập');?>
                                
<a href="<?php echo cu(['forgot/']);?>" class="help-block forgot-link pull-left mgl15 mgt10">Quên mật khẩu ?</a>                      

</div>
                

               

                 
            <?php ActiveForm::end(); ?>
        </div> 
    
</div></div>
