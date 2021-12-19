<?php

class TestController
{
    public static function create(){

        if (!isset($_POST['submit'])){
            BaseController::CreateView('header');
            BaseController::CreateView('new-test');
        }
    }

    public static function home(){
        BaseController::createView('header');
        $parameters = array(

        );
        BaseController::createView('test', $parameters);
        echo "<h1>test controller home</h1>";
    }
}