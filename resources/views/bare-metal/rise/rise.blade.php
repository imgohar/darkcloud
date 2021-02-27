@extends('layouts.app')


@section('content')
    <!-- Breadcrumb Start -->
    <div class=" main-bg">
        <div class="container-fluid p-0">
            <div class="text-left iq-breadcrumb-one
               iq-bg-over black     ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12">
                            <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                                <h2 class="title">
                           Rise Dedicated Servers                       </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Bare Metal Cloud</a></li>
                                    <li class="breadcrumb-item active"> Dedicated Servers - Rise Servers</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

     <!-- About Us Start -->
     <section>
        <img src="{{URL::asset('images/others/shape1.png')}}" class="img-fluid shape-right" alt="QLOUD">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 mb-lg-0 mb-5">
                    <img src="{{URL::asset('images/others/04.png')}}" class="img-fluid" alt="qloud">
                </div>
                <div class="col-lg-6 col-sm-12 ">
                    <div class="iq-title-box iq-title-default iq-title-box-2">
                        <div class="iq-title-icon">
                        </div>
                        <span class="iq-subtitle">Rise Servers</span>
                        <h2 class="iq-title">Get started with your first server</h2>
                        <p class="iq-title-desc">Dedicated servers in the Rise range are the most affordable bare-metal servers offered by DarkCloud, and are based on a groundbreaking Intel® platform. Intel® Xeon® processors seamlessly combine affordable prices with high performance for servers. They are suited to a wide variety of uses for standalone servers, with a simple range of optimised configurations.
                        </p>
                        <p>
                            They are also perfect for hosting websites, streaming platforms and business activity, and offer 500Mbit/s of bandwidth, which is well-suited to the standard uses for this server type.
                        </p>
                        <p> 
                            AMD Ryzen processors, based on ZEN 2 architecture, offer the best performance on the market. They are specially designed to manage parallel tasks, image and video processing, and online multi-player game hosting.

                            Our anti-DDoS protection is included by default on all DarkCloud servers, giving you optimal protection. These servers will give you the best quality/price ratio, and fully-dedicated resources. The Rise range is available in several regions worldwide, so we can be closest to where you do business. This optimises latency (loading speed) for your end-users as a result.

</p>

                            <a class="btn btn-primary" href="/bare-metal/game/price">View Prices</a>
                            <br> <br>
                            <a href="/bare-metal/rise/services-included" class="btn btn-outline-primary">Included with your server</a>
                            <a href="/bare-metal/rise/options" class="btn btn-outline-primary">Optional With rise server</a>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->


        <!-- Icon-box Start -->
        <section class="pt-0 iq-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center iq-title-box iq-title-default iq-title-box-2">
                            <div class="iq-title-icon">
                            </div>
                            <span class="iq-subtitle">Advantages</span>
                            <h2 class="iq-title">The advantages of a Rise server</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="iq-icon-box iq-icon-box-style-1">
                            <div class="icon-box-img">
                                <img src="{{URL::asset('images/icon-box/01.png')}}" class="img-fluid" alt="QLOUD">
                            </div>
                            <div class="icon-box-content">
                                <h5 class="icon-box-title"> <a>A solution with no extra costs</a>
          </h5>
                                <p class="icon-box-desc">All OVH dedicated servers offer a number of services included by default for professional usage, such as bandwidth for an unlimited volume of data, anti-DDoS protection and 24/7 technical support at no extra cost.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="iq-icon-box iq-icon-box-style-1">
                            <div class="icon-box-img">
                                <img src="{{URL::asset('images/icon-box/02.png')}}" class="img-fluid" alt="QLOUD">
                            </div>
                            <div class="icon-box-content">
                                <h5 class="icon-box-title"> <a href="javascript:void(0)">Simplified administration
                                </a>
          </h5>
                                <p class="icon-box-desc"> Choose from more than 30 pre-installed operating systems via the OVH Control Panel. In just a few clicks, your server is set up with your choice of operating system.

                                    With management interfaces such as Plesk and cPanel, you can simplify deployment and administration for a website, email server or database.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="iq-icon-box iq-icon-box-style-1">
                            <div class="icon-box-img">
                                <img src="{{URL::asset('images/icon-box/03.png')}}" class="img-fluid" alt="QLOUD"> </div>
                            <div class="icon-box-content">
                                <h5 class="icon-box-title"> <a href="javascript:void(0)">Backup storage space
                                </a>
          </h5>
                                <p class="icon-box-desc">Backups are critical for keeping your business up and running under all circumstances. Rise servers include 500GB external storage space, which is designed to store backups of your data and configuration files. This backup space is secure, free, and can be shared between your servers. </p>
                            </div>
                        </div>
                    </div>
                    
                                    </div>
            </div>
        </section>
        <!-- Icon-box End -->

        <section class="blue-bg iq-help">
            <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="iq-title-box mb-0 iq-title-white iq-title-box-2">
                  <div class="iq-title-icon">
                              </div>
                  
                  <h2 class="iq-title text-capitalize">
                    View prices for the Rise dedicated server range  </h2>
                        </div>
               </div>
            </div>
            <div class="iq-btn-container text-center d-block">
                 <a class="iq-button iq-btn-outline d-inline-block" href="/bare-metal/game/price">    View Prices       
                </a>
            </div>
            </div>
            </div>
            </div>
            </section>

    <!-- Icon-box Start -->
    <section class="iq-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center iq-title-box iq-title-default iq-title-box-2">
                        <div class="iq-title-icon">
                        </div>
                        <span class="iq-subtitle">Features</span>
                        <h2 class="iq-title">
                     A powerful and innovative feature set  </h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            <div class="iq-img-area">
                                <img src="{{URL::asset('images/fancy-list/01.png')}}" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title"> IPv4 and IPv6 addresses</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Each server has a public IPv4 address and an IPv6 address range. As an option, you can rent additional IPv4 addresses for your dedicated server (up to 256 per machine).
                                    </p>
                                    <br>
                                    <p><a href="/bare-metal-ip">Find Out more</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            <div class="iq-img-area">
                                <img src="{{URL::asset('images/fancy-list/02.png')}}" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title"> Anti-DDoS protection</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> To guarantee maximum security for your infrastructures, an anti-DDoS system is included with all DarkCloud dedicated servers. It ensures service continuity for your applications, in the event of an attack.
                                    </p>
                                    <br>
                                    <p><a href="/anti-ddos">Find Out more</a></p>
                                </div>

                                

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            <div class="iq-img-area">
                                <img src="{{URL::asset('images/fancy-list/03.png')}}" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title"> Service Level Agreement — 99.90%</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">All of the servers in this range have a 99.90% SLA, ensuring the best availability for your business applications.
                                    </p>
                                    <br>
                                    
                                </div>

                               
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            <div class="iq-img-area">
                                <img src="{{URL::asset('images/fancy-list/04.png')}}" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title"> 500GB of backup space</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Each dedicated server comes with a 500GB storage space, dedicated to backups. This space is completely separate from the server, and is designed for you to store your data and configuration files. The storage capacity can be increased, if needed.
                                    </p>
                                    <p><a href="/bare-metal-backup-storage">Find Out more</a></p>
                                </div>

                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <div class="text-right">
                    <a href="/bare-metal-game-services-included" class="btn btn-outline-primary">All Services Included</a>
                </div>
               


                

                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Icon-box End -->


     <!-- Icon-box Start -->
     <section class="iq-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center iq-title-box iq-title-default iq-title-box-2">
                        <div class="iq-title-icon">
                        </div>
                        <span class="iq-subtitle">Uses</span>
                        

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title"> Hosting websites, blogs and forums</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> Host a website, blog or forum on a Rise dedicated server for low latency and a high load capacity.
                                    </p>
                                </div>

                                

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title"> File and multimedia servers</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> Share your files, photos and videos internally with your employees, or externally with your customers.
                                    </p>
                                </div>

                                

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title"> Business applications</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> In just a few minutes, you can deploy a business application on a server with dedicated resources, for reliable and consistent performance.
                                    </p>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Icon-box End -->

    
    <!-- Portfolio Start -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="iq-masonry-block w-100 ">
                    <div class="isotope-filters isotope-tooltip">
                        <h2>Optional with Rise servers</h2> <br>
                        <a href="/bare-metal-game-options" class="btn btn-outline-primary">Explore your options</a>
                    </div>
                    <div class="iq-masonry iq-columns-3">
                        {{-- LEFT BLACK FOR ALIGNMENT --}}
                        <div class="iq-masonry-item creative design print-branding">
                            <div class="iq-portfolio">

                                <a href="/bare-metal/bandwidth" class="iq-portfolio-img">
                                    <img src="{{URL::asset('images/portfolio/01.png')}}" class="img-fluid" alt="qloud-portfolio" />
                                    <div class="portfolio-link">
                                        <div class="icon">
                                            <i class="fa fa-link" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </a>

                                <div class="iq-portfolio-content">
                                    <div class="details-box clearfix">
                                        <div class="consult-details">
                                            <a href="/bare-metal/bandwidth">
                                                <h5 class="link-color">
                                       Additional Public Bandwidth          </h5>
                                                <p class="mb-0 iq-portfolio-desc">Anticipate peaky of activity</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="iq-masonry-item creative design print-branding">
                            
                            <div class="iq-portfolio">

                                <a href="/bare-metal-ip" class="iq-portfolio-img">
                                    <img src="{{URL::asset('images/portfolio/01.png')}}" class="img-fluid" alt="qloud-portfolio" />
                                    <div class="portfolio-link">
                                        <div class="icon">
                                            <i class="fa fa-link" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </a>

                                <div class="iq-portfolio-content">
                                    <div class="details-box clearfix">
                                        <div class="consult-details">
                                            <a href="/bare-metal-ip">
                                                <h5 class="link-color">
                                       Floating IP Address           </h5>
                                                <p class="mb-0 iq-portfolio-desc">Manage Your Service Availablity</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iq-masonry-item creative design">
                            <div class="iq-portfolio">

                                <a href="/bare-metal-backup-storage" class="iq-portfolio-img">
                                    <img src="{{URL::asset('images/portfolio/02.png')}}" class="img-fluid" alt="qloud-portfolio" />
                                    <div class="portfolio-link">
                                        <div class="icon">
                                            <i class="fa fa-link" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </a>

                                <div class="iq-portfolio-content">
                                    <div class="details-box clearfix">
                                        <div class="consult-details">
                                            <a href="/bare-metal-backup-storage">
                                                <h5 class="link-color">
                                       Additional Backup Space            </h5>
                                                <p class="mb-0 iq-portfolio-desc">Store upto 10 TB of data</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio End -->


         <!-- Icon-box End -->
         <section class="wow fadeInUp iq-application" style="background: url({{URL::asset('images/others/07.jpg')}}) no-repeat 0 0; background-attachment: fixed; background-size:cover;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="text-center iq-title-box iq-title-default iq-title-box-1">
                            <h2 class="iq-title">
                                Assistance and documentation
                            </h2>
                            <h2>Guides and documentation</h2>
                            <p class="iq-title-desc">We offer a range of documentation and online support to assist you in setting up and configuring your dedicated server.</p>
                        </div>
                        <div class="iq-btn-container">
    
                            <a class="iq-button iq-btn-round iq-btn-outline d-inline" href="about-us-2.html">  
    
             Get Started
    
        </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        


 <!-- Faq Start -->
 <section class="iq-pricing-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center iq-title-box iq-title-default iq-title-box-2">
                    <div class="iq-title-icon">
                    </div>
                    <span class="iq-subtitle">Faq</span>
                    <h2 class="iq-title">Frequently Asked Questions</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="iq-accordion  iq-accordion-semi-round iq-accordion-classic">

                    <div class="iq-accordion-block  1 accordion-active">
                        <div class="iq-accordion-title" style="">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                What do the setup fees consist of?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text"> The setup fees cover the cost of assembling and connecting your server in our datacentres. The initial fees are only billed once, when the service is set up. This means they are not linked to your commitment period.

                                The setup fees for your dedicated server are included for any commitment periods of 12 months or longer.</p>

                        </div>
                    </div>

                    <div class="iq-accordion-block   2">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                When can I order the options offered?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text"> The options are available at the server configuration step. You can also order and enable options directly via the DarkCloud Control Panel, after your service has been delivered.</p>

                        </div>
                    </div>

                  
                    

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Faq End -->


<section>
    <div class="container">
        <h3>How do I create a basic web server?</h3>
        <br>
        <h4>Choice of distribution</h4>
        <p>To get started using your dedicated server, you need to install an OS. DarkCloud offers a range of operating systems that are available to install automatically, and they all operate on an optimised platform. This includes Windows Server, Linux and UNIX operating systems, as well as Plesk and cPanel control panels, not to mention SQL Server for databases. Your server adapts to your needs.</p>
    
        <h4>With root access, you control your server
        </h4>
        <p>You are free to utilise the full power of your dedicated server. In addition to the choice of operating system, you have root access to your machine. Manage, configure, and secure your server on the command line, or through your choice of control panel, without technical constraints, as required. You can take advantage of our expertise and our datacentres, while remaining the sole administrator of your server!</p>
        
        <h4>Fully-dedicated resources for your projects</h4>
        <p>The most significant advantage of a dedicated server is the power it offers in terms of computing, data processing, and storage capacity. Compared to a shared hosting or cloud solution, all your server’s resources are allocated to you. Because there is no virtualisation layer, you can rest assured that your applications are fully benefiting from dedicated resources.</p>
        


    </div>
</section>




@endsection