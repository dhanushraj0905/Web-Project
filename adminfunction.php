<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .resStyle {
        border:7px inset rgb(29, 144, 193);
        border-radius:7px;
        border-collapse:separate;
    border-spacing:40px;
        position:absolute;
        left:50%;
        top:10%;
        background-color: rgba(27, 26, 26, 0.796);
        color:rgb(79, 243, 232);
        width:40%;

    }
    #disp th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background: linear-gradient(rgba(49, 46, 46, 0.238), rgb(250, 235, 235));
        color: white;
    }
    input[type=submit] {
    border-top-left-radius:10px;
    border-top-right-radius:10px;
    border-bottom-left-radius:10px;
    border-bottom-right-radius:10px;
    font-style: arial;
    font-size:18px;
    background-color:rgb(167, 248, 243);
}
.divcl {
    border:7px inset rgb(29, 144, 193);
        border-radius:7px;
        border-collapse:separate;
    border-spacing:40px;
        position:absolute;
        left:20%;
        top:10%;
        background-color: rgba(27, 26, 26, 0.796);
        color:rgb(79, 243, 232);
        width:20%;
}
.divcl a{
    border-top-left-radius:10px;
    border-top-right-radius:10px;
    border-bottom-left-radius:10px;
    border-bottom-right-radius:10px;
    font-style: arial;
    font-size:18px;
    background-color:rgb(167, 248, 243);

}            body{
    background-image:url('ourbg.jpg');
    background-repeat:no-repeat;
    height:100%;
    background-size:cover;
}

    </style>
</head>
<body>
    <?php 
     echo '<script type="text/javascript"> alert("You Logged In Successfully Chief!!")</script>';
     ?>
     <div class="divcl">
         <form method="POST" action="addfun.php">
     <h2>Clear the reservations</h2>
     <input type="submit" name="del" value="Delete"><br><br>
     <a href="index.html" >Go To Home page</a>
</form>
    </div>
     <table class="resStyle" id="disp">
        
        <tr>
        
          <th class="thstyle">Booked Slots</th>


        </tr>
    


  
    

<?php
     $connection =mysqli_connect("localhost","root","");
     $db=mysqli_select_db($connection,'hairstudio');

     $query="SELECT * FROM `reserve`";
     $query_run = mysqli_query($connection,$query);

     while($row=mysqli_fetch_array($query_run))
     {
         ?>
         <tr>
            
             
             
             <td><?php echo $row['rtime'] ?></td>
         </tr>
         <?php
     }
     ?>
     </table>
    
    
</body>
</html>