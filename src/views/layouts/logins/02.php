<?php

/* @var $this \yii\web\View */
/* @var $content string */
 
use yii\helpers\Html;
 
use common\widgets\Alert;
use app\modules\admin\assets\AdminAsset;
 
\izi\dev\assets\AppAsset::register($this);
$this->title = 'Đăng nhập hệ thống';
/*
\app\modules\admin\models\Siteconfigs::updateData('THEMES',[
		'login'=>[
				'id'=>'01',
		]
]);
*/


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
 
    <title><?= Html::encode($this->title) ?></title>
     
    <?php $this->head(); 
    
    $this->registerCssFile( '/themes/admin/dist/css/AdminLTE.min.css', ['id'=>'adminlte-css', 'depends' => [\yii\bootstrap\BootstrapAsset::className()]]); 
    $this->registerCssFile( '/themes/login/css/02.css', ['id'=>'main-css', 'depends' => [\yii\bootstrap\BootstrapAsset::className()]]); 
    
    ?>
</head>
<body class="hold-transition login-page">
<?php $this->beginBody() ?>

 
     
 
    <div class="container">
      
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
 
 

<?php 

$this->beforeEndBody();



$this->endBody() ?>
 
 
</body>
</html>
<?php $this->endPage() ?>
