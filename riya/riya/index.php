<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Banking System</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Modak&display=swap" rel="stylesheet">
<style>
    /* Inline styles for preview */
   
   
</style>


<body>
    <div class="container">
    <form action="" method="post">
        <!-- Welcome Screen -->
        <div class="section active" id="welcomeScreen">
            <h1>Welcome to Digital Bank</h1>
            <p class="subtext">Effortlessly manage your finances.</p>
            <div class="button-group">

                    <button class="btn primary" onclick="Register()" name="create" value="create" type="submit">Create Account</button>
                    <button class="btn secondary" onclick="Redirect()" name="Reg" value="reg" type="submit">Register Login</button>
                    <button class="btn admin" onclick="Admin()" name="admin" value="admin" type="submit">Admin Login</button>

                </div>
    </form>
    </div>
         

     
 
</body>

</html>
<?php
   

  if(isset($_POST['create']))
   {
    header('location:form.php');
   }
   elseif(isset($_POST['Reg'])){
    header('location:login_r.php');
   }elseif(isset($_POST['admin'])){
    header('location:login_a.php');
   }

 
 
 ?>