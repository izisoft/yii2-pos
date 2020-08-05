<?php
namespace izi\ipos;

use Yii;

class Module extends \yii\base\Module

{
    public $moduleName = 'ipos';
    /**
     * @inheritdoc
     */
    public $controllerNamespace ;
    
    /**
     * @inheritdoc
     */
    public function init()
    {
        Yii::setAlias('@ipos', __DIR__);
        
        $this->controllerNamespace = "izi\\ipos\\controllers";
        
        parent::init();
        Yii::$app->view->theme = new \izi\web\Theme([
            'pathMap' => [
                /**
                 * thiết lập pathmap cho các mục cấp con trước (thư mục có độ sâu lớn nhất phải thiết lập đầu tiên)
                 */
                
        //                 '@dev/views'  =>  '@app/modules/developers3/views',
                
                '@ipos' => [
                    "@app/modules/ipos/v1.1",
                    "@app/modules/ipos/v1.0",
                ],
                
                
                /**
                 * ưu tiên view đầu tiên
                 */
                
                
        //                 '@dev/views' => [
            //                     //"@app/modules/developers/views", // Thư mục mới nhất
            // //                     "@app/modules/developers2/views",
            //                 ],
        //                 '@dev'  =>  "@app/themes/dev"
            ],
            'baseUrl' => "@web/themes/{$this->moduleName}",
            'basePath'=>'@ipos/views',
            'viewPath'=>'@ipos/views'
                
                ]);
        // custom initialization code goes here
        
//         Yii::setAlias('@libs', '/libs');
        
        //         view(Yii::$app->view->theme->getBasePath());
        //         exit;
    }
}
