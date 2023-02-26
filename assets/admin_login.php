
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/admin_login.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" 
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Study Portal</title>
</head>
<style>
    .login_page .row2 .right{
    justify-content:space-around;
    }
.login_page .row2 .right .admin_form {
  display: flex;
  overflow:hidden;
  position: relative;
  box-shadow:3px 3px 10px #332c39;

}
.login_page .row2 .right .admin_form .form1 h1 {
  text-align: center;
  margin-bottom: 20px;
}
.login_page .row2 .right .admin_form  .form1{
    border: 1px solid #ddd;
    /* position: absolute; */
    width: 300px;
    padding: 20px;
}
.login_page .row2 .right .admin_form .form1 input[type="text"],
input[type="password"] {
  width: 100%;
  margin-top: 10px;
  margin-bottom: 20px;
  outline:none;
  border:none;
  box-shadow:none;
  background-color: #f0f1f3;
  padding: 15px;
}
.login_page .row2 .right .admin_form .form1 input[type="submit"] {
  padding: 0px 20px;
  margin: 20px 0px;
  cursor: pointer;
  background-color: yellowgreen;
  color:#fff;
  font-size:17px;
  line-height:29px;
  border:1px solid yellowgreen;
  transition:0.5s;
}
.login_page .row2 .right .admin_form .form1 input[type="submit"]:hover{
    background-color:transparent;
    color:#000;
}
.login_page .row2 .right .admin_form .form1 a{
   text-decoration:none;
}
/* center login form start here===================== */
.login_page .row2 .right .admin_form_center{
    width:200px;
    text-align:center;
    color:yellowgreen;
}
.login_page .row2 .right .admin_form_center img{
    width:100%;
}
/* center login form end here===================== */
/* .login_page .row2 .right .admin_form2 {
  display: flex;
  overflow:hidden;
  position: relative;

}
.login_page .row2 .right .admin_form2 .form2 h1 {
  text-align: center;
  margin-bottom: 20px;
}
.login_page .row2 .right .admin_form2  .form2{
    border: 1px solid #ddd;
    /* position: absolute; 
    width: 300px;
 
 padding: 20px;
} */
.login_page .row2 .right .admin_form2 .form2 input[type="text"],
input[type="password"] {
  width: 100%;
  margin-top: 10px;
  margin-bottom: 20px;
  outline:none;
  border:none;
  box-shadow:none;
  background-color: #f0f1f3;
  padding: 15px;
}
.login_page .row2 .right .admin_form2 .form2 input[type="submit"] {
  padding: 0px 20px;
  margin: 20px 0px;
  cursor: pointer;
  background-color: yellowgreen;
  color:#fff;
  font-size:17px;
  line-height:29px;
  border:1px solid yellowgreen;
  transition:0.5s;
}
.login_page .row2 .right .admin_form2 .form2 input[type="checkbox"]{
    margin:10px 0px 15px 0px;
}

.login_page .row2 .right .admin_form2 .form2 input[type="file"]{
    margin:10px 0px 15px 0px;
}
.login_page .row2 .right .admin_form2 .form2 input[type="submit"]:hover{
    background-color:transparent;
    color:#000;
}
.login_page .row2 .right .admin_form2 .form2 a{
   text-decoration:none;
} */
#login_after_signup {
  position: fixed;
  padding: 15px;
  top: 25px;
  left:50%;
  background-color:green;
  border-radius:30px;
  display:none;
}
</style>
<body>
    <div class="login_page">
        <div class="row">
            <div class="left" style="background:url(https://images.unsplash.com/photo-1557683316-973673baf926?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Z3JhZGllbnQlMjBiYWNrZ3JvdW5kfGVufDB8fDB8fA%3D%3D&w=1000&q=80)">
              
            </div>
            <div class="right" style="background-color:#f5f5f5" >
               
            </div>
        </div>
        <div class="row2">
        
            <div class="left">
            <img src="../images/iemlogo.png" alt="logo" style="width:200px;height:200px">
                <h3>Welcome To</h3>
                <h2>IEM, KOLKATA</h2>
                <p style="font-size:1.2rem">Login to access IEM student portal.
                </p>
            </div>
            <div class="right">
                <div class="admin_form" style="display:flex; margin-left:10rem">
                    
                    <form class="form1" action="../assets/ajax/admin_ajax/login.php" method="POST">
                    <h1 style="color:#332c39">Login</h1>
                        <label for="u_name">User ID</label><br>
                        <input type="text" id="u_name" name="u_name" style="box-shadow:0.5px 0.5px 5px #bdcdd6; border:0.5 solid #332c39"><br>
                        <label for="password">Password</label><br>
                        <input type="password" id="password" name="password" style="box-shadow:0.5px 0.5px 5px #bdcdd6; border:0.5 solid #332c39">
                    
                        <br />
                             <input type="checkbox" id="psw" onclick="showPassLogin()" />
                             <label for="pass">Show Password</label>

                        <br>
                        <input type="submit" name='submit' value="Login" style="background-color:#609ea2;box-shadow: 3px 3px 10px #888888">
                        <br>
                    </form>
                </div>
              
                <div class="admin_form2">
                </div>
            </div>
        </div>
    </div>
    <div id="login_after_signup"></div>
    <script>
        function showPassLogin() {
        var x = document.getElementById("password");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }

    </script>

        <script src="../js/admin_login.js"></script>


</body>
</html>