<?php

declare(strict_types=1);

class Route {

    public static $validRoutes = array();
    public static function set($route, $function){

        self::$validRoutes[] = $route;
        if($_GET['url'] == $route){
            $function->__invoke();
        }

        //  print_r($_GET);

    }

}