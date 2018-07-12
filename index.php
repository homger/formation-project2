<!DOCTYPE html>
<html lang="fr">
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<title>WEBAGENCY - L'AGENCE DE TOUS VOS PROJETS</title>
	
	<link rel="stylesheet" href="style.css?rev=<?php echo filemtime('style.css'); ?>"/>
	<link rel="stylesheet" href="desktop.css?rev=<?php echo filemtime('desktop.css'); ?>"/>
</head>
<body>
	<header id="accueil">
		<input id="menu-switch" type="checkbox"/>
		<div id="menu-button">
			<div>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<nav>
			<div id="logo" >
				<img src="images/logo.png" alt="WebAgency Logo"/>
			</div>
			<ul id="menu">
				<li><a href="#banner">Accueil</a></li>
				<li><a href="#services">Services</a></li>
				<li><a href="#portfolio">Portfolio</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</nav>
		<div id="banner">
			<div>
				<div id="slider">
					<img src="images/slider/bg1.jpg" alt="banner image"/>
					<img src="images/slider/bg2.jpg" alt="banner image"/>
					<img src="images/slider/bg1.jpg" alt="banner image"/>
				</div>
				<i id="left-arrow" class="fas fa-chevron-left"></i>
				<i id="right-arrow" class="fas fa-chevron-right"></i>
				<div id="txt">
					<h1><span class="blue">WEBAGENCY</span> : L'AGENCE DE TOUS VOS PROJETS !</h1>
					<p>Vous avez un projet web ? La WebAgency vous aide à le réaliser !
					<span class="blue"><a id="info" href="#">Plus d'infos</a></span>
					</p>
				</div>
			</div>
			<div id="charge-bar">
				<div id="charge-level"></div>
			</div>
		</div>
	</header>
	<section id="services">
		<div class="block-page">
			<header>
				<h2>NOS SERVICES</h2>
				<div class="separator">
					<i class="fas fa-circle"></i>
					<hr class="c-bar"/>
				</div>
				<p>La Webagency offre des services web qui couvriront la totalité de vos besoins que ce soit au niveau de l'expérience utilisateur, de l'aspect visuel de votre site web ou encore du référencement auprès des moteurs de recherche.</p>
			</header>
			<div id="services-list">
				<aside><img src="images/main-feature.png" alt=""/></aside>
				<ul>
					<li>
						<i class="fas fa-chart-line"><i class="fas fa-circle"></i></i>
						<article>
							<h3>UX design</h3>
							<p>Nous accordons une importance toute particulière à l'expérience utilisateur.</p>
						</article>
					</li>
					<li>
						<i class="fas fa-cubes"><i class="fas fa-circle"></i></i>
						<article>
							<h3>UI design</h3>
							<p>Nos experts designers mettent au point une interface utilisateur intuitive, idéale pour la vente de vos produits et une navigation sans discomfort.</p>
						</article>
					</li>
					<li>
						<i class="fas fa-chart-pie"><i class="fas fa-circle"></i></i>
						<article>
							<h3>SEO</h3>
							<p>Après être passé par notre service de référencement web, votre site web sera détecté parfaitement par les moteurs de recherche pour une exposition optimale.</p>
						</article>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<section id="portfolio">
		<div class="block-page">
			<header>
				<h2>NOS PROJETS</h2>
				<div class="separator">
					<i class="fas fa-circle"></i>
					<hr class="c-bar"/>
				</div>
				<p>La Webagency est une entreprise active et nous avons accompli de nombreux projets avec succès.</p>
			</header>
			<div>
				<nav id="portfolio-menu">
					<ul>
						<li><a href="#portfolio">All Works</a></li><li><a href="#portfolio">Creative</a></li><li><a href="#portfolio">Corporate</a></li><li><a href="#portfolio">Portfolio</a></li>
					</ul>
				</nav>
				<div id="gallery">
					<div>
						<img src="images/portfolio/01.jpg" alt=""/>
						<div class="on-hover">
							<h3>Opticad</h3>
							<p>Vent des lunettes factices</p>
							<a href="#gallery"><i class="far fa-eye"></i></a>
						</div>
					</div>
					<div>
						<img src="images/portfolio/02.jpg" alt=""/>
						<div class="on-hover">
							<h3>Pink Rabbit</h3>
							<p>Créé de l'art pour animaux</p>
							<a href="#gallery"><i class="far fa-eye"></i></a>
						</div>
					</div>
					<div>
						<img src="images/portfolio/03.jpg" alt=""/>
						<div class="on-hover">
							<h3>Pompadour</h3>
							<p>Expert de la coiffure gommée</p>
							<a href="#gallery"><i class="far fa-eye"></i></a>
						</div>
					</div>
					<div>
						<img src="images/portfolio/04.jpg" alt=""/>
						<div class="on-hover">
							<h3>Paper Work</h3>
							<p>Vente de papier en gros</p>
							<a href="#gallery"><i class="far fa-eye"></i></a>
						</div>
					</div>
					<div>
						<img src="images/portfolio/05.jpg" alt=""/>
						<div class="on-hover">
							<h3>The Wave Center</h3>
							<p>Centre commercial en bord de mer</p>
							<a href="#gallery"><i class="far fa-eye"></i></a>
						</div>
					</div>
					<div>
						<img src="images/portfolio/06.jpg" alt=""/>
						<div class="on-hover">
							<h3>Skypopper</h3>
							<p>Agence d'architecture international</p>
							<a href="#gallery"><i class="far fa-eye"></i></a>
						</div>
					</div>
					<div>
						<img src="images/portfolio/07.jpg" alt=""/>
						<div class="on-hover">
							<h3>Rocket Pen</h3>
							<p>Vente de stylo à réaction.</p>
							<a href="#gallery"><i class="far fa-eye"></i></a>
						</div>
					</div>
					<div>
						<img src="images/portfolio/08.jpg" alt=""/>
						<div class="on-hover">
							<h3>Student Haven</h3>
							<p>Centre d'études de luxe pour étudiant</p>
							<a href="#gallery"><i class="far fa-eye"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="contact">
		<div id="map">
		<iframe id="map-google" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.221424608041!2d2.347636915769127!3d48.87305530762783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e145ccb3091%3A0x9495beee8c96ec27!2s25+Rue+d&#39;Hauteville%2C+75010+Paris!5e0!3m2!1sfr!2sfr!4v1531128409759"frameborder="0" allowfullscreen></iframe>
			<div id="filter"></div> 
		</div>
		<form id="contact-form" action="#contact-form" method="POST">
			<fieldset id="form-text">
				<h3>Contact Info</h3>
				<h4>WebAgency SAS</h4>
				<p>25 Rue d'Hauteville 75010 Paris <br>
				   <span id="tel">Tel:</span> 01 02 03 04 05
				</p>
			</fieldset>
			<fieldset>
				<input type="text" name="name" placeholder="Name"/>
				<input type="email" name="email" placeholder="Email"/>
				<input type="text" name="object" placeholder="Subject" />

				<textarea name="Message" placeholder="Message" rows="10"></textarea>
				<input type="submit" name="submit" value="Send Message">
			</fieldset>
		</form>
	</section>
	<a id="up-arrow" href="#banner"><i class="fas fa-arrow-up"></i></a>
</body>
</html>