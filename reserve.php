<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylessss.css">
    
</head>
<body>
    <div class="bgimg"></div>
    <form method="POST" action="reservebackend.php">
       
    <table class="tbclass">
        
    <tr>
        <th>Name:</th>
        <th><input type="text" name="name">
            <th></th>
    </th>
    <tr>
        <th>Phone:</th>
        <th><input type="phone" name="phone"></th>
        <th></th>
    </tr>
    
    <tr>
     
         
    </tr>
       
    <tr>
        
         
    </tr>
    <tr><td>TIME:</td><td><select name="rtime" class="selstyle">
        <option value="">-----SELECT-----</option>
        <option value="06:00 AM--06:30 AM">06:00 AM--06:30 AM</option>
        <option value="06:30 AM--07:00 AM">06:30 AM--07:00 AM</option>
        <option value="07:00 AM--07:30 AM">07:00 AM--07:30 AM</option>
        <option value="07:30 AM--08:00 AM">07:30 AM--08:00 AM</option>
        <option value="08:00 AM--08:30 AM">08:00 AM--08:30 AM</option>
        <option value="08:30 AM--09:00 AM">08:30 AM--09:00 AM</option>
        <option value="">-----BREAK-----</option>
        <option value="10:00 AM--10:30 AM">10:00 AM--10:30 AM</option>
        <option value="10:30 AM--11:00 AM">10:30 AM--11:00 AM</option>
        <option value="11:00 AM--11:30 AM">11:00 AM--11:30 AM</option>
        <option value="11:30 AM--12:00 PM">11:30 AM--12:00 PM</option>
        <option value="12:00 PM--12:30 PM">12:00 PM--12:30 PM</option>
        <option value="12:30 PM--01:00 PM">12:30 PM--01:00 PM</option>
        <option value="">-----BREAK-----</option>
        <option value="02:00 PM--02:30 PM">02:00 PM--02:30 PM</option>
        <option value="02:30 PM--03:00 PM">02:30 PM--03:00 PM</option>
        <option value="03:00 PM--03:30 PM">03:00 PM--03:30 PM</option>
        <option value="03:30 PM--04:00 PM">03:30 PM--04:00 PM</option>
        <option value="04:00 PM--04:30 PM">04:00 PM--04:30 PM</option>
        <option value="04:30 PM--05:00 PM">04:30 PM--05:00 PM</option>
        <option value="">-----BREAK-----</option>
        <option value="06:00 PM--06:30 PM">06:00 PM--06:30 PM</option>
        <option value="06:30 PM--07:00 PM">06:30 PM--07:00 PM</option>
        <option value="07:00 PM--07:30 PM">07:00 PM--07:30 PM</option>
        <option value="07:30 PM--08:00 PM">07:30 PM--08:00 PM</option>
        <option value="08:00 PM--08:30 PM">08:00 PM--08:30 PM</option>
        <option value="08:30 PM--09:00 PM">08:30 PM--09:00 PM</option>
    </tr>
    <tr>
        <th></th>
        
    </tr>
    <tr>
        <th></th>
        <th><input type="submit" name="reservesubmit" value="Book"></th>

    </tr>
    <tr>
        <th></th>
        <th>Book Your Seat</th>
</tr>


    </table>
    </div>
</form>



    <table class="resStyle" id="disp">
        <h2>Today's Bookings</h2>
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