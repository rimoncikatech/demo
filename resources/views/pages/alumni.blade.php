

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
					<h2 class="faculty_title"><span class="toggle"><i class="fa fa-bars" aria-hidden="true"></i></span>Alumni</h2>
					<p>
						<h2>Scholar’s Alumni Association</h2>
						<br />
						University of Scholars Alumni Association is an independent, organization. The association arranges special get together; regular updates on University of Scholars activities and new programs exclusively designed for the former students. It provides a perfect platform to renew students’ connections with old friends and keep them connected with each other. The Alumni Association leverages the resources, talents, and initiatives of alumni and friends to advice, guide, advocate for and support the Association and the university in achieving their respective missions and goals.
						<br />
						<h2>Benefits:</h2>
						<br />
						Scholars Alumni inspires you to stay in touch; you never know when we may be able to help, remember to keep us informed of any changes in your contact details.<br />
						Members of the Scholars Alumni Association enjoy the following, so be a part of it.<br />
						Career Supports<br />
						Events<br />
						Seminars & Workshop<br />
						Networking<br />
						Study Abroad & Scholarship<br />
						<br /><br />
						<h2>Advisory Panel :</h2><br />
						Scholar’s Alumni Association Advisory Panel is consisted of seven members. Anything you need to know or for any further query, please feel free to contact them.
						<br />
						<table>
							<tr>
								<td><b>Name</b></td>
								<td><b>Designation</b></td>
								<td><b>Position</b></td>
							</tr>
							<tr>
								<td>DR MD MAMUNUR RASHID</td>
								<td>Professor, Dean & Head (EEE)</td>
								<td>Chairman</td>
							</tr>
							<tr>
								<td>Md. Julfikar Ali</td>
								<td>Associate Professor & Head (BBA)</td>
								<td>Co-Chairman</td>
							</tr>
							<tr>
								<td>Md. Sajjad Hossain</td>
								<td>Assistant Professor & Head (English)</td>
								<td>Member</td>
							</tr>
							<tr>
								<td>AKM Monzurul Islam</td>
								<td>Assistant Professor & Head (CSE)</td>
								<td>Member</td>
							</tr>
							<tr>
								<td>SM Nahidul Islam</td>
								<td>Lecturer & Coordinator (MBA)</td>
								<td>Member</td>
							</tr>
							<tr>
								<td>Faruq Hosen	</td>
								<td>Assistant Professor & Coordinator</td>
								<td>Member</td>
							</tr>
							<tr>
								<td>Engr. Rezaul Karim	</td>
								<td>Associate Professor & Head (Textile)</td>
								<td>Member Secretary</td>
							</tr>
						</table>
						<br />
						<h2>Gallery :</h2>
					</p>
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