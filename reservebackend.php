<?php
    $connection =mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,'hairstudio');

    if(isset($_POST['reservesubmit']))
    {
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $rtime=$_POST['rtime'];

        $query="SELECT * FROM `reserve` WHERE rtime='$rtime'";
        $query_run = mysqli_query($connection,$query);

        if(mysqli_num_rows($query_run)>0)
        {
            echo '<script type="text/javascript"> alert("Time slot already booked...Try another time slot")</script>';
        }
        else
        {

        




        $query = "INSERT INTO `reserve`(`name`,`phone`,`rtime`) VALUES ('$name','$phone','$rtime')";
        $query_run = mysqli_query($connection,$query);

        if($query_run)
        {
            echo '<script type="text/javascript"> alert("Time slot booked successfully")</script>';

        }
        
        else{
            echo  '<script type="text/javascript"> alert("Booking failed ")</script>';
        }
    }
}

  ?>     
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
  </head>
  <body>
    
      
  </body>
  </html>
  
  

 

  
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
                margin-top:10%;
                padding:10px;
                border-radius:10px;
                background-color: cyan;
                width:400px;
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
        
        <h3>Go to Home page</h3>
        <a href="index.html">Home</a>
        
        
      
           
        </div>
        
        
    </body>
    </html>
       