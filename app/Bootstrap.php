<?php
/**
 * * * Summary File ${NAME}
 *
 * Description File ${NAME}
 *
 * @author Faeze Eshaghi
 * Date: 2/5/2019
 * Time: 3:18 AM
 * @version 1.0.0
 */
namespace App;

use Phalcon\Exception;
use Phalcon\Mvc\Application;

class Bootstrap
{
    private $config;

    public function __construct()
    {
        $this->config = include_once APP_PATH. 'config/config.php';
    }

    public function run()
    {
        $this->registerAutoLoaders();

        $services = new Services($this->config);
        $application = new Application($services);

        $this->registerModules($application);

        try
        {
            $response = $application->handle()->send();
        }
        catch (Exception $e)
        {
            echo 'Exception: ', $e->getMessage();
        }
    }

    public function registerAutoLoaders()
    {
        include_once APP_PATH. 'config/loader.php';
    }

    protected function registerModules(Application $application)
    {
        $application->registerModules(
            [
                'main' => [
                    'className' => 'Modules\Main\Module',
                    'path'      => APP_PATH. 'modules/main/Module.php'
                ]
            ]
        );
    }
}