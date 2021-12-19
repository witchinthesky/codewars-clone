<?php 

    declare(strict_types=1);

    class BaseController{

        /* 
        *   Create View Function 
        *   @param $view_name - name of view 
        *   @param $argc - 
        *   @return void 
        */

        public static function createView(string $view_name, array $data = []){

            if(file_exists("./views/$view_name.php")){
                require("./views/$view_name.php");
            }
        }

       /** 
        * Simple Templating Function
        * 
        * @param $template_name - name of rendering view
        * @param $data - Associative array of variables to pass to the view file.
        * @return void
        */

        public static function createTemplate(string $template_name, array $data = [])
        {
            if(file_exists("./views/templates/$template_name.php")){
                require("./views/templates/$template_name.php");
            }
        }

    }