




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Document</title>
    <style>

        .frm {
  
    position: absolute;
    top:20%;    
    left:42%;
    
    
    padding-top:30px;
    padding-bottom:20px;
    padding-left:30px;
    padding-right:30px;
    text-align:center;
    border-top-left-radius:30px;
    border-bottom-right-radius:30px;
    border-bottom-left-radius:30px;
    border-top-right-radius:30px;
    background-color: rgba(139, 228, 212, 0.911);
    color:rgb(9, 218, 250);
    font-weight:bold;
    font-style:italic;
    border:10px;
    background: linear-gradient(rgba(154, 42, 42, 0.238), rgb(0, 0, 0));


    

}
body,html {
        height:100%;
        margin:0%;
        padding:0%;
       
    }

.bgimg {
    background-image:url('loginimage.jpg');
    -webkit-background-size:cover;
    background-size:size;
    filter: blur(3px);
    background-position:center center;
    height:100%;
    width:100%
   
    
}
input {
    border-top-left-radius:10px;
    border-top-right-radius:10px;
    border-bottom-left-radius:10px;
    border-bottom-right-radius:10px;
    border-color:rgb(171, 211, 247)
    font-style: italic;
    font-size:18px;
    box-shadow:0 1px 25px rgb(113, 214, 241);
}
.sub {
    width:100px;
    background-color: rgb(171, 211, 247);
    margin-top:10px;
}

</style>
</head>
<body>
    <div class="bgimg">
    </div>
    <div class="frm">
    </form method="POST" action="">
    <h2>Sign Up</h2>
    <input type="text" name="fname" placeholder="First Name"><br><br>
    <input type="text" name="lname"  placeholder="Last Name"><br><br>
    
    
    <input type="email" name="email" placeholder="email"><br><br> 
    
    <input type="password" name="password" placeholder="Password"> <br><br>
     <input type="password" name="cpassword" placeholder="Confirm Password"> <br><br>
     <input type="submit" name="login" value="SignUp" class="sub">
     </div>
     
        
    </body>
        
    </html>
</body>
</html>


