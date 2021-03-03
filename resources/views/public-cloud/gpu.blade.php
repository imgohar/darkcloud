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
                           Guranteed Resources                       </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Public Cloud</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa mr-2"></i>Compute </a></li>
                                    <li class="breadcrumb-item active"> GPU</li>
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
                        Cloud servers specially designed for processing massively parallel tasks  </h2>
                       <p class="iq-title-desc pr-lg-5">GPU instances integrate NVIDIA Tesla V100 graphic processors to meet the requirements of massively parallel processing. Since they are integrated into the DarkCloud solution, you get the advantages of on-demand resources and hourly billing. These cloud servers are adapted to the needs of machine learning and deep learning.</p></div>
                       
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
                                <h4 class="iq-fancy-title"> Powered by NVIDIA Tesla V100</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> These GPUs are among the most powerful on the market, and are designed for use in datacentres. They accelerate computing in the fields of artificial intelligence (AI) and graphic computing.
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
                                <h4 class="iq-fancy-title"> NVIDIA GPU Cloud</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> To provide the best user experience, DarkCloud and NVIDIA have partnered up to offer a best-in-class GPU-accelerated platform, for deep learning and high-performance computing and ​artificial intelligence (AI). It is the simplest way to deploy and maintain GPU-accelerated containers, via a full catalogue.
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
                                <h4 class="iq-fancy-title"> Between one and four cards with guaranteed performance</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> Tesla cards are delivered directly to the instance via PCI Passthrough, without a virtualisation layer, so that all of their power is dedicated to your use. Up to four cards can be connected to combine their performance. As a result, the hardware delivers all of its computing power to your application.
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
        <h2>NVIDIA Tesla V100 Features
        </h2>
       
        <table>
            <tr>
                <th>Performance with NVIDIA GPU Boost</th>
                <th>	
                    Bidirectional connection bandwidth</th>
                    <th>CoWoS Stacked HBM2 memory</th>
            </tr>
            <tr>
                <td>double-precision, 7 teraFLOPS</td>
                <td>PCIe 32GB/s</td>
                <td>
                    capacity, 16GB HBM2
                </td>
            </tr>
            <tr>
                <td>single-precision, 14 teraFLOPS</td>
                <td></td>
                <td>bandwidth, 900GB/s</td>
            </tr>
            <tr>
                <td>deep learning, 112 teraFLOPS</td>
                <td></td>
                <td></td>
            </tr>
        </table>
        

    </div>



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
                                <h4 class="iq-fancy-title"> Image recognition</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> Extracting data from images to classify them, identify an element or build richer documents is necessary in many industries. With frameworks like Caffe2 combined with the Tesla V100 GPU, medical imaging, social networks, public protection and security become easily accessible.
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
                                <h4 class="iq-fancy-title"> Situation analysis</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> Real-time analysis is required in some cases, where an appropriate reaction is expected to face varied and unpredictable situations. This kind of technology is used for self-driving cars and internet network traffic analysis, for example. This is where deep learning comes in, to form neural networks that learn independently through a training stage.
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
                                <h4 class="iq-fancy-title">Human interaction</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">In the past, people learned to communicate with machines. We are now in an era where machines are learning to communicate with people. Whether through speech recognition or the emotion recognition through sound and video, tools such as TensorFlow push the boundaries of these interactions, opening up a multitude of new uses.
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
        <h3>
            Need to train your artificial intelligence with GPUs?</h3>
            <p>With our AI Training solution, you can train your AI models efficiently and easily, and optimise your GPU computing resources. <br>
            Focus on your business instead of the infrastructure that supports it. Launch your training tasks via a command line, and pay for the resources used by the minute.</p>
            <p><a href="/public-cloud/ai-training">Get started with DarkCloud AI Training</a></p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h4>
                    Get started</h4>
                    <p>Launch your instance by choosing a T1 model and NGC image for your project.</p>
            </div>
            <div class="col-lg-4">
                <h4>Configure</h4>
                <p>$ docker pull nvcr.io/nvidia/tensorflow <br>
                 $ nvidia-docker run nvidia/tensorflow t1</p>
            </div>
            <div class="col-lg-4">
                <h4>Use</h4>
                <p>Your AI framework is ready for processing.</p>
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
                GPU billing   </h2>
                <p class="text-white">GPU instances are billed like all of our other instances, on a pay-as-you-go basis at the end of each month. The price depends on the size of the instance you have booted, and the duration of its use.</p>
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
                                    What SLA does DarkCloud guarantee for a GPU instance?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">TThe SLA guarantees 99.999% monthly availability on GPU instances. For further information, please refer to the Terms & conditions. </p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   2">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Which hypervisor is used for instance virtualisation?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">Just like other instances, GPU instances are virtualised by the KVM hypervisor in the Linux kernel. </p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   3">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What is PCI Passthrough?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text"> Cards with GPUs are served via the physical server's PCI bus. PCI Passthrough is a hypervisor feature that allows you to dedicate hardware to a virtual machine by giving direct access to the PCI bus, without going through virtualisation. </p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   4">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can I resize a GPU instance?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text"> Yes, GPU instances can be upgraded to a higher model after a reboot. However, they cannot be downgraded to a lower model. </p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   5">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Do GPU instances have anti-DDoS protection?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">Yes, our anti-DDoS protection is included with all DarkCloud solutions at no extra cost.</p>

                            </div>
                        </div>


                        <div class="iq-accordion-block   6">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can I switch to hourly billing from an instance that is currently billed monthly?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">If you have monthly billing set up, you cannot switch to hourly billing. Before you launch an instance, please take care to select the billing method that is best suited to your project. </p>

                            </div>
                        </div>


                        

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq End -->

    
@endsection