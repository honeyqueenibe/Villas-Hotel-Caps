<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
	<link href="http://localhost:8000/vendor/fontawesome-free/css/bootstrap.min.css" rel="stylesheet" />
	<script type="text/javascript" src="http://localhost:8000/vendor/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="http://localhost:8000/vendor/fontawesome-free/js/bootstrap.bundle.min.js"></script>
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Montserrat:wght@500&display=swap');
	:root {
	--bg1: #151828;
	--bg2: #1b1f34;
	--body: #959DCC;	
	--brand: #FFAB76;
	--white: #FFF;
	--primary: #EB1616;
	--secondary: #191C24;
	--light: #6C7293;
	--dark: #000000;
	--rich-black-fogra-39_50: hsla(0, 0%, 5%, 0.5);
	--rich-black-fogra-39: hsl(0, 0%, 5%);
	--indian-yellow_10: hsla(36, 61%, 58%, 0.1);
	--indian-yellow: hsl(36, 61%, 58%);
	--harvest-gold: hsl(36, 66%, 53%);
	--eerie-black-1: hsl(0, 0%, 14%);
	--eerie-black-2: hsl(0, 0%, 12%);
	--eerie-black-2_85: hsla(0, 0%, 12%, 0.85);
	--eerie-black-3: hsl(0, 0%, 8%);
	--sonic-silver: hsl(0, 0%, 44%);
	--davys-gray: hsl(210, 9%, 31%);
	--light-gray: hsl(0, 0%, 80%);
	--platinum: hsl(0, 0%, 91%);
	--black_30: hsla(0, 0%, 0%, 0.3);
	--white_10: hsla(0, 0%, 100%, 0.1);
	--white_30: hsla(0, 0%, 100%, 0.3 );
	--white_50: hsla(0, 0%, 100%, 0.5);
	--white: hsl(0, 0%, 100%);
	--jet: hsl(0, 0%, 21%);
	}
	body {
	font-family: "Inter", 'Segoe UI', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	color: var(--body);
	line-height: 1.8;
	background-color: var(--bg1);
	box-sizing: border-box;
	
	

	} 
	
	h1,h2,h3,h4,h5,h6 {
	font-family: "Dela Gothic One", sans-serif;
	color: white;
	}
	
	img {
	width: 100%;
	}
	a{
	color: var(--body);
	text-decoration: none;
	}
	a:hover{
	color: var(--brand);
	}
	</style>
 
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <div class="container">
	    <a class="navbar-brand" href="{{url('/')}}">A Hotel</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav ms-auto">
	        <a class="nav-link" aria-current="page" href="#services">Services</a>
	        <a class="nav-link" href="{{url('/')}}">Gallery</a>
	        <a class="nav-link" href="{{url('page/about-us')}}">About Us</a>
	        <a class="nav-link" href="{{url('page/contact-us')}}">Contact Us</a>
	        @if(Session::has('customerlogin'))
	        <a class="nav-link" href="{{url('customer/add-testimonial')}}">Add Testimonial</a>
	        <a class="nav-link" href="{{url('logout')}}">Logout</a>
	        <a class="nav-link btn btn-sm btn-danger" href="{{url('booking')}}">Booking</a>
	        @else
	        <a class="nav-link" href="{{url('login')}}">Login</a>
	        <a class="nav-link" href="{{url('register')}}">Register</a>
	        <a class="nav-link btn btn-sm btn-danger" href="{{url('booking')}}">Booking</a>
	        @endif
	      </div>
	    </div>
	  </div>
	</nav>
		<main>
			@yield('content')
		</main>
		<!--Start of Tawk.to Script-->
<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/659999378d261e1b5f504f63/1hjfvvrc4';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
	<!--End of Tawk.to Script-->
	
	</body>
</html>