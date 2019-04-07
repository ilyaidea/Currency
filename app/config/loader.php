<?php
// ** Register AutoLoaders
$loader = new \Phalcon\Loader();
$loader->registerNamespaces(
    [
        'App' => APP_PATH,
        'Lib' => $this->config->app->libraryDir
    ])->register();
