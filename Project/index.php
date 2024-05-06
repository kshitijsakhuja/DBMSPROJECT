<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/5479b044dc.js" crossorigin="anonymous"></script>
    <!-- <link rel="icon" type="image/x-icon" href="/Patient/logo.png"> -->
    <title>CureConnect</title>


<script type="text/javascript">
    function showSideBar() {
        const sideBar = document.querySelector('.sidebar');
        sideBar.style.display = 'flex';
    }

    function hideSideBar() {
        const sideBar = document.querySelector('.sidebar');
        sideBar.style.display = 'none';
    }

    document.addEventListener("DOMContentLoaded", function() {
        var dropdowns = document.querySelectorAll('.dropdown');

        dropdowns.forEach(function(dropdown) {
            var dropbtn = dropdown.querySelector('.dropbtn');
            var dropdownContent = dropdown.querySelector('.dropdown-content');

            dropbtn.addEventListener('click', function() {
                dropdown.classList.toggle('clicked');
            });
        });

        // Close dropdowns when clicked outside
        document.addEventListener('click', function(event) {
            dropdowns.forEach(function(dropdown) {
                if (!dropdown.contains(event.target)) {
                    dropdown.classList.remove('clicked');
                }
            });
        });
    });
</script>
</head>
<body>
    <nav>
        <ul class="sidebar">
            <li onclick=hideSideBar()><a href="#"><i class="fa-solid fa-xmark"></i>
            <li><a href="">Home</a></li>
            <li><a href="#Departments">Departments</a></li>
            <li><a href="">Forum</a></li>
            <li><a href="#about-us">About&nbspUs</a></li>
            <li><a href="#contact-us">Contact&nbspUs</a></li>
            <li class="dropdown" >
            <a class="dropbtn">Language</a>
        <div class="dropdown-content">
            <a href="#">English</a>
            <a href="#">हिंदी</a>
            <a href="lang/malayam.php">മലയാളം</a>
        </div>
    </li>
            
            <li><a href="user-login.html" class="btn"><button class="book">Log&nbspIn</button></a></li>
        </ul>
    </nav>
    <nav class="desktop">
        <ul >
            <li><a href="">CureConnect</a></li>
            <li class="hideOnMobile"><a href="index.php">Home</a></li>
            <li class="hideOnMobile"><a href="#Departments">Departments</a></li>
            <li class="hideOnMobile"><a href="">Forum</a></li>
            <li class="hideOnMobile"><a href="#about-us">About&nbspUs</a></li>
            <li class="hideOnMobile"><a href="#contact-us">Contact&nbspUs</a></li>
            <li class="dropdown hideOnMobile" >
        <button class="dropbtn">
            
            <i class="fa-solid fa-language fa-2x"></i>
        </button>
        <div class="dropdown-content">
            <a href="index.php">English</a>
            <a href="#">हिंदी</a>
            <a href="lang/index.php">മലയാളം</a>
        </div>
    </li>
            <li class="hideOnMobile"><a href="Patient/Patient_login.html" class="btn"><button class="book">Log&nbspin</button></a></li>
            <li onclick=showSideBar() class="close"><a href="#"><i class="fa-solid fa-bars"></i>
        </ul>
    </nav>

    <div class="img">
        <div class="container">
            <h1>CureConnect</h1>
            <p>Empowering Health, Connecting Lives</p>
            <a href="Patient/Patient_login.html" class="btn"><button class="book">Book&nbspAppointment&nbsp<i class="fa-solid fa-arrow-right"></i></button></a>
        </div>
                
            
    </div>
    <section id="logins">
        <!--
        <div class="login-sec">
            <h1>Logins</h1>
        </div>
        -->
        <div class="row">
          <div class="column">
            <div class="card">
                <div><img class="card-img" src="patient.jpg" alt="Card image"></div>
                <div><a href="Patient/Patient_login.html"><button class="login-btn">Patient Login</button></a></div>
                </div>
            </div>
          <div class="column">
            <div class="card"><div><img class="card-img" src="patient.jpg" alt="Card image"></div>
                <div><a href="Doctor/Doctor_login.html"><button class="login-btn">Doctor Login</button></a></div></div>
          </div>
          <div class="column">
            <div class="card"><div><img class="card-img" src="patient.jpg" alt="Card image"></div>
                <div><a href="Admin/Admin_login.html"><button class="login-btn">Admin Login</button></a></div></div>
          </div>
          
        </div>
    </section>
    <section id="Departments">
        <div class="dep-container">
            <h1>Our Departments</h1>

            <div class="box-container">
                <a href="">
                    <div class="box">
                    <i class="fa-solid fa-tooth fa-10x"></i>
                    <h3>Dentistry</h3>       
                </div>
                </a>
                <a href="#">
                    <div class="box">
                    <i class="fa-solid fa-heart-pulse fa-10x"></i>
                    <h3>Cardiologyy</h3>       
                </div>
                </a>
                
                <a href="">
                    <div class="box">
                    <i class="fa-solid fa-baby fa-10x"></i>
                    <h3>Pediatrics</h3>       
                </div>
                </a>
                <a href="">
                    <div class="box">
                    <i class="fa-solid fa-brain fa-10x"></i>
                    <h3>Neurology</h3>       
                </div>
                </a>
                <a href="">
                    <div class="box">
                    <i class="fa-solid fa-utensils fa-10x"></i>
                    <h3>Gastroenterology</h3>       
                </div>
                </a>
                <a href="">
                    <div class="box">
                    <i class="fa-solid fa-lungs fa-10x"></i>
                    <h3>Pulmonology</h3>       
                </div>
                </a>
                <a href="">
                    <div class="box">
                    <i class="fa-solid fa-bandage fa-10x"></i>
                    <h3>Dermatology</h3>       
                </div>
                </a>
                <a href="">
                    <div class="box">
                    <i class="fa-solid fa-syringe fa-10x"></i>
                    <h3>Hematology</h3>       
                </div>
                </a>
                <a href="">
                    <div class="box">
                    <i class="fa-solid fa-user-doctor fa-10x"></i>
                    <h3>General Surgery</h3>       
                </div>
                </a>                
            </div>
            
        </div>
        
    </section>
    

    <section id="about-us">
        <div class="wrapper">
            <!-- <img src="3.jpg"> -->
            <div class="text-box">
                <h2>About Us</h2>
               <p>Welcome to CureConnect, where healthcare access meets innovation. We are dedicated to revolutionizing the healthcare experience through our comprehensive web application. Our platform prioritizes user experience, promoting digital health management, and ensuring data privacy and security. 
                From finding nearby healthcare facilities to scheduling appointments seamlessly, we empower individuals to take charge of their well-being. With a focus on transparency, community engagement, and inclusivity, we strive to enhance accessibility to medical resources and foster informed decision-making. 
                Join us in reshaping healthcare for a healthier, more connected world.</p>
            </div>
        </div>
    </section>

    <section id="contact-us">
        <div class="contact-container">
        <div class="text">Contact us</div>
        <form action="contactus.php" method="post">
           <div class="form-row">
              <div class="input-data">
                 <input type="text" name="firstname"required>
                 <label for="">First Name</label>
              </div>
              <div class="input-data">
                 <input type="text" name="lastname"required>
                 <label for="">Last Name</label>
              </div>
           </div>
           <div class="form-row">
              <div class="input-data">
                 <input type="text" name="email"required>
                 <label for="">Email Address</label>
              </div>
              <div class="input-data">
                 <input type="text"name="subject" required>
                 <label for="">Subject</label>
              </div>
           </div>
           <div class="form-row">
              <div class="input-data textarea">
                 <textarea rows="8" cols="80" name="message"required></textarea>
                 <br />
                 <label for="">Write your message</label>
                 <br />
                 <div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                       <input type="submit" value="Submit">
                    </div>
                 </div>
              </div>
           </div>
        </form>
     </div>
    </div>
    </section>

     <section class="footer">
      <div class="footer-row">
        <div class="footer-col">
          <h4>Quick Links</h4>
          <ul class="links">
            <li><a href="index.php">Home</a></li>
            <li><a href="#Departments">Departments</a></li>
            <li><a href="Patient/Patient_login.html">Book Appointment</a></li>
            <li><a href="">Forum</a></li>
            <li><a href="#about-us">About Us</a></li>
            <li><a href="#contact-us">Contact Us</a></li>
            <li><a href="#logins">Login</a></li>
            <li><a href="Patient/patient_registration.html">Sign Up</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Legal</h4>
          <ul class="links">
            <li><a href="#">Customer Agreement</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Security</a></li>
            <li><a href="#">Testimonials</a></li>
            <li><a href="#">Copyright Information</a></li>
            <li><a href="">Partnerships</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Newsletter</h4>
          <p>
            Subscribe to our newsletter for a weekly dose
            of news, updates, helpful tips, and
            exclusive offers.
          </p>
          <form action="#">
            <input type="text" placeholder="Your email" required>
            <button type="submit">Subscribe</button>
          </form>
          <div class="icons">
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-linkedin"></i>
            <i class="fa-brands fa-github"></i>
          </div>
        </div>
      </div>
    </section>
    
 
</body>
</html>