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

Route::set('getstat', function (){
   $json = json_decode(file_get_contents("statistic/stats.json"));
   $responce = array();
   foreach($json as $item){
       foreach($item as $key => $value){
           $responce[$key][] = $value == null ? 0 : $value;
       }
   }
   echo json_encode($responce);
});