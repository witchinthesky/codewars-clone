<?php 

Route::set('index.php', function(){
    SearchController::CreateView('home');
});

Route::set('search', function(){
    SearchController::Search();
});

Route::set('artist', function(){
   SearchController::ShowArtist($_GET["id"]);
});