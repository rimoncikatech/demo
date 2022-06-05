

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
					<h2 class="faculty_title"><span class="toggle"><i class="fa fa-bars" aria-hidden="true"></i></span>IT</h2>
					<center>
						<img alt="it" height="223" src="{{asset('asset/img/epic/IT/razon.jpg')}}" title="IT officer" width="220" />
						<h3>Md Aktaruzzaman Razon</h3>
						<h3>IT Officer</h3>
						<h3>Email: <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="94f5e7e7e0bafde0d4fde1e7baf1f0e1baf6f0">[email&#160;protected]</a></h3>
						<h3>Cell: 01611832131</h3>
						<br /><br />
						<hr />
						<img alt="vc" height="223" src="{{asset('asset/img/epic/IT/mahmud.jpg')}}" title="assistant controller" width="220" />
						<h3>Md. Mahmudul Hasan</h3>
						<h3>Assistant IT Officer</h3>
						<h3>Email: <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="6508040d081001250c10164b0001104b0701">[email&#160;protected]</a></h3>
						<br /><br />
						<hr />
						<img alt="vc" height="223" src="{{asset('asset/img/epic/IT/sumon.jpg')}}" title="assistant controller" width="220" />
						<h3>Md. Imran Bashar Sumon</h3>
						<h3>Assistant IT Officer & Video Editor</h3>
						<h3>Email: <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="1665637b7978567f636538737263387472">[email&#160;protected]</a></h3>
						<br /><br />
						<hr />
						<img alt="vc" height="223" src="{{asset('asset/img/epic/IT/lina.jpg')}}" title="assistant controller" width="220" />
						<h3>Ms. Afoja Sultana</h3>
						<h3>Assistant IT Officer & Lab In Charge</h3>
						<h3>Email: <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="f19d989f90b1988482df949584df9395">[email&#160;protected]</a></h3>
						<br /><br />
						<hr />

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