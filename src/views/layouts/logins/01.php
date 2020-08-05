<?php

/* @var $this \yii\web\View */
/* @var $content string */
 
use yii\helpers\Html;
 
use common\widgets\Alert;
use app\modules\admin\assets\AdminAsset;
 
AdminAsset::register($this);
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
    $this->registerCssFile( '/themes/login/css/01.css', ['depends' => [\yii\bootstrap\BootstrapAsset::className()]]); ?>
</head>
<body>
<?php $this->beginBody() ?>

 
     
 
    <div class="container">
      
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
 
 

<?php $this->endBody() ?>
 
 
</body>
</html>
<?php $this->endPage() ?>
