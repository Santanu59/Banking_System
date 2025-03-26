<?php
include("db.php");
ob_start();
session_start();
$query = "SELECT * FROM account_details ";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Holders Details</title>
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
       

</style>
<body>
    <div class="header">
        <div class="con">Account Holders Details</div>
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
                <th class="th">Balance</th>
            </tr>
            <?php
            if ($total!=0) {
             while($result=mysqli_fetch_assoc($data))
             {
                
                echo"
                <tr>
                <td>".$result['User_Name']."</td>
                <td>".$result['Email']."</td>
                <td>".$result['Admin']."</td>
                <td>".$result['Phone']."</td>
                 <td>".$result['Account_Number']."</td>
                 <td> ₹" .$result['Balance']."</td>
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
      header('location:login_a.php');
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
    
    if(isset($_POST['back']))
    {
     header('location:admin.php');
    }
   


 ob_end_flush();
 
 ?>