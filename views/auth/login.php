<?php
    if(isset($_SESSION['user_id'])){
        header ("location: ".BASE_URL."/profile");
    }

    if (isset($_POST) && !empty($_POST)) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $errors = [];

        if($email == ''){
            $errors[] = 'Email is required.';
        }

        if($password == ''){
            $errors[] = 'Password is required.';
        }

        if(empty($errors)){
            $password = md5($password);
            $check_sql = "SELECT * FROM users WHERE email='$email' AND password = '$password'";
            $result = mysqli_query($connection, $check_sql);

            if(mysqli_num_rows($result) > 0){
                $user = mysqli_fetch_assoc($result);
                $_SESSION['user_id'] = $user['id'];

                header ("location: ".BASE_URL."/profile"); 
            }else{
                $errors[] = "Please enter valid credentials.";
            }

        }

        foreach($errors as $error){
            echo "<p class='text-danger'> $error </p>";
        }
    }
?>
<h2 class="mt-4">Login</h2><hr/>

<div class="form">
    <form action="" method="post">
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
