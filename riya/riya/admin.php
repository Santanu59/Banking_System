<?php include("db.php");
session_start();
$query = "SELECT * FROM Admin_Details ";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<style>
    body{
    background-image: url("./pic/admin.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    /* background-position: center; */
    background-color: #cccccc;
    }

    .header{
       width: 98%;
       height: 7vh;
       opacity: 0.9;
       background-color: rgb(40, 38, 38);
       padding: 6px;
       display: flex;
       align-items: center;
       /* flex-direction: row; */
       justify-content: space-between;
       gap: 5px;

      /* overflow: hidden; */
  /* background-color: #333; */
      /* position: fixed; */
      /* top: 4; */
      /* margin-bottom:40px; */
  /* width: 100%; */
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
        width: 94%;
        color:white;
        
      }
       .th{
        border:2px solid white;
        font-size:20px;
        font-weight:bold;
        color:white;
        /* margin-bottom:10px; */
      }
      td{
        border:2px solid white;
        text-align:center;
        font-size:18px;
        font-weight:bold;
        color:white;
      }
      .cont2{
        background-color:white;
         width:90%;
         height:auto;
        display: flex;
        flex-direction:column;
        padding:15px;
        margin:10px;
        /* position:absolute; */
        
      }
      .cont2 .btn{
            background-color:yellow;
            height:90px;
            width:97%;
            padding-top:40px;
            border-radius:10px;
            padding:5px;
            margin:5px;
            /* background-color:green; */
            /* display: flex; */
            /* align-items:center; */
            text-align:center;
            /* text-decoration:none; */
            /* opacity: 0; */
            display: flex;
            align-items:center;
            padding-left:20px;
            /* position:absolute; */

      }
     .cont2 .btn a{
      background-color:green;
      text-decoration:none;
      color:white;
      padding:15px;
      width:100%;
      border-radius:10px;
     }
     .cont2 .btn a:hover{
      cursor: pointer;
      background-color:#99FF99;
      color:black;
     }
      .usr{
        color:white;
      }
      .cont1{
         background-color:white;
         width:30%;
         height:auto;
        /* display: flex; */
        /* flex-direction:column; */
        padding:15px;
        margin-top:8px;

      }
      
      .cont1 .a{
            background-color:yellow;
            height:auto;
            width:auto;
            border-radius:10px;
            text-align:center;
            padding:5px;
            margin:5px;
            /* opacity: 0; */
            /* display: flex; */
            /* align-items:center; */

      }
      .cont .a img{
        width: 50px;
        height:40px;
        margin:auto;
      }
     
      .cont{
        display:flex;
        align-items:center;
        opacity: 0.8;
        /* padding-top:50px; */
        /* position:absolute; */
      }
       
</style>
<body>
 <?php
  
        ?>
    <div class="header">
        <div class="con">Admin Portal</div>
        <!-- <form action="" method="post"> -->
            <div class="usr"><?php echo "welcome  ".$_SESSION['user_name']?></div>
        <a href="logout.php" class="lg"  name="log" type="submit">Logout</a>
        <!-- </form> -->
    </div>
    <div div class="cont">
        <div class="cont1" >
            <div class="a" src="">
              <img src="./pic/user.png" alt="admin" srcset="">
              <p>Admin Details</p>
            </div>
            <div class="a" src="">
            <img src="./pic/register.png" alt="Register_can" srcset="">
            <p>Account Holders Details</p>
            </div>
            <div class="a" src="">
            <img src="./pic/add_admin.png" alt="Register_can" srcset="">
            <p>Add Admin</p>
            </div>
            <div class="a" src="">
            <img src="./pic/bank.png" alt="Register_can" srcset="">
            <p>Accept Account Number</p>
            </div>
            <div class="a" src="">
            <img src="./pic/deposit.png" alt="Register_can" srcset="">
            <p>Deposit / Withdraw Money</p>
            </div>
        </div>
       <div class="cont2">
        <div  class="btn">
          <a href="./admin_details.php" class="c">Check Admin Candidates Details</a>
        </div>
        <div  class="btn">
          <a href="./reg_details.php" class="s">Check Account Holders Details</a>
        </div>
        <div  class="btn">
          <a href="./add_admin.php" class="s">Add</a>
        </div>
        <div  class="btn">
          <a href="./accept.php" class="s">Accept Acoount</a>
        </div>
        <div  class="btn">
          <a href="./deposit.php" class="s">Deposit Or Withdraw Money</a>
        </div>
       </div>
       </div>
       
            
       </div>
    <?php
    
    
    
    

    
?>
</div>
    <script>

        // function Logout() {
        //     location.href="index.html";
        //  }
    </script>
</body>
</html>
<?php
   

  if(isset($_POST['log']))
   {
    header('location:index.php');
   }

   
   $user_n = $_SESSION['user_name'];
   if($user_n==true){

   }else{
    header('location:login_r.php');
   }
  
 
 
 ?>