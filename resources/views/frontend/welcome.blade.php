@extends('layouts.frontend.app')
@section('title')
<title>Atikin Verse - New IT Services and Business Consulting HTML5 Template</title>
@endsection
@section('body')

<section class="hero-empowerment-area">
            <div class="custom-container">
                <div class="custom-row align-items-center">
                    <div class="hero-empowerment-left-content">
                        <h5 class="section-subtitle">EMPOWERMENT</h5>
                        <h1 class="section-title" data-aos="fade-right">The Easiest Way
                            to Get Your solution!</h1>
                        <p data-aos="fade-down">We can develop software for a variety of industries including healthcare, finance,
                            entertainment, education, and others.</p>
                        <div class="btns-group d-flex">
                            <a href="about.html" class="theme-btn">Learn More</a>
                            <a href="contact.html" class="theme-btn2">
                                Let's Talk
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="hero-empowerment-right-content">
                        <div class="top-content">
                            <img class="desktop" data-aos="flip-left"  src="{{asset('assets/imgs/hero-img/bg1-1.jpg')}}" alt="Empowerment" />
                            <img class="mobile" src="{{asset('assets/imgs/bg1.png')}}" alt="Empowerment" />

                            <div class="experience-box simple-shadow bounce-in">
                                <div class="experience-body d-flex align-items-center">
                                    <img src="{{asset('assets/imgs//logo/Atikin Verse-Image1695185076.jpg')}}" alt="Icon" />

                                    <div class="experience-content d-flex align-items-center">
                                        <h1>+5</h1>
                                        <p>
                                            Years
                                            <span>Experience</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bottom-content d-flex">
                            <a href="team.html" class="our-expert-team-box simple-shadow bounce-in delay-2">
                                <div class="our-expert-team-box-inner d-flex align-items-center">
                                    <div class="imgs imgs1 d-flex align-items-center">
                                        <img src="{{asset('assets/imgs/hero-img/small-img-2.png')}}" alt="team" />
                                        <img src="{{asset('assets/imgs/hero-img/small-img-3.png')}}" alt="team" />
                                        <img src="{{asset('assets/imgs/hero-img/small-img-2.png')}}" alt="team" />
                                        <img src="{{asset('assets/imgs/hero-img/small-img-3.png')}}" alt="team" />
                                    </div>
                                    <p>
                                        Meet
                                        <span>Our Experts</span>
                                    </p>
                                </div>
                            </a>

                            <div class="google-reviews-box simple-shadow bounce-in delay-3">
                                <div class="left">
                                    <span>Verified by</span>
                                    <img src="{{asset('assets/imgs/hero-img/icon2.svg')}}" alt="Google" />
                                </div>
                                <div class="right">
                                    <div class="stars d-flex align-items-center">
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                    </div>
                                    <p>
                                        3245
                                        <span>Reviews</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- Hero Section end-->


        <!-- Client Section -->
        <section class="client-area">
            <h6 class="text-center">Atikin Verse is used by over 1,000+ companies across the world</h6>
            <div class="clients clients-marquee d-flex align-items-center mt-4">
                <div class="client-logo simple-shadow">
                    <img src="{{asset('assets/imgs/clients-logo/client-logo1.svg')}}" alt="Client" />
                </div>
                <div class="client-logo simple-shadow">
                    <img src="{{asset('assets/imgs/clients-logo/client-logo2.svg')}}" alt="Client" />
                </div>
                <div class="client-logo simple-shadow">
                    <img src="{{asset('assets/imgs/clients-logo/client-logo3.svg')}}" alt="Client" />
                </div>
                <div class="client-logo simple-shadow">
                    <img src="{{asset('assets/imgs/clients-logo/client-logo4.svg')}}" alt="Client" />
                </div>
                <div class="client-logo simple-shadow">
                    <img src="{{asset('assets/imgs/clients-logo/client-logo5.svg')}}" alt="Client" />
                </div>
                <div class="client-logo simple-shadow">
                    <img src="{{asset('assets/imgs/clients-logo/client-logo2.svg')}}" alt="Client" />
                </div>
                <div class="client-logo simple-shadow">
                    <img src="{{asset('assets/imgs/clients-logo/client-logo3.svg')}}" alt="Client" />
                </div>
                <div class="client-logo simple-shadow">
                    <img src="{{asset('assets/imgs/clients-logo/client-logo4.svg')}}" alt="Client" />
                </div>
                <div class="client-logo simple-shadow">
                    <img src="{{asset('assets/imgs/clients-logo/client-logo5.svg')}}" alt="Client" />
                </div>
                <div class="client-logo simple-shadow">
                    <img src="{{asset('assets/imgs/clients-logo/client-logo2.svg')}}" alt="Client" />
                </div>
                <div class="client-logo" style="min-width: 0;"></div>
            </div>
        </section>
        <!-- Client Section end-->

        <!-- How We Do -->
        <section class="how-we-do-area">
            <div class="custom-container">
                <div class="custom-row">
                    <img src="{{asset('assets/imgs/bg/bg-shape-1.svg')}}" alt="Shape" class="animation-slide-left how-we-do-bg" />
                    <div class="how-we-do-left-content">
                        <div class="top">
                            <h5 class="section-subtitle">Our Model</h5>
                            <h1 class="section-title">How we do</h1>
                            <p>Save time and money with our powerful method.</p>
                        </div>
                        <a href="how-we-do.html" class="theme-btn">
                            Learn More
                          <i class=" ri-arrow-right-line"></i>
                        </a>
                    </div>
                    <div class="how-we-do-right-content">
                        <div class="how-we-do-items d-flex align-items-center justify-content-center">

                            <div class="how-we-do-card">
                                <div class="circle-shape"></div>
                                <div class="line-shape"></div>

                                <div class="how-we-do-icon">
                                    <img src="{{asset('assets/imgs/services/hwd-icon-1.svg')}}" alt="How we do" />
                                </div>
                                <div class="how-we-do-content">
                                    <h4>Brainstroming</h4>
                                    <p>Ideas</p>
                                </div>
                            </div>

                            <div class="how-we-do-card">
                                <div class="circle-shape"></div>
                                <div class="line-shape"></div>

                                <div class="how-we-do-icon">
                                    <img src="{{asset('assets/imgs/services/hwd-icon-2.svg')}}" alt="How we do" />
                                </div>
                                <div class="how-we-do-content">
                                    <h4>Product</h4>
                                    <p>Design</p>
                                </div>
                            </div>

                            <div class="how-we-do-card">
                                <div class="circle-shape"></div>
                                <div class="line-shape"></div>

                                <div class="how-we-do-icon">
                                    <img src="{{asset('assets/imgs/services/hwd-icon-3.svg')}}" alt="How we do" />
                                </div>
                                <div class="how-we-do-content">
                                    <h4>Front-End</h4>
                                    <p>Development</p>
                                </div>
                            </div>

                        </div>

                        <div class="how-we-do-items d-flex align-items-center justify-content-center">
                            <div class="how-we-do-card">
                                <div class="circle-shape"></div>
                                <div class="line-shape"></div>

                                <div class="how-we-do-icon">
                                    <img src="{{asset('assets/imgs/services/hwd-icon-4.svg')}}" alt="How we do" />
                                </div>
                                <div class="how-we-do-content">
                                    <h4>SEO</h4>
                                    <p>Optimization</p>
                                </div>
                            </div>

                            <div class="how-we-do-card">
                                <div class="circle-shape"></div>
                                <div class="line-shape"></div>

                                <div class="how-we-do-icon">
                                    <img src="{{asset('assets/imgs/services/hwd-icon-5.svg')}}" alt="How we do" />
                                </div>
                                <div class="how-we-do-content">
                                    <h4>Back-End</h4>
                                    <p>Development</p>
                                </div>
                            </div>
                        </div>

                        <div class="how-we-do-items d-flex align-items-center justify-content-center">

                            <div class="how-we-do-card">
                                <div class="circle-shape"></div>
                                <div class="line-shape"></div>

                                <div class="how-we-do-icon">
                                    <img src="{{asset('assets/imgs/services/hwd-icon-6.svg')}}" alt="How we do" />
                                </div>
                                <div class="how-we-do-content">
                                    <h4>Digital</h4>
                                    <p>Marketing</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- How We Do end -->


        <!-- Service Area -->
        <section class="service-area">
            <div class="custom-container">
                <div class="service-section-header section-header d-flex align-items-end justify-content-between">
                    <div class="left">
                        <h5 class="section-subtitle">WHAT WE’RE OFFERING</h5>
                        <h1 class="section-title">Dealing in all professional <br>IT services.</h1>
                    </div>
                    <p>One fundamental aspect of IT services is infrastructure management. This involves the design,
                        implementation, and maintenance of the hardware, software, networks, and servers.</p>
                </div>

                <div class="services-list d-flex">
                    <div class="service-card simple-shadow">
                        <i class="service-icon-font  ri-code-s-slash-line ri-2x"></i>
                        <h3 class="mt-3"><a href="service.html">Development</a></h3>
                        <p>Our development is pixel perfect in all ways.</p>
                    </div>
                    <div class="service-card simple-shadow">
                        <i class="service-icon-font  ri-window-line ri-2x"></i>
                        <h3 class="mt-3"><a href="service.html">CRM Solution</a></h3>
                        <p>We enhance customer experiences for success.</p>
                    </div>
                    <div class="service-card simple-shadow">
                        <i class="service-icon-font  ri-shopping-cart-line ri-2x"></i>
                        <h3 class="mt-3"><a href="service.html">eCommerce</a></h3>
                        <p>We have a best team for your shopping websites.</p>
                    </div>

                    <div class="service-card simple-shadow">
                        <i class="service-icon-font ri-layout-line ri-2x"></i>
                        <h3 class="mt-3"><a href="service.html">Web Design</a></h3>
                        <p>We create vibrant, intuitive and minimalist web</p>
                    </div>
                    <div class="service-card simple-shadow">
                        <span class="service-badge">Free!</span>
                        <i class="service-icon-font  ri-customer-service-2-line ri-2x"></i>
                        <h3 class="mt-3"><a href="service.html">IT Support</a></h3>
                        <p>We offers expert assistance for your IT issues.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Area end-->


        <!-- Case Studio -->
        <section class="case-studio-area">
            <div class="custom-container">
                <div class="case-studio-header text-center">
                    <h5 class="section-subtitle">OUR LATEST WORK</h5>
                    <h1 class="section-title">Latest Works</h1>
                    <p class="m-3">Proud to announce our latest software release, enhancing efficiency and user experience.
                        Innovation drives us forward!</p>
                </div>


                <div class="case-studio">
                    <ul class="nav nav-pills case-studio-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link active" id="webdevelopment-tab" data-bs-toggle="tab" href="#webdevelopment"
                                role="tab" aria-controls="webdevelopment" aria-selected="true">Web Development</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="appdevelopment-tab" data-bs-toggle="tab" href="#appdevelopment" role="tab"
                                aria-controls="appdevelopment" aria-selected="false">App Development</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="erp_solutions-tab" data-bs-toggle="tab" href="#erp_solutions"
                                role="tab" aria-controls="erp_solutions" aria-selected="false">ERP Solutions</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="web_designing-tab" data-bs-toggle="tab" href="#web_designing"
                                role="tab" aria-controls="web_designing" aria-selected="false">Web Designing</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="desktop-app-tab" data-bs-toggle="tab" href="#desktop-app" role="tab"
                                aria-controls="desktop-app" aria-selected="false">Desktop App</button>
                        </li>
                    </ul>


                    <div class="tab-content about2-tab-content">
                        <div class="tab-pane fade show active" id="webdevelopment" role="tabpanel" aria-labelledby="webdevelopment-tab">
                            <div class="about2-tab-content-body d-flex gap-24">
                                <div class="img-box">
                                    <img data-aos="zoom-out-right" src="assets/imgs/portfolio/aiimag1.jpeg" alt="webdevelopment" />
                                </div>

                                <div class="content-box card-h">
                                    <div class="mac-btns-wrap d-flex align-items-center justify-content-between">
                                        <div class="mac-buttons d-flex align-items-center">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>

                                        <div class="action-btn d-flex align-items-center">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>

                                    <h1>
                                        <span class="icon"><i class=" service-icon-font  ri-code-s-slash-line "></i></span>
                                        Elevating your business strategy for success
                                    </h1>
                                    <div class="content">
                                        <p>In the ever-evolving landscape of business, are in robust and well defined
                                            strategies is the compassing that guides your journey to success. At
                                            Strategic Business Solutions, we specialize in crafting business strategies
                                            that go beyond mere plans.</p>
                                        <p>They are blueprints for growth, innovation, solution and enduring compassing
                                            that prosperity. </p>
                                    </div>
                                    <a href="portfolio-details.html" class="theme-btn">
                                        <i class="ri-arrow-right-up-line ri-2x"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="appdevelopment" role="tabpanel" aria-labelledby="appdevelopment-tab">
                            <div class="about2-tab-content-body d-flex gap-24">
                                <div class="img-box">
                                    <img data-aos="zoom-out-right" src="assets/imgs/portfolio/Works1695297003.jpg" alt="appdevelopment" />
                                </div>

                                <div class="content-box card-h">
                                    <div class="mac-btns-wrap d-flex align-items-center justify-content-between">
                                        <div class="mac-buttons d-flex align-items-center">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>

                                        <div class="action-btn d-flex align-items-center">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>

                                    <h1>
                                        <span class="icon"><i class=" service-icon-font  bx bx-mobile-alt
                                            "></i></span>
                                        Unveiling the comprehensive market analysis
                                    </h1>
                                    <div class="content">
                                        <p>In the ever-evolving landscape of business, knowledge is power. At Strategic
                                            Business Solutions, we offering an unparalleled lens through which you can
                                            decipher the complexities and is of your industry. Our Market Analysis serve
                                            services provide you with the critical insights needed to make informed
                                            decisions. we offering an unparalleled lens</p>
                                    </div>
                                    <a href="portfolio-details.html" class="theme-btn">
                                        <i class="ri-arrow-right-up-line ri-2x"></i>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="erp_solutions" role="tabpanel" aria-labelledby="erp_solutions-tab">
                            <div class="about2-tab-content-body d-flex gap-24">
                                <div class="img-box">
                                    <img data-aos="zoom-out-right" src="assets/imgs/portfolio/Works1695277716.jpg" alt="erp_solutions" />
                                </div>

                                <div class="content-box card-h">
                                    <div class="mac-btns-wrap d-flex align-items-center justify-content-between">
                                        <div class="mac-buttons d-flex align-items-center">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>

                                        <div class="action-btn d-flex align-items-center">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>

                                    <h1>
                                        <span class="icon"><i class=" service-icon-font ri-window-2-line "></i></span>
                                        Streamline your operations for maximum efficiency
                                    </h1>
                                    <div class="content">
                                        <p>The ever-evolving landscape of business, operational efficiency is the
                                            cornerstone of success. At Strategic Business Solutions, we specialize in
                                            process optimization a transformative approach that enables your
                                            organization</p>
                                        <p>we specialize in process optimization a transformative approach that enables
                                            your organization.</p>
                                    </div>
                                    <a href="portfolio-details.html" class="theme-btn">
                                        <i class="ri-arrow-right-up-line ri-2x"></i>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="web_designing" role="tabpanel" aria-labelledby="web_designing-tab">
                            <div class="about2-tab-content-body d-flex gap-24">
                                <div class="img-box">
                                    <img data-aos="zoom-out-right" src="{{asset('assets/imgs/portfolio/case-studio-7.jpg')}}" alt="web-design" />
                                </div>

                                <div class="content-box card-h">
                                    <div class="mac-btns-wrap d-flex align-items-center justify-content-between">
                                        <div class="mac-buttons d-flex align-items-center">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>

                                        <div class="action-btn d-flex align-items-center">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>

                                    <h1>
                                        <span class="icon"><i class=" service-icon-font  ri-layout-line"></i></span>
                                        Elevate your business performance to new heights
                                    </h1>
                                    <div class="content">
                                        <p>In today's fast paced and competitive business and landscape, achieving and
                                            sustaining high levels of performance is essential for long-term success. At
                                            the Strategic Business Solutions, we specialize in helping our is
                                            organizations like yours enhance their performance, optimize operations, and
                                            achieve peak efficiency. <br>
                                            At the Strategic Business Solutions.</p>
                                    </div>
                                    <a href="portfolio-details.html" class="theme-btn">
                                        <i class="ri-arrow-right-up-line ri-2x"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="desktop-app" role="tabpanel" aria-labelledby="desktop-app-tab">
                            <div class="about2-tab-content-body d-flex gap-24">
                                <div class="img-box">
                                    <img data-aos="zoom-out-right" src="{{asset('assets/imgs/portfolio/Works1695277716.jpg')}}" alt="desktop-app" />
                                </div>

                                <div class="content-box card-h">
                                    <div class="mac-btns-wrap d-flex align-items-center justify-content-between">
                                        <div class="mac-buttons d-flex align-items-center">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>

                                        <div class="action-btn d-flex align-items-center">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>

                                    <h1>
                                        <span class="icon"><i class=" service-icon-font ri-computer-line "></i></span>
                                        Nurturing entrepreneurial excellence using slack
                                    </h1>
                                    <div class="content">
                                        <p>Embarking on the journey of entrepreneurship is an exhilarating endeavor,
                                            filled with boundless opportunities and uniq Strategic Business Solutions,
                                            we are dedicated to providing you with the indispensable guidance.</p>
                                        <p>Strategic Business Solutions, we are dedicated to providing you with the
                                            indispensable guidance.</p>
                                    </div>
                                    <a href="portfolio-details.html" class="theme-btn">
                                        <i class="ri-arrow-right-up-line ri-2x"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Case Studio end-->

        <!-- About Section -->
        <section class="about-area">
            <div class="custom-container">
                <div class="custom-row justify-content-between align-items-center">
                    <div class="left-content">
                        <h5 class="section-subtitle">CONSULTING EXCELLENCE</h5>
                        <h1 class="section-title">Best pathway to our clients.</h1>
                        <p>Our consulting process begins with a
                            thorough assessment of your current IT
                            infrastructure, workflows, and pain points.</p>
                        <ul>
                            <li>
                                <i class="icon-check las la-check"></i> 24/7 Full Service Support
                            </li>
                            <li>
                                <i class="icon-check las la-check"></i> Immediate Response
                            </li>
                            <li>
                                <i class="icon-check las la-check"></i> Easy to Approach us
                            </li>
                        </ul>
                    </div>

                    <div class="right-content">
                        <div class="about-timeline">

                            <div class="about-timeline-item">
                                <div class="about-timeline-item-inner">
                                    <img src="{{asset('assets/imgs/bg/bg-shape-2.svg')}}" alt="Shape" class="line-shape" />
                                    <span class="number">01</span>
                                    <h3>Discovery and Analysis</h3>
                                    <p>Perform a analysis of the client's existing IT systems.</p>
                                </div>
                            </div>
                            <div class="about-timeline-item">
                                <div class="about-timeline-item-inner">
                                    <img src="{{asset('assets/imgs/bg/bg-shape-2.svg')}}" alt="Shape" class="line-shape" />
                                    <span class="number">02</span>
                                    <h3>Tailored Solutions</h3>
                                    <p>Develop IT solutions based on the analysis phase.</p>
                                </div>
                            </div>
                            <div class="about-timeline-item">
                                <div class="about-timeline-item-inner">
                                    <img src="{{asset('assets/imgs/bg/bg-shape-2.svg')}}" alt="Shape" class="line-shape" />
                                    <span class="number">03</span>
                                    <h3>Deployment and Support</h3>
                                    <p>Regularly communicate with our client to any concern.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section end-->

           <!-- Features Section -->
           <section class="feature-area">
            <div class="custom-container">
                <div class="custom-row align-items-center">
                    <div class="feature-left d-flex">
                        <div class="feature-img-card">
                            <h3>Start your <br>
                                project from <br>
                                your pocket.</h3>
                            <img data-aos="zoom-out-right" src="{{asset('assets/imgs/Feature/feature-img-1.png')}}" alt="Feature" />
                        </div>
                        <div class="feature-img-card">
                            <h3>Available on <br>
                                all responsive <br>
                                devices.</h3>
                                <img data-aos="zoom-out-left" src="{{asset('assets/imgs/Feature/feature-img-2.png')}}" alt="Feature" />
                        </div>
                    </div>

                    <div class="feature-right">
                        <div class="feature-content">
                            <h5 class="section-subtitle">FEATURED PRODUCT</h5>
                            <h1 class="section-title" data-aos="fade-up">Seamless productivity with our new app</h1>
                            <p>Download Slack and experience a new era of organization and accomplishment.</p>
                            <ul>
                                <li>
                                    <i class="las la-check"></i> PPD Development
                                </li>
                                <li>
                                    <i class="las la-check"></i> Easy to Use
                                </li>
                            </ul>
                            <div class="btns-group">
                                <a href="#" class="theme-simple-btn">
                                    <i class="lab la-apple"></i>
                                         Get it on App Store
                                </a>
                                <a href="#" class="theme-simple-btn">
                                    <i class="lab la-google-play"></i>
                                         Get it on Play Store
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial -->
        <section class="testimonial2-area">
            <div class="custom-container">
                <div class="section-header text-center">
                    <h5 class="section-subtitle">TESTIMONIAL</h5>
                    <h1 class="section-title">What people think about us</h1>
                    <p>Their professionalism and commitment to our success were evident <br> throughout the entire
                        process.</p>
                </div>
            </div>

            <div class="testimonial2-lists d-flex gap-24">
                <div class="testimonial-item testimonial2-card">
                    <img src="{{asset('assets/imgs/bg/bg-shape-3.svg')}}" alt="Shape" class="bg-shape" />
                    <!-- <img src="{{asset('assets/imgs/webflow-3.svg')}}" alt="Testimonial" /> -->
                    <h1>Platform helped me to increase my sales business</h1>
                    <p>One aspect that sets IT Services apart is their proactive approach to security. In today's
                        digital landscape, protecting our sensitive data</p>
                    <div class="author-box d-flex align-items-center">
                        <img src="{{asset('assets/imgs//testimonial/testimonial-2.jpg')}}" alt="Testimonial">
                        <div class="author-box-content">
                            <h4>Serana Belluci</h4>
                            <p>Product Designer</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item testimonial2-card">
                    <img src="{{asset('assets/imgs/bg/bg-shape-3.svg')}}" alt="Shape" class="bg-shape" />
                    <!-- <img src="{{asset('assets/imgs/webflow-3.svg')}}" alt="Testimonial" /> -->
                    <h1>Slack improve my business to futuristic next level!</h1>
                    <p>One aspect that sets IT Services apart is their proactive approach to security. In today's
                        digital landscape, protecting our sensitive data</p>
                    <div class="author-box d-flex align-items-center">
                        <img src="{{asset('assets/imgs//testimonial/testimonial-1.jpg')}}" alt="Testimonial">
                        <div class="author-box-content">
                            <h4>Serana Belluci</h4>
                            <p>Product Designer</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item testimonial2-card">
                    <img src="{{asset('assets/imgs/bg/bg-shape-3.svg')}}" alt="Shape" class="bg-shape" />
                    <!-- <img src="{{asset('assets/imgs/upwork-2.svg')}}" alt="Testimonial" /> -->
                    <h1>After consultation my studio branding all over</h1>
                    <p>One aspect that sets IT Services apart is their proactive approach to security. In today's
                        digital landscape, protecting our sensitive data</p>
                    <div class="author-box d-flex align-items-center">
                        <img src="{{asset('assets/imgs//testimonial/testimonial-2.jpg')}}" alt="Testimonial">
                        <div class="author-box-content">
                            <h4>Serana Belluci</h4>
                            <p>Product Designer</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item testimonial2-card">
                    <img src="{{asset('assets/imgs/bg/bg-shape-3.svg')}}" alt="Shape" class="bg-shape" />
                    <!-- <img src="{{asset('assets/imgs/webflow-3.svg')}}" alt="Testimonial" /> -->
                    <h1>Slack improve my business to futuristic next level!</h1>
                    <p>One aspect that sets IT Services apart is their proactive approach to security. In today's
                        digital landscape, protecting our sensitive data</p>
                    <div class="author-box d-flex align-items-center">
                        <img src="{{asset('assets/imgs//testimonial/testimonial-1.jpg')}}" alt="Testimonial">
                        <div class="author-box-content">
                            <h4>Serana Belluci</h4>
                            <p>Product Designer</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item testimonial2-card">
                    <img src="{{asset('assets/imgs/bg/bg-shape-3.svg')}}" alt="Shape" class="bg-shape" />
                    <!-- <img src="{{asset('assets/imgs/upwork-2.svg')}}" alt="Testimonial" /> -->
                    <h1>After consultation my studio branding all over</h1>
                    <p>One aspect that sets IT Services apart is their proactive approach to security. In today's
                        digital landscape, protecting our sensitive data</p>
                    <div class="author-box d-flex align-items-center">
                        <img src="{{asset('assets/imgs/testimonial/testimonial-2.jpg')}}" alt="Testimonial">
                        <div class="author-box-content">
                            <h4>Serana Belluci</h4>
                            <p>Product Designer</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item testimonial2-card"
                    style="min-width: 0px;background: transparent;padding: 0;"></div>
            </div>


        </section>
        <!-- Testimonial end-->


        

         <!-- News and blog Section -->
         <section class="news-area">
            <div class="custom-container">
                <div class="section-header d-flex align-items-end justify-content-between">
                    <div class="left">
                        <h5 class="section-subtitle">INTERESTING ARTICLES</h5>
                        <h1 class="section-title">Read more about daily insights</h1>
                    </div>
                    <p>In today's rapidly evolving world, technology is constantly shaping the way we live and interact. From artificial intelligence and automation to  virtual reality, the pace of technological advancements is staggering.</p>
                </div>

                <div class="sticky-news event-card d-flex card-h">
                    <div class="news-img-box">
                        <img data-aos="flip-left" src="{{asset('assets/imgs/blog/news-1.jpg')}}" alt="News"/>
                    </div>
                    <div class="news-content">
                        <h5 class="section-subtitle">MOBILE DEVELOPMENT</h5>
                        <h1 class="section-title">OpenAI launches new alignment division to tackle risks of superintelligent AI</h1>
                        <p>The makers of AI have announced the company will be dedicating 20% of its compute processing power over the next four years</p>
                        <ul>
                            <li>
                                <i class="las la-clock text-white"></i> 9 AM - 2 PM
                            </li>
                            <li>
                                <i class="las la-calendar text-white"></i> 17-05-2023
                            </li>
                        </ul>
                        <a data-aos="flip-left" href="blog-details.html" class="theme-btn">
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>

                <div class="news-items align-items-start">
                    <div class="news-item event-card card-h">
                        <div class="news-img-box">
                            <img data-aos="flip-left" src="{{asset('assets/imgs/blog/news-1.jpg')}}" alt="News"/>
                        </div>
                        <div class="news-item-body">
                            <h5 class="section-subtitle">WEB DEVELOPMENT</h5>
                            <h1 class="section-title">
                                <a href="blog-details.html">Bluebase launches Tap to Pay on smartphone for international and domestic business</a>
                            </h1>
                            <p>Small UK merchants, businesses, and other enterprises can now use  Tap to Pay on service to replace payment terminals at point of sale.</p>
                            <ul>
                                <li>
                                    <i class="las la-clock"></i> 9 AM - 2 PM
                                </li>
                               
                                <li>
                                    <i class="las la-calendar"></i> 17-05-2023
                                </li>
                                
                            </ul>
                            <a data-aos="flip-left" href="blog-details.html" class="theme-btn">
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>

                    <div class="news-item event-card card-h">
                        <div class="news-img-box">
                            <img data-aos="flip-left" src="{{asset('assets/imgs/blog/news-1.jpg')}}" alt="News"/>
                        </div>
                        <div class="news-item-body">
                            <h5 class="section-subtitle">WEB DEVELOPMENT</h5>
                            <h1 class="section-title">
                                <a href="blog-details.html">Bluebase launches Tap to Pay on smartphone for international and domestic business</a>
                            </h1>
                            <p>Small UK merchants, businesses, and other enterprises can now use  Tap to Pay on service to replace payment terminals at point of sale.</p>
                            <ul>
                                <li>
                                    <i class="las la-clock"></i> 9 AM - 2 PM
                                </li>
                               
                                <li>
                                    <i class="las la-calendar"></i> 17-05-2023
                                </li>
                                
                            </ul>
                            <a data-aos="flip-left" href="blog-details.html" class="theme-btn">
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>


                 
                </div>
            </div>
            
        </section>
        <!-- News and blog Section end-->
@endsection