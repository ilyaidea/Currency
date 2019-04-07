<?php
/**
 * * * Summary File ${NAME}
 *
 * Description File ${NAME}
 *
 * @author Faeze Eshaghi
 * Date: 2/14/2019
 * Time: 3:47 AM
 * @version 1.0.0
 */
namespace Modules\Main;

use Phalcon\Events\Manager;
use Phalcon\Loader;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\ModuleDefinitionInterface;
use Phalcon\Mvc\View;

class Module implements ModuleDefinitionInterface
{

    /**
     * Registers an autoloader related to the module
     *
     * @param \Phalcon\DiInterface $di
     */
    public function registerAutoloaders(\Phalcon\DiInterface $di = null)
    {
        $loader = new Loader();

        $loader->registerNamespaces([
            'Modules\Main\Controllers' => MODULES_PATH. '/main/controllers/',
            'Modules\Main\Models'      => MODULES_PATH. '/main/models/'
        ])->register();
    }

    /**
     * Registers services related to the module
     *
     * @param \Phalcon\DiInterface $di
     */
    public function registerServices(\Phalcon\DiInterface $di)
    {
        $di->set('dispatcher', function () {
            $dispatcher = new Dispatcher();

            $eventManager = new Manager();

            $dispatcher->setEventsManager($eventManager);
            $dispatcher->setDefaultNamespace('Modules\Main\Controllers\\');

            return $dispatcher;
        });

        $di->set('view', function () {
            $view = new View();
            $view->setViewsDir(MODULES_PATH. 'main/views/');
            return $view;
        });
    }
}