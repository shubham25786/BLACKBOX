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
    <link rel="stylesheet" href="login.css">
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
    </script> -->
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form action="#" method="POST" >
          <div class="user-box">
            <input type="text"  id="name" name="name" autocomplete=(0) required>
            <label>Name</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" id="pwd" required>
            <label>Password</label>
            <!-- <span><i class="fa-solid fa-eye-slash" style="color: #16e0e3;"
              onclick="togglePW()" aria-hidden="true"></i>
            </span> -->
          </div>
          
          <nav>
          <input type="submit" value="submit" name="submit" class="user"> 
          <!-- onclick="checkData() -->
          <input type="reset" value="reset" class="user">
          </nav>

          <a href="registration.php" class="sam">Registration</a>
          <a href="#" onclick="msg()" class="sam25">Forget password ? </a>
          

          
        </form>
        
      </div>
      <script>
        function msg()
        {
          alert("Yaad karo fir password");
        }
      </script>
</body>
</html>

<?php
 error_reporting(0);
  if(isset($_POST['submit']))
  {
    $name = $_POST['name'];
    $pwd = $_POST['password'];

    $query = "SELECT * FROM form WHERE fname = '$name' && password= '$pwd' " ;
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    echo"$total";
    if($total == 1)
    {
       header('location:Main2.html');
      
    }
    else{
      echo"login failed";
    }
  }
?>





