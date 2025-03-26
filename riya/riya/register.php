<?php
include("db.php");
ob_start();
session_start();
$query = "SELECT * FROM account_details ";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
// $result=mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<style>
    body{
      background-image: url("./pic/reg.jpg");
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
        border:2px solid black;
        padding:8px;
        width: 94%;
        
      }
       .th{
        border:2px solid black;
        font-size:20px;
        font-weight:bold;
      }
      .td{
        border:2px solid black;
        text-align:center;
        font-size:18px;
        font-weight:bold;
        /* color:white; */
      }
      td{
        border:2px solid black;
        text-align:center;
        font-size:38px;
        font-weight:bold;
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
       

</style>
<body>
    <div class="header">
        <div class="con">Register Candidates Details</div>
        <!-- <form action="" method="post"> -->
            <div class="usr"><?php echo "Welcome  ".$_SESSION['user_n'];?></div>
            <a href="logout.php" class="lg"  name="log" type="submit">Logout</a>
        <!-- </form> -->
    </div>

       <div class="cont">
        <table class="tb">
          
       
        <tr class="tr">
                <th class="th">User Name:</th>
                <th class="th">Account Number:</th>
                <th class="th">Balance:</th>
            </tr>
            <?php
            if ($total!=0) {
                 
              while($result=mysqli_fetch_assoc($data)){
                  if($result['Email']==$_SESSION['user_n']){
                echo"
                <tr>
                 <td>".$result['User_Name']."</td>
                  <td>".$result['Account_Number']."</td>
                 <td>₹".$result['Balance']."</td>
                </tr>
                ";
                  }
                }
              }
            
            ?>
            
            
            
        </table>
    </div>
    <?php
     $user_n = $_SESSION['user_n'];
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
</body>
</html>
<?php
    

    ob_end_flush();


 
 
 ?>