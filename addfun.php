<?php
    $connection =mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,'hairstudio');

    if(isset($_POST['del']))
    {
        
        $query="DELETE FROM `reserve`";
        $query_run = mysqli_query($connection,$query);


        if($query_run)
        {
            echo '<script type"text/javascript">alert("Data Deleted Successfully")</script>';  
        }
        else{
            echo '<script type"text/javascript">alert("Data Not Deleted")</script>';   
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
            body{
    background-image:url('ourbg.jpg');
    background-repeat:no-repeat;
    height:100%;
    background-size:cover;
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

            
            </style>
    </head>
    <body>   
        
        <div class="b">
        <h2>Admin</h2>
        <h3>Go to Home page</h3>
        <a href="index.html">Home</a>
        
        <h3>See Table</h3>

<a href="adminfunction.php">See table</a>
           
        </div>
        
        
    </body>
    </html>