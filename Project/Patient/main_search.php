<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>CureConnect</title>
    <link rel="stylesheet" href="search_style.css" />
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
          <a href="#main_search.php">
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
          <a href="#">
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
            <a href="patient_reset.html"><i class="fa-solid fa-key"></i>Change Password</a>
            <hr>
          </div>
        </div>
        
        
        
      </nav>

      <div class="home-content">

        <div class="main ">
          <div class="search-container">
            <h1>Doctor Search</h1><br><br>
            <form action="main_search.php" method="post">
            <label for="department">Select Department:</label>
            <select name="department" id="department">
              <option value="All">All Departments</option>
              <option value="Dentistry">Dentistry</option>
              <option value="Cardiology">Cardiology</option>
              <option value="Pediatrics">Pediatrics</option>
              <option value="Neurology">Neurology</option>
              <option value="Gastroenterology">Gastroenterology</option>
              <option value="Pulmonology">Pulmonology</option>
              <option value="Dermatology">Dermatology</option>
              <option value="Hematology">Hematology</option>
              <option value="General Surgery">General Surgery</option>
            </select><br><br>   
            <input type="submit" value="Search">
            </form>
    <div id="results">
      <div class = 'searchresults'>
        <h1>Search Results:</h1><br>
        <?php
// Establishing connection to the database
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "hms"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieving search query
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $specilization = $_POST['department'];

    // Constructing SQL query
    if ($specilization == "" || $specilization == 'All') {
        $sql = "SELECT * FROM doctors";
    } else {
        // Using prepared statement to prevent SQL injection
        $sql = "SELECT * FROM doctors WHERE specialization = ?";
    }

    // Prepare and bind SQL statement
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        if ($specilization != "" && $specilization != 'All') {
            $stmt->bind_param("s", $specilization);
        }

        // Execute SQL statement
        $stmt->execute();

        // Get result set
        $result = $stmt->get_result();

        // Output data
        if ($result->num_rows > 0) {
            echo '<table>
                <tr>
                    <th>Name</th>
                    <th>Department</th>
                </tr>';
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo '<tr><td> ' . $row["doctorName"] . '</td><td> ' . $row["specialization"] . '</td></tr>';
            }
            echo '</table>';
        } else {
            echo "<h3>0 results</h3>";
        }

        // Close result set
        $stmt->close();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>

      </div>
    </div>
        </div>        
        </div>
    </div>
    


    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function () {
          sidebar.classList.toggle("active");
          if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
          } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        };
      </script>
    </body>
    </html>



    
