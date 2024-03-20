<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <script src="https://kit.fontawesome.com/5479b044dc.js" crossorigin="anonymous"></script>
    <title>ക്യൂർക്കണെക്റ്റ്</title>


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
            <li onclick=hideSideBar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
            <li><a href="">ഹോം പേജ്</a></li>
            <li><a href="#Departments">ശാഖകൾ</a></li>
            <li><a href="">ഫോറം</a></li>
            <li><a href="#about-us">ഞങ്ങളെപ്പറ്റി അറിയുക</a></li>
            <li class="dropdown" >
            <a class="dropbtn">ഭാഷ</a>
        <div class="dropdown-content">
            <a href="#">English</a>
            <a href="#">हिंदी</a>
            <a href="#">മലയാളം</a>
        </div>
    </li>
            <li><a href="#contact-us">ഞങ്ങളെ സമീപിക്കുക</a></li>
            <li><a href="#logins">ലോഗിൻ</a></li>
            <li><a href="user-login.html" class="btn"><button class="book">അപ്പോയിന്റ്മെന്റ് ബുക്ക് ചെയ്യുക</button></a></li>
        </ul>
    </nav>
    <nav class="desktop">
        <ul >
            <li><a href="">ക്യൂർക്കണെക്റ്റ്</a></li>
            <li class="hideOnMobile"><a href="">ഹോം പേജ്</a></li>
            <li class="hideOnMobile"><a href="#Departments">ശാഖകൾ</a></li>
            <li class="hideOnMobile"><a href="">ഫോറം</a></li>
            <li class="hideOnMobile"><a href="#about-us">ഞങ്ങളെപ്പറ്റി അറിയുക</a></li>
            <li class="dropdown hideOnMobile" >
        <button class="dropbtn">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M480-80q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-155.5t86-127Q252-817 325-848.5T480-880q83 0 155.5 31.5t127 86q54.5 54.5 86 127T880-480q0 82-31.5 155t-86 127.5q-54.5 54.5-127 86T480-80Zm0-82q26-36 45-75t31-83H404q12 44 31 83t45 75Zm-104-16q-18-33-31.5-68.5T322-320H204q29 50 72.5 87t99.5 55Zm208 0q56-18 99.5-55t72.5-87H638q-9 38-22.5 73.5T584-178ZM170-400h136q-3-20-4.5-39.5T300-480q0-21 1.5-40.5T306-560H170q-5 20-7.5 39.5T160-480q0 21 2.5 40.5T170-400Zm216 0h188q3-20 4.5-39.5T580-480q0-21-1.5-40.5T574-560H386q-3 20-4.5 39.5T380-480q0 21 1.5 40.5T386-400Zm268 0h136q5-20 7.5-39.5T800-480q0-21-2.5-40.5T790-560H654q3 20 4.5 39.5T660-480q0 21-1.5 40.5T654-400Zm-16-240h118q-29-50-72.5-87T584-782q18 33 31.5 68.5T638-640Zm-234 0h152q-12-44-31-83t-45-75q-26 36-45 75t-31 83Zm-200 0h118q9-38 22.5-73.5T376-782q-56 18-99.5 55T204-640Z"/></svg>
        </button>
        <div class="dropdown-content">
            <a href="#">English</a>
            <a href="#">Hindi</a>
            <a href="#">മലയാളം</a>
        </div>
    </li>
            <li class="hideOnMobile"><a href="#contact-us">ഞങ്ങളെ സമീപിക്കുക</a></li>
            <li class="hideOnMobile"><a href="#logins">ലോഗിൻ</a></li>
            <li class="hideOnMobile"><a href="user-login.html" class="btn"><button class="book">അപ്പോയിന്റ്മെന്റ് ബുക്ക് ചെയ്യുക</button></a></li>
            <li onclick=showSideBar() class="close"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
        </ul>
    </nav>

    <div class="img">
        <div class="container">
            <h1>ക്യൂർക്കണെക്റ്റ്</h1>
            <p>Eആരോഗ്യം ശക്തിപ്പെടുത്തുന്നു, ജീവനുകൾ കൂട്ടുന്നു</p>
        </div>
                
            
    </div>
    <section id="logins">
        <div class="login-sec">
            <h1 >ലോഗി‌നുകൾ</h1>
        </div>
        
        <div class="row">
          <div class="column">
            <div class="card">
                <div><img class="card-img" src="patient.jpg" alt="Card image"></div>
                <div><a href="user-login.html"><button class="login-btn">രോഗി ലോഗിൻ</button></a></div>
                </div>
            </div>
          <div class="column">
            <div class="card"><div><img class="card-img" src="patient.jpg" alt="Card image"></div>
                <div><a href="doctor-login.html"><button class="login-btn">ഡോക്ടർ ലോഗിൻ</button></a></div></div>
          </div>
          <div class="column">
            <div class="card"><div><img class="card-img" src="patient.jpg" alt="Card image"></div>
                <div><a href="admin-login.html"><button class="login-btn">അഡ്മിൻ ലോഗിൻ</button></a></div></div>
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
                    <h3>ബാലചികിത്സ </h3>       
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
                    <h3>ജഠരചികിത്സ </h3>       
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
                    <h3>രക്തചികിത്സ </h3>       
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
            <img src="3.jpg">
            <div class="text-box">
                <h2>ഞങ്ങളെപ്പറ്റി അറിയുക</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nisi nisi, egestas accumsan justo et, ultrices luctus lectus. Etiam fermentum pharetra nisi lacinia pretium. Sed eget sollicitudin tellus. Donec ornare nibh elit, id posuere lorem dapibus a. Donec justo lorem, tempus ut luctus nec, porta nec ipsum. Nulla posuere aliquam metus nec viverra. Aliquam erat volutpat. Quisque risus lorem, tincidunt ac nunc id, elementum tincidunt nunc. Duis dui arcu, dapibus sit amet magna quis, sodales placerat risus. Aliquam finibus commodo mauris, non pretium neque scelerisque ut. Nam ut neque quis odio facilisis lacinia in at ante. Phasellus pellentesque euismod arcu id eleifend.</p>
            </div>
        </div>
    </section>

    <section id="contact-us">
        <div class="contact-container">
        <div class="text">ഞങ്ങളെ സമീപിക്കുക</div>
        <form action="#">
           <div class="form-row">
              <div class="input-data">
                 <input type="text" required>
                 <label for="">ആദ്യപേര്</label>
              </div>
              <div class="input-data">
                 <input type="text" required>
                 <label for="">അവസാനപേര്</label>
              </div>
           </div>
           <div class="form-row">
              <div class="input-data">
                 <input type="text" required>
                 <label for="">ഇമെയിൽ വിലാസം</label>
              </div>
              <div class="input-data">
                 <input type="text" required>
                 <label for="">വിഷയം</label>
              </div>
           </div>
           <div class="form-row">
              <div class="input-data textarea">
                 <textarea rows="8" cols="80" required></textarea>
                 <br />
                 <label for="">നിങ്ങളുടെ സന്ദേശം എഴുതുക</label>
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
          <h4>ലിങ്കുകൾ</h4>
          <ul class="links">
            <li><a href="">ഹോം</a></li>
            <li><a href="#Departments">വകുപ്പുകൾ</a></li>
            <li><a href="user-login.html">അപ്പോയിന്റ്മെന്റ് ബുക്ക് ചെയ്യുക</a></li>
            <li><a href="">ഫോറം</a></li>
            <li><a href="#about-us">ഞങ്ങളെപ്പറ്റി</a></li>
            <li><a href="#contact-us">ഞങ്ങൾക്ക് സമീപിക്കുക</a></li>
            <li><a href="#logins">ലോഗിൻ</a></li>
            <li><a href="register.html">സൈൻ അപ്പ് ചെയ്യുക</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>ലീഗൽ</h4>
          <ul class="links">
            <li><a href="#">കസ്റ്റമർ അറിയേണ്ടത്</a></li>
            <li><a href="#">പ്രൈവസി പോളിസി</a></li>
            <li><a href="#">സുരക്ഷ</a></li>
            <li><a href="#">ടെസ്റ്റിമോണിയൽസ്</a></li>
            <li><a href="#">പകർപ്പവകാശം</a></li>
            <li><a href="">കൂറ്റായ്മ</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>വാർത്താക്കുറിപ്പുകൾ</h4>
          <p>
            പ്രതിവാര വാർത്തകൾ, അപ്ഡേറ്റുകൾ, സഹായകരമായ നുറുങ്ങുകൾ, എക്സ്ക്ലൂസീവ് ഓഫറുകൾ എന്നിവയ്ക്കായി ഞങ്ങളുടെ വാർത്താക്കുറിപ്പ് സബ്സ്ക്രൈബ് ചെയ്യുക.
          </p>
          <form action="#">
            <input type="text" placeholder="നിങ്ങളുടെ ഇമെയിൽ" required>
            <button type="submit">സബ്സ്ക്രൈബ് </button>
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