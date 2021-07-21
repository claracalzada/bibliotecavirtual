
<?php 
	include("cn.php");
	$item_id =$_POST['value'];
	$id_2=$_POST['value2'];
	
    if($item_id=="1" & $id_2=="15"){
	exec("start cmd /k cmdejecucionsinarterias.bat");
	} 
    elseif($item_id=="1" & $id_2=="13"){
	exec("start cmd /k cmdejecucionestenosisarterias.bat");
	}
	
    elseif($item_id=="2"){
        exec("start cmd /k cmdejecucionestenosisvalvula.bat");
        
    }
    
    elseif($item_id=="3" & $id_2=="27"){
    exec("start cmd /k cmdejecucionsepto.bat");
	}
	elseif($item_id=="3" & $id_2=="28"){
	exec("start cmd /k cmdejecucionseptosubaortico.bat");
	}    	
	elseif($item_id=="3" & $id_2=="30"){
	exec("start cmd /k cmdejecucionseptomuscular.bat");
	}
	elseif($item_id=="3" & $id_2=="31"){
	exec("start cmd /k cmdejecucionseptoentrada.bat");
	}
   
	elseif($item_id=="4"){
        exec("start cmd /k cmdejecucionnormal.bat");
        
    }
	elseif($item_id=="19"){
        exec("start cmd /k cmdejecucionespejo.bat");
       
}
?>