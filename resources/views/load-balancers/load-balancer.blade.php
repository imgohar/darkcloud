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
                            The DarkCloud Load Balancer distributes the workload among your various services across our data centers. It ensures the scaling of your infrastructure in the event of heavy traffic, with optimized fault tolerance and response time. All this with a service level aiming for Zero Downtime.
                        </p>
                        <ul>
                            <li>Failproof flexibility!</li>
                            <li>Very high availability!</li>
<li>Basic and advanced tech support 24/7</li>
<li>Protection against Anti-DDoS attacks</li>
<li>Free SSLs included</li>
<li><a href="/solutions/load-balancers/features">A lot of features</a></li>
                        </ul>
                       
                        

                           
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->


        <section>
            <div class="container">
                <h3 class="text-center">Solution comparison table</h3>
                <table>
                    <tr>
                        <td></td>
                        <td>Pack 1</td>
                        <td>Pack 2</td>
                        <td>Pack 3</td>
                    </tr>
                    <tr>
                        <td>Traffic</td>
                        <td>Unlimited*</td>
                        <td>Unlimited*</td>
                        <td>Unlimited*</td>
                    </tr>
                    <tr>
                        <td>Private Network</td>
                        <td>No</td>
                        <td>Yes</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Resources</td>
                        <td>Distributed across several shared hosting servers</td>
                        <td>Distributed across several shared hosting servers</td>
                        <td>Service distributed across two Dedicated Servers</td>
                    </tr>
                </table>
            </div>
        </section>
        <section>
            <div class="container">
                <h2 class="text-center"> Product operation</h2>
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                    <img src="{{URL::asset("images/dark-cloud/lb.svg")}}" alt="lb">
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
                                Which traffic usage is calculated with our offers?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text">The entire incoming and outgoing traffic is calculated.</p>

                        </div>
                    </div>

                    <div class="iq-accordion-block   2">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                Can I switch from one solution to another?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text">You can upgrade to a superior offering in your customer control panel or by calling us.</p>

                        </div>
                    </div>


                    <div class="iq-accordion-block   3">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                Which services are compatible?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text"> All DarkCloud Cloud services are compatible with your Load Balancer: dedicated servers, Public Cloud, Private Cloud, VPS, etc.</p>

                        </div>
                    </div>

                    <div class="iq-accordion-block   4">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                Can I connect my Load Balancer to an IP outside of DarkCloud?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text"> This feature is not available at the moment. We're considering implementing it.</p>

                        </div>
                    </div>

    <section class="bg-light">
        <div class="container text-center">
            <h3>Why choose DarkCloud?</h3>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <img src="{{URL::asset('images/dark-cloud/lb2.svg')}}" alt="lb">
                    <h5>Failproof flexibility!</h5>
                </div>
                <div class="col-lg-4 col-md-6">
                    <img src="{{URL::asset('images/dark-cloud/lb3.svg')}}" alt="lb">
                    <h5>Very high availability</h5>
                </div>
                <div class="col-lg-4 col-md-6">
                    <img src="{{URL::asset('images/dark-cloud/lb4.svg')}}" alt="lb">
                    <h5>Basic and advanced tech support 24/7</h5>
                </div>
                <div class="col-lg-4 col-md-6">
                    <img src="{{URL::asset('images/dark-cloud/lb5.svg')}}" alt="lb">
                    <h5>Protection against Anti-DDoS attacks</h5>
                </div>
                <div class="col-lg-4 col-md-6">
                    <img src="{{URL::asset('images/dark-cloud/lb6.svg')}}" alt="lb">
                    <h5>Free SSLs included</h5>
                </div>
                <div class="col-lg-4 col-md-6">
                    <img src="{{URL::asset('images/dark-cloud/lb7.svg')}}" alt="lb">
                    <h5><a href="/solutions/load-balancers/features">A lot of features</a></h5>
                </div>
            </div>
        </div>
    </section>

@endsection