<?php
session_start();
include('verifica_login.php');
include("..\..\conexao.php");

?>

<html lang="pt-br" style="width: 1280;"> 

<!-- ------------------------------------------------------------ARRUMAR WIDTH DO HTML --------------------------------->
	
	<head>
		<meta charset="utf-8">
		<title>teste do teste tela 4</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


		<style>
			/* 2a. Etapa */
			@charset "UTF-8";
			/* Folha de estilos:
			Autor: Maurício Samy Silva
			Versões
			Data: 26/04/2014 - Redesign do site
			*/
			/* =CSS Reset */
			/* https://meyerweb.com/eric/tools/css/reset/ 
			v2.0 | 20110126
			License: none (public domain)
			*/
			html, body, div, span, applet, object, iframe,
			p, blockquote, pre,
			a, abbr, acronym, address, 
			dl, dt, dd, ol, ul, li,
			fieldset, form, label, legend,
			table, caption, tbody, tfoot, thead, tr, th, td,
			article, aside, canvas, details, embed, 
			figure, figcaption, footer, header, hgroup, 
			menu, nav, output, ruby, section, summary,
			time, mark, audio, video {
				margin: 0;
				padding: 0;
				border: 0;
				font-size: 100%;
				font: inherit;
				vertical-align: baseline;
			}
			/* HTML5 display-role reset for older browsers */
			article, aside, details, figcaption, figure, 
			footer, header, hgroup, menu, nav, section{
				display: block;
			}
			body {
				line-height: 1;
			}
			ol, ul {
				list-style: none;
			}
			blockquote, q {
				quotes: none;
			}
			blockquote:before, blockquote:after,
			q:before, q:after {
				content: '';
				content: none;
			}
			table {
				border-collapse: collapse;
				border-spacing: 0;
			}
			/* Fim CSS Reset */
			/* =GERAL */
			*, html, body {
				margin:0;
				padding:0;
				}
			*, *:before, *:after {
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
						box-sizing: border-box;
			}
			.cf:before,
			.cf:after {content: " ";display: table;}
			.cf:after {clear: both;}
			.cf {*zoom: 1;}
			body {
				margin-left:55px;
				}
			/* Fim 2a. Etapa */
			/* 3a. Etapa */
			#lateral {
				padding:0 50px 0 0;
				-moz-transition: all 0.5s ease;
					-webkit-transition: all 0.5s ease;
						-o-transition: all 0.5s ease;
							transition: all 0.5s ease;
				font-size:1.2em;
				background:rgb(44,62,80);
				background-image: -moz-linear-gradient( 135deg, rgb(3,8,12), rgb(16,57,79) );
						background-image: -webkit-linear-gradient( 135deg, rgb(3,8,12), rgb(16,57,79) );
								background-image: -o-linear-gradient( 135deg, rgb(3,8,12), rgb(16,57,79) );
										background-image: -ms-linear-gradient( 135deg, rgb(3,8,12), rgb(16,57,79) );
											background-image: linear-gradient( 135deg, rgb(3,8,12), rgb(16,57,79) );
				height:100%;
				overflow:hidden;
				width:370px; 
				position:fixed;
				top:0;
				left:-320px;
				}
			#lateral:before {
				z-index:1000;
				content: url(56763.png);
				font-size:4em;
				color:white;
				position:fixed;
				left:4px;
				top:45px;
				}
			#lateral:hover:before, #lateral:focus:before {
			left:-500px
				}
			#lateral:hover, #lateral:focus,  #lateral:active  {
				overflow-y:scroll;
				-moz-transform: translate(320px, 0);
					-webkit-transform: translate(320px, 0);
						-o-transform: translate(320px, 0);
							transform: translate(320px, 0);
				padding-right:0;
				}	
			/* Fim 3a. Etapa */
			/* 4a. Etapa */
			#lateral .box {
				list-style-type:none;
				margin-bottom:1em;;
				padding-bottom:1em;
				}
			#lateral h3 {
				display:inline-block;
				font-weight:bold;
				font-size:1.6em;
				font-style:normal;
				padding-bottom:0.2em;
				margin: 2em 0 2em 0.81em;
				color:rgb(255,255,255);
				border-bottom: 4px solid rgb(155,155,155);
				}
			#menu {
				font-style:italic;
				position:relative;
				font-size:1.4em;
				margin:1em 0 1em -1em;
				padding:0;
				font:  62.5%/1.2 Arial, sans-serif;
				}
			#menu li  {margin:0;padding:7px;}
			#menu li a,  #menu li a:link {
				font-size:1.3em;
				color:rgb(255,255,255);
				text-decoration: none;
				padding: 0.8em 0 0.8em 1em;
				display: auto;
				-moz-transition: all 1.2s ease;
						-webkit-transition: all 1.2s ease;
							-o-transition: all 1.2s ease;
								transition: all 1.2s ease;
				}
			#menu li a:hover {
				color:rgb(255,255,255);
				background-color:rgba(255,255,255,0.2);
				-moz-transition: all 0.5s ease;
						-webkit-transition: all 0.5s ease;
							-o-transition: all 0.5s ease;
								transition: all 0.5s ease;
				}
			/* Fim 4a. Etapa */
			/* 5a. Etapa */

			#footer{
				font-size: 1.0em !important;
			}
			@media (max-width: 20px) {
			body {margin-left:0;background-size:20% 28em!important;}
			#lateral {
				padding:0 50px 0 0;
				-moz-transition: all 0.5s ease;
					-webkit-transition: all 0.5s ease;
						-o-transition: all 0.5s ease;
							transition: all 0.5s ease;
				font-size:1.2em;
				height:50%;
				overflow:auto;
				width:50%; 
				position:static;
				top:0;
				left:0;
				}
			#lateral:before {
				z-index:1000;
				width:0;
				text-align:center;
				content: "";
				font-size:0;
				color:white;
				position:static;
				top:0;
				left:0;
				display:inline-block; 
				}
			#lateral:hover, #lateral:focus {
				overflow:scroll;
				-moz-transform: none;
					-webkit-transform: none;
						-o-transform:none;
							transform:none;
				}
			#menu li a {border-bottom:1px solid #ccc;}
			#menu li:first-child a {border-top:1px solid #ccc;}	
			}
			/* Fim 5a. Etapa */
		</style>
	</head>
	
	<body>
	
		<div id="lateral" onclick="return true" aria-haspopup="true">
			<div id="menu" style="left: 12px;">
		
				<h3 class="link-titulo">Perfil</h3>
					<div class="img">
						<a href="" class="atualizarfoto">
							<img src="imagem.png" alt="atualizar imagem" class="foto imagem"style="width: 70px; margin-left: 16px;">
						</a>  			
					</div>

					<ul class="box">					
						<li><a href="#"><?php echo $_SESSION['nome']?></a></li>
						<li><a href="#"><?php echo $_SESSION['usuario']?></a></li>
						<li><a href="#"><?php echo $_SESSION['email']?></a></li>
					</ul>
					<div class="profile-userbuttons" >
						<a href="#"><button type="button" class="btn btn-success" style="border-left-width: 00px; margin-left: 17px;">cursos</button><a>
						<a href="#"><button type="button" class="btn btn-primary">Quem faz parte dessa familia?</button></a>
					</div>
					<ul class="footer" style="display: inline-flex;">
						<li>
							<a href="http://localhost/ProjetoScript/Views/Tela%203/perguntas.php" target="_blank" style="padding-left: 10px;">
								<i class="glyphicon glyphicon-ok"></i>
									Perguntas </a>
						</li>
						<li>
							<a href="https://api.whatsapp.com/send?phone=x" style="padding-left: 0px;">
								<i class="glyphicon glyphicon-flag"></i>
									Ajuda </a>
						</li>
					</ul>
					<div class="leave">
						<a href="logout.php"><button type="button" class="btn btn-danger" style="border-left-width: 00px; margin-left: 17px;">leave</button><a>
					</div>

			</div>
		</div>
		
		<header>
			<div class="navbar"style="padding-right: 5px;">
				<div class="navbar-item">
					<a class="navbar-brand" href="http://localhost/ProjetoScr1pt\Views\Quem somo nós\quemsomosnos.php" style="font-size:20px">New World Sistems</a>
				</div>
				<div class="Welcome">
					<p style="font-weight: 400;line-height: 53px;letter-spacing: 1px;text-transform: uppercase;font-size: 27px;"><?php echo $_SESSION['nome'];?>  Seja Bem-Vindo a nossa fabrica de ideias</p>
				</div>
			</div>
			<hr style="margin-bottom: 1px; margin-top: 0px; border-top-width: 2px;">

		</header>

		<br><br>
		
		<main>

			<div class="frame-has-menu">
				
				<h1 style="margin-left: 430px;">Novidades/informações</h1>
			
					<div class="carrossel-Informação"style="padding-bottom: 50px;">
						<div>
							<video width="448" height="336" controls="controls" autoplay="autoplay" style="margin-left:416px;">
								<source src="Gif com áudio_ Qual é a novidade.mp4" type="video/mp4">
								<object data="" width="448" height="336">
									<embed width="448" height="336" src="Gif com áudio_ Qual é a novidade.mp4">
								</object>
							</video>
						</div>
					</div>
			
			
					<!-- <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>
			
			
					<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Pr�ximo</span>
					</a>-->
			
					
					<br> <br> <br> <br>
			
					<hr/>

				
						<!--</div>
							<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Anterior</span>
							</a>
				
				
							<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Pr�ximo</span>
							</a>-->
					
						</div>
					</div>
					

		</main>
		<br><br>
		<footer>
			<div>
				<hr style="margin-bottom: 1px;margin-top: 0px;border-top-width: 2px;width: 550px;margin-left: 355px;">
				<p style="margin-left: 350px; height: 30px;">© 2020 inova Ideas Sistems | Criado por Elias Gabriel</p>
			</div>
		</footer>
		
	</body>
	</html>
