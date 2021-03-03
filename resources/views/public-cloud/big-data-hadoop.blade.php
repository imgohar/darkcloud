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
                          Big Data Cluster           </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Public Cloud</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa mr-2"></i>Data Analysis </a></li>
                                    <li class="breadcrumb-item active"> big data Cluster</li>
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
                        Deploy your Hadoop big data cluster in just a few clicks</h2>
                       <p class="iq-title-desc pr-lg-5">Deploying a big data cluster is usually a long, restrictive process. DarkCloud Big Data Cluster is designed to simplify this process for you. In under an hour, we can deliver a preconfigured, ready-to-use Apache Hadoop stack.
                        <br>
                        Based on a standard open-source Hadoop distribution, we preconfigure all the services you need to process data and secure the flow of data traffic.
                        <br>
                        Deploy the DarkCloud Big Data Cluster solution for a range of uses, including market analysis, business intelligence, IoT and even preventative maintenance. The power is yours. </p></div>
                       
                    </div>
                 </div>
              </div>
           </section>
    
        <div class="container">
            <h3>Services available</h3>
            <p>
                Once you have deployed your cluster, you will have full access to all of the services listed below.
<br>
We base our solutions on the open-source Apache Hadoop operating system, along with an additional security and management layer that includes:
<ul>

   <li> A network pathway and a gateway host, to secure your traffic with the public network.</li>
   <li>  An identity management service (Kerberos and LDAP), WebSSH and Apache Ambari, to secure your operations.</li>
   <li>   Ambari software, to simplify management via a web interface.</li>
</ul>
            </p>

            <table>
                <tr>

<th>Data flow</th><td>	Sqoop, Flume</td>
</tr>
<tr><th>Security</th>	<td>Ranger, Kerberos, Know, FreelPAidM</td></tr>
    <tr><th>Storage</th>	<td>HDFS, HBase</td></tr>
        <tr><th>Monitoring</th><td>	Ambari, Logs Search, Ambari Infra</td></tr>
            <tr><th>Scheduling</th>	<td>Oozie</td></tr>
                <tr><th>Messaging</th>	<td>Kafka</td></tr>
                    <tr><th>Processing</th>	<td>YARN, Map Reduce 2, Tea, Pig, Slider, Hive, Spark 2, Presto</td>
                </tr>
            </table>
        </div>

        <div class="container">
            <h3>Architecture</h3>
            
                    <img src="{{URL::asset('images/dark-cloud/big-data-cluster.png')}}" alt="big data">
               
            </div>
        </div>

        <div class="container">
            <h3>Usage</h3>
            <div class="row">
                <div class="col-lg-4">
                    <h3>1</h3>
                    <h5>Deploy a Public Cloud project</h5>
                    <p>
                        Your cluster is based on a flexible, high-performance Public Cloud infrastructure, which is available across multiple regions. Your service is billed to match your usage, at the listed rates for the instances you use.</p>
                </div>
                <div class="col-lg-4">
                    <h3>2</h3>
                    <h5>Deploy a cluster</h5>
                    <p>
                        In just a few clicks, you can deploy a full big data cluster. DarkCloud configures it all for you.</p>
                </div>
                <div class="col-lg-4">
                    <h3>3</h3>
                    <h5>
                        Log in to the interface</h5>
                    <p>
                        In less than an hour, your cluster is ready to use. You’re now ready to log in to the graphical interface, and harness the power of big data.</p>
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
                Big Data Cluster billing</h2>
                <p class="text-white">The Hadoop cluster is delivered, already configured, in about 1 hour. Billing is based on the instances and volumes used. In addition to the instances, there is an extra charge to cover the operation of the cluster.





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
                                        
                                        What SLA does DarkCloud offer for accessing the Big Data Cluster service?
    
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">Although we maintain a high quality of service, this solution is not managed, and DarkCloud does not guarantee availability. For further information, please refer to the Terms & conditions.</p>
    
                                </div>
                            </div>
    
                            <div class="iq-accordion-block   2">
                                <div class="iq-accordion-title">
                                    <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                    <h5 class="mb-0 accordion-title">
                                        What guarantees are offered for the resources (compute, storage or other) used by the Big Data Cluster service?
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">The Big Data Cluster service is built on other cloud resources that have their own SLAs, and can be accessed from their respective pages. </p>
    
                                </div>
                            </div>
    
                            <div class="iq-accordion-block   3">
                                <div class="iq-accordion-title">
                                    <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                    <h5 class="mb-0 accordion-title">
                                       
                                        What version of the software is deployed?
    
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">The Big Data Cluster service deploys the Hortonworks Data Platform software suite in version 2.6.2.</p>
    
                                </div>
                            </div>
    
                            
                            <div class="iq-accordion-block   4">
                                <div class="iq-accordion-title">
                                    <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                    <h5 class="mb-0 accordion-title">
                                        What locations are available for the Big Data Cluster service?
    
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">The Big Data Cluster service is available in the following locations: France (Gravelines, Strasbourg), Germany (Frankfurt), United Kingdom (London), Poland (Warsaw), and Canada (Beauharnois).</p>
    
                                </div>
                            </div>
    
    
                            <div class="iq-accordion-block   5">
                                <div class="iq-accordion-title">
                                    <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                    <h5 class="mb-0 accordion-title">
                                        What is the minimum cluster size?
    
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">A cluster consists of at least 12 servers, distributed as follows: 4 worker nodes, 1 edge node, 3 master nodes, 3 utility nodes, 1 bastion node. The smallest instances are B2-60 for worker nodes, B2-15 for edge nodes, and B2-30 for master nodes.</p>
    
                                </div>
                            </div>
    
    
                            <div class="iq-accordion-block   6">
                                <div class="iq-accordion-title">
                                    <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                    <h5 class="mb-0 accordion-title">
                                       
                                        What is the maximum cluster size?
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">The cluster size can be up to 107 servers, including 50 worker nodes, 50 edge nodes, 3 master nodes, 3 utility nodes and 1 bastion node. The largest instances are R2-240 for edge nodes and worker nodes, and B2-120 for master nodes.</p>
    
                                </div>
                            </div>
    
    
                            <div class="iq-accordion-block   7">
                                <div class="iq-accordion-title">
                                    <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                    <h5 class="mb-0 accordion-title">
                                        What is big data?
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">Big data is more a concept than a technology. This involves collecting a large amount of data from multiple sources, in order to analyse it.</p>
    
                                </div>
                            </div>

                            <div class="iq-accordion-block   8">
                                <div class="iq-accordion-title">
                                    <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                    <h5 class="mb-0 accordion-title">
                                        What is Hadoop?
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">Apache Hadoop is a collection of software utilities that enables users to analyse large volumes of data. This solution is designed for large-scale deployment, and ensures high availability for data and services.</p>
    
                                </div>
                            </div>
    
                            <div class="iq-accordion-block   9">
                                <div class="iq-accordion-title">
                                    <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                    <h5 class="mb-0 accordion-title">
                                        What is the Hortonworks Data Platform?
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">Hortonworks Data Platform is an integration of Apache Hadoop and other components, made by Cloudera. It provides an enhanced user experience.</p>
    
                                </div>
                            </div>
    
                            <div class="iq-accordion-block   10">
                                <div class="iq-accordion-title">
                                    <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                    <h5 class="mb-0 accordion-title">
                                        Do I have access to the nodes after deployment?
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">Yes, your SSH key is added to the servers that are deployed. You can log in to each of the nodes if required.</p>
    
                                </div>
                            </div>
    
    
    
    
                            
    
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Faq End -->
    

     

@endsection