<?php
/**
 * ApiControllerBase.php
 *
 */
namespace App\Http\Controllers\Api;

use Pails\Mvc\Controller;

abstract class ApiControllerBase extends Controller
{
    public function beforeExecuteRoute()
    {
        $this->response->setHeader('Access-Control-Allow-Headers', 'Origin, X-Requested-With, Content-Type, Accept');
        $this->response->setHeader('Access-Control-Allow-Origin', '*');
        $this->response->setHeader('Access-Control-Allow-Methods', 'POST, GET, OPTIONS');
    }
}
