#User Management Dashboard
<html>
    <head><title>User Management</title></head>
    <body>
    <?php
        error_reporting(0);
        session_start();
        if (!$_SESSION["id"]) {
            echo "Please log in to your account";
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
        }
          #id logged in: Display User Management Table
        else{   
            echo "<h1>User Management</h1>
                [<a href=14.user_add_form.php>Add new user</a>] [<a href=11.bulletin.php>Back to bulletin board list</a>]<br>
                <table border=1>
                    <tr><td></td><td>Account</td><td>pwd</td></tr>";
            #Fetch All Users From Database
            $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
            $result=mysqli_query($conn, "select * from user");
           #Display Each User with Edit/Delete Options
            while ($row=mysqli_fetch_array($result)){
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            echo "</table>";
        }
    ?> 
    </body>
</html>
