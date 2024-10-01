<?php

include('config.php');

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query="select * from users where email ='$email' and password ='$password'";

    $result= mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    $count = mysqli_num_rows($result);
    if($count==1){
        header("location:products.php");
    }else{
        ?>
        <script>
            alert('username and password are incorrect');
        </script>
        <?php
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="stayles.css">
</head>
<body>
    <style>
        

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
}
section {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100vh;
    background: url('image/ww.jpg') no-repeat;
    background-size: cover;
    background-position: center;
    animation: animateBg 5s linear infinite;
}
@keyframes animateBg {
    100% {
        filter: hue-rotate(360deg);
    }
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: black;
}
.login-box{
    position: relative;
    width: 400px;
    height: 450px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255 .5);
    border-radius: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(15px);
}
h2{
    font-size: 2em;
    color: #fff;
    text-align: center;
}
.input-box{
    position: relative;
    width: 310px;
    margin: 30px 0;
    border-bottom: 2px solid #fff;

}
.input-box label{
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    font-size: 1em;
    color: #fff;
    pointer-events: none;
    transition: .5s;
}
.input-box input:focus~label,
.input-box input:valid~label {
    top: -5px;
}
.input-box input{
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    color: #fff;
    padding: 0 35px 0 5px;
}
.input-box .icon{
    position: absolute;
    right: 8px;
    color: #fff;
    font-size: 1rem;
    line-height: 57px;
    
}
.remember-forgot{
    margin: -15px 0 15px;
    font-size: .9em;
    color: #fff;
    display: flex;
    justify-content: space-between;
}
.remember-forgot label input {
    margin-right: 3px;
}
.remember-forgot a{
    color: #fff;
    text-decoration: none;
}
.remember-forgot a:hover {
    text-decoration: underline;
}
button{
    width:100%;
    height: 40px;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    font-size: 1em;
    color: #000;
    font-weight: 500;
}
.register-link{
    font-size: .9em;
    color: #fff;
    text-align: center;
    margin: 25px 0 10px;
}
.register-link p a{
    color: #fff;
    text-decoration: none;
    font-weight: 600;
}
.register-link p a:hover{
    text-decoration: underline;
}
@media (max-width: 360px) {
    .login-box {
        width: 100%;
        height: 100vh;
        border: none;
        border-radius: 0;

    }
    .input-box{
        width: 290px;
    }
}
/* .input-box i{
    color: #fff;
    margin-left:280px;
    margin-bottom:110px;
    
} */


    </style>
<section>
    <div class="login-box">
        <form action="#" method="post">
            <h2>Login</h2>
            <div class="input-box">
                <span class="icon">
                    <ion-icon class="mail"></ion-icon>
                </span>
                <input type="email" name="email"required>
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon class=" fa-solid fa-eye-slash" id="eyeicon"></ion-icon>
                </span>
                <!-- <i class="fa-solid fa-eye-slash" id="eyeicon"></i> -->
                <input type="password" name="password"  id="password" required>
                <!-- <i class="fa-solid fa-eye-slash" id="eyeicon"></i> -->
                <label>Password</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot Password</a>
            </div>
            <button type="submit" name="submit">Login</button>
            <div class="register-link">
                <p>Don't have an account <a href="#">Register</a></p>
            </div>

        </form>
    </div>
</section>
    <!-- <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> -->
<script>

let eyeicon = document.getElementById("eyeicon");
let password = document.getElementById("password");

eyeicon.onclick = function(){
if(password.type == "password"){
password.type = "text";
}else{
password.type = "password";
}
}

</script>
</body>
</html>
