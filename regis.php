<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="images/tigre.jpg" style="background-attachment: fixed" >
    <!-- formulario registro -->

<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt"><h1 style="color:white;">Registrese</h1></legend>
    <div class="form-group">
    <br>
  
      <label style="font-size: 14pt"><h2 style="color:white;">Ingresa tu nombre</h2></label>
      <input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />
    </div>
    <br>
    
    <div class="form-group">
      <label style="font-size: 14pt"><h2 style="color:white;">Ingresa tu email</h2></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Ingresa mail"/>
    </div>
    <br>
  
    <div class="form-group">
      <label style="font-size: 14pt"><h2 style="color:white;">Ingresa tu contraseña</h2></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
    </div>
    <br>
  
    <div class="form-group">
      <label style="font-size: 14pt"><h2 style="color:white;">Repite tu contraseña</h2></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
    </div>
    <br>
    
    </div>
   
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>

  </fieldset>
</form>
</div>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div></center></div></center>
</body>
</html>