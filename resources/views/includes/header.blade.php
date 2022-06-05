<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- 	font-awesome -->
	<link rel="stylesheet" href="{{asset('asset/css/all.min.css')}}"/>
	<!-- 	font-awesome -->
	<link rel="stylesheet" href="{{asset('asset/css/jquery.modal.min.css')}}" />
 	<link rel="icon" type="image/x-icon" href="favicon.{{asset('asset/img/ico')}}">
	<link rel="stylesheet" href="{{asset('asset/css/slick.css')}}">
	<link rel="stylesheet" href="{{asset('asset/css/stellarnav.min.css')}}">
	<link rel="stylesheet" href="{{asset('asset/css/icofont.min.css')}}">
	<link rel="stylesheet" href="{{asset('asset/css/jotia-regular.css')}}">
	<link rel="stylesheet" href="{{asset('asset/css/style3860.css')}}">
	<link rel="stylesheet" href="{{asset('asset/css/style.responsive.css')}}">
	
	<title>The Int'l University of Scholars (IUS)</title>
</head>
<body>
	<!-- preloader --> 
	<!-- <div id="preloader"></div> -->
	<div>
		<div class="address-section">
			<div class="container">
				<div class="address-section-row row">
					<div class="col-lg-8">
						<div class="address-box float_left">
						<!-- The Int'l University of Scholars (IUS) -->
							<a href="tel: +8801844075476"><i class="fa-solid fa-phone"></i>+8801844075476</a>
							<address><i class="fa-solid fa-location-dot"></i> 40, Kemal Ataturk Ave, Banani, Dhaka 1213</address>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="address-box float_right">
							<a href="#"><i class="fa-brands fa-facebook"></i></a>
							<a href="#"><i class="fa-brands fa-youtube"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<header class="header_section">
			<div class="container">
				<div class="header-area">
					<div class="header-logo">
						<a href="{{route('/')}}">
							<img src="{{asset('asset/img/scholars_logo.png')}}" alt="Logo">
							<!-- <video src="../WhatsApp Video 2022-05-14 at 6.04.30 PM.mp4"></video> -->
						</a>
					</div>
		
					<nav id="header-navigation" class="header-navigation">
						<ul class="header-navigation-list">
							<!-- <li><a href="#">Explore</a></li> -->
							<li class="has-sub">
								<a href="javascript:void()">Academic</a>
								<ul>
									<li>
										<a href="{{route('about-us')}}" target="_blank">About Us</a>
									</li>
									<li>
										<a href="{{route('dean_head_and_co_ordinator')}}" target="_blank">Deans, Heads &amp; Coordinators</a>
									</li>
									<li>
										<a href="{{route('faculty-members')}}" target="_blank">Faculty Members</a>
									</li>
									<li class="has-sub">
										<a href="javascript:void()">Departments</a>
										<ul>
											<li class="has-sub">
												<a href="javascript:void()">Dept. of Engineering &amp; Applied Science</a>
												<ul>
													<li>
														<a href="static/_bachelor-of-science-in-computer-science-engineering_.html" target="_blank">B.Sc. In Computer Science &amp; Engineering (CSE)</a>
													</li>
													<li>
														<a href="static/_bachelor-of-science-in-textile-engineering_.html" target="_blank">B.Sc. In Textile Engineering (TE)</a>
													</li>
													<li>
														<a href="static/_bachelor-of-science-in-electrical-and-electronic-engineering_.html" target="_blank">B.Sc. In Electrical &amp; Electronics Engineering (EEE)</a>
													</li>
												</ul>
											</li>
											<li class="has-sub">
												<a href="javascript:void()">Dept. of Arts &amp; Humanities</a>
												<ul>
													<li>
														<a href="static/_bachelor-of-arts-in-english_.html" target="_blank">BA (Hons.) In English</a>
													</li>
												</ul>
											</li>
											<li class="has-sub">
												<a href="javascript:void()">Dept. of Business</a>
												<ul>
													<li><a href="static/_bachelor-of-business-administration-bba_.html" target="_blank">Bachelor of Business Administration (BBA)</a></li>
													<li><a href="static/_master-of-business-administration-mba-program_.html" target="_blank">Masters of Business Administration-MBA</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="{{route('degrees-offered')}}" target="_blank">Degrees Offered</a></li>
									<li><a href="{{route('short-courses')}}" target="_blank">Short Courses</a></li>
									<li><a href="{{route('examinations')}}" target="_blank">Examinations</a></li>
									<li class="has-sub">
										<a href="javascript:void()">Research</a>
										<ul>
											<li><a href="{{route('publications')}}" target="_blank">Publication of Faculty Members</a></li>
										</ul>
									</li>
									<li><a href="{{route('academic_calender')}}" target="_blank">Academic Calendar</a></li>
									<li><a href="{{route('career-counselling-student-advisor')}}" target="_blank">Career Counselling Student Advisor</a></li>
								</ul>
							</li>
							<li class="has-sub">
								<a href="javascript:void()">Administration</a>
								<ul>
									<li><a href="{{route('vc')}}" target="_blank">Vice Chancellor</a></li>
									<li><a href="{{route('provc')}}" target="_blank">Pro-Vice Chancellor</a></li>
									<li><a href="{{route('treasurer')}}" target="_blank">Treasurer</a></li>
									<li><a href="{{route('Administration_Registrar')}}" target="_blank">Administration &amp; Registrar</a></li>
									<li><a href="{{route('proctor')}}" target="_blank">Proctor</a></li>
									<li><a href="{{route('controller')}}" target="_blank">Controller of Examination</a></li>
									<li class="has-sub">
										<a href="javascript:void()">Office Of CCO</a>
										<ul>
											<li><a href="{{route('cco')}}" target="_blank">CCO</a></li>
											<li><a href="{{route('finance')}}" target="_blank">Finance</a></li>
											<li><a href="{{route('Administration_Registrar')}}" target="_blank">Admission Office</a></li>
											<li><a href="{{route('branding')}}" target="_blank">Branding</a></li>
											<li><a href="{{route('admin')}}" target="_blank">Admin</a></li>
											<li><a href="{{route('pro')}}" target="_blank">Public Relations</a></li>
											<li><a href="{{route('IT')}}" target="_blank">IT</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="iems-link"><a href="https://ius.pipilikasoft.com/" target="_blank">iEMS</a></li>
						</ul>
					</nav>
					
				</div>
			</div>
		</header>