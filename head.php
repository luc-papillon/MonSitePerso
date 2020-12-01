<!DOCTYPE html>
<html lang="fr">
	<head>

		<meta charset="UTF-8"/>
		<title>Mon Site Web</title>
		<link rel="stylesheet" href="site.css"/>
		 <script src="https://www.google.com/recaptcha/api.js"></script>
		 <script> function onSubmit(token) {
     document.getElementById("demo-form").submit();
	}
 </script>

	</head>
	<body>
		<header>
			<!--  $menu=['accueil','experience'=>'experience','competences'=>'Compétences','Formation'=>'formation','apropos'=>'A propos','Contact'=>'contact'];
			function getMenu(array $items){
					$res='<ul>';
						foreach($items as $k=>item){
					$res.="<li class='lihead'><a href='#$key'>$item</a></li>";
					}
					$res.='</ul>';
			echo $res;
}-->
			<ul class='header'>
					<li class='lihead'><a href='index.php'>Accueil</a></li>
					<li class='lihead'><a href='#experience'>Expériences</a></li>
					<li class='lihead'><a href='#compétences'>Mes Compétences</a></li>
					<li class='lihead'><a href='#formation'>Formation</a></li>
					<li class='lihead'><a href='#apropos'>A propos</a></li>
					<li class='lihead'><h2>PAPILLON <br/> LUC</h2></li>
					<li class='lihead'><a href='#contact'>Me Contacter</a></li>
					
			</ul>
			
		</header>