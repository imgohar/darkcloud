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
                           Managed Bare Metal                      </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Bare Metal Cloud</a></li>
                                    <li class="breadcrumb-item active"> Managed Bare metal</li>
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
                        <span class="iq-subtitle">Managed Bare Metal</span>
                        <h2 class="iq-title">VMware virtualisation managed and operated by DarkCloud</h2>
                        <p class="iq-title-desc">A fully-dedicated virtual infrastructure, hosted and managed by DarkCloud, and available in 90 minutes.
                        </p>
                        <p>
                            With the Managed Bare Metal Essentials range, opt for highly available VMware virtualisation, and stay focused on your business.


                        </p>
                        

                            
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->


        {{-- <img src="{{URL::asset('images/others/shape1.png')}}" class="img-fluid shape-left" alt="QLOUD"> --}}
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 ">
                    <div class="iq-title-box iq-title-default iq-title-box-2">
                        <div class="iq-title-icon">
                        </div>
                        {{-- <span class="iq-subtitle">Managed Bare Metal</span> --}}
                        <h2 class="iq-title">A working platform in just a few hours</h2>
                        <p class="iq-title-desc">Launch your Managed Bare Metal Essentials solution, and get fully-integrated virtual environments based on VMware. You can deploy your applications and websites in just a few minutes, without needing to worry about the hardware and virtual infrastructure. Our teams configure and optimise the platform, then ensure that it remains operational.
                        </p>                
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 mb-lg-0 mb-5">
                <img src="{{URL::asset('images/dark-cloud/manage-bm-1.png')}}" class="img-fluid" alt="qloud">
                    
                    </div>
                </div>
            
            <div class="row">
                <div class="col-lg-6 col-sm-12 mb-lg-0 mb-5">
                    <img src="{{URL::asset('images/dark-cloud/manage-bm-2.png')}}" class="img-fluid" alt="qloud">
                        
                        </div>
                <div class="col-lg-6 col-sm-12 ">
                    <div class="iq-title-box iq-title-default iq-title-box-2">
                        <div class="iq-title-icon">
                        </div>
                        {{-- <span class="iq-subtitle">Managed Bare Metal</span> --}}
                        <h2 class="iq-title">High-availability virtualisation</h2>
                        <p class="iq-title-desc">Host your most critical applications with total peace of mind. The Managed Bare Metal Essentials solution has a 99.7% SLA, guaranteeing high availability for your business applications. If one of the platform’s components goes down, our teams provide you with new, pre-configured hardware.
                        </p>                
                    </div>
                </div>
                
                </div>
            </div>
        </div>
        
    


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
                            What makes the Managed Bare Metal product different? </h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            <div class="iq-img-area">
                                <img src="{{URL::asset('images/fancy-list/01.png')}}" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title"> Dedicated performance</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">With optimised bare-metal servers, high-performance storage and a high-bandwidth network, Managed Bare Metal offers an excellent price-performance ratio. You can host any applications — from the simplest to the most resource-intensive — on this fully-dedicated hardware infrastructure.
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
                                <img src="{{URL::asset('images/fancy-list/02.png')}}" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title">Unparalleled scalability</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> Managed Bare Metal is designed to scale up in line with your needs. This solution is delivered with two hosts and two datastores. You can add and delete resources in a few minutes, from the vSphere interface or the DarkCloud Control Panel. Please note that new resources can be used on a monthly or hourly basis.


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
                                <h4 class="iq-fancy-title"> The best of virtualisation</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Access all VMware features, and use templates created specifically by our teams to deploy multiple virtual machines (VMs) quickly. You can choose from a wide range of distributions and operating systems.
                                    </p>
                                    <br>
                                    
                                    
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
                                <h4 class="iq-fancy-title"> Cost control</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Each pack from the Essentials range includes servers, storage, network and VMware licences. The platform is managed by DarkCloud teams, so you can reduce your costs for all IT operations (configuration, supervision and maintenance).
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
                                <h4 class="iq-fancy-title"> A high-bandwidth network</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Get 3Gbit/s public and private bandwidth, to transfer your data within your platform and offer it to your users and customers via the internet. Both ingress and egress traffic are unlimited, and included.
                                    </p>
                                    <br>
                                    
                                </div>

                               
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            <div class="iq-img-area">
                                <img src="{{URL::asset('images/fancy-list/04.png')}}" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title">SOC and ISO 27001 certified datacentres</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Managed Bare Metal is available in our network of datacentres across the globe. They all hold ISO 27001 certifications, as well as SOC I and II type 2.
                                    </p>
                                   
                                </div>

                               
                            </div>
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
    <!-- Icon-box End -->


     <!-- Pricing Start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center iq-title-box iq-title-default iq-title-box-2">
                        <div class="iq-title-icon">
                        </div>
                        {{-- <span class="iq-subtitle">Pricing</span> --}}
                        <h2 class="iq-title">
							Options compatible with Managed Bare Metal Essentials	</h2>

                            <a href="">Explore our options</a>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="iq-price-container iq-price-table-6 text-center iq-box-shadow">
                        <div class="iq-price-header">
                            <span class="iq-price-label">AUTOMATIC BACKUP</span>
                            <h4 class="iq-price">$6.74
                                <span class="iq-price-desc"></span></h4>
                           <p>/VM/month</p>

                           <h5>with Veeam Backup</h5>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="iq-price-container iq-price-table-6 text-center active iq-box-shadow">
                        <div class="iq-price-header">
                            <span class="iq-price-label">DISASTER RECOVERY PLAN</span>
                            <h4 class="iq-price">$33.69
                                </h4>
                            <p class="iq-price-description">/VM/month</p>
                            <h5>with Zerto</h5>
                        </div>
                        
                       

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="iq-price-container iq-price-table-6 text-center iq-box-shadow">
                        <div class="iq-price-header">
                            <span class="iq-price-label">ADDITIONAL FLOATING IPS</span>
                            <h4 class="iq-price">$2.24<span class="iq-price-desc"></span></h4>
                            <p>/ip</p>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    <!-- Pricing End -->
   


   <!-- Faq Start -->
   <section class="iq-pricing-section">
    <div class="container">
        <h2>FAQ</h2>
        <div class="row">
            <div class="col-lg-12">
                <div class="iq-accordion  iq-accordion-semi-round iq-accordion-classic">

                    <div class="iq-accordion-block  1 accordion-active">
                        <div class="iq-accordion-title" style="">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                What does Managed Bare Metal mean?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text">Managed Bare Metal is a private infrastructure. It includes dedicated servers, storage, network and virtualisation licences, which are managed and operated by DarkCloud. </p>

                        </div>
                    </div>

                    <div class="iq-accordion-block   2">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                What is the Essentials range?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text">The Essentials range combines the Managed Bare Metal solution with the VMware vSphere Enterprise Plus virtualisation licence. This means you get a high-performance infrastructure managed by DarkCloud, so you can focus on your business applications securely. </p>

                        </div>
                    </div>

                    <div class="iq-accordion-block   3">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                What are the advantages of a platform operated and managed by DarkCloud?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text"> With Managed Bare Metal, you manage your virtualisation solution. We manage configuration, optimisation and operational maintenance for your physical infrastructure. We also manage updates for your service (security, version upgrades and configuration). </p>

                        </div>
                    </div>

                    <div class="iq-accordion-block   4">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                What is the price/performance ratio?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text">We offer a balanced CPU/RAM/price ratio, to deliver the best performance for your needs. This way, you get access to a high-performance solution with great value for money. </p>

                        </div>
                    </div>

                    <div class="iq-accordion-block   5">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                Is my bandwidth limited?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text">In all of our packs, we include public and private bandwidth — each of which has a 3Gbit/s limit. Incoming and outgoing traffic is unlimited and included. </p>

                        </div>
                    </div>


                    <div class="iq-accordion-block   6">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                Is my Managed Bare Metal solution backed up?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text">Your backup storage is included in the solution. This service is managed directly by DarkCloud. You can also enable the Veeam Managed Backup automatic backup option. Choose your backup level directly at the virtual machine (VM) level, to suit your needs. </p>

                        </div>
                    </div>


                    <div class="iq-accordion-block   7">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                Are my resources guaranteed?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text">Managed Bare Metal is an infrastructure based on dedicated physical servers. This means all of the platform’s resources are allocated to you.</p>

                        </div>
                    </div>


                    <div class="iq-accordion-block   8">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                Where is Managed Bare Metal located?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text">You can choose the datacentre location when you choose your pack. To set up a disaster recovery plan (DRP), you can also enable the Zerto option. </p>

                        </div>
                    </div>

                    <div class="iq-accordion-block   9">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                How do I manage my service?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text">The VMware vSphere Enterprise Plus licence is integrated into all of our packs. This means you can manage your virtualised platforms however you like, via vSphere. We take care of the configuration and software updates.</p>

                        </div>
                    </div>

                    <div class="iq-accordion-block   10">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                Why choose dedicated server virtualisation?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text">By virtualising a dedicated server, you can deploy a fleet of virtual machines that are sized to suit your needs. A virtualisation solution offers many advantages, such as control over your infrastructure and the budget you allocate to it. Resources are better provisioned, and you can harness all the raw power delivered by a dedicated server. This is a significant advantage. Your infrastructure administration is centralised and simplified, with an overview for optimal monitoring. By virtualising your server, you can make your service scalable and flexible. It will then be perfect for adapting to different project stages, or fluctuating workloads.</p>

                        </div>
                    </div>
                    <div class="iq-accordion-block   11">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                What is a remotely-managed dedicated server?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text">A managed dedicated server is a physical machine you do not have to worry about managing. Monitoring and hardware maintenance are managed by the hosting provider, so you do not have to deal with common operating constraints. A dedicated server is hosted in a datacentre with all the professional equipment you need for a high-performance network, a redundant power supply, and constant uptime. </p>

                        </div>
                    </div>
                    <div class="iq-accordion-block   12">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                How are the Managed Bare Metal Essentials packs different from a remotely-managed dedicated server?
                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text">Both solutions are maintained and monitored by the service provider. The difference is that Managed Bare Metal Essentials is an DarkCloud solution, based in part on dedicated servers. We add network, storage, and virtualisation services into a single service. This means you can focus entirely on your business and developments — because we manage your servers, as well as the virtualisation system.</p>

                        </div>
                    </div>
                    




                </div>
            </div>
        </div>
    </div>
</section>
<!-- Faq End -->



@endsection