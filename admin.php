<?php
    $connection =mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,'hairstudio');

    if(isset($_POST['adlogin']))
    {
        $adminemail=$_POST['adminemail'];
        $adminpass=$_POST['adminpass'];

        $query="SELECT * FROM `admin` WHERE adminemail='$adminemail' AND adminpass='$adminpass'";
        $query_run = mysqli_query($connection,$query);

        if(mysqli_fetch_array($query_run)>0)
        {
            echo '<script type="text/javascript"> alert("Logged In Successfully")</script>';
            header('Location:adminfunction.php');
         
        }
        else
        {
            echo '<script type="text/javascript"> alert("Log In failed")</script>';
        }
    


    }
    ?>