<?php
/**
 * IndexController.php
 *
 */
namespace App\Http\Controllers;

/**
 * Class IndexController
 * @package App\Controllers
 * @RoutePrefix("/")
 */
class IndexController extends ControllerBase
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {

    }

    public function notfoundAction()
    {

    }
}
