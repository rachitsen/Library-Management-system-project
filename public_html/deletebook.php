<?php
include 'admin.php';
include 'connection.php';
$sno=$_GET['sn1'];
$query="DELETE FROM books WHERE SNO='$sno'"; 
$data=mysqli_query($conn,$query);
if($data)
{
	echo "<font color='green'>record deleted from table";
	?>
	<meta http-equiv="Refresh" CONTENT="0; URL=https://rachit-cs182-mywebsite.000webhostapp.com/showbook.php">
	<?php
}
else
{
    echo "<font color='red'>deleted process failed";

}
 ?>

 
