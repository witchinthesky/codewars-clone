<?php 

Route::set('index.php', function(){

    if (UserController::user() != false)
        TestController::home();
    else
        UserController::login();

});

Route::set('login', function(){

    UserController::login();
});

Route::set('register', function(){

    UserController::register();
});

Route::set('logout', function(){

    UserController::logout();
});

Route::set('new-test', function(){

    TestController::create();
});

Route::set('user-stats', function(){

    UserController::get_statistic();
});