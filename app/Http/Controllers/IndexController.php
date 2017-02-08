<?php
/**
 * IndexController.php
 *
 */
namespace App\Http\Controllers;
use App\Models\User;

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
     * @Route("/user")
     */
    public function userAction()
    {
        var_dump(User::find());
    }

    /**
     * @Route("/notfound")
     */
    public function notfoundAction()
    {

    }
}
