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
                                    <li class="breadcrumb-item active"> Guranteed Resources</li>
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
                        A wide range of instances with guaranteed performance  </h2>
                       <p class="iq-title-desc pr-lg-5">Explore a catalogue of top-range instances, with fully-guaranteed resources. General Purpose instances have a balanced distribution of resources, and suit most uses. CPU instances are particularly powerful in terms of computing capacity. As for RAM instances, they offer a very high volume of memory.</p></div>
                       
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
                                <h4 class="iq-fancy-title"> Scalability</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> If you are not sure what sort of CPU/RAM balance you need, you can use these instances for a smooth start, with the ability to scale up or down in the future.
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
                                <h4 class="iq-fancy-title"> 100% of your resources, 100% of the time</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> With this range's guaranteed resources, you can harness the full power of your server at any time. Resources are 100% dedicated to you, providing your projects with all the power they need.
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
                                <h4 class="iq-fancy-title"> Local SSD disks</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> To ensure optimal read/write performance, hypervisors host the virtual machine disks locally. These storage points are supported by a RAID-mounted SSD disk array, to ensure durability and efficiency for your data.
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
        <h2>Our Range</h2>
       
        <table>
            <tr>
                <td></td>
                <td><img src="{{URL::asset('images/dark-cloud/Compute_GuarantedResources.png')}}" alt="Guranteed Resources">
                <h4>General Purpose</h4>
                </td>
                <td><img src="{{URL::asset('images/dark-cloud/Compute_CPU.png')}}" alt="Guranteed Resources">
                <h4>CPU</h4>
                </td>
                <td><img src="{{URL::asset('images/dark-cloud/Compute_RAM.png')}}" alt="Guranteed Resources">
                <h4>RAM</h4>
                </td>
            </tr>
            <tr>
                <th>Description</th>
                <td>Deploy cloud instances with guaranteed resources and an ideal CPU-RAM balance for a wide range of uses</td>
                <td>Get cloud servers with guaranteed resources, and particularly well-suited to applications that require high computing power</td>
                <td>Create the most suitable instances for databases, memory-intensive applications, and other RAM-intensive uses</td>
            </tr>
            <tr>
                <th>Surname</th>
                <td>b2</td>
                <td>c2</td>
                <td>r2</td>
            </tr>
            <tr>
                <th>Number of cores</th>
                <td>from 2 vCores to 32 vCores
                    <br>
                    +2 GHz</td>
                    <td>
                        from 2 vCores to 32 vCores
                        <br>
+3 GHz
                    </td>
                    <td>
                        from 2 vCores to 32 vCores
                        <br>
+2 GHz
                    </td>
            </tr>
            <tr>
                <th>Memory</th>
                <td>from 7GB to 120GB RAM</td>
                <td>from 7GB to 120GB RAM</td>
                <td>from 15GB to 240GB RAM</td>
            </tr>
            <tr>
                <th>Storage</th>
                <td>50GB - 400GB disk space</td>
                <td>50GB - 400GB disk space</td>
                <td>50GB - 400GB disk space</td>
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
                                <h4 class="iq-fancy-title"> Front-end server cluster</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> Thanks to their CPU/RAM ratio, General Purpose instances are particularly suitable for hosting the first line of a multi-tier application. Front-end server clusters, including web servers such as Apache or Nginx, may require a higher number of vCores for concurrent access.
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
                                <h4 class="iq-fancy-title"> Distributed database</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> Databases are often optimised to use a large amount of memory, which limits disk access. RAM instances provide 15 GB of RAM per vCore (except r2-15), creating optimal conditions for requests to be quickly executed on a MySQL/Galera or MongoDB engine (for example).
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
                                <h4 class="iq-fancy-title"> Specialist tasks</h4>
                                <div class="special-content">
                                    <p class="fancy-box-content"> Many applications designed to perform specific tasks (machine learning, for example) have highly specific computing requirements. Once the task in question is complete, there is no need to maintain an inactive server. CPU instances are perfect for kinds of tasks.
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
            <h2>How To</h2>
            <br>
            <p>Boot an instance</p>
            <code class="bg-dark d-block p-3 text-white rounded">openstack server create --flavor b2-60-flex --image debian server01</code>
            <br>
            <p>Resize an instance</p>
            <code class="bg-dark d-block p-3 text-white rounded">openstack server resize --flavor c2-120-flex --confirm server01</code>
            <br>
            
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <h4>Flexible</h4>
                    <p>By choosing the "flexible" option, you can increase or decrease the size of your instance at any time. You can even switch to a different family of instances, e.g. from a b2-60 model to a c2-120.</p>
                    <br><br>
                    <h4>Unlimited snapshots</h4>
                    <p>As with all instances, you can trigger a live snapshot at any time. This will replicate the state of your system disk on a dedicated space, so that you can restore it as it is later.

                    </p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h4>A wide range of operating systems</h4>
                    <p>Choose from more than 15 Linux distributions, as well as Windows and FreeBSD operating systems. You can also import your images. Many formats are supported, including those from the most popular private or public clouds.</p>
                    <br><br>
                    <h4>Add volumes</h4>
                    <p>By coupling your instances with the Block Storage service, you can add flexible storage space to them. You can also boot your instances on these additional volumes by deploying the system on this space.

                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="blue-bg iq-help">
        <div class="container">
        <div class="row">
           <div class="col-lg-12">
              <div class=" text-left iq-title-box mb-0 iq-title-white iq-title-box-2">
              <div class="iq-title-icon">
                          </div>
              
              <h2 class="iq-title text-capitalize">
                Guaranteed Resources Billing    </h2>
                <p class="text-white">Guaranteed Resources instances are billed like all of our other instances, on a pay-as-you-go basis at the end of each month. The price depends on the size of the instance you have booted, and the duration of its use.</p>
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
                                    What SLA does DarkCloud guarantee for a Guaranteed Resources instance?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">The SLA guarantees 99.999% monthly availability on Guaranteed Resources instances. For further information, please refer to the Terms & conditions. </p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   2">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can an instance be moved from one location to another?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text"> You can export an instance from one location to another, and boot it there. </p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   3">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Which hypervisor is used for instance virtualisation?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text"> Just like other instances, Guaranteed Resources instances are virtualised by the KVM hypervisor in the Linux kernel. KVM is an open-source solution that has proven its reliability for many years. VMs are fully-virtualised, with no guest system changes required. KVM also offers advanced features such as live migration for virtual machines. </p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   4">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What performance do you offer on instance disks?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text"> The disks of Guaranteed Resources instances provide at least 1,000 IOPS. Our new instances can offer up to 20,000 IOPS. </p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   5">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can I back up an instance?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">Yes, each instance can be backed up by generating an image in the Private Image Catalog. You can also schedule backups to be automated. For optimal snapshot security and consistency, we strongly recommend installing Qemu guest agent. </p>

                            </div>
                        </div>


                        <div class="iq-accordion-block   6">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Do Guaranteed Resources instances have anti-DDoS protection?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">Yes, our anti-DDoS protection is included with all DarkCloud solutions at no extra cost. </p>

                            </div>
                        </div>


                        <div class="iq-accordion-block   7">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can I use an IPv6 address on these instances?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">Yes, an IPv6 address is assigned for each instance using a public network interface. </p>

                            </div>
                        </div>


                        <div class="iq-accordion-block   8">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    How quickly can a Guaranteed Resources instance be booted?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">The time it takes to boot an instance depends on the size of the image you are using. An instance booting on a standard Linux operating system usually responds in less than 120 seconds via the network. </p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   9">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What are the main differences between a Guaranteed Resources instance and a dedicated server?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">Although the use may be quite similar in some cases, there are quite a few differences. With a dedicated server, you get hardware isolation, a wide range of choices, and limited automation. On the other hand, Guaranteed Resources instances offer hourly billing, the ability to resize your instance, and access to advanced automation with standard APIs.</p>

                            </div>
                        </div>

                        <div class="iq-accordion-block   10">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can I automate my instance configuration at startup?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">Yes, you can use an instance configuration file. This will be run when your machine launches. This file will be supported by cloud-init, which accepts different formats such as standard scripts or cloud-config syntax. </p>

                            </div>
                        </div>
                        <div class="iq-accordion-block   11">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can I migrate a Guaranteed Resources instance to another model?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">Yes, Guaranteed Resources instances are compatible with each other, and with different sub-ranges - e.g. CPU, RAM or General Purpose. The primary constraint is the disk size for the model you are migrating to. It must be equal to or greater than your current model. With the Flex variations of the ranges, you can migrate in both directions. </p>

                            </div>
                        </div>
                        <div class="iq-accordion-block   12">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can a Guaranteed Resources instance be integrated into the DarkCloud virtual private network (vRack)?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">Yes, Public Cloud private networks are a direct part of the vRack network, and connect different DarkCloud solutions to one another.</p>

                            </div>
                        </div>
                        <div class="iq-accordion-block   13">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    What regions are Guaranteed Resources instances available in?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">The Public Cloud solution is available in Europe (Gravelines, Strasbourg, London, Frankfurt, Warsaw), North America (Beauharnois) and the Asia-Pacific region (Sydney, Singapore). </p>

                            </div>
                        </div>
                        <div class="iq-accordion-block   14">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can you switch to hourly billing from an instance that is currently billed monthly?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">If you have monthly billing set up, you cannot switch to hourly billing. Before you launch an instance, please take care to select the billing method that is best suited to your project. </p>

                            </div>
                        </div>
                        <div class="iq-accordion-block   15">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can I pause my instance’s billing?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">Yes. In the OpenStack API, you can use the shelve function. It will automatically back up the instance, save the configuration, and free up the resources. When you use the unshelve function, the same process will be carried out in reverse to restore the instance to its original state.</p>

                            </div>
                        </div>
                        <div class="iq-accordion-block   16">
                            <div class="iq-accordion-title">
                                <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                                <h5 class="mb-0 accordion-title">
                                    Can I manage the placement of my instances on hypervisors?

                    </h5>
                            </div>

                            <div class="iq-accordion-details">

                                <p class="iq-content-text">Indirectly, yes. You can use affinity or anti-affinity groups that place the instances on the same hypervisor or on different hypervisors, respectively. For example, an anti-affinity group ensures that no instance works on the same hypervisor as another instance in the group. This rules out the risk of losing several instances in the same group, if a hypervisor stops working.</p>

                            </div>
                        </div>
                       







                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq End -->

    
@endsection