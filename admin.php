<?php
// session_start();
// if(isset($_SESSION['uid']))
// {
//     header('location:dashboard.php');
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
   

    
</head>
<body>


<style>

    /* Reset some basic styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

h2 {
    margin-bottom: 20px;
    color: #333;
}

.input-group {
    margin-bottom: 15px;
    text-align: left;
}

label {
    display: block;
    margin-bottom: 5px;
    font-size: 14px;
    color: #333;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #0056b3;
}


</style>
    <div class="login-container">
        <h2>Admin</h2>
        <form  method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <button type="submit" name="login">Login</button>
            </div>
        </form>
    </div>
</body>
</html>

<?php
 include('config.php');

 if(isset($_POST['login']))

 {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    $run = mysqli_query($conn,$qry);
    $row = mysqli_num_rows($run);
    if($row <1)
    {
        ?>
        <script >
         alert('Username or Password not match !!');
        
        window.open('admin.php','_self');
        </script>
        <?php

    }
    else
    {
       $data=mysqli_fetch_assoc($run);

       $id=$data['id'];
    
    //    session_start();
       $_SESSION['uid']=$id;
       header('location:dashboard.php');

    }
 }
?>
