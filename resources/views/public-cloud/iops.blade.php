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
                           IOPS                       </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Public Cloud</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa mr-2"></i>Compute </a></li>
                                    <li class="breadcrumb-item active"> IOPS</li>
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
                        Cloud servers adapted for high transactional performance </h2>
                       <p class="iq-title-desc pr-lg-5">IOPS instances deliver the fastest disk transactions in the Public Cloud range. They offer direct access to NVMe drives, each of which deliver at least 400,000 read/write operations per second. And like our other instances, you get the advantages of on-demand resources and hourly billing. These cloud solutions are designed to host database (DB) servers and big data applications.</p></div>
                       
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
                                <h4 class="iq-fancy-title">NVMe for bandwidth</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Unlike standard SSD disks, NVMe (Non-Volatile Memory Express) drives use NAND flash memory cells to store data. With their PCI Express connectors, which until recently were only used by devices like graphic cards, the bottleneck created by the SATA connection is cleared.
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
                                <h4 class="iq-fancy-title"> The PCI Passthrough feature for latency</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">To get the very most out of their PCI Express bus access, IOPS instances can access the hardware directly with the PCI Passthrough feature. There is no virtualisation layer to access the drive, which means you benefit from all of the available performance.
                                        <br>
                                        Some features of virtual instances are limited, such as snapshotting and live migration. Special care must also be taken with the data on NVMe drives, with regard to backup.
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
                                <h4 class="iq-fancy-title"> 1 to 4 drives for IOPS</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> We offer instances with 1 to 4 NVMe drives, which each offer 1.9TB storage and a minimum of 400,000 IOPS. These configurations are useful when you need to process large volumes of data, and also require exceptionally high performance. The IOPS-price ratio is one of the best on the market, and is miles ahead of other solutions.
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
                                <h4 class="iq-fancy-title"> NoSQL - MongoDB database</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> MongoDB is a document-oriented database management system, and is often used within large infrastructures. It can manage high volumes of data, and often requires high levels of disk access. It can be used in a cluster, and can be deployed on several i1 instances.
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
                                <h4 class="iq-fancy-title">Big data - Hadoop</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> Hadoop is a distributed, resilient big data framework that can manage petabytes of data. Its HDFS file system is scalable, and can be distributed across a high number of i1 nodes to deliver the very best performance during MapReduce operations.
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
                                <h4 class="iq-fancy-title">Search engine - Elasticsearch</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">During its indexing phase, Elasticsearch requires a very quick response time for read/write operations. Furthermore, each search needs to deliver a quick response. i1 instances provide Elasticsearch with all of the power required for one of the most widely-used search services.
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
        <h2>How to</h2>
        <div class="row">
            
            <div class="col-lg-4">
                <h4>
                    Get started</h4>
                    <p>Boot your instance, and choose the best model and operating system for you.</p>
            </div>
            <div class="col-lg-4">
                <h4>Configure</h4>
                <p>The NVMe drives are directly accessible as block devices. You can use them via system tools like a volume manager, or directly from the database manager.</p>
            </div>
            <div class="col-lg-4">
                <h4>Use</h4>
                <p>Your instance is ready to deliver a high level of transactional performance.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <h2>Features</h2>
        <div class="row">
            <div class="col-lg-6">
                <h4>Standard block storage access</h4>
                <p>Since NVMe drives are presented via PCI Passthrough, they appear as standard block storage devices, and can be used by your usual device management tools</p>
            </div>
            <div class="col-lg-6">
                <h4>RAID configuration to suit your needs</h4>
                <p>NVMe drives are directly accessible in block mode. For example, you can mount a software RAID to multiply performance even more (RAID 0) or ensure redundancy (RAID 1).</p>
            </div>
            <div class="col-lg-6">
                <h4>Guaranteed resources</h4>
                <p>Performance is guaranteed for each NVMe drive. The resources are not consumed by neighbouring instances under any circumstances.

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
                IOPS billing   </h2>
                <p class="text-white">IOPS instances are billed like all of our other instances, on a pay-as-you-go basis at the end of each month. The price depends on the size of the instance you have booted, and the duration of its use.

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
                                    What SLA does DarkCloud guarantee for an IOPS instance?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">The SLA guarantees 99.9% monthly availability on IOPS instances. For further information, please refer to the Terms & conditions. </p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   2">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Which hypervisor is used for instance virtualisation?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">Just like other instances, GPU instances are virtualised by the KVM hypervisor in the Linux kernel. </p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   3">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What is PCI Passthrough?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text"> Cards with GPUs are served via the physical server's PCI bus. PCI Passthrough is a hypervisor feature that allows you to dedicate hardware to a virtual machine by giving direct access to the PCI bus, without going through virtualisation. </p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   4">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can I resize an IOPS instance?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">This instance type cannot be resized. </p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   5">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Is the RAID configured automatically for NVMe drives?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">NVMe drives are not delivered with any specific configuration. You can choose a software program to create the configuration you want via the system (e.g. with mdadm), or directly with your database if this option is supported.</p>

                            </div>
                        </div>


                        <div class="iq-accordion-block   6">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can I back up an IOPS instance?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">You can back up the system disk of an IOPS instance. However, the data on the NVMe drives will not be backed up. If you would like to back up the data on the NVMe drives, you will need to find and use a software solution for this purpose. </p>

                            </div>
                        </div>


                        <div class="iq-accordion-block   7">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can I migrate an IOPS instance?




                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">IOPS instances are linked to the data on the NVMe drives. This means you cannot move an instance from one hypervisor to another. </p>

                            </div>
                        </div>


                        <div class="iq-accordion-block   8">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Do IOPS instances have anti-DDoS protection?
                                    
                                    
                                    

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">Yes, our anti-DDoS protection is included with all DarkCloud solutions at no extra cost. </p>

                            </div>
                        </div>


                        <div class="iq-accordion-block   9">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can I switch to hourly billing from an instance that is currently billed monthly?
                                    
                                    
                                    

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">If you have monthly billing set up, you cannot switch to hourly billing. Before you launch an instance, please take care to select the billing method that is best suited to your project.</p>

                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq End -->

    
@endsection