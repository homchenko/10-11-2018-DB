
<?php

ob_start();

include "includes/db.php"
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_login = "SELECT FROM users WHERE username = '$username";
    $login_query = mysqli_query($connection, $sql_login);
    foreach($login_query as $item){
        $db_username = $item['username'];
        $db_password = $item['user_password'];
    }
    if($username !== $db_username && $password !== $db_password){
        header("Location: /index.php", TRUE);
    } elseif ($username == $db_username && $password == $db_password){
        $_SESSION['username'] = $username;
        header("Location: /admin/index.php", TRUE);
    }
    ob_end_flush();
}

?>