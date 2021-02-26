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
                           Cloud Archive                     </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Public Cloud</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa mr-2"></i>Storage </a></li>
                                    <li class="breadcrumb-item active"> Cloud Archive</li>
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
                        Long-term storage to securely archive your data </h2>
                       <p class="iq-title-desc pr-lg-5">Whether it’s for business needs or other obligations, long-term data retention is often a necessity. Two points are important here: the cost of storage, which must be reduced, and data security and recovery, which must be guaranteed. The OVHcloud Cloud Archive solution has been designed with this in mind.</p></div>
                       
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
                                <h4 class="iq-fancy-title"> Secure and reliable</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">The archived data is treated with the greatest of care. Each file is fragmented and replicated on a redundant infrastructure. Each fragment is written on a different storage device, with a system to constantly ensure the integrity of the information. If a missing fragment is ever detected, it is automatically reconstructed by a specific algorithm, using the other parts of the file.
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
                                <h4 class="iq-fancy-title"> Reversible, based on industry standards
                                </h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">OVHcloud places great value in the freedom of its users. When you entrust us with your data, we guarantee you will always be able to recover it via standard, easy-to-use protocols, such as SCP or rsync.
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
                                <h4 class="iq-fancy-title">Reduced cost</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> The storage clusters that host Cloud Archive are designed to secure your information at the best possible price. The architecture offers data recovery time ranging from 10 minutes to 12 hours, depending on the last access date.
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
                                <h4 class="iq-fancy-title">Log Archiving</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> For legal, archival or statistical purposes, the preservation of logs is an important process, and requires special attention. Standard systems rarely keep this information for more than a few days, or a few weeks at best. By storing your logs data in the Cloud Archive, you can keep it for as long as you want.
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
                                <h4 class="iq-fancy-title">Backup</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> There are many daily backup systems used in modern architectures. Whether it is for operating system backups or application backups, they typically use proven, secure protocols, such as SCP or rsync.
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
                                <h4 class="iq-fancy-title">Replacement of magnetic bands</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Archiving on magnetic bands has been the industry standard for many years, thanks to its low cost. Today, Cloud Archive replaces these old backups, meeting the same data conservation requirements, while providing much more flexibility, at a very competitive cost.
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
            <p>Load an archive</p>
            <code class="bg-dark d-block p-3 text-white rounded">rsync -av archive.tar.gz pca@ovh:repo/</code>
            <br>
            <p>Retrieve an archive</p>
            <code class="bg-dark d-block p-3 text-white rounded">rsync -av pca@ovh:repo/archive.tar.gz.</code>
            <br>
            
            
        </div>
    </section>

    <div class="container">
        <h3>Features</h3>
        <div class="row">
            <div class="col-lg-6">
                <h4>Swift API
                </h4>
                <p>
                    The storage solution used in Cloud Archive clusters is OpenStack Swift. This is a standard API that can be used directly by conventional tools.</p>

<h4>SSH-based protocols
</h4>
<p>
    In addition to access via the Swift API, you can use your favoured tools, such as SFTP, SCP and rsync, for data transfer.
</p>
<h4>High-volume archives</h4>
Cloud Archive allows you to store objects such as important files, without any size limit. For example, you can store files of several TB.
</p>
            </div>
            <div class="col-lg-6">
                <h4> Checksum</h4>
                <p>File metadata in the Cloud Archive automatically incorporates an MD5 signature, to ensure the integrity of a transferred element.</p>
                
                <h4>Archive expiry dates</h4>
                Objects can have an expiry date as an attribute. In such cases, they will simply be deleted after that date.</p>
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
                Cloud Archive Billing </h2>
                <p class="text-white">The Cloud Archive service is billed per GB, per hour. The prices displayed indicate the cost of a full month of usage. Incoming and outgoing traffic charges are also applicable.



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
                                    
                                    What SLA does OVHcloud offer for accessing the Cloud Archive service?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">The SLA guarantees 99.9% monthly availability for accessing the Cloud Archive service. For further information, please refer to the Terms & conditions.</p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   2">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What is the difference between Cloud Archive services and Object Storage?
                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">The pricing is different, and read-access to data is significantly slower on the Cloud Archive service. There is a delay before retrieving the archive, whereas Object Storage loads the object immediately. </p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   3">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    How long does it take to retrieve an archived item?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">The time it takes to retrieve an item from an archive depends on several variables. It can take between 10 minutes and 12 hours. You also need to factor in the download time, which depends on your connection’s bandwidth. </p>

                            </div>
                        </div>

                       

                        

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq End -->

    
@endsection