<?php
		echo "<table border='1'>
		<form method='get' action='resultados.php'>
			<tr><td>Nombre:</td><td><input name='nom' type='text' pattern='[A-Za-z]{3,}' required></td></tr>	
		<tr><td>Apellido Paterno:<td><input name='ap' type='text'pattern='[A-Za-z]{3,}' required></td></tr>
			<tr><td>Apellido Materno:<td><input name='am' type'text' pattern='[A-Za-z]{3,}' required></td></tr>
			<tr><td>Fecha de Nacimineto:<td><input name='fec' type='date' required></td></tr>
			<tr><td>Lugar de Nacimiento:<td><select name='clav' required>";
		$cla=array("AGUASCALIENTES"=>"AS","BAJA CALIFORNIA"=>"BC","BAJA CALIFORNIA SUR"=>"BS","CAMPECHE"=>"CC","CHIAPAS"=>"CS","CHIHUAHUA"=>"CH","COAHUILA"=>"CL","COLIMA"=>"CM","DISTRITO FEDERAL"=>"DF","DURANGO"=>"DG","GUANAJUATO"=>"GT","GUERRERO"=>"GR","HIDALGO"=>"HG","JALISCO"=>"JC","EDO.MEX"=>"MC",
		"MICHOACAN"=>"MN","MORELOS"=>"MS","NAYARIT"=>"NT","NUEVO LEON"=>"NL","OAXACA"=>"OC","PUEBLA"=>"PL","QUERETARO"=>"QT","QUINTANA ROO"=>"QR","SAN LUIS POTOSI"=>"SP","SINALOA"=>"SL","SONORA"=>"SR","TABASCO"=>"TC","TLAXCALA"=>"TL","TAMAULIPAS"=>"TS","VERACRUZ"=>"VZ",
		"YUCATAN"=>"YN","ZACATECAS"=>"ZS");
			foreach($cla as $ed => $clav)
				echo"<option value=".$clav.">".$ed."</option>";
			echo"</select></td></tr>
				<tr><td>Sexo:<td><select name='sex'>
					<option value='M'>Femenino</option>
					<option value='H'>Masculino</option>
				</select></td></tr>
			<tr><td>Numero de Tarjeta Visa:<td><input name='tar' type='text' pattern='^[4]{1}[0-9]{15}$' placeholder='16 digitos'  required/></td></tr>
			<tr><td>Mensaje a cifrar:<td><input type='text' name='men' pattern='[A-Za-z]{1,}' placeholder='sin espacios' required></td></tr>
			<tr><td>Clave:<td><input type='text' name='clave' pattern='[A-Za-z]{1,}' placeholder='sin espacios' required></td></tr>
			</table><br/>
			<input type='submit'><br/><br/>
			</form>
			<form action='inicia.php' method='POST'>
			<button>Cerrar sesion</button>
			</form>
			";
?>