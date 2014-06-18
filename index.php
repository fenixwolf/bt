<!doctype html>
<html lang="es" style="backgroud-color:grey">
<head>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<meta charset="UTF-8">
	<title>Plantilla ML</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
/*Estilos*/
	#col_12{
background: -moz-linear-gradient(top, rgba(102,153,0,1) 0%, rgba(114,170,121,1) 52%, rgba(125,185,232,0) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(102,153,0,1)), color-stop(52%,rgba(114,170,121,1)), color-stop(100%,rgba(125,185,232,0))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, rgba(102,153,0,1) 0%,rgba(114,170,121,1) 52%,rgba(125,185,232,0) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, rgba(102,153,0,1) 0%,rgba(114,170,121,1) 52%,rgba(125,185,232,0) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, rgba(102,153,0,1) 0%,rgba(114,170,121,1) 52%,rgba(125,185,232,0) 100%); /* IE10+ */
background: linear-gradient(to bottom, rgba(102,153,0,1) 0%,rgba(114,170,121,1) 52%,rgba(125,185,232,0) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#669900', endColorstr='#007db9e8',GradientType=0 ); /* IE6-9 */
/*border-radius: 0px 0px 15px 15px;*/

	height: 150px;
	}
	h1,p,strong,code{
		font-family: 'Ubuntu', sans-serif;
	}
	#col_11{
		background-color: #CB97E5;
	}
	body{
		background-color: #D8DCDE;
		height: 25em;
	}
	#logo{
		color: white;
	}
	
	#logos_empresas{
		margin: 0.5em; 
	}
	footer{
		background: -moz-linear-gradient(top, rgba(125,185,232,0) 0%, rgba(125,185,232,0.1) 5%, rgba(138,194,127,1) 48%, rgba(153,204,0,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(125,185,232,0)), color-stop(5%,rgba(125,185,232,0.1)), color-stop(48%,rgba(138,194,127,1)), color-stop(100%,rgba(153,204,0,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, rgba(125,185,232,0) 0%,rgba(125,185,232,0.1) 5%,rgba(138,194,127,1) 48%,rgba(153,204,0,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, rgba(125,185,232,0) 0%,rgba(125,185,232,0.1) 5%,rgba(138,194,127,1) 48%,rgba(153,204,0,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, rgba(125,185,232,0) 0%,rgba(125,185,232,0.1) 5%,rgba(138,194,127,1) 48%,rgba(153,204,0,1) 100%); /* IE10+ */
background: linear-gradient(to bottom, rgba(125,185,232,0) 0%,rgba(125,185,232,0.1) 5%,rgba(138,194,127,1) 48%,rgba(153,204,0,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#007db9e8', endColorstr='#99cc00',GradientType=0 ); /* IE6-9 */
		/*border-radius: 10px 10px 0px 0px;*/
		height: 5em;}
	#bancos {
	background: -moz-linear-gradient(top, rgba(204,0,0,1) 0%, rgba(161,101,127,1) 52%, rgba(125,185,232,0.1) 95%, rgba(125,185,232,0) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(204,0,0,1)), color-stop(52%,rgba(161,101,127,1)), color-stop(95%,rgba(125,185,232,0.1)), color-stop(100%,rgba(125,185,232,0))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, rgba(204,0,0,1) 0%,rgba(161,101,127,1) 52%,rgba(125,185,232,0.1) 95%,rgba(125,185,232,0) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, rgba(204,0,0,1) 0%,rgba(161,101,127,1) 52%,rgba(125,185,232,0.1) 95%,rgba(125,185,232,0) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, rgba(204,0,0,1) 0%,rgba(161,101,127,1) 52%,rgba(125,185,232,0.1) 95%,rgba(125,185,232,0) 100%); /* IE10+ */
background: linear-gradient(to bottom, rgba(204,0,0,1) 0%,rgba(161,101,127,1) 52%,rgba(125,185,232,0.1) 95%,rgba(125,185,232,0) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cc0000', endColorstr='#007db9e8',GradientType=0 ); /* IE6-9 */	

	}
	#envios{
		background: -moz-linear-gradient(top, rgba(51,181,229,1) 0%, rgba(85,183,230,1) 46%, rgba(125,185,232,0) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(51,181,229,1)), color-stop(46%,rgba(85,183,230,1)), color-stop(100%,rgba(125,185,232,0))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, rgba(51,181,229,1) 0%,rgba(85,183,230,1) 46%,rgba(125,185,232,0) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, rgba(51,181,229,1) 0%,rgba(85,183,230,1) 46%,rgba(125,185,232,0) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, rgba(51,181,229,1) 0%,rgba(85,183,230,1) 46%,rgba(125,185,232,0) 100%); /* IE10+ */
background: linear-gradient(to bottom, rgba(51,181,229,1) 0%,rgba(85,183,230,1) 46%,rgba(125,185,232,0) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#33b5e5', endColorstr='#007db9e8',GradientType=0 ); /* IE6-9 */
	}
	
	#publicacion{
		/*border-radius: 15px 15px 15px 15px;*/
	
    border:1px solid #ccc;
    border-bottom:2px solid #bbb;
    border-top:1px solid #ddd;
    border-radius:10px;
    -webkit-border-radius:10px;
    -moz-border-radius:10px;
    height: 25em;
} 
	#logo_venta{
		margin: 2em;
	}
	#fotos{
		margin: 2em;
		
	}
	#compromiso{
		background-color: #679B12;
	}
/*Estilos*/	
</style>
</head>
<header>
	<div class="col-md-12" id="col_12" >
	<div class="col-md-8" id="logo_venta">
		<img src="https://dl.dropboxusercontent.com/u/22876636/ML/logo.png" alt="Logo_Ventas" class="img-responsive" >
	</div></div>
</header>
<body>
<div class="container-fluid">

<!Contenido de la publicación!>	
	<div class="col-md-10 col-md-offset-1 col-xs-12" id='publicacion'>
<div class="col-md-10 col-md-offset-1 col-xs-12	">
	<h3>Samsung Galaxy Ace S5830</h3>
</div> 
		<div class="col-md-4 col-xs-5" id="fotos">
			<img src="http://www.redcooneros.com/wp-content/uploads/2012/08/Samsung-Galaxy-S3-white-blue.jpeg" alt="" class="img-responsive">
		</div>
		<div class="col-md-5 col-md-offset-2 col-xs-5">
			<h4><strong>ESPECIFICACIONES TÉCNICAS</strong></h4></br>
			<iframe src="http://pastebin.com/embed_iframe.php?i=E7tZzggi" style="border:none;width:100%"></iframe>
		</div>
		
	</div>
<!Fin de la publicación!> 


</div>


<div class="container-fluid">
	<div class="col-md-6 col-md-offset-5 col-xs-12" id="compromiso">
			<h3><strong>Compromiso de Compra</strong></h3>
			<p>Recuerde que su oferta es un <b>compromiso de compra</b>, por ello le recordamos lo siguiente:</p>
			<ul class="list-group">
				<li class="list-group-item">Tiene un periodo para concretar la compra de <strong class="text-danger">3 días</strong><span class="badge"><span class="glyphicon glyphicon-ok"></span></span></li>
				<li class="list-group-item">Nuestro medio de comunicación por excelencia es vía Correo Electrónico<span class="badge"><span class="glyphicon glyphicon-ok"></span></span></li>
				<li class="list-group-item">Somos tienda virtual, las entregas personales son a conveniencia de ambar partes<span class="badge"><span class="glyphicon glyphicon-ok"></span></span></li>
				<li class="list-group-item">Tenga en cuenta realizar todas las preguntas antes de <strong class="text-danger">ofertar</strong><span class="badge"><span class="glyphicon glyphicon-ok"></span></span></li>
				
			</ul>
		</div>
	<div class="col-md-8 col-xs-6" id='bancos'>

	<div class="col-md-4" id="logos_empresas">
		<img src="https://dl.dropboxusercontent.com/u/22876636/ML/bancos/banco_de_venezuela.png" alt="Banco de Venezuela" class="img-responsive" >
	</div>

	<div class="col-md-4" id='logos_empresas'>
				<img src="https://dl.dropboxusercontent.com/u/22876636/ML/bancos/banco_bicentenario.png" alt="Banco Bicentenario" class="img-responsive" >

	</div>

	</div>



	<div class="col-md-4 col-xs-6" id='envios'>	
	<div class="col-md-4" id='logos_empresas'>
		<img src="https://dl.dropboxusercontent.com/u/22876636/ML/envios/mrw.png" alt="Banco Bicentenario" class="img-responsive" >
	</div>	
	<div class="col-md-3" id='logos_empresas'>
		<img src="https://dl.dropboxusercontent.com/u/22876636/ML/envios/zoom.png" alt="Banco Bicentenario" class="img-responsive" >
	</div>
	</div>
</div>

  
</body>
<footer>
	<div class="col-md-8">
		<code>Plantillas Fenix Wolf</code>
	</div>
	
</footer>
</html>