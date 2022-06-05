

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

					<h2 class="faculty_title"><span class="toggle"><i class="fa fa-bars" aria-hidden="true"></i></span>Vice Chancellor</h2>
					<center>
						
							<img alt="vc" height="223" src="{{asset('asset/img/VC.jpg')}}" title="Vice Chancellor" width="220" />
							<h3>Prof. Dr. Md. Abdus Sattar</h3>
							<h4>Vice Chancellor</h4>
							<h4>University of Scholars</h4>
							<h4>Name:	Prof. Dr. Md. Abdus Sattar</h4>
					</center>
					<h4>Message :</h4>
					<p>
						I feel privileged and honored to join The International University of Scholars as Vice-Chancellor appointed by Mr. Abdul Hamid, the Honorable President of the People’s Republic of Bangladesh and the Chancellor of the University of Scholars. I must also express my heartfelt gratitude to the members of the Board of Trustees (BOT) of the Scholars for proposing my name in the panel sent to the Chancellor for appointing as VC.

						A university is a place where knowledge is gathered, generated, and disseminated. The International University of Scholars is comparatively a new organization in the domain of higher education in Bangladesh, thus strives for academic excellence in imparting quality education and skill development to a large number of young students. A vision of the university is also to create awareness among the students of inculcating appropriate human values, social commitment, and patriotism side by side with the academic pursuit of excellence. Another vision is to develop leadership quality among the students through the activities of a number of student clubs. Teachers of the university are also committed to impart quality education in the pursuance of academic excellence.

						Our (The BOT members, Teachers, Officials, and students) mission is to provide degrees of International Standard with a commitment to uplift the status of the university among the ‘Top Ten’ private Universities in Bangladesh. In the present era of globalization, everybody is entitled to be connected instantaneously with millions of people worldwide simply by touching a keyboard of an electronic device. We would thus like to connect our younger generation (particularly our students) with a global knowledge bank, universal human wisdom along with our national pride, culture, heritage, and core natural values.

						Finally, I would like to take the liberty of urging all our stakeholders such as the Govt. of Bangladesh, the UGC, all educational institutions in and around the University of Scholars, and overall the citizens of Bangladesh for their generous help and assistance to our mission and visions.

						<h4>See More :</h4>
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