<?php
/**
 * * * Summary File ${NAME}
 *
 * Description File ${NAME}
 *
 * @author Faeze Eshaghi
 * Date: 2/5/2019
 * Time: 4:24 AM
 * @version 1.0.0
 */
namespace App;

use Lib\Di\FactoryDefault;
use Phalcon\Mvc\Router;
use Phalcon\Mvc\View;

class Services extends FactoryDefault
{
    protected function initUrl()
    {
        $url = new \Phalcon\Mvc\Url();
        $url->setBaseUri($this->getShared('config')->app->baseUri);
        $url->setStaticBaseUri($this->getShared('config')->app->baseUri);
        $url->setBasePath($this->getShared('config')->app->baseUri);
        return $url;
    }

    protected function initSharedView()
    {
        $view = new View();
        $view->setViewsDir(APP_PATH . 'views/');
        return $view;
    }

    protected function initRouter()
    {
        $router = new Router();

        $router->setDefaultModule('main');
        $router->add('/:module/:controller/:action/:params', [
            'module' => 1,
            'controller' => 2,
            'action' => 3,
            'params' => 4
        ])->setName('default_route');

        return $router;
    }

}