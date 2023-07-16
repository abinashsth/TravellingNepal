<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travelling";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the keyword from the search form
$keyword = $_GET['keyword'];

function searchPackages($keyword, $conn)
{
  $keyword = mysqli_real_escape_string($conn, $keyword);
  $query = "SELECT * FROM subcategory WHERE Subcategory_Name LIKE '%$keyword%' ";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    $results = array();

    while ($row = $result->fetch_assoc()) {
      $results[] = $row;
    }

    return $results;
  }

  return [];
}

// Perform the search
$searchResults = searchPackages($keyword, $conn);

// Close the connection
$conn->close();
?>
<!-- 
<!DOCTYPE html>
<html>

<head>
  <title>Search Results</title>
</head>

<body>
  <h1>Search Results for "<?php echo $keyword; ?>"</h1>

  <?php if (empty($searchResults)) : ?>
    <p>No results found.</p>
  <?php else : ?>
    <ul>
      <?php foreach ($searchResults as $result) : ?>
        <div class="col">
          <div class="card_category">
            <img src="Admin/subcategory/<?php echo $row["Images"] ?>" class="card-img-top_category" alt="">
            <div class="card-body">
              <h5 class="card-title_category"><?php echo $row["Subcategory_Name"] ?></h5>
              <div class="category_1_detail">
                <p>
                  <?php echo $row["Details"] ?>
                </p>
              </div>
              <div class="book_button_category">
                <button type="submit"><a href="Packages.php?cat_id=<?php echo $cat_id ?>">View details</a></button>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</body>

</html> -->



<!DOCTYPE html>
<html lang="en">

<head>
  <title>Search for results</title>

  <!-- CSS Link -->
  <link rel="stylesheet" href="style.css">
  <!-- CSS Link -->

  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Fontawesome -->

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ultra&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">


  <!-- Google Fonts -->

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Bootstrap CSS -->
</head>

<body>

  <!-- Function -->
  <?php
  include('function.php');
  include('connection.php');

  $sql = "SELECT * FROM `subcategory`";
  $result = mysqli_query($conn, $sql);
  ?>

  <div class="home_top">
    <?php include('navbar.php'); ?>

    <div class="text_1">
      <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Subcategory</li>
        </ol>
        <h1>Subcategory</h1>
      </div>
    </div>

    <!-- Category -->
    <div class="category_1">
      <h3 class="top_text">SUBCATEGORY</h3>
      <h3 class="bottom_text">ACTIVITY</h3>
      <br>

      <h1>Search Results for "<?php echo $keyword; ?>"</h1>

      <div class="sub_factor_category">
     
        <div class="card-heading_category">
        
          <div class="row row-cols-1 row-cols-md-3 g-4">
           

            <?php if (empty($searchResults)) : ?>
              <p>No results found.</p>
            <?php else : ?>
              
                <?php foreach ($searchResults as $row) : ?>
                  <div class="col">
                    <div class="card_category">
                      <img src="Admin/subcategory/<?php echo $row["Images"] ?>" class="card-img-top_category" alt="">
                      <div class="card-body">
                        <h5 class="card-title_category"><?php echo $row["Subcategory_Name"] ?></h5>
                        <div class="category_1_detail">
                          <p>
                            <?php echo $row["Details"] ?>
                          </p>
                        </div>
                        <div class="book_button_category">
                          <button type="submit"><a href="Packages.php?cat_id=<?php echo $cat_id ?>">View details</a></button>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>

    <!-- Contact Section -->
    <?php
    include('contact.php');
    ?>

    <?php
    include('footer.php');
    ?>

  </div>


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Dropdown script -->
  <!-- <script>
    // Loop through all dropdown buttons to toggle between hiding and showing its dropdown content
    // This allows the user to have multiple dropdowns without any conflict
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
  </script> -->

</body>

</html>