#Edit User Form
<html>
    <head><title>Modify User</title></head>
    <body>
    <?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "Please log in to your account";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
      
      #If Logged In: Fetch User Data
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");
        $row=mysqli_fetch_array($result);
      
      #Display Form with Pre-filled Data   
      echo "
        <form method=post action=20.user_edit.php>
            <input type=hidden name=id value={$row['id']}>
            Account：{$row['id']}<br> 
            pwd：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=Revise>
        </form>
        ";
    }
    ?>
    </body>
</html>
