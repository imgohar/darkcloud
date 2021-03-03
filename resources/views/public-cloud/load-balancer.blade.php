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
                          Load Balancer                </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Public Cloud</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa mr-2"></i>Network </a></li>
                                    <li class="breadcrumb-item active"> Load Balancer</li>
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
                        Manage variable traffic loads on your application</h2>
                       <p class="iq-title-desc pr-lg-5">Access reserved for users of the Managed Kubernetes® Service.
                        <br>
                        As your business grows and your application experiences more varied traffic, it is vital to maintain the same level of service. This is why cloud applications are usually built on distributed architectures that are spread out. They are more robust, and can easily handle peak loads. With our Load Balancer, you can securely and automatically balance your application’s load in real time, across several nodes.</p></div>
                       
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
                                <h4 class="iq-fancy-title">99.99% availability
                                </h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">The DarkCloud Load Balancer is designed to deliver a high level of availability and resilience, and is also based on its own distributed architecture.
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
                                <h4 class="iq-fancy-title">Directly integrated into Kubernetes

                                </h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">The Load Balancer delivers an interface that is directly compatible with Kubernetes. This means you can easily control your Load Balancer, with native tools.
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
                                <h4 class="iq-fancy-title">Automated node management</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">If a node stops working properly, it is automatically removed from the list of available nodes for balancing. This means you can easily manage maintenance operations, preventing downtime.
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

    <div class="container">
        <h3>Specifications</h3>
        <table>
            <tr>
                <td>TCP	10,000</td><td> connections</td>
                <tr>
                <td>HTTP</td><td>	2,000 req/s</td>
            </tr>
            <tr>
                <td>Bandwidth</td><td>	200Mbit/s</td>
            </tr>
            </tr>
        </table>
    </div>


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
                                <h4 class="iq-fancy-title">Web applications with high volumes of traffic</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> Is your application generating high volumes of traffic, with an increasing number of visits? With the DarkCloud Load Balancer solution, you can manage this growth seamlessly by adding new nodes to your configuration in just a few clicks.
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
                                <h4 class="iq-fancy-title"> Variable or seasonal activity</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> Information websites and online stores can experience very quick variations in traffic volume. Whether it is increasing or decreasing, the Load Balancer will adapt how it distributes traffic.
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
                                <h4 class="iq-fancy-title">Upgrades applied with no interruptions</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">With the rolling upgrade system, your application nodes are upgraded without any interruptions, because of the Load Balancer service’s reactivity. Nodes will be automatically added and removed.
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
            <p>Create a Load Balancer</p>
            <code class="lead bg-dark d-block p-3 text-white rounded">kubectl -f apply load_balancer.yaml</code>
            <br>
            <p>Delete a Load Balancer </p>
            <code class="lead bg-dark d-block p-3 text-white rounded">kubectl delete service load-balancer</code>
            <br>
            
            
        </div>
    </section>

    <div class="container">
        <h3>Features</h3>
        <div class="row">
            <div class="col-lg-6">
                <h4>Immediate interaction
                </h4>
                <p>Create a Load Balancer in less than one minute, and update it almost instantly. This means you can be well-prepared for managing traffic spikes.</p>
                <br>
                
                <h4>Kubernetes interface</h4>
                <p>Create and manager your Load Balancer directly via Kubernetes.</p>
                <br>
                <h4>Multiple health check protocols</h4>
                <p>Define the conditions for excluding a node to fit your criteria. You can choose from: standard TCP verification (already available), an application return code, or HTTP code (available soon).</p>
                <br>
                <h4>Proxy protocol</h4>
                <p>To retain the sender’s initial address, the Load Balancer integrates Proxy Protocol. This means you can perform essential actions on the nodes such as IP address filtering, generating statistics, and analysing logs.

                </p>
            </div>
            <div class="col-lg-6">
                <h4>IP address filtering</h4>
                <p>You can choose a filtering access policy by default, and provide a restricted list of IP addresses that can connect to your solution.

                </p>
                <br>
                <h4>TLS encryption (coming soon)</h4>
                <p>Most applications communicate via a TLS encryption layer. Our Load Balancer integrates this layer using a certificate provided by the user, or managed by the service.</p>
                <br>
                <h4>Private network connections (coming soon)</h4>
                <p>To keep your application nodes isolated on the private network, the Load Balancer can be used as a pathway between public addressing and your private networks, with the DarkCloud vRack.</p>
                <br>
                <h4>Compatibility with instances (available soon)</h4>
                <p>The Load Balancer can manage several node types, like the containers provided by Kubernetes and standard instances operated by OpenStack.</p>
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
                Load Balancer billing </h2>
                <p class="text-white">The Load Balancer service is billed on an hourly basis.





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
                                    
                                    What is load balancing in the cloud?
                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">Load balancing is an operation that distributes the workload among several elements capable of performing the required task. In the cloud, load balancing is most often used for network connections that correspond to the load. These network connections are also known as service requests.</p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   2">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    How does a load balancer work?
                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">Load balancing follows rules set up by the operator. A flat or weighted distribution is most often selected when dealing with network connections alone. For example, when considering an application distribution, you can choose one according to routing rules depending on the content served, or user identification.</p>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq End -->

    
@endsection