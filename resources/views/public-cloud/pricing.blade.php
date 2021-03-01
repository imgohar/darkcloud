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
                              Public Cloud - Pricing                       </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Pricing</a></li>
                                    <li class="breadcrumb-item active">Public Cloud</li>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img src="images/others/02.png" class="img-fluid" alt="qloud">
                </div>
                <div class="col-lg-6 col-sm-12 mb-lg-0 mb-5">
                    <div class=" text-left iq-title-box iq-title-default iq-title-box-1">
                        <div class="iq-title-icon">
                        </div>

                        <h2 class="iq-title">
                            Compute: Dark Cloud Public Cloud instances </h2>

                        <p class="iq-title-desc">Dark Cloud provides cloud services with simple billing and no hidden costs. For example, our competitors typically charge for instance network traffic or API calls from Object Storage. At Dark Cloud, these are free of charge.</p>
                    </div>
                    <ul class="job-details d-inline-block p-0">
                        <li class="list-unstyled">
                            <h5 class="deatils d-inline-block">Client :</h5><span class="pl-3">Qloud</span></li>
                        <li class="list-unstyled">
                            <h5 class="deatils d-inline-block">Website :</h5><span class="pl-3">Qlouddummy.com</span></li>
                    </ul>
                    <ul class="job-details d-inline-block ml-lg-5 p-0">
                        <li class="list-unstyled">
                            <h5 class="deatils d-inline-block">Date :</h5><span class="pl-3">01 january 2019</span></li>
                        <li class="list-unstyled">
                            <h5 class="deatils d-inline-block">Category :</h5><span class="pl-3">Business</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->

    {{-- SCROLL SPY --}}
    <style>
        .scrollspy-example {
    /* margin-top: 20px; */
  position: relative;
  height: 550px;
  overflow: auto;
}

    </style>
    <div>
        <div class="row">
            <div class="col-sm-3" id="spy">
              <ul class="nav p-2 nav-pills flex-column">
                <li class="nav-item"><a class="nav-link active" href="#scroll1">Compute</a></li>
                <li class="nav-item"><a class="nav-link" href="#scroll2">Storage</a></li>
                <li class="nav-item"><a class="nav-link" href="#scroll3">Network</a></li>
                <li class="nav-item"><a class="nav-link" href="#scroll4">Container And Orchestration</a></li>
                <li class="nav-item"><a class="nav-link" href="#scroll5">Data Analytics</a></li>
                <li class="nav-item"><a class="nav-link" href="#scroll6">AI & Machine Learning</a></li>
                <li class="nav-item"><a class="nav-link" href="#scroll7">Management Interfaces</a></li>
                <li class="nav-item"><a class="nav-link" href="#scroll8">Project Management</a></li>
                <li class="nav-item"><a class="nav-link" href="#scroll9">Price Model</a></li>
              </ul>
            </div>
            <div class="col-sm-9 scrollspy-example" data-spy="scroll" data-target="#spy">
              <div id="scroll1">
                <!-- Counter Start -->
    <section class="iq-counter-section pt-0 iq-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <h2>Guaranteed Resources</h2>
                    <p>Deploy cloud instances with fully-guaranteed resources that cover a very wide range of uses</p>
                </div>
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="{{URL::asset('/images/dark-cloud/guranteed-resources.png')}}" alt="Guranteed Resources">
                </div>
                <div class="mt-5 col-lg-12 mb-lg-0 mb-5">
                    <h2>General Purpose</h2>
                    <p>These instances provide you with balanced CPU/RAM resources for development servers, and web or enterprise applications. The vCores are at 2 GHz and above.
                    </p>
                    <table class="table table-light table-striped">
                        <thead class="bg-primary text-light">
                            <th>Name</th>
                            <th>Memory</th>
                            <th>vCore</th>
                            <th>Storage</th>
                            <th>Public Network</th>
                            <th>Private Network</th>
                            <th>Price</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>b2-7</td>
                                <td>7 GB </td>
                                <td>2</td>
                                <td>50 GB SSD</td>
                                <td>250 Mbps guaranteed</td>
                                <td>300 Mbps max.</td>
                                <td>0.0739  /hour</td>
                            </tr>
                            <tr>
                                <td>b2-15</td>
                                <td>15 GB </td>
                                <td>4</td>
                                <td>100 GB SSD</td>
                                <td>250 Mbps guaranteed</td>
                                <td>1 Gbps max.</td>
                                <td>$0.1399  /hour</td>
                            </tr>
                            <tr>
                                <td>b2-30</td>
                                <td>30 GB </td>
                                <td>8</td>
                                <td>200 GB SSD</td>
                                <td>500 Mbps guaranteed</td>
                                <td>2 Gbps max.</td>
                                <td>$0.2839  /hour</td>
                            </tr>
                            <tr>
                                <td>b2-60</td>
                                <td>60 GB </td>
                                <td>16</td>
                                <td>400 GB SSD</td>
                                <td>1 Gbps guaranteed</td>
                                <td>4 Gbps max.</td>
                                <td>$0.5509  /hour</td>
                            </tr>
                            <tr>
                                <td>b2-120</td>
                                <td>120 GB </td>
                                <td>32</td>
                                <td>400 GB SSD</td>
                                <td>10 Gbps</td>
                                <td>4 Gbps max.</td>
                                <td>$1.0839  /hour</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2>CPU</h2>
                    <p>These instances are perfect for applications that require high-frequency computing, or for processing parallel workloads. The vCores are at 3 GHz and above.</p>

                    <table class="table table-light table-striped">
                        <thead class="bg-primary text-light">
                            <th>Name</th>
                            <th>Memory</th>
                            <th>vCore</th>
                            <th>Storage</th>
                            <th>Public network</th>
                            <th>Private network</th>
                            <th>Price</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>c2-7</td>
                                <td>7 GB </td>
                                <td>2</td>
                                <td>50 GB SSD</td>
                                <td>250 Mbps guaranteed</td>
                                <td>300 Mbps max.</td>
                                <td>0.1069  /hour</td>
                            </tr>
                            <tr>
                                <td>c2-15</td>
                                <td>15 GB </td>
                                <td>4</td>
                                <td>100 GB SSD</td>
                                <td>250 Mbps guaranteed</td>
                                <td>1 Gbps max.</td>
                                <td>$0.2069  /hour</td>
                            </tr>
                            <tr>
                                <td>c2-30</td>
                                <td>30 GB </td>
                                <td>8</td>
                                <td>200 GB SSD</td>
                                <td>500 Mbps guaranteed</td>
                                <td>2 Gbps max.</td>
                                <td>$0.4169  /hour</td>
                            </tr>
                            <tr>
                                <td>c2-60</td>
                                <td>60 GB </td>
                                <td>16</td>
                                <td>400 GB SSD</td>
                                <td>1 Gbps guaranteed</td>
                                <td>4 Gbps max.</td>
                                <td>$0.8169  /hour</td>
                            </tr>
                            <tr>
                                <td>c2-120</td>
                                <td>120 GB </td>
                                <td>32</td>
                                <td>400 GB SSD</td>
                                <td>10 Gbps</td>
                                <td>4 Gbps max.</td>
                                <td>$1.6169  /hour</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2>RAM</h2>
                    <p>These instances are designed for data analysis and data science, with optimised CPU/RAM ratios and accelerated IOPS.</p>

                    <table class="table table-light table-striped">
                        <thead class="bg-primary text-light">
                            <th>Name</th>
                            <th>Memory</th>
                            <th>vCore</th>
                            <th>Storage</th>
                            <th>Public network</th>
                            <th>Private network</th>
                            <th>Price</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>r2-15</td>
                                <td>15 GB </td>
                                <td>2</td>
                                <td>50 GB SSD</td>
                                <td>250 Mbps guaranteed</td>
                                <td>1 Gbps max.</td>
                                <td>$0.1069  /hour</td>
                            </tr>
                            <tr>
                                <td>r2-30</td>
                                <td>30 GB </td>
                                <td>2</td>
                                <td>50 GB SSD</td>
                                <td>250 Mbps guaranteed</td>
                                <td>1 Gbps max.</td>
                                <td>$0.1239  /hour</td>
                            </tr>
                            <tr>
                                <td>r2-60</td>
                                <td>60 GB </td>
                                <td>4</td>
                                <td>100 GB SSD</td>
                                <td>250 Mbps guaranteed</td>
                                <td>2 Gbps max.</td>
                                <td>$0.2399  /hour</td>
                            </tr>
                            <tr>
                                <td>r2-120</td>
                                <td>120 GB </td>
                                <td>8</td>
                                <td>200 GB SSD</td>
                                <td>1 Gbps guaranteed</td>
                                <td>4 Gbps max.</td>
                                <td>$0.4839  /hour</td>
                            </tr>
                            <tr>
                                <td>r2-240</td>
                                <td>240 GB </td>
                                <td>16</td>
                                <td>400 GB SSD</td>
                                <td>10 Gbps</td>
                                <td>4 Gbps max.</td>
                                <td>$0.95  /hour</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <h2>GPU</h2>
                    <p>Get our most powerful public cloud instances, up to 1,000 times faster than a CPU for parallel processing
                    </p>
                </div>
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="{{URL::asset('/images/dark-cloud/GPU.png')}}" alt="Guranteed Resources">
                </div>
                <div class="mt-5 col-lg-12 mb-lg-0 mb-5">
                    
                    <table class="table table-light table-striped">
                        <thead class="bg-primary text-light">
                            <th>Name</th>
                            <th>Memory</th>
                            <th>vCore</th>
                            <th>GPU</th>
                            <th>Storage</th>
                            <th>Public Network</th>
                            <th>Private Network</th>
                            <th>Price</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>b2-7</td>
                                <td>7 GB </td>
                                <td>2</td>
                                <td>	Tesla V100 16 GB</td>
                                <td>50 GB SSD</td>
                                <td>250 Mbps guaranteed</td>
                                <td>300 Mbps max.</td>
                                <td>0.0739  /hour</td>
                            </tr>
                            <tr>
                                <td>b2-15</td>
                                <td>15 GB </td>
                                <td>4</td>
                                <td>	2×Tesla V100 16 GB</td>
                                <td>100 GB SSD</td>
                                <td>250 Mbps guaranteed</td>
                                <td>1 Gbps max.</td>
                                <td>$0.1399  /hour</td>
                            </tr>
                            <tr>
                                <td>b2-30</td>
                                <td>30 GB </td>
                                <td>8</td>
                                <td>4×Tesla V100 16 GB</td>
                                <td>200 GB SSD</td>
                                <td>500 Mbps guaranteed</td>
                                <td>2 Gbps max.</td>
                                <td>$0.2839  /hour</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <h2>IOPS</h2>
                    <p>Get ultra-fast IOPS, with NVMe drives specially designed for databases and big data applications</p>
                </div>
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="{{URL::asset('/images/dark-cloud/IOPS.png')}}" alt="Guranteed Resources">
                </div>
                <div class="mt-5 col-lg-12 mb-lg-0 mb-5">
                    
                    <table class="table table-light table-striped">
                        <thead class="bg-primary text-light">
                            <th>Name</th>
                            <th>Memory</th>
                            <th>vCore</th>
                            <th>Storage</th>
                            <th>NVMe disks</th>
                            <th>Public Network</th>
                            <th>Private Network</th>
                            <th>Price</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>b2-7</td>
                                <td>7 GB </td>
                                <td>2</td>
                                <td>50 GB SSD</td>
                                <td>1.9 TB</td>
                                <td>250 Mbps guaranteed</td>
                                <td>300 Mbps max.</td>
                                <td>0.0739  /hour</td>
                            </tr>
                            <tr>
                                <td>i1-90</td>
                                <td>90 GB </td>
                                <td>16</td>
                                <td>50 GB SSD</td>
                                <td>2 x 1.9 TB</td>
                                <td>2 Gbps guaranteed</td>
                                <td>4 Gbps max.</td>
                                <td>$0.889 /hour</td>
                            </tr>
                            <tr>
                                <td>i1-180</td>
                                <td>180 </td>
                                <td>32</td>
                                <td>50 GB SSD</td>
                                <td>4 x 1.9 TB</td>
                                <td>8 Gbps guaranteed</td>
                                <td>4 Gbps max.</td>
                                <td>$1.779 /hour</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>Sandbox
                    </h2>
                    <p>Deploy cloud instances with fully-guaranteed resources that cover a very wide range of uses</p>
                </div>
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/sandbox.png')}}" alt="Guranteed Resources">
                </div>
                <div class="mt-5 col-lg-12 mb-lg-0 mb-5">
                    <table class="table table-light table-striped">
                        <thead class="bg-primary text-light">
                            <th>Name</th>
                            <th>Memory</th>
                            <th>vCore</th>
                            <th>Storage</th>
                            <th>Public network</th>
                            <th>Private network</th>
                            <th>Price</th>                            

                        </thead>
                        <tbody>
                            <tr>
                                <td>s1-2</td>
                                <td>2 GB </td>
                                <td>1</td>
                                <td>10 GB SSD</td>
                                <td>100 Mbps</td>
                                <td>100 Mbps max.</td>
                                <td>$0.009  /hour</td>
                            </tr>
                            <tr>
                                <td>s1-4</td>
                                <td>4 GB </td>
                                <td>1</td>
                                <td>20 GB SSD</td>
                                <td>100 Mbps</td>
                                <td>100 Mbps max.</td>
                                <td>$0.0239  /hour</td>
                            </tr>
                            <tr>
                                <td>s1-8</td>
                                <td>8 GB </td>
                                <td>2</td>
                                <td>40 GB SSD</td>
                                <td>100 Mbps</td>
                                <td>100 Mbps max.</td>
                                <td>$0.0439  /hour</td>
                            </tr>
                        </tbody>
                    </table>    
                
                </div>

                <div id="scroll2" class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>DarkCloud cloud storage</h2>
                    <br><br>
                    

                    <h2 class="mt-5">Block Storage
                    </h2>
                    <p>Create storage volumes, which can be used as additional disks and secured via triple replication of data</p>
                </div>
                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <br><br><br><br><br><br>
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/block-storage.png')}}" alt="Guranteed Resources">
                </div>
                <div class="mt-5 col-lg-12 mb-lg-0 mb-5">
                    <table class="table table-light table-striped">
                        <thead class="bg-primary text-light">
                            <th>Name</th>
                            <th>Volume</th>
                            <th>Price</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Classic</td>
                                <td>250 IOPS guaranteed, 4 TB max.</td>
                                <td>0.045  /month/GB</td>
                            </tr>
                            <tr>
                                <td>High speed</td>
                                <td>Up to 3000 IOPS, 4 TB max.</td>
                                <td>$0.09  /month/GB</td>
                            </tr>
                        </tbody>
                    </table>    
                
                </div>
                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>Object Storage
                    </h2>
                    <p>Enjoy unlimited on-demand storage, accessible via API</p>
                </div>
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/object-storage.png')}}" alt="Guranteed Resources">
                </div>
                <div class="mt-5 col-lg-12 mb-lg-0 mb-5">
                    <table class="table table-light table-striped">
                        <thead class="bg-primary text-light">
                            <th>Name</th>
                            <th>Price</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Incoming traffic</td>
                                <td>Included</td>
                            </tr>
                            <tr>
                                <td>Outgoing traffic</td>
                                <td>$0.011  /GB</td>
                            </tr>
                            <tr>
                                <td>Storage replicated x3</td>
                                <td>$0.000015  /GB/hour</td>
                            </tr>
                        </tbody>
                    </table>    
                
                </div>

                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>Cloud Archive
                    </h2>
                    <p>Archive your data over the long term in a cloud storage space, accessible via standard protocols.</p>
                </div>
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/cloud-archive.png')}}" alt="Guranteed Resources">
                </div>
                <div class="mt-5 col-lg-12 mb-lg-0 mb-5">
                    <table class="table table-light table-striped">
                        <thead class="bg-primary text-light">
                            <th>Name</th>
                            <th>Price</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Incoming traffic</td>
                                <td>$0.011 /GB</td>
                            </tr>
                            <tr>
                                <td>Outgoing traffic</td>
                                <td>$0.011 /GB</td>
                            </tr>
                            <tr>
                                <td>Secured cold storage</td>
                                <td>$0.0023 /month/GB</td>
                            </tr>
                        </tbody>
                    </table>    
                
                </div>

                <br>

                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>Volume Snapshot
                    </h2>
                    <p>Trigger a snapshot on your Block Storage volumes</p>
                </div>
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/volume-snapshot.png')}}" alt="Guranteed Resources">
                </div>
                <div class="mt-5 col-lg-12 mb-lg-0 mb-5">
                    <table class="table table-light table-striped">
                        <thead class="bg-primary text-light">
                            <th>Name</th>
                            <th>Price</th>
                        </thead>
                        <tbody>
                           
                            <tr>
                                <td>Storage replicated x3</td>
                                <td>$0.0112 /month/GB</td>
                            </tr>
                        </tbody>
                    </table>    
                
                </div>

                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>Instance Backup
                    </h2>
                    <p>Get a backup service for your instances</p>
                </div>
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/ib.png')}}" alt="Guranteed Resources">
                </div>
                <div class="mt-5 col-lg-12 mb-lg-0 mb-5">
                    <table class="table table-light table-striped">
                        <thead class="bg-primary text-light">
                            <th>Name</th>
                            <th>Price</th>
                        </thead>
                        <tbody>
                           
                            <tr>
                                <td>Storage replicated x3</td>
                                <td>$0.0112 /month/GB</td>
                            </tr>
                        </tbody>
                    </table>    
                
                </div>

                <div id="scroll3" class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>Network</h2>
                    <br><br>
                    

                    <h2 class="mt-5">Load Balancer
                    </h2>
                    <p>Manage variations in activity by distributing traffic across multiple resources</p>
                </div>
                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <br><br><br><br>
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/lb.png')}}" alt="Guranteed Resources">
                </div>
                <div class="mt-5 col-lg-12 mb-lg-0 mb-5">
                    <table class="table table-light table-striped">
                        <thead class="bg-primary text-light">
                            <th>Name</th>
                            <th>Price</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Network Load Balancer</td>
                                <td>$12.00 /month</td>
                            </tr>
                            
                        </tbody>
                    </table>   
                    <p>A Load Balancer corresponds to a single front-end. A front-end distributes traffic to a group of nodes, and is attached to a single IP address.
                        To use the service, it must be linked to a customer's Public Cloud project, along with a Managed Kubernetes Service cluster. Please note that this solution should only be used with a Managed Kubernetes Service cluster. Other use cases are not currently supported.</p> 
                
                </div>

                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>
                        Private Network
                        
                    </h2>
                    <p>Deploy private networks, supported by the DarkCloud vRack, to connect your instances across the globe</p>
                </div>
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/pri-n.png')}}" alt="Guranteed Resources">
                </div>
                <div class="mt-5 col-lg-12 mb-lg-0 mb-5">
                    <table class="table table-light table-striped">
                        <thead class="bg-primary text-light">
                            <th>Name</th>
                            <th>Price</th>
                        </thead>
                        <tbody>
                           
                            <tr>
                                <td>Incoming traffic</td>
                                <td>Included</td>
                            </tr>
                            <tr>
                                <td>Outgoing traffic</td>
                                <td>Included</td>
                            </tr>
                        </tbody>
                    </table>    
                    <p>Private networks are free to create and use.</p>
                
                </div>


                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>Anti-DDoS
                    </h2>
                    <p>Enjoy permanent protection across all your cloud resources, to ensure an optimal level of service</p>
                    <p>Standard DDoS protection is included in all Public Cloud products.</p>
                </div>
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/ad.png')}}" alt="Guranteed Resources">


                
                </div>
                <br><br>



                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>
                        Instance Public Traffic
                        
                    </h2>
                    <p>Outbound public network traffic is included in the price of instances on all locations, except the Asia-Pacific region (Singapore and Sydney). In both regions, 1 TB/month of outbound public traffic is included for each Public Cloud project. Beyond this quota, each additional GB of traffic is charged. Inbound network traffic from the public network is included in all cases and in all regions.</p>
                </div>
                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/ipt.png')}}" alt="Guranteed Resources">
                </div>
                <div class="mt-5 col-lg-12 mb-lg-0 mb-5">
                    <table class="table table-light table-striped">
                        <thead class="bg-primary text-light">
                            <th>Name</th>
                            <th>Price</th>
                        </thead>
                        <tbody>
                           
                            <tr>
                                <td>Incoming traffic</td>
                                <td>Included</td>
                            </tr>
                            <tr>
                                <td>Outgoing traffic</td>
                                <td>Included</td>
                            </tr>
                        </tbody>
                    </table>    
                    
                
                </div>
                <br>

                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>Floating IP
                    </h2>
                    <p>Assign and move your public IP from one instance to another</p>
                    <p>IP Floating is free during the beta period. Currently, only the Gravelines and Strasbourg locations are available.</p>
                </div>
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/fi.png')}}" alt="Guranteed Resources">
                
                </div>

                <br>
                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>
                        Virtual Router
                    </h2>
                    <p>Route private networks to each other and/or to the Internet</p>
                    <p>Virtual Routers are free during the beta period. Currently, only the Gravelines and Strasbourg locations are available.</p>
                </div>
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/vr.png')}}" alt="Guranteed Resources">
                
                </div>


                <div id="scroll4" class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>Orchestration and industrialisation</h2>
                    <br><br>
                    

                    <h2 class="mt-5">Managed Kubernetes Service
                    </h2>
                    <p>Orchestrate your containerised applications with a CNCF-certified Kubernetes cluster</p>
                    <p>The Managed Kubernetes® service is free.</p>
                </div>
                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <br><br><br><br>
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/mks.png')}}" alt="Guranteed Resources">
                </div>
                <div class="mt-5 col-lg-12 mb-lg-0 mb-5">
                    <table class="table table-light table-striped">
                        <thead class="bg-primary text-light">
                            <th>Name</th>
                            <th>Price</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Master nodes</td>
                                <td>Included</td>
                            </tr>
                            <tr>
                                <td>Worker nodes</td>
                                <td>Depending on the model (excluding Sandbox and GPU instances), see Compute.</td>
                            </tr>
                            <tr>
                                <td>Volumes</td>
                                <td>Depending on the model, see Storage.</td>
                            </tr>
                            <tr>
                                <td>Load Balancer</td>
                                <td>See Network</td>
                            </tr>
                            
                        </tbody>
                    </table>   
                    
                
                </div>

                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>
                        Managed Private Registry
                        
                    </h2>
                    <p>Manage a repository for your software building blocks, in the form of Docker images or Helm charts</p>
                    <p>You can migrate from your current plan to a higher level plan at any time. The new limits become effective within a few tens of seconds, with no loss of data and no changes to the configuration required. If you create, modify or remove a service part way through the month, you will be billed only for the actual hours used in your plan. Traffic is unlimited, no matter what its destination.</p>
                </div>
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/mpr.png')}}" alt="Guranteed Resources">
                </div>
                <div class="mt-5 col-lg-12 mb-lg-0 mb-5">
                    <table class="table table-light table-striped">
                        <thead class="bg-primary text-light">
                            <th>Name</th>
                            <th>Storage</th>
                            <th>Public Network</th>
                            <th>Concurrent connections</th>
                            <th>Vulnerability scanning</th>
                            <th>Price</th>
                        </thead>
                        <tbody>
                           
                            <tr>
                                <td>S</td>
                                <td>200 GB</td>
                                <td>Included</td>
                                <td>15 connections (3x5)*</td>
                                <td>No</td>
                                <td>$18.24 /month</td>
                            </tr>
                            <tr>
                                <td>M</td>
                                <td>	600 GB</td>
                                <td>Included</td>
                                <td>45 connections (9x5)*</td>
                                <td>Yes</td>
                                <td>$45.60 /month</td>
                            </tr>
                            <tr>
                                <td>L</td>
                                <td>5 TB</td>
                                <td>Included</td>
                                <td>	90 connections (18x5)*</td>
                                <td>Yes</td>
                                <td>	$216.60 /month</td>
                            </tr>
                            
                        </tbody>
                    </table>    
                    <p>*Most client software is configured to use five simultaneous http connections when accessing a registry.

                        Each plan includes a guaranteed level of service, as specified in our public cloud general terms and conditions.</p>
                
                </div>


                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>Private Image Catalog
                    </h2>
                    <p>Maintain and store personalised images of your virtual servers within your private catalog.</p>
                </div>
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/pic.png')}}" alt="Guranteed Resources">


                
                </div>

                <div class="mt-5 col-lg-12 mb-lg-0 mb-5">
                    <table class="table table-light table-striped">
                        <thead class="bg-primary text-light">
                            <th>Name</th>
                            <th>Price</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Storage replicated x3</td>
                                <td>$0.0112 /month/GB</td>
                            </tr>
                        </tbody>
                    </table>   
                    
                
                </div>



                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>
                        Public Image Catalog
                        
                    </h2>
                    <p>Get dozens of cloud images, provided and managed by DarkCloud, ranging from simple system images to pre-installed applications</p>
                </div>
                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/puic.png')}}" alt="Guranteed Resources">
                </div>
                


                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>
                        Workflow Management
                    </h2>
                    <p>Automate your tasks to operate cloud resources based on your business logic, and adapt them to suit any situation</p>
                    <p>Workflows and executions are free. Only the cloud resources generated (instances, volumes, etc.) are billed at their standard pricing.</p>
                </div>
                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/wm.png')}}" alt="Guranteed Resources">
                
                </div>

                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>
                        
OpenStack Orchestration
                    </h2>
                    <p>Model and deploy your infrastructure in code form to accelerate your deployments and other pre-established scenarios</p>
                    
                </div>
                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/oo.png')}}" alt="Guranteed Resources">
                
                </div>




                <div id="scroll5" class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>Data Analytics
                    </h2>
                    <br><br>
                    

                    <h2 class="mt-5">
                        Big Data Cluster
                    </h2>
                    <p>Deploy your fully-secure Hadoop big data cluster in under an hour</p>
                    <p>The Big Data Cluster solution is based on the use of instances (see "Compute" section) and volumes (see "Storage" section). The same billing methods are then set up according to the instances you choose: the model, and hourly or monthly billing method.

                        Additional instance fees are added for service management. You can estimate your invoice very easily via the DarkCloud Control Panel, before launching a Big Data Cluster.
                        
                        Currently, only the Gravelines regions is available.</p>
                </div>
                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <br><br><br><br>
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/bdc.png')}}" alt="Guranteed Resources">
                </div>
                <div class="mt-5 col-lg-12 mb-lg-0 mb-5">
                    <table class="table table-light table-striped">
                        <thead class="bg-primary text-light">
                            <th>Name</th>
                            <th>Price</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Instances</td>
                                <td>Price of instances in the “Compute" section + 20%.</td>
                            </tr>
                            <tr>
                                <td>Volumes</td>
                                <td>Price of Block Storage in the "Storage" section.</td>
                            </tr>
                            
                            
                        </tbody>
                    </table>   
                    
                
                </div>

                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>
                        Data Processing
                        
                    </h2>
                    <p>Launch your Apache Spark processing quickly and easily</p>
                    <p>Data Processing uses nodes — an orchestrator node (driver), which manages processing tasks, and worker nodes (executors). 
                        Each of these nodes is made up of processors and memory, which are billed per minute. This means that the driver and executors are billed for the duration of your processing task. 
                        You can estimate your billing easily via the DarkCloud Control Panel, before you begin a Data Processing task.</p>
                </div>
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/dp.png')}}" alt="Guranteed Resources">
                </div>
                <div class="mt-5 col-lg-12 mb-lg-0 mb-5">
                    <table class="table table-light table-striped">
                        <thead class="bg-primary text-light">
                            <th>Node Resources</th>
                            
                            <th>Price</th>
                        </thead>
                        <tbody>
                           
                            <tr>
                                <td>Memory (RAM)</td>
                                <td>$13.54 /month/GB</td>
                             
                            </tr>
                            <tr>
                                <td>Processor (vCore)</td>
                                <td>$50.13 /month/vCore</td>
                               
                            </tr>
                            
                            
                        </tbody>
                    </table>    
                    <p>For simplification purposes, the price displayed is per hour. However, the billing granularity is per minute. 
                        Please note that Data Processing is based on data stored by the Object Storage service. This information is billed for the storage duration and the associated traffic, as explained in the ‘Storage’ section.</p>
                
                </div>


                <div id="scroll6" class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>AI & Machine Learning
                    </h2>
                    <br><br>
                    

                    <h2 class="mt-5">
                        
DarkCloud AI Training
                    </h2>
                    <p>Train your AI, machine learning and deep learning models efficiently and easily, and optimise your GPU usage.</p>
                    <p>For each training task you launch, you pay per minute for the computing resources used, depending on their lifespan and power.

                        AI Training is based on a Docker image, so you may need to containerise your training process. A catalogue of public images is available for Jupyter Notebook, TensorFlow, MXNet, PyTorch, FastAI and much more. These images do not require any specialised containerisation skills.
                        
                        You can manage your data directly via the DarkCloud Control Panel, or via the command line (object storage).

                        </p>
                </div>
                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <br><br><br><br>
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/ai-t.png')}}" alt="Guranteed Resources">
                </div>
                <div class="mt-5 col-lg-12 mb-lg-0 mb-5">
                    <table class="table table-light table-striped">
                        <thead class="bg-primary text-light">
                            <th>Node</th>
                            <th>Memory</th>
                            <th>	vCore</th>
                            <th>		GPU</th>
                            <th>	Public network</th>
                            <th>Price</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ai1-standard</td>
                                <td>	45 GB</td>
                                <td>14</td>
                                <td>	V100S 32 GB 16.4 TFLOPS</td>
                                <td>6 Gbps max.</td>
                                <td>$1.9653 /hour</td>
                            </tr>
                           
                            
                            
                        </tbody>
                    </table>   
                    <p>For simplification purposes, the price displayed is per hour. However, the billing granularity is per minute.
                        <p>
                        The pricing includes computing power, excluding:

                        </p>
                        <ul>
                            <li>container registry costs to host container images deployed on your cluster (this service is billed as described in the “Container and Orchestration” section)</li>
                            <li>data storage costs</li>
                        </ul>
                        
                        </p>
                
                </div>

                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>
                        ML Serving
                        
                    </h2>
                    <p>Deploy machine learning models easily, and get quick results</p>
                    <p>ML Serving deploys a model on a cluster, which then boots computing nodes. Each deployment is defined by a minimum and maximum number of nodes, which you choose. The cluster adapts automatically to the load, and follows your specifications. For each node you launch, you are billed per minute for its lifespan and power. To deploy a model into production, you can get an estimation of the pricing in the DarkCloud Control Panel.</p>
                </div>
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/ms.png')}}" alt="Guranteed Resources">
                </div>
                <div class="mt-5 col-lg-12 mb-lg-0 mb-5">
                    <table class="table table-light table-striped">
                        <thead class="bg-primary text-light">
                            <th>Node</th>
                            <th>Memory</th>
                            <th>vCore</th>
                            <th>Price</th>
                        </thead>
                        <tbody>
                           
                            <tr>
                                <td>ml1-1-standard</td>
                                <td>1 GB</td>
                                <td>1</td>
                                <td>$8.98 /month</td>
                             
                            </tr>
                            <tr>
                                <td>ml1-2-standard</td>
                                <td>	2 GB</td>
                                <td>1</td>
                                <td>$14.60 /month</td>
                               
                            </tr>
                            <tr>
                                <td>ml1-4-standard</td>
                                <td>	4 GB</td>
                                <td>2</td>
                                <td>$28.07 /month</td>
                               
                            </tr>
                            <tr>
                                <td>ml1-8-standardtd>
                                <td>	8 GB</td>
                                <td>4</td>
                                <td>$52.78 /month</td>
                               
                            </tr>
                            <tr>
                                <td>ml1-16-standard</td>
                                <td>	16 GB</td>
                                <td>8</td>
                                <td>$101.07 /month</td>
                               
                            </tr>
                            <tr>
                                <td>ml1-32-standard</td>
                                <td>	32 GB</td>
                                <td>8</td>
                                <td>$168.45 /month</td>
                               
                            </tr>
                            
                            
                        </tbody>
                    </table>    
                    <p>For simplification purposes, the price displayed is per hour. However, the billing granularity is per minute. Please note that ML Serving is based on data stored by the Object Storage service. This information is billed for the storage duration and the associated traffic, as explained in the ‘Storage’ section. For custom models, ML Serving is also supported by Private Registry to host images of containers deployed on your cluster. This service is billed in accordance with the conditions listed in the “Containers & Orchestration” section.</p>
                
                </div>


                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>
                        
NVIDIA NGC Platform
                    </h2>
                    <p>Launch applications that leverage the power of NVIDIA GPUs, in a few clicks</p>
                    <p>The NGC platform is free, you only pay for the GPU instances.</p>
                </div>
                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/nnp.png')}}" alt="Guranteed Resources">
                
                </div>

                <div id="scroll7" class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>Management interfaces
                    </h2>
                    <br><br>
                    

                    <h2 class="mt-5">
                        

                        Horizon
                    </h2>
                    <p>Use the original OpenStack web interface to effortlessly manage your cloud resources</p>
                    <p>Access to the OpenStack Horizon management console is free.

                        </p>
                </div>
                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <br><br><br><br>
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/horizon.png')}}" alt="Guranteed Resources">
                </div>
                
                

                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>
                        
                        Physical remote control
                    </h2>
                    <p>Use KVM consoles to connect directly to your cloud servers</p>
                    <p>Access to the KVM console for instances is free.</p>
                </div>
                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/prc.png')}}" alt="Guranteed Resources">
                
                </div>

                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>
                        
                        OpenStack API
                    </h2>
                    <p>Utilise the standard OpenStack API, which is fully compatible with a wide range of tools on the market</p>
                    <p>API queries are not invoiced. You will only be billed for the resources used.</p>
                </div>
                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/osa.png')}}" alt="Guranteed Resources">
                
                </div>

                
                

                <div id="scroll8" class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>Project Management
                    </h2>
                    <br><br>
                    

                    <h2 class="mt-5">
                        

                        
User and Role Management
                    </h2>
                    <p>Manage your access and users to manage your cloud resources</p>
                    <p>User creation is free and unlimited.

                        </p>
                </div>
                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <br><br><br><br>
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/urm.png')}}" alt="Guranteed Resources">
                </div>
                
                

                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>
                        
                        Quota and Region Management
                    </h2>
                    <p>Manage your quotas and the regions accessible from your project</p>
                    <p>Activation of new regions or increase of quota are free.</p>
                </div>
                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/qrm.png')}}" alt="Guranteed Resources">
                
                </div>

                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>
                        
                        Billing Control
                    </h2>
                    <p>Estimate your consumption and create alerts to secure your budget</p>
                    <p>Generating threshold alerts for your billing is free.</p>
                </div>
                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/bc.png')}}" alt="Guranteed Resoursces">
                
                </div>

                
            
                <div id="scroll9" class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>Pricing model

                    </h2>
                    <br><br>
                    

                    <h2 class="mt-5">
                        

                        
                        Pay-as-you-go
                    </h2>
                    <p>All of our Public Cloud solutions are billed based on actual usage, which means you only pay for what you use. You launch the resources you need, when you need them, with no hidden costs. At the end of the month, we calculate your final bill, based on the resources you have used over that period, and deliver it as a single, clear invoice.</p>
                    
                </div>
                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <br><br><br><br>
                    <img class="img-fluid" width="350px" src="{{URL::asset('images/dark-cloud/pag.webp')}}" alt="Guranteed Resources">
                </div>
                
                

                <div class="mt-5 col-lg-12 mb-lg-0 mb-5">
                    <h2>
                        
                        Contract duration
                    </h2>
                    <p>On-demand resources are non-binding. You can remove a resource at any time, after which you will not be billed for it.
                        Likewise, instances with monthly billing can be stopped at any time, and only the months you use are billed (calculated on the basis of an instance existing on the 1st day of the month, at 00:00).</p>
                    
                </div>
                {{-- <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="/images/others/01.png" alt="Guranteed Resources">
                
                </div> --}}

                <div class="mt-5 col-lg-12 mb-lg-0 mb-5">
                    <h2>
                        
                        Segmentation by project
                    </h2>
                    <p>For simplified administration of your operations, you can compartmentalise your Public Cloud solutions by project.</p>
                </div>
                {{-- <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="/images/others/01.png" alt="Guranteed Resources">
                
                </div> --}}

                <div class="mt-5 col-lg-12 mb-lg-0 mb-5">
                    <h2>
                        
                        One invoice
                    </h2>
                    <p>You will receive only one invoice per project. This is sent at the beginning of each month, based on the previous month’s usage.</p>
                </div>
                
   

                










            </div>
        </div>
    </section>
    <!-- Counter End -->
              </div>
              <div>
                
            </div>
            </div>
    </div>

@endsection