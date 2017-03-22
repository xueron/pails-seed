<?php
/**
 * IndexController
 */
namespace App\Http\Controllers;

use Pails\Exception;

/**
 * Class IndexController
 *
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
        throw Exception::clientException('Resource Not Found', 404);
    }
}

