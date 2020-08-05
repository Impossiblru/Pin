<?php
    include 'config.php';

    session_start( );
    $user = $_POST['username'];
    $password = $_POST['password'];

    // check if user exist
        $query= "SELECT * FROM users WHERE username = '$user' limit 1 ";

        $results = mysqli_query($conn, $query);
        $user_submit = mysqli_fetch_assoc($results);
        if(!$user_submit ){
            mysqli_close($conn);
            session_destroy();
            Header(" Location: login.php ");
            die();
        }

    // if user exist check if password is valid
        if($user_submit['password']!= $password){
            mysqli_close($conn);
            Header("Location:login.php");
            session_destroy();
            die();

        }
        $_SESSION['username'] = $user ;
        Header("Location:Indexaccount.php");
        mysqli_close($conn);
?>