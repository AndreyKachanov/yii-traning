<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 09.01.18
 * Time: 8:38
 */
namespace app\components;
use yii\base\Widget;

class MenuWidget extends  Widget
{
    public $tpl;

    public function init()
    {
        parent::init();

        if ($this->tpl === null)
            $this->tpl = 'menu';

        $this->tpl .= '.php';
    }

    public function run()
    {
        return $this->tpl;
    }

}