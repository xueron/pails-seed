<?php
namespace App\Http\Controllers;

/**
 * Class IndexController
 * @package App\Controllers
 */
class IndexController extends ControllerBase
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $this->view->setVar('di', $this->di);
    }

    /**
     * @Route("/notfound")
     */
    public function notfoundAction()
    {

    }
}
