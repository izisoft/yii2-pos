<?php 
dev(__FILE__);?>

<div id="roota"></div>

<?php 
$this->registerJsFile('/themes/ipos/js/index.js', ['type'=>'text/babel', 'depends'=>['izi\\assets\\ReactAsset']]);
?>
