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
                                    Dedicated server Game-1                    </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="/bare-metal-game"><i class="fa fa-home mr-2"></i>Bare Metal Game Server</a></li>
                                    <li class="breadcrumb-item"><a href="/bare-metal/game/price"><i class="fa fa-home mr-2"></i>Game</a></li>
                                    <li class="breadcrumb-item active"> Game 1</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
   <div class="container">
       <div class="row">
           <div class="col-lg-6 col-md-6">
               <h3>
                Game-1
               </h3>
               <p>This server is equipped with the very latest AMD technology with the Ryzen 5 3600X, which when combined with the speed of NVMe SSD storage, guarantees optimal conditions for gamers.</p>
               <p>With DarkCloud’s water-cooling technology, this configuration harnesses the full power of its components. This way, you can host host simultaneous sessions for a number of the very latest games, with no impact on performance, thanks to the power of the 6-core processor. All of this delivers an optimised gaming experience, with no service interruptions.</p>
               <p>Keep latency to a minimum during gaming sessions, by deploying your servers in the datacentres closest to your gamers.</p>
               <ul>
                   <li>Ryzen 5 3600X – 6 cores at 3.8GHz</li>
                   <li>Exclusive Anti-DDoS Game protection</li>
                   <li>Unlimited traffic</li>
               </ul>
           </div>
           <div class="col-lg-6 col-md-6">
            <form>
                <div class="form-row mt-5">
                    
                    <div class="col-lg-4">
                        <label for="n-1"><input type="radio" style="width:15px" id="n-1" class="form-control" name="month"> <span class="d-inline-block mt-2" style="font-size: 18px">Without commitment</span> </label>
                    </div>
                    <div class="col-lg-4 d-inline">
                        <label for="n-2"><input type="radio" style="width:15px" id="n-2" class="form-control" name="month"> <span class="d-inline-block mt-2" style="font-size: 18px">12 month</span> </label>
                    </div>
                    <div class="col-lg-4 d-inline">
                        <label for="n-3"><input id="n-3" type="radio" style="width:15px" class="form-control" name="month"> <span class="d-inline-block mt-2" style="font-size: 18px">24 month</span> </label>
                    </div> 

                    <div class="col-lg-6 col-md-6">
                        <h4>$117.99 /month</h4>
                            <p>Setup fees: $88.99</p>
                    </div>
                    <div class="col-lg-6 col-md-6 text-right">
                        <a href="" style="padding: 10px 40px" class="btn btn-primary">Order</a>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5">
                                <p class="mt-2">Germany (Frankfurt - FRA)</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2">
                                <p class="mt-2 bg-dark text-center text-white rounded">72h</p>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5">
                                <select name="">
                                    <option value="">Change Datacenter</option>
                                </select>
                            </div>

                            <div class="col-lg-12">
                                <strong>Processor:</strong>
                                <p>AMD Ryzen 5 3600X - 6c/ 12t - 3.8GHz/ 4.4GHz</p>
                            </div>
                            <div class="col-lg-12">
                                <strong>Memory:</strong>
                               
                                    <div class="col-lg-12">
                                        <label for="n-4"><input id="n-4" type="radio" style="width:15px" class="form-control" name="month"> <span class="d-inline-block ml-1 mt-2" style="font-size: 18px">32 GB DDR4 ECC 2666MHz
                                        </span> </label>
                                        <span class="d-inline-block ">0</span>
                                    </div>
                                    
                              
                            </div>



                        </div>
                        

                    </div>




                </div>    
            </form>



           </div>
       </div>
   </div>
@endsection