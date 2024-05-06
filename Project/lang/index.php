<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <script src="https://kit.fontawesome.com/5479b044dc.js" crossorigin="anonymous"></script>
    <title >ക്യൂർക്കണെക്റ്റ്</title>


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
            <li><a href="">ഹോം&nbspപേജ്</a></li>
            <li><a href="#Departments">ശാഖകൾ</a></li>
            <li><a href="">ഫോറം</a></li>
            <li><a href="#about-us">ഞങ്ങളെപ്പറ്റി&nbspഅറിയുക</a></li>
            <li><a href="#contact-us">ഞങ്ങളെ&nbspസമീപിക്കുക</a></li>
            <li class="dropdown" >
            <a class="dropbtn">ഭാഷ</a>
                <div class="dropdown-content">
                    <a href="/project/index.php">English</a>
                    <a href="#">हिंदी</a>
                    <a href="index.php">മലയാളം</a> 
                </div>
            </li>
            
            <li><a href="user-login.html" class="btn"><button class="book">ലോഗിൻ</button></a></li>
        </ul>
    </nav>
    <nav class="desktop">
        <ul >
            <li><a style="font-size:80%" href="">ക്യൂർക്കണെക്റ്റ്</a></li>
            <li class="hideOnMobile"><a href="index.php">ഹോം&nbspപേജ്</a></li>
            <li class="hideOnMobile"><a href="#Departments">ശാഖകൾ</a></li>
            <li class="hideOnMobile"><a href="">ഫോറം</a></li>
            <li class="hideOnMobile"><a href="#about-us">ഞങ്ങളെപ്പറ്റി&nbspഅറിയുക</a></li>
            <li class="hideOnMobile"><a href="#contact-us">ഞങ്ങളെ&nbspസമീപിക്കുക</a></li>
            <li class="dropdown hideOnMobile" >
        <button class="dropbtn">
            
            <i class="fa-solid fa-language fa-2x"></i>
        </button>
        <div class="dropdown-content">
            <a href="/project/index.php">English</a>
            <a href="#">हिंदी</a>
            <a href="index.php">മലയാളം</a>
        </div>
    </li>
            <li class="hideOnMobile"><a href="Patient/Patient_login.html" class="btn"><button class="book">ലോഗിൻ</button></a></li>
            <li onclick=showSideBar() class="close"><a href="#"><i class="fa-solid fa-bars"></i>
        </ul>
    </nav>

    <div class="img">
        <div class="container">
            <h1>ക്യൂർക്കണെക്റ്റ്</h1>
            <p>ആരോഗ്യം ശക്തിപ്പെടുത്തുന്നു,ജീവനുകൾ കൂട്ടുന്നു</p>
            <a href="Patient/Patient_login.html" class="btn"><button class="book">ബുക്ക്&nbspഅപ്പോയിൻ്റ്മെൻ്റ്&nbsp<i class="fa-solid fa-arrow-right"></i></button></a>
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
                <div><a href="Patient/Patient_login.html"><button class="login-btn">രോഗി ലോഗിൻ</button></a></div>
                </div>
            </div>
          <div class="column">
            <div class="card"><div><img class="card-img" src="patient.jpg" alt="Card image"></div>
                <div><a href="Doctor/Doctor_login.html"><button class="login-btn">ഡോക്ടർ ലോഗിൻ</button></a></div></div>
          </div>
          <div class="column">
            <div class="card"><div><img class="card-img" src="patient.jpg" alt="Card image"></div>
                <div><a href="Admin/Admin_login.html"><button class="login-btn">അഡ്മിൻ ലോഗിൻ</button></a></div></div>
          </div>
          
        </div>
    </section>
    <section id="Departments">
        <div class="dep-container">
            <h1>ഞങ്ങളുടെ ശാഖകൾ</h1>

            <div class="box-container">
                <a href="">
                    <div class="box">
                    <i class="fa-solid fa-tooth fa-10x"></i>
                    <h3>ദന്തചികിത്സ</h3>       
                </div>
                </a>
                <a href="#">
                    <div class="box">
                    <i class="fa-solid fa-heart-pulse fa-10x"></i>
                    <h3>ഹൃദയചികിത്സ</h3>       
                </div>
                </a>
                
                <a href="">
                    <div class="box">
                    <i class="fa-solid fa-baby fa-10x"></i>
                    <h3>ബാലചികിത്സ</h3>       
                </div>
                </a>
                <a href="">
                    <div class="box">
                    <i class="fa-solid fa-brain fa-10x"></i>
                    <h3>നാഡിശാസ്ത്രം</h3>       
                </div>
                </a>
                <a href="">
                    <div class="box">
                    <i class="fa-solid fa-utensils fa-10x"></i>
                    <h3>ജഠരചികിത്സ</h3>       
                </div>
                </a>
                <a href="">
                    <div class="box">
                    <i class="fa-solid fa-lungs fa-10x"></i>
                    <h3>നിറകചികിത്സ</h3>       
                </div>
                </a>
                <a href="">
                    <div class="box">
                    <i class="fa-solid fa-bandage fa-10x"></i>
                    <h3>ചര്‍മ്മശാസ്ത്രം</h3>       
                </div>
                </a>
                <a href="">
                    <div class="box">
                    <i class="fa-solid fa-syringe fa-10x"></i>
                    <h3>രക്തചികിത്സ</h3>       
                </div>
                </a>
                <a href="">
                    <div class="box">
                    <i class="fa-solid fa-user-doctor fa-10x"></i>
                    <h3>ജനറൽ സർജറി</h3>       
                </div>
                </a>                
            </div>
            
        </div>
        
    </section>

    <section id="about-us">
        <div class="wrapper">
            <div class="text-box">
                <h2>ഞങ്ങളെപ്പറ്റി അറിയുക</h2><br><br>
               <p><i>ക്യൂർക്കണെക്റ്റ്-ലേക്ക് സ്വാഗതം, അവിടെ ഹെൽത്ത്‌കെയർ ആക്‌സസ് നൂതനത്വവുമായി പൊരുത്തപ്പെടുന്നു. ഞങ്ങളുടെ സമഗ്രമായ വെബ് ആപ്ലിക്കേഷനിലൂടെ ആരോഗ്യ പരിരക്ഷാ അനുഭവത്തിൽ വിപ്ലവം സൃഷ്ടിക്കാൻ ഞങ്ങൾ പ്രതിജ്ഞാബദ്ധരാണ്. ഞങ്ങളുടെ പ്ലാറ്റ്ഫോം ഉപയോക്തൃ അനുഭവത്തിന് മുൻഗണന നൽകുന്നു, ഡിജിറ്റൽ ആരോഗ്യ മാനേജ്മെൻ്റ് പ്രോത്സാഹിപ്പിക്കുന്നു, ഡാറ്റ സ്വകാര്യതയും സുരക്ഷയും ഉറപ്പാക്കുന്നു. സമീപത്തുള്ള ആരോഗ്യ സംരക്ഷണ സൗകര്യങ്ങൾ കണ്ടെത്തുന്നത് മുതൽ അപ്പോയിൻ്റ്‌മെൻ്റുകൾ തടസ്സമില്ലാതെ ഷെഡ്യൂൾ ചെയ്യുന്നത് വരെ, വ്യക്തികളെ അവരുടെ ക്ഷേമത്തിൻ്റെ ചുമതല ഏറ്റെടുക്കാൻ ഞങ്ങൾ പ്രാപ്തരാക്കുന്നു. സുതാര്യത, കമ്മ്യൂണിറ്റി ഇടപഴകൽ, ഉൾക്കൊള്ളൽ എന്നിവയിൽ ശ്രദ്ധ കേന്ദ്രീകരിച്ചുകൊണ്ട്, മെഡിക്കൽ ഉറവിടങ്ങളിലേക്കുള്ള പ്രവേശനക്ഷമത വർദ്ധിപ്പിക്കാനും അറിവുള്ള തീരുമാനങ്ങളെടുക്കൽ പ്രോത്സാഹിപ്പിക്കാനും ഞങ്ങൾ ശ്രമിക്കുന്നു. ആരോഗ്യകരവും കൂടുതൽ ബന്ധിതവുമായ ഒരു ലോകത്തിനായി ആരോഗ്യ സംരക്ഷണത്തെ പുനർനിർമ്മിക്കുന്നതിൽ ഞങ്ങളോടൊപ്പം ചേരുക</i></p>
            </div>
        </div>
    </section>

    <section id="contact-us">
        <div class="contact-container">
        <div class="text">ഞങ്ങളെ സമീപിക്കുക</div>
        <form action="contactus.php" method="post">
           <div class="form-row">
              <div class="input-data">
                 <input type="text" name="firstname"required>
                 <label for="">ആദ്യപേര്</label>
              </div>
              <div class="input-data">
                 <input type="text" name="lastname"required>
                 <label for="">അവസാനപേര്</label>
              </div>
           </div>
           <div class="form-row">
              <div class="input-data">
                 <input type="text" name="email"required>
                 <label for="">ഇമെയിൽ വിലാസം</label>
              </div>
              <div class="input-data">
                 <input type="text"name="subject" required>
                 <label for="">വിഷയം</label>
              </div>
           </div>
           <div class="form-row">
              <div class="input-data textarea">
                 <textarea rows="8" cols="80" name="message"required></textarea>
                 <br />
                 <label for="">നിങ്ങളുടെ സന്ദേശം എഴുതുക</label>
                 <br />
                 <div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                       <input type="submit" value="സമർപ്പിക്കുക">
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
          <h4>ലിങ്കുകൾ</h4>
          <ul class="links">
            <li><a href="">ഹോം</a></li>
            <li><a href="#Departments">വകുപ്പുകൾ</a></li>
            <li><a href="/project/Patient/Patient_login.html">അപ്പോയിന്റ്മെന്റ് ബുക്ക് ചെയ്യുക</a></li>
            <li><a href="">ഫോറം</a></li>
            <li><a href="#about-us">ഞങ്ങളെപ്പറ്റി</a></li>
            <li><a href="#contact-us">ഞങ്ങളെ സമീപിക്കുക</a></li>
            <li><a href="#logins">ലോഗിൻ</a></li>
            <li><a href="/project/Patient/patient_registration.html">സൈൻ അപ്പ് ചെയ്യുക</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Legal</h4>
          <ul class="links">
            <li><a href="#">കസ്റ്റമർ അറിയേണ്ടത്</a></li>
            <li><a href="#">പ്രൈവസി പോളിസി</a></li>
            <li><a href="#">സുരക്ഷ</a></li>
            <li><a href="#">ടെസ്റ്റിമോണിയൽസ്</a></li>
            <li><a href="#">പകർപ്പവകാശം</a></li>
            <li><a href="">കൂട്ടായ്മ</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>വാർത്താക്കുറിപ്പുകൾ</h4>
          <p>
            പ്രതിവാര വാർത്തകൾ, അപ്ഡേറ്റുകൾ, സഹായകരമായ നുറുങ്ങുകൾ, എക്സ്ക്ലൂസീവ് ഓഫറുകൾ എന്നിവയ്ക്കായി ഞങ്ങളുടെ വാർത്താക്കുറിപ്പ് സബ്സ്ക്രൈബ് ചെയ്യുക.
          </p>
          <form action="#">
            <input type="text" placeholder="നിങ്ങളുടെ ഇമെയിൽ" required>
            <button type="submit">സബ്സ്ക്രൈബ്</button>
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