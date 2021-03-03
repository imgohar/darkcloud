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
                           Block Storage                      </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Public Cloud</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa mr-2"></i>Storage </a></li>
                                    <li class="breadcrumb-item active"> Block Storage</li>
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
                        Secure and flexible storage volumes available on demand.  </h2>
                       <p class="iq-title-desc pr-lg-5">When persistent storage requirements increase, you can instantly meet growing demands by hot-adding extra disks to increase the instance’s capacity. These volumes are securely hosted in our clusters, and can be used to meet the requirements of applications that handle large volumes of data.</p></div>
                       
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
                                <h4 class="iq-fancy-title"> Secured by replication</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">The volumes on each cluster are triple-replicated on three separate disks. Better than a traditional RAID system, the information is distributed on different servers. This ensures the durability of the data in any situation.
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
                                <h4 class="iq-fancy-title"> Based on Ceph</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Ceph is an open-source technology. This allows you to manage demanding, industrial-scale environments, ensuring the scalability of clusters and the reliability of the service. DarkCloud is a partner of the Ceph Foundation, and is investing in the development of this essential building block for DarkCloud.
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
        <h3>Our Block Storage range</h3>
        <div class="row">
            <div class="col-lg-6">
                <h4>Standard</h4>
                <ul>
                    <li>Prioritising the price-GB ratio, "standard" volumes are ideal for storing large amounts of data without any particular performance requirements.</li>
                    <li>Triple replication</li>
                    <li>200 IOPS guaranteed</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <h4>	High Speed</h4>
                <ul>
                    <li>“High speed” volumes can be used to meet needs where storage must be accompanied by high read and write performance.</li>
                    <li>Triple replication</li>
                    <li>Up to 3,000 IOPS</li>
                </ul>
            </div>
        </div>
    </div>


    <section>
        <div class="container">
            <h2>Usage</h2>
            <br>
            <p>Create a volume</p>
            <code class="lead bg-dark d-block p-3 text-white rounded">openstack volume create --type high-speed --size 300 logsdb01</code>
            <br>
            <p>Resize a volume</p>
            <code class="lead bg-dark d-block p-3 text-white rounded">openstack volume set logdb01 --size 1024</code>
            <br>
            <p>Attach a volume to an instance</p>
            <code class="lead bg-dark d-block p-3 text-white rounded">openstack server add volume inst01 logdb01</code>
            <br>
            
        </div>
    </section>

    <section>
        <div class="container">
            <h2>Features</h2>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <h4>Resizing</h4>
                    <p>With volumes ranging from 1 GB to 4 TB, you can start small, then scale up as your needs evolve.</p>
                    <br><br>
                    <h4>Migrating instances</h4>
                    <p>You can hot-add and hot-remove volumes. You can also use a volume to move data from one instance to another, within the same region, almost instantaneously.

                    </p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h4>Backups</h4>
                    <p>Trigger snapshots at any time, to freeze the data status while continuing to use your volume. You can then retrieve your data in its desired state.</p>
                    <br><br>
                    <h4>Import and export your data</h4>
                    <p>In accordance with our reversibility policy, DarkCloud allows you to easily recover your volume using traditional tools, such as OpenStack's CLI. You can also import a volume to the DarkCloud platform, to use directly on your instances.

                    </p>
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
                Block Storage Billing  </h2>
                <p class="text-white">Volumes are charged per GB, per hour, depending on the chosen range. The rates shown are for 1 GB, used for a full month.</p>
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
                                    What SLA does DarkCloud offer for accessing the Block Storage service?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">The SLA guarantees 99.9% monthly availability for accessing the Block Storage service. For further information, please refer to the Terms & conditions.</p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   2">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What SLA does DarkCloud offer for data resilience on the Block Storage service?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text"> The data resilience rate is 100% on the Block Storage service. For further information, please refer to the Terms & conditions.</p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   3">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can I resize a Block Storage volume?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text"> Yes, you can enlarge a volume. If it is formatted by a file system, you can extend it later.</p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   4">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can a volume be moved from one region to another?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">You can do this by performing an export-import operation that passes through the image catalogue. </p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   5">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can I migrate from classic to high speed?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">You can do this by performing an export-import operation that passes through the image catalogue. </p>

                            </div>
                        </div>


                        <div class="iq-accordion-block   6">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What is the maximum size for a volume?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">We recommend not exceeding 4TB per volume.</p>

                            </div>
                        </div>


                        <div class="iq-accordion-block   7">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What locations are available for the Block Storage service?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">The Public Cloud solution is available in Europe (Gravelines, Strasbourg, London, Frankfurt, Warsaw), North America (Beauharnois) and the Asia-Pacific region (Sydney, Singapore). </p>

                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq End -->

    
@endsection