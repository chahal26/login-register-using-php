<?php
    if(!isset($_SESSION['user_id'])){
        header ("location: ".BASE_URL."/login");
    }
    $user_id = $_SESSION['user_id'];
    $user_sql = "SELECT name, email, phone FROM users WHERE id='$user_id'";
    $result = mysqli_query($connection, $user_sql);

    if(mysqli_num_rows($result) > 0){
        $user = mysqli_fetch_assoc($result);
    }else{
        header ("location: ".BASE_URL."/login");
    }
?>
<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            <h4>User Profile</h4>
        </div>
        <div class="card-body">
            <p><b>Name:</b> <?=$user['name']?> </p>
            <p><b>Email:</b> <?=$user['email']?> </p>
            <p><b>Phone:</b> <?=$user['phone']?> </p>
        </div>
    </div>
</div>