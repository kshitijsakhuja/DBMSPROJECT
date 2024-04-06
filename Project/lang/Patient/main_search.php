<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>ക്യൂർക്കണെക്റ്റ്</title>
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
          <span class="dashboard">ഡാഷ്ബോർഡ്</span>
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
            <a href="patient_reset.html"><i class="fa-solid fa-key"></i>പാസ്‌വേഡ് മാറ്റുക</a>
            <hr>
          </div>
        </div>
        
        
        
      </nav>

      <div class="home-content">

        <div class="main ">
          <div class="search-container">
            <h1>ഡോക്ടർ തിരയുക </h1><br><br>
            <form action="main_search.php" method="post">
            <label for="department">വകുപ്പ് തിരഞ്ഞെടുക്കുക:</label>
            <select name="department" id="department">
              <option value="All">എല്ലാ വകുപ്പുകളും</option>
              <option value="Dentistry">ദന്തചികിത്സ</option>
              <option value="Cardiology">കാർഡിയോളജി</option>
              <option value="Pediatrics">പീഡിയാട്രിക്സ്</option>
              <option value="Neurology">ന്യൂറോളജി</option>
              <option value="Gastroenterology">ഗ്യാസ്ട്രോഎൻട്രോളജി</option>
              <option value="Pulmonology">പൾമണോളജി</option>
              <option value="Dermatology">ഡെർമറ്റോളജി</option>
              <option value="Hematology">ഹെമറ്റോളജി</option>
              <option value="General Surgery">ജനറൽ സർജറി</option>
            </select><br><br>   
            <input type="submit" value="തിരയുക">
            </form>
    <div id="results">
      <div class = 'searchresults'>
        <h1>തിരയൽ ഫലങ്ങൾ:</h1><br>
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
                    <th>പേര്</th>
                    <th>വകുപ്പ്</th>
                </tr>';
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo '<tr><td> ' . $row["doctorName"] . '</td><td> ' . $row["specialization"] . '</td></tr>';
            }
            echo '</table>';
        } else {
            echo "<h3>0 ഫലങ്ങൾ</h3>";
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



    
