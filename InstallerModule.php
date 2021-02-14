<?php
namespace yii\easyii;

use Yii;
use yii\web\View;
use yii\base\Application;
use yii\base\BootstrapInterface;

class InstallerModule extends \yii\base\Module implements BootstrapInterface
{
    const VERSION = 0.9;

    public $controllerLayout = '@installer/views/layouts/empty';

    private $_installed;

    public function init()
    {
        parent::init();
    }


    public function bootstrap($app)
    {
        Yii::setAlias('easyii', '@vendor/fxgrow/installer-yii');
    }

    public function renderToolbar()
    {
        $view = Yii::$app->getView();
        echo $view->render('@easyii/views/layouts/frontend-toolbar.php');
    }

    public function getInstalled()
    {
        if ($this->_installed === null) {
            try {
                $this->_installed = Yii::$app->db->createCommand("SHOW TABLES")->query()->count() > 0 ? true : false;
            } catch (\Exception $e) {
                $this->_installed = false;
            }
        }
        return $this->_installed;
    }
}
