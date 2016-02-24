<!DOCTYPE html>
<html>
<head>
<title>cash machine</title>
</head>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
	function send(){
		cantidad =  $('#id_cantidad').val();	
		if(cantidad <10){
		 	alert('No se puede entregar cantidad, solo multiplos de 10');
			$('#100').val(' '); 
			$('#50').val(' '); 
			$('#20').val(' '); 
			$('#10').val(' '); 
			$('#id_cantidad').val(' '); 
		}
		else{
			if(cantidad >= 100)
			{	
				billetes_100  = cantidad / 100;
				billetesd100 = parseInt (billetes_100);
				billetes_faltantes = cantidad % 100 ;	
				$('#100').val(billetesd100); 	
				if (billetes_faltantes >0)
				{
					billetes_50  = billetes_faltantes / 50;
					billetesd50 = parseInt (billetes_50);
					billetes_faltantes = billetes_faltantes % 50 ;
					$('#50').val(billetesd50); 
					
					if(billetes_faltantes>0)
					{ 
						billetes_20  = billetes_faltantes / 20;
						billetesd20 = parseInt (billetes_20);
						billetes_faltantes = billetes_faltantes % 20 ;	
						$('#20').val(billetesd20); 				
						if(billetes_faltantes>0)
						{
							billetes_10  = billetes_faltantes / 10;
							billetesd10 = parseInt (billetes_10);
							billetes_faltantes = billetes_faltantes % 10 ;
							$('#10').val(billetesd10); 
							if(billetes_faltantes>0)
							{
								alert('No se puede entregar cantidad, solo multiplos de 10');
								$('#100').val(' '); 
								$('#50').val(' '); 
								$('#20').val(' '); 
								$('#10').val(' '); 
								$('#id_cantidad').val(' '); 
							}
						}
					}
				}
			}
			else
			{
				billetes_50  = cantidad / 50;
				billetesd50= parseInt (billetes_50);
				billetes_faltantes = cantidad % 50 ;
				$('#50').val(billetesd50);
				if(billetes_faltantes>0)
				{
					billetes_20  = billetes_faltantes / 20;
					billetesd20 = parseInt (billetes_20);
					billetes_faltantes = billetes_faltantes % 20 ;
					$('#20').val(billetesd20); 
					if(billetes_faltantes>0)
					{
						billetes_10  = billetes_faltantes / 10;
						billetesd10 = parseInt (billetes_10);
						billetes_faltantes = billetes_faltantes % 10 ; 
						$('#10').val(billetesd10); 
						if(billetes_faltantes>0)
						{
							alert('No se puede entregar cantidad, solo multiplos de 10');
							$('#100').val(' '); 
							$('#50').val(' '); 
							$('#20').val(' '); 
							$('#10').val(' '); 
							$('#id_cantidad').val(' '); 
						 }
					}
				}
			}
		}}

	function soloNumeros(e)
	{
		var key = window.Event ? e.which : e.keyCode
		return (key >= 48 && key <= 57)
	}

	function limpiar()
	{
		$('#100').val(' '); 
		$('#50').val(' '); 
		$('#20').val(' '); 
		$('#10').val(' '); 
		$('#id_cantidad').val(' ');
	}
</script> 
<header>
</header>
<link rel="stylesheet" href="css/stilos.css">

<body>
	<div align="center" class="contenedor">
		<br>
		<div>Cajero automatico </div>
		<br>
		<hr>
		<div>
			<table>
				<tr>
					<td>
					<label>Introduce una cantidad a retirar :</label>
					<input type="text" id="id_cantidad" onFocus="limpiar();" onKeyPress="return soloNumeros(event);" ></input>
					</td>
					<td>
					<input type="button" value="Retirar" onclick="send();"></input>
					</td>
				</tr>
			</table>
		</div>
		<div>
			<table>
				<tr>
					<td colspan="4">Usted puede retirar el importe solicitado en los billetes disponibles.</td>
				</tr>
				<tr>
					<td>$100.00</td>
					<td>$50.00</td>
					<td>$20.00</td>
					<td>$10.00</td>
				</tr>
				<tr>
					<td><input type="text" readonly="readonly" name="100" size = "2" id="100" value=></td>
					<td><input type="text" readonly="readonly" name="100" size = "2" id="50" value=></td>
					<td><input type="text" readonly="readonly" name="100" size = "2" id="20" value=></td>
					<td><input type="text" readonly="readonly" name="100" size = "2" id="10" value=></td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>
 
 