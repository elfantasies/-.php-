#Delete User Request Handler
<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "Please log in to your account";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $sql="delete from user where id='{$_GET["id"]}'"; #Build and Execute the SQL Delete Statement 
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "User deletion error";
        }else{
            echo "User deleted successfully";
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }
?>
