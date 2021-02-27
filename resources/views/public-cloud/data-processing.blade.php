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
                         Data Processing          </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Public Cloud</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa mr-2"></i>Data Analysis </a></li>
                                    <li class="breadcrumb-item active"> data processing</li>
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
                        Quick, simple data analysis with Apache Spark</h2>
                       <p class="iq-title-desc pr-lg-5">When you want to process your business data, you have a certain volume of data in one place, and a query in another, in the form of a few lines of code. With Data Processing, OVHcloud deploys an Apache Spark cluster in just a few minutes to respond to your query. </p></div>
                       
                    </div>
                 </div>
              </div>
           </section>
    
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h4>Parallel processing</h4>
                    <p>Apache Spark is one of the most popular frameworks on the market for massively parallel data processing. You can use it to manage multiple computing nodes, while storing the operations in the RAM. This means you choose the level of parallel processing you want.</p>
                </div>
                <div class="col-lg-4">
                    <h4>You write the code, we deploy it</h4>
                    <p>Make your life easier. We manage the cluster deployment, so that you can focus on your business needs. Once you have generated your Java or Python code, it is executed directly on your cluster.</p>
                </div>
                <div class="col-lg-4">
                    <h4>Cost reduction</h4>
                    <p>Rather than keeping an Apache Spark cluster permanently for occasional computing operations, you can use Data Processing to create a dedicated cluster in just a few minutes, whenever you need one. Once the analysis is complete, the cluster is freed up.</p>
                </div>
            </div>
        </div>

        <div class="container">
            <h3>Uses for our Data Processing solution</h3>
            <div class="row">
                <div class="col-lg-4 border p-3 m-2">
                    <h5>Performance reporting</h5>
                    <p>Whether you want to process millions of lines of tabular data, analyse thousands of tweets, or calculate KPIs, you can use Data Processing to aggregate massive volumes of data for strategic reports, used in data science or in other fields.</p>
                </div>
                <div class="col-lg-3 border p-3 m-2">
                    <h5>Customer knowledge</h5>
                    <p>Want more insight into what your European customers use, or what centres of interest are popular among your users? With the MLib library integrated into Apache Spark, you can learn more about your customers’ journeys, habits, distribution, and much more.</p>
                </div>
                <div class="col-lg-4 border p-3 m-2">
                    <h5>Improved buyer experience</h5>
                    <p>In the e-commerce sector, it is important to recommend products to your customers that may interest them. This means you need to analyse all shopping baskets, to detect complementary services and offer them when users visit the website.</p>
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
                    Data Processing Billing</h2>
                   
    
    
    
    
    
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
    
        

        <div class="container">
            <h3>How does the Data Processing solution work?</h3>
            <p>OVHcloud carefully optimises its deployments, and this has made it able to create and destroy Apache Spark clusters on demand, which are used to process high volumes of data. Once they are deployed, Spark will directly browse through the data and load it into the memory, then process it all at once before delivering the result and freeing up the resources.</p>
            <div class="row">
                <div class="col-lg-4">
                    <h3>1</h3>
                    <h5>Startup</h5>
                    <p>
                        With your data stored in one place and your code stored in another, create a cluster that is sized to match your needs.</p>
                </div>
                <div class="col-lg-4">
                    <h3>2</h3>
                    <h5>Submit your job</h5>
                    <p>
                        Apache Spark will distribute the load across the cluster that has just been deployed.

</p>
                </div>
                <div class="col-lg-4">
                    <h3>3</h3>
                    <h5>
                        Retrieve the result</h5>
                    <p>
                        Once the processing is complete, you can easily retrieve the result of your analysis.</p>
                </div>
            </div>
        </div>

   
  


     

@endsection