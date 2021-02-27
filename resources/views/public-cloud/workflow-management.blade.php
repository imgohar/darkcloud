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
                         Workflow Management           </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Public Cloud</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa mr-2"></i>Containers & Orchestration </a></li>
                                    <li class="breadcrumb-item active"> Workflow Management</li>
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
                        The scenario-based automation tool for your infrastructure</h2>
                       <p class="iq-title-desc pr-lg-5">Architectures deployed in the cloud are rarely static. They change and adapt depending on circumstances, and business needs. As a result, industrialising these scaling changes has become a necessity, to maintain quality and efficiency throughout the entire application lifecycle. With Workflow Management, you can automate backups, power machines on and off in certain time windows, and even resize a cluster during traffic spikes. </p></div>
                       
                    </div>
                 </div>
              </div>
           </section>
    
             <!-- Icon-box Start -->
    <section class="iq-pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            <div class="iq-img-area">
                                <img src="{{URL::asset('images/fancy-list/01.png')}}" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title">Automated backup


                                </h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Backups are of vital importance, and are undoubtedly one of the first factors that should be taken into account when we consider automating an infrastructure. OVHcloud has simplified the setup of backup scenarios, by making them directly accessible via the OVHcloud Control Panel
                                    </p>
                                </div>

                                

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            <div class="iq-img-area">
                                <img src="{{URL::asset('images/fancy-list/01.png')}}" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title">Task scheduler



                                </h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">The system can work as a task scheduler, similarly to how cron works as a job scheduler in Linux. Once the workflow (or scenario) has been defined, the service will manage its execution. Whether it is a basic API call that can be completed in a few seconds, or a logistical chain of tasks that requires several hours to complete, Workflow Management will take care of it.
                                    </p>
                                </div>

                                

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            <div class="iq-img-area">
                                <img src="{{URL::asset('images/fancy-list/01.png')}}" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title">Triggers for condition-based scenarios


                                </h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">You can define scenarios to be launched, as well as the conditions for execution, on the basis of the “if this, then that” principle. The trigger can be a timestamp, or an external request (an API call) that will begin verifying the programmed conditions.
                                    </p>
                                </div>

                                

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iq-fancy-box-list iq-fancy-box-list-1  text-left iq-shadow">
                        <div class="iq-fancy-box-content">
                            <div class="iq-img-area">
                                <img src="{{URL::asset('images/fancy-list/03.png')}}" class="img-fluid" alt="QLOUD"> </div>
                            <div class="iq-fancy-details">
                                <h4 class="iq-fancy-title">Complexity automation

                                </h4>
                                <div class="special-content">
                                    <p class="fancy-box-content">Scenarios can include a high number of tasks when the complexity to manage is high. Workflow Management manages this cascade of operations in order to compartmentalise executions. This means you can automate several hundred actions, like complex update processes.
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


           <section>
            <div class="container">
                <h2>Usage</h2>
                <br>
                <p>Define a workflow in a YAML file</p>
                <code class="lead bg-dark d-block p-3 text-white rounded">
                    <br>
                    ...
                    <br><br>

                    tasks:
                    <br>
                      create_server:
                  <br>
                        action: nova.servers_create
                  <br>
                        input:
                  <br>
                          name: <% $.vm_name %>
                  <br>
                          image: <% $.image_ref %>
                  <br>
                          flavor: <% $.flavor_ref %>
                  <br><br>
                  ...
                  <br>
                  <br>
                        on-success:
                      
                  <br>
                          - wait_for_instance
                  <br><br>
                   
                  
                      wait_for_instance:
                  <br>
                        action: nova.servers_find id={ { _.vm_id } } 
                        <br>status='ACTIVE' action_region=<% $.region %>
                  <br>
                  <br>
                  ...
                  <br><br>
                        publish:
                  <br>
                          vm_status: "{ { task().result.status } }"</code>
                <br>
                <p>
                    Create your workflow</p>
                <code class="lead bg-dark d-block p-3 text-white rounded">openstack workflow create workflow.yaml</code>
                <br>
                <br>
                <p>
                    Schedule an execution</p>
                <code class="lead bg-dark d-block p-3 text-white rounded">openstack cron trigger create --count 3 --pattern '*/2 * * * *' \
                    <br>
                    trigger01 create_vm '{"vm_name": "foobar", \
                    <br>
                    "image_ref": "Debian 9", "flavor_ref": "b2-30"}'


                </code>
                <br>
                
                
            </div>
        </section>
    


   
    <div class="container">
        <h3>Features</h3>
        <div class="row">
            <div class="col-lg-6">
                <h4>Mistral API

                </h4>
                <p>Workflow Management works via an official OpenStack building block — Mistral. This orchestration tool supports the YAQL and Jinja2 query and templating languages.</p>
                <br>
                
                <h4>Run several workflows simultaneously
                </h4>
                <p>To speed up the execution of certain scenarios, you can multiply the workers, and run several tasks at once as a result.</p>
                
            </div>
            <div class="col-lg-6">
                <h4>Manage dependencies</h4>
                <p>The task chain can be subject to dependency rules, to validate that they are being executed properly, or to ensure everything is in sync before the next task is carried out.


                </p>
                <br>
                <h4>Triggering of external HTTP/HTTPS calls
                </h4>
                <p>On top of being able to manage all of the OpenStack resources via APIs, Workflow Management can also trigger external calls.</p>
                
                
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
                Workflow Management billing</h2>
                <p class="text-white">Workflows and executions are free. Only the cloud resources generated (instances, volumes, etc.) are billed at their standard pricing.





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
                                        
                                        What is cloud orchestration?
    
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">Orchestration is the automation of tasks that would usually be performed manually by an operator. It offers many advantages, including systematisation, automatic event triggering, time saving, and more. Orchestration tools can be manipulated by code or via a graphical interface.</p>
    
                                </div>
                            </div>
    
                            <div class="iq-accordion-block   2">
                                <div class="iq-accordion-title">
                                    <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                    <h5 class="mb-0 accordion-title">
                                        Why is orchestration important for the cloud?
                        </h5>
                                </div>
    
                                <div class="iq-accordion-details">
    
                                    <p class="iq-content-text">Actions on services and infrastructure tend to multiply quickly, and they require advanced management. Scripting cloud resource management involves gathering all of the conditions and actions required to make a change on the cloud platform. Orchestration simplifies cloud service management, and makes it more responsive.</p>
    
                                </div>
                            </div>
    
                         
    
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Faq End -->
    

     

@endsection