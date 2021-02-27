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
                           Instance Backup                  </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Public Cloud</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa mr-2"></i>Storage </a></li>
                                    <li class="breadcrumb-item active"> Instance Backup</li>
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
                        On-demand system backups</h2>
                       <p class="iq-title-desc pr-lg-5">As automated deployments and Infrastructure-as-Code (IaC) services become increasingly popular, a system backup is essential. That's why your instances at OVH can be backed up at any time. The server will export the instance’s disk, enabling you to industrialise your deployments.</p></div>
                       
                    </div>
                 </div>
              </div>
           </section>
    <!-- Icon-box Start -->
    <section class="iq-pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            <div class="iq-img-area">
                                <img src="{{URL::asset('images/fancy-list/01.png')}}" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title">Secure and resilient
                                </h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Instances run on hypervisors, and their system disk is located locally on them. The instance backups copy this data to another storage system, and guarantee triple replication, to ensure reliability.
                                    </p>
                                </div>

                                

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            <div class="iq-img-area">
                                <img src="{{URL::asset('images/fancy-list/03.png')}}" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title">Simplified backup and restore methods</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Instance backups behave like elements of the Private Image Catalog. Once they have been added to it, you can use them to restore the original instance, or even serve as a system image for other instances based on the same boot schemas.
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
            <p>Create a single instance backup</p>
            <code class="lead bg-dark d-block p-3 text-white rounded">openstack server image create --name inst01-bkp01 inst01</code>
            <br>
            <p>Create a rolling backup, with a log of seven entries </p>
            <code class="lead bg-dark d-block p-3 text-white rounded">openstack server backup create --rotate 7 inst01</code>
            <br>
            
            
        </div>
    </section>

    <div class="container">
        <h3>Features</h3>
        <div class="row">
            <div class="col-lg-6">
                <h4>Data exports
                </h4>
                <p>In accordance with our reversibility policy, we offer you the ability to recover your backup without any hassle, using standard tools like the OpenStack CLI.</p>
                <br>
                <hr>
                <h4>System migration to other locations</h4>
                <p>Once the backup has been created, you can perform an instance system migration by exporting it, then importing it to the Private Image Catalog of another location.</p>
            </div>
            <div class="col-lg-6">
                <h4>Rolling backups</h4>
                <p>OpenStack incorporates a rolling backup system. By specifying the number of elements included in the rotation, the system will automatically maintain its history, deleting the oldest backup when a new one is created.

                </p>
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
                Instance Backup Billing </h2>
                <p class="text-white">Instance backups are charged per GB, per hour. The prices displayed are per GB used for a full month.



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
                                    
                                    What SLA does OVHcloud offer for accessing the Instance Backup service?
                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">The SLA guarantees 99.9% monthly availability for accessing the Instance Backup service. For further information, please refer to the Terms & conditions.</p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   2">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What SLA does OVHcloud offer for data resilience on the Instance Backup service?
                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">The data resilience rate is 100% for the Instance Backup service. For further information, please refer to the Terms & conditions. </p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   3">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can I automate instance backups?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">Yes, you can use a scheduler (OpenStack Mistral) to trigger backups on a regular basis. You can schedule them manually, or you can use pre-configured, standard routines.</p>

                            </div>
                        </div>

                        
                        <div class="iq-accordion-block   4">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    How long does it take to restore a backup?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">The time will vary depending on the disk size of the instance you are restoring. An instance with a 50GB disk will take less time to restore than an instance with a 800GB disk.</p>

                            </div>
                        </div>


                        <div class="iq-accordion-block   5">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Is the instance configuration (flavor size, assigned network port) backed up?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">Some data is stored and attached to the backup, such as the instance model ID, the volume of RAM, and the disk size. Network information is not stored. However, all operating system configurations are stored.</p>

                            </div>
                        </div>


                        <div class="iq-accordion-block   6">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Are the additional volumes also backed up?
                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">No. Volumes attached to an instance must be backed up separately from the instance itself.</p>

                            </div>
                        </div>




                        

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq End -->

    
@endsection