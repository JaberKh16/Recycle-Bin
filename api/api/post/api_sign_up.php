<?php
    // Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

    include_once '../../config/Database.php';
    include_once '../../model/sign_up_model.php';

    // Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    // Instantiate blog post object
    $post = new sign_up_model($db);

    // Get raw posted data
    $data = json_decode(file_get_contents("php://input"));

    if (isset($_POST["email"], $_POST['pass'], $_POST['name'])){
        $email = $_POST["email"];
        $password = $_POST["pass"];
        $name = $_POST["name"];

        if ($post->signUP($email, $password, $name)) {
            // echo json_encode(
            //     array('signUp' => $email)
            // );
            session_start();
            $_SESSION["email"] = $email;

          header("location: ../../../HomePage/homepage.php");
        } else {
            // echo json_encode(
            //     array('signUp' => 'failed')
            // );
            //header("location: ../../browse_file/sign_up.php");
            echo "failed";
        }
    }else{
        echo json_encode(
            array('signUp' => 'failed')
        );
    }
