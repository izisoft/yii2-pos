<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
//echo $this->cu(['/cai-gi-day','id'=>100,'bc'=>'cs']);
$this->registerCssFile( '/themes/admin/css/login.css', ['depends' => [\yii\bootstrap\BootstrapAsset::className()]]);
$this->registerCssFile( Yii::getAlias('@libs') . '/slider/blureffect/css/style.css', ['depends' => [\yii\bootstrap\BootstrapAsset::className()]]);
?>
<div class="site-login">
    <h1 class="center login_header">Đăng nhập hệ thống</h1>

     
<span class="rope_icon"></span>
    <div class="row">
        <div class="col-lg-12"><div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username' )->textInput(['autofocus' => true,'placeholder'=>'Tên đăng nhập hoặc Email','class'=>'field-input user-input form-control'])->label(''); ?>

                <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Mật khẩu','class'=>'field-input pass-input form-control'])->label('') ?>

                <?= $form->field($model, 'rememberMe')->checkbox()->label('Tự động đăng nhập');?>

                <div class="form-group">
                    <?= Html::submitButton('Đăng nhập', ['class' => 'btn btn-success form-control field-input-btn', 'name' => 'login-button']) ?>
                </div>
<div class="form-group">
<a href="<?php echo cu(['forgot/']);?>" class="help-block forgot-link">Quên mật khẩu ?</a>                   
                </div>
            <?php ActiveForm::end(); ?>
        </div></div>
    </div>
</div>
