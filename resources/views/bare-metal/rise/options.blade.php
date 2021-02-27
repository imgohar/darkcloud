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
                           Optional With Rise Server                      </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Bare Metal Rise</a></li>
                                    <li class="breadcrumb-item active"> Optional With Rise Server </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Icon-box Start -->
    <section class="iq-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center iq-title-box iq-title-default iq-title-box-2">
                        <div class="iq-title-icon">
                        </div>
                        <span class="iq-subtitle">Additional options</span>
                        <h2 class="iq-title">
                            Features </h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title">Additional IP addresses</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">You can attach up to 256 IP addresses to your server, with no monthly costs. You just pay a small setup fee of $2.24 /IP . IP addresses and/or IP blocks can be transferred between DarkCloud servers, so you can keep them if you choose to change the servers you use. Additional IPs can be geolocated in 14 countries.


                                    </p>
                                    <br>
                                    <a href="/bare-metal-ip">Find Out more</a>
                                </div>

                                

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title"> Additional backup storage</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Each of our dedicated servers has a 500GB backup space for storing your data and configuration files. This space can be increased to 1, 5 or 10TB for larger volumes.
                                    </p>
                                    <br>
                                    <a href="/bare-metal-backup-storage">Find Out more</a>
                                </div>

                               

                            </div>
                        </div>
                    </div>
                </div>
                


            </div>
        </div>
    </section>
    <!-- Icon-box End -->

@endsection