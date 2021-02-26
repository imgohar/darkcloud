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
                           Object Storage                     </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Public Cloud</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa mr-2"></i>Storage </a></li>
                                    <li class="breadcrumb-item active"> Object Storage</li>
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
                        A scalable, resilient and secure storage space  </h2>
                       <p class="iq-title-desc pr-lg-5">Upload your files to a space that you can access via HTTPS using the OpenStack Swift API, or the S3 API. Objects have a software layer that manages metadata, access permissions and intelligent behaviours directly at the data level. It is a perfect place to store your static files and use them from your application, or simply make them accessible on the web.</p></div>
                       
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
                                <h4 class="iq-fancy-title"> Scalable</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">There’s no need to anticipate the provisioning of the additional storage space to meet your growing needs. Object Storage provides unlimited space for your applications. Store all types of files, without being constrained by low disk space.
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
                                <h4 class="iq-fancy-title"> Resilient</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> Your data is distributed within clusters that have triple replication for each object. These replicas are placed on both different disks and servers, to ensure their longevity.
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
                                <h4 class="iq-fancy-title">Integrated into your application performance</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> All actions can be carried out via APIs. This feature makes automation possible, and makes integration easier in application layers using your data. The <a href="https://wiki.openstack.org/wiki/SDKs">OpenStack Swift libraries</a>, available in your preferred languages, will make this integration easier.
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
                                <h4 class="iq-fancy-title"> Store your business data</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> Business data often involves large volumes: satellite data, videos or measurement point readings, for example. Object Storage makes your project easier to manage, by offering you both competitive pricing and the assurance that your data is secure.
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
                                <h4 class="iq-fancy-title">Document catalogues</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> Catalogues of documents handled by applications provide static content, such as images, text files or tables, sound and video. You can manage this data via your application. And depending on the defined access rules, you can provide read-only access to all internet users.
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
                                <h4 class="iq-fancy-title">Migration from the S3 API</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Get the competitive price of our Object Storage solution, by migrating your data from any provider offering the S3 API to the OVHcloud platform.
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
        <h2>Migrate from S3 to OVHcloud</h2>
        <br>
        <div class="row">
            <div class="col-lg-6">
                <h4>Protect yourself from vendor lock-in</h4>
                <p>Maintain your data sovereignty with our S3-compatible API. This way, you can host your data with a provider that respects reversibility.</p>
                
                <h4>Control your spending</h4>
                <p>Get the very best prices on the market for storage and traffic. You manage your own billing, so you won’t get any nasty surprises at the end of the month.</p>
    
                <h4>Adapt your application effortlessly</h4>
                <p>Update your configuration (the endpoint and credentials) while keeping the same application code, and the same tools.</p>
            </div>
            
            <div class="col-lg-6">
                <img src="{{URL::asset('images/dark-cloud/APIS3.png')}}" alt="">
            </div>
    
        </div>
    </div>


    <section>
        <div class="container">
            <h2>Usage</h2>
            <br>
            <p>Create an object container (or bucket)</p>
            <code class="bg-dark d-block p-3 text-white rounded">swift post repo01</code>
            <br>
            <p>Configure access permissions to make the container public</p>
            <code class="bg-dark d-block p-3 text-white rounded">swift post repo01 --read-acl ".r:*"</code>
            <br>
            <p>Push a file into Object Storage</p>
            <code class="bg-dark d-block p-3 text-white rounded">swift upload repo01 image.jpg</code>
            <br>
            
        </div>
    </section>

    <div class="container">
        <h3>Features</h3>
        <div class="row">
            <div class="col-lg-6">
                <h4>Public or private</h4>
                <p>
Containers and their objects are only accessible after authentication. In order to make objects publicly available, you can open up access to them on the web without authentication.</p>

<h4>Version management</h4>
<p>
By managing versions (versioning) of objects that can be enabled at a container level, you can log changes to your objects and restore to previous versions on demand.
</p>
<h4>Container synchronisation</h4>
You can sync your containers, so that your data is identical everywhere. This function can be useful for maintaining data in a consistent state across several regions, for example.
</p>
<h4>Temporary URL</h4>
You can use temporary URLs to provide read or write access to an object, for a specific period of time. Once the time period has elapsed, the URL will no longer be valid.
</p>
<h4>Object expiration dates</h4>
Objects can have an expiration date as an attribute. In such cases, the object will simply be deleted once that date has passed.
</p>
<h4> Control List (ACL) management</h4>

<p>You can configure specific access permissions for objects and containers, by both user and access method.</p>
            </div>
            <div class="col-lg-6">
                <h4> web content</h4>
                <p>By configuring a container in static mode, OVHcloud's Object Storage will act as a standard web server by first serving "index.html". It can also present an HTML index of the objects' URLs if no "index.html" objects exist by default.</p>
                
                <h4>Large objects</h4>
                With Object Storage, you can store small and very large objects, with no size limit. For example, you can store files of several TB.</p>
                
                <h4>CORS</h4>
                <p>Using this mechanism managed via code in web browsers, you can provide access to objects from other domain names. This means it separates a website's code from its static objects.</p>
                
                <h4>Checksum</h4>
                <p>The object metadata automatically incorporates an MD5 signature, in order to ensure the integrity of all transferred objects.</p>
                
                <h4>DNS usage</h4>
                <p>You can redirect to a container in your Object Storage by configuring a specific record in your domain name’s DNS zone.</p>
                
                <h4>S3 credential generation</h4>
                <p>To configure a tool on the S3 API, you can generate credentials that are specific to this use. Simply change the endpoints in the application by using these credentials to get this compatibility.</p>
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
                Object Storage Billing  </h2>
                <p class="text-white">Object storage is charged per GB, per hour. The displayed price indicates the cost of a full month of storage. Outgoing traffic from objects is also charged per GB.

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


        <div class="container mt-4">
            <h4>What is Object Storage?</h4>
            <p>Any business activity needs to store varying volumes of static data. This data is precious, and must be seamlessly accessible at any time. Cloud computing offers storage services that combine both scalability and flexibility, so that they can be adapted to all kinds of business uses. The storage process is made simple, and end users can avoid the complexity of managing a server cluster. This makes data access as simple as an API call.</p>
        </div>



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
                                    
What SLA does OVHcloud offer for accessing the Object Storage service?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">The SLA guarantees 99.9% monthly availability for accessing the Object Storage service. For further information, please refer to the Terms & conditions.</p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   2">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What SLA does OVHcloud offer for data resilience on the Object Storage service?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">The data resilience rate is 100% for the Object Storage service. For further information, please refer to the Terms & conditions. </p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   3">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What is the difference between a file system and Object Storage?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">There are many differences. The two most important differences are the use of Object Storage for static data only, and the unlimited storage space the solution offers. </p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   4">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What is the difference between Block Storage and Object Storage services?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">The Block Storage service provides storage spaces that are sized as required, to be attached to an instance. This space will be managed by the instance’s operating system. Object Storage provides unlimited space that will be managed directly by your application. </p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   5">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    How do I access and/or manipulate data in Object Storage?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">There are several ways of manipulating the data stored on Object Storage. To integrate this management directly into your application, you can use one of the available SDKs. You can also directly use a client that is available on the market.</p>

                            </div>
                        </div>


                        <div class="iq-accordion-block   6">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What is the maximum authorised size for an object?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">An object cannot exceed 5TB. </p>

                            </div>
                        </div>



                        <div class="iq-accordion-block   7">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What is the limit for the volume of data that can be stored on Object Storage?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">Virtually, there is no limit. In other words, OVHcloud manages the service, so that there is always space available. </p>

                            </div>
                        </div>



                        <div class="iq-accordion-block   8">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What is Object Storage?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">It is a technology that offers an online storage service. It is accessible via API, provides users with an unlimited amount of space to store data, and the Object Storage cluster is managed by the cloud provider. You can push all types of data into an Object Storage service. </p>

                            </div>
                        </div>



                        <div class="iq-accordion-block   9">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    How does Object Storage work?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">An Object Storage service works in a cluster with a large number of storage servers sharing algorithms to ensure data resilience. The service places and indexes data depending on which spaces are available. A cluster can be enlarged at any time. </p>

                            </div>
                        </div>

                        

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq End -->

    
@endsection