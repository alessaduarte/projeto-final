<html>
<head>
    <title>Projeto</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <link rel="stylesheet" href="bootstrap/css/style.css">
</head>
<body>
	<?php
    	include("../config.inc.php");

		require_once("valida_cookies.php");

		include_once('../topo.php');
	?>
        <h2 class="page-header">Painel Admin</h2>
	    <a href="?pg=logout" class="btn btn-primary">SAIR</a></h2>
	<?php
	# área de conteúdo
	if(empty($_SERVER["QUERY_STRING"])){
	        $var = "listar.php";
	        include_once("$var");
	}else{
	        $pg = $_GET['pg'];
	        include_once("$pg.php");
	}
	?>
	</div>
</body>
</html>