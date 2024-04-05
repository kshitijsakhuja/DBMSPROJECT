<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Search Patient</title>
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
          <a href="index.html" >
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="search_patient.php">
            <i class="fa-solid fa-users"></i>
            <span class="links_name">Search Patients</span>
          </a>
          </li>
          <hr>
        <li>
          <a href="manage-appointment.php">
            <i class="fa-regular fa-calendar-plus"></i>
            <span class="links_name">Manage Appointments</span>
          </a>
          </li>
          <hr>
        <li>
          <a href="appointments-history.php">
            <i class="fa-regular fa-calendar-check"></i>
            <span class="links_name">Appointments History</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="contact-us.html">
            <i class="fa-regular fa-circle-question"></i>
            <span class="links_name">Support</span>
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
          <input type="text" placeholder="Search Patients..." />
          <i class="bx bx-search"></i>
        </div> -->
        <button class="profile-details dropbtn dropdown" onclick="toggleDropdown()">
          <i class="fa-solid fa-user-large"></i>
          <span class="admin_name">Anuj Kumar</span>
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
            <a href="doctor_reset.html"><i class="fa-solid fa-key"></i>Change Password</a>
            <hr>
          </div>
        </div>
      </nav>

        <div class="home-content">

        <div class="main ">
          <div class="search-container">
            <h1>Search Patient</h1><br><br>
            <form action="search_patient.php" method="post">
            <h3><label for="patient">Enter Patient Name:</label>
            <input type="text" id="p_name" name="p_name" placeholder="Enter Name..."></h3> <br><br>
            <input type="submit" value="Search"><br><br>
            </form>
    <div id="results">
      <div class = 'searchresults'>
        <h1><center>Search Results:</center></h1><br>
        
        
        <?php
  // Establishing connection to the database
          $servername = "localhost";
          $username = "root"; // Replace with your MySQL username
          $password = ""; // Replace with your MySQL password
          $dbname = "hms"; // Replace with your database name

          $conn = new mysqli($servername, $username, $password, $dbname);

          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }

          // Retrieving search query
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $patient = $_POST['p_name'];
            // Modified SQL query to include WHERE clause
            $sql = "SELECT * FROM tblpatient WHERE PatientName LIKE '%$patient%'";

            $result = $conn->query($sql);
            echo '<table>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Gender</th>
                    <th>Age</th>
                  </tr>';
            if ($result->num_rows > 0) {
              // Output data of each row
              while ($row = $result->fetch_assoc()) {
                echo '<tr><td> ' . $row["PatientName"] . '</td><td> ' . $row["PatientEmail"] . '</td><td> ' . $row["PatientContno"] . '</td><td> ' . $row["PatientGender"] . '</td><td> ' . $row["PatientAge"] . '</td></tr>';
              }
            } else {
              echo "<tr><td colspan='4'>No results found</td></tr>";
            }
            echo '</table>';
            $conn->close();
          }
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
  