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
                           Volume Snapshot                   </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Public Cloud</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa mr-2"></i>Storage </a></li>
                                    <li class="breadcrumb-item active"> Volume Snapshot</li>
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
                        Snapshots let you go back in time</h2>
                       <p class="iq-title-desc pr-lg-5">When managing infrastructures and applications, the ability to go back is a key part of your overall security. Volume snapshots give you peace of mind when working with important data during tasks like updating or cleaning databases. With this service, you can "capture" the status of a volume's information at a given time, while carrying on using it as normal. You can then restore your data to its state at the time the snapshot was taken, should this ever prove necessary.</p></div>
                       
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
                                <h4 class="iq-fancy-title">Near-instantaneous snapshots</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Snapshots are hosted in the same place as volumes, in Ceph storage clusters. They work according to the copy-on-write principle, and are therefore almost instantaneous. During a change, the data is copied on a case-by-case basis for each block.
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
                                <h4 class="iq-fancy-title"> Create new volumes

                                </h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">A snapshot can be used to create new volumes, opening up further opportunities for industrialisation. In particular, you can freeze the status of a dataset at several points during a deployment, then use the snapshot as a source when creating new volumes that replicate this information.
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
                                <h4 class="iq-fancy-title">Triple replication</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Volume snapshots are not backups. However, they still benefit from the triple-replication capabilities of the Ceph clusters, managed by DarkCloud, ensuring they offer the same reliability.
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
            <p>Create a snapshot</p>
            <code class="lead bg-dark d-block p-3 text-white rounded">openstack volume snapshot create --volume vol01 snap01</code>
            <br>
            <p>Restore a snapshot on a new volume</p>
            <code class="lead bg-dark d-block p-3 text-white rounded">openstack volume create --snapshot snap01 vol02</code>
            <br>
            
            
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
                Volume Snapshot Billing </h2>
                <p class="text-white">Volume snapshots are charged per GB, per hour. The prices shown are for one month of complete storage.



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
                                    
                                    What SLA does DarkCloud offer for accessing the Volume Snapshot service?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">The SLA guarantees 99.9% monthly availability for accessing the Volume Snapshot service. For further information, please refer to the Terms & conditions.</p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   2">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What SLA does DarkCloud offer for data resilience on the service?
                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">The data resilience rate is 100% on the Volume Snapshot service. For further information, please refer to the Terms & conditions. </p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   3">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What is the difference between a volume snapshot and a backup?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">In both cases, the goal is to set data aside and revert to it later. Generally, a backup is stored on a separate platform to the one where the original data is located. However, volume snapshots remain stored on the same storage platform.</p>

                            </div>
                        </div>

                        
                        <div class="iq-accordion-block   4">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    How long can I keep a volume snapshot for?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">There is no time limit for keeping a volume snapshot.</p>

                            </div>
                        </div>


                        <div class="iq-accordion-block   5">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What is the recommended size limit for a volume snapshot?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">We recommend not exceeding 4TB for a volume snapshot.</p>

                            </div>
                        </div>


                        <div class="iq-accordion-block   6">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can I create multiple volume snapshots from a single volume?
                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">Yes, there is no limit to the number of volume snapshots attached to a volume.</p>

                            </div>
                        </div>




                        

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq End -->

    
@endsection