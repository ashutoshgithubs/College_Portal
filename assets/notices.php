<section class="notices">
         <h1>Notice board</h1>
        <span class="notice_location">
                <p>Home</p>
                <i class="fas fa-chevron-right"></i>
                <p class="all_notice_para">Notices</p> 
        </span>
       
        <div class="add_new_notice">
                <h1>Create New Notice</h1>
            <form id="notice_schedule_form">
                <div class="row1">
                    <div class="row1_inner1">
                    <label for="n_title">Title</label>
                    <input type="text" id="n_title" name="n_title">
                    </div>
                    <div class="row1_inner2">
                    <label for="n_posted_by">Posted By</label>
                        <input type="text" id="n_posted_by" name="n_posted_by">
                    </div>
                </div>
                 <div class="row3">
                    <label for="n_details">Details</label>
                    <br>
                    <textarea name="n_details" id="n_details" placeholder="Write here...."></textarea>
                    <br>
                 </div>
                 <button class="n_save_btn" id="n_save_btn" style='background-color:#7db9b6; border-radius:8px; width:8rem'>Post</button>
                 <input type="reset" class="n_reset_btn" style='background-color:#7db9b6; border-radius:8px; color:white; width:8rem' id="n_reset_btn"></input>
           </form>
        </div> 
        
      
        <div class="show_notice_data">
            <h1>Notice Board</h1>
            <div class="posted_notice" id="posted_notice">
            
            </div>
        </div>
    
        <h1 style="font-size:25px;">Institute of Engineering & Management</h1>
</section>