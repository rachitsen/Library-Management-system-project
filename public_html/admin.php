<html>
    
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
img {
  border-radius: 50%;
}
</style>
<style>
.a {
  text-align: right;
}
</style>
<style>
.button {
  background-color: black; 
  border: none;
  color: white;
  padding: 0.7rem;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 1.3rem;
  margin: 4px 2px;
  cursor: pointer;
  position: absolute;
  top: 0%;
  right: 0%;
}

.button1 {border-radius: 1.2rem;
    
}

</style>
    </head>
    <body>
        <img src="\background\p1.jpg" style="width:20px">
    </body>
</html>
<?php 
//include 'connection.php';
echo "<strong> WELCOME ".$_SESSION['email'] ."</strong>";
$emaili=$_SESSION['email'];
if ($emaili=="admin@user.com")
{
}
else 
  {
    header('location:login.php');
  }
 ?>

<?php
include 'connection.php';
   $query = "SELECT * FROM user WHERE email='$emaili'";
   $data=mysqli_query($conn, $query);
   $result=mysqli_fetch_assoc($data);
  ?>
  <div class="a"><a href="logout.php"><button class="button button1 ">Logout</button></a></div>
<!DOCTYPE html>
<html>
<head>
  <style>
    body{background-color:#FFEFD5;};
</style>
  </head>

<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #75A1D0;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 1rem 3.6rem;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color:#A9CCE3;
}

.active {
  background-color: #154360;
}
</style>

<body >

<ul>
  <li><a class="active" href="admin.php">HOME</a></li>
  <li><a href="search.php">SEARCH BOOK</a></li>
  <li><a href="insertbook.php">ADD BOOK</a></li>
  <li><a href="showbook.php">UPDATE BOOK</a></li>
  <li><a href="show.php">STUDENT INFO</a></li>
  <li><a href="feedback.php">FEEDBACK</a></li>

</ul>
<h1 align=center>LIBRARY MANAGEMENT SYSTEM</h1>
</body>
</html>
 
