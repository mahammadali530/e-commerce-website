<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
     <title>Registration Form</title>
 
</head>
<body>
    <style>
        
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
}


body {
    font-family: Arial, sans-serif;

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



.form-group span{
    color: #000;
    font-size: 2rem;
    padding-left: 2rem;
    margin-bottom: -13rem;

}
 .icon{
     /* position: absolute;  */
    margin-left:20rem;
    color: #000;
    font-size: 1rem;
    margin-bottom: 40px;
    /* line-height: -7px; */
    margin-top: -1.7rem;
    
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
                <input type="text"  placeholder=" Enter Yor username" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email"  placeholder="Enter yor Email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="nhone number">Phone Number</label>
                <input type="password"placeholder="Enter yor Number" id="Phone Number" name="Pnumber" required>
            </div>
            <div class="form-group">
                 <label for="password">Password</label> 
                
              <input src="image/eye.png" type="password" placeholder="Enter Yor Pasword" id="password" name="password" required  >
              <div class="icon">
                    <i class="fa-solid fa-eye-slash" id="eyeicon"></i>
                    </div>
             <!-- <i class="fa-solid fa-eye-slash" id="eyeicon"></i> -->

                 <!-- <img src="image/eye.png" id="eyeicon" >  -->
            </div> 


            <div class="form-group">
                <button type="submit" name="submit">Register</button>
            </div>
        </form>
    </div>
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
<?php
if(isset($_POST['submit'])){
    $name=$_POST['username'];
    $email=$_POST['email'];
    $pnumber=$_POST['Pnumber'];
    $password=$_POST['password'];

 
 
    include("./config.php");

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