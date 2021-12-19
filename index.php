<!---->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TestWars</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
          crossorigin="anonymous">
</head>
<body>

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

    </body>
</html>

