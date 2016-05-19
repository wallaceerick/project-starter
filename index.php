<?php
	$diretorio = getcwd();
	$ponteiro  = opendir($diretorio);
	while ($nome_itens = readdir($ponteiro)){
    	$itens[] = $nome_itens;
}
sort($itens);

foreach ($itens as $listar){ 
	if ($listar!="." && $listar!=".."){
		if (is_dir($listar)){
			$pastas[]=$listar; 
		} else{ 
			$arquivos[]=$listar;
		}
   }
} 
?>
<!DOCTYPE HTML>
<html lang="pt-BR">

	<head>
<<<<<<< HEAD
		
		<meta charset="UTF-8">

		<title>Project Name</title>

		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="robots" content="index, follow" />
		<meta name="url" content="" />
		<meta name="author" content="Wallace Erick" />

		<meta property="og:image" content="assets/images/share.png" />
		<meta property="og:site_name" content="" />
		<meta property="og:url" content="" />
		<meta property="og:title" content="" />
		<meta property="og:description" content="" />

		<meta itemprop="image" content="assets/images/share.png" />
		<meta itemprop="name" content="" />
		<meta itemprop="url" content="" />

		<link rel="apple-touch-icon" sizes="144x144" href="assets/images/icons/navegatium-144.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="assets/images/icons/navegatium-114.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="assets/images/icons/navegatium-72.png" />
		<link rel="apple-touch-icon" sizes="577x57" href="assets/images/icons/navegatium-57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/icons/navegatium-144.png" />
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/icons/favicon.ico" />

		<link rel="stylesheet" type="text/css" href="assets/css/application.css" media="all" />
		
		<link rel="canonical" href="" />

		<!--[if lt IE 9]>
			<script src="assets/js/html5.js"></script>
		<![endif]-->

	</head>

	<body>
		
		<?php include('includes/header.php'); ?>

		<div id="page"></div>

		<section>
			<div class="featured-slider js-featured-slider">
				<div class="item">1</div>
				<div class="item">2</div>
				<div class="item">3</div>
				<div class="item">4</div>
				<div class="item">5</div>
			</div>
		</section>

		<?php include('includes/footer.php'); ?>
=======
		<meta charset="UTF-8">

		<meta name="viewport" content="width=device-width" />

		<link rel="stylesheet" type="text/css" href="content/css/application.css" media="all" />

		<link rel="shortcut icon" type="image/x-icon" href="content/images/favicon.ico" />

		<script src="content/js/_jquery.js"></script>
		<script src="content/js/_preloader.js"></script>
		<script src="content/js/_maskedinput.js"></script>
		<script src="content/js/_validate.js"></script>
		<script src="content/js/_feature-carousel.js"></script>
		<script src="content/js/_modal.js"></script>
		<script src="content/js/_audio.js"></script>
		<script src="content/js/_custom.js"></script>
		
		<title>Positivo English Solution</title>

		<style>
		li.ds_store,
		li.gitignore,
		li.config,
		li.gruntfile,
		li.readme,
		li.package,
		li.index,
		li.error_log,
		li.npm-debug,
		li.download {
			display: none;
		}
		</style>

	</head>

	<body> 

		<div id="pes_list-links">
			<h1>Lista de Links</h1>
			<ol>
			<?php
				if ($arquivos != "" ) { 
					//$i = 0;
					foreach($arquivos as $listar){
						//$i++;
						$hifen = '-'; 
						$extensions = array('.md', '.html', '.php', '.rb', '.json', '.js', '.zip', '.', '-');
						$replace = str_replace($extensions, ' ', $listar);
						$class = strtolower($replace);
						echo "<li class='$class'>" . $i . " <a href='$listar'>" . $replace . "</li></a>";
					}
				}
			?>
			</ol> 
		</div> <!-- /pes_list-links -->
>>>>>>> 256a2dfcdb497a54c87643fd01cf33ec5d7dd283

	</body>
	</html>