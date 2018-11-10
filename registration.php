<?php
    include_once "includes/db.php";
    include_once "includes/header.php";
    include_once "includes/navigation.php";
?>
<div class="container">
<div class="row">
    <div class="col-sm-12">
        <?php
            if (isset($_POST['submit'])) {

                $username = $_POST['username'];
                $user_password = $_POST['user_password'];
                $user_firstname = $_POST['user_firstname'];
                $user_lastname = $_POST['user_lastname'];
                $user_email = $_POST['user_email'];
                $user_image = $_POST['user_image'];
                $user_role = $_POST['user_role'];
                $randSalt = $_POST['randSalt'];

                $sql_insert_users = "INSERT INTO users(username, user_password, user_firstname, user_lastname, user_email, user_image, user_role, randSalt) VALUES('$username', '$user_password', '$user_firstname', '$user_lastname', '$user_email', '$user_image', 1, '1')";
                $result_inserting_users = mysqli_query($connection, $sql_insert_users);
                    if (!$result_inserting_users) {
                        die("Запрос не удался");
                    }
                }

                    ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="users">user_id</label>
                            <input type="text" name="user_id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="users">username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="users">user_password</label>
                            <input type="password" name="user_password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="users">user_firstname</label>
                            <input type="text" name="user_firstname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="users">user_lastname</label>
                            <input type="text" name="user_lastname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="users">user_email</label>
                            <input type="text" name="user_email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="users">user_image</label>
                            <input type="text" name="user_image" class="form-control">
                        </div>
                       
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Зарегистрироваться">
                        </div>
                    </form>
                </div>
</div>