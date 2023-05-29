


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
    <h2>Update Category</h2>
   </div>

   <div class="Topic2">
    <form action="" method="post">

    <div class="form-group-update">
            <label for="exampleInputEmail1">Select Category:</label>
          
            <div class="updatecategory">
                <select name="s1" required>
                    <option value="">Select
                </option><option value="Trekking in Nepal">Trekking in Nepal</option>
                <option value="General">Tour in Nepal</option>
                </select>

                <!-- Show Button -->
                
                </div>
                <div class="show">
                <a href=""> <input type="submit" value="Show" id = "show"> </a>
                </div>
                
            </div>



        <div class="form-group-category">
            <label for="exampleInputEmail1">Category Name:</label>
            <input type="text" class="form-control" id="exampleInputcategory" aria-describedby="emailHelp"  required>
            </div>

            <div class="form-group">
            <form action="uploader.php" method="post" enctype="multipart/form-data">  
            <label for="exampleInputEmail1">  Upload Pic: </label>
          <input type="file" name="fileToUpload" />  
        <!-- <input type="submit" value="Upload Image" name="submit"/>   -->
             </form>  
            </div>

            <div class="form-group-details">
                <label for="exampleInputPassword1">Details:</label>
                <textarea id="freeform" name="freeform" rows="4" cols="40">Enter text here...</textarea>
                </div>
               
                      <!-- Save Button -->
        <a href=""> <input type="submit" value="Save" id = "save"> </a>

                </div>
    
    </form>
   </div>
    
</div>
</div>

</body>
</html>