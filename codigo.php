<?php
	include("cn.php");
	$auriculaderecha = "SELECT * FROM auriculaderecha";
	$auriculaizquierda = "SELECT * FROM auriculaizquierda";
	$ventriculoderecho = "SELECT * FROM ventriculoderecho";
	$ventriculoizquierdo = "SELECT * FROM ventriculoizquierdo";
	$septo = "SELECT * FROM septo";
	$situssolitus= "SELECT * FROM situssolitus";
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <link rel="stylesheet" href="estilos.css">
		<h1 align="center">Atlas de modelos de corazones</h1>
		<script
		src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
		<p> 
		<img id="imagen1" class= "imagen1" src="universidad.png"  style="position:fixed; left:0px; top:0px; width:150px; height:75px; border:none;">
		</p> 
		<p> 
		<img id="imagen2" class= "imagen2" src="hospital.jpg"  style="position:fixed; right:0px; top:0px; width:150px; height:75px; border:none;">
		</p> 
		<h2> Visualización de ejemplos de segmentos independientes </h2>
	</head>
	<body>
	<form method="post" action="descargar.php">
	<table>
	<td>
		<table id= "auriculaderecha" border="1" width="333px" align="center" cellpadding="10px" method="post">
			<caption> AURICULA DERECHA </caption>
			<tr> 
				<td class ="table__header">Nombre </td>
				<td class="table__header">Archivo </td>
			</tr>	
			<?php $resultado = mysqli_query($connection,$auriculaderecha); 
			while($mostrar=mysqli_fetch_assoc($resultado)) { ?>
			<tr>
				<td class="table__item"><?php echo $mostrar["name"];?> </td>
				 <td class="table_item"><a href="descargar.php?id=<?php echo $mostrar['id'] ?>"><?php echo $mostrar["name"]?></a></td>
			<?php } mysqli_free_result($resultado); ?>
			</tr>
		</table>
	</td>
</form>
<form method="post">
	<td>
		<table id= "auriculaizquierda" border="1" width="333px" align="center" cellpadding="10px"> 
			<caption> AURICULA IZQUIERDA </caption>
			<tr>
				
				<td class ="table__header">Nombre</td>
				<td class="table__header">Archivo</td>
			</tr>	
			<?php $resultado = mysqli_query($connection,$auriculaizquierda); 
			while($mostrar=mysqli_fetch_assoc($resultado)) { ?>
			<tr>
				<td class="table__item"><?php echo $mostrar["name"];?> </td>
				<td class="table_item"><a href="descargar2.php?id=<?php echo $mostrar['id'] ?>"><?php echo $mostrar["name"]?></a></td>
				<?php } mysqli_free_result($resultado); ?>
				
			</tr>
		</table>
	</td>
</form>
<form method="post">
	<td>
		<table id= "ventriculoizquierdo" border="1" width="333px" align="center" cellpadding="10px">
			<caption> VENTRICULO IZQUIERDO </caption>
			<tr>
				
				<td class ="table__header">Nombre</td>
				<td class="table__header">Archivo</td>
			</tr>	
			<?php $resultado = mysqli_query($connection,$ventriculoizquierdo); 
			while($mostrar=mysqli_fetch_assoc($resultado)) { ?>
			<tr>
				<td class="table__item"><?php echo $mostrar["name"];?> </td>
				<td class="table_item"><a href="descargar3.php?id=<?php echo $mostrar['id'] ?>"><?php echo $mostrar["name"]?></a></td>
				<?php } mysqli_free_result($resultado); ?>
				
			</tr>
		</table>
	</td>
</form>
<form method="post">
	<td>
		<table id= "ventriculoderecho" border="1" width="333px" align="center" cellpadding="10px">
			<caption> VENTRICULO DERECHO </caption>
			<tr>
				
				<td class ="table__header">Nombre</td>
				<td class="table__header">Archivo</td>
			</tr>	
			<?php $resultado = mysqli_query($connection,$ventriculoderecho); 
			while($mostrar=mysqli_fetch_assoc($resultado)) { ?>
			<tr>
				<td class="table__item"><?php echo $mostrar["name"];?> </td>
				<td class="table_item"><a href="descargar4.php?id=<?php echo $mostrar['id'] ?>"><?php echo $mostrar["name"]?></a></td>
				<?php } mysqli_free_result($resultado); ?>
				
			</tr>
		</table>
	</td>
</form>
<form method="post">
	<td>
		<table id= "septo" border="1" width="333px" align="center" cellpadding="10px">
			<caption> SEPTO </caption>
			<tr>
				
				<td class ="table__header">Nombre</td>
				<td class="table__header">Archivo</td>
			</tr>	
			<?php $resultado = mysqli_query($connection,$septo); 
			while($mostrar=mysqli_fetch_assoc($resultado)) { ?>
			<tr>
				<td class="table__item"><?php echo $mostrar["name"];?> </td>
				<td class="table_item"><a href="descargar5.php?id=<?php echo $mostrar['id'] ?>"><?php echo $mostrar["name"]?></a></td>
				
				<?php } mysqli_free_result($resultado); ?>
				
			</tr>
		</table>
	</td>
	</table>
	</form>
	<h2> Elección del modelo de cardiopatía </h2>
	<form method="post">	
     	
     	<select id="lista1" name="lista1">
				<option value="100">Selecciona una opcion</option>
				<option value="4">Sin defectos septales</option>
				<option value="3">Con defectos septales</option>
				<option value="1">Anomalias valvula pulmonar y arterias pulmonares</option>
				<option value="2">Anomalias ventriculo izquierdo y valvula aortica</option>
				<option value="19">Espejo</option>
				<option value="20">Arco izquierdo</option>
		</select>
		

	</form>
	<form method="post">
		<p></p>
		<div id="select2lista"></div>
		<br>
	</form>
	<form method="post">	
		<p></p>
		<div id="select3lista"></div>
	</form>
	<p>
      <form method="post" id="boton">
       	<button class="button" value="ver" id="ver" onclick="ver(this)">Ver</button>
	</form>
    </p>
    <span style="position: fixed; right:60px; bottom:400px;">
    	<font size="5">Representación previa en 2D (pase el ratón por encima del nombre del segmento):</font>
    </span>
    <p> 
	<img id="imagen" class= "imagen" src="logo.png"  style="position:fixed; right:60px; bottom:60px; width:350px; height:350px; border:none;">
	</p>
	<p> 
	<span align="center">
    	<font size="4" style="font-weight: 600;">Pasos a seguir:</font></span></p>
    <span><p>	
    	<font size="4" style="font-weight: 600;"> 1) Haga click en la columna de archivo del segmento que se quiera visualizar de manera independiente.</font>
    </span></p> 
    <p> <span>
    	<font size="4" style="font-weight: 600;"> 2) Despliegue del menú de cardiopatías que según la elección podría disponer de casos específicos. </font>
    </span></p> 
    <p> <span>
    	<font size="4" style="font-weight: 600;"> 3) Pulsar el botón 'Ver'. Al terminar la ejecución el archivo se encontrará en el disco "D:/" de su computadora.</font>
    </span></p> 
    <p> <span>
    	<font size="4"> Ejemplo de modelo con septo cia secundum:</font>
    </span></p> 
    <p> <span>
    	<font size="4"> Primer menú: con defectos septales.</font>
    </span></p> 
    <p> <span>
    	<font size="4"> Segundo menú: septo interventricular.</font>
    </span></p> 
    <p> <span>
    	<font size="4"> Tercer menú: defecto perimembranoso. 'Ver'</font>
    </span></p>
     <p> 
	<img id="imagen3" class= "imagen3" src="corazon_septo.png"  style="position:fixed; left:400px; bottom:80px; width:100px; height:130px; border:none;">
	</p> 
</body>

<footer class="text-center text-white mt-5" style="background-color: #0a4275; color: white; text-align: center">
  <p>Trabajo realizado por Clara Calzada</p>
  <p style="background-color: #0a4275; color: white; text-align: center">Copyright &copy. Mullins3d.com/codigo.php</a></p>
</footer>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#lista1').val[100];
			recargarLista();
		$('#lista1').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"datos.php",
			data:"opcion1=" + $('#lista1').val(),
			success:function(r){
				$('#select2lista').html(r);
			}
		});
	}
</script> 
<script type="text/javascript">
	$(document).ready(function(){
	  $('#boton').on('click',function(){                                      
	    let valor = $('#lista1').val();
	    let valor2 = $('#lista3').val();
	    console.log(valor);
	    console.log(valor2);
	    $.ajax({                        
	       type: 'POST',                 
	       url : 'index.php',                   
	       data: {value: valor, value2: valor2},
	       success: function(data)            
	       {
	       }
	     }).done(function(){
	     	alert('Se ha comenzado la ejecucion');
	     });
	  });
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
  		$("#auriculaderecha td").hover(cambiar_ad, restaurar_ad);
	});
		function cambiar_ad(e){
 		 	$('#imagen').attr("src", $('#imagen').attr("src").replace("logo.png", "AD.png") );
		} 
		function restaurar_ad(e){
  			$('#imagen').attr("src", $('#imagen').attr("src").replace("AD.png", "logo.png") );
		}
</script>
<script type="text/javascript">
	$(document).ready(function(){
  		$("#auriculaizquierda td").hover(cambiar_ai, restaurar_ai);
	});
		function cambiar_ai(e){
 		 	$('#imagen').attr("src", $('#imagen').attr("src").replace("logo.png", "AI.png") );
		} 
		function restaurar_ai(e){
  			$('#imagen').attr("src", $('#imagen').attr("src").replace("AI.png", "logo.png") );
		}
</script>
<script type="text/javascript">
	$(document).ready(function(){
  		$("#ventriculoderecho td").hover(cambiar_vd, restaurar_vd);
	});
		function cambiar_vd(e){
 		 	$('#imagen').attr("src", $('#imagen').attr("src").replace("logo.png", "vd.png") );
		} 
		function restaurar_vd(e){
  			$('#imagen').attr("src", $('#imagen').attr("src").replace("vd.png", "logo.png") );
		}
</script>
<script type="text/javascript">
	$(document).ready(function(){
  		$("#ventriculoizquierdo td").hover(cambiar_vi, restaurar_vi);
	});
		function cambiar_vi(e){
 		 	$('#imagen').attr("src", $('#imagen').attr("src").replace("logo.png", "vi.png") );
		} 
		function restaurar_vi(e){
  			$('#imagen').attr("src", $('#imagen').attr("src").replace("vi.png", "logo.png") );
		}
</script>
<script type="text/javascript">
	$(document).ready(function(){
  		$("#septo td").hover(cambiar_septo, restaurar_septo);
	});
		function cambiar_septo(e){
 		 	$('#imagen').attr("src", $('#imagen').attr("src").replace("logo.png", "septo.png") );
		} 
		function restaurar_septo(e){
  			$('#imagen').attr("src", $('#imagen').attr("src").replace("septo.png", "logo.png") );
		}
</script>