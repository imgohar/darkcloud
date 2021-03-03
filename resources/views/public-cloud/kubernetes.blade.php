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
                          Managed Kubernetes Service               </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Public Cloud</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa mr-2"></i>Containers & Orchestration </a></li>
                                    <li class="breadcrumb-item active"> Managed Kubernetes Service</li>
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
                        Free Managed Kubernetes® to orchestrate your containers</h2>
                       <p class="iq-title-desc pr-lg-5">Kubernetes® is one of the most widely-used container orchestration tools on the market. It is used by companies of all sizes. It can be used to deploy applications, scale them up and make them more resilient — even in hybrid or multi-cloud infrastructures.
                        <br>
                        The Managed Kubernetes® solution is powered by DarkCloud Public Cloud instances. With DarkCloud Load Balancers and additional disks integrated into it, you can host any kind of work load on it with total reversibility.
                        <br>
                        The internal components of the solution are deployed, hosted, monitored and maintained in good condition by our teams. They are also upgraded free of charge. This way, you can focus on the containers and services associated with your core business, while getting the very most out of the Kubernetes® ecosystem.</p></div>
                       
                    </div>
                 </div>
              </div>
           </section>
    <!-- Icon-box Start -->
    <section class="iq-pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            <div class="iq-img-area">
                                <img src="{{URL::asset('images/fancy-list/01.png')}}" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title">Fully managed by DarkCloud


                                </h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">DarkCloud deploys, hosts and maintains all of the components needed for Kubernetes® to work, including updates linked to bugs and security patches. We also maintain the necessary components on your nodes. Once you have downloaded your kubeconfig file, you can use all the features of a certified Kubernetes® service straight away, while maintaining your focus on your business. Our teams manage the software elements and underlying hardware, which also benefits from DarkCloud’s anti-DDoS protection.
                                    </p>
                                </div>

                                

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            <div class="iq-img-area">
                                <img src="{{URL::asset('images/fancy-list/03.png')}}" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title">Scalability and high availability</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Exposing a service on multiple worker nodes is easily done, in just a few command lines. Kubernetes® launches containers and configures the Load Balancer for you, and you can instantly add new computing nodes. You can also define the health conditions for each service, after which Kubernetes® will relaunch any pods and containers that do not meet these criteria. Your nodes can be monitored, and your services benefit from the high availability of DarkCloud Infrastructure-as-a-Service (IaaS) solutions.
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
       <h3>Full management by DarkCloud</h3>
       <div class="row">
           <div class="col-lg-6">
               <img src="{{URL::asset('images/dark-cloud/kubernetes.png')}}" alt="kuberenets">
           </div>
           <div class="col-lg-6">
               <h4>Reversibility, multi and hybrid cloud
            </h4>
            <p>Thanks to the CNCF conformance programme, a number of cloud licensors and providers guarantee the total reversibility of data. Kubernetes® has in fact become the standard for multi-cloud (i.e. different cloud providers or datacentres) and hybrid (i.e. on-premises and cloud distribution) scenarios. The same configuration can be transferred from one provider to another in no time.</p>
           </div>
           <div class="col-lg-12">
               <h4>Focus on your containerised software layers</h4>
               <p>We host and maintain all of the Kubernetes components, as well as the operating system and common components (Docker runtime, etc.) of your work nodes.</p>
           </div>
       </div>
   </div>


   <div class="container">
       <h4>How To</h4>
       <div class="row">
           <div class="col-lg-4">
               <h3>1</h3>
               Create your Kubernetes cluster</div>
           <div class="col-lg-4"> <h3>2</h3>
            Add instance-based nodes</div>
           <div class="col-lg-4"> <h3>3</h3>
               Connect to Kubernetes to start deploying containers</div>
       </div>
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
                                <h4 class="iq-fancy-title">Architectures for microservices and highly-distributed tasks
                                </h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">The responsiveness and low overheads of Kubernetes® allow you to economise the underlying infrastructures for microservices. Able to work with historical applications (stateful load balancing, thanks to persistent volumes), Kubernetes® will intelligently distribute your tasks, depending on their planned usage of RAM and CPU. You can also set effective high limits, which cause the automatic planning process to restart. Combine monthly and hourly IaaS resources to optimise your billing.
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
                                <h4 class="iq-fancy-title">Easy deployment, from development to production</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> The majority of open source and commercial applications are now distributed in a Docker container or Helm chart format, deployable in one single command line on your Kubernetes® service. Kubernetes® intelligently shares containers and services on different nodes. Want to separate development, testing, acceptance and production? Simply move the configuration file from one cluster to the other. Thanks to the declarative syntax, you can simply describe the status you want!
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
                                <h4 class="iq-fancy-title">Transparent and controlled version upgrades</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Updating your application layers is made simple, thanks to the different abstraction levels provided by Kubernetes®. By choosing the “rolling upgrade” option, you can carry out transparent version updates for your end users. Our team uses this approach itself, to update the components of your Kubernetes® clusters for patching minor bugs and security.
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
        <h3>Features</h3>
        <div class="row">
            <div class="col-lg-6">
                <h4>Persistent volumes

                </h4>
                <p>You can add persistent volumes to your worker nodes. These are based on additional disks of the size and type of your choice (standard or high-performance, billed to the nearest gigabyte). This ensures durability for your stateful application data.</p>
                <br>
                
                <h4>Load Balancer and pod autoscaling
                </h4>
                <p>Your Kubernetes® service is delivered to you, then your work nodes are provisioned, in a few minutes. The scheduler displays new services or replicates them on your nodes in a matter of seconds. By integrating the DarkCloud Load Balancer, you can efficiently distribute traffic over multiple nodes. You can set CPU/RAM quotas, health conditions and automatic scaling for your pods.</p>
                <br>
                <h4>Basic interface</h4>
                <p>You can configure, add and delete nodes via the DarkCloud Control Panel. You can also easily install the Kubernetes® Dashboard.</p>
                

                </p>
            </div>
            <div class="col-lg-6">
                <h4>Role-based access control</h4>
                <p>The role-based access control feature is included as standard, and can be used to deploy services that require specific levels of access.
                </p>
                <br>
                <h4>Multiple versions and upgrades</h4>
                <p>You can choose to use one of the last three (3) stable versions of Kubernetes® when creating your cluster. We offer new minor versions in the quarter following their availability.</p>
                <br>
                <h4>Auto-scaling nodes (soon)</h4>
                <p>Dynamically add computing resources to your cluster, to fit your nodes' requirements.</p>
                <br>
                <h4>Integration with the vRack (soon)</h4>
                <p>Display your cluster and its services publicly, or solely through your private DarkCloud network.</p>
                
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
                Managed Kubernetes® billing</h2>
                <p class="text-white">The Managed Kubernetes® service is provided free of charge. This includes deployment, hosting and updates for all of the cluster’s master components, as well as the operational maintenance for your nodes (both operating system and Kubernetes® worker node components). You only pay for the computing resources and the storage hosting your containers and their persistent data, all while enjoying the standard DarkCloud Public Cloud tariffs (with no charges for traffic).




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


     

        <div class="container">
            <h4>Also available on the DarkCloud infrastructure</h4>
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{URL::asset('images/dark-cloud/platform-9.png')}}" alt="platform-9">
                    <h5>DarkCloud partners with Platform9 to offer Kubernetes on dedicated servers</h5>
                    <p>For customers wishing to make the most of Kubernetes orchestration on bare metal servers, DarkCloud has partnered with Platform9 to offer Kubernetes on its full range of dedicated servers.
                        <br>
                        Users who prefer strong hardware isolation or integration with their enterprise IT systems can now deploy a 100%-dedicated Kubernetes service, managed by Platform9, on all DarkCloud dedicated servers by subscribing to our new partner. Platform9 is a US-based company specialised in automatically deploying solutions like Kubernetes.</p>
                        <a href="https://platform9.com/managed-kubernetes/"> Click here to find out more.
                        </a>
                </div>
                <div class="col-lg-6">
                    <p>DarkCloud is the only provider that offers a wide range of Kubernetes deployments across all of its services, combining public (OpenStack), private (VMware) and dedicated cloud solutions.</p>
                </div>
            </div>
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
                                    
                                    What guarantees are offered for the resources (compute, storage, etc.) used by the Managed Kubernetes Service?
                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">The Managed Kubernetes Service relies on other cloud resources (e.g. instances, Block Storage, load balancers, etc.). You can view their SLAs on their respective pages.</p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   2">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What SLA does DarkCloud offer for the Managed Kubernetes Service API server?
                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">The SLA guarantees 99.5% monthly availability for the Managed Kubernetes Service API server. Since this solution is free, this rate is not a commitment. For further information, please refer to the Terms & conditions.</p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   3">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What is the minimum size for a Managed Kubernetes Service cluster?
                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">It takes at least one computing node to run the service, but we strongly recommend deploying three nodes to form a resilient cluster. The smallest instance models for the service are the b2-7 models.</p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   4">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What is the maximum size for a Managed Kubernetes Service cluster?
                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">The current limit is 100 computing nodes for a cluster. The most powerful instance models are eligible for the Managed Kubernetes Service: B2-120, C2-120, R2-240 and I1-180.</p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   5">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What is Kubernetes used for?
                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">Kubernetes is a resource orchestrator. It distributes and places Docker containers on the available cluster nodes, applying positioning rules and taking your application’s organisation into account.</p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   6">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What Kubernetes versions are offered?
                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">
                                    We offer a service certified by the CNCF for the latest three minor versions supported by Kubernetes. You can migrate from one version to the next automatically. Finally, for all versions, security updates (patch updates) are applied according to the security policy you have chosen.
                                </p>

                            </div>
                        </div>

                        
                        <div class="iq-accordion-block   7 ">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    How do I configure a Kubernetes cluster?
                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">
                                    Installing and configuring Kubernetes software is a relatively complex process. This is why we deliver a service that offers near-instantaneous deployment, regardless of how complex the cluster management will be.
                                </p>

                            </div>
                        </div>


                        <div class="iq-accordion-block   8">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What is a container in the cloud?
                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">
                                    A container is a package that contains an application, and all of the system dependencies required for it to operate properly. When it runs, it will run its application in an isolated environment. A container can also be easily transported from one platform to another, ensuring identical operation in all cases.
                                </p>

                            </div>
                        </div>


                        <div class="iq-accordion-block   9">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What is Docker?
                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">
                                    Docker is the most popular implementation of containerisation technologies. It works mostly under Linux, and has a very large community.
                                </p>

                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq End -->

    
@endsection