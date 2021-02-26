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
                                    Full Game Server range
                                </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="/"><i class="fa fa-home mr-2"></i>Home</a></li>
                                    <li class="breadcrumb-item"><a href="/bare-metal-game"><i class="fa mr-2"></i>Bare Metal Game Server</a></li>
                                    <li class="breadcrumb-item active"> Price Range</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    
    <section>
        <div class="container">
            <div class="text-right">
                <a href="" class="btn btn-outline-primary">See the price of our other server ranges</a>
            </div>

            <form class="m-2">
                {{-- <select></select> --}}
                <div class="form-row">
                    <div class="d-inline-block col-lg-2 col-md-2">
                        <select class="text-dark">
                            <option value="">Region</option>
                        </select>
                    </div>
                    <div class="d-inline-block col-lg-2 col-md-2">
                        <select class="text-dark">
                            <option value="">Processor</option>
                        </select>
                    </div>
                    <div class="d-inline-block col-lg-2 col-md-2">
                        <select class="text-dark">
                            <option value="">Memory</option>
                        </select>
                    </div>
                    <div class=" d-inline-block col-lg-2 col-md-2">
                        <select class="text-dark">
                            <option value="">Storage</option>
                        </select>
                    </div>
                    <div class="d-inline-block col-lg-2 col-md-2">
                        <select class="text-dark">
                            <option value="">Network</option>
                        </select>
                    </div>
                    <div class="d-inline-block col-lg-2 col-md-2">
                        <select class="text-dark">
                            <option value="">Price</option>
                            <option value="">Price 2</option>
                        </select>
                    </div>
                    
                </div>
                <div class="d-block mt-2 text-right">
                    <button type="reset" class="btn btn-outline-primary">Reset All filters</button>
                </div>
               
            </form>

            <div class="text-right">
                Sorting By:
                <form>
                    <select class="col-lg-2 col-md-2">
                        <option value="">Hi</option>
                    </select>
                </form>
            </div>

            <div class="row">
                <div class="col-lg-12 mt-5 bg-light">
                    <h4><a href="/bare-metal/game/game-1">Game-1</a></h4>
                    <br>
                    <div class="row">
                        <div class="col-lg-4">
                            <p><b>Processor:</b> AMD Ryzen 5 3600X - 6 c / 12 t - 3.8 GHz / 4.4 GHz</p>
                            <p><b>Memory:</b> From 32GB</p>
                            <p><b>Storage:</b> NVMe, SATA available</p>
                        </div>
                        <div class="col-lg-4">
                            <p><b>Public bandwidth:</b> 1 Gbps</p>
                            <p><b>Private bandwidth:</b> -</p>
                        </div>
                        <div class="col-lg-4">
                            <p>From: <br> <strong style="font-size: 24px">$95.12
                                / month</strong></p>
                            <a href="/bare-metal/game/game-1" class="btn btn-primary">Configure</a>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="text-dark">Available in 6 datacenters</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="text-dark">Delivery from
                                    120s</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12  mt-5  bg-light">
                    <h4>Game-32</h4>
                    <br>
                    <div class="row">
                        <div class="col-lg-4">
                            <p><b>Processor:</b> Intel i7-6700K - 4 c / 8 t - 4 GHz / 4.2 GHz</p>
                            <p><b>Memory:</b> From 32GB</p>
                            <p><b>Storage:</b> 2×480GB SSD SATA + 1×4TB HDD SATA</p>
                        </div>
                        <div class="col-lg-4">
                            <p><b>Public bandwidth:</b> From 100 Mbps</p>
                            <p><b>Private bandwidth:</b> -</p>
                        </div>
                        <div class="col-lg-4">
                            <p>From: <br> <strong style="font-size: 24px">$96.89
                                / month</strong></p>
                            <a href="" class="btn btn-primary">Configure</a>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="text-dark">Available in 2 datacenters</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="text-dark">Delivery from
                                    120s</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 mt-5 bg-light">
                    <h4>Game-64</h4>
                    <br>
                    <div class="row">
                        <div class="col-lg-4">
                            <p><b>Processor:</b> Intel i7-7700K - 4 c / 8 t - 4.2 GHz / 4.5 GHz</p>
                            <p><b>Memory:</b>64GB</p>
                            <p><b>Storage:</b> 2×450GB SSD NVMe + 1×4TB HDD SATA</p>
                        </div>
                        <div class="col-lg-4">
                            <p><b>Public bandwidth:</b> From 100 Mbps</p>
                            <p><b>Private bandwidth:</b> -</p>
                        </div>
                        <div class="col-lg-4">
                            <p>From: <br> <strong style="font-size: 24px">$131.09
                                / month</strong></p>
                            <a href="" class="btn btn-primary">Configure</a>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="text-dark">Available in 2 datacenters</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="text-dark">Delivery from
                                    120s</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>



        </div>
    </section>


@endsection