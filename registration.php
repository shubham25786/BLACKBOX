<?php  
include("conn.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut Icon" type="jpg" href="img/logo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>BLACKBOX</title>   
    <title>Registration</title>
    <link rel="stylesheet" href="registration.css">
    <!-- <script>
      function togglePW(){
        var password = document.querySelector('[name=password]');
        if(password.getAttribute('type')==='password'){
          password.setAttribute('type','text');
          document.getElementById('font').style.color='cyan';
        }
        else{
          password.setAttribute('type','password');
          document.getElementById('font').style.color='white';

        }
      }
      function toggleP(){
        var password = document.querySelector('[name=pass]');
        if(password.getAttribute('type')==='password'){
          password.setAttribute('type','text');
          document.getElementById('font').style.color='cyan';
        }
        else{
          password.setAttribute('type','password');
          document.getElementById('font').style.color='white';

        }
      }
    </script> -->
    
<body>
    <div class="login-box">
        <h2>Registration</h2>
        <form action="#" method="POST">
          <div class="user-box">
            <input type="name"  id="name" name="fname" autocomplete=(0) required>
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="email" id="email" name="email"  required>
            <label>Email</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" id="pwd" required>
            <label>Password</label>
            <!-- <span><i class="fa-solid fa-eye-slash" style="color: darkviolet;"
              onclick="togglePW()" aria-hidden="true"></i>
            </span> -->
            <input type="hidden" value="<?php echo 'OID'.rand(100,1000);?>" name="orderid">
            <input type="hidden" value="<?php echo 1;?>" name="amount">         
          </div>
           <div class="user-box">
            <input type="password" name="pass" id="cpwd" required>
            <label>Conform password</label>
            <!-- <span><i class="fa-solid fa-eye-slash" style="color: darkviolet;"
              onclick="toggleP()" aria-hidden="true"></i>
            </span>
             -->
           </div>
         
          <nav>
           <input type="submit" value="registor" class="user" name="register" > 
           
           <input type="reset" value="reset" class="user">
          </nav>
         

          
          

          
        </form>
        
    </div>
      
</body>
</html>





<?php
 error_reporting(0);

if($_POST['register']) {
  $fname = $_POST['fname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $pass = $_POST['pass'];

  $query = "insert into form values('$fname','$email','$password','$pass')";
  $data = mysqli_query($conn, $query);

  if ($data) {
    header('location:sub_plan.html');
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}
  
?>


