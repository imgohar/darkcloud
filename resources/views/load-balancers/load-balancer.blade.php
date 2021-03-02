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
                           Load balancer                   </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Network and security solutions</a></li>
                                    <li class="breadcrumb-item active"> 
                                        Load Balancer
                                    </li>
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
                        <span class="iq-subtitle">Network and security</span>
                        <h2 class="iq-title">Load Balancers</h2>
                        <p class="iq-title-desc">All our Cloud products can be scaled up or out with no constraints, in all our data centers.
                            <br>
                            The OVH Load Balancer distributes the workload among your various services across our data centers. It ensures the scaling of your infrastructure in the event of heavy traffic, with optimized fault tolerance and response time. All this with a service level aiming for Zero Downtime.
                        </p>
                        <ul>
                            <li>Failproof flexibility!</li>
                            <li>Very high availability!</li>
<li>Basic and advanced tech support 24/7</li>
<li>Protection against Anti-DDoS attacks</li>
<li>Free SSLs included</li>
<li><a href="">A lot of features</a></li>
                        </ul>
                       
                        

                           
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
                            {{-- <span class="iq-subtitle">Connectivity</span> --}}
                            <h2 class="iq-title">Connectivity
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="iq-icon-box iq-icon-box-style-1">
                           
                            <div class="icon-box-content">
                                <img src="{{URL::asset('images/dark-cloud/n-a-s-1.png')}}"  alt="QLOUD">
                                <h5 class="icon-box-title"> <a>Private network (vRack)
                                </a>
          </h5>
                                <p class="icon-box-desc">Your physical private network will make it possible to securely interconnect and isolate your servers. With the vRack, build a global cloud infrastructure, no matter where your machines are located.
                                    <br>
                                    Included with a range of OVH services

                                </p>
                                <br>
                                <a href="/solutions/vrack">Discover the vRack solution</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="iq-icon-box iq-icon-box-style-1">
                            
                            <div class="icon-box-content">
                                <img src="{{URL::asset('images/dark-cloud/n-a-s-2.png')}}" alt="QLOUD">
                                <h5 class="icon-box-title"> <a href="javascript:void(0)">OVHCloud Connect

                                </a>
          </h5>
                                <p class="icon-box-desc"> As a true hybrid solution, OVHCloud Connect allows you to interconnect your own network to your infrastructures hosted in our data centers. Deploy your cloud through a private, secure and high-performance network.
                                    <br> <br>
                                    From: $479.00/month
                                </p>
                                <br>
                                <a href="">Discover the OVHCloud Connect solution</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="iq-icon-box iq-icon-box-style-1">
                            
                            <div class="icon-box-content">
                                <img src="{{URL::asset('images/dark-cloud/n-a-s-3.png')}}" alt="QLOUD">
                                <h5 class="icon-box-title"> <a href="javascript:void(0)">Additional IPs and IP blocks
                                </a>
          </h5>
                                <p class="icon-box-desc">IP addresses and blocks offer you flexibility in the development of your projects. With the fail-over IP, you can switch from one server to another if necessary or expand your business internationally with addresses located in the target country.
                                <br><br>
                                From: $3.00 /IP
                                </p>
                                <br>
                                <a href="/bare-metal-ip">Discover additional IPs and IP blocks</a>
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
                        {{-- <span class="iq-subtitle">Features</span> --}}
                        <h2 class="iq-title">
                     Traffic Management  </h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            <div class="iq-img-area">
                                <img src="{{URL::asset('images/dark-cloud/n-a-s-4.png')}}" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title"> Load balancing</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Ensure flexibility and high availability for your products with the OVH Load Balancer. The traffic load of your services is distributed among your different IP addresses for optimal response time and performance.
                                        <br><br>
                                        From: $22.99/month

                                    </p>
                                    <br>
                                    <p><a href="/bare-metal-ip">Discover the OVH Load Balancer</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            <div class="iq-img-area">
                                <img src="{{URL::asset('images/dark-cloud/n-a-s-5.png')}}" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title"> Anti-DDoS</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> Included with all our services, the OVH Anti-DDoS offers powerful permanent protection against distributed denial of service attacks. In the event of an attack, your activities won’t be affected.
                                    <br><br>
                                    Included with our OVH services

                                    </p>
                                    <br>
                                    <p><a href="/anti-ddos">Discover the OVH Anti-DDoS</a></p>
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

    <section style="background: #0D1F67;color: #fff">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="row">
                        
                        <div class="col-lg-5 text-center">
                            <img src="{{URL::asset('images/dark-cloud/n-a-s-6.png')}}" alt="network security">
                            <h4 class="text-white">Why securing my infrastructure?</h4>
                            <p>
                                Small and large companies may one day find themselves exposed to an attempted attack, whether it is directed against you or not. The most common is the DDoS attack, which consists in making the service unavailable by saturating the server with a barrage of requests. Inadequate support for the security of your infrastructure can also expose you to data leakage or loss. Don’t wait for an incident to occur before taking action.</p>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-5 text-center">
                            <img src="{{URL::asset('images/dark-cloud/n-a-s-7.png')}}" alt="network security">
                            <h4 class="text-white">How can I make my cloud secure?</h4>
                            <p>
                                Choosing Secure by design, a cloud designed for security, is the best solution to protect your business from any incident. Training and raising awareness among your teams is also essential in order to be as well prepared for any situation as possible. Our teams are at your disposal to support you in this process.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection