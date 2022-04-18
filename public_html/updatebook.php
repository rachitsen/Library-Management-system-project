<html>
    <head>
        <style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  /*background-image: url("background/lib3.jpg");*/

  min-height: 100px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  left: 20;
  margin: 10px;
  max-width: 500px;
  height: 600px;
  padding: 16px;
  background-color: white;
  box-shadow: 5px 10px 8px  #888888;

}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
  
  
}
</style>


    </head>
</html>
<?php
include 'admin.php';
include 'connection.php';
error_reporting(0);
?>
<html>
<head>
</head>
<body>
<div class="bg-img">
  <form action="" method="post" class="container">
    <h1>Update Entry</h1>

    <label><b>Sno</b></label>
    <input type="text" name="sno" value="<?php echo $_GET['sn1']?>" required>

    <label><b>Category</b></label>
    <input type="text"  name="category"  value="<?php echo $_GET['sn2']?>" required>

<label><b>Book Name</b></label>
    <input type="text" name="bookname" value="<?php echo $_GET['sn3']?>" required>

<label><b>Quantity</b></label>
    <input type="text" name="quantity" value="<?php echo $_GET['sn4']?>" required>

<label><b>Status</b></label>
    <input type="text" name="status" value="<?php echo $_GET['sn5']?>" required>

    <button type="submit" name="submit" class="btn">Submit</button>
  </form>
</div>
<?php
if($_POST['sno'])
{    
	//$sno=$_POST['sno'];
    $sno=$_GET['sn1'];
	$category=$_POST['category'];
	$bookname=$_POST['bookname'];
    $quantity=$_POST['quantity'];
    $status=$_POST['status'];
    $query="UPDATE books SET  CATEGORY='$category' , BOOKNAME='$bookname' , QUANTITY='$quantity' , STATUS='$status' WHERE SNO='$sno'";
    $data=mysqli_query($conn,$query);
    if($data)
    {
    	echo "<font color='green'>record updated . <a href='https://rachit-cs182-mywebsite.000webhostapp.com/showbook.php'> check here all data </a>";

    }
    else
    	{echo "<font color='red'>record not updated";}
}
else
{

echo "<font color='blue'>click update to save changes<";
}
?>




</body>
</html> 
