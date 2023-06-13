
<!DOCTYPE html>
<html>
    <head>
    	<title>Tiketmaster</title>
    	<link rel="'icon'" href="'C:\Users\Ana Pamela\Documents\CURSO WEB'" type="'image/x-icon'">
    </head>
    <body>
		

		<form action="./boletos.php" method="post" target"_blank">
		<fieldset>
			<legend>REGISTRO</legend>
			<label for"Nombre ">Nombre 
			<input id="Nombre " type="text" name="Nombre" require>
			</label><br><br>
			<label for"Apellido">Apellido 
			<input id="Apellido" type="text" name="Apellido" require>
			<br><br>
			<label for"Artista">Artista</label>
			<select id="Artista" name="Artista" require>
				<option value="Bruses">Bruses</option>
				<option value="Morat">Morat</option>
				<option value="(G)I-DLE">(G)I-DLE</option>
				<option value="SCRUBB">SCRUBB</option>
			</select><br><br>
			<label for"Fecha">Fecha
			<input id="Fecha" type="date" name="Fecha" require>
			</label><br><br>
			<label for"Unidades">Unidades 
			<input id="Unidades" type="number" max=15  name="Unidades" require>
			<br><br>
			<label for"Lugar">Lugar</label>
			<select id="Lugar" name="Lugar" require>
				<option value="Forosol">Forosol</option>
				<option value="Palacio de los deportes">Palacio de los deportes</option>
				<option value="Auditorio nacional ">Auditorio nacional</option>
				<option value="Arena Ciudad de Mexico">Arena Ciudad de Mexico</option>
			</select><br><br>
			
			<input id="General A" type="checkbox" name="P1" value="General A">
			<label  for "Genral A">Genral A</label><br><br>
			
			<input id="General B" type="checkbox" name="P2" value="General B">
			<label  for "Genral B">Genral B
			</label><br><br>
			
			<input id="Naranja AA" type="checkbox" name="P3" value="Naranja AA">
			<label  for "Naranja AA">Naranja AA
			</label><br><br>
			
			<input id="Platino A" type="checkbox" name="P4" value="Platino A" >
			<label  for "Platino A">Platino A
			</label><br><br>
			</select><br><br>
			
			<input id="Lugar de estacionamiento" type="checkbox" name="OP1" value="Lugar de estacionamiento">
			<label  for "Lugar de estacionamiento">Lugar de estacionamiento 
			</label><br><br>
			
			<input id="Pase VIP" type="checkbox" name="OP2" value="Pase VIP">
			<label  for "Pase VIP">Pase VIP
			</label><br><br>
			
			<input id="Brazalete de comida ilimitada" type="checkbox" name="OP3" value="Brazalete de comida ilimitada">
			<label  for "Brazalete de comida ilimitada">Brazalete de comida ilimitada
			</label><br><br>
			
			<input id="Apartado de Merch official" type="checkbox" name="OP4" value="Apartado de Merch official">
			<label  for "Apartado de Merch official">Apartado de Merch official
			<button>Enviar</button>
			</label><br><br>
			<?php
			$dato =$_POST
			?>
			</fieldset>
		</from>
		
    </body>
</html>
