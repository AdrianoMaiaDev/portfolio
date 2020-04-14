<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Adriano Maia"/>
	<meta name="copyright" content="&copy; 2019 Adriano Maia"/>
	<meta name="keywords" content="About , Work , contact, criação de sites"/>
	<meta name="DC.Suject" content="Criação de sites, Adriano Maia, facil e simples"/>
	<meta name="robots" content="index"/>
	<meta name="DC.Creator" content="Adriano Maia"/>
	<meta name="DC.Creator.adress" content="adrianocosta058@gmail.com"/>
	<meta name="Dc.Publisher" content="Adriano Maia"/>
	<meta name="Dc.Custodian" content="Adriano Maia"/>
	<meta name="DC.Date.Created" content="2019-10-12"/>
	<meta name="og:description" content="Adriano Maia, criação de sites"/>
	<meta name="description" content="Web developer, criação de sites, Adrinao Maia,Web Design Responsivo, facil e simples, entre em contato"/>
	<link rel="stylesheet" href="_div/estilo.css">
	<link rel="shortcut icon" href="_div/logoo.PNG"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.6.1/css/all.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150017627-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-150017627-1');
</script>

	<title>Contact</title>
</head>
<body>

		<!-- whats app -->
<div id="div_fixa"><a href="whatsapp.php" target="_blank"> <img src="_div/api-whatsapp-site.jpg" width="54"></a></div>
  
  <style type="text/css">
   #div_fixa {
  
 	position:fixed; 
 	margin:15px;
 	margin-top: 300px;
 	z-index:5000;
 	bottom: 0px;
 }
</style>
<!-- whats app -->

	<div class="header">
		
		<input type="checkbox" id="chk">
		<label for="chk" class="show-menu-btn">
			<i class="fas fa-bars"></i>
		</label>
	<ul class="menu">
		<a href="index.php">About</a>
		<a href="work.php">Work</a>
		<a href="contact.php">Contact</a>
		<label for="chk" class="hide-menu-btn">
			<i class="fas fa-times"></i>
		</label>
	</ul>
	</div>
	<div class="container">
		<div class="content">
			<p>Hire our services. Contact us and make your budget.</p>
			<form id="roda">
			<label for="">NAME*</label>
			<input id="nome" type="Nome" placeholder="
			Type your name"/>
			<label for="email">E-MAIL*</label>
			<input id="email" type="email" placeholder="
			Type your e-mail"/>
			
				<button class="btn" type="submit" id="enviar">Enviar</button>
				<input type="hidden" id="metodo" value="formulario-ajax"/>
		</form>
		<!-- JAVASCRIPT -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="dados.js"></script>
		<!-- JAVASCRIPT -->
		</div>
	</div>
</body>
</html>