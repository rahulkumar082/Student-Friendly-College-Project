<html>
<head>
  <title>Administrator Login</title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<style>
.navbar{
    background-image:none;
}
body::before {
 background: url(college3.jpg) no-repeat center center fixed;
 content: '';
 z-index: -1;
 width: 100%;
 height: 100%;
 position:absolute;
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 background-size: cover;
 opacity: 0.5;

}

    .form_bg {
      background-color:white;
      padding: 10px;
      margin:auto;
      top:0;
      right:0;
      bottom:0;
      left:0;
      position:absolute;
      width:400px;
      height: 400px;
      border-radius: 5%;

    }
  mark {
   background-color: lightgreen;
   color: black;


}
.button:hover {
   background-color: #4CAF50; /* Green */
   color: white;
}
li {
   margin-right: 40px;
}
.nav2 li {
   margin-right: 10px;
}

</style>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="HomePage.html"><strong>Student Friendly College </strong></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#"><strong>Administrator Login</strong></a></li>
      <li class="active"><a href="StudLog.php"><strong>Student Login</strong></a></li>
    </ul>
  </div>
</nav>
<center>    <form action = "StudentDash.php" method="post" class="form_bg">
  <h1>Administrator Login<h1><br>
      <h3><input type = "text" name = "USN"  autofocus required placeholder="Username" class="form-control"></input><br><br>
      <input type = "password" name="adminPass"  autofocus required placeholder="Password" class="form-control"></input><br></h3>
      <button type = "submit" class="btn btn-info btn-lg">LogIn</button>
    </form></center>
  <?php
  error_reporting(0);
  session_start();
  $conn=new mysqli("localhost","root","","Student_Friendly_College");
	if($conn->connect_error)
	{
		die("connection failed".$conn->connect_error);
	}
  $_SESSION["usn"]=$_POST["USN"];
  $sql="select  * from Student_Info where USN = '".$_POST["USN"]."';";
$res=$conn->query($sql);

  ?>
</body>
</html>
