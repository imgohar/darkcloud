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
    <!-- Counter Start -->
    <section class="iq-counter-section pt-0 iq-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <h2>Guaranteed Resources</h2>
                    <p>Deploy cloud instances with fully-guaranteed resources that cover a very wide range of uses</p>
                </div>
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="/images/others/01.png" alt="Guranteed Resources">
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
                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>Sandbox
                    </h2>
                    <p>Deploy cloud instances with fully-guaranteed resources that cover a very wide range of uses</p>
                </div>
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <img class="img-fluid" width="350px" src="/images/others/02.png" alt="Guranteed Resources">
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

                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <h2>DarkCloud cloud storage</h2>
                    <br><br>
                    

                    <h2 class="mt-5">Block Storage
                    </h2>
                    <p>Create storage volumes, which can be used as additional disks and secured via triple replication of data</p>
                </div>
                <div class="mt-5 col-lg-6 mb-lg-0 mb-5">
                    <br><br><br><br>
                    <img class="img-fluid" width="350px" src="/images/others/04.png" alt="Guranteed Resources">
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
                    <img class="img-fluid" width="350px" src="/images/others/05.png" alt="Guranteed Resources">
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

            </div>
        </div>
    </section>
    <!-- Counter End -->
    <!-- Counter Start -->
    <section class="main-bg" style="background: url(images/others/06.jpg) no-repeat 0 0; background-attachment: fixed; background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <div class="iq-title-box iq-title-default iq-title-box-2"> <span class="iq-subtitle">Language</span>
                        <h2 class="iq-title text-white">Work with the language you already love</h2>
                        <p class="iq-title-desc text-white">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.</p>
                    </div>
                    <div class="iq-list  iq-two-column">
                        <ul class="iq-list-with-icon">
                            <li class="text-white">
                                <i class="ion ion-checkmark-round"></i> Public Cloud </li>

                            <li class="text-white">
                                <i class="ion ion-checkmark-round"></i> Private Cloud </li>

                            <li class="text-white">
                                <i class="ion ion-checkmark-round"></i> Virtual Private Cloud </li>

                            <li class="text-white">
                                <i class="ion ion-checkmark-round"></i> Tally-as-a-Service </li>

                            <li class="text-white">
                                <i class="ion ion-checkmark-round"></i> Banking Community Cloud </li>

                            <li class="text-white">
                                <i class="ion ion-checkmark-round"></i> Load Balancing </li>

                        </ul>
                    </div>
                    <div class="iq-btn-container mt-4">
                        <a class="iq-button iq-btn-medium iq-btn-round iq-btn-flat d-inline" href="javascript:void(0)">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6 align-self-stretch align-self-center">
                    <div class="iq-popup-video">
                        <div class="iq-video-img position-relative">

                            <div class="iq-video-icon wow FadeIn">
                                <a href="https://www.youtube.com/watch?v=XHOmBV4js_E" class="iq-video popup-youtube">
                                    <i aria-hidden="true" class="ion ion-play"></i> </a>
                                <div class="iq-waves">
                                    <div class="waves wave-1"></div>
                                    <div class="waves wave-2"></div>
                                    <div class="waves wave-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter End -->
@endsection