<?php 
session_start();
if(!isset($_SESSION['username'])){
  header("location:assets/admin_login.php");
}
include "assets/conn/conn.php"; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" 
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
      integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"
      crossorigin="anonymous"
    />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>IEM Kolkata</title>
    <link rel="stylesheet" href="css/students.css">
    <link rel="stylesheet" href="css/admin.css" />
    <link rel="stylesheet" href="css/teacher.css">
    <link rel="stylesheet" href="css/dashboard.css" />
    <link rel="stylesheet" href="css/dashboard2.css" />
    <link rel="stylesheet" href="css/admin2.css">
    <link rel="stylesheet" href="css/student2.css">
    <link rel="stylesheet" href="css/student3.css">
    <link rel="stylesheet" href="css/parent.css">
    <link rel="stylesheet" href="css/library.css">
    <link rel="stylesheet" href="css/exam.css">
    <link rel="stylesheet" href="css/notice.css">
    <link rel="stylesheet" href="css/map.css">
    <link rel="stylesheet" href="css/transport.css">
    <link rel="stylesheet" href="css/hostel.css">
    <link rel="stylesheet" href="css/expenses.css">
    <link rel="stylesheet" href="css/add_admin.css">
  </head>
  <body>
    <section class="admin-top">
      <div class="row">
        <div class="admin-left" id="slideNav" style="background:url(https://images.unsplash.com/photo-1557683316-973673baf926?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Z3JhZGllbnQlMjBiYWNrZ3JvdW5kfGVufDB8fDB8fA%3D%3D&w=1000&q=80);background-repeat: no-repeat;  background-size: cover;">
          <div class="admin">
             <img src="<?php echo $_SESSION['image']; ?>" alt="">  
            <h1 style="text-align:center;"><?php echo $_SESSION['username']; ?></h1>
          </div>
          <div class="tab">
            <div
              class="tablinks"
              onclick="openCity(event, 'dashboard_top')"
              id="defaultOpen"
            >
              <i class="fas fa-tachometer-alt"></i>
              <span class="tooltip">Dashboard</span>
              <h4>Dashboard</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'teacher_top')">
            <i class="fas fa-chalkboard-teacher"></i>
            <span class="tooltip">Teacher</span>
              <h4>Teacher</h4>
            </div>
            <!-- students section start ============================== -->
            <div class="tablinks" onclick="openCity(event, 'student')">
              <i class="fas fa-users"></i>
              <span class="tooltip">Students</span>
              <h4>Students</h4>
            </div>
            <!-- students section start ============================== -->
            <div class="tablinks" onclick="openCity(event, 'parent')">
              <i class="fas fa-calendar-alt"></i>
              <span class="tooltip">Parents</span>
              <h4>Parents</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'schedule')">
              <i class="fas fa-clock"></i>
              <span class="tooltip2">Classes Schedule</span>
              <h4>Classes Schedule</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'admin')">
              <i class="far fa-chart-bar"></i>
              <span class="tooltip">Admin</span>
              <h4>Admin</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'library')">
              <i class="fas fa-folder-open"></i>
              <span class="tooltip">Library</span>
              <h4>Library</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'exam')">
              <i class="fas fa-graduation-cap"></i>
              <span class="tooltip2">Exams</span>
              <h4>Exams</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'events')">
              <i class="fas fa-clock"></i>
              <span class="tooltip">Notices</span>
              <h4>Notices</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'map')">
            <i class="fas fa-map-marker-alt"></i>
              <span class="tooltip2">Map</span>
              <h4>Map</h4>
            </div>
          </div>
        </div>
<!-- left section start -->
        <div class="admin-right" id="admin-right">
          <div class="header" style="background:url(https://images.unsplash.com/photo-1557683316-973673baf926?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Z3JhZGllbnQlMjBiYWNrZ3JvdW5kfGVufDB8fDB8fA%3D%3D&w=1000&q=80);background-repeat: no-repeat;  background-size: cover;">
            <div class="header-left">
              <i class="fas fa-bars" onclick="menuAnimation()"></i>
            </div>
            <div class="header-right">
              <div class="header-right-inner-right">
                <img src="<?php echo $_SESSION['image']; ?>" onclick="admin()" class="adminImg" alt="Profile Image" />
                <div id="admin_details" class="admin_details" style="width:100px;height:80px; background-color:#609ea2">
                   <div class="admin_details_inner" style="display:flex;justify-content:center;align-item:center;background-image:none">
                     <!-- <h3><?php echo $_SESSION['username']; ?></h3> -->
                     <a href="assets/ajax/admin_ajax/logout.php" class="logoutBtn" id="logoutBtn" style="border:1px solid black; color:black; text-decoration:none">Logout</a>
                   </div>
                  
                   <div class="admin_message_section">
                       
                     </div>
                     
                </div>
              </div>
              <div class="header-right-inner-left">
                <!-- logout  -->
              </div>
            </div>
          </div>
          <!-- dashboard section start -------------------- -->
          <div id="dashboard_top" class="tabcontent">
            <?php include "assets/dashboard.php"; ?>
          </div>
            <!-- dashboard section end -------------------- -->
          <!-- teacher section start ==================== -->
          <div id="teacher_top" class="tabcontent">
             <?php include "assets/teacher.php"; ?>
          </div>
           <!-- teacher section end ==================== -->


            <!-- students section start ======================================= -->
           <div id="student" class="tabcontent">
           <?php include 'assets/students.php'; ?>
          </div>
           <!-- teacher section end ============================================ -->
      <!-- parents section start ========================== -->
          <div id="parent" class="tabcontent">
               <?php include 'assets/parent.php'; ?>
          </div>
      <!-- parents section end ========================== -->
          <div id="schedule" class="tabcontent">
            <h3>Schedule</h3>
            <p>London is the capital city of England.</p>
          </div>

          <div id="admin" class="tabcontent">
           <?php include 'assets/add_admin.php'; ?>
          </div>

          <div id="library" class="tabcontent">
          <?php include 'assets/library.php'; ?>
          </div>
          
          <div id="exam" class="tabcontent">
            <?php include 'assets/exam.php';  ?>
          </div>
          <div id="events" class="tabcontent">
          <?php include 'assets/notices.php';  ?>
          </div>
          <div id="map" class="tabcontent">
          <?php include 'assets/map.php';  ?>
          </div>
        </div>
      </div>
    </section>
   
       
 
    <script src="js/teacherFile.js"></script> 
    <script src="js/app.js"></script>
    <script src="js/student.js"></script>
    <script src="js/libraryFile.js"></script>
    <script src="js/chart.js"></script>
    <script src="js/parentFile.js"></script>
    <script src="js/exam.js"></script>
    <script src="js/notice.js"></script>
    <script src="js/transport.js"></script>
    <script src="js/hostel.js"></script>
    <script src="js/expenses.js"></script>
    <script src="js/add_admin.js"></script>
    <script>
      function admin() {
          document.getElementById("admin_details").classList.toggle("show2");
       }
    // Close the dropdown if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.adminImg')) {
          var dropdowns = document.getElementsByClassName("admin_details");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show2')) {
              openDropdown.classList.remove('show2');
            }
          }
        }
      }


    </script>
    <script>
      //   toggle menu button
      function menuAnimation() {
        var element = document.getElementById("slideNav");
        var element1 = document.getElementById("admin-right");
        if (element && element1) {
          element.classList.toggle("navSlide");
          element1.classList.toggle("navSlide1");
        }
      }

    </script>
    <?php
    $sql = "SELECT COUNT(CASE WHEN UPPER(Gender) = 'male' THEN 1 END) Male,
    COUNT(CASE WHEN UPPER(Gender) = 'female' THEN 1 END) Female
    FROM student";
    $fire = mysqli_query($conn,$sql);
    // $fetchMaleCount = mysqli_num_rows($fire);
    $json = [];
    $json2 = [];
    while($row = mysqli_fetch_assoc($fire)){
        $json[] = (int)$row['Male'];
        $json2[] =(int)$row['Female'];
    }
 
    $newArray =array_merge($json,$json2);
  

?>
<?php
    $sql2 = "SELECT COUNT(CASE WHEN UPPER(Gender) = 'male' THEN 1 END) Male,
    COUNT(CASE WHEN UPPER(Gender) = 'female' THEN 1 END) Female
    FROM teacher";
    $fire2 = mysqli_query($conn,$sql2);
    // $fetchMaleCount = mysqli_num_rows($fire);
    $jsonTeacher = [];
    $jsonTeacher2 = [];
    while($row = mysqli_fetch_assoc($fire2)){
        $jsonTeacher[] = (int)$row['Male'];
        $jsonTeacher2[] =(int)$row['Female'];
    }
  
    $newTeacherArray = array_merge($jsonTeacher,$jsonTeacher2);

?>
    <script>
     
var ctx3 = document.getElementById("myChart3").getContext("2d");
var myChart = new Chart(ctx3, {
  type: "doughnut",
  data: {
    // labels: ["Male Students", "Female Students"],
    datasets: [
      {
        // label: '# of Votes',

        data: <?php echo json_encode($newArray); ?>,
        backgroundColor: ["#4d455d", "#e96479"],
      
        borderWidth: 1,
      },
    ],
  },
  options: {
    responsive: false,
    // scales: {
    //     y: {
    //         beginAtZero: true
    //     }
    // }
    layout: {
      padding: {
        left: 0,
        right: 0,
        top: 0,
        bottom: 0,
      },
    },
    legend: {
      display: false,
      position: "bottom", // top left bottom right
      align: "end", // start end center
      labels: {
        fontColor: "red",
        fontSize: 16,
        boxWidth: 20,
      },
    },
 
  },
});

var ctx2 = document.getElementById("myChart2").getContext("2d");
var myChart = new Chart(ctx2, {
  type: "pie",
  data: {
    // labels: ["Male Teacher", "Female Teacher"],
    datasets: [
      {
        // label: '# of Votes',

        data: <?php echo json_encode($newTeacherArray); ?>,
        backgroundColor: ["#7db9b6", "#e96497"],
       
        borderWidth: 1,
      },
    ],
  },
  options: {
    responsive: false,

    layout: {
      padding: {
        left: 0,
        right: 0,
        top: 0,
        bottom: 0,
      },
    },
    legend: {
      display: false,
    },
  },
});
    </script>
  </body>
</html>
