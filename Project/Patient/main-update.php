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
        <span class="logo_name">CureConnect</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="index.html" class="active" >
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="main_search.php">
            <i class="fa-solid fa-user-doctor"></i>
            <span class="links_name">Search Doctors</span>
          </a>
          </li>
          <hr>
        <li>
          <a href="book-appointment.html" class="something">
            <i class="fa-solid fa-calendar-plus"></i>
            <span class="links_name">Book Appointment</span>
          </a>
          </li>
          <hr>
        <li>
          <a href="appointments-history.php">
            <i class="fa-solid fa-calendar-check"></i>
            <span class="links_name">Appointments History</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="medical-history.php">
            <i class="fa-solid fa-file-medical"></i>
            <span class="links_name">Medical History</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="contact-us.html" class="">
            <i class="fa-regular fa-circle-question"></i>
            <span class="links_name">Raise Queries</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="main-update.php">
            <i class="fa-solid fa-circle-user"></i>
            <span class="links_name">Manage Profile</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="settings.html">
            <i class="bx bx-cog"></i>
            <span class="links_name">Settings</span>
          </a>
        </li>
        <hr>
        <li class="log_out">
          <a href="logout.php">
            <i class="bx bx-log-out"></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
    <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Dashboard</span>
        </div>
        <!-- <div class="search-box">
          <input type="text" placeholder="Search Doctors..." />
          <i class="bx bx-search"></i>
        </div> -->
        <button class="profile-details dropbtn dropdown" onclick="toggleDropdown()">
          <i class="fa-solid fa-user-large"></i>
          <span class="admin_name">John Doe</span>
          <i class="bx bx-chevron-down"></i>
        </button>
        <div id="myDropdown" class="dropdown-content">
          <div class="dropdown-item">
            <a href="main-update.php"><i class="fa-solid fa-user"></i>Manage Profile</a>
            <hr>
          </div>
          <div class="dropdown-item">
            <a href="settings.html"><i class="fa-solid fa-gear"></i>Settings</a>
            <hr>
          </div>
          <div class="dropdown-item">
            <a href="patient_reset.html "><i class="fa-solid fa-key"></i>Change Password</a>
            <hr>
          </div>
        </div>
        
        
        
      </nav>

      <div class="home-content">
        <div class="main">
          <div class="profile-container">
            <div class="update-profile-form">
              <h2>Update Profile</h2>
              <br>
              <hr>
              <br>
              <form id="updateProfileForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <div class="form-group">
                  <label for="fullname">Full Name:</label>
                  <input type="text" id="fullname" name="fullname" placeholder="Your full name..">
                </div>
                <br>
                <div class="form-group">
                  <label for="address">Address:</label>
                  <input type="text" id="address" name="address" placeholder="Your address..">
                </div>
                <br>
                <div class="form-group">
                  <label for="city">City:</label>
                  <input type="text" id="city" name="city" placeholder="Your City">
                </div>
                <br>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" id="email" name="email" placeholder="Your email..">
                </div>
                <br>
                <div class="form-group">
                  <label>Gender:</label>
                  <div class="radio-buttons">
                    <input type="radio" id="female" name="gender" value="female" checked>
                    <label for="female">Female</label>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" id="saveButton">Save</button>
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
