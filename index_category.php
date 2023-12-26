
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS Link -->
  <link rel="stylesheet" href="style.css">
  <!-- CSS Link -->
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <!-- <script src="https://kit.fontawesome.com/87af938e58.js" crossorigin="anonymous"></script> -->
</head>
<body>
    

<?php
    // include('function.php');
    include('connection.php');

    // Error handling for database query
    $sql = "SELECT * FROM `category`";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
      die("Database query failed: " . mysqli_error($cn));
    }

    
    // $sql = "SELECT * FROM ";
    // $result = mysqli_query($cn, $sql);
    
    ?>



<section id="Category">
   
   <div class="category">

     <h3 class="top_text">Choose Your</h3>
     <h3 class="bottom_text"> ADVENTURE</h3>


     <!-- Photos Gallary -->

     <div class="sub_factor">

       <div class="card-heading">
         <div class="row row-cols-1 row-cols-md-4 g-4">

           <?php
           if (mysqli_num_rows($result) > 0) {
             while ($row = mysqli_fetch_array($result)) {
               $cat_id = $row["cat_id"];
               $cat_name = $row["Category_Name"];
               $cat_image = $row["Images"];
               $cat_details = $row["Details"];
           ?>

               <div class="col">
                 <div class="card">
                   <img src="Admin/category/<?php echo $cat_image ?>" class="card-img-top" alt="..." >
                   <div class="card-body">
                     <h5 class="card-title"><?php echo $cat_name ?></h5>
                     <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                   </div>
                 </div>
               </div>


           <?php
             }
           } else {
             echo "No categories found.";
           }
           ?>
           <!-- 
         <div class="col">
           <div class="card">
             <img src="photo/5.jpg" class="card-img-top" alt="...">
             <div class="card-body">
               <h5 class="card-title">Peaking Climbing in Nepal</h5>
               <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
             </div>
           </div>
         </div>


         <div class="col">
           <div class="card">
             <img src="photo/1.webp" class="card-img-top" alt="...">
             <div class="card-body">
               <h5 class="card-title">Nature and Wildlife Tours</h5>
               <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
             </div>
           </div>
         </div>


         <div class="col">
           <div class="card">
             <img src="photo/21.jpg" class="card-img-top" alt="...">
             <div class="card-body">
               <h5 class="card-title">Tour in Nepal</h5>
               <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
             </div>
           </div>
         </div>


         <div class="col">
           <div class="card">
             <img src="photo/4.jpg" class="card-img-top" alt="...">
             <div class="card-body">
               <h5 class="card-title">Mountain Biking in Nepal</h5>
               <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
             </div>
           </div>
         </div>


         <div class="col">
           <div class="card">
             <img src="photo/6.jpg" class="card-img-top" alt="...">
             <div class="card-body">
               <h5 class="card-title">Rafting in Nepal</h5>
               <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
             </div>
           </div>
         </div>

         <div class="col">
           <div class="card">
             <img src="photo/12.jpg" class="card-img-top" alt="...">
             <div class="card-body">
               <h5 class="card-title">Bike Tour in Nepal</h5>
               <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
             </div>
           </div>
         </div>

         <div class="col">
           <div class="card">
             <img src="photo/16.jpg" class="card-img-top" alt="...">
             <div class="card-body">
               <h5 class="card-title">Hiking in Nepal</h5>
               <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
             </div>
           </div>
         </div> -->





         </div>
       </div>

     </div>

     <div class="class">
       <button type="submit">
         <a href="category.php">View More </a>
       </button>
     </div>

   </div>

 </section>



</body>
</html>