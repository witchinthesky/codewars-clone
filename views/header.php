
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
<div class="container is-max-widescreen">
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <a class="navbar-item" aria-disabled="true">
            <i class="fas fa-frog fa-2x" style="color: mediumseagreen"></i>
        </a>
        <?php
            if(UserController::user() != false){
                echo "<a class=\"navbar-item\" href='/'>Home</a>
                <a class=\"navbar-item\" href=\"new-test\">Create Test</a>";
            }
        ?>
        <a class="navbar-item" href="stats">Statistic</a>
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <?php
                        if(UserController::user() != false){
                            echo "<a class=\"button is-black\" href=\"user-stats\">
                                       <i class=\"fas fa-user fa-lg\"></i>
                                  </a>
                                  <a class=\"button is-light\" href=\"logout\">Log out</a>";
                        }
                        else {
                            echo "<a class=\"button is-success\" href=\"login\">Log in</a>
                                  <a class=\"button is-success\" href=\"register\">Sign Up</a>";
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>