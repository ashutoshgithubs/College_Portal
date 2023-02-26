<div class="parent_header">
                <h1>Parents</h1>
              </div>
              <span class="parent_location">
                <p>Home</p>
                <i class="fas fa-chevron-right"></i>
                <p class="all_parent_para">All Parents</p> 
              </span>
             <div class="parent_data">
               <div class="parent_data_header">
                 <h1>Parent's Record</h1>
                 <button class="parent_data_btn" id="add_parent" style="background-color:#7db9b6; border-radius:10px;color:black">Add</button>
               </div>
               <div id="showParentData">
                   
               </div>
            
                    <div class="parent_modal" id="parent_modal">
                        <div class="parent_modal_body">
                            <div id="hide_parent_modal">X</div>
                            <div class="parent_modal_body_inner">
                            
                              <form enctype="multipart/form-data" id="parent_formData" >
                                    <h2>Parent Registration form</h2>
                               
                                    <label for="s_id">Student Name</label>
                                    <select name="s_id" id="s_foreign_key"> 
                                  
                                    </select>
                                  
                                    <br>
                                    <br>
                                    <label for="p_image">Profile Image</label>
                                    <input
                                      type="file"
                                      id="p_image"
                                      name="file"
                                      required
                                    />
                                    <br>
                                        <label for="p_name" >Name</label>
                                        <input type="text" id="p_name" name="p_name"  required />
                                        <br />
                                  <label for="p_gender">Gender</label>
                                    <select name="p_gender" id="p_gender" required>
                                      <option value="">select one</option>
                                      <option value="female">Female</option>
                                      <option value="male">Male</option>
                                      <option value="other">Others</option>
                                    </select>
                                    <br />
                                    <label for="p_occupation">Occupation</label>
                                    <input type="text" id="p_occupation" name="p_occupation" required />
                                    <br />
                                    <label for="p_address">Address</label>
                                    <input
                                      type="text"
                                      id="p_address"
                                      name="p_address"
                                      required
                                    />
                                    <br />
                                    <label for="p_phone">Contact No.</label>
                                    <input
                                      type="text"
                                      id="p_phone"
                                      name="p_phone"
                                      required
                                    />
                                    <label for="p_email">Email</label>
                                    <input
                                      type="text"
                                      id="p_email"
                                      name="p_email"
                                      required
                                    />
                                    <br />
                                    <input type="submit" name="p_submit" id="p_parent_btn"></input>
                              </form>
                            
                            </div>
                        </div>
                      </div>
                     
</div>
<h1 style="margin:35px 0px 20px 0px;">Institute of Engineering & Management</h1>