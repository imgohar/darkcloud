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
                          Public Image Catalog             </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Public Cloud</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa mr-2"></i>Containers & Orchestration </a></li>
                                    <li class="breadcrumb-item active"> Public Image Catalog</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Main-Content Start -->
    <div class="main-content">
        <section >
           <img src="{{URL::asset('images/others/shape1.png')}}" class="img-fluid shape-right" alt="QLOUD">
           <div class="container">
              <div class="row">
                 <div class="col-lg-6 col-sm-12 mb-lg-0 mb-4 wow fadeInLeft">
                    <img src="{{URL::asset('images/others/08.png')}}" class="img-fluid" alt="qloud">
                 </div>
                 <div class="col-lg-6 col-sm-12 wow fadeInRight">
                    <div class=" text-left iq-title-box iq-title-default iq-title-box-2">
                       <div class="iq-title-icon">
                       </div>
                       {{-- <span class="iq-subtitle">About Us</span> --}}
                       <h2 class="iq-title text-capitalize">
                        The most popular system images and pre-installed applications</h2>
                       <p class="iq-title-desc pr-lg-5">In order to get your systems up and running as quickly as possible, DarkCloud offers the industry-standard cloud images, as well as the most popular pre-installed applications. </p></div>
                       
                    </div>
                 </div>
              </div>
           </section>
    
             <!-- Icon-box Start -->
    <section class="iq-pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            <div class="iq-img-area">
                                <img src="{{URL::asset('images/fancy-list/01.png')}}" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title">Maintained by DarkCloud


                                </h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">The images are produced and maintained by DarkCloud. You do not have to worry about providing the classic system images, and updates are also provided by us.
                                    </p>
                                </div>

                                

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            <div class="iq-img-area">
                                <img src="{{URL::asset('images/fancy-list/01.png')}}" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title">Optimised for the DarkCloud infrastructure


                                </h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">The system images provided are specifically configured to make the most of the DarkCloud infrastructure. You enjoy the full performance offered by the instance. 
                                    </p>
                                </div>

                                

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            <div class="iq-img-area">
                                <img src="{{URL::asset('images/fancy-list/01.png')}}" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title">Quick startup


                                </h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">System images from the Public Image Catalog are systematically cached on all hypervisors, so cloud servers start up in seconds. 
                                    </p>
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
                                <h4 class="iq-fancy-title">On-the-fly configuration
                                </h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Thanks to the "cloud-init" startup scripts, each instance can have a specific behaviour while still being based on a standard image. Cloud-init allows you to configure an infinite number of parameters and also launch scripts to customise each instance startup. 
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


           <section>
            <div class="container">
                <h2>How to</h2>
                <br>
                <p>List the images in the catalog</p>
                <code class="lead bg-dark d-block p-3 text-white rounded">openstack image list --public</code>
                <br>
                <p>
                    Display the properties of an image</p>
                <code class="lead bg-dark d-block p-3 text-white rounded">openstack image show debian</code>
                <br>
                
                
            </div>
        </section>
    


   
    <div class="container">
        <h3>Operating Systems</h3>
        <div class="row">
            <div class="col-lg-6">
                <h4>Debian

                </h4>
                <p>A flagship distribution in the Linux world, Debian is recognised as one of the most stable distributions and benefits from a large user community around the world.</p>
                <br>
                
                <h4>Ubuntu
                </h4>
                <p>Derived from Debian, this distribution stands out for its fast integration of different services, drivers and software on the market. It has established itself as a standard in the world of cloud computing.</p>
                <br>
                <h4>Windows Server
                </h4>
                <p>Server version of Microsoft's operating system. Windows Server offers many services, and allows you to host applications that require a Microsoft environment.</p>
                

                </p>
                <br>
                <h4>CentOS 6</h4>
                <p>A free distribution, based on Red Hat, the most widely-used system in the corporate world. Its lifecycle is based on that of RHEL (Red Hat Enterprise Linux).</p>
                
            </div>
            <div class="col-lg-6">
                <h4>Fedora</h4>
                <p>Community version of Red Hat. This distribution is often ahead of its time when it comes to the integration of new practices and technologies.


                </p>
                <br>
                <h4>CoreOS
                </h4>
                <p>The Linux distribution designed to host distributed applications. It natively deploys Etcd, Kubernetes and Prometheus.</p>
                <br>
                <h4>Archlinux
                </h4>
                <p>A popular Linux distribution with rolling upgrades that uses the Pacman package management system.</p>
                <br>
                <h4>FreeBSD
                </h4>
                <p>As the only UNIX system not based on Linux, this BSD distribution uses a free license that is different to other Linux systems.</p>
                <br>
            </div>
        </div>
    </div>

   
    <div class="container">
        <h3>Pre Installed applications</h3>
        <div class="row">
            <div class="col-lg-6">
                <h4>WordPress

                </h4>
                <p>WordPress is a CMS (content management system) that facilitates multisite and multi-blog creation. Very popular and accessible thanks to its many options, it offers total control to its users.</p>
                <br>
                
                <h4>Plesk
                </h4>
                <p>Plesk is a web management interface that allows you to manage one or more projects in a simplified way. It is ideal for companies that prefer a graphical user interface to command lines.</p>
                <br>
                <h4>Virtualmin
                </h4>
                <p>Virtualmin is an open-source web hosting control panel, designed to facilitate the management of sites, email users, databases and web applications.</p>
                

                </p>
               
                
            </div>
            <div class="col-lg-6">
                <h4>GitLab</h4>
                <p>GitLab is a collaborative open-source platform for managing development projects. It covers the entire lifecycle of the project, from creation to production. One of GitLab's great assets is the management of version control.


                </p>
                <br>
                <h4>Docker
                </h4>
                <p>Docker is an open-source solution thatallows applications to be deployed in software containers. The code launched inside a container is isolated, and works independently of the operating system (OS).</p>
                <br>
                <h4>OpenVPN
                </h4>
                <p>OpenVPN is a complete open-source SSL VPN solution, offering all the features necessary for a site-to-site virtual private network (VPN).</p>
                <br>
               
            </div>
        </div>
    </div>

 

    <section class="blue-bg iq-help">
        <div class="container">
        <div class="row">
           <div class="col-lg-12">
              <div class=" text-left iq-title-box mb-0 iq-title-white iq-title-box-2">
              <div class="iq-title-icon">
                          </div>
              
              <h2 class="iq-title text-capitalize">
                Public Image Catalog billing</h2>
                <p class="text-white">The Public Image Catalog offers system images for free. However, some of them may require a license.





                </p>
                    </div>
           </div>
           
        </div>
        <div class="iq-btn-container d-inline-block">
             <a class="iq-button iq-btn-outline d-inline" href="/public-cloud-pricing">    View All prices      
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
                        <div class="iq-accordion  iq-accordion-semi-round iq-accordion-classic">
    
                            <div class="iq-accordion-block  1 accordion-active">
                                <div class="iq-accordion-title" style="">
                                    <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                    <h5 class="mb-0 accordion-title">
                                        
                                        What SLA does DarkCloud offer for accessing the Public Image Catalog service?
    
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">The SLA guarantees 99.9% monthly availability for accessing the Public Image Catalog service.</p>
    
                                </div>
                            </div>
    
                            <div class="iq-accordion-block   2">
                                <div class="iq-accordion-title">
                                    <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                    <h5 class="mb-0 accordion-title">
                                        Are the images official?
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">When cloud images are offered by publishers, DarkCloud delivers them as they are. This means you get exactly the same behaviour as you would from other providers who use the same images. When the publisher does not provide a cloud image, we build custom images to work properly in the DarkCloud environment. </p>
    
                                </div>
                            </div>
    
                            <div class="iq-accordion-block   3">
                                <div class="iq-accordion-title">
                                    <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                    <h5 class="mb-0 accordion-title">
                                        What is cloud-init?
    
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">Cloud-init is software installed on cloud images. It manages a certain number of primitives when an instance is booted, depending on its environment and “personality”. This personality is defined by parameters such as its name, its network and disk configurations, and customisation scripts that offer flexible automation. Cloud-init manages script formats like bash, and others that are more appropriate, such as cloud-config.</p>
    
                                </div>
                            </div>
    
                            
                            <div class="iq-accordion-block   4">
                                <div class="iq-accordion-title">
                                    <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                    <h5 class="mb-0 accordion-title">
                                        Where can I find documentation on cloud-init and cloud-config syntax?
    
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">Although the cloud-config syntax is simple, you may need documentation to set advanced configurations. You can find it <a href="https://cloudinit.readthedocs.io/en/latest/">here</a>.</p>
    
                                </div>
                            </div>
    
    
                            <div class="iq-accordion-block   5">
                                <div class="iq-accordion-title">
                                    <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                    <h5 class="mb-0 accordion-title">
                                        How do I update my operating system?
    
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">Once the instance has been deployed, you are responsible for maintaining your operating system. Even if DarkCloud updates its images, this does not affect instances that have already been deployed. You can use the standard system update channels on your instance.</p>
    
                                </div>
                            </div>
    
    
                            <div class="iq-accordion-block   6">
                                <div class="iq-accordion-title">
                                    <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                    <h5 class="mb-0 accordion-title">
                                        I can't find the image I want in the list of images offered. What can I do?
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">DarkCloud provides a list of images for the most common uses. You may need something more specific. If this is the case, you can push a system image of your choice into the Private Image Catalog.</p>
    
                                </div>
                            </div>
    
    
                            <div class="iq-accordion-block   7">
                                <div class="iq-accordion-title">
                                    <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                    <h5 class="mb-0 accordion-title">
                                       
                                        Will DarkCloud have access to my operating system if I use the images offered?
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">No, you are the sole administrator of your machine. DarkCloud does not have any access to your operating system.</p>
    
                                </div>
                            </div>
    
                            <div class="iq-accordion-block   8">
                                <div class="iq-accordion-title">
                                    <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                    <h5 class="mb-0 accordion-title">
                                       
                                        What is a cloud image?
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">A cloud image is a single file with a virtual disk containing an operating system to install. This installation is made generic, so that it can be copied before running in a particular context when the user needs it. Most often, these are Linux or Windows installations.</p>
    
                                </div>
                            </div>
    
    
                            
    
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Faq End -->
    

     

@endsection