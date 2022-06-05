

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
					<h2 class="faculty_title"><span class="toggle"><i class="fa fa-bars" aria-hidden="true"></i></span>Admin</h2>
					<center>
						<img alt="vc" height="223" src="{{asset('asset/img/epic/admin/promice.jpg')}}" title="deputy controller" width="220" />
						<h3>Avishek Reza Promise</h3>
						<h3>Admin Incharge</h3>
						<h3>Email: <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="f8998e918b909d938a9d8299b8918d8bd69d9c8dd69a9c">[email&#160;protected]</a></h3>
						<h3>Cell: 01844505111</h3>
						<br /><br />
						<hr />
						<img alt="vc" height="223" src="{{asset('asset/img/epic/admin/AAzarin.jpg')}}" title="deputy controller" width="220" />
						<h3>Jarin Tasnim Meeti</h3>
						<h3>Assistant Admin</h3>
						<h3>Email: <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="82e8e3f0ebecc2ebf7f1ace7e6f7ace0e6">[email&#160;protected]</a></h3>
						
						<br /><br />
						<hr />
						<img alt="vc" height="223" src="{{asset('asset/img/epic/admin/salauddin.jpg')}}" title="deputy controller" width="220" />
						<h3>Sheikh Salah Uddin</h3>
						<h3>Assistant Admin</h3>
						<h3>Email: <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="e1928a948585888fa1889492cf848594cf8385">[email&#160;protected]</a></h3>
						
						<br /><br />
						<hr />
						<img alt="vc" height="223" src="epic/admin/tania.jpg" title="deputy controller" width="220" />
						<h3>Tania Afroze</h3>
						<h3>Assistant Admin Officer</h3>
						<h3>Email: <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="c7b3a6a9aea6e9a6a1b5a8bda287aeb2b4e9a2a3b2e9a5a3">[email&#160;protected]</a></h3>
						
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