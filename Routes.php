<?php 

Route::set('index.php', function(){
    echo $_SESSION['name'];
    if (UserController::user() != false)
        TestController::home();
    else
        UserController::login();

});

Route::set('login', function(){
    echo $_SESSION['name'];
    UserController::login();
});

Route::set('register', function(){
    echo $_SESSION['name'];
    UserController::register();
});

Route::set('logout', function(){
    echo $_SESSION['name'];
    UserController::logout();
});

Route::set('new-test', function(){
    echo $_SESSION['name'];
    TestController::create();
});