<?php

class TestController
{
    public static function create(){

        if (!isset($_POST['submit'])){
            BaseController::CreateView('header');
            BaseController::CreateView('new-test');
            return;
        }

        $title = trim($_POST['title']);
        $rating = trim($_POST['rating']);
        $level = trim($_POST['level']);
        $author = UserController::user();
        $file_name = "$author-".date("Ymd").".json";

        // save file
        $file_path = "uploads".DIRECTORY_SEPARATOR.$file_name;
        move_uploaded_file($_FILES['question']['tmp_name'], $file_path);

        // connect to db
        $conn = db_connect();

        // insert new test
        $sql = "INSERT INTO tests (title, rating, tags, json, author) VALUES('$title','$rating','$level', '$file_name', '$author')";
        if($conn->query($sql) === TRUE) {
            echo "created";
            header('Location: /');
        }
        else echo "error: $sql - $conn->error";
        $conn->close();

    }

    public static function home(){
        BaseController::createView('header');
        $parameters = array(

        );
        BaseController::createView('test', $parameters);
        echo "<h1>test controller home</h1>";
    }
}