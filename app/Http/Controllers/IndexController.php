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
    }

    /**
     * @Route("/notfound")
     */
    public function notfoundAction()
    {
    }
}
