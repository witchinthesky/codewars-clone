<div class="container is-max-widescreen">
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <a class="navbar-item" aria-disabled="true">
            <i class="fas fa-frog fa-2x" style="color: mediumseagreen"></i>
        </a>
        <?php
            if(UserController::user() != false){
                echo "<a class=\"navbar-item\" href=\"home\">Home</a>
                <a class=\"navbar-item\" href=\"new-test\">Create Test</a>";
            }
        ?>
        <a class="navbar-item" href="stats">Statistic</a>
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <?php
                        if(UserController::user() != false){
                            echo "<a class=\"button is-black\" href=\"stats\">
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