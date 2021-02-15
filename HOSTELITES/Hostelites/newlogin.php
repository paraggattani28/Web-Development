<?php
    include_once 'db_connect.php';
    session_start();
?>

<?php
    if(isset($_SESSION['session_usn']))
    {
        $session_usn = $_SESSION['session_usn'];
        $session_first_name = $_SESSION['session_first_name'];
        $session_last_name = $_SESSION['session_last_name'];
    }
?>
<br><br>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign-in</title>
    
<style>

* {
    box-sizing: border-box;
}
form{
    background-color:black;
}
body {
    background: #f6f5f7;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-family: 'Ubuntu', sans-serif;
    height: 100vh;
    margin: -20px 0 50px;
}

h1 {
    font-weight: bold;
    margin: 0;
}

h2 {
    text-align: center;
}

p {
    font-size: 14px;
    font-weight: 100;
    line-height: 20px;
    letter-spacing: 0.5px;
    margin: 20px 0 30px;
}

span {
    font-size: 12px;
}

a {
    color: #333;
    font-size: 14px;
    text-decoration: none;
    margin: 15px 0;
}

button {
    border-radius: 20px;
    border: 1px solid darkgrey;
    background-color: black;
    color: #FFFFFF;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    outline: none;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
}

button:active {
    transform: scale(0.95);
}

button.ghost {
    background-color: transparent;
    border-color: #FFFFFF;
}

form {
    background-color: #FFFFFF;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 50px;
    height: 100%;
    text-align: center;
}

input {
    background-color: #eee;
    border: none;
    padding: 12px 15px;
    margin: 8px 0;
    outline: none;
    width: 100%;
}

.container {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
                0 10px 10px rgba(0,0,0,0.22);
    position: relative;
    overflow: hidden;
    width: 768px;
    max-width: 100%;
    min-height: 480px;
}

.form-container {
    position: absolute;
    top: 0;
    height: 100%;
    margin-top: 10px;
    transition: all 0.6s ease-in-out;
}

.sign-in-container {
    left: 0;
    width: 50%;
    z-index: 2;
}

.container.right-panel-active .sign-in-container {
    transform: translateX(100%);
}

.sign-up-container {
    left: 0;
    width: 50%;
    opacity: 0;
    z-index: 1;
}

.container.right-panel-active .sign-up-container {
    transform: translateX(100%);
    opacity: 1;
    z-index: 5;
    animation: show 0.6s;
}

@keyframes show {
    0%, 49.99% {
        opacity: 0;
        z-index: 1;
    }
    
    50%, 100% {
        opacity: 1;
        z-index: 5;
    }
}

.forgot-password {
    transition: letter-spacing .3s ease-in-out;
}

.forgot-password:hover {
    letter-spacing: 1px;
}

.overlay-container {
    position: absolute;
    top: 0;
    left: 50%;
    width: 50%;
    height: 100%;
    overflow: hidden;
    transition: transform 0.6s ease-in-out;
    z-index: 100;
}

.container.right-panel-active .overlay-container{
    transform: translateX(-100%);
}

.overlay {
    background: grey;
    background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
    background: linear-gradient(to right, black, black);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 0 0;
    color: #FFFFFF;
    position: relative;
    left: -100%;
    height: 100%;
    width: 200%;
    transform: translateX(0);
    transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
    transform: translateX(50%);
}

.overlay-panel {
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 40px;
    text-align: center;
    top: 0;
    height: 100%;
    width: 50%;
    transform: translateX(0);
    transition: transform 0.6s ease-in-out;
}

.overlay-left {
    transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
    transform: translateX(0);
}

.overlay-right {
    right: 0;
    transform: translateX(0);
}

.container.right-panel-active .overlay-right {
    transform: translateX(20%);
}

.social-container {
    margin: 20px 0;
}

.social-container a {
    border: 1px solid #DDDDDD;
    border-radius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 5px;
    height: 40px;
    width: 40px;
}
        
    </style>
</head>
<body>

    <div class="container" id="container">
  <div class="form-container sign-up-container">
    <form action = "insert.php" method = "POST">
      <h1>Create Account</h1>
      <div class="social-container">
        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
      </div>
      <span>or use your email for registration</span>
      <input type="text" placeholder="Name" />
      <input type="email" placeholder="Email" />
      <input type="password" placeholder="Password" />
      <button>Sign Up</button>
    </form>
  </div>
  <div class="form-container sign-in-container">
    <form action="login_check.php" method = "POST">
      <h1>Sign in</h1>
      <div class="social-container">
        <a href="#" class="social"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
        <a href="#" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="#" class="social"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
      </div>
      <span>or use your account</span><br>
      <?php
      if(isset($_POST['usn']))
      {
          $usn = $_POST['usn'];
          echo '<input type = "text" name = "usn" placeholder = "USN" value = "'.$usn.'">';
      }
      else
      {
          echo '<input type = "text" name = "usn" placeholder = "USN">';
      }
  ?>
  <input type = "password" name = "password" placeholder = "Password">
  <br>
      <a href="#" class="forgot-password">Forgot your password?</a>
      <button type = "submit" type="submit" name = "login" value = "login">Sign In</button>   
    </form>
         
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
        <button class="ghost" id="signIn">Sign In</button>
          <button class="signup" id="signUp">Sign Up</button>
      </div>
      <div class="overlay-panel overlay-right">
        <h1>Hey, Buddy!</h1>
        <p>Knidly enter your personal details and continue journey with us</p>
          <a href="Original_signup.php"><button id="signUp" >Sign Up</button></a>
      </div>
    </div>
  </div>
</div>
    
</body>    
</html>