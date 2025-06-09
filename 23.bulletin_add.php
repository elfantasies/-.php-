#Process Add Bulletin Request
<?php
    error_reporting(0);
    session_start();
#Check Login Status
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $sql="insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";
    #Run the Query and Show Result
        if (!mysqli_query($conn, $sql)){
            echo "New command error";
        }
        else{
            echo "The new notice was added successfully, and the web page will be returned after three seconds.";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }
?>
