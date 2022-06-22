<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito&display=swap">;
<nav class="navbar navbar-inverse navbar-fixed-top" style="background: rgba(0, 0, 0, 0.7); border: 0px;">
 <div class="container">
 <div class="navbar-header">
 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 </button>
 <a onmouseover="this.style.textShadow = '3px 3px 10px rgba(0,0,0,0.9)'" onmouseout="this.style.textShadow = '2px 2px 1px rgba(0,0,0,0)'" class="navbar-brand" style="color:#fff;" href="index.php">SBK Parts</a>
 </div>
 <div class="collapse navbar-collapse" id="myNavbar">
 <ul class="nav navbar-nav navbar-right">
 <?php
 if(isset($_SESSION['email'])) {
 ?>
 <li><a onmouseover="this.style.textShadow = '3px 3px 10px rgba(0,0,0,0.9)'" onmouseout="this.style.textShadow = '2px 2px 1px rgba(0,0,0,0)'" href = "cart.php"  style="color:#fff;"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
 <li><a onmouseover="this.style.textShadow = '3px 3px 10px rgba(0,0,0,0.9)'" onmouseout="this.style.textShadow = '2px 2px 1px rgba(0,0,0,0)'" href = "settings.php" style="color:#fff;"><span class = "glyphicon glyphicon-user"></span> 
  Settings</a></li>
 <li><a onmouseover="this.style.textShadow = '3px 3px 10px rgba(0,0,0,0.9)'" onmouseout="this.style.textShadow = '2px 2px 1px rgba(0,0,0,0)'" href = "logout.php" style="color:#fff;"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
 <?php
 } else {
 ?>
 <li><a href="signup.php" onmouseover="this.style.textShadow = '3px 3px 10px rgba(0,0,0,0.9)'" onmouseout="this.style.textShadow = '2px 2px 1px rgba(0,0,0,0)'" style="color:#fff;"><span class="glyphicon glyphicon-user"></span>
Sign Up</a></li>
 <li><a href="login.php" onmouseover="this.style.textShadow = '3px 3px 10px rgba(0,0,0,0.9)'" onmouseout="this.style.textShadow = '2px 2px 1px rgba(0,0,0,0)'" style="color:#fff;"><span class="glyphicon glyphicon-log-in"></span>
Login</a></li>
 <?php
 }
 ?>
 </ul>
 </div>
 </div>
</nav>