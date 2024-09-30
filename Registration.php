<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
 <!-- Link to external CSS -->
</head>
<body>
    <style>
        /* Basic reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
}

/* Body and container */
body {
    font-family: Arial, sans-serif;
    /* background-color: #f2f2f2; */
    background: url(image/qq.jpg);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-size: cover;
    animation: animateBg 4s linear infinite;
}
@keyframes animateBg {
    100% {
        filter: hue-rotate(360deg);
    }

}

.container {
    background-color: #FFF5EE;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    border: 2px solid rgba(255, 255, 255 .5);
    max-width: 400px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 24px;
}

/* Form styling */
form .form-group {
    margin-bottom: 15px;
}

form label {
    display: block;
    font-size: 14px;
    margin-bottom: 5px;
    color: #333;
}

form input {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

form input:focus {
    border-color: #007BFF;
    outline: none;
}

button {
    width: 100%;
    padding: 10px;
    font-size: 18px;
    color: #000;
    background-color: #C3B1E1;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-family: serif;
}

button:hover {
    background-color: #D8BFD8;
}

    </style>
    <div class="container">
        <h2>Registration Form</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="nhone number">Phone Number</label>
                <input type="password" id="Phone Number" name="Pnumber" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <button type="submit" name="submit">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $name=$_POST['username'];
    $email=$_POST['email'];
    $pnumber=$_POST['Pnumber'];
    $password=$_POST['password'];

 
 
    include("./config.php");
    // $student=$conn->prepare("
    // INSERT INTO `students` (`id`,`name`,`corse`,`batch`,`city`,`year`) 
    // VALUES (NULL, '$name', '$corse', '$batch', '$city', '$year')
    // ");
     $student=$conn->prepare("INSERT INTO `users` (`id`, `username`, `email`, `number`, `password`) VALUES (NULL, '$name', '$email', '$pnumber', '$password')");
    $result =$student->execute();
    header('location:login.php');
//     if($result){
//         echo "data insert";
//     }else{
//         echo "operation failed";
//     }
 }

?>