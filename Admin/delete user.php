


<!-- This is the Welcome page of Admin Panel -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <!-- CSS Started -->
    <link rel="stylesheet" href="css/Main.css"> 
    <!-- Css Ended -->
   
    <!-- Fontawesome Start -->
 
    <script src="https://kit.fontawesome.com/87af938e58.js" crossorigin="anonymous"></script>
    <!-- Fontawesome End -->
    
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ultra&display=swap" rel="stylesheet">

    <!-- End of Google Fonts -->
<!-- FontAwesomw -->
 
</head>
<body>
    

    
<!-- Navbar -->
<?php include('top.php'); ?> 

<!-- Admin Link  -->

<?php include('left.php'); ?>







<!-- Add User -->

<div id="ADDUSER"> 
<div class="adduser1">
   <div class="Topic1">
    <h2>Delete User</h2>
   </div>

   <div class="Topic2">
    <form action="" method="post">
        <div class="form-group-delete">
            <label for="exampleInputEmail1">Select User:</label>
          
            <div class="deletelist">
                <select name="s1" required>
                    <option value="">Select
                </option><option value="Admin">Admin</option>
                <option value="General">General</option>
                </select>

            
                      <!-- Save Button -->
        <a href=""> <input type="submit" value="Delete" id = "delete"> </a>

                </div>
            </div>
        
    </form>
   </div>
    
</div>
</div>

</body>
</html>