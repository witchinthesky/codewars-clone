<?php

        function autoload($class_name){

            if(file_exists('./classes/'.$class_name.'.php')){
                require_once './classes/'.$class_name.'.php';
            }
            else if(file_exists('./controllers/'.$class_name.'.php')){
                require_once './controllers/'.$class_name.'.php';
            }
            require_once './classes/function.php';
        }
        spl_autoload_register('autoload');

        session_start();
        ?>

        <?php require_once('Routes.php'); ?>


