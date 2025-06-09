#Delete Bulletin Script
<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "Please log in your account";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        #Run SQL Delete Command
        $sql="delete from bulletin where bid='{$_GET["bid"]}'";
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "Notice deletion error";
        }else{
            echo "Notice deleted successfully";
        }
      #Redirect Back to the bulletin list  
      echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
    }
?>
