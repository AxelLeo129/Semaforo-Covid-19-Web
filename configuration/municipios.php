<?php
    require '../configuration/conection.php';
    
	$query = $db->query("SELECT * FROM municipioss where idDepartamento=$_GET[departamento_id]");
	$states = array();
	while ($r = $query->fetch_object()) {
		$states[] = $r;
	}
	if (count($states) > 0) {
		print "<option value=''>Municipio</option>";
		foreach ($states as $s) {
			print "<option value='$s->idMuni'>$s->nombreMuni</option>";
		}
	} else {
		print "<option value=''>NO HAY DATOS</option>";
	}
?>