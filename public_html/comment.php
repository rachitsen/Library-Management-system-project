<html>
    <body>
        <style>
<style> 
input {
  width: 60%
  font-size= 62.5%;
}
</style>
    </body>
</html>
<?php
//include 'connection.php';
include 'nonadmin.php';
include 'css.php';
error_reporting(0);?>
<form method="POST">
NAME<br><input type="text" name="name" style="width: 150px ; padding:5px"><br>
FEEDBACK<br><input type="texareat" name="feedback" style=" padding:5px rows="4" cols="50"">
  <input type="submit" name="submit">
</form>
<?php
if($_POST['submit'])
{    
     
  $name=$_POST['name'];
  $feedback=$_POST['feedback'];
      if($name!="" && $feedback!="" )
         {  
             $query = "INSERT INTO feedback VALUES('$name','$feedback')";
             $data = mysqli_query($conn, $query);
             if($data)
             {
              echo "FEEDBACK POSTED";
              }
              else 
             {
              echo "cant able to post";
             }
         }
  else
   {echo "fill all the data";}
}
?>
</body>
<style>
<style> 
input {
  width: 60%;
}
</style>
<?php
$query = "SELECT * FROM feedback WHERE NAME = '$name' ";
$data = mysqli_query($conn,$query);
echo $name;
if(isset($data))
{
	?>
       <table class="table">
       	<tr>
       		<th>your previous feedback</th>
        </tr>
     
	<?php

	while($result=mysqli_fetch_assoc($data))
	 {
	 	
       echo "<tr>
       <td>".$result['feedback']."</td>
       </tr>";
	 }
}
else
{
	echo "no record";
}
?>
  </table>
 
 
