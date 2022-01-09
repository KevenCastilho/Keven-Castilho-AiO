<!DOCTYPE html>

<html lang="pt-br">

<head>

<title>Keven Castilho - All in One</title>

<link rel="icon" type="image/png" href="http://kmc.rf.gd/aio/pc.png" />
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<!--[if IE]><link rel="SHORTCUT ICON" href="pc.png"/><![endif]--><!-- Internet Explorer-->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<meta name="title" content="Keven Castilho - All in One">
<meta name="keywords" content="keven,castilho,aio,all,in,one,all in one,wordpress,wp,projetos,trabalhos,projeto,trabalho,c,c#,php,js,css,portfolio,loja">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="Portuguese">
<meta name="author" content="Keven de Miranda Castilho">

<!-- COMMON TAGS -->
<!-- Search Engine -->
<meta name="description" content="Keven Castilho All in One é um site wordpress contendo todo conteudo já criado pelo mesmo.">
<meta name="image" content="http://kmc.rf.gd/aio/wp-content/themes/w3layout-theme-1/screenshot.png">
<!-- Schema.org for Google -->
<meta itemprop="name" content="Keven Castilho - All in One">
<meta itemprop="description" content="Keven Castilho All in One é um site wordpress contendo todo conteudo já criado pelo mesmo.">
<meta itemprop="image" content="http://kmc.rf.gd/aio/wp-content/themes/w3layout-theme-1/screenshot.png">
<!-- Open Graph general (Facebook, Pinterest & Google+) -->
<meta name="og:title" content="Keven Castilho - All in One">
<meta name="og:description" content="Keven Castilho All in One é um site wordpress contendo todo conteudo já criado pelo mesmo.">
<meta name="og:image" content="http://kmc.rf.gd/aio/wp-content/themes/w3layout-theme-1/screenshot.png">
<meta name="og:url" content="http://kmc.rf.gd/aio/">
<meta name="og:site_name" content="Keven Castilho - All in One">
<meta name="og:locale" content="PT_BR">
<meta name="og:type" content="website">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/search.css" rel="stylesheet" type="text/css" media="all" />

<script src="js/5d92db37ba.js" crossorigin="anonymous"></script>

<!-- start nav -->

<link href="css/nav.css" rel="stylesheet" type="text/css" media="all" />

<script src="js/jquery.min.js"></script>

	<script>

		$(function() {

			var pull 		= $('#pull');

				menu 		= $('nav ul');

				menuHeight	= menu.height();



			$(pull).on('click', function(e) {

				e.preventDefault();

				menu.slideToggle();

			});



			$(window).resize(function(){

        		var w = $(window).width();

        		if(w > 320 && menu.is(':hidden')) {

        			menu.removeAttr('style');

        		}

    		});

		});

	</script>

<!-- end nav -->

<script src="js/login.js"></script>

<script src="js/modernizr.custom.js"></script>

<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>

<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>

<script type="text/javascript">

    $(window).load(function() {

        $('#slider').nivoSlider();

    });

    </script>

 <!----Calender -------->

  <link rel="stylesheet" href="css/clndr.css" type="text/css" />

  <script src="js/underscore-min.js"></script>

  <script src= "js/moment-2.2.1.js"></script>

  <script src="js/clndr.js"></script>

  <script src="js/site.js"></script>

  <!----End Calender -------->

 <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>

</head>
<body>
<div class="wrap">
<h1 class="logo">Keven Castilho</h1>
<p class="logodesc">All in One</p>
<div class="wrapper">
<div class="header">
		<div class="menu1">
		<!-- start navigation-->
		<nav class="clearfix">
			<ul class="clearfix">
				<li><a href="/aio">Inicio</a></li>
				<li><a href="?page_id=60">Loja</a></li>
				<li><a href="?page_id=187">Blog</a></li>
				<li><a href="?cat=3">Projetos</a></li>
				<li><a href="?cat=2">Trabalhos</a></li>
				<li><a href="/files">Arquivos</a></li>	
				<li><a href="?page_id=56">Sobre</a></li>	
				<li><a href="?page_id=63">Contato</a></li>	
			</ul>
			<a href="#" id="pull"><img src="images/nav-icon.png"></a>
		</nav>
		<!-- end   navigation-->
		 </div>
		 <div class="header_right">
		 <div class="menu">
		 	<!-- start top-nav-->
			<div class="cssmenu">
					<ul>
					   <li><a href="/aio"><span>Inicio</span></a></li>
					   <li class="has-sub"><a href="?page_id=60"><span>Loja</span></a>
					   	<!-- IF you want sub-links remove this comment
					      <ul>
					         <li class="has-sub"><a href="#"><span>Lorem Ipsum</span></a></li>
					         <li class="has-sub"><a href="#"><span>Lorem Ipsum</span></a></li>
					         <li class="has-sub"><a href="#"><span>Lorem Ipsum</span></a></li>
					         <li class="has-sub"><a href="#"><span>Lorem Ipsum</span></a></li>
					      </ul>
					      --->
					   </li>
					   <li class="active"><a href="?page_id=187"><span>Blog</span></a></li>
					   <li><a href="?cat=3"><span>Projetos</span></a></li>
					   <li><a href="?cat=2"><span>Trabalhos</span></a></li>
					   <li><a href="/files"><span>Arquivos</span></a></li>
					   <li><a href="?page_id=56"><span>Sobre</span></a></li>
					   <li class="last"><a href="?page_id=63"><span>Contato</span></a></li>
					   <div class="clear"></div>
					</ul>
				</div>
			<div class="clear"></div>
		</div>
    <div class="header_top_right">
		<!-- start search-->
		<div class="web_search">
		 <div class="search" style="display: none;">
	        <form role="search" <?php echo $twentytwenty_aria_label; ?> method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	           <input type="text" id="<?php echo esc_attr( $twentytwenty_unique_id ); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentytwenty' ); ?>" value="<?php echo get_search_query(); ?>" name="s" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" class="text">
	            <input type="submit" value="">
	        </form>
	        <div class="close"><img src="images/cross.png"></div>
	    </div>
	    <div class="srch"><button></button></div>
		<script type="text/javascript">
	         $('.search').hide();
	        $('button').click(function (){
	            $('.search').show();
	            $('.text').focus();
	        }
	        );
	        $('.close').click(function(){
	            $('.search').hide();
	        });
	    </script>
	    </div>
		<!-- start social icons -->
		<div class="social-icons">
	   		  	<ul>
			      <li><a href="https://facebook.com/keven.castilho" target="_blank"><i class="fab fa-facebook-f"></i> </a></li>
			      <li><a href="https://api.whatsapp.com/send?phone=5511977282455" target="_blank"><i class="fab fa-whatsapp"></i> </a></li>
			      <li><a href="https://api.whatsapp.com/send?phone=5511977282455" target="_blank"><i class="fab fa-discord"></i> </a></li>
			      <div class="clear"></div>
		     </ul>
	   	 </div>
	   	 <!-- start login_box -->
			<div class="login_box">
	    		   <div id="loginContainer">
	                  <a id="loginButton" class=""><span></span></a>               
	                <div id="loginBox" style="display: none;">                
	                    <form id="loginForm">
	                        <fieldset id="body">
	                            <fieldset>
	                                <label for="email">Email Address</label>
	                                <input type="text" name="email" id="email">
	                            </fieldset>
	                            <fieldset>
	                                <label for="password">Password</label>
	                                <input type="password" name="password" id="password">
	                            </fieldset>
	                            <input type="submit" id="login" value="Sign in">
	                            <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
	                        </fieldset>
	                        <span><a href="#">Forgot your password?</a></span>
	                    </form>
	                </div>
	              </div>
	           </div>
	         <div class="clear"></div>
	         </div>
	    </div>	
	   <div class="clear"></div>
	</div>
	<div class="main">
<div class="sidebar">

				<div class="menu_box_list">

				      		<ul>

						  		<li><a href="/aio"> <i class="home"> </i><span>Inicio</span></a></li>

						  		<li><a href="?page_id=60"> <i class="store"> </i> <span>Loja</span></a></li>

						  		<li class="active"><a href="?page_id=187"> <i class="fad fa-newspaper" style="background:none;"></i> <span>Blog</span></a></li>

			  					<li><a href="?cat=3"> <i class="far fa-file-code" style="background:none;"></i><span>Projetos</span></a></li>

			  					<li><a href="?cat=2"> <i class="far fa-phone-laptop" style="background:none;"></i><span>Trabalhos</span></a></li>
								
								<li><a href="/files" target="_blank"> <i class="fad fa-folder-open"  style="background:none;"></i><span>Arquivos</span></a></li>

			  					<li><a href="?page_id=56"> <i class="about"> </i> <span>Sobre</span></a></li>

			  					<li><a href="?page_id=63"> <i class="contact"></i> <span>Contato</span></a></li>

				    		</ul>

				    		<div class="clear"></div>

				      </div>

			<div class="sidebar_grid">

				<div class="grid_s">

				<div class="grid_img">

					<i class="phone"> </i>

				</div>

				<div class="grid_text">

					<p><a href="tel:+5513981232706" target="_blank">(13) 98123-2706</a></p>

					<p><a href="tel:+5511977282455" target="_blank">(11) 97728-2455</a></p>

				</div>

				<div class="clear"></div>

				</div>	

				<div class="grid_s1">

				<div class="grid_img">

					<i class="location"> </i>

				</div>

				<div class="grid_text">
<a href="https://goo.gl/maps/joKAH8MxRodaE6yr5" target="_blank">
					<p>Rua Eugenia Biazzi</p>

					<p>Itaquera, São Paulo</p>

					<p>CEP 08220-420</p>
		</a>
				</div>

				<div class="clear"></div>

				</div>		

				<div class="grid_s1">

				<div class="grid_img">

					<i class="mail"> </i>

				</div>

				<div class="grid_text">

					<p><a href="mailto:kevencastilho10@gmail.com" target="_blank">kevencastilho10@gmail.com</a> </p>

					<p><a href="mailto:angelusinferni@live.com" target="_blank">angelusinferni@live.com</a> </p>

				</div>

				<div class="clear"></div>

				</div>					

			</div>		

		</div>
</div>