@extends('layouts.master')
@section('content')
<!-- start slider area -->
<section id="home" class="slider" >
    <div class="single-slider" >
        <div class="container">
            <div class="slider-content">
                <h1 class="cd-headline clip is-full-width">
                    <span class="cd-words-wrapper" style="width: 630px;">
                        <b class="is-visible">Hi, I am Fares Shawa.</b> 
                        <b class="is-hidden">I am a Web Developer.</b>
                        <b class="is-hidden">I am a Web Designer.</b>
                     </span>
                </h1>
                <p>Speciality in Modern and UI/UX Design</p>
                <button class="default-btn">See My Works</button>
            </div>
            <div>
                <ul class="navigation">
                    <li>
                        <a href="#about" class="go-down">
                            <i class="fa fa-angle-down"></i>
                        </a>    
                    </li>
                </ul>
            </div>  
        </div>        
    </div>
</section>
<!-- / end slider area -->
<!-- start about area -->
<section id="about" class="about-top pt-80 pb-20">
    <div class="container">
        <div class="section-title text-center upcase">
            <h2>About Me</h2>
            <img src="img/Divider-Line.png" alt="">
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-40">
                <div class="success-story">
                    <h2>Who Am I ? </h2>
                    <p class="about_text">
                        Recent university graduate seeking a full-time position in Information Technology where I can use my detailed-oriented approach in a team setting to solve challenging problems and provide exemplary client service. My aim is to work in a professional and challenging environment in hope to further develop my skills and contribute to the company by gradually bringing success through teamwork and meeting deadlines. The ability to learn and further develop new and current concepts in the information technology field.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-40">
                <div class="skill">
                    <h2>My skills</h2>
                    <div class="skill upcase">
                        <h4>front end developement <span></span></h4>
                        <div class="progress ">
                            <div class="progress-bar wow slideInLeft" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;" data-wow-duration="1s" data-wow-delay="1s"></div>
                        </div>
                    </div>
                    <div class="skill upcase">
                        <h4>Backend Development <span></span></h4>
                        <div class="progress ">
                            <div class="progress-bar wow slideInLeft" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;" data-wow-duration="1s" data-wow-delay="1s"></div>
                        </div>
                    </div>
                    <div class="skill upcase">
                        <h4>Requirement Analysis <span></span></h4>
                         <div class="progress ">
                            <div class="progress-bar wow slideInLeft" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;" data-wow-duration="1s" data-wow-delay="1s"></div>
                        </div>
                    </div>
                    <div class="skill upcase">
                        <h4>Time Management <span></span></h4>
                        <div class="progress ">
                            <div class="progress-bar wow slideInLeft" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;" data-wow-duration="1s" data-wow-delay="1s"></div>
                        </div>
                    </div>
                    <div class="skill upcase">
                        <h4>Teamwork <span></span></h4>
                        <div class="progress ">
                            <div class="progress-bar wow slideInLeft" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;" data-wow-duration="1s" data-wow-delay="1s"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / end about area -->
<!-- start about me CV DOWNLOAD area -->
<section class="about-me pb-80 pt-80 text-center">
    <div class="parallax-overlay"></div>
    <div class="container">
        <div class="hire-content">
            <h3>Download My CV</h3>
        </div>
        <div class="popup">
            <a href="/docs/cv.docx"> 
                <i class="fa fa-download"></i>
            </a>
        </div>
    </div>
</section>
<!-- / end about me CV DOWNLOAD area-->
<!-- start process area -->
<section id="workflow"class="process-area pt-80 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 mb-40">
                <div class="process-left">
                    <h2>Development Process</h2>
                    <div class="devider"><hr></div>
                    <p>In order to develop a functional and reliable system, the following steps must be taken in the following order to ensure the stability and professionalism of the final output.</p>
                </div>
            </div>
            <div class="col-md-3 mb-40 col-sm-4 col-xs-12 col-md-4">
                <div class="single-process bg-gray">
                    <span class="service-bar"></span>
                    <div class="process-icon">
                        <i class="fa fa-bar-chart"></i>
                    </div>
                    <div class="process-content">
                        <h3>Requirements</h3>
                        <p>Gather requirements and picture how the final output of the system will look like through prototyping and module management.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-40 col-sm-4 col-xs-12 col-md-4">
                <div class="single-process bg-gray">
                    <span class="service-bar"></span>
                    <div class="process-icon">
                        <i class="fa fa-pencil"></i>
                    </div>
                    <div class="process-content">
                        <h3>Prepare</h3>
                        <p>Prepare the tools that are needed for the development of the system, as well as research on similar systems and project background.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-40 col-sm-4 col-xs-12 col-md-4">
                <div class="single-process bg-gray">
                    <span class="service-bar"></span>
                    <div class="process-icon">
                        <i class="fa fa-code"></i>
                    </div>
                    <div class="process-content">
                        <h3>Plan</h3>
                        <p>Plan an appropriate methodology to be used throughout the development of the system and manage the time needed for developement.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-40 col-sm-4 col-xs-12 col-md-4">
                <div class="single-process bg-gray">
                    <span class="service-bar"></span>
                    <div class="process-icon">
                        <i class="fa fa-laptop"></i>
                    </div>
                    <div class="process-content">
                        <h3>Design</h3>
                        <p>Design the frontend UI/UX of the system based on the client needs through a suitable web design for the given project.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-40 col-sm-4 col-xs-12 col-md-4">
                <div class="single-process bg-gray">
                    <span class="service-bar"></span>
                    <div class="process-icon">
                        <i class="fa fa-cog"></i>
                    </div>
                    <div class="process-content">
                        <h3>Development</h3>
                        <p>Develop the backend of the project through a framework, or custom web development technique to ensure system stability and security.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-40 col-sm-4 col-xs-12 col-md-4">
                <div class="single-process bg-gray">
                    <span class="service-bar"></span>
                    <div class="process-icon">
                        <i class="fa fa-paper-plane-o"></i>
                    </div>
                    <div class="process-content">
                        <h3>Launch</h3>
                        <p>Run several tests including unit, integration, performance, Usability testing to ensure the system's overall performance.</p>
                    </div>
                </div>
            </div>
        </div>      
    </div>
</section>
<!-- / process area-->
<!-- start counter area -->
<section class="counters pt-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
                <div class="counter-section-title pb-20">
                    <h2>My Status</h2>
                    <p class="para">Below are some statistics of the works I have succesfully completed.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12 col-md-4 mb-40">
                <div class="single-counter">
                    <i class="fa fa-tasks"></i>
                    <h1 class="counter">14</h1>
                    <p>Projects Done</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12 col-md-4 mb-40">
                <div class="single-counter">
                    <i class="fa fa-users"></i>
                    <h1 class="counter">12</h1>
                    <p>happy clients</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12 col-md-4 mb-40">
                <div class="single-counter">
                    <i class="fa fa-clock-o"></i>
                    <h1 class="counter">1600</h1>
                    <p>hours worked</p>
                </div>
            </div>
        </div>        
    </div>
</section>
<!-- / end counter area-->
<!-- start portfolio section -->
<section id="portfolio" class="portfolio-area pt-80">
    <div class="container-fluid">
        <div class="section-title text-center upcase">
            <h2>Portfolio</h2>
            <p>Below are some of my works.</p>
            <img src="/img/Divider-Line.png" alt="">
        </div>
        <div class="portfolio-menu">
            <div class="button-group filter-button-group">
                <button data-filter="*">all</button>
                <button data-filter=".Website">Website Design</button>
                <button data-filter=".System">Web System</button>
            </div>
        </div>
        <div class="row">
        <div class="portfolio-wrapper container">
            <div class="grid">
                <div class='col-lg-4 Website grid-item'>
                    <div class='single-portfolio'>
                        <img src='/img/portfolio/1.jpg' class='img-responsive' alt='portfolio'>
                        <div class='portfolio-caption'>
                            <div class='portfolio-link-btn'>
                                <a href='#' class='vbox-portfolio vbox-item' data-gall='myGallery'>
                                    <i class='fa fa-plus'></i>
                                </a>
                            </div>
                            <div class='portfolio-caption-content'>
                                <h4><a href='#'>Buddyz Restaurant</a></h4>
                                <a href='#'>Website</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / end portfolio section -->
<!-- start blog area -->
<section id="blog" class="blog-area section-padding ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center upcase">
                    <h2>Latest Posts</h2>
                    <p>My Blog Posts </p>
                    <img src="/img/Divider-Line.png" alt="">
                </div>
            </div>
        </div>
        <!-- /end section-title row -->
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="single-blog">
                    <div class="post-image">
                        <img src="img/blog/1.jpg" alt="blog-image" class="img-responsive">
                    </div>
                    <div class="post-meta">
                        <a href="#"><i class="fa fa-user"></i>Admin</a>
                        <a href="#"><i class="fa fa-calendar"></i>Jan 14 2017</a>
                    </div>
                    <div class="post-details">
                        <h4><a href="single-blog.html" target="_blank">Here Goes An Awesome Blog Title</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae aut sed delectus vel distinctio odio. Odit non, ipsa facilis vero.</p>
                    </div>
                </div>
             </div>
            <!-- /end single-blog -->
            <div class="col-md-4 col-sm-6">
                <div class="single-blog">
                    <div class="post-image">
                        <img src="img/blog/2.jpg" alt="blog-image" class="img-responsive">
                    </div>
                    <div class="post-meta">
                        <a href="#"><i class="fa fa-user"></i>Admin</a>
                        <a href="#"><i class="fa fa-calendar"></i>Jan 14 2017</a>
                    </div>
                    <div class="post-details">
                        <h4><a href="single-blog.html" target="_blank">Here Goes An Awesome Blog Title</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae aut sed delectus vel distinctio odio. Odit non, ipsa facilis vero.</p>
                    </div>
                </div>
            </div>
            <!-- /end single-blog -->
            <div class="col-md-4 col-sm-6">
                <div class="single-blog">
                    <div class="post-image">
                        <img src="img/blog/3.jpg" alt="blog-image" class="img-responsive">
                    </div>
                    <div class="post-meta">
                        <a href="#"><i class="fa fa-user"></i>Admin</a>
                        <a href="#"><i class="fa fa-calendar"></i>Jan 14 2017</a>
                    </div>
                    <div class="post-details">
                        <h4><a href="single-blog.html" target="_blank">Here Goes An Awesome Blog Title</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae aut sed delectus vel distinctio odio. Odit non, ipsa facilis vero.</p>
                    </div>
                </div>
            </div>
            <!-- /end single-blog -->
        </div>
        <div class="blog-btn text-center">
            <button class="default-btn black">See All Post</button>
        </div>
        <!-- /end blog-btn -->
    </div>
</section>
<!-- / end blog section -->
<!-- start hire me  -->
<section class="about-hire ptb-80 text-center">
    <div class="container">
        <div class="hire-content">
            <h3>Want Me To Work On Your Next Project?</h3>
        </div>
        <div class="hire-button">
            <a href="#" class="default-btn hire-btn">Hire Me</a>
        </div>
    </div>
</section>
<!-- / end hire me -->
<!-- start contact me area -->
<section id="contact" class="contact-area pt-80 pb-40">
    <div class="container">
        <div class="section-title text-center upcase">
            <h2>Contact Me</h2>
            <p>Contact me for details on your next project </p>
            <img src="/img/Divider-Line.png" alt="">
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6">
                <div class="contact-details">
                    <div class="col-sm-6 mb-40">
                        <div class="contact-box">
                            <div class="icon-area">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <h3>Address</h3>
                            <p>Jeddah , Saudi Arabia</p>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-40">
                        <div class="contact-box">
                            <div class="icon-area">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </div>
                            <h3>Email</h3>
                            <p><a href="mailto:fares.shawa@gmail.com">fares.shawa@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-40">
                        <div class="contact-box">
                            <div class="icon-area">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <h3>Contact Number</h3>
                            <p>00966 543 55 2011</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6 mb-40">
                <form action="#">
                    <div class="contact-form">
                        <div class="form-group">
                            <div class="col-sm-6 mb-30">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="col-sm-6 mb-30">
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12 mb-30">
                                <textarea class="form-control" rows="3" placeholder="Type your message"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn default-btn submit-btn" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /end contact me-->
@endsection