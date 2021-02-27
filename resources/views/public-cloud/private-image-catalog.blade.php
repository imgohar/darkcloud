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
                          Private Image Catalog             </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Public Cloud</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa mr-2"></i>Containers & Orchestration </a></li>
                                    <li class="breadcrumb-item active"> Private Image Catalog</li>
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
                        A wide range of compatible operating systems</h2>
                       <p class="iq-title-desc pr-lg-5">In addition to the Public Image Catalog, which provides system images maintained by OVH, you can build a Private Image Catalog. This means your instances can access operating systems specifically configured to you, or from other publishers. </p></div>
                       
                    </div>
                 </div>
              </div>
           </section>
    
           <section>
            <div class="container">
                <h2>How to</h2>
                <br>
                <p>Import an image from a local file</p>
                <code class="lead bg-dark d-block p-3 text-white rounded">openstack image create --disk-format qcow2 --file debian.qcow2 debian</code>
                <br>
                <p>Export an image</p>
                <code class="lead bg-dark d-block p-3 text-white rounded">openstack image save --filename debian.qcow2 debian</code>
                <br>
                
                
            </div>
        </section>
    



   
    <div class="container">
        <h3>Features</h3>
        <div class="row">
            <div class="col-lg-6">
                <h4>Multi-format

                </h4>
                <p>OVH can manage several types of virtual disk format, including QCOW2, RAW, VMDK, ISO, AMI/AKI/ARI, VDI and VHD.</p>
                <br>
                
                <h4>Sharing between projects
                </h4>
                <p>When managing multiple cloud projects, you can share images from one project to another while keeping them in the same place, with no need to duplicate the image in question.</p>
                <br>
                <h4>Simplified importing and exporting
                </h4>
                <p>Your system images remain your property. Whether you’re importing or exporting, everything is managed via standard tools, such as the OpenStack CLI or the Horizon interface.</p>
                

                </p>
                <br>
                <h4>Metadata</h4>
                <p>An image’s metadata governs whether or not the image can be used to manage a catalog, or used directly on an instance.  As a result, you can define a minimum amount of RAM or disk space required for the image to work properly, and you can also add tags or configure the image properties.</p>
                
            </div>
            <div class="col-lg-6">
                <h4>Import from a URL</h4>
                <p>In order to make it easier to add images to your catalog, you can import system images directly from public URLs. You do not have to perform unnecessary image transfers.
                </p>
                <br>
                <h4>Import from Block Storage</h4>
                <p>A volume of the Block Storage service can be transferred to the Private Image Catalog. This feature is particularly useful for instances that originated from a volume, or simply as a way of exporting one.</p>
                
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
                Private Image Catalog billing</h2>
                <p class="text-white">Images are charged per GB, per hour. The prices shown are based on storage for a full month of use.





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
                                        
                                        What SLA does OVHcloud offer for accessing the Private Image Catalog service?
    
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">The SLA guarantees 99.9% monthly availability for accessing the Private Image Catalog service.</p>
    
                                </div>
                            </div>
    
                            <div class="iq-accordion-block   2">
                                <div class="iq-accordion-title">
                                    <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                    <h5 class="mb-0 accordion-title">
                                        What SLA does OVHcloud offer for data resilience on the Private Image Catalog service?
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">The data resilience rate is 100% for the Private Image Catalog service. For further information, please refer to the Terms & conditions. </p>
    
                                </div>
                            </div>
    
                            <div class="iq-accordion-block   3">
                                <div class="iq-accordion-title">
                                    <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                    <h5 class="mb-0 accordion-title">
                                       
Can I import a virtual machine image from VMware?
    
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">Yes, you can export your instance from VMware vSphere in VMDK format, and send it directly to your Private Image Catalog to use it.</p>
    
                                </div>
                            </div>
    
                            
                            <div class="iq-accordion-block   4">
                                <div class="iq-accordion-title">
                                    <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                    <h5 class="mb-0 accordion-title">
                                        Can I import a virtual machine image from AWS?
    
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">Yes, you can use AWS formats (e.g. AMI, AKI, ARI), and send them directly to your Private Image Catalog to use them.</p>
    
                                </div>
                            </div>
    
    
                            <div class="iq-accordion-block   5">
                                <div class="iq-accordion-title">
                                    <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                    <h5 class="mb-0 accordion-title">
                                        Can I import a virtual machine image from Azure?
    
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">Yes, you can export your instance from Microsoft Azure in VHD format, and send it directly to your Private Image Catalog to use it.</p>
    
                                </div>
                            </div>
    
    
                            <div class="iq-accordion-block   6">
                                <div class="iq-accordion-title">
                                    <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                    <h5 class="mb-0 accordion-title">
                                       
What is the target architecture for cloud images?
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">Hypervisors are servers with an x86-64 architecture. It is important to choose images that are compatible with this architecture, otherwise they will not work.</p>
    
                                </div>
                            </div>
    
    
                            <div class="iq-accordion-block   7">
                                <div class="iq-accordion-title">
                                    <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                    <h5 class="mb-0 accordion-title">
                                       
                                        What is the maximum size limit for a cloud image?
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">There is no maximum size in the Private Image Catalog, apart from the 5TB Object Storage limit for objects. The maximum size will mainly depend on the target instance model. For example, you cannot use a 100GB image for an instance model that offers 50GB disk space. Please also note that the smaller the image, the quicker an instance will boot — the transfer time between the catalog and the hypervisor will be reduced.</p>
    
                                </div>
                            </div>
    
    
    
                            
    
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Faq End -->
    

     

@endsection