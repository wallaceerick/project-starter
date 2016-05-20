<!doctype html>
<html lang="pt-BR">

	<head>
		
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

		<link rel="apple-touch-icon" sizes="144x144" href="assets/images/icon/144.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="assets/images/icon/114.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="assets/images/icon/72.png" />
		<link rel="apple-touch-icon" sizes="577x57" href="assets/images/icon/57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/icon/144.png" />
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/icon/favicon.ico" />

		<link rel="stylesheet" type="text/css" href="assets/css/application.css" media="all" />
		
		<link rel="canonical" href="" />

		<!--[if lt IE 9]>
			<script src="assets/js/html5.js"></script>
		<![endif]-->

	</head>

	<body class="js-loader">
		
		<?php include('includes/header.php'); ?>

		<div id="page"></div>

		<section>
			<div class="owl-carousel js-carousel">
				<div class="item">
					<img src="assets/images/slider/1.jpg" alt="Slide #1" />
				</div>
				<div class="item">
					<img src="assets/images/slider/2.jpg" alt="Slide #2" />
				</div>
				<div class="item">
					<img src="assets/images/slider/3.jpg" alt="Slide #3" />
				</div>
				<div class="item">
					<img src="assets/images/slider/4.jpg" alt="Slide #4" />
				</div>
				<div class="item">
					<img src="assets/images/slider/5.jpg" alt="Slide #5" />
				</div>
				<div class="item">
					<img src="assets/images/slider/6.jpg" alt="Slide #6" />
				</div>
			</div>
		</section>

		<form class="js-validate" method="get" action="">
			<fieldset>
				<legend>Preencha o formulário.</legend>
				<label for="name">Nome</label>
				<input id="name" type="text" name="name" required>

				<label for="email">E-mail</label>
				<input id="email" type="email" name="email" required>

				<label for="date">Data</label>
				<input id="date" text="date" name="date" class="js-date">

				<label for="message">Mensagem</label>
				<textarea id="message" name="message" required></textarea>

				<input class="submit" type="submit" value="Enviar" />

			</fieldset>
		</form>

		<div id="tabs-container">
		    <ul class="tabs-menu">
		        <li class="current"><a href="#tab-1">Tab 1</a></li>
		        <li><a href="#tab-2">Tab 2</a></li>
		        <li><a href="#tab-3">Tab 3</a></li>
		        <li><a href="#tab-4">Tab 4</a></li>
		    </ul>
		    <div class="tab">
		        <div id="tab-1" class="tab-content">
		            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet purus urna. Proin dictum fringilla enim, sit amet suscipit dolor dictum in. Maecenas porttitor, est et malesuada congue, ligula elit fermentum massa, sit amet porta odio est at velit. Sed nec turpis neque. Fusce at mi felis, sed interdum tortor. Nullam pretium, est at congue mattis, nibh eros pharetra lectus, nec posuere libero dui consectetur arcu. Quisque convallis facilisis fermentum. Nam tincidunt, diam nec dictum mattis, nunc dolor ultrices ipsum, in mattis justo turpis nec ligula. Curabitur a ante mauris. Integer placerat imperdiet diam, facilisis pretium elit mollis pretium. Sed lobortis, eros non egestas suscipit, dui dui euismod enim, ac ultricies arcu risus at tellus. Donec imperdiet congue ligula, quis vulputate mauris ultrices non. Aliquam rhoncus, arcu a bibendum congue, augue risus tincidunt massa, vel vehicula diam dolor eget felis.</p>
		        </div>
		        <div id="tab-2" class="tab-content">
		            <p>Donec semper dictum sem, quis pretium sem malesuada non. Proin venenatis orci vel nisl porta sollicitudin. Pellentesque sit amet massa et orci malesuada facilisis vel vel lectus. Etiam tristique volutpat auctor. Morbi nec massa eget sem ultricies fermentum id ut ligula. Praesent aliquet adipiscing dictum. Suspendisse dignissim dui tortor. Integer faucibus interdum justo, mattis commodo elit tempor id. Quisque ut orci orci, sit amet mattis nulla. Suspendisse quam diam, feugiat at ullamcorper eget, sagittis sed eros. Proin tortor tellus, pulvinar at imperdiet in, egestas sed nisl. Aenean tempor neque ut felis dignissim ac congue felis viverra. </p>
		        
		        </div>
		        <div id="tab-3" class="tab-content">
		            <p>Duis egestas fermentum ipsum et commodo. Proin bibendum consectetur elit, hendrerit porta mi dictum eu. Vestibulum adipiscing euismod laoreet. Vivamus lobortis tortor a odio consectetur pulvinar. Proin blandit ornare eros dictum fermentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur laoreet, ante aliquet molestie laoreet, lectus odio fringilla purus, id porttitor erat velit vitae mi. Nullam posuere nunc ut justo sollicitudin interdum. Donec suscipit eros nec leo condimentum fermentum. Nunc quis libero massa. Integer tempus laoreet lectus id interdum. Integer facilisis egestas dui at convallis. Praesent elementum nisl et erat iaculis a blandit ligula mollis. Vestibulum vitae risus dui, nec sagittis arcu. Nullam tortor enim, placerat quis eleifend in, viverra ac lacus. Ut aliquam sapien ut metus hendrerit auctor dapibus justo porta. </p>
		        </div>
		        <div id="tab-4" class="tab-content">
		            <p>Proin sollicitudin tincidunt quam, in egestas dui tincidunt non. Maecenas tempus condimentum mi, sed convallis tortor iaculis eu. Cras dui dui, tempor quis tempor vitae, ullamcorper in justo. Integer et lorem diam. Quisque consequat lectus eget urna molestie pharetra. Cras risus lectus, lobortis sit amet imperdiet sit amet, eleifend a erat. Suspendisse vel luctus lectus. Sed ac arcu nisi, sit amet ornare tellus. Pellentesque nec augue a nibh pharetra scelerisque quis sit amet felis. Nullam at enim at lacus pretium iaculis sit amet vel nunc. Praesent sapien felis, tincidunt vitae blandit ut, mattis at diam. Suspendisse ac sapien eget eros venenatis tempor quis id odio. Donec lacus leo, tincidunt eget molestie at, pharetra cursus odio. </p>
		        </div>
		    </div>
		</div>

		<?php include('includes/footer.php'); ?>

	</body>

</html>