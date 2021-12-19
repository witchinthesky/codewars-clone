<?php 

    declare(strict_types=1);

    class UserController extends BaseController{

        public static function login(){

            if (!isset($_POST['submit'])) {
                BaseController::CreateView('header');
                BaseController::CreateView('login');
                //   echo 'just view';
                return;
            }

            $email = trim($_POST['email']);
            $password = trim($_POST['password']);

            // TODO catch error

            $conn = db_connect();
            $sql = "SELECT name FROM users WHERE email='$email' AND password='$password'";

            $result = $conn->query($sql);

            if($conn->query($sql) === False)
                echo "error: $sql - $conn->error";

            if($result->num_rows == 1) {
                // echo "logined";
                $name = $result->fetch_array(MYSQLI_ASSOC);
                $_SESSION['name'] = $name['name'];
                header('Location: /');
            }
            else echo "error: $sql - $conn->error";

            $conn->close();

        }

        public static function register(){
            if (!isset($_POST['submit'])){
                BaseController::CreateView('header');
                BaseController::CreateView('register');
                return;
            }

            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);

            // TODO catch error

            $conn = db_connect();

            $sql = "SELECT name FROM users WHERE email='$email'";
            $result = $conn->query($sql);
            if($result->num_rows == 1)
                return;
            $sql = "INSERT INTO users (name, email, password) VALUES('$name','$email','$password')";
            if($conn->query($sql) === TRUE) {
                // echo "new user created successfully";
                header('Location: /');
            }
            else echo "error: $sql - $conn->error";
            $conn->close();
        }

        public static function logout(){

            // :TODO create logic
            unset($_SESSION['name']);
            header('Location: /');
        }


        /*
         * @param void
         * @return user if logged, false if no
         */

        public static function user(){
            return isset($_SESSION['name']) ? $_SESSION['name'] : false;
        }
    }