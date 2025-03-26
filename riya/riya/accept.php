<?php
include("db.php");
ob_start();
session_start();
$query = "SELECT * FROM Reg_Details ";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
// $q = "SELECT * FROM account_details ";
// $d = mysqli_query($conn, $q);
// $t = mysqli_num_rows($d);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accept Account </title>
</head>
<style>
    body{
      background-image: url("./pic/admin.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      
      /* background-position: center; */
      background-color: #cccccc;
      scroll-behavior: smooth;
      opacity: 40;
      }
      .header{
       width: 99%;
       height: 7vh;
       opacity: 0.9;
       background-color: rgb(40, 38, 38);
       padding: 6px;
       display: flex;
       align-items: center;
       /* flex-direction: row; */
       justify-content: space-between;
   
       gap: 5px;
    }
    .con{
        color: white;
        

    }
    .lg{
        background-color: red;
        padding: 5px 25px;
        /* margin-top:5px; */
          align-items: right;
          color: aliceblue;
          display: flex;
          justify-content: flex-end;
          cursor: pointer;
          text-decoration:none;
      }
      .tb  {
        border:2px solid white;
        padding:8px;
        width: 100%;
        
      }
       .th{
        border:2px solid white;
        font-size:20px;
        font-weight:bold;
        color:white
      }
      /* .td{
        border:2px solid white;
        text-align:center;
        font-size:18px;
        font-weight:bold;
        color:white;
      } */
      td{
        border:2px solid white;
        text-align:center;
        font-size:18px;
        font-weight:bold;
        color:white
      }
      .cont{
        display:flex;
        justify-content: center;
        width: 100%;
        /* border:2px solid red; */
        padding:5px;
      }
      .usr{
        color:white;
      }
       
        /* button................. */

        .bak{
    background-color: rgb(220, 164, 53);
    color: white;
    /* padding: 8px; */
    width: 100px;
    height: 40px;
    text-align: center;
    position: absolute;
    bottom: 9px;
    right: 40px;
    position: fixed;
    border-radius: 5px;
    /* margin-right: 130px; */
    /* bottom: 0; */
    
    
}
.bak:hover{
    cursor: pointer;
}
       
.accept{
    background-color:green;
    width:80%;
    height:40px;
    border-radius:7px;
    border:none;
}
.accept:hover{
    cursor: pointer;
    background-color:#99FFCC;
}

</style>
<body>
    <div class="header">
        <div class="con">Accept Account</div>
        <!-- <form action="" method="post"> -->
            <div class="usr"><?php echo "Welcome  ".$_SESSION['user_name'];?></div>
            <a href="logout.php" class="lg"  name="log" type="submit">Logout</a>
        <!-- </form> -->
    </div>

    <div class="cont">
        <table class="tb">
            <tr class="tr">
                <th class="th">User Name</th>
                <th class="th">Email</th>
                <th class="th">Admin</th>
                <th class="th">Phone Number</th>
                <th class="th">Account Number</th>
                <th class="th">Acceptance</th>
            </tr>
            <?php
            if ($total!=0) {
             while($result=mysqli_fetch_assoc($data))
             {
                
                echo"
                
                <tr>
                <td name='user' >".$result['User_Name']."</td>
                <td name='email' >".$result['Email']."</td>
                <td name='admin'>".$result['Admin']."</td>
                <td name='phone' >".$result['Phone']."</td>
                <td name='accept' >".$result['Account_Number']."</td>
                <td>
                  "?>
                  <form method='post'>
                  <input value="<?php echo $result['User_Name'] ?>" type="hidden" name="user" >
                  <input value="<?php echo $result['Email'] ?>" type="hidden" name="email">
                  <input value="<?php echo $result['Password'] ?>" type="hidden" name="psw" >
                  <input value="<?php echo $result['Admin'] ?>" type="hidden" name="admin" >
                  <input value="<?php echo $result['Phone'] ?>" type="hidden" name="phone" >
                  <input value="<?php echo $result['Account_Number'] ?>" type="hidden" name="account" >
                  <input value="✓Accept" type="submit" name="accept" class="accept">
                  </form>
                  <?php
                  "
                </td>
                </tr>
                  
                ";
             }
            }else{
               ?><script>alert("No Record Found")</script><?php
            //    header('location:index.php');
            }
            ?>
        </table>
    </div>
    <?php
     $user_n = $_SESSION['user_name'];
     if($user_n==true){

     }else{
      header('location:login_r.php');
     }
    ?>
    


    <script>

        // function Logout() {
        //     location.href="index.html";
        //  }
    </script>
    <form action="" method="post">
        <button class="bak" onclick="Back()" name="back" type="submit">Back</button>
    </form>
</body>
</html>
<?php


if(isset($_POST['accept']))
   {
      
        $pname   = $_POST['user'];
        $email   = $_POST['email'];
        $pass   = $_POST['psw'];
        $admin   = $_POST['admin'];
        $phone   = $_POST['phone'];
        $account  = $_POST['account'];
  
    
        $query = "INSERT INTO account_details(`User_Name`,`Email`,`Password`,`Admin`,`Phone`,`Account_Number`) values('$pname' , '$email' ,'$pass','$admin','$phone','$account')";
 
        $data = mysqli_query($conn,$query);
 
        if($data == TRUE)
        {
          $q="DELETE FROM reg_details WHERE `Phone` = $phone";
          $d = mysqli_query($conn,$q);
 
          echo "<script>alert('Register Successfully it will take some hours to accept application ,Please click back button to go to the home page.')</script>";
 
          header('location:admin.php');
        }
        else
        {
          echo "<script>alert('Failed')</script>";
        }
      
    
  

 }
    
    if(isset($_POST['back']))
    {
     header('location:admin.php');
    }
   


 ob_end_flush();
 
 ?>