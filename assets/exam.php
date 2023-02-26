<section class="exam">
        <h1>Examination</h1>
        <span class="exam_location">
                <p>Home</p>
                <i class="fas fa-chevron-right"></i>
                <p class="all_exam_para">Library</p> 
        </span>

        <div class="add_new_exam">
                <h1>Add New Exam</h1>
          <form id="exam_schedule_form" method="POST">
             <div class="row1">
                <div class="row1_inner1">
                   <label for="e_name">Exam name</label><br>
                   <input type="text" id="e_name" name="e_name"><br>
                </div>
                <div class="row1_inner2">
                        <label for="s_type">Subject Type*</label><br>
                        <select name="s_type" id="s_type">
                                <option value="" disabled selected hidden>Please Select</option>
                                <option value="mathematic">Mathematics</option>
                                <option value="english">English</option>
                                <option value="economic">Economic</option>
                                <option value="urdu">Urdu</option>
                                <option value="pak study">Pak Study</option>
                        </select>
                </div>
                </div>
                <div class="row2">
                    <div class="row2_inner1">
                       <label for="s_class">Select Year</label><br>
                       <select name="s_classes" id="s_classes">
                                <option value="" disabled selected hidden>Please Select</option>
                                <option value="play">1st</option>
                                <option value="nursery">2nd</option>
                                <option value="one">3rd</option>
                                <option value="two">4th</option>
                               
                        </select>
                    </div>
                     <div class="row2_inner2">
                        <label for="s_section">Select Section*</label><br>
                        <select name="s_section" id="s_section">
                                <option value="" disabled selected hidden>Please Select</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                        </select>
                     </div>
             </div>
             <div class="row3">
             <div class="row3_inner1">
                       <label for="s_time">Select Time</label><br>
                       <input type="text" id="s_time" name="s_time">
                </div>
                <div class="row3_inner2">
                        <label for="s_date">Select Date</label><br>
                        <input type="date" id="s_date" name="s_date">
                </div>
             </div>
             <button class="e_save_btn" id="e_save_btn" style=" width:8rem; background-color:#7db9b6; border-radius:8px">Save</button>
           </form>
        </div>
      
        <div class="all_exam_schedule">
                <div class="header_exam_schedule_table">
                       <h1>All Exam Schedule</h1>  
                        <button id="delete_all_exam_schedule" style="background-color:#7db9b6; border-radius:8px">Delete All</button>
                </div>
           <div id="showExamData">

           </div>
        </div>
      
        <h1 style="font-size: 25px;">Institute of Engineering & Management</h1>
</section>