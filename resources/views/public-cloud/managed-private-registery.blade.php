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
                          Managed Private Registery             </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Public Cloud</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa mr-2"></i>Containers & Orchestration </a></li>
                                    <li class="breadcrumb-item active"> Managed Private Registery</li>
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
                        Private registry managed service, compatible with the cloud native ecosystem</h2>
                       <p class="iq-title-desc pr-lg-5">The OVHcloud Managed Private Registry service makes it easy to store, manage and access your container images and Helm charts, offering enterprise-grade features and predictable pricing.</p></div>
                       
                    </div>
                 </div>
              </div>
           </section>
    <!-- Icon-box Start -->
    <section class="iq-pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            <div class="iq-img-area">
                                <img src="{{URL::asset('images/fancy-list/01.png')}}" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title">Full interoperability, thanks to open standards


                                </h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Managed Private Registry is built on open source solutions, such as Docker, and the CNCF Harbor project, to guarantee its interoperability. It supports all OCI (Open Container Initiative) images and Helm charts, and can work with any containerisation platforms and orchestration tools, such as the Kubernetes ecosystem.
                                    </p>
                                </div>

                                

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            <div class="iq-img-area">
                                <img src="{{URL::asset('images/fancy-list/01.png')}}" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title">Maximum security for your images


                                </h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Secure access for your teams, with role-based access control (RBAC). With Content Trust ensuring the integrity of your images’ sources, and by performing automatic vulnerability analysis, you are protected against most risks. All this is backed up with robust SLAs.
                                    </p>
                                </div>

                                

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            <div class="iq-img-area">
                                <img src="{{URL::asset('images/fancy-list/03.png')}}" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title">Multiple pay-as-you-go plans, with predictable pricing
                                </h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">The Managed Private Registry service offers a range of pay-as-you-go plans, to suit your development team’s size and needs. These include the amount of stored data, concurrent connections to the registry and SLAs. Inbound/outbound traffic and service maintenance are included, so you know exactly what you will pay at the end of the month.
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

     <!-- Icon-box Start -->
     <section class="iq-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center iq-title-box iq-title-default iq-title-box-2">
                        <div class="iq-title-icon">
                        </div>
                        <span class="iq-subtitle">Use Cases</span>
                        

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title">Easily set up your CI/CD
                                </h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Managed Private Registry facilitates the entire integration with your CI/CD via API. Accelerate your software releases, from development to production, while OVHcloud administers your registry, ensuring the ready availability of images and a smooth, stress-free application deployment process.
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
                                <h4 class="iq-fancy-title">Improve team collaboration</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Managed Private Registry enables the efficient and secure delivery of images, everywhere you operate. Depending on their rights, developers access approved images, reducing the risk of obsolescence. Multiple connections to the registry can take place simultaneously, further enhancing the agility of your teams.
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
                                <h4 class="iq-fancy-title">Streamline the management of images</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Manage your private storage configuration via a single, dedicated Harbor interface, or through the Harbor API. This allows you to ensure the integrity of your images, by synchronising multiple registries and automating the removal of unused images.
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



    <section class="blue-bg iq-help">
        <div class="container">
        <div class="row">
           <div class="col-lg-12">
              <div class=" text-left iq-title-box mb-0 iq-title-white iq-title-box-2">
              <div class="iq-title-icon">
                          </div>
              
              <h2 class="iq-title text-capitalize">
                Managed Private Registry Billing</h2>
                <p class="text-white">Each plan for the Managed Private Registry service includes a specific amount of stored data, concurrent connections to the registry, illimited traffic and SLAs. The service is billed per hour, in accordance with the pricing of the plan you have selected.




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

   
    <div class="container">
        <h3>Features</h3>
        <div class="row">
            <div class="col-lg-6">
                <h4>Helm Chart and Container Images

                </h4>
                <p>If you already utilise Kubernetes, or any other container management solution, you can continue managing your images using tools and processes you know and trust</p>
                <br>
                
                <h4>Dedicated Harbor Interface or Harbor API
                </h4>
                <p>Managed Private Registry offers effortless configuration management, through either an intuitive graphic interface, or the Docker registry API</p>
                <br>
                <h4>RBAC and namespaces</h4>
                <p>Offer your teams secure access to images, with the ability to configure individual rights, delivering both security and high availability</p>
                

                </p>
                <br>
                <h4>Robot accounts</h4>
                <p>Streamline and automate your processes, via the issue of a token with specific rights</p>
                <br>
                <h4>Logging</h4>
                <p>Automated logging provides complete traceability, to fulfil even the most stringent compliance requirements</p>
            </div>
            <div class="col-lg-6">
                <h4>Content Trust</h4>
                <p>Ensures that your images have been automatically validated by Docker Notary, so you can always trust their sources, without the need to manually authenticate each of them
                </p>
                <br>
                <h4>Vulnerability scanning</h4>
                <p>Automatically monitor your risk exposure, with periodic checks for common vulnerabilities</p>
                <br>
                <h4>Replication
                </h4>
                <p>Synchronise your images across multiple registries, in line with your management policies, for stress-free versioning

                </p>
                <br>
                <h4>Automated deletion</h4>
                <p>Automate the removal of unused images, to make more efficient use of your storage and simplify lifecycle management</p>
                
            </div>
        </div>
    </div>





     

@endsection