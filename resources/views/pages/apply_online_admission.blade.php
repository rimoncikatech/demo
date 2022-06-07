<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 	font-awesome -->
    <link rel="stylesheet" href="{{asset('asset/css/all.min.css')}}" />
    <!-- 	font-awesome -->
    <link rel="stylesheet" href="{{asset('asset/css/jquery.modal.min.css')}}" />
    <link rel="icon" type="image/x-icon" href="favicon.{{asset('asset/img/ico')}}">
    <link rel="stylesheet" href="{{asset('asset/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/stellarnav.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/jotia-regular.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/style3860.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/style.responsive.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/apply_online.css')}}">

    

    <title>The Int'l University of Scholars (IUS)</title>
</head>

<body style="background-color:white" ;>
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
        <section class="hero-area_section">
            <div class="hero-area">
                <div class="carousel-area">
                    <div class="hero-area-carousel">
                        <div class="hero-carousel-item">
                            <div class="hero-background-image">
                                <img src="{{asset('asset/img/1University_of_Scholars.jpg')}}" alt="University_of_Scholars">
                            </div>
                            <div class="container">
                                <div class="hero-content">
                                    <div class="hero-social-links">
                                        <!--<a target="_blank" href="https://www.facebook.com/UniversityofScholars">-->
                                        <!--	<img src="./1assets/imgs/fb1.svg" alt="University of Scholars">-->
                                        <!--</a>-->
                                        <!--<a target="_blank" href="https://www.youtube.com/c/MohammadArifulHoqueShuhan">-->
                                        <!--	<img src="./1assets/imgs/yt1.svg" alt="Youtube, University of Scholars">-->
                                        <!--</a>-->
                                    </div>
                                    <div class="hero-area-content">
                                        <h2 class="hero-desc-heading">Excellent Facilities & Services</h2>
                                        <!-- <div class="hero-contact-info">
											<a href="tel:+8801844075476" class="hero-contact-tel">
												<img src="./1assets/imgs/phone.svg" alt="University_of_Scholars">
												<span>+8801844075476</span>
											</a>
											<address class="hero-contact-address">
												<img src="./1assets/imgs/map-marker.svg" alt="">
												<span>40, Kamal Ataturk Avenue , Banani, Dhaka 1213</span>
											</address>
										</div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-carousel-item">
                            <div class="hero-background-image">
                                <img src="{{asset('asset/img/1cse.jpg')}}" alt="CSE">
                            </div>
                            <div class="container">
                                <div class="hero-content">
                                    <div class="hero-social-links">
                                        <!--<a target="_blank" href="https://www.facebook.com/UniversityofScholars">-->
                                        <!--	<img src="./1assets/imgs/fb1.svg" alt="University of Scholars">-->
                                        <!--</a>-->
                                        <!--<a target="_blank" href="https://www.youtube.com/c/MohammadArifulHoqueShuhan">-->
                                        <!--	<img src="./1assets/imgs/yt1.svg" alt="">-->
                                        <!--</a>-->
                                    </div>
                                    <div class="hero-area-content">
                                        <h2 class="hero-desc-heading">Promoting Academic Excellence</h2>
                                        <!-- <div class="hero-contact-info">
											<a href="tel:+8801844075476" class="hero-contact-tel">
												<img src="./1assets/imgs/phone.svg" alt="">
												<span>+8801844075476</span>
											</a>
											<address class="hero-contact-address">
												<img src="./1assets/imgs/map-marker.svg" alt="">
												<span>40 Kemal Ataturk Ave , Banani, Dhaka 1213</span>
											</address>
										</div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-carousel-item">
                            <div class="hero-background-image">
                                <img src="{{asset('asset/img/1eee.jpg')}}" alt="EEE">
                            </div>
                            <div class="container">
                                <div class="hero-content">
                                    <div class="hero-social-links">
                                        <!--<a target="_blank" href="https://www.facebook.com/UniversityofScholars">-->
                                        <!--	<img src="./1assets/imgs/fb1.svg" alt="University of Scholars">-->
                                        <!--</a>-->
                                        <!--<a target="_blank" href="https://www.youtube.com/c/MohammadArifulHoqueShuhan">-->
                                        <!--	<img src="./1assets/imgs/yt1.svg" alt="">-->
                                        <!--</a>-->
                                    </div>
                                    <div class="hero-area-content">
                                        <h2 class="hero-desc-heading">Focusing on Student Needs</h2>
                                        <!-- <div class="hero-contact-info">
											<a href="tel:+8801844075476" class="hero-contact-tel">
												<img src="./1assets/imgs/phone.svg" alt="">
												<span>+8801844075476</span>
											</a>
											<address class="hero-contact-address">
												<img src="./1assets/imgs/map-marker.svg" alt="">
												<span>40 Kemal Ataturk Ave , Banani, Dhaka 1213</span>
											</address>
										</div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-carousel-item">
                            <div class="hero-background-image">
                                <img src="{{asset('asset/img/1textile.jpg')}}" alt="Textile">
                            </div>
                            <div class="container">
                                <div class="hero-content">
                                    <div class="hero-social-links">
                                        <!--<a target="_blank" href="https://www.facebook.com/UniversityofScholars">-->
                                        <!--	<img src="./1assets/imgs/fb1.svg" alt="University of Scholars">-->
                                        <!--</a>-->
                                        <!--<a target="_blank" href="https://www.youtube.com/c/MohammadArifulHoqueShuhan">-->
                                        <!--	<img src="./1assets/imgs/yt1.svg" alt="">-->
                                        <!--</a>-->
                                    </div>
                                    <div class="hero-area-content">
                                        <h2 class="hero-desc-heading">Encouraging Innovation</h2>
                                        <!-- <div class="hero-contact-info">
											<a href="tel:+8801844075476" class="hero-contact-tel">
												<img src="./1assets/imgs/phone.svg" alt="">
												<span>+8801844075476</span>
											</a>
											<address class="hero-contact-address">
												<img src="./1assets/imgs/map-marker.svg" alt="">
												<span>40 Kemal Ataturk Ave , Banani, Dhaka 1213</span>
											</address>
										</div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-carousel-item">
                            <div class="hero-background-image">
                                <img src="{{asset('asset/img/english.jpg')}}" alt="ENGLISH">
                            </div>
                            <div class="container">
                                <div class="hero-content">
                                    <div class="hero-social-links">
                                        <!--<a target="_blank" href="https://www.facebook.com/UniversityofScholars">-->
                                        <!--	<img src="./1assets/imgs/fb1.svg" alt="University of Scholars">-->
                                        <!--</a>-->
                                        <!--<a target="_blank" href="https://www.youtube.com/c/MohammadArifulHoqueShuhan">-->
                                        <!--	<img src="./1assets/imgs/yt1.svg" alt="">-->
                                        <!--</a>-->
                                    </div>
                                    <div class="hero-area-content">
                                        <h2 class="hero-desc-heading">Ensuring Integrity & Ethics in Our Actions</h2>
                                        <!-- <div class="hero-contact-info">
											<a href="tel:+8801844075476" class="hero-contact-tel">
												<img src="./1assets/imgs/phone.svg" alt="">
												<span>+8801844075476</span>
											</a>
											<address class="hero-contact-address">
												<img src="./1assets/imgs/map-marker.svg" alt="">
												<span>40 Kemal Ataturk Ave , Banani, Dhaka 1213</span>
											</address>
										</div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-carousel-item">
                            <div class="hero-background-image">
                                <img src="{{asset('asset/img/1bba_mba.jpg')}}" alt="BBA_MBA">
                            </div>
                            <div class="container">
                                <div class="hero-content">
                                    <div class="hero-social-links">
                                        <!--<a target="_blank" href="https://www.facebook.com/UniversityofScholars">-->
                                        <!--	<img src="./1assets/imgs/fb1.svg" alt="University of Scholars">-->
                                        <!--</a>-->
                                        <!--<a target="_blank" href="https://www.youtube.com/c/MohammadArifulHoqueShuhan">-->
                                        <!--	<img src="./1assets/imgs/yt1.svg" alt="">-->
                                        <!--</a>-->
                                    </div>
                                    <div class="hero-area-content">
                                        <h2 class="hero-desc-heading">Quality Education & Quality Service</h2>
                                        <!-- <div class="hero-contact-info">
											<a href="tel:+8801844075476" class="hero-contact-tel">
												<img src="./1assets/imgs/phone.svg" alt="">
												<span>+8801844075476</span>
											</a>
											<address class="hero-contact-address">
												<img src="./1assets/imgs/map-marker.svg" alt="">
												<span>40 Kemal Ataturk Ave , Banani, Dhaka 1213</span>
											</address>
										</div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-carousel-item">
                            <div class="hero-background-image">
                                <img src="{{asset('asset/img/1teachtolearn.jpg')}}" alt="teach_to_learn">
                            </div>
                            <div class="container">
                                <div class="hero-content">
                                    <div class="hero-social-links">
                                        <!--<a target="_blank" href="https://www.facebook.com/UniversityofScholars">-->
                                        <!--	<img src="./1assets/imgs/fb1.svg" alt="University of Scholars">-->
                                        <!--</a>-->
                                        <!--<a target="_blank" href="https://www.youtube.com/c/MohammadArifulHoqueShuhan">-->
                                        <!--	<img src="./1assets/imgs/yt1.svg" alt="">-->
                                        <!--</a>-->
                                    </div>
                                    <div class="hero-area-content">
                                        <h2 class="hero-desc-heading">Fostering a Community of Mutual Respect & Diversity</h2>
                                        <!-- <div class="hero-contact-info">
											<a href="tel:+8801844075476" class="hero-contact-tel">
												<img src="./1assets/imgs/phone.svg" alt="">
												<span>+8801844075476</span>
											</a>
											<address class="hero-contact-address">
												<img src="./1assets/imgs/map-marker.svg" alt="">
												<span>40 Kemal Ataturk Ave , Banani, Dhaka 1213</span>
											</address>
										</div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
       
        <div class="container">

            <section class="candidates-resume-area">
                <div class="container">
                    <div class="candidates-resume-content">
                        <form class="resume-info">
                            <h3 style="color:rgb(92,14,55);">Student basic information</h3>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Student's Full Name</label>
                                        <input class="form-control" type="text" name="First-Name">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Select Program</label>
                                        <select class="form-control">
                                            <option value="">Select Program</option>
                                            <option value="B.Sc in CSE (Diploma)">B.Sc in CSE (Diploma)</option>
                                            <option value="B.Sc in CSE (HSC)">B.Sc in CSE (HSC)</option>
                                            <option value="B.Sc in Textile (Diploma)">B.Sc in Textile (Diploma)</option>
                                            <option value="B.Sc in Textile (HSC)">B.Sc in Textile (HSC)</option>
                                            <option value="B.Sc in EEE (Diploma)">B.Sc in EEE (Diploma)</option>
                                            <option value="B.Sc in EEE (HSC)">B.Sc in EEE (HSC)</option>
                                            <option value="BA (Hons.) In English">BA (Hons.) In English</option>
                                            <option value="Bachelor Of Business Administration (BBA)">Bachelor Of Business Administration (BBA)</option>
                                            <option value="Masters of Business Administration-MBA (Regular) 2 Years">Masters of Business Administration-MBA (Regular) 2 Years</option>
                                            <option value="Masters of Business Administration-MBA (Executive) EMBA">Masters of Business Administration-MBA (Executive) EMBA</option>
                                            <option value="Masters of Business Administration-MBA(BBA Graduate)">Masters of Business Administration-MBA (BBA Graduate)</option>
                                        </select>
                                        <i class="ri-arrow-down-s-line"></i>
                                    </div>
                                </div>

                                <!-- <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="img">Student photo</label>
                                        <input type="file" class="form-control" id="img-1" name="img" accept="image/*">
                                    </div>
                                </div> -->

                                <!-- <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="img">Upload passport or birth documentation</label>
                                        <input type="file" class="form-control" id="img" name="img" accept="image/*">
                                    </div>
                                </div> -->

                            </div>


                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Father's name</label>
                                        <input type="text" class="form-control" name="Father">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Mother's name</label>
                                        <input type="text" class="form-control" name="Mother">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Contact no</label>
                                        <input type="text" class="form-control" name="contact">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
              

                            </div>

                            <h3 style="color:rgb(92,14,55);">Student academic information</h3>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>SSC</label>
                                        <input class="form-control" type="text" name="School">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Passing Year</label>
                                            <div class="input-group date" id="datetimepicker-2">
                                                <input type="text" class="form-control">
                                                <span class="input-group-addon"></span>
                                                <i class="bx bx-calendar"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>GPA</label>
                                        <input type="text" class="form-control" name="qualification">
                                    </div>
                                </div>

                           

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Select area of study</label>
                                        <input type="text" class="form-control" name="study">
                                    </div>
                                </div>

                           


                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>HSC</label>
                                        <input class="form-control" type="text" name="School">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Passing Year</label>
                                            <div class="input-group date" id="datetimepicker-2">
                                                <input type="text" class="form-control">
                                                <span class="input-group-addon"></span>
                                                <i class="bx bx-calendar"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>GPA</label>
                                        <input type="text" class="form-control" name="qualification">
                                    </div>
                                </div>

                           

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Select area of study</label>
                                        <input type="text" class="form-control" name="study">
                                    </div>
                                </div>

                           

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group checkboxs">
                                        <input type="checkbox" id="chb2">
                                        <p>
                                            By submitting this form, you agree to the <a href="terms-conditions.html">Terms &amp; Conditions</a> And <a href="privacy-policy.html">Privacy Policy</a> notice.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                <div class="text-center pt-5">
                           <button type="submit" class="btn btn-success rounded-0">Submit</button>
           
        </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>


        </div>


        <!-- Start Footer Area  -->
        @include('includes.footer')
        <!-- End Footer Area  -->

        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script>
            var loader = document.getElementById("preloader");
            window.addEventListener("load", function() {
                loader.style.display = "none";
            });
        </script>
        @include('includes.script')

</body>

</html>