<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" href="main.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>enquiry</title>
</head>
<body>

    <!-- booking nav -->
    
    <div class="home">
        <nav>
            <h2 class="logo">
                <img src="logo.png"  >
            </h2>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="#">ACTIVITY</a></li>
                 <li><a href="#">PACKAGES</a></li>
                 <li><a href="#">TESTIMONIALS</a></li>
                 <li><a href="#">CONTACT</a></li>
                 <!-- <li><a href="#"><i class="fa-solid fa-unlock-keyhole"></i> LOGIN</a></li>
                 <li><a href="#"><i class="fa-solid fa-user"></i> SIGN UP</a></li> -->
            </ul>
        </nav>
        <div class="text_1">
            <h1>ENQUIRY</h1>
        </div>
    
    </div>



    <!--  Enquiry Booking form -->

    <div class="booking_form">
        <div class="form_1">
              
            <form action="#">
                <div class="input_1">
                    
                 <select>
                    <option>Uppar Mustnag Trek</option>
                    <option>Annapurna Circuit Trek</option>
                    <option>Ghorepani Poon Hill</option>
                    <option>Everest Base Camp</option>
                    <option>Manaslu Circuit Trek</option>
                    <option>Langtang Trek</option>
                    <option>Gosaikunda </option>
                    <option>Chitwan National Park Safari</option>
                    <option>Shy-Phoksundo Lake</option>
                  
                  </select><br>
                </div>

              <div class="input_2">
                <h1>Personal Details</h1>
               <input type="text" placeholder="FirstName" required>
               <input type="text" placeholder="LastName" required>
               <input type="number" placeholder="Number" required>
       
              </div>
               <div class="input_6">
        
                <input type="email" placeholder="Email" required>
                <input type="text" placeholder="Address" required>
              </div>
              <div class="input_3">
                <textarea placeholder="Message"></textarea><br>
              </div>
           
              <div class="button_1">
                <button type="submit">Submit</button>

              </div>
            </form>


        </div>

           
    </div>



 <!-- Contact Section -->

 <?php include('contact.php');?>


 <!-- Footer Section -->

 <?php include('footer.php');?>

  

    
</body>
</html>