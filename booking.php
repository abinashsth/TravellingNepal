<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" href="main1.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Booking</title>
</head>
<body>

    <!-- booking nav -->
    
    <div class="home">
        <nav>
            <h2 class="logo">
                <img src="photo/logo.png"  >
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
            <h1>TRIP BOOKING</h1>
        </div>
    
    </div>
    <!-- Booking form -->

    <div class="booking_form">
        <div class="form_1">
          <form action="#">
                
                <div class="input_1">
                    <h1>Select a Package</h1>
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
               <input type="text" placeholder="First Name" required>
               <input type="text" placeholder="Last Name" required>
               <input type="email" placeholder="Email" required>
       
            </div>

            <div class="input_3">
               
               
             <label> Male</label> <input type="radio" name="Gender" required>
             <label> Female</label><input type="radio" name="Gender" required><br>
           
            </div>
            <div class="input_6">
               <label>Date of Birth: </label><input type="date" placeholder="Date of Birth" required>
                <input type="text" placeholder="Profession" required>
                <input type="number" placeholder="Password No" required>
            </div>



            <div class="input_4">
             
               <label>Country:</label>
                <select>
                    <option>Nepal</option>
                    <option>India</option>
                    <option>China</option>
                </select>
              
                    <label>Arrival Date: </label> <input type="date" placeholder="Date of Birth" required>
                    <label>Departure Date: </label> <input type="date" placeholder="Date of Birth" required> 
               
           </div> 
               
            <div class="input_5">
             <label> Issued Date:</label>  <input type="date" placeholder="Issued Date" required>
             <label>Expired Date:</label><input type="date" placeholder="expired Date" required> 
            </div>
            </form>
        </div>

           <!-- form_2 -->

           <div class="form_2">

                <div class="input_1">
                    <h1>In Case of Emergency</h1>
                    <input type="text" placeholder="FullName" required>
                    <input type="text" placeholder="Location" required>
                    <input type="number" placeholder="Contact No." required>
                    <input type="text" placeholder="Relationship" required>
                </div>
                <div class="input_2">
                    <textarea placeholder="Message"></textarea><br>
                    <input type="checkbox" required><label>  I understand / agree the Terms and Conditions</label>
                </div>
                <div class="button_1">
                    <button type="submit">Submit</button>

                </div>
           </div>
    </div>

    
 <!-- Contact Section -->

 <?php include('contact.php');?>


<!-- Footer Section -->

<?php include('footer.php');?>

 
    


    
</body>
</html>