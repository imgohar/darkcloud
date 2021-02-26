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
                           Network                       </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Public Cloud</a></li>
                                    <li class="breadcrumb-item active"> Network</li>
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
        <img src="images/others/shape1.png" class="img-fluid shape-right" alt="QLOUD">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 mb-lg-0 mb-5">
                    <img src="images/others/02.png" class="img-fluid" alt="qloud">
                </div>
                <div class="col-lg-6 col-sm-12 ">
                    <div class="iq-title-box iq-title-default iq-title-box-2">
                        <div class="iq-title-icon">
                        </div>
                        <span class="iq-subtitle">Network</span>
                        <h2 class="iq-title">20 years of network expertise</h2>
                        <p class="iq-title-desc">DarkCloud manages and maintains its own global network. Over the years, we have developed deep expertise and offered innovative products, such as the vRack, which lets you interconnect your solutions across different regions within a secure private network. Our powerful anti-DDoS technology is also included in all our solutions. </p>
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
                        <span class="iq-subtitle">Network</span>
                        <h2 class="iq-title">Our cloud network solutions</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="iq-icon-box iq-icon-box-style-1">
                        <div class="icon-box-img">
                            <img src="images/icon-box/01.png" class="img-fluid" alt="QLOUD">
                        </div>
                        <div class="icon-box-content">
                            <h5 class="icon-box-title"> <a href="/public-cloud/load-balancer">Load Balancer</a>
      </h5>
                            <p class="icon-box-desc"> Manage variations in activity by distributing traffic across multiple resources</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="iq-icon-box iq-icon-box-style-1">
                        <div class="icon-box-img">
                            <img src="images/icon-box/02.png" class="img-fluid" alt="QLOUD">
                        </div>
                        <div class="icon-box-content">
                            <h5 class="icon-box-title"> <a href="/public-cloud/private-network">Private Network</a>
      </h5>
                            <p class="icon-box-desc">Deploy private networks, supported by DarkCloud vRack, to connect your instances across the globe </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="iq-icon-box iq-icon-box-style-1">
                        <div class="icon-box-img">
                            <img src="images/icon-box/03.png" class="img-fluid" alt="QLOUD"> </div>
                        <div class="icon-box-content">
                            <h5 class="icon-box-title"> <a href="javascript:void(0)">Anti DDos </a>
      </h5>
                            <p class="icon-box-desc"> Enjoy permanent protection across all your cloud resources, to ensure an optimal level of service </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="iq-icon-box iq-icon-box-style-1  ">
                        <div class="icon-box-img">
                            <img src="images/icon-box/04.png" class="img-fluid" alt="QLOUD"> </div>
                        <div class="icon-box-content">
                            <h5 class="icon-box-title"> <a href="javascript:void(0)">Floating IP</a>
      </h5>
                            <p class="icon-box-desc">Assign and move your public IP from one instance to another </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="iq-icon-box iq-icon-box-style-1  ">
                        <div class="icon-box-img">
                            <img src="images/icon-box/05.png" class="img-fluid" alt="QLOUD"> </div>
                        <div class="icon-box-content">
                            <h5 class="icon-box-title"> <a href="javascript:void(0)">Virtual Router</a>
      </h5>

                            <p class="icon-box-desc">Route private networks to each other and/or to the Internet</p>
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
            <p>Create a private network</p>
            <code class="bg-dark d-block p-3 text-white rounded">openstack network create net01</code>
            <br>
            <p>Activate the DHCP</p>
            <code class="bg-dark d-block p-3 text-white rounded">openstack subnet create --dhcp --network net01 10.0.0.0/8</code>
            <br>
            
            
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
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            <div class="iq-img-area">
                                <img src="images/fancy-list/01.png" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title"> Extended private network</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">The OVH private network (vRack) can be used to create an internal network between services on the same OVH account. For example, you could connect Public Cloud instances with the Private Cloud and dedicated servers to build your own secure infrastructure.
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
                                <img src="images/fancy-list/02.png" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title"> Traffic</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> There are no additional charges for outgoing or incoming traffic (except for our Sydney and Singapore datacentres). We do not charge for data traffic over the internet, which keeps billing clear and predictable.
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
                                <img src="images/fancy-list/03.png" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title"> Anti-DDoS</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">All DarkCloud instances include our industry-leading anti-DDoS protection at no additional cost. This ensures you are always covered in the event of an attack.
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
    </section>
    <!-- Icon-box End -->


    


@endsection