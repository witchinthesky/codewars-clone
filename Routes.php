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

Route::set('quiz', function (){
   TestController::quiz($_GET['id']);
});

Route::set('result', function (){
    TestController::result($_GET['id']);
});

Route::set('stats', function(){
    TestController::statistic();
});

Route::set('getstat.json', function (){
   echo file_get_contents("statistic/stats.json");
});
