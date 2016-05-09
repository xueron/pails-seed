<?php
namespace App\Controller;

use App\Model\Account;
use Phalcon\Mvc\Controller;

class ApplicationController extends Controller
{

    public function indexAction()
    {
        var_dump(Account::findFirst());
        exit();
    }

    /**
     * @Route("/test")
     * @return \Phalcon\Http\Response|\Phalcon\Http\ResponseInterface
     */
    public function testAction()
    {
        return $this->response->setJsonContent(['hi']);
    }
}
