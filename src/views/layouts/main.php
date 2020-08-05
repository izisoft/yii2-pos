<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use izi\ipos\assets\AppAsset;

AppAsset::register($this);
 
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="no-js">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?= Html::csrfMetaTags() ?>
    
    <title><?= Html::encode($this->title) ?></title>
    <?php 
	$this->renderMetaTag(); 
	$this->registerMetaTag([
	    'name'=>'robots',
	    'content'=>'noindex,nofollow'
	]);
	$this->head();
	
	
	?> 
</head>
<body class="fixed-sn white-skin">
<?php $this->beginBody() ?>

<?php 
echo $this->renderPartial('header');

echo $content;

echo $this->renderPartial('footer');

$this->beforeEndBody();
$this->endBody(); ?> 
</body>
</html>
<?php $this->endPage() ?>
