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
                           Features of Load balancer                   </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Network and security solutions</a></li>
                                    <li class="breadcrumb-item"> 
                                        <a href="/solutions/load-balancers">Load Balancer</a>
                                    </li>
                                    <li class="breadcrumb-item active"> 
                                        Features
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

    <section>
        <div class="text-center container">
            <h3>Features</h3>
            <p>The OVH Load Balancer was designed with simplicity in mind, and can be configured in just a few clicks, while still allowing advanced users to make the most of its features. A full breakdown of its capabilities can be found below:</p>

            <h3 class="m-5">Basic Features</h3>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <h4>A simple, intuitive Control Panel</h4>
                    <p>Configure and monitor your infrastructures from A to Z with our Control Panel.

                    </p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4>Free SSL encryption</h4>
                    <p>The Let's Encrypt DV SSL certificates are now included in all of our Load Balancer solutions – completely free – and will activate HTTPS protocol by default.

                    </p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4>
                        Anycast</h4>
                    <p>The Anycast DNS system means that the server nearest to your user’s location will load your website, improving load times.

                    </p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4>
                        Monitoring</h4>
                    <p>Use metrics to monitor your Load Balancer's load and outgoing requests to your servers. This information can then be used to maximise your system’s performance!

                    </p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4>
                        Advanced probes</h4>
                    <p>Optimise server usage in your farms, using our advanced probes, which are adaptable to most situations.

                    </p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4>
                        Failover IP</h4>
                    <p>If you migrate your load balancing IP from one Load Balancer solution to another, it will work without any interruptions, allowing you to mitigate hardware issues, excessive loads on your infrastructures, and much more.

                    </p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4>
                        Prioritise your traffic distribution</h4>
                    <p>Optimise the distribution of requests to your servers using the various distribution algorithms (the server bearing the smallest load, the last server used by your customer, or depending on the URL). The choice is yours!
                    </p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4>
                        
Anti-DDoS protection</h4>
                    <p>Get our anti-DDoS L4 system, specially optimised for load balancing, with powerful mitigation. All TCP connections are checked in real time!
                    </p>
                </div>
            </div>
            <hr>
                <h3 class="m-5">Intermediate Features</h3>
                <div class="row">
                <div class="col-lg-4 col-md-6">
                    <h4>
                        
                        API</h4>
                    <p>Manage your Load Balancer, automate tasks, and integrate your Load Balancer into your processes and developments using the features available from the OVH and OpenStack API.


                    </p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4>
                        
                        HSTS
</h4>
                    <p>With HTTP Strict Transport Security, you can effortlessly optimise your websites’ security by using a secure connection to access them. You won't need to configure anything on your web server – everything is managed by your Load Balancer!


                    </p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4>
                        
                        SSL between LB and server farms
</h4>
                    <p>Maintain a high level of security and process HTTPS requests by activating SSL on your Load Balancer, as well as between your Load Balancer and servers!


                    </p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4>
                        
                        vRack
</h4>
                    <p>Connect the Load Balancer to your vRack and enjoy the isolation offered by a private network.

                    </p>
                </div>

            </div>


            <hr>
                <h3 class="m-5">Advanced features</h3>
                <div class="row">
                <div class="col-lg-4 col-md-6">
                    <h4>
                        
                        Routing/ACL</h4>
                    <p>Go even further with your Load Balancer! Route, redirect or reject traffic depending on the HTTP method used, or even the value of a cookie or an HTTP header.




                    </p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4>
                        
                        Advanced probes
</h4>
                    <p>Use advanced probes to optimise your server usage and monitoring. With these probes, you can finely configure the way your Load Balancer verifies the status of your servers. This way, you can choose to keep a server in the farm, or temporarily remove it to avoid any impact on your service, when necessary.

                    </p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4>
                        
                        Proxy protocol management
</h4>
                    <p>With its TCP front-ends and farms, you can track your customers' information and connections to your servers, the same way an HTTP X-Forwarded-For works in HTTP mode.




                    </p>
                </div>
               

            </div>


        </div>
    </section>

@endsection