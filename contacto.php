<?php
	include 'cabecera.php';
?>

		<section>
			<article>
				<h2><center><span>PAGINA EN CONSTRUCCION</span></center></h2><br>

				<form action = "" method="_get">
						<label for = "nombre"> Nombre </label> 
	
	<input type="text"  name = "nombre" id="nombre" placeholder="es un texto"/>
	<br>
	<label for = "apellido"> Apellido </label>
	<input type="text"  name = "apellido" id="apellido"/>
	<br><br><br>

	<label for = "sexo"> Sexo </label><br>
	<input type="radio" name = "sexo" id:"m" value = "1" /> 
	<label for = "m"> Mujer</label>
	<br>
	<input type="radio" name = "sexo" id:"h" value = "2" /> 
	<label for = "h"> Hombre</label>
	<br><br><br>

	<label for = "gusto"> Gustos </label><br>
	<input type="checkbox" name = "news" id:"jardin" value = "3" /> <label for = "jardin"> jardin</label>
	<br>
	<input type="checkbox" name = "decora" id:"decoracion" value = "4" /> <label for = "decoracion"> decorando</label>
	<br><br><br>


	<select name ="pais" id="pais">
			<option value = ""> Seleccione un Pais </option>		
			<option value = "uy"> uruguay </option>
			<option value = "ar"> argentina</option>
			<option value = "br"> brasil</option>
	</select>
	<br>
	<br>
	<br>

	<label for = "contenido"> Comentario:</label><br>
	<textarea name="contenido"> </textarea> 
	<br>
	<br>


	<input type="email" name="correo"/> <label for = "correo"> Mail</label>
	<br>
	<br>
	<label for = "password"> Contraseña</label>
	<input type ="password"/> 
	<br>
	<br>

	<input type="date" name="fecha" id="fecha">
	<br>
	<br>
	<input type="time" name="hora" id="hs">	
	<br>
	<br>
	<input type="color" name="color" id="co">
	<br>
	<br>
	<input type="search" name="busca" id="buscar">
	<br>
	<br>
	<input type="number" name="nro" id="num">
	<br>
	<br>
	<input type="range" min="20" max="50" name="rango" id="rg">
	<br>
	<br>
	<input type="url" name="u" id="ul">
	<br>
	<br>
	<input type="tel" name="te" id="te">
	<br>
	<br>



	<input type="submit" />

				</form>

			</article>

			<aside>
				<p>aside</p>
			</aside>
			
		</section>

<?php
	include 'pie.php';
?>
