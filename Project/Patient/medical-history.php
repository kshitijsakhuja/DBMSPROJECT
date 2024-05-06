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
          <a href="medical-history.html">
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
            <a href="patient_reset.html"><i class="fa-solid fa-key"></i>Change Password</a>
            <hr>
          </div>
        </div>
      </nav>

      <div class="home-content">
        <div class="main">
          <h2>Medical History</h2><br><hr><br><br>
          <div class="main-head">
            <a href="add-medical-history.html"><button><i class="fa-solid fa-plus"></i>Add Record</button></a>
          </div>
          <div class="table-container">
<table>
  <tr>
    <th>SLNO</th>
    <th>Blood Pressure</th>
    <th>Weight</th>
    <th>Blood Sugar</th>
    <th>Body Temperature</th>
    <th>Medical Prescription</th>
    <th>Last Updated Date</th>
    <th>Action</th>
  </tr>
  <!-- <tr>
    <td>1</td>
    <td>80/120</td>
    <td>85</td>
    <td>120</td>
    <td>98</td>
    <td>Test</td>
    <td>2022-11-06 18:49:41</td>
    <td>
      <button class="edit"><i class="fa-solid fa-pen"></i></button>
      <button class="delete"><i class="fa-solid fa-trash-can"></i></button>
    </td>
  </tr>
  <tr>
    <td>2</td>
    <td>90/130</td>
    <td>75</td>
    <td>110</td>
    <td>97</td>
    <td>Prescription 1</td>
    <td>2022-12-15 10:30:15</td>
    <td>
      <button class="edit"><i class="fa-solid fa-pen"></i></button>
      <button class="delete"><i class="fa-solid fa-trash-can"></i></button>
    </td>
  </tr>
  <tr>
    <td>3</td>
    <td>85/125</td>
    <td>80</td>
    <td>115</td>
    <td>99</td>
    <td>Prescription 2</td>
    <td>2023-01-10 14:20:30</td>
    <td>
      <button class="edit"><i class="fa-solid fa-pen"></i></button>
      <button class="delete"><i class="fa-solid fa-trash-can"></i></button>
    </td>
  </tr> -->
  <!-- Add more rows as needed -->

  <?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = ''; // If your password is empty, leave it as an empty string
$dbname = "hms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM tblmedicalhistory";
$result = $conn->query($sql);

if ($result === false) {
    die("Error executing query: " . $conn->error);
}

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";;
        echo "<td>" . $row['BloodPressure'] . "</td>";
        echo "<td>" . $row['Weight'] . "</td>";
        echo "<td>" . $row['BloodSugar'] . "</td>";
        echo "<td>" . $row['Temperature'] . "</td>";
        echo "<td>" . $row['MedicalPres'] . "</td>";
        echo "<td>" . $row['CreationDate'] . "</td>";
        // echo "<td class='status " . ($row['status'] == 'Confirmed' ? 'completed' : 'pending') . "'>" . $row['status'] . "</td>";
        echo "<td>
                <a href='delete_medhis.php? deleteid=" .$row['ID']."'>
                <button class='delete'><i class='fas fa-trash-can'></i></button>
                </a>
              </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>No appointments found</td></tr>";
}
$conn->close();
?>
</table>






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
