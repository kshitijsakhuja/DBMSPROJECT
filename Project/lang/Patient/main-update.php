<?php
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hms";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $fullname = $_POST['fullname'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];

        // Prepare and bind statement
        $stmt = $conn->prepare("UPDATE users SET fullName=?, address=?, city=?, gender=?, email=? WHERE id=?");
        $stmt->bind_param("sssssi", $fullname, $address, $city, $gender, $email, $id);

        // Set parameters and execute
        $id = 1; // Assuming you want to update a specific row, change it as per your requirement
        $stmt->execute();

        $stmt->close();

        // Redirect after processing
        header("Location: main-update.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>CureConnect</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/5479b044dc.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="script.js"></script>
  </head>
  <body onload="onload()">
  <div class="sidebar">
      <div class="logo-details">
        <img src="logo.png" alt="logo">
        <span class="logo_name">ക്യൂർക്കണെക്റ്റ്</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="index.html" >
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">ഡാഷ്ബോർഡ്</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="main_search.php">
            <i class="fa-solid fa-user-doctor"></i>
            <span class="links_name">ഡോക്ടർ തിരയുക</span>
          </a>
          </li>
          <hr>
        <li>
          <a href="book-appointment.html">
            <i class="fa-solid fa-calendar-plus"></i>
            <span class="links_name" style="font-size: 14px;">അപ്പോയിന്റ്മെന്റ് <br> ബുക്ക് ചെയ്യുക</span>
          </a>
          </li>
          <hr>
        <li>
          <a href="appointments-history.php">
            <i class="fa-solid fa-calendar-check"></i>
            <span class="links_name" style="font-size: 14px;">അപ്പോയിന്റ്മെന്റ്<br>ഹിസ്റ്ററി</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="medical-history.php">
            <i class="fa-solid fa-file-medical"></i>
            <span class="links_name">മെഡിക്കൽ <br>ഹിസ്റ്ററി</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="contact-us.html">
            <i class="fa-regular fa-circle-question"></i>
            <span class="links_name" style="font-size: 14px;">ചോദ്യങ്ങൾ <br>ഉന്നയിക്കുക</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="main-update.php">
            <i class="fa-solid fa-circle-user"></i>
            <span class="links_name">പ്രൊഫൈൽ <br>മാനേജ് ചെയ്യുക</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="settings.html">
            <i class="bx bx-cog"></i>
            <span class="links_name">സെറ്റിംഗ്സ്</span>
          </a>
        </li>
        <hr>
        <li class="log_out">
          <a href="logout.php">
            <i class="bx bx-log-out"></i>
            <span class="links_name">ലോഗ് ഔട്ട്</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
    <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">ഡാഷ്ബോർഡ്</span>
        </div>
        <!-- <div class="search-box">
          <input type="text" placeholder="Search Doctors..." />
          <i class="bx bx-search"></i>
        </div> -->
        <button class="profile-details dropbtn dropdown" onclick="toggleDropdown()">
          <i class="fa-solid fa-user-large"></i>
          <span class="admin_name">ജോൺ ഡോ</span>
          <i class="bx bx-chevron-down"></i>
        </button>
        <div id="myDropdown" class="dropdown-content">
          <div class="dropdown-item">
            <a href="main-update.php"><i class="fa-solid fa-user"></i>പ്രൊഫൈൽ മാനേജ് ചെയ്യുക</a>
            <hr>
          </div>
          <div class="dropdown-item">
            <a href="settings.html"><i class="fa-solid fa-gear"></i>സെറ്റിംഗ്സ്</a>
            <hr>
          </div>
          <div class="dropdown-item">
            <a href="patient_reset.html "><i class="fa-solid fa-key"></i>പാസ്‌വേഡ് മാറ്റുക</a>
            <hr>
          </div>
        </div>
        
        
        
      </nav>

      <div class="home-content">
        <div class="main">
          <div class="profile-container">
            <div class="update-profile-form">
              <h2>പ്രൊഫൈൽ അപ്ഡേറ്റ് ചെയ്യുക</h2>
              <br>
              <hr>
              <br>
              <form id="updateProfileForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <div class="form-group">
                  <label for="fullname">പൂർണ്ണ പേര്:</label>
                  <input type="text" id="fullname" name="fullname" placeholder="നിങ്ങളുടെ പൂർണ നാമം....">
                </div>
                <br>
                <div class="form-group">
                  <label for="address">വിലാസം:</label>
                  <input type="text" id="address" name="address" placeholder="നിങ്ങളുടെ വിലാസം....">
                </div>
                <br>
                <div class="form-group">
                  <label for="city">നഗരം:</label>
                  <input type="text" id="city" name="city" placeholder="നിങ്ങളുടെ നഗരം">
                </div>
                <br>
                <div class="form-group">
                  <label for="email">ഇമെയിൽ:</label>
                  <input type="email" id="email" name="email" placeholder="നിങ്ങളുടെ ഇമെയിൽ..">
                </div>
                <br>
                <div class="form-group">
                  <label>ലിംഗഭേദം:</label>
                  <div class="radio-buttons">
                    <input type="radio" id="female" name="gender" value="female" checked>
                    <label for="female">സ്ത്രീ</label>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">പുരുഷൻ</label>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" id="saveButton">സേവ്</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <script>
        // Sidebar toggle script
      </script>
  </body>
</html>
