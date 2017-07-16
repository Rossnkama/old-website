<!DOCTYPE HTML>
<html>
	<head>
		<title>Hi</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<link rel="icon" href="images/me.png">
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1>Ross Nkama</h1>
				<nav>
					<ul>
						<li><a href="#intro">Intro</a></li>
						<li><a href="#one">What I Do</a></li>
						<li><a href="#two">Who I Am</a></li>
						<li><a href="#work">My Work & CV</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</nav>
			</header>

		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content">
					<header>
						<h2>Hello.</h2>
					</header>
					<p>Welcome to <strong>My portfolio</strong>. My name's <strong>Ross</strong>, I'm a student at <a href="http://www.adacollege.org.uk/" target="_blank">
						Ada. The National College of Digital Skills.</a> I'm an inquisitive person who loves to <strong>think</strong> up as well as challange
						<strong>novel</strong> solutions to today's problems.<br> <br> <strong>You want</strong> me on your team - here's why.
					</p>
					<footer>
						<a href="#one" class="button style2 down">More</a>
					</footer>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>What I Do</h2>
					</header>
					<p>I'm a great <strong>problem solver</strong> and an even better <strong>team coordinator</strong>. I find a problem I'm interested in, assemble a team of clever people and then
					tackle the problem head on. Leadership isn't bossiness, it's <span style="font-weight:bold; color:lightgreen;">helping</span> the team in any way you can - making the ride all the way to the destination less bumpy.</p>
				</div>
				<a href="#two" class="button style2 down anchored">Next</a>
			</section>

		<!-- Two -->
			<section id="two" class="main style2 left dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Who I Am</h2>
					</header>
					<p>I'm someone who treats any objective as a problem to be <strong>decomposed</strong>, <strong>analysed</strong> and <strong>solved</strong> meaning that when I make a
					<span style='color:crimson; font-weight:600';>mistake</span>, no one should  make it again because when a problem is solved or a task is complete, I've left a <strong>framework</strong>
					- a <span class="deep-words">long term solution</span> that helps people in the same situation in the future.
					</p>
				</div>
				<a href="#work" class="button style2 down anchored">Next</a>
			</section>

		<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content">
					<header id="work-content">
						<h2>My Work</h2>
						<p>
							I'm largely a self taught programmer where this work is a showcase of what I've been
							able to produce in about the 5 months of me practicing programming so far and this is
							my <a href="https://cordedzero.neocities.org/CV/index.html" target="_blank" class="CV">CV</a>.
						</p>
					</header>

					<!-- Gallery  -->
						<div class="gallery">
							<article class="from-left">
								<a href="images/Screen Shot 2017-06-18 at 18.05.37.png" class="image fit"><img src="images/Screen Shot 2017-06-18 at 18.05.37.png" title="My own browser based Code player" alt="" /></a>
							</article>
							<article class="from-right">
								<a href="images/Screen Shot 2017-06-18 at 19.25.26.png" class="image fit"><img src="images/Screen Shot 2017-06-18 at 19.25.26.png" title="A game made for Earlsmead primary school in tottenham to teach them how to use chrome's dev tools" alt="" /></a>
							</article>
							<article class="from-right">
								<a href="images/Screen Shot 2017-06-18 at 20.31.17.png" class="image fit"><img src="images/Screen Shot 2017-06-18 at 20.31.17.png" title="A HCI solution to help industry partners find students and work of interest to them." alt="" /></a>
							</article>
							<article class="from-left">
								<a href="images/unnamed copy.png" style="margin-top: 20px;" class="image fit"><img src="images/unnamed copy.png" title="I designed a board to welcome visitors into my college on it's main screen." alt="" /></a>
							</article>
							<article class="from-right">
								<a href="images/Screen Shot 2017-06-18 at 21.22.37.png" class="image fit"><img src="images/Screen Shot 2017-06-18 at 21.22.37.png" title="My computationally generated sun made with JS. Source Code: https://cordedzero.neocities.org/Delloite/index.html" alt="" /></a>
							</article>
							<article class="from-left">
								<a href="images/Screen Shot 2017-06-18 at 20.21.34.png" class="image fit"><img src="images/Screen Shot 2017-06-18 at 20.21.34.png" title="A snippet of my data communication protocol" alt="" /></a>
							</article>
						</div>

				</div>
			</section>

		<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content">
					<header>
						<h2>Say Hello.</h2>
						<p>
							Free for now to send me an email and I'll try to respond as 
							soon as possible. :)
						</p>
					</header>
					<div class="box">
						<form method="post" action="#">
							<div class="field half first"><input type="text" name="name" placeholder="Name" /></div>
							<div class="field half"><input type="email" name="email" placeholder="Email" /></div>
							<div class="field"><textarea name="message" placeholder="Message" rows="6"></textarea></div>
							<ul class="actions">
								<li><input type="submit" value="Send Message"/></li>
							</ul>
							
							<?php
								if ($_POST) {
									$emailTo = 'ross.nkama@adacollege.org.uk';
									$header = $_POST['email'];
									$body = $_POST['message'];
									$subject = 'Email from '.$_POST['name'].' from rossnkama.github.io';
									mail($emailTo, $subject, $body, $header);
								}
							?>
						
						</form>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">

				<!-- Icons -->
					<!--ul class="actions">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
					</ul-->

				<!-- Menu -->
					<ul class="menu">
						<li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
					</ul>

			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
