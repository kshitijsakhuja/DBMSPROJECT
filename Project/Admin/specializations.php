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
          <a href="doctors.php">
            <i class="fa-solid fa-user-doctor"></i>
            <span class="links_name">Doctors</span>
          </a>
          </li>
          <hr>
        <li>
          <a href="patients.php">
            <i class="fa-solid fa-bed"></i>
            <span class="links_name">Patients</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="appointments.php">
            <i class="fa-regular fa-calendar-check"></i>
            <span class="links_name">Appointments</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="queries.php">
            <i class="fa-regular fa-circle-question"></i>
            <span class="links_name">Queries</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="session-logs.html">
            <i class="fa-solid fa-list-ul"></i>
            <span class="links_name">Session logs</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="report.html">
            <i class="fa-solid fa-file-lines"></i>
            <span class="links_name">Reports</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="pages.html">
            <i class="fa-regular fa-file"></i>
            <span class="links_name">Pages</span>
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
          <input type="text" placeholder="Search Users..." />
          <i class="bx bx-search"></i>
        </div> -->
        <button class="profile-details dropbtn dropdown" onclick="toggleDropdown()">
          <i class="fa-solid fa-user-large"></i>
          <span class="admin_name">Admin</span>
          <i class="bx bx-chevron-down"></i>
        </button>
        <div id="myDropdown" class="dropdown-content">
          <div class="dropdown-item">
            <a href="manage-profile.html"><i class="fa-solid fa-user"></i>Manage Profile</a>
            <hr>
          </div>
          <div class="dropdown-item">
            <a href="settings.html"><i class="fa-solid fa-gear"></i>Settings</a>
            <hr>
          </div>
          <div class="dropdown-item">
            <a href="#"><i class="fa-solid fa-key"></i>Change Password</a>
            <hr>
          </div>
        </div>
        
        
        
      </nav>

      <div class="home-content">
        
        
              <div class="main ">
                <div class="main-head">
            <h2>Specializations</h2><br><hr><br><br>
            <a href="add-specialization.html"><button><i class="fa-solid fa-plus"></i>Add Specialization</button></a>
            </div>
          <div class="table-container">

<table>
  <tr>
      <th>ID</th>
      <th>Specialization</th>
      <th>Creation Date</th>
      <th>Updation Date</th>
      <th>Action</th>
    </tr>
  <!-- <tr>
    <tr>
  <td>1</td>
  <td>Cardiology</td>
  <td>2024-03-20 08:00:00</td>
  <td>2024-03-20 08:00:00</td>
  <td>
    <button class="edit"><i class="fas fa-pen"></i></button>
    <button class="delete"><i class="fas fa-trash-alt"></i></button>
  </td>
</tr>
<tr>
  <td>2</td>
  <td>Orthopedics</td>
  <td>2024-03-21 10:30:00</td>
  <td>2024-03-21 10:30:00</td>
  <td>
    <button class="edit"><i class="fas fa-pen"></i></button>
    <button class="delete"><i class="fas fa-trash-alt"></i></button>
  </td>
</tr>
<tr>
  <td>3</td>
  <td>Gynecology</td>
  <td>2024-03-22 13:15:00</td>
  <td>2024-03-22 13:15:00</td>
  <td>
    <button class="edit"><i class="fas fa-pen"></i></button>
    <button class="delete"><i class="fas fa-trash-alt"></i></button>
  </td>
</tr>

  <tr>
  <td>4</td>
  <td>Ophthalmology</td>
  <td>2024-03-23 09:15:00</td>
  <td>2024-03-23 09:15:00</td>
  <td>
    <button class="edit"><i class="fas fa-pen"></i></button>
    <button class="delete"><i class="fas fa-trash-alt"></i></button>
  </td>
</tr>
<tr>
  <td>5</td>
  <td>Pediatrics</td>
  <td>2024-03-24 11:30:00</td>
  <td>2024-03-24 11:30:00</td>
  <td>
    <button class="edit"><i class="fas fa-pen"></i></button>
    <button class="delete"><i class="fas fa-trash-alt"></i></button>
  </td>
</tr>
<tr>
  <td>6</td>
  <td>Neurology</td>
  <td>2024-03-25 14:45:00</td>
  <td>2024-03-25 14:45:00</td>
  <td>
    <button class="edit"><i class="fas fa-pen"></i></button>
    <button class="delete"><i class="fas fa-trash-alt"></i></button>
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
$sql = "SELECT * FROM doctorspecilization ";
$result = $conn->query($sql);

if ($result === false) {
    die("Error executing query: " . $conn->error);
}

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";;
        echo "<td>" . $row['specialization'] . "</td>";
        // echo "<td>" . $row['doctorSpecialization'] . "</td>";
        echo "<td>" . $row['creationDate'] . "</td>";
        echo "<td>" . $row['updationDate'] . "</td>";
        // echo "<td>" . $row['postingDate'] . "</td>";
        // echo "<td class='status " . ($row['status'] == 'Confirmed' ? 'completed' : 'pending') . "'>" . $row['status'] . "</td>";
        echo "<td>
                <button class='edit'><i class='fas fa-pen'></i></button>
                <button class='delete'><i class='fas fa-trash-can'></i></button>
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
