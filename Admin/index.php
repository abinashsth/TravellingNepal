
<!-- This is the first page of Admin Panel -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <!-- CSS Link -->
    <link rel="stylesheet" href="css/main.css"> 

    <!-- Font Added -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ultra&display=swap" rel="stylesheet">


</head>
<body>
    
<!-- Admin Panel -->
<div id="container">
    <div class="header">
        <img src="Logo/logo1.png" alt="Travelling Nepal Logo">
        </div>
<div class="content">
    <h1>Admin Login</h1>
   
    <!-- <form class="login"  >
          Username:  <input type="text" id="adminname" name="name" placeholder="Enter your Email" /><br>
  Password: <input type="password" id="adminpassword" name="password" placeholder="Enter your password" /><br>
 
<a href="adminpage.php" target = "blank" > <input type="button" id = "login" name = "button" value="Login"> </a> 
 
</form> -->


<!-- 
    <h2>Registration Form</h2> -->

    <form action="adminpage.php" method="POST" name="myform" onsubmit=" return validateform()"  > 
        
         Username:
        <input type="text" name="Username" placeholder="Enter Your Email" id="adminname" required> <br> 
        Password: 
        <input type="password" name="Password" placeholder="Enter The Password" id="adminpassword" required> <br>
    
        <a href=""> <input type="submit" value="Login" id = "login"> </a>
        

    </form>


</div>
</div>



<!-- Javascript Link -->
<!-- <script >
    
function validateform(){  
    var Username =document.myform.Username.value;  
    var Password=document.myform.Password.value;  
      
    if (Username==null || Username==""){  
      alert("Name can't be blank");  
      return false;  
    }else if(Password.length<6){  
      alert("Password must be at least 6 characters long.");  
      return false;  
      }  
    }  
</script> -->

</body>
</html>