<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Home</title>
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
          <a href="search_patient.php">
            <i class="fa-solid fa-users"></i>
            <span class="links_name">രോഗിയെ തിരയുക</span>
          </a>
          </li>
          <hr>
        <li>
          <a href="manage-appointment.php">
            <i class="fa-regular fa-calendar-plus"></i>
            <span class="links_name">അപ്പോയിൻ്റ്മെൻ്റ്<br>മാനേജ് ചെയ്യുക</span>
          </a>
          </li>
          <hr>
        <li>
          <a href="appointments-history.php">
            <i class="fa-regular fa-calendar-check"></i>
            <span class="links_name">അപ്പോയിന്റ്മെന്റ്<br>ഹിസ്റ്ററി</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="contact-us.html">
            <i class="fa-regular fa-circle-question"></i>
            <span class="links_name">പിന്തുണ</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="main-update.php">
            <i class="fa-solid fa-circle-user"></i>
            <span class="links_name">പ്രൊഫൈൽ<br>മാനേജ് ചെയ്യുക</span>
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
          <input type="text" placeholder="Search Patients..." />
          <i class="bx bx-search"></i>
        </div> -->
        <button class="profile-details dropbtn dropdown" onclick="toggleDropdown()">
          <i class="fa-solid fa-user-large"></i>
          <span class="admin_name">അനൂജ് കുമാർ</span>
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
            <a href="doctor_reset.html"><i class="fa-solid fa-key"></i>പാസ്‌വേഡ് മാറ്റുക</a>
            <hr>
          </div>
        </div>
      </nav>

      <div class="home-content">
        <div class="main">
          <div class="main-head">
            <h2>അപ്പോയിൻ്റ്മെൻ്റ് മാനേജ് ചെയ്യുക</h2><br><hr><br><br>
          </div>
          <div class="table-container">

<table>
<tr>
    <th>അപ്പോയിൻ്റ്മെൻ്റ്<br>ഐഡി</th>
    <!-- <th>ഡോക്ടറുടെ <br>പേര്</th> -->
    <th>രോഗികളുടെ പേര്</th>
    <th>സ്പെഷ്യലൈസേഷന്‍</th>
    <th>അപ്പോയിൻ്റ്മെൻ്റ്<br>തീയതി</th>
    <th>അപ്പോയിൻ്റ്മെൻ്റ് <br>സമയം</th>
    <th>സൃഷ്ടിച്ച <br>ദിനം/സമയം</th>
    <th>നടപടി</th>
  </tr>
  <!-- <tr>
    <td>1</td>
    <td>John Doe</td>
    <td>Dr. Smith</td>
    <td>2024-03-20 10:00 AM</td>
    <td>2024-03-15 08:30 AM</td>
    <td class="status completed">Confirmed</td>
    <td>
      <button class="edit"><i class="fas fa-pen"></i></button>
      <button class="delete"><i class="fas fa-trash-can"></i></button>
    </td>
  </tr>
  <tr>
    <td>2</td>
    <td>Jane Smith</td>
    <td>Dr. Johnson</td>
    <td>2024-03-21 02:30 PM</td>
    <td>2024-03-16 09:45 AM</td>
    <td class="status pending">Pending</td>
    <td>
      <button class="edit"><i class="fas fa-pen"></i></button>
      <button class="delete"><i class="fas fa-trash-can"></i></button>
    </td>
  </tr>
  <tr>
    <td>3</td>
    <td>Michael Brown</td>
    <td>Dr. Lee</td>
    <td>2024-03-22 11:15 AM</td>
    <td>2024-03-17 10:20 AM</td>
    <td class="status completed">Confirmed</td>
    <td>
      <button class="edit"><i class="fas fa-pen"></i></button>
      <button class="delete"><i class="fas fa-trash-can"></i></button>
    </td>
  </tr> -->
  <!-- Include more rows as needed -->

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
$sql = "SELECT * FROM appointment";
$result = $conn->query($sql);

if ($result === false) {
    die("Error executing query: " . $conn->error);
}

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";;
        // echo "<td>" . $row['doctor'] . "</td>";
        echo "<td>" . $row['P_name'] . "</td>";
        echo "<td>" . $row['doctorSpecialization'] . "</td>";
        echo "<td>" . $row['appointmentDate'] . "</td>";
        echo "<td>" . $row['appointmentTime'] . "</td>";
        echo "<td>" . $row['postingDate'] . "</td>";
        // echo "<td class='status " . ($row['status'] == 'Confirmed' ? 'completed' : 'pending') . "'>" . $row['status'] . "</td>";
        echo "<td>
        <a href='delete_medhis.php? deleteid=".$row['id']."'>
        <button class='delete'><i class='fas fa-trash-alt'></i></button>   
        </a>
              </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>അപ്പോയിന്റ്മെന്റുകൾ ഒന്നും കണ്ടെത്തിയില്ല</td></tr>";
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
