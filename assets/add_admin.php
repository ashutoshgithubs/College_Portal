<section class="add_admin">
        <h1>Admin</h1>
        <span class="add_admin_location">
                <p>Home</p>
                <i class="fas fa-chevron-right"></i>
                <p class="all_add_admin_para">Add Admin</p> 
        </span>
     
        <div class="add_new_add_admin">
                <h1>Add New Admin</h1>
          <form id="add_admin_form" enctype='multipart/form-data' method="post">
             <div class="row1">
                <div class="row1_inner1">
                <label for="u_reg_name">User ID</label><br>
                        <input type="text" id="u_reg_name" name="u_reg_name"><br>
                </div>
                <div class="row1_inner2">
                    <label for="u_reg_email">Email</label><br>
                    <input type="text" id="u_reg_email" name="u_reg_email"><br>
                </div>
                </div>
                <div class="row2">
                    <div class="row2_inner1">
                        <label for="u_reg_password">Password</label><br>
                        <input type="password" id="u_reg_password" name="u_reg_password">
                    </div>
                     <div class="row2_inner2">
                        <label for="u_c_password">Confirm Password</label><br>
                        <input type="password" id="u_c_password" name="u_c_password">
                     </div>
             </div>
             <div class="row3">
                   <div class="row3_inner1">
                        <label for="admin_img">Image</label><br>
                        <input type="file" id="file" name="file">
                   </div>
                   <div class="row3_inner1">
                        <label for="a_role">Admin Role</label><br>
                        <input type="text" id="a_role" name="a_role">
                   </div>
             </div>
             <button class="add_save_btn" id="add_save_btn" style="background-color:#7db9b6; border-radius:10px; width:8rem">Save</button>
           </form>
        </div>
       
        <div class="all_add_admin_schedule" >
                <div class="header_add_admin_schedule_table">
                       <h1>Admin Info</h1>  
                        <button id="delete_all_add_admin_schedule"  style="background-color:#7db9b6">Delete All</button>
                </div>
           <div id="showAddAdminData">

           </div>
        </div>
    
        <h1 style="font-size: 25px;">Institute of Engineering & Management</h1>
</section>          
                  
                  
                  
                  
                  
                
          