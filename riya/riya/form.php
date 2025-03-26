<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <form method="post">
        <div class="container">
          <h1 class="heading">Register Here</h1>
          <p>Please fill in this form to create an account.</p>
      
              <label for="email"><b>Username</b></label>
            <input type="text" name="username" placeholder="Enter Username" required>
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
          
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
          <label for="psw"><b>If Register As A Admin Select Yes Else Select No</b></label>
          <select name="admin" id="" required>
            <option selected hidden value="">Select</option>
            <!-- <option value="Yes">Yes</option> -->
            <option value="No">No</option>
          </select>
          <br>
           <label for="ph"><b>Phone Number</b></label>
           <br>
           <select name="phoneCode" >
            <option selected hidden value="">Select</option>
            <option value="66">+91</option>
            <option value="66">+92</option>
            <option value="66">+1</option>
           </select>
           <input type="phone" name="phone" placeholder="Enter Phone Number" required>
      
          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
      
          <div class="clearfix">
      
            <button type="submit" class="btn" name="reg">Register</button>
          </div>
        </div>
      </form>
      <form action="" method="post">
        <button class="bak" onclick="Back()" name="back">Back</button>
      </form>

  
</body>
</html>
<?php
   
   //  $servername = "localhost:3307";
   //  $username = "root";
   //  $password = "";
   //  $dbname = "admin";
    
   //  $conn = mysqli_connect($servername,$username,$password,$dbname);
   if(isset($_POST['reg']))
   {
      
        $pname   = $_POST['username'];
        $email   = $_POST['email'];
        $pass   = $_POST['psw'];
        $admin   = $_POST['admin'];
        $phone   = $_POST['phone'];

        $query = "INSERT INTO Reg_Details(`User_Name`,`Email`,`Password`,`Admin`,`Phone`,`Account_Number`) values('$pname' , '$email' ,'$pass','$admin','$phone','91$phone')";
 
        $data = mysqli_query($conn,$query);
 
        if($data == TRUE)
        {
          echo "<script>alert('Register Successfully your phone number is your account number it may take some times to accept application ,Please click back button to go to the home page.')</script>";
 
          // header('location:index.php');
        }
        else
        {
          echo "<script>alert('Failed')</script>";
        }

            
        
      }

   
  
 if(isset($_POST['back']))
 {
  header('location:index.php');
 }
     ?>