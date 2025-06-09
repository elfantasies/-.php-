#Process User Update Request
<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "Please Log In Your Acocount";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
      #Execute Update Query
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){
            echo "Fix Error";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }else{
            echo "The modification is successful and the webpage will be returned in three seconds";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }
    }

?>
