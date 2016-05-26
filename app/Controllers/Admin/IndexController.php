<?php
namespace App\Controller\Admin;
use App\Controller\ApplicationController;

/**
 * Created by PhpStorm.
 * User: nishurong
 * Date: 16/4/15
 * Time: 下午3:11
 */
class IndexController extends ApplicationController
{
    /**
     * @Route("/admin/test")
     */
    public function indexAction()
    {
        var_dump($this->dispatcher);
        exit;
        return $this->response->setJsonContent([$this->dispatcher->getControllerName(), $this->dispatcher->getActionName()]);
    }

} // End IndexController
