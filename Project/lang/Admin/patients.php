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
          <a href="queries.php">
            <i class="fa-regular fa-circle-question"></i>
            <span class="links_name">അന്വേഷണങ്ങൾ</span>
          </a>
        </li>
        <hr>
        <li>
          <a href="session-logs.php">
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
            <input type="text" id="doct_search" name="doct_search" placeholder="രോഗികളെ തിരയുക..." />
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
              <div id="results">
              <div class = 'searchresults'>
    <h1><br><center>തിരയൽ ഫലങ്ങൾ നിയന്ത്രിക്കുക:</center></h1><br><hr><br>
    
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
      if (isset($_POST['patient_search'])) {
          $patient = $_POST['patient_search'];
          $sql = "SELECT * FROM tblpatient WHERE PatientName LIKE '%$patient%'";
      } else {
          // If no search has been performed, fetch all data
          $sql = "SELECT * FROM tblpatient";
      }

      $result = $conn->query($sql);

      echo '<table>
              <tr>
                  <th>രോഗിയുടെ പേര്</th>
                  <th>രോഗിയുടെ<br>കോൺടാക്റ്റ് നമ്പർ </th>
                  <th>രോഗിയുടെ ലിംഗഭേദം</th>
                  <th>സൃഷ്ടിയുടെ <br>തീയതി</th>
                  <th>അപ്‌ഡേറ്റ് തീയതി</th>
                  <th>നടപടി</th>
              </tr>';

      if ($result->num_rows > 0) {
          // Output data of each row
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['PatientName'] . "</td>";
            echo "<td>" . $row['PatientContno'] . "</td>";
            echo "<td>" . $row['PatientGender'] . "</td>";
            echo "<td>" . $row['CreationDate'] . "</td>";
            echo "<td>" . $row['UpdationDate'] . "</td>";
            echo "<td>
                      <a href='delete_patient.php? deleteid=".$row['ID']."'> 
                      <button class='delete'><i class='fas fa-trash-alt'></i></button>
                      </a>
                    </td>";
            echo "</tr>";
          }
      } else {
          echo "<tr><td colspan='6'>No results found</td></tr>";
      }

      echo '</table>';
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
