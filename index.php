
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="styleSheet.css">
<script type="text/javascript" src="Jquery/jquery-3.5.1.min.js"></script>
</head>

<body>
<div>
  <form  id="form1" method="post">
    <input type="text"  name="Nombre" class="a1" id="a1"/>
    <br>
    <input type="text" name="Apellido" id="a2"/>
    <br>
    <input type="text" name="Direccion" id="a3"/>
    <br>
    <input type="text" name="DNI" id="a4"/>
    <br>
    <input type="text" name="Localidad" id="a5"/>
    <br>
    <input type="text" name="Nacionalidad" id="a6"/>
    <br>
     <button id="b1">Guardar datos</button> 
  </form>
<script src="js.js"></script>
<script type="text/javascript ">
		$(document).ready(function(){
		$('#b1').click(function(){
			var datos=$('#form1').serialize();
			
			$.ajax({
				type:"POST",
				url:"insert.php",
				data:datos,
				success:function(r){
								if(r==1){
						alert("agregado con exito");
					}else{
						alert("Fallo el server");
					}
				}
			});

			return false;
		});
	});</script>
</div>
</body>
</html>