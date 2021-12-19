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
           // echo "created";
            header('Location: /');
        }
        else echo "error: $sql - $conn->error";
        $conn->close();

    }

    public static function home(){
        BaseController::createView('header');
        $conn = db_connect();

        // count all tests
        $sql = "SELECT id, author, tags, title, rating FROM tests";

        $tests = $conn->query($sql);
        $tests = $tests->fetch_all(MYSQLI_ASSOC);

        $conn->close();
        BaseController::createView('home', $tests);
    }

    public static function quiz($id){

        BaseController::createView('header');
        $conn = db_connect();

        // count all tests
        $sql = "SELECT json FROM tests WHERE id='$id'";

        $result = $conn->query($sql);
        $result= $result->fetch_array(MYSQLI_ASSOC);
        $json_path = $result['json'];

        if(!file_exists("uploads".DIRECTORY_SEPARATOR.$json_path)){
            return;
        }

        $json = file_get_contents("uploads".DIRECTORY_SEPARATOR.$json_path);
        $json = json_decode($json, true);

        BaseController::createView('quiz', $json);

        $conn->close();
    }
}