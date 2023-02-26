<section class="dashboard">
  <div class="welcome_admin" style="  display: flex;
  align-items: center;
  justify-content: space-between;">
    <h1 style="padding:1% 4%;font-size: 34px;color:#000;width:20%;">Dashboard</h1>
    <div class="welcome_admin_message" style="width: 80%;
  border-radius:30px;
  display:flex;
  align-items:center;
  background-color:#609ea2;
  color: #fff;
  padding: 20px;
  margin:15px 0px;
  ">
  <h1 style="margin:0px 15px">
  <?php
 
 date_default_timezone_set('Asia/Kolkata');
 $time = new DateTime();

 if ($time < "12") {
  echo "Welcome";
 } else

 if ($time >= "12" && $time < "17") {
   
 }
 
 else {
     echo "Welcome";
 }

  ?>
  </h1>
    <h1 style="color:white;font-size:28px"><?php echo $_SESSION['username']; ?></h1>
    <h1 style="font-size:35px;margin-left:200px"><?php echo date('M d, Y'); ?></h1>
    </div>
  </div>
      <div class="cover-img">
        <img src="https://img.collegepravesh.com/2018/11/IEM-Kolkata.jpg" style="object-fit: cover"alt="school img" />
        <span class="text">
          <p style="font-size:3rem;margin-top:4rem; color:#332c39; font-weight:800">Institute of Engineering & Management</p>
          <p style="margin-left:14rem; margin-top:1rem; color:#332c39; font-weight:600">
           Good Education, Good Jobs.
          </p>
        </span>
      </div>
    </section>
    <section class="all-info">
      <div class="row">
        <!-- teacher section start ========== -->
        <div class="col">
          <div id="teacher" class="card">
            <div class="teacher-inner" style="background-color:#cd5888">
              <div class="column column-left">
                <div class="column-left-inner">
                  <h1 id="teacherCount"></h1>
                  <p>Teachers</p>
                </div>
              </div>
              <div class="column column-right">
                <i class="far fa-chart-bar"></i>
              </div>
            </div>
            <div class="teacher-footer"  style="background-color:#913175">
              <a href="assets/teacher.php"
                >More info <i class="fas fa-angle-double-right"></i
              ></a>
            </div>
          </div>
          <div id="attendance" class="card">
            <div class="attendance-inner">
              <div class="column column-left">
                <div class="column-left-inner">
                  <h1 id="examCount"></h1>
                  <p>Exam</p>
                </div>
              </div>
              <div class="column column-right">
                <i class="fas fa-user-plus"></i>
              </div>
            </div>
            <div class="attendance-footer">
              <a href="#"
                >More info <i class="fas fa-angle-double-right"></i
              ></a>
            </div>
          </div>
        </div>
      
        <div class="col">
          <div id="students" class="card">
            <div class="students-inner">
              <div class="column column-left">
                <div class="column-left-inner">
                  <h1 id="student_count"></h1>
                  <p>Students</p>
                </div>
              </div>
              <div class="column column-right">
                <i class="fas fa-chart-pie"></i>
              </div>
            </div>
            <div class="students-footer">
              <a href="#"
                >More info <i class="fas fa-angle-double-right"></i
              ></a>
            </div>
          </div>
          <div id="accountants" class="card">
            <div class="accountants-inner">
              <div class="column column-left">
                <div class="column-left-inner">
                  <h1 id="hostelCount"></h1>
                  <p>Admin</p>
                </div>
              </div>
              <div class="column column-right">
                <i class="far fa-chart-bar"></i>
              </div>
            </div>
            <div class="accountants-footer">
              <a href="#"
                >More info <i class="fas fa-angle-double-right"></i
              ></a>
            </div>
          </div>
        </div>
        <!-- students section end ============= -->

        <!-- parents section start =================== -->
        <div class="col">
          <div id="parents" class="card">
            <div class="parents-inner">
              <div class="column column-left">
                <div class="column-left-inner">
                  <h1 id="parentCount"></h1>
                  <p>Parents</p>
                </div>
              </div>
              <div class="column column-right">
                <i class="fas fa-shopping-bag"></i>
              </div>
            </div>
            <div class="parents-footer">
              <a href="#"
                >More info <i class="fas fa-angle-double-right"></i
              ></a>
            </div>
          </div>
          <div id="stuff" class="card">
            <div class="stuff-inner"  style="background-color:#cd5888">
              <div class="column column-left" >
                <div class="column-left-inner" >
                  <h1 id="transportCount"></h1>
                  <p>Class Schedule</p>
                </div>
              </div>
              <div class="column column-right">
                <i class="fas fa-chart-pie"></i>
              </div>
            </div>
            <div class="stuff-footer" style="background-color:#913175">
              <a href="#"
                >More info <i class="fas fa-angle-double-right"></i
              ></a>
            </div>
          </div>
        </div>
        <!-- parents section end =================== -->
        <!-- librarian section start =================== -->
        <div class="col">
          <div id="librarian" class="card">
            <div class="librarian-inner"  style="background-color:blue">
              <div class="column column-left">
                <div class="column-left-inner">
                  <h1 id="libraryCount"></h1>
                  <p>Library</p>
                </div>
              </div>
              <div class="column column-right">
                <i class="fas fa-chart-pie"></i>
              </div>
            </div>
            <div class="librarian-footer"  style="background-color:#4e31aa">
              <a href="#"
                >More info <i class="fas fa-angle-double-right"></i
              ></a>
            </div>
          </div>
          <div id="notice" class="card">
            <div class="notice-inner">
              <div class="column column-left">
                <div class="column-left-inner">
                  <h1 id="ShowNoticesCount"></h1>
                  <p>Notice</p>
                </div>
              </div>
              <div class="column column-right">
                <i class="fas fa-shopping-bag"></i>
              </div>
            </div>
            <div class="parents-footer">
              <a href="#"
                >More info <i class="fas fa-angle-double-right"></i
              ></a>
            </div>
            <!-- librarian section end =================== -->
          </div>
        </div>
      </div>
    </section>
    <section class="chart">
      <div class="row">
        <div class="chart_left">
          <h1>All Teachers</h1>
      <!-- single canvas node to render the chart -->
         <canvas id="myChart2" width="400" height="400" ></canvas>
         <div class="chart_footer" >
            <div class="row">
              <div class="chart_footer_left">
                <hr style="border-color:#e96479">
                <span>Female Teachers</span>
                <h1 id="fetchFemale_teacher_count"></h1>
              </div>
              <div class="chart_footer_right">
                <hr style="border-color:#7db9b6">
                <span>Male Teachers</span>
                <h1 id="fetchMale_teacher_count"></h1>
              </div>
            </div>
        </div>
        </div>
        <div class="chart_right">
          <div class="top_Male_female_chart" >
            <h1>All Students</h1>
            <button onclick="window.location.reload();">Refresh</button>
          </div>
        <!-- chart right here ================== -->
        <canvas id="myChart3" width="400" height="400"></canvas>
         <div class="chart_footer">
            <div class="row">
              <div class="chart_footer_left">
                <hr style="border-color:#e96479">
                <h1 id="fetchChartData"></h1>
                <span>Female Students</span>
                <h1 id="fetchFemale_count"></h1>
              </div>
              <div class="chart_footer_right">
                <hr style="border-color:#4d455d">
                <span>Male Students</span>
                <h1 id="fetchMale_count"></h1>
              </div>
            </div>
        </div>
        </div>
      </div>
    </section>
   
