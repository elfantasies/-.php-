#Process Add User Request
<?php
error_reporting(0); #Disable PHP Error Reporting
session_start();
if (!$_SESSION["id"]) {
    echo "Please log in to your account";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
}
else{    

   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");  #Connect to the Database 
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";  #Build SQL Insert Query
   if (!mysqli_query($conn, $sql)) {
     echo "New command error";
   }
   else{
     echo "Add user successfully, return to web page after three seconds";
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
   }
}
?>
