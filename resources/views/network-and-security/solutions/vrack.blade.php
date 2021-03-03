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
                          vRack                      </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Network and security</a></li>
                                    <li class="breadcrumb-item active"> vRack</li>
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
        <img src="{{URL::asset('images/others/shape1.png')}}" class="img-fluid shape-right" alt="QLOUD">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 mb-lg-0 mb-5">
                    <img src="{{URL::asset('images/others/04.png')}}" class="img-fluid" alt="qloud">
                </div>
                <div class="col-lg-6 col-sm-12 ">
                    <div class="iq-title-box iq-title-default iq-title-box-2">
                        <div class="iq-title-icon">
                        </div>
                        {{-- <span class="iq-subtitle">Game Servers</span> --}}
                        <h2 class="iq-title">vRack</h2>
                        <p class="iq-title-desc">Private interconnection of ALL your infrastructures
                            anywhere in the world
                        </p>
                                            </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->

    <section>
        <div class="container">
            <h3>What is the vRack?</h3>
            <p>

                The vRack (virtual rack) technology enables your DarkCloud services to be connected, isolated or spread across one or multiple private secure networks. Build complex private infrastructures on a global multi-datacenter scale using unique network technologies.
                
            </p>

            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <img src="{{URL::asset('images/dark-cloud/vrack1.png')}}" alt="img">
                </div>
                <div class="col-lg-4 col-md-4">
                    <h4>	
                        Build your private network</h4>
                        <p>
                        The vRack enables you to isolate your critical servers within a private VLAN. Your data is secure and communication between your servers is not routed via the public network.</p>
                </div>
                <div class="col-lg-8 col-md-8">
                    <img src="{{URL::asset('images/dark-cloud/vrack2.png')}}" alt="img">
                </div>
                <div class="col-lg-4 col-md-4">
                    <h4>	
                        Multiply your VLANs</h4>
                        <p>
                        	


Deploy up to 4000 private VLANs to isolate your servers, to filter customer access and secure your data.</p>
                </div>
                <div class="col-lg-8 col-md-8">
                    <img src="{{URL::asset('images/dark-cloud/vrack3.png')}}" alt="img">
                </div>
                <div class="col-lg-4 col-md-4">
                    <h4>	
                        A multi-service infrastructure</h4>
                        <p>
                        	


	


The vRack adapts to the needs of your business. Build your infrastructure using the products and services of our Infrastructure, Storage, Big Data and Private Cloud ranges.</p>
                </div>

                <div class="col-lg-8 col-md-8">
                    <img src="{{URL::asset('images/dark-cloud/crack5.png')}}" alt="img">
                </div>
                <div class="col-lg-4 col-md-4">
                    <h4>
                    Multi-datacentre VLAN</h4>
                        <p>
	
                            

                            The vRack functions between the various DarkCloud datacentres. From Europe to Canada, design your private redundant infrastructures distributed between multiple datacentres.</p>
                </div>


                <div class="col-sm-2">
                    <img src="{{URL::asset('images/dark-cloud/vrack6.png')}}" alt="vrack">
                </div>
                <div class="col-sm-2">
                    <img src="{{URL::asset('images/dark-cloud/vrack7.png')}}" alt="vrack">
                </div>
                <div class="col-sm-2">
                    <img src="{{URL::asset('images/dark-cloud/vrack8.png')}}" alt="vrack">
                </div>
                <div class="col-sm-2">
                    <img src="{{URL::asset('images/dark-cloud/vrack9.png')}}" alt="vrack">
                </div>
                <div class="col-sm-2">
                    <img src="{{URL::asset('images/dark-cloud/vrack10.png')}}" alt="vrack">
                </div>
                <div class="col-sm-2">
                    <img src="{{URL::asset('images/dark-cloud/vrack11.png')}}" alt="vrack">
                </div>


            </div>

        </div>
    </section>

    <section>
        <div class="container text-center">
            <h3>3 options to go further with the vRack</h3>
            <div class="row">
                <div class="col-lg-4">
                    <img src="{{URL::asset('images/dark-cloud/vrack12.png')}}" alt="vrack">
                    <h5>Public IP routing
                    </h5>
                    <p>Allocate an IP block to a VLAN to make some of the servers or virtual machines in your infrastructure public.</p>
                </div>
                <div class="col-lg-4">
                    <img src="{{URL::asset('images/dark-cloud/vrack13.png')}}" alt="vrack">
                    <h5>Load Balancing IPs
                    </h5>
                    <p>Easily balance the load between the different services of your VLAN within the vRack.

                    </p>
                </div>
                <div class="col-lg-4">
                    <img src="{{URL::asset('images/dark-cloud/crack14.png')}}" alt="vrack">
                    <h5>Dedicated Connect
                    </h5>
                    <p>Dedicated Connect enables you to directly link your business network to the OVH data centers via the available PoPs.

                    </p>
                </div>
            </div>
        </div>
    </section>



@endsection