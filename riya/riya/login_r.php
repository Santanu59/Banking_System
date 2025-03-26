<?php include("db.php");
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body class="body">
    <div class="form">
        <div class="top">
          <p>Register Login</p>
        </div>
        <div class="input">
            <form  method="POST">
                <label for="">User Name: <span>*</span></label>
                <input type="email" name="username" required class="user" >
                <label for="">Password: <span>*</span></label>
                <input type="password" name="password" required class="pass">
                <a href="">Forget Password?</a>
                <input type="Submit" value="login" class="btn" name="login" >
            </form>
        </div>
    </div>
    <form action="" method="post">
        <button class="bak" onclick="Back()" name="back">Back</button>
      </form>
    <script>
        let user = document.querySelector('.user');
        let pass = document.querySelector('.pass');
        pass="sanG321@";
        if(pass.value){
            console.log(pass.value.length);
        //    alert("must have 8 caractors") ;
        }
    </script>
</body>
</html>
<?php

if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pwd = $_POST['password'];
    
    $query = "SELECT * FROM account_details where Email = '$user' && Password = '$pwd' ";
    $data = mysqli_query($conn, $query);
    
    $total = mysqli_num_rows($data);
//    echo $total;
   if ($total == 1)
   {
    echo "<script>alert('Login Successfully')</script>";
    $_SESSION['user_n'] = $user;
    header('location:register.php');
   }
   else{
     echo "<script>alert('Login faild')</script>";
   }

}

if(isset($_POST['back']))
{
 header('location:index.php');
}

ob_end_flush();
?>