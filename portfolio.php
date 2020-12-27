<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ajeet Kumar Jaiswal | Portfolio</title>
	<link rel="stylesheet" type="text/css" href="portfolio.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

	
</head>
<body>
	<nav>
		<input type="checkbox" id="check" >
		<label for="check" class="checkbtn">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</label>
		<label class="logo"><i class="fa fa-handshake-o" aria-hidden="true"></i> Welcome!</label>
		<ul>
			<li><a href="#" class="active"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
		    <li><a class="scrollTo" href="#section1">About me</a></li>
		    <li><a class="scrollTo" href="#section2">Portfolio</a></li>
		    <li><a class="scrollTo" href="#section3">Contact</a></li>
		    <li><a class="scrollTo" href="#section3">Feedback</a></li>    
		</ul>
	</nav>
	<h2>Hi,I'm Ajeet Kumar Jaiswal</h2>
	<article class="article">
	<h2>Hi,I'm Ajeet Kumar Jaiswal</h2>
	<h1>Full Stack Web Developer</h1>
	<h3>Welcome ! TO My Portfolio Website</h3>
	<h3 id="follow-on">FOLLOW ON</h3>
	<p id="arrow"><i class="fa fa-arrow-down" aria-hidden="true"></i></p>
    </article>
	<div class="wrapper">
		<article class="img-info" id="section1">
			<h2 id="test">About me</h2>
		    <div class="img"></div>
		    <article id="info" style="margin-top: 30px">
			<p>Hi I am Ajeet . I am Second Year student at IIIT Jabalpur and currently studying Electronics and communication engineering here at IIIT Jabalpur.In past two years I learnt some good skills and tried to build some real time web applications.</p>
			<p>I am also a full stack web developer and tried to build some cool stuffs like a login signup system and in continue of all this currently I am working building some more stuffs like this.</p>
			<p>I am also a Machine learning enthusiast and learning new skills day by day.</p>
		    </article>
		</article>
        <script type="text/javascript">
            $(document).ready(function(){
            $('#test').click(function(){
                $('#info').slideToggle(1000);
            });

	      })
		</script>
		<article class="portfolio-info" id="section2">
			<h2>Portfolio | CV</h2>
		    <div class="pdf"></div>
			<p style="margin-top: 10px">Hey! Here with I have attached my Resume if you wants more info about me.You are free to vist my <a href="#" style="color:wheat;text-decoration: none">linkeden</a> Profile.
			</p>
		</article>
		<article class="contact-info" id="section3">
			<h2>Contact</h2>
			<p class="feed">Want to Connect! Please mail me at <address>
				<a href="mailto:ajeetj1308@gmail.com" style="color:wheat; text-decoration: none; font-family: arial"><i class="fa fa-envelope" aria-hidden="true"></i> ajeetj1308@gmail.com</a></p>
			 </address><br>
		    <h2>Feedback</h2>
			<p class="feed">Hi viewers!<br> I would be pleased to hear feedback on this mobo view of mine website.</p><br>
			<form>
				<input type="text" name="name" placeholder="Name" id="name"><br><br>
				<input type="text" name="email" placeholder="E-mail" id="email"><br><br>
				<input type="text" name="feedback" placeholder="Please write Your Feedback here" id="feedback"><br><br>
				<input type="submit" name="submit" value="Submit" id="submit"><br><br>
			</form>
		</article>
	</div>

	<footer class="footer">
		<div class="inner-footer">
			<div class="social-links">
				<ul>
					<li class="social-items"><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
					<li class="social-items"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li class="social-items"><a href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>
					<li class="social-items"><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		    <div class="quick-links">
				<ul>
					<li class="quick-items"><a href="#">HOME</a></li>
					<li class="quick-items"><a href="#">PORTFOLIO</a></li>
					<li class="quick-items"><a href="#">ABOUT ME</a></li>
					<li class="quick-items"><a href="#">CONTACT</a></li>
				</ul>
		    </div>
	    </div>
		<div class="outer-footer">
			Copyright &copy; Ajeet Kumar Jaiswal. All Rights Reserved
		</div>
	</footer>
	<script type="text/javascript">
		$(function(){
			$(".scrollTo").on('click',function(){
				$("html, body").animate({
					scrollTop:$($.attr(this, 'href')).offset().top-79
				}, 1000)
			})
		})
	</script>
</body>
</html>