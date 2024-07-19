<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../Photos/20.png.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/style1.css">
    <title>Sign In</title>



    <style>
        body{
    text-align: center;
    background-color: #5a7233 ;    
   
}
.form{
    width: 250px;
    height: 350px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position: absolute;
    top: 100px;
    left: 600px;
    transform: translate(0%,-5%);
    border-radius: 12px;
    padding: 60px;
    align-self: center;
    font-weight:bold ;
    padding-top:80px;
    
    
}
.form h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color: white;
    font-size: 20px;
    background-color: transparent;
    border-radius: 10px;
    margin: 2px;
    padding: 4px;
    font-style: italic;
}
.form input{
    width: 240px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid white;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
    font-style: italic;
    position: relative;
    top: 80px;
}
.form input:focus{
    outline: none;
}
::placeholder{
    color: #fff;
    font-family: Arial;
}
.btnn{
    width: 240px;
    height: 40px;
    background: #5a7233;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
    position: relative;
    top: 80px;
}
.btnn:hover{
    background: transparent;
    color: black;
    border: 2px solid white;
 
}
.btnn a{
    text-decoration: none;
    color: white;
    font-weight: bold;
}
.form .link{
    font-family: Arial;
    font-size: 15px;
    padding-top: 20px;
    text-align: center;
    color: white;
    margin-bottom: 5px;
    position: relative;
    top: 70px;
}
.form .link a{
    text-decoration: none;
}
.form span{
    color: #dc281e;
    font-size: 15px;
}
.liw{
    padding-top: 1px;
    padding-bottom: 1px;
    text-align: center;
    color: white;  
    font-size: 18px;
    position: relative;
    top: 60px;
}
.icons a{
    text-decoration: none;
    color: #fff; 
}
.icons ion-icon{
    color: #fff;
    font-size: 25px;
    padding-left: 5px;
    padding-top: 5px;
    transition: 0.3s ease;
    position: relative;
    top: -10px;
    left: 45px;
}
.icons ion-icon:hover{
    color: #dc281e;
}
a {
    color: white;
    text-decoration: none; 
}
img{
    position: relative;
    width: 100px;
    bottom: 380px;
    margin-top:50px;
   
}
.sp{
    position: relative;
    top: 60px;
}
.pp{
    color:white;
    font-family: sans-serif;
    text-align: center;
    margin-top: -380px;
    font-size:20px;
}
.email{
    margin-top:120px;
}
    </style>
</head>
<body>
    <div>
    <img class="img" src="">
        <a href="htmlogin.html"></a>
        <div class="form">
              <input  type="email" name="email" placeholder="Email or Username ">
             <input type="password" name="" placeholder="Password">
           <button class="btnn"><a href="display2.php">Log In</a></button>
          <p class="link"></p><br>
        <img src="ic.png">
        <p class="pp">ADMIN</p>
      </div>
   </div>
 </body>
</html>
