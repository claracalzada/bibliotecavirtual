<?php 
include("cn.php");
$opcion=$_POST['opcion2'];
	$sql="SELECT *
		from situssolitus 
		where parent_id='$opcion'";

	$result=mysqli_query($connection,$sql);

	$cadena="<label>Opciones</label> 
			<select id='lista3' name='lista3'>";
	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[2].'>'.$ver[0].'</option>';
	}

	echo  $cadena."</select></form>";
	

?>	
