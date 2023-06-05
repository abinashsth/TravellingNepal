<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Booking</title>
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
<!-- contact section -->
<div class="contact">
    <h1>Connect with us</h1>
    <p>We would love to respond to your queries and help you succeed. Feel free to get in touch with us.</p>
         <div class="contact-box">
            <div class="contact-left">
                <h3>Send Your request</h3>

                <form>
                    <div class="input-row">
                        <div class="input-group">
                            <label>Name</label>
                            <input type="text" required>
                        </div>
                        <div class="input-group">
                            <label>Phone</label>
                            <input type="number" required>
                        </div>
                        
                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <label>Email</label>
                            <input type="email" required>
                        </div>
                        <div class="input-group">
                            <label>Subject</label>
                            <input type="text" required>
                        </div>
                        
                    </div>

                    <label>Message</label>
                    <textarea rows="5" placeholder="your message"></textarea>
                    
                    <div class="form_button">
                        <button type="submit">Send</button>
                    </div>
                    
                </form>

            </div>
            <div class="contact-right">
                <h3>Reach Us</h3>
                <table>
                    <tr>
                        <th>Email</th>
                        <td>travellingnepal55@gmail.com</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>+ 977+9803650653<br>+ 977+9808950673</td>
                        
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>Ground Floor 
                            Nayabasti, Jorpati <br>Kathmandu, Nepal</td>
                    </tr>
                </table>

            </div>
         </div>
  </div>




    <!--footer section-->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Travel Agency</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4> Popular packages</h4>
                    <ul>
                        <li><a href="#">Annapurna Base Camp Trek</a></li>
                        <li><a href="#">Ganesh Himal Trek</a></li>
                        <li><a href="#">Langtang Trek</a></li>
                        <li><a href="#">Shivapuri National park Trek</a></li>
                        <li><a href="#">Everest camp</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Activites</h4>
                    <ul>
                        <li><a href="#">Trekking</a></li>
                        <li><a href="#">Hiking</a></li>
                        <li><a href="#">Bike Tour</a></li>
                        <li><a href="#">Rafting</a></li>
                        <li><a href="#">Peak Climbing</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                     
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <div class="copyright">

        <div class="copyright_1"> COPYRIGHT © 2003 - 2023, ALL RIGHTS RESERVED</div><br><div class="copyright_2"></div> POWERED BY: NEPAL TRAVELLING PVT. LTD </div>          
     </div>

    


    
</body>
</html>