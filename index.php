<!---->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Searcher</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <style>
        html{
            background-color: whitesmoke;
        }
        body{
            background-color: whitesmoke;
            padding: 20px 250px 20px 300px;
            font-family: Arial;
            box-shadow: dimgrey;
        }
        h1{
            font-family: "Arial Black";
            color: black;
            font-size: 22px;
        }
        .tile {
            display: flex;
            align-items: center;
        }
    </style>
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
        }
        spl_autoload_register('autoload');

        if(!isset($_SESSION['session'])){
            $session = new Session();
            $_SESSION['session'] = $session;
        }
        ?>

        <?php
        require_once('Routes.php');

        ?>
    </body>
</html>

