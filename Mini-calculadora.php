<head>

<link href= "css/bootstrap.min.css" rel= "stylesheet" >


<script  src= 'js/bootstrap.min.js' ></script>
<script type="text/javascript" src="js/funciones.js"></script>

<script  src= 'http://localhost/php/minicalculadora/js/jquery-3.3.1.js'></script>


</head>



	<script type="text/javascript">

///validando solo numeros en los campos, javascript Puro	
function validar()
	{

		var f=document.form;
		//*******************************************************
		
		if ( valida_numero(f.va.value)==false )
		{
			alert("Por favor ingrese solo números");
			f.va.value="";
			f.va.focus();
			return false;
		}
	
	}
///validando solo numeros en los campos, javascript Puro	
	

















/////////////////Jquery 3 no campos vacios
$(document).ready(function()
{

				$("#calcular").click(function(){


					var va=$("#va").val();

					var vb=$("#vb").val();

					if (va.length==0 && vb.length==0 ) {

							alert(" LLene las casillas");
							
					}else if (va.length==true && vb.length==0){

							alert(" LLene las casillas");

					}else if (va.length==0 && vb.length==true){

							alert(" LLene las casillas");
					}else{

						//alert("todo ok");
						document.form.submit();
					}


				});			

});
/////////////////Jquery 3





	</script>




</head>












<body>
<div class="container">
	
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">

     <li class="nav-item">
       
        	<img src="http://localhost/php/minicalculadora/img/LogoDarwinx.png" width="80px">
       
      </li>

      <li class="nav-item">
        <a class="nav-link " href="http://localhost/php/minicalculadoraSemd/Mini-calculadora.php" style="padding-top: 25px;">Inicio</a>
      </li>

      <li class="nav-item">

	 <form name="" method="GET" action="Mini-calculadora.php">
			<input type="submit" name="about" value="About" class="btn" style="padding-top: 25px;" >
			

		</form>



      </li>
      
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Minicalculadora By Ing. Darwin Molina S.E</h5>
 						
      	 <form name="" method="GET" action="Mini-calculadora.php">
			<input type="submit" name="suma" value="Suma" class="btn btn-outline-success">
			<input type="submit" name="resta" value="Resta" class="btn btn-outline-danger">
			<input type="submit" name="multi" value="Multiplicacion" class="btn btn-outline-warning">
			<input type="submit" name="divi" value="Division" class="btn btn-outline-dark">
			<input type="submit" name="porcentaje" value="Porcentaje de" class="btn btn-outline-dark">

		</form>


</div>





<?php
/////////////////////////////////////////////////////////////////Acerca de 
if (isset($_GET['about'])) 

{

include("About.html");


}


////////////////////////////////////////////////////////
////////////////////////////////////////////////////Suma
if (isset($_GET['suma'])) 

{



echo "

<span><h6>Suma:</h6></span>
<hr>	
<form action='Mini-calculadora.php?suma=Suma' name='form' method='POST' class=''>








<div classs='container'>
<div class='row'>

<div class= 'col-sm-4' >
					
					<h6>Valor de A:</h6><input type='text' name='va'  id='va' class='form-control' required>
				

</div>


		<div class= 'col-sm-4' >
					
			
							<h6>Valor de B:<h6><input type='text' name='vb' id='vb' class='form-control' required>
					
				
		</div>


		<div class= 'col-sm-2' >
					
					
				<input type='submit' name='calcular' value='Calcular' id='calcular' class='btn btn-secondary' style='margin-top: 26px;' onClick='validar()' >
	
		</div>

	 

</div>
</div>
 </form>
";


if (isset($_POST['calcular'])) 

{

$va=$_POST['va'];
$vb=$_POST['vb'];

$suma=$va+$vb;
echo "<h6 style='background-color:green;'>Result: ".$suma."</h6>";


}





}
///////////////////////////////////////////////////////////////////////////Resta
if (isset($_GET['resta'])) 

{



echo "

<span><h6>Resta:</h6></span>
<hr>	
<form action='Mini-calculadora.php?resta=Resta' name='form' method='POST' class=''>
<div classs='container'>
<div class='row'>

<div class= 'col-sm-4' >	


<h6>Valor de A:</h6><input type='text' name='va'  id='va' class='form-control' required>
</div>

<div class= 'col-sm-4' >	
<h6>Valor de B:</h6><input type='text' name='vb' id='vb' class='form-control' required>
</div>


<div class= 'col-sm-2' >	
<input type='submit' name='calcular' value='Calcular' id='calcular' class='btn btn-secondary' style='margin-top: 26px;' onClick='validar()' >	
</div>




 </form>




</div>
</div>
";


if (isset($_POST['calcular'])) 

{

$va=$_POST['va'];
$vb=$_POST['vb'];

$resta=$va-$vb;
echo "<h6 style='background-color:green;'>Result: ".$resta."</h6>";


}





}

///////////////////////////////////////////////////////////Multi
if (isset($_GET['multi'])) 

{



echo "


<span><h6>Multiplica:</h6></span>
<hr>	
<form action='Mini-calculadora.php?multi=Multiplicacion' name='form' method='POST' class=''>
<div classs='container'>
<div class='row'>





<div class= 'col-sm-4' >
<h6>Valor de A:</h6><input type='text' name='va' id='va' class='form-control' required>
</div>

<div class= 'col-sm-4' >
<h6>Valor de B:</h6><input type='text' name='vb' id='vb' class='form-control' required>
</div>


<div class= 'col-sm-2' >
<input type='submit' name='calcular' value='Calcular' id='calcular' class='btn btn-secondary' style='margin-top: 26px;' onClick='validar()' >	

</div>





 </form>
 

</div>
</div>
";


if (isset($_POST['calcular'])) 

{

$va=$_POST['va'];
$vb=$_POST['vb'];

$multi=$va*$vb;
echo "<h6 style='background-color:green;'>Result: ".$multi."</h6>";


}





}
/////////////////////////////////////////////////////////Divi
if (isset($_GET['divi'])) 

{



echo "

<span><h6>Divide:</h6></span>
<hr>	
<form action='Mini-calculadora.php?divi=Division' name='form' method='POST' class=''>

<div classs='container'>
<div class='row'>




<div class= 'col-sm-4' >
<h6>valor de A:</h6><input type='text' name='va' id='va' class='form-control' required>
</div>

<div class= 'col-sm-4' >
<h6>valor de B:</h6><input type='text' name='vb' id='vb' class='form-control' required>
</div>


<div class= 'col-sm-2' >
<input type='submit' name='calcular' value='Calcular' id='calcular' class='btn btn-secondary' style='margin-top: 26px;' onClick='validar()' >	
</div>



 </form>


</div>
</div>
";


if (isset($_POST['calcular'])) 

{

$va=$_POST['va'];
$vb=$_POST['vb'];

$divi=$va/$vb;
echo "<h6 style='background-color:green;'>Result: ".$divi."</h6>";

}





}


///////////////////////////////////////////////////////////Porcentaje
if (isset($_GET['porcentaje'])) 

{



echo "

<span><h6>Porcentaje:</h6></span>
<hr>	
<form action='Mini-calculadora.php?porcentaje=porcentaje' name='form' method='POST' class=''>

<div classs='container'>
<div class='row'>

<div class= 'col-sm-4' >
<h6>Valor Porcentual. Coloque de 0% a 99%:</h6><input type='text' name='va' id='va' class='form-control' required>
</div>

<div class= 'col-sm-4' >

<h6>La cantidad de la cual desea saber el %:</h6><input type='text' name='vb' id='vb' class='form-control' required>
</div>

<div class= 'col-sm-2' >
<input type='submit' name='calcular' value='Calcular' id='calcular' class='btn btn-secondary' style='margin-top: 26px;' onClick='validar()' >	

</div>


 </form>



</div>
</div>

";


if (isset($_POST['calcular'])) 

{

$porcentaje=$_POST['va'];
$cantidad=$_POST['vb'];

$Result=$porcentaje*$cantidad/100;
echo "<h6 style='background-color:green;'>Porcentaje ingresado : ".$porcentaje."%<br>
Cantidad:".$cantidad." <br>
El" .$porcentaje."% de ".$cantidad."  es := ".$Result."</h6>";


}





}







?>

    <a href="https://semd.neocities.org/" class="btn btn-primary" title="Darwin M.">Go My Portfolio</a>
  </div>
</div>




</body>

