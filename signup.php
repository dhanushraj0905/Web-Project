<?php
    $connection =mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,'hairstudio');

    if(isset($_POST['login']))
    {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];

        if($password==$cpassword)
        {
            $query="SELECT * FROM signup WHERE email='$email'";
            $query_run = mysqli_query($connection,$query);

            if(mysqli_num_rows($query_run)>0)
            {
                echo '<script type="text/javascript"> alert("Email id already exists...Try another Email ID")</script>';
            }
            else
            {

            




            $query = "INSERT INTO `signup`(`fname`,`lname`,`email`,`password`,`cpassword`) VALUES ('$fname','$lname','$email','$password','$cpassword')";
            $query_run = mysqli_query($connection,$query);

            if($query_run)
            {
                echo '<script type="text/javascript"> alert("You are successfully signed up")</script>';
            }
            else{
                echo  '<script type="text/javascript"> alert("Registration failed")</script>';
            }
        }
    }
            else
            {
            echo  '<script type="text/javascript"> alert("Password and confirm password does not match")</script>';
        }
    }

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <style>
            .a{
                text-align:center;
                margin-left:30%;
                margin-top:2%;
                border-radius:5px;
                width:200px;


          
                
                background-image:url('logo.jpg');
                -webkit-background-size:cover;
    background-size:size;
    filter: blur(10px);
                
                background-size:cover;
                background-position:center;
                height:100vh;
                width:100vh;
                text-align:center;
                
            }
            .b {
                border-radius:10px;
                background-color: cyan;
                width:500px;
                border:10px inset rgb(29, 144, 193);
                text-align:center;
                margin-left:35%;
                color:black;



            }
            body{
    background-image:url('ourbg.jpg');
    background-repeat:no-repeat;
    height:100%;
    background-size:cover;
}

            
            </style>
    </head>
    <body>   
        
        <div class="b">
        <h2>Thank you for Joining us</h2>
        <a href="login.html">Sign In to Book seat</a>
           
        </div>
        
        
    </body>
    </html>