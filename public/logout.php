<?php 


    
    session_start();

    // clear $_SESSION array
    session_unset();

    // delete session data on the server
    session_destroy();

    // // ensure client is sent a new session cookie
    // session_regenerate_id();


    header("Location: http://codeup.dev/login.php");



 ?>