

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- font awesome -->
	<link rel="stylesheet" href="{{asset('asset/css/all.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('asset/css/jquery.modal.min.css')}}" />
 	<link rel="icon" type="image/x-icon" href="favicon.{{asset('asset/img/ico')}}">
	<link rel="stylesheet" href="{{asset('asset/css/slick.css')}}">
	<link rel="stylesheet" href="{{asset('asset/css/stellarnav.min.css')}}">
	<link rel="stylesheet" href="{{asset('asset/css/icofont.min.css')}}">
	<link rel="stylesheet" href="{{asset('asset/css/jotia-regular.css')}}">
	<link rel="stylesheet" href="{{asset('asset/css/faculty.css')}}">
	<link rel="stylesheet" href="{{asset('asset/css/faculty_responsive.css')}}">
	<title>The Int'l University of Scholars (IUS)</title>
</head>
<body>
	<!-- preloader --> 

    @include('includes.main')
		<main>
			<section class="faculty_members_cse">
				<div class="facalty_container">
					<div id="mySidenav" class="sidenav">
						<a href="#">About</a>
						<a href="#">Services</a>
						<a href="#">Clients</a>
						<a href="#">Contact</a>
					</div>
					<h2 class="faculty_title"><span class="toggle"><i class="fa fa-bars" aria-hidden="true"></i></span>Administration & Registrar</h2>
					<center>
						<img alt="vc" height="223" src="{{asset('asset/img/epic/Registrer/mobasher.jpg')}}" title="registrar" width="220" />
						<h3>Capt. Mobashwer A Khandaker, psc, BN (Retd)</h3>
						<h3>Registrar</h3>
						<h3>Email: <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="bac8dfddd3c9cec8dbc8fad3cfc994dfdecf94d8de">[email&#160;protected]</a></h3>
						<br /><br />
						<hr />
						<img alt="vc" height="223" src="{{asset('asset/img/epic/Registrer/ARazad.jpg')}} title="assistant registrar" width="220" />
						<h3>Abul Kalam Azad</h3>
						<h3>Assistant Registrar</h3>
						<h3>Email: <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="53322932377d3221133a26207d3637267d3137">[email&#160;protected]</a></h3>
						<br /><br />
						<hr />
						<img alt="" height="223" src="#" title="assistant registrar" width="220" />
						<h3>Samia Shehrin</h3>
						<h3>Assistant Registrar</h3>
						<h3>Email: <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="98ebf9f5f1f9b6f9ead8f1edebb6fdfcedb6fafc">[email&#160;protected]</a></h3>
						<br /><br />
					</center>
				</div>
			</section>
		</main>
	@include('academic.footer')
	</div>


	<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
		var loader = document.getElementById("preloader");
		window.addEventListener("load", function(){
        loader.style.display = "none";
		})
		let btn = document.querySelector(".toggle");
		let icon = btn.querySelector(".fa-bars");
		btn.onclick = function(){
			if(icon.classList.contains("fa-bars")){
				icon.classList.replace("fa-bars", "fa-times");
				document.getElementById("mySidenav").style.width = "250px";
  				document.querySelector("main").style.marginLeft = "250px";
			}else{
				icon.classList.replace( "fa-times", "fa-bars");
				document.getElementById("mySidenav").style.width = "0px";
  				document.querySelector("main").style.marginLeft = "0px";
			}
		}
	</script>
@include('includes.script')
</body>

</html>