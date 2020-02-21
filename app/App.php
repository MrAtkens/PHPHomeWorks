<?php

use Klein\Klein;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

class App
{
    public function __construct()
    {
        $this->initErrorHandler();
        $this->initRouter();
    }

    private function initRouter(){
        $router = new Klein();

        $routesBase = config('app.routes.base');
        $dir = path($routesBase);

        if(!file_exists($dir))
            mkdir($dir);

        $list = scandir($dir);
        $list = array_diff($list, ['.', '..']);

        foreach($list as $file){
            $path = path($routesBase ,$file);
            $info = pathinfo($path);

            if($info['extension'] == 'php')
                include_once $path;
        }

        $router->dispatch();
    }

    private function initErrorHandler(){
        $debug = config('app.debug') === true;

        ini_set('display_errors', $debug);
        error_reporting((E_ALL ^ E_NOTICE) * $debug);

        if($debug){
            $whoops = new Run();
            $whoops->pushHandler(new PrettyPageHandler());
            $whoops->register();
        }
    }
}