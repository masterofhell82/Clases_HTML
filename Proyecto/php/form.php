<?php 
$numero_de_form = $_POST['codigo'];
//creando formulario para llamar la funcion js
echo '<form action ="acciones.php?codigo=1" method="post"> 
<table class="tablacontent" border = 0>
        <tr>
            <td id="tablatitulo" colspan = "2">
            <p class = formparrafoh1>
            Ingrese los datos para continuar
            </p>
            </td>
        </tr>
        <tr>
            <td width="100">
            <p class = formparrafo>
            Nombre
            </p>
            </td>
            <td>
                <input class = "reinput" type= "text" name = "Nombre">
            </td>    
        </tr>  
        <tr>
            <td width="100">
            <p class = formparrafo>
            Apellido
            </p>
            </td>
            <td>
                <input class = "reinput" type= "text" name = "Apellido">
            </td>    
        </tr>
       <tr>
            <td width="100">
            <p class = formparrafo>
            Modelo del Vaper
            </p>
            </td>
            <td>
                <select class = "regselect" name = "ModeloVaper">
                    <option value = "Smok Al85">Smok Al85</option>
                    <option value = "Smok9829">Smok9829</option>
					<option value = "Mag Right-Handed">Mag Right-Handed</option>
					<option value = "H-Priv 2 Kit">H-Priv 2 Kit</option>
					<option value = "Stick V8 kit">Stick V8 kit</option>
					<option value = "NOVO">NOVO</option>
					<option value = "T-Priv kit">T-Priv kit</option>
					<option value = "SihixSmini Gclass">SihixSmini Gclass</option>
                </select>
			</td>
        <tr>
            <td width="100">
            <p class = formparrafo>
            Tipo de coil
            </p>
            </td>
            <td>
                <select class = "regselect" name = "TipoCoil">
                    <option value = "Claromizador">Claromizador</option>
                    <option value = "RTA">RTA</option>
					<option value = "RDTA"> RDTA</option>
					<option value = "TDA">TDA</option>
                </select>
			</td>
        </tr>
        <tr>
            <td width="100">
            <p class = formparrafo>
            Cantidad de Resistencias
            </p>
            </td>
            <td>
                <input class = "reinput" type= "text" name = "CantidadResistencias">
            </td>    
        </tr>      
        <tr>
            <td width="100">
            <p class = formparrafo>
            
            </p>
            </td>
            <td>
                <button type = "submit" name="submit" value= "1">ENVIAR</button>
            </td>    
        </tr>  
		</tr>
    </table>
	</form>';

?>