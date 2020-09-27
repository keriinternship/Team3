<?php 
    if(session_id()=== ""){
        session_start();
    }else{
        $_SESSION['username']='username';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public">
    <link rel="stylesheet" href="./public/css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="loginContainer">
            <div class="loginImage">
            </div>
            <div class="loginForm">
                <form action="header.php" method="post">
                    <div class="loginUser loginField">
                        <input type="text" name="username" id="username" class="inputField " placeholder="nhập vào username">
                        <span class="mess"></span>
                    </div>
                    <div class="loginPass loginField">
                    <input type="password" name="password" id="password" class="inputField" placeholder="nhập vào pass" autocomplete="off">
                    <span class="mess"></span>
                    </div>
                    <button type="submit" class="btn-lg">Login</button>
                </form>
            </div>
        </div>
    </div>
   <script src="./public/js/login.js"></script>
</body>
</html>