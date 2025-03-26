<?php include("db.php");
session_start();
ob_start();
$query = "SELECT * FROM Admin_Details ";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Details</title>
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
        display:flex;
        justify-content: center;
        width: 100%;
        /* border:2px solid red; */
        padding:5px;
      }
      .usr{
        color:white;
      }
      .cont1{
         background-color:white;
         width:50%;
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
        width: 90px;
        height:100px;
        margin:auto;
      }
      .cont .a:hover{
        cursor: pointer;
      }
      .cont{
        display:flex;
        align-items:center;

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
 <?php
  
        ?>
    <div class="header">
        <div class="con">Admin Candidates Details</div>
        <!-- <form action="" method="post"> -->
            <div class="usr"><?php echo "welcome  ".$_SESSION['user_name']?></div>
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
                </tr>
                ";
             }
            }else{
                ?><script>alert("No Record Found")</script><?php
            }
            ?>
        </table>
        
       </div>
       
<?php
    

    
    

    
?>

</div>
<form action="" method="post">
        <button class="bak" onclick="Back()" name="back" type="submit">Back</button>
</form>
</body>
</html>
<?php
   
   
   $user_n = $_SESSION['user_name'];
   if($user_n==true){

   }else{
    header('location:login_a.php');
   }
  
   if(isset($_POST['back']))
   {
    header('location:admin.php');
   }
 ob_end_flush();
 
 
 ?>