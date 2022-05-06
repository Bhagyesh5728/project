<?php
include "header.php";
?>
<h2 style="background-color: green; color: white;">latest 4 phootos</h2>
<table>
<?php
$p=0;
 include "conect.php";
 $s=mysqli_query($con,"select * from photo  order by id desc limit 04 ");
while($arr=mysqli_fetch_array($s))
{
	if($p%4==0)
	{
		echo "<tr>";
	}
?>
	<td><img src="<?php echo $arr ['URL']; ?>" width="150" height="150" >&nbsp;&nbsp; </td>

	<?php 
	if($p%4==3)
	{
		echo "</tr>";
	}
	$p++;
}
?>

</table>
<h2 style="background-color: green; color: white;">latest video</h2>
<?php

include "conect.php";
$s=mysqli_query($con,"select * from video order  by id desc limit 01");
while($r=mysqli_fetch_array($s))
{
	?>
<video controls="">
<source src="<?php  echo $r ['URL'] ?>" type=""> 
	

</video>
	<?php
}


?>

<br><br><br><br>

<?php

include "fotter.php";
?>
