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
                          Private Network                </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Public Cloud</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa mr-2"></i>Network </a></li>
                                    <li class="breadcrumb-item active"> Private Network</li>
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
                        A flexible, private connection between your instances</h2>
                       <p class="iq-title-desc pr-lg-5">The emergence of software-defined networks (SDNs) in cloud infrastructures has given users increased flexibility when it comes to network management. In this spirit, the OVHcloud Public Cloud lets you design and build your network architecture on demand. By creating private networks, you implement virtual switches to connect your running project instances in real time, without any service interruptions.</p></div>
                       
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
                                <h4 class="iq-fancy-title">Extended networks between regions

                                </h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Our private network is built on OVHcloud vRack technology. With this solution, you can extend private networks between OVHcloud datacentres, to create secure and private connections between instances across the globe.
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
                                <h4 class="iq-fancy-title">Isolation


                                </h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">You can create up to 4,000 layer 2 private networks. When you launch a Private Network, you create a new VLAN and only the resources connected to it can communicate with the VLAN. This isolation can be used to segment control plane and data plane networks.
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
                                <h4 class="iq-fancy-title">Extension to other OVHcloud services</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">You can also use the vRack to connect different OVHcloud services to one another. For example, you can use your Private Network to connect your Public Cloud to Private Cloud or dedicated servers. This means you can create the hybrid infrastructures you need, while keeping your connections private.
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
                                <h4 class="iq-fancy-title">Multi-region disaster recovery plans (DRP)</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">The Public Cloud is available in most OVHcloud datacentres, which means that setting up a disaster recovery plan (DRP) is very viable. You can sync your data via a secure channel to organise a simple, efficient DRP.
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
                                <h4 class="iq-fancy-title">Terraform deployment industrialisation</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> Terraform's OpenStack driver is used to manage the OVHcloud Public Cloud's Private Networks. If you are looking to deploy complex infrastructures that are difficult to industrialise, you can do so with resources like networks, subnets and ports via this Infrastructure-as-Code (IaC) tool.
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
                                <h4 class="iq-fancy-title">Load balancing between locations</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">You can deploy a distributed application across multiple locations, without sacrificing the security and reliability of collaborative communications between nodes.  This means that data from the same application or cluster can move between locations, with quick response times and full isolation.
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
            <h2>Usage</h2>
            <br>
            <p>Create a Private Network</p>
            <code class="lead bg-dark d-block p-3 text-white rounded">openstack network create net01</code>
            <br>
            <p>Create a subnet with DHCP </p>
            <code class="lead bg-dark d-block p-3 text-white rounded">openstack subnet create subnet01 --network net01 --subnet-range 10.0.0.0/8</code>
            <br>
            
            
        </div>
    </section>

    <div class="container">
        <h3>Features</h3>
        <div class="row">
            <div class="col-lg-6">
                <h4>DHCP servers

                </h4>
                <p>When you create a network, you can choose to use addressing via DHCP. If you choose this option, a DHCP server will be launched on the network to serve your settings.</p>
                <br>
                
                <h4>DNS integration
                </h4>
                <p>The DHCP configuration can include the definition of the DNS servers that should serve your network. This way, you can point to the DNS server of your choice.</p>
                <br>
                <h4>Range definition</h4>
                <p>DHCP servers can serve a specific CIDR configuration, targeting only a part of the IP address range you have chosen.</p>
                

                </p>
            </div>
            <div class="col-lg-6">
                <h4>Fixed or dynamic addresses</h4>
                <p>You can choose specific addresses in the network range for a port or instance. You will always need to configure this via DHCP, but you will retain control over the addressing plan by doing so.
                </p>
                <br>
                <h4>Unattached ports</h4>
                <p>Private networks' ports are independent of their instances, so you can detach a port from an instance without losing it. This can be useful for projects that involve infrastructure orchestration.</p>
                
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
                Private Network Billing</h2>
                <p class="text-white">Private Networks and their traffic are both free of charge.




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
                                    
                                    How many private networks can I create?
                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">The technical limit is 4,000 private networks, but you may find that there is a quota limit for your project. You can request a quota increase via the OVHcloud Control Panel.</p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   2">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can I manage addressing manually, or any way other than DHCP?
                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">If you want to manage addressing differently, you can do this as you would with any other layer 2 network.</p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   3">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can I connect my Public Cloud instances to the same private network as my dedicated server or Hosted Private Cloud?
                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">Yes, all OVHcloud private networks are managed by our vRack technology. This means you can extend private networks between different services. Simply attach the same vRack to each of the solutions.</p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   4">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can I connect two instances located on each side of the Atlantic via a Private Network, or any other location?
                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">Yes. Once your project is connected to a vRack, all active locations can communicate with each other. Simply use the same VLAN number when creating private networks in each region.</p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   5">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What is the average latency between datacentres via a Private Network?
                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">As an indication, here are some average measures. These values may change over time:
                                    <br>
                                    Europe - Europe
                                    <br>
                                    Strasbourg - Gravelines: 12 ms
                                    <br>
                                    Strasbourg - Frankfurt: 4 ms
                                    <br>
                                    Strasbourg - Wrocław: 24 ms
                                    <br>
                                    Strasbourg - London: 15 ms
                                    <br>
                                    London - Wrocław: 31 ms
                                    <br>
                                    <br>
                                    Europe - North America
                                    <br>
                                    London - Beauharnois: 77 ms
                                    <br>
                                    Wrocław - Beauharnois: 111 ms
                                    <br>
                                    Strasbourg - Beauharnois: 91 ms
                                    <br>
                                    <br>
                                    Europe - Asia-Pacific
                                    <br>
                                    Strasbourg - Singapore: 148 ms
                                   <br>
                                    Strasbourg - Sydney: 288 ms
                                    <br>
                                    <br>
                                    Asia-Pacific - Asia-Pacific
                                    <br>
                                    Sydney - Singapore: 149 ms

                                    <br>
                                    <br>
                                    Asia-Pacific - North America
                                    <br>
                                    Singapore - Beauharnois: 234 ms
                                    <br>
                                    Sydney - Beauharnois: 204 ms</p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   6">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    By default, do instances automatically configure the address provided by DHCP?
                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text"></p>

                            </div>
                        </div>

                        


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq End -->

    
@endsection