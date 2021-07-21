
<?php 
include("cn.php");
$opcion=$_POST['opcion1'];

	$sql="SELECT *
		from situssolitus 
		where parent_id='$opcion'";

	$result=mysqli_query($connection,$sql);

	$cadena="<label>Opciones</label> 
			<select id='lista2' name='lista2'>";
	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[2].'>'.$ver[0].'</option>';
	}

	echo  $cadena."</select></form>";
	

?>	

<script type="text/javascript">
	$(document).ready(function(){
		$('#lista2').change(function(){
			recargarLista2();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista2(){
		$.ajax({
			type:"POST",
			url:"datos2.php",
			data:"opcion2=" + $('#lista2').val(),
			success:function(r){
				$('#select3lista').html(r);
			}
		});
	}
</script>


 
 