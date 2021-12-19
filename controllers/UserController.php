<?php 

    declare(strict_types=1);

    class UserController extends BaseController{

        public static function login(){

            if (!isset($_POST['submit'])) {
                BaseController::createView('header');
                BaseController::createView('login');
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
                BaseController::createView('header');
                BaseController::createView('register');
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

        public static function get_statistic(){

            BaseController::createView('header');

            $user = UserController::user();

            $conn = db_connect();

            // count all tests
            $sql = "SELECT * FROM tests";
            $all_test_num = $conn->query($sql)->num_rows;

            // get count test autor
            $sql = "SELECT * FROM tests WHERE author='$user'";
            $created = $conn->query($sql)->num_rows;

            $sql = "SELECT tests FROM users WHERE name='$user'";
            $all_test = $conn->query($sql)->fetch_array()['tests'];

            $sql = "SELECT successtest FROM users WHERE name='$user'";
            $success = $conn->query($sql)->fetch_array()['successtest'];
            $wrong = $all_test - $success;

            // parameters
            $parametres = array(
                'success' => $success,
                'created' => $created,
                'created_max' => $all_test_num,
                'wrong' => $wrong,
                'tests_max' => $all_test,
            );

            BaseController::createView('user-stats', $parametres);

        }
    }