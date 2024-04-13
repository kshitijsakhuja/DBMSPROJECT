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
            <span class="links_name">ഡാഷ്ബോർഡ്</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="doctors.php">
            <i class="fa-solid fa-user-doctor"></i>
            <span class="links_name">ഡോക്ടർമാർ</span>
          </a>
          </li>
          <hr>
        <li>
          <a href="patients.php">
            <i class="fa-solid fa-bed"></i>
            <span class="links_name">രോഗികൾ</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="appointments.php">
            <i class="fa-regular fa-calendar-check"></i>
            <span class="links_name">അപ്പോയിന്റ്മെന്റുകൾ</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="queries.html">
            <i class="fa-regular fa-circle-question"></i>
            <span class="links_name">അന്വേഷണങ്ങൾ</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="session-logs.html">
            <i class="fa-solid fa-list-ul"></i>
            <span class="links_name">സെഷൻ <br>ലോഗുകൾ</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="report.html">
            <i class="fa-solid fa-file-lines"></i>
            <span class="links_name">റിപ്പോർട്ടുകൾ</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="pages.html">
            <i class="fa-regular fa-file"></i>
            <span class="links_name">പേജുകൾ</span>
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
        <div class="search-box">
          <form action="#" method="post">
            <input type="text" id="doct_search" name="doct_search" placeholder="ഡോക്ടർമാരെ തിരയൂ..." />
            <button type="submit" name="submit_search"><i class="bx bx-search"></i></button>
          </form>
        </div>
        <button class="profile-details dropbtn dropdown" onclick="toggleDropdown()">
          <i class="fa-solid fa-user-large"></i>
          <span class="admin_name">അഡ്മിൻ</span>
          <i class="bx bx-chevron-down"></i>
        </button>
        <div id="myDropdown" class="dropdown-content">
          <div class="dropdown-item">
            <a href="manage-profile.html"><i class="fa-solid fa-user"></i>പ്രൊഫൈൽ മാനേജ് ചെയ്യുക</a>
            <hr>
          </div>
          <div class="dropdown-item">
            <a href="settings.html"><i class="fa-solid fa-gear"></i>സെറ്റിംഗ്സ്</a>
            <hr>
          </div>
          <div class="dropdown-item">
            <a href="#"><i class="fa-solid fa-key"></i>പാസ്‌വേഡ് മാറ്റുക</a>
            <hr>
          </div>
        </div>
        
        
        
      </nav>

      <div class="home-content">
        
        
              <div class="main ">
                <div class="main-head">
            <!-- <h2>Manage Doctors</h2><br><hr><br><br>
            <a href="add-doctor.html"><button><i class="fa-solid fa-plus"></i>Add Doctor</button></a>
            <a href="specializations.html"><button><i class="fa-solid fa-circle-info"></i>Specializations</button></a>
            </div> -->
          <div class="table-container">

<!-- <table>
  <tr>
    <th>ID</th>
    <th>Specialization</th>
    <th>Doctor Name</th>
    <th>Creation DateTime</th>
    <th>Action</th>
  </tr>
  <tr>
  <td>1</td>
  <td>Cardiology</td>
  <td>Dr. John Smith</td>
  <td>2024-03-20 10:00 AM</td>
  <td>
    <button class="edit"><i class="fas fa-pen"></i></button>
    <button class="delete"><i class="fas fa-trash-can"></i></button>
  </td>
  </tr>
  <tr>
  <td>2</td>
  <td>Dermatology</td>
  <td>Dr. Emily Johnson</td>
  <td>2024-03-21 09:30 AM</td>
  <td>
    <button class="edit"><i class="fas fa-pen"></i></button>
    <button class="delete"><i class="fas fa-trash-can"></i></button>
  </td>
</tr>

<tr>
  <td>3</td>
  <td>Orthopedics</td>
  <td>Dr. Michael Brown</td>
  <td>2024-03-22 11:15 AM</td>
  <td>
    <button class="edit"><i class="fas fa-pen"></i></button>
    <button class="delete"><i class="fas fa-trash-can"></i></button>
  </td>
</tr>

<tr>
  <td>4</td>
  <td>Neurology</td>
  <td>Dr. Sarah Lee</td>
  <td>2024-03-23 02:00 PM</td>
  <td>
    <button class="edit"><i class="fas fa-pen"></i></button>
    <button class="delete"><i class="fas fa-trash-can"></i></button>
  </td>
</tr>
 Include more rows as needed
</table> -->

</div>

<div id="results">
  <div class = 'searchresults'>
    <h1><center>ഡോക്ടർമാരെ നിയന്ത്രിക്കുക:</center><br><hr></h1><br>
    <a href="add-doctor.html"><button><i class="fa-solid fa-plus"></i>ഡോക്ടറെ ചേർക്കുക</button></a>
            <a href="specializations.html"><button><i class="fa-solid fa-circle-info"></i>സ്പെഷ്യലൈസേഷനുകൾ </button></a>
    
            <?php
      $servername = "localhost";
      $username = "root"; // Replace with your MySQL username
      $password = ""; // Replace with your MySQL password
      $dbname = "hms"; // Replace with your database name

      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      // Check if a search has been performed
      if (isset($_POST['doct_search'])) {
          $doctor = $_POST['doct_search'];
          $sql = "SELECT * FROM doctors WHERE doctorName LIKE '%$doctor%'";
      } else {
          // If no search has been performed, fetch all data
          $sql = "SELECT * FROM doctors";
      }

      $result = $conn->query($sql);

      echo '<table>
              <tr>
                <th>ഐഡി</th>
                <th>സ്പെഷ്യലൈസേഷൻ</th>
                <th>ഡോക്ടറുടെ പേര്</th>
                <th>സൃഷ്ടിയുടെ <br>തീയതിയും സമയവും</th>
                <th>നടപടി</th>
              </tr>';
        if ($result->num_rows > 0) {
          // Output data of each row
          while ($row = $result->fetch_assoc()) {
            echo '<tr>
                      <td>' . $row["id"] . '</td>
                      <td>' . $row["specialization"] . '</td>
                      <td>' . $row["doctorName"] . '</td>
                      <td>' . $row["creationDate"] . '</td>
                      <td>
                          <button class="edit"><i class="fas fa-pen"></i></button>
                          <button class="delete"><i class="fas fa-trash-alt"></i></button>
                      </td>
                    </tr>';
          }
        } else {
          echo "<tr><td colspan='4'>No results found</td></tr>";
        }
        echo '</table>';
        $conn->close();
      ?>

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
