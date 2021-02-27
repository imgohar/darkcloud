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
                           Compute                       </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Public Cloud</a></li>
                                    <li class="breadcrumb-item active"> Compute</li>
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
        <img src="images/others/shape1.png" class="img-fluid shape-right" alt="QLOUD">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 mb-lg-0 mb-5">
                    <img src="images/others/01.png" class="img-fluid" alt="qloud">
                </div>
                <div class="col-lg-6 col-sm-12 ">
                    <div class="iq-title-box iq-title-default iq-title-box-2">
                        <div class="iq-title-icon">
                        </div>
                        <span class="iq-subtitle">Compute</span>
                        <h2 class="iq-title">The power of premium servers, the flexibility of the Public Cloud</h2>
                        <p class="iq-title-desc">Darkcloud works on a large scale with the best hardware, to offer infrastructures with the most competitive price/performance ratio. Each resource is adjusted and configured to provide maximum power to your Public Cloud instances. Our Public Cloud Solutions catalogue includes different ranges and options that cover all your cloud needs. All our resources are available on demand, to offer you total flexibility. </p>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->

        <!-- Icon-box Start -->
        <section class="pt-0 iq-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center iq-title-box iq-title-default iq-title-box-2">
                            <div class="iq-title-icon">
                            </div>
                            <span class="iq-subtitle">Compute</span>
                            <h2 class="iq-title">Our cloud computing instances </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        
                        <div class="iq-icon-box iq-icon-box-style-1">
                            <div class="icon-box-img">
                                <img src="images/icon-box/01.png" class="img-fluid" alt="QLOUD">
                            </div>
                            <div class="icon-box-content">
                                <h5 class="icon-box-title"> <a href="/public-cloud/guranteed-resources">Guranteed Resource</a>
          </h5>
                                <p class="icon-box-desc"> Deploy cloud instances with fully-guaranteed resources for a very wide range of uses </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="iq-icon-box iq-icon-box-style-1">
                            <div class="icon-box-img">
                                <img src="images/icon-box/02.png" class="img-fluid" alt="QLOUD">
                            </div>
                            <div class="icon-box-content">
                                <h5 class="icon-box-title"> <a href="/public-cloud/gpu">GPU</a>
          </h5>
                                <p class="icon-box-desc"> Get our most powerful public cloud instances, up to 1,000 times faster than a CPU for parallel processing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="iq-icon-box iq-icon-box-style-1">
                            <div class="icon-box-img">
                                <img src="images/icon-box/03.png" class="img-fluid" alt="QLOUD"> </div>
                            <div class="icon-box-content">
                                <h5 class="icon-box-title"> <a href="/public-cloud/iops">IOPS </a>
          </h5>
                                <p class="icon-box-desc"> Get ultra-fast IOPS, with NVMe drives specially designed for databases and big data applications </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="iq-icon-box iq-icon-box-style-1  ">
                            <div class="icon-box-img">
                                <img src="images/icon-box/04.png" class="img-fluid" alt="QLOUD"> </div>
                            <div class="icon-box-content">
                                <h5 class="icon-box-title"> <a href="/public-cloud/sandbox">Sand Box</a>
          </h5>
                                <p class="icon-box-desc"> Access small instances at a low cost with shared resources, perfect for test and development environments</p>
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
                <p>Choose your instance type</p>
                <code class="lead bg-dark d-block p-3 text-white rounded">openstack flavor list</code>
                <br>
                <p>Select your operating system</p>
                <code class="lead bg-dark d-block p-3 text-white rounded">openstack image list</code>
                <br>
                <p>Create your instance</p>
                <code class="lead bg-dark d-block p-3 text-white rounded">openstack server create --flavor c2-60 --image debian server01</code>
            </div>
        </section>



     <!-- Service Tab Start -->
     <section class="light-gray-bg iq-sahpe">
        <img src="images/others/shape1.png" class="img-fluid shape-right" alt="QLOUD">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-center iq-title-box iq-title-default iq-title-box-2">
                <div class="iq-title-icon">
                </div>
                <span class="iq-subtitle">Features</span>
                <h2 class="iq-title">General features</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="iq-tabs iq-tab-vertical iq-hosting ">
                <div class="row ">
                  <div class="col-lg-4">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#tabs-041" role="tab">
                          <div class="media"><i aria-hidden="true" class="ion ion-android-call"></i><div class="media-body">
                          <h6 class="tab-title">System and storage</h6></div></div>
                        </a>
                      </li><li class="nav-item">
                      <a class="nav-link " data-toggle="pill" href="#tabs-141" role="tab">
                        <div class="media"><i class="fa fa-pie-chart" aria-hidden="true"></i><div class="media-body">
                        <h6 class="tab-title">Billing and flexibility</h6></div></div>
                      </a>
                    </li><li class="nav-item">
                    <a class="nav-link " data-toggle="pill" href="#tabs-241" role="tab">
                      <div class="media"><i class="fa fa-user" aria-hidden="true"></i><div class="media-body">
                      <h6 class="tab-title">Configuration and network</h6></div></div>
                    </a>
                  </li>
              </ul>
            </div>
            <div class="col-lg-8">
              <div class="tab-content">
                <div class="tab-pane active" id="tabs-041" role="tabpanel">
                  <div><div>
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <h4>Additional disks</h4>
                            <p>You can add one or more disks to increase the storage space available on your servers. Our cloud storage solutions can be resized at any time.</p>
                        </div>
                        <div class="col-sm-6">
                            <h4>Back up your instances</h4>
                            <p>Your instances’ disks can be backed up and exported to a different cluster to be reused later. Your sensitive data is protected.</p>
                        </div>
                        <div class="col-sm-6">
                            <h4>Local SSD disks</h4>
                            <p>The disks powering Public Cloud instances are based on SSD technology, offering exceptional read/write performance.</p>
                        </div>
                        <div class="col-sm-6">
                            <h4>Rebuild an instance</h4>
                            <p>To start from scratch on an instance while keeping its original configuration, the rebuild mode allows you to reset the operating system instead of the instance.</p>
                        </div>
                        <div class="col-sm-6">
                            <h4>Choice of operating system</h4>
                            <p>Choose from 15 Linux, Windows or FreeBSD distributions. You can also import your own images, to complete the catalogue.</p>
                        </div>
                        <div class="col-sm-6">
                            <h4>Automate your backups</h4>
                            <p>To secure your instances, you can schedule automatic backups every night, for example.</p>
                        </div>
                    </div>
                  </div></div>
                </div><div class="tab-pane " id="tabs-141" role="tabpanel">
                <div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h4>Flexible servers</h4>
                            <p>Our servers are delivered in a few seconds and billed hourly. You can also modify their power depending on your usage.</p>
                        </div>
                        <div class="col-sm-6">
                            <h4>Cost optimisation</h4>
                            <p>When you will not need an instance for a while, it is a good idea to use the ‘shelve’ function, which hibernates the instance and reduces costs.

                            </p>
                        </div>
                        <div class="col-sm-6">
                            <h4>Monthly billing at 50% off</h4>
                            <p>You can choose monthly billing for your servers. This gives you even more value for money (50% discount on the hourly price).</p>
                        </div>
                    </div>
                    
                  </div>
                </div><div class="tab-pane " id="tabs-241" role="tabpanel">
                <div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h4>Anti-DDoS</h4>
                            <p>The network is protected by DarkCloud’s powerful anti-DDoS system. All your instances benefit from this protection at no extra cost.</p>
                        </div>
                        <div class="col-sm-6">
                            <h4>Access the KVM console</h4>
                            <p>The server’s virtual console is available directly through your browser, for all actions that cannot be performed via the network.</p>
                        </div>
                        <div class="col-sm-6">
                            <h4>Interface customisation</h4>
                            <p>Your instances can run startup scripts when cloud-init is enabled in the operating system. This means you can customise any cloud server deployment.</p>
                        </div>
                        <div class="col-sm-6">
                            <h4>Flexible network connection</h4>
                            <p>You can create networks and network ports on demand, and hot-add instances. You can also have multiple connections on the same instance.</p>
                        </div>
                        <div class="col-sm-6">
                            <h4>Configuration disk</h4>
                            <p>Boot an instance by transferring files or variables that will be injected into the operating system. This feature is very useful for automating your deployments.

                            </p>
                        </div>
                        <div class="col-sm-6">
                            <h4>Instance protection</h4>
                            <p>The lock function allows you to lock any action on the instance. Only the owner of the instance will be able to act on it, which allows you to work as a team with complete peace of mind.</p>
                        </div>
                    </div>
                </div>
                </div><div class="tab-pane " id="tabs-341" role="tabpanel">
                <div><h4 class="mb-3">Explore Use Cases Of Qloud</h4>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                  <div class="iq-list iq-two-column mb-4">
                    <ul class="iq-list-with-icon">
                      <li><i class="ion ion-checkmark-round main-color"></i>
                      Boost SEO ranking</li>
                      <li><i class="ion ion-checkmark-round main-color"></i>
                      Social Sharing</li>
                      <li><i class="ion ion-checkmark-round main-color "></i>
                      Marketing</li>
                      <li><i class="ion ion-checkmark-round main-color"></i>
                      Retention</li>
                      <li><i class="ion ion-checkmark-round main-color"></i>
                      Visual Reviews</li>
                      <li><i class="ion ion-checkmark-round main-color"></i>
                      Reviews Generation</li>
                    </ul>
                  </div>
                  <a class="iq-button iq-btn-medium iq-btn-round iq-btn-flat" href="https://iqonic.design/wp-themes/qloud/about-us-1/">
                    Read More
                    
                  </a></div>
                </div>
                <div class="tab-pane " id="tabs-441" role="tabpanel">
                  <div><div class="ml-lg-5 t">
                    <img src="images/tab/05.png" class="img-fluid" alt="img">
                    <h4 class="mb-3 mt-4">Cloud GPUs</h4>
                    There are many variations of passages of Lorem Ipsum available, but
                    the majority have suffered alteration in some form, by injected humour
                  </div></div>
                </div>
                <div class="tab-pane " id="tabs-541" role="tabpanel">
                  <div><h4 class="mb-3">Qloud As A Lead Magnet</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    <div class="iq-list iq-two-column mb-4">
                      <ul class="iq-list-with-icon">
                        <li><i class="ion ion-checkmark-round main-color"></i>
                        Boost SEO ranking</li>
                        <li><i class="ion ion-checkmark-round main-color"></i>
                        Social Sharing</li>
                        <li><i class="ion ion-checkmark-round main-color "></i>
                        Marketing</li>
                        <li><i class="ion ion-checkmark-round main-color"></i>
                        Retention</li>
                        <li><i class="ion ion-checkmark-round main-color"></i>
                        Visual Reviews</li>
                        <li><i class="ion ion-checkmark-round main-color"></i>
                        Reviews Generation</li>
                      </ul>
                    </div>
                    <a class="iq-button iq-btn-medium iq-btn-round iq-btn-flat" href="https://iqonic.design/wp-themes/qloud/about-us-1/">
                      Read More
                      
                    </a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
     </div>
</section>
<!-- Service Tab End -->


<div class="container">
    <h2>Public Cloud by DarkCloud</h2>
    <br>
    <br>
    
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <h3>A simple, easy-to-use cloud that helps you focus on your projects</h3>
            <br>
            <p>Our Public Cloud is open and easy to use, allowing you to focus on developing and deploying your software solutions.</p>
            <p>Based on OpenStack, it is built on open standards — so you can easily manage and deploy instances, and automate actions via APIs. Developers can rely on Public Cloud instances hosted in our datacentres, which means they spend less time managing the software stack, and can focus on their core business. This way, you can deploy high-availability cloud instances for a wide range of uses.</p>
        </div>
        <div class="col-lg-6 col-md-12">
            <h3>An open, reversible and transparent cloud</h3>
            <br>
            <p>Migrating to the cloud should not result in dependence on any specific type of infrastructure or data retention. Our Public Cloud is based on OpenStack, as well as a set of standard and open APIs and services to make it easier for you to orchestrate. This ensures global interoperability of your infrastructures, both with other DarkCloud solutions and with your existing cloud services and infrastructures. Your data also remains accessible, transferable and exploitable at any time, without retention or technical barriers. This is why our cloud solution is standard, open, accessible, transparent and multi-local.</p>
        </div>
    </div>
</div>

@endsection