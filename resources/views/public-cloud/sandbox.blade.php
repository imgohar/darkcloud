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
                           Sandbox                      </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Public Cloud</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa mr-2"></i>Compute </a></li>
                                    <li class="breadcrumb-item active"> Sandbox</li>
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
                        Small instances at the best price, available on demand </h2>
                       <p class="iq-title-desc pr-lg-5">These cloud servers are based on shared resources, and offer the same features as those with guaranteed resources at a lower cost. You can get from instances that are managed the same way, and you can use the same tools to deploy tests and developments on a flexible platform while benefiting from an unbeatable feature/price ratio.</p></div>
                       
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
                                <h4 class="iq-fancy-title">All the features of a premium cloud server</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Sandbox instances are part of the Public Cloud ecosystem, which includes all the OpenStack APIs and management tools. You can use sandbox instances to safely test and develop applications, for example. 
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
                                <h4 class="iq-fancy-title"> Perfect for building a software factory</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> Sandbox instances are perfectly suited to meet the needs of continuous integration and deployment (CI/CD) systems. Tools like Jenkins, GitLab CI and others connect directly to OpenStack APIs to orchestrate your integration tests.
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
                                <h4 class="iq-fancy-title"> Horizontal scalability</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> Need to boot hundreds of instances to check your application’s horizontal scaling capabilities, or just simulate a large number of workers? These cloud servers are deployed in a matter of seconds, and can be used to test these scenarios at full scale
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
            <h2>How To</h2>
            <br>
            <p>Boot an instance</p>
            <code class="lead bg-dark d-block p-3 text-white rounded">openstack server create --flavor s1-4 --image debian server01</code>
            <br>
            <p>Boot 100 instances of the same type</p>
            <code class="lead bg-dark d-block p-3 text-white rounded">openstack server create --flavor s1-4 --image debian</code>
            <br>
            
        </div>
    </section>

    <section>
        <div class="container">
            <h2>Features</h2>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <h4>Resize</h4>
                    <p>Start with the smallest instance from the catalogue, and upscale it to suit your changing needs.</p>
                    <br><br>
                    <h4>Network connection</h4>
                    <p>As with the Guaranteed Resources range, these instances have great network performance. Build flexible, scalable architectures and scale up while instances are running. 



                    </p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h4>Adding volumes</h4>
                    <p>As with all other instances, you can add storage volumes to increase the available space on cloud servers.</p>
                    <br><br>
                   

                </div>

            </div>
        </div>
    </section>

    <section class="blue-bg iq-help">
        <div class="container">
        <div class="row">
           <div class="col-lg-12">
              <div class=" text-left iq-title-box mb-0 iq-title-white iq-title-box-2">
              <div class="iq-title-icon">
                          </div>
              
              <h2 class="iq-title text-capitalize">
                Sandbox billing   </h2>
                <p class="text-white">Sandbox instances are the most accessible of the range. Like all other instances, they are "pay-as-you-go". You receive an invoice at the beginning of each month and the price varies depending on the size and duration of the instance. </p>
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
                                    What SLA does OVHcloud guarantee for a Sandbox instance?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">The SLA guarantees 99.95% monthly availability on Sandbox instances. For further information, please refer to the Terms & conditions. </p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   2">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can I resize a Sandbox instance?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text"> Yes, you can increase the size of Sandbox instances. However, the size cannot be reduced. </p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   3">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can I upgrade a Sandbox instance to a Guaranteed Resources instance?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text"> Yes, a Sandbox instance can be upgraded to a more powerful instance, like the models from the Guaranteed Resources range. This would mean they get 100% of the allocated power.</p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   4">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Do Sandbox instances have any specific restrictions?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">No, Sandbox instances are used the same way as other instances, and have the same features.</p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   5">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What regions are Sandbox instances available in?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">The Public Cloud solution is available in Europe (Gravelines, Strasbourg, London, Frankfurt, Warsaw), North America (Beauharnois) and the Asia-Pacific region (Sydney, Singapore). </p>

                            </div>
                        </div>


                        <div class="iq-accordion-block   6">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can I switch to hourly billing from an instance that is currently billed monthly?


                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">If you have monthly billing set up, you cannot switch to hourly billing. Before you launch an instance, please take care to select the billing method that is best suited to your project. </p>

                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq End -->

    
@endsection