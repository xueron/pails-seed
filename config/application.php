<?php
use Phalcon\Di;
use Phalcon\Mvc\Router\Annotations;
use Phalcon\Mvc\View;
use Phalcon\Mvc\View\Engine\Volt;
use Phalcon\Text;
use Phalcon\Loader;

class Application
{
    private $debug = false;
    private $di = null;
    private $root = null;
    private $app_root = null;

    public function __construct($debug = false)
    {
        $this->debug = $debug;
        $this->root = dirname(__DIR__);
        $this->app_root = $this->root . '/app';
        $this->di = new Di\FactoryDefault();
        $this->init();
    }

    public function getAppRoot()
    {
        return $this->app_root;
    }

    public function getLibRoot()
    {
        return $this->root . '/lib';
    }

    public function getLogRoot()
    {
        return $this->root . '/log';
    }

    public function getConfigRoot()
    {
        return $this->root . '/config';
    }

    public function getControllersDir()
    {
        return $this->app_root . '/controllers/';
    }

    public function getHelpersDir()
    {
        return $this->app_root . '/helpers/';
    }

    public function getModelsDir()
    {
        return $this->app_root . '/models/';
    }

    public function getServicesDir()
    {
        return $this->app_root . '/services/';
    }

    public function getWorkersDir()
    {
        return $this->app_root . '/workers/';
    }

    public function getViewsDir()
    {
        return $this->app_root . '/views/';
    }

    public function getValidatorsDir()
    {
        return $this->app_root . '/validators/';
    }

    public function getCommandsDir()
    {
        return $this->app_root . '/commands/';
    }

    private function init()
    {
        // Inject Self
        $this->di->setShared('application', $this);

        // call all _init method
        foreach (get_class_methods($this) as $method) {
            if (substr($method, 0, 5) == '_init') {
                $this->$method();
            }
        }
    }

    private function _initLoader()
    {
        $loader = new Loader();

        //
        $loader->registerNamespaces([
            'App' => $this->getLibRoot(),
            'App\Controller' => $this->getControllersDir(),
            'App\Model' => $this->getModelsDir(),
            'App\Helper' => $this->getHelpersDir(),
            'App\Service' => $this->getServicesDir(),
            'App\Worker' => $this->getWorkersDir(),
            'App\Validation' => $this->getValidatorsDir(),
            'App\Command' => $this->getCommandsDir()
        ]);

        $loader->registerDirs([
            $this->getLibRoot()
        ]);

        $loader->register();
    }

    private function _initService()
    {
        $this->di->setShared('inflector', 'Pails\Util\Inflector');
    }

    private function _initRouter()
    {
        $this->di->setShared('router', function () {
            //
            $router = new Annotations(false);
            $router->setEventsManager($this->di->get('eventsManager'));
            $router->setDefaultNamespace('App\\Controller\\');
            $router->setDefaultController('application');
            $router->setDefaultAction('index');

            //
            $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($this->getControllersDir()), RecursiveIteratorIterator::SELF_FIRST);
            foreach ($iterator as $item) {
                if (Text::endsWith($item, "Controller.php", false)) {
                    $name = str_replace([$this->getControllersDir(), "Controller.php"], "", $item);
                    $name = str_replace("/", "\\", $name);
                    $router->addResource('App\\Controller\\' . $name);
                }
            }

            //
            return $router;
        });
    }

    private function _initConfig()
    {

    }

    private function _initView()
    {
        $this->di->setShared('view', function () {
            $view = new View();
            $view->setViewsDir($this->getViewsDir());
            $view->registerEngines([
                '.volt' => 'volt',
                '.phtml' => 'Phalcon\Mvc\View\Engine\Php'
            ]);
            return $view;
        });
    }

    private function _initVolt()
    {
        $this->di->setShared('volt', function () {
            $volt = new Volt($this->di->get('view'));
            $volt->setOptions([
                'compiledPath' => dirname($this->app_root) . '/tmp/cache/volt/',
                'compiledSeparator' => '_',
                'compileAlways' => $this->debug
            ]);
            $volt->getCompiler()->addExtension(new \Pails\Extension\Volt());
            return $volt;
        });
    }

    private function _initDatabase()
    {
        $this->di->setShared('db', function () {
            return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
                "host" => 'localhost',
                "username" => 'root',
                "password" => '',
                "dbname" => 'dowedo-account',
                'charset' => 'utf8',
            ));
        });
    }

    public function run()
    {
        $app = new \Phalcon\Mvc\Application($this->di);
        $app->handle()->send();
    }
}
