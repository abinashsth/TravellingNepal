


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travelling Nepal</title>
  
  <!-- CSS Link -->
  <link rel="stylesheet" href="style.css">
  <!-- CSS Link -->
<!-- Fontawesome -->
<link rel="stylesheet" href="css/all.min.css">
<link rel="stylesheet" href="css/fontawesome.min.css">

<!-- If you have a local copy of the Font Awesome CSS, you can use the following instead:
<link rel="stylesheet" href="../font/fontawesome.min.css">
-->
<!-- <script src="https://kit.fontawesome.com/87af938e58.js" crossorigin="anonymous"></script> -->
<!-- Fontawesome -->

<!-- Boostrap CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- If you have a local copy of the Bootstrap CSS, you can use the following instead:
<link href="../font/bootstrap.min.css" rel="stylesheet">
-->

  

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ultra&display=swap&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Merienda:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <!-- Google Fonts -->
</head>

<body>

    


  <div class="home">
    <?php include('navbar.php'); ?>


    <div class="camp">
      <div class="text">
        Get Away On This Weekend
      </div>
      <p>Adventure is calling </p>
    </div>


    <div class="search_1">
      <div class="search_2">
        <form action="search.php" method="post">
          <input type="text" placeholder="Enter here to search...." id="search" name="search">
          <button type="submit" name="search">Search </button>
        </form>
      </div>
    </div>


  </div>





  <div class="middle">
    <p class="top"> Welcome to Travelling Nepal</p>

    <h3 class="text">“Hiking is the answer.<br> Who cares what the<br> question is.”</h3>
    <p>“Trekking is a bit like life: The journey only requires you to put one
      foot in front of the other…again and again and again. <br>And if you allow
      yourself the opportunity to be present throughout the entirety of the trek,
      you will witness beauty every<br>step of the way, not just at the summit.”</p>
    <p>“I see my path, but I don't know where it leads. Not knowing where
      I'm going is what inspires me to travel it.” <br> <b> - Rosalia de Castro</p></b>


    <div class="last">
      <ul>
        <li>
          <div class="icon_last"><i class="fa-solid fa-shield-halved"></i></div>
          <p>Experienced Staff</p>
        </li>
        <li>
          <div class="icon_last"><i class="fa-solid fa-circle-check"></i></div>
          <p>Pre-Online Booking</p>
        </li>
        <li>
          <div class="icon_last"><i class="fa-solid fa-indian-rupee-sign"></i></div>
          <p>Affordable Cost</p>
        </li>
      </ul>

    </div>

  </div>


<!-- Index_Category -->
<?php
  include('index_category.php');
  ?>
<!-- Index_Category -->



  <!-- packages -->
  
<section id="Package">
    
    <div class="Package">
      <h3 class="top_text">Choose Your</h3>
      <h3 class="bottom_text"> PACKAGES</h3>

      <div class="sub_factor_package">


        <div class="card-heading">
          <div class="row row-cols-1 row-cols-md-3 g-4">

       



              <div class="col">
                <div class="card_package">
                  <img src="photo/14.jpg" class="card-img-top_package" alt="...">
                  <div class="card-body">
                    <h5 class="card-title_package"> Upper Mustang Trek</h5>
                    <div class="icon">
                      <div class="icon_1"><i class="fa-sharp fa-regular fa-calendar-days"></i>
                        <div class="icon_text">
                          <p class="heading"> Duration: </p>
                          <p class="sub_heading"> 9 Days</p>
                        </div>
                      </div>
                      <div class="icon_1"><i class="fa-sharp fa-solid fa-mountain"></i>
                        <div class="icon_text">
                          <p class="heading">Max Elevation: </p>
                          <p class="sub_heading"> 5879m</p>
                        </div>
                      </div>
                      <div class="icon_1"><i class="fa-solid fa-user-group"></i>
                        <div class="icon_text">
                          <p class="heading"> Max Group: </p>
                          <p class="sub_heading"> 4</p>
                        </div>
                      </div>
                    </div>

                    <div class="price">
                      <h2>USD $800<i> (Per Person)</i></h2>
                    </div>


                    <div class="book_button">
                      <button type="submit"><a href="packages.php?cat_id=28">View Details</a></button>
                    </div>
                    <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                  </div>
                </div>
              </div>


            
          <div class="col">
            <div class="card_package">
              <img src="photo/10.jpg" class="card-img-top_package" alt="...">
              <div class="card-body">
                <h5 class="card-title_package">Shey-Phoksundo Lake</h5>
                <div class="icon">
                  <div class="icon_1"><i class="fa-sharp fa-regular fa-calendar-days"></i>
                    <div class="icon_text">
                      <p class="heading"> Duration: </p>
                      <p class="sub_heading"> 9 Days</p>
                    </div>
                  </div>
                  <div class="icon_1"><i class="fa-sharp fa-solid fa-mountain"></i>
                    <div class="icon_text">
                      <p class="heading"> Max Elevation: </p>
                      <p class="sub_heading"> 5879 m</p>
                    </div>
                  </div>
                  <div class="icon_1"><i class="fa-solid fa-user-group"></i>
                    <div class="icon_text">
                      <p class="heading"> Max Group: </p>
                      <p class="sub_heading"> 4 </p>
                    </div>
                  </div>
                </div>

                <div class="price">
                  <h2>USD $1000<i> (Per Person)</i></h2>
                </div>

                <div class="book_button">
                  <button type="submit"><a href="packages.php?cat_id=">View Details </a></button>
                </div>

                <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
              </div>
            </div>
          </div>


          <div class="col">
            <div class="card_package">
              <img src="photo/8.jpg" class="card-img-top_package" alt="...">
              <div class="card-body">
                <h5 class="card-title_package">Mardi Himal Trek</h5>
                <div class="icon">
                  <div class="icon_1"><i class="fa-sharp fa-regular fa-calendar-days"></i>
                    <div class="icon_text">
                      <p class="heading"> Duration: </p>
                      <p class="sub_heading"> 9 Days</p>
                    </div>
                  </div>
                  <div class="icon_1"><i class="fa-sharp fa-solid fa-mountain"></i>
                    <div class="icon_text">
                      <p class="heading"> Max Elevation: </p>
                      <p class="sub_heading"> 5879 m</p>
                    </div>
                  </div>
                  <div class="icon_1"><i class="fa-solid fa-user-group"></i>
                    <div class="icon_text">
                      <p class="heading"> Max Group: </p>
                      <p class="sub_heading"> 4 </p>
                    </div>
                  </div>
                </div>

                <div class="price">
                  <h2>USD $1200<i> (Per Person)</i></h2>
                </div>

                <div class="book_button">
                  <button type="submit"><a href="packages.php?cat_id=">View Details</a></button>
                </div>
                <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
              </div>
            </div>
          </div>
          </div>
          <!-- <div class="class_package">
              <button type="submit">
                <a href="Subcategory.php">View More </a>
              </button>
            </div> -->
          </div>
        </div>

        
      </div>

  </section>
  

  <!-- Testimonial Section -->
  <?php
  include('testimonial.php');
  ?>
  <!-- Testimonial Section -->

  <!-- Contact Section -->

  <?php
  include('contact.php');
  ?>


  <!-- Footer Section -->

  <?php
  include('footer.php');
  ?>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Your HTML code continues... -->


<!-- Bootstrap JS -->
<script src="js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script async src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"></script>

</body>

</html>