<?php
include("db.php");
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit / Withdraw Money</title>
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
       
/* form-------------------------------------------------------- */

body{
 
}


.one{
  margin:0;
  font-family:"Gabriola";
  font-size:10vw;
  color:black;
  padding:50px;
}
.cont{
  width:50%;
  background-color:#CCFFFF;
  display:flex;
  align-items:center;
  flex-direction:column;
  margin:auto;
  padding:8px;
  margin-top:9px;
  /* margin-bottom:25px; */
  border-radius:10px;
  opacity: 0.9;
}
.new_acc{
  color:black;
  font-family:"Gabriola";
  font-size:2vw;
  
}
.a{
  width:98%;
  height:50px;
  margin-top:5px;
  border-radius:8px;
  border-box:0px;
}
.b{
  width:100%;
  height:50px;
  margin-top:5px;
  background-color:green;
  border-radius:8px;
}
.b:hover{
  background-color:#66FFCC;
  cursor: pointer;
}
.c{
  width:100%;
  height:50px;
  margin-top:5px;
  background-color:red;
  border-radius:8px;
  color:white;
}
.c:hover{
  background-color:#66FFCC;
  cursor: pointer;
  color:black;
}

</style>
<body>
    <div class="header">
        <div class="con">Deposit / Withdraw Money</div>
        <!-- <form action="" method="post"> -->
            <div class="usr"><?php echo "Welcome  ".$_SESSION['user_name'];?></div>
            <a href="logout.php" class="lg"  name="log" type="submit">Logout</a>
        <!-- </form> -->
    </div>
  
<div class="cont">
  <center><h2 class="new_acc">Deposit / Withdraw</h2></center>
  <form action="#" method="post">
    <table>
      <input type="text" placeholder="Account No" class="a"name="ac_no"/>
      <input type="text" placeholder="Username" class="a" name="email" />
     <!-- <input type="text" placeholder="Password" class="a"/> -->
      <input type="text" placeholder="Amount" class="a" name="amount"/>
      <input  type="Submit" value="Deposit" name="deposit" class="b" onclick="getPDF()">
      <input  type="Submit" value="Withdraw" name="withdraw" class="c" onclick="getPDF()">
      <!-- <a href="./pdf.html" download>Download</a> -->
      
  </form>
    <table>
    </div>
  
      


 
    <?php
     $user_n = $_SESSION['user_name'];
     if($user_n==true){

     }else{
      header('location:login_a.php');
     }
    ?>
    


    

   
    <form action="" method="post">
        <button class="bak" onclick="Back()" name="back" type="submit">Back</button>
    </form>
    
</body>
</html>
<?php
      
    if(isset($_POST['deposit']))
    {
      // $query = "SELECT * FROM account_details ";
      // $data = mysqli_query($conn, $query);
      // $total = mysqli_num_rows($data);
      // $result=mysqli_fetch_assoc($data);
      $ac_no =$_POST['ac_no'];
      // $email =$_POST['email'];
      // $ac=$result['Account_Number'];
      $amount =$_POST['amount'];
      $quary = "UPDATE account_details SET `Balance` =`Balance`+'$amount' where `Account_Number` ='$ac_no'";
      $data = mysqli_query($conn, $quary);
      echo"<script>alert('Amount Successfully Deposit ✓....Your Account is $ac_no')</script>";
  //     echo"<script>
  //     function getPDF(){
  //        window.print();
  //     }
  //  </script>";
      // header('location:admin.php');
      }elseif(isset($_POST['withdraw'])){
      $ac_no =$_POST['ac_no'];
      $amount =$_POST['amount'];
      $quary = "UPDATE account_details SET `Balance` =`Balance`-'$amount' where `Account_Number` ='$ac_no'";
      $data = mysqli_query($conn, $quary);
     
      echo"<script>alert('Amount Withdrwal Successfully ✓ ....Your Account is $ac_no')</script> ";
      // echo"<script>
      // function getPDF(){
      //    window.print();
      // }</script>";
      // header('location:admin.php');
      }
    
  
    if(isset($_POST['back']))
    {
     header('location:admin.php');
    }
   


 ob_end_flush();
 
 ?>